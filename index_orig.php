<?php



// include configuration file
include_once 'config/core.php';
 
// include the head template
//include_once "layout_head.php";

require_once 'config/database.php';

/* ini_set("post_max_size", "30M");
ini_set("upload_max_filesize", "30M"); */
	
session_start();
//include 'index1.php';
$_SESSION['app_error'] = '';
$_SESSION['company_disp_name'] = 'Suncom Mobile';
 

// Exception Handler starts
set_exception_handler('exception_handler'); 
set_error_handler("error_handler");
function error_handler($code, $message, $file, $line)
{
    if (0 == error_reporting())
    {
        return;
    }
    throw new ErrorException($message, 0, $code, $file, $line);
}
 
function exception_handler($e) { 
 
    // public message 
	
    $results = array();
	$results['errorReturnAction'] = "";
	$err = '';
	$retresult['success'] = false;
	if (contains($e->getMessage(), '18KSoftec Error:'))
	{
		$retresult['errors']  = strstr($e->getMessage(), '18KSoftec Error:');
		$results['errorMessage'] = strstr($e->getMessage(), '18KSoftec Error:');
		K18_utility::saveError(strstr($e->getMessage(), '18KSoftec Error:'));
	
	}
	else
	{
		$retresult['errors']  = $e->getMessage();
		$results['errorMessage'] = '18K Softec Error : ' . $e->getMessage() . ' - Source of Error : line - ' . $e->getLine() . ' in ' . $e->getFile() . ' Please send screen shot to Kuppuram' ;
		$err = '18K Softec Error : ' . $e->getMessage() . ' - Source of Error : line - ' . $e->getLine() . ' in ' . $e->getFile() . ' Please send screen shot to Kuppuram' ;
		K18_utility::saveError($err);
	}
	//echo $results['errorMessage'];
	
	
	echo json_encode($retresult);
	
	//echo "<a href='" . TEMPLATE_PATH . "/errorDialog.php'" . " target=\'_blank\'>Error</a>";
	
	//echo '[{"Error - status":"' . $results['errorMessage'] . '"}]'; // It seems this is good json format. but it is not returning back to called ajax function
	//trigger_error( '[{"Error - status":"' . $results['errorMessage'] . '"}]');
	
	//trigger_error( $results['errorMessage']);
	
	//require( TEMPLATE_PATH . "/errorDialog.php" );
	//viewError();
 
} 
// Exception Handler ends

// Kuppuram - 17-Sep-2014 
// Session Timeout
$timeout = 60 * 30; // Number of seconds until it times out.
//$timeout = 60 * 5; // Number of seconds until it times out.

 global $controller;
 global $controllerAction;


 //require (TEMPLATE_PATH . "/login_form.html");
 
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
if ( !$action ) $action = isset( $_POST['action'] ) ? $_POST['action'] : "login";

// Session Timeout
if ($action == "logout")
{
	logout();
}	
else
{
	// Check if the timeout field exists.
	if(isset($_SESSION['timeout'])) {
		// See if the number of seconds since the last
		// visit is larger than the timeout period.
		$duration = time() - (int)$_SESSION['timeout'];
		//fb($duration);
		if($duration > $timeout) {
			// Destroy the session and restart it.
			//logout();
			$retresult['errors'] = '18K Softec Error : ' . 'Session got timed out; please login again' ;
			$err = '18K Softec Error : ' . 'Session got timed out; please login again' ;
			K18_utility::saveError($err);
	
			echo json_encode($retresult);
			//trigger_error($err);
			session_destroy();
			require( TEMPLATE_PATH . "/login_page.php" );
			session_start();
			//header( "Refresh:0;url=login.php" );
			//logout();
			
			/* $results = array();
			$results['errorReturnAction'] = "logout";
			$results['errorMessage'] = '18K Applicator ERP Warning : Session Timed Out; Please login again' ;
			//require( TEMPLATE_PATH . "/errorDialogLogout.php" ); 
			$action(); */
		}
		else
		{
			$_SESSION['timeout'] = time(); 
			$action();
		}
	}
	else
	{ 
		// Update the timout field with the current time.
		$_SESSION['timeout'] = time(); 
		$action();
	}
	
	//$action();
} 

//trigger_error("before calling getUsers");
				
//$action();				

// returns true if $needle is a substring of $haystack
function contains($haystack, $needle)
{
	return strpos($haystack, $needle) !== false;
}

/* function login()
{

	
	require (TEMPLATE_PATH . "/login_form.html");

}
 */
function login() {

$_SESSION['conn'] = null;
  $_SESSION['18K_user'] = null;
  $results = array();
  

  if ( isset( $_POST['login'] ) ) {

    // User has posted the login form: attempt to log the user in
	//session_id(uniqid()); 
	//session_start();
    $_SESSION['app_error'] = '';	
	$user_pwd = $_POST['user_pwd'];	
	$_SESSION['user_pwd'] = $_POST['user_pwd'];
	$_SESSION['user_id'] = $_POST['user_id'];
	$_SESSION['fin_year'] = $_POST['fin_year'];
	$_SESSION['group_name'] = "";
	$now = new DateTime('now');
	$_SESSION['curr_date'] = strval($now->format('Y-m-d'));
	$_SESSION['curr_month'] = intval($now->format('m'));
	$_SESSION['curr_year'] = intval($now->format('Y'));
   
	/* echo ' $_SESSION[curr_month] - ' . $_SESSION['curr_month'];
	echo ' $_SESSION[curr_year] - ' . $_SESSION['curr_year'];
	echo ' $_SESSION[fin_year] - ' . $_SESSION['fin_year']; */
	
	//echo ' $_SESSION[curr_date] - ' . $_SESSION['curr_date']; 
	
	if ($user = K18_user::checkuserid( $_POST['user_id'] , $_POST['user_pwd']))
	{
		//echo 'User exists - Login successful - time - ' . time();
		$_SESSION['18K_user'] = $user;
		//echo $_SESSION['user_id'];
		if ($_SESSION['user_id'] == $user_pwd )
		{
			require( TEMPLATE_PATH . "/changePassword_page.php" );
			return;		
		}
		else
		if ( $user->checkPassword( $_POST['user_pwd'] ) ) {
			//echo 'User PWD matches - Login successful - time - ' . time();
			// Login successful: Create a session and redirect to the to-do list
			//$user->createLoginSession();
			$_SESSION['session_id'] = session_id();
			$_SESSION['login_status'] = 'SUCCESS';
			$_SESSION['company_id'] = $user->company_id;
			$_SESSION['company_seq'] = $user->company_seq;
			$_SESSION['company_name'] = $user->company_name;
			$_SESSION['user_id'] = $user->login_user_id;
			$_SESSION['user_name'] = $user->user_name;
			$_SESSION['login_user_id'] = $user->login_user_id;
			$_SESSION['last_master_update_date'] = $user->last_master_update_date;
			$_SESSION['company_address1'] = $user->company_address1;
			$_SESSION['company_address2'] = $user->company_address2;
			$_SESSION['company_city'] = $user->company_city;
			$_SESSION['company_state'] = $user->company_state;
			$_SESSION['company_pincode'] = $user->company_pincode;
			$_SESSION['company_country'] = $user->company_country;
			$_SESSION['cin_no'] = $user->cin_no;
			$_SESSION['company_phone'] = $user->company_phone;
			$_SESSION['company_email'] = $user->company_email;
			$_SESSION['tin_no'] = $user->tin_no;
			$_SESSION['cst_no'] = $user->cst_no;
			$_SESSION['cst_date'] = $user->cst_date;
			$_SESSION['service_tax_no'] = $user->service_tax_no;
			$_SESSION['pancard_no'] = $user->pancard_no;
			$_SESSION['ucwords'] = "";
			$_SESSION['uid'] = $user->uid;
			$_SESSION['name'] = $user->name;
			//$group = K18_group::getGroupFirst();
			//$_SESSION['group'] = $group;
			//$_SESSION['group_name'] = $_SESSION['group']->group_name;
			
			//$_SESSION['template_id_ff'] = 'TFF0001';
			//$_SESSION['template_id_grid'] = 'TGR0001';
			
			// Kuppuram
			// 23-Sep-2014
			// For Listing based on reporting_to structure
			$_SESSION['reporting_to'] = $user->login_user_id;
			/* if (contains($GLOBALS['super_reporting_to'], $_SESSION['user_id']))
			{
				$_SESSION['reporting_to'] = 'SH0001';
			}
			else
			{
				$_SESSION['reporting_to'] = $user->login_user_id;
			} */
			
			$_SESSION['reportees'] = '';
			//crm_dropdown::fn_list_userid_reporting_to();
			//trigger_error("SERVER_ADDR- " . $_SERVER['SERVER_ADDR']);
			
			if (!isset($_SESSION['reportees']))
			{
				$_SESSION['reportees'] = '';
			}
			
			//trigger_error('reportees - ' . $_SESSION['reportees']);
			
			// Change  Log 2014.04.25-1
			// 25-Apr-2014 - Kuppuram
			$_SESSION['short_designation'] = substr($_SESSION['user_id'],0,2);
			$_SESSION['user_name'] = $user->user_name;
			$_SESSION['user_email'] = $user->user_email;
			$_SESSION['department'] = $user->department;
			$_SESSION['designation'] = $user->designation;
			$_SESSION['region_code'] = $user->region_code;
			//$_SESSION['role'] = $user->role;
			$_SESSION['reporting_to'] = $user->reporting_to;
			$_SESSION['division_code'] = $user->division_code;
			
			/* $ret = $user->createLoginSession();
			if ($ret == false)
			{	
				$results['errorReturnAction'] = "login";
				$results['errorMessage'] = "Problem in creating session. Please try again.";
				require( TEMPLATE_PATH . "/errorDialog.php" );
				return;
			} */	
		
			if ($_SESSION['user_id'] == $user_pwd )
			{
				require( TEMPLATE_PATH . "/changePassword_page.php" );
			}
			else
			{
				/* if (!$results['menus'] = K18_uar::getUserAccessRights_menu( $_SESSION['user_id'], $_SESSION['company_id'] ))
				{
					$_SESSION['app_error'] = '';

					$results['errorReturnAction'] = "login";
					if ($_SESSION['app_error'] == '')
					{
						$results['errorMessage'] = "User Menu Rights are not assigned; Please contact IT Admin.";
					}
					else
					{
						$results['errorMessage'] = $_SESSION['app_error'];
						$_SESSION['app_error'] = '';
					}	
					//require( TEMPLATE_PATH . "/errorDialog.php" );
				}
				$_SESSION['uar'] = $results['menus']; */
				
				/* foreach ($_SESSION['uar'] as $menurights) {
					if ($menurights->menu_user_id == $_SESSION['user_id'] && $menurights->menu_id == '02')
					{
						echo '....................................................................................................menurights is ' . $menurights->menu_user_id . ' - ' . $menurights->menu_id . ' - ' . $menurights->approval_level . "\n";
						//$level = $menurights->approval_level;
					}	
				} */
				$_SESSION['login_user_id'] = $_POST['user_id'];
				$user_name = $_SESSION['login_user_id'];
				//$all_menu_rights = $_SESSION['uar'];
				homePage();

				
			}
		
		}
		
		// Change Log - 2014.05.02-1
		// 02-May-2014 - Kuppuram
		// If password given in the login form does not match, the app should throw proper error
		else
		{
			$results['errorReturnAction'] = "login";
			$results['errorMessage'] = "User Not Found or Incorrect user id or password. Please try again.";
			//require( TEMPLATE_PATH . "/errorDialog.php" );
		}
    } 
	else {
			$results['errorReturnAction'] = "login";
			if ($_SESSION['app_error'] == '')
			{
				$results['errorMessage'] = "User Not Found or Incorrect user id or password. Please try again.";
			}
			else
			{
				$results['errorMessage'] = $_SESSION['app_error'];
				$_SESSION['app_error'] = '';
			}	
			// Login failed: display an error message to the user
			//require( TEMPLATE_PATH . "/errorDialog.php" );
		}

    } else {

    // User has not posted the login form yet: display the form
	//echo 'Login successful - time - ' . time(); ;
    require( TEMPLATE_PATH . "/login_page.php" );
	//require( TEMPLATE_PATH . "/login_form.html" );
	//require( "index.html" );
  }
}

/* function excelOpen()
{
	 require( TEMPLATE_PATH . "/excelOpen.php" );
} */

function handleRequest()
{
	$controller = "K18_Controller";
	$controllerAction = "";
	if (isset($_REQUEST['c']))
	{
		$controller = $_REQUEST['c'];
		$controllerAction = $_REQUEST['a'];
	}
	
	$c = null;
	
	//echo $controller . " - " . $controllerAction;
	switch ($controller)
	{
		case "K18_Controller" :
			$c = new K18_Controller();
			$c->handleRequest($controllerAction);
			break;
		
	}		
}


function logout() {
	unset( $_SESSION['user_id'] );
	session_destroy();
	login();
}

function blankPage()
{
	require( TEMPLATE_PATH . "/blankPage.php" );
}

function homePage()
{
	/* if (isset( $_POST['from_date4select'] ))
	{
		$_SESSION['from_date4select_followup'] = $_POST['from_date4select'];
		$_SESSION['to_date4select_followup'] = $_POST['to_date4select'];
		
		
	}	
	else
	{
		unset($_SESSION['from_date4select_followup']);
		unset($_SESSION['to_date4select_followup']);
	} */
	require( TEMPLATE_PATH . "/home_page.php" );
	//require( TEMPLATE_PATH . "/blankPageMenu.php" );
	//require( TEMPLATE_PATH . "/groupSelection.php" );
}

function viewChangePasswordPage()
{
	require( TEMPLATE_PATH . "/changePassword_page.php" );
}

// Save Regular Expense
function saveRegExp() {

	$results = array();
	$results['errorReturnAction'] = "saveRegExp";
	if ($_REQUEST['mode'] == 'add')
	{
		regular_expense::add();
	}
	else if ($_REQUEST['mode'] == 'update')
	{
		regular_expense::update();
	}
	if ($_REQUEST['mode'] == 'approve')
	{
		regular_expense::approve();
	}
}

function userCreation() {

	$results = array();
	$results['errorReturnAction'] = "userCreation";
	if ($_REQUEST['mode'] == 'add')
	{
		userCreation::add();
	}
	else if ($_REQUEST['mode'] == 'update')
	{
		userCreation::update();
	}
	if ($_REQUEST['mode'] == 'delete')
	{
		userCreation::deleteuser();
	}
}

function storesCreation() {

	$results = array();
	$results['errorReturnAction'] = "storesCreation";
	if ($_REQUEST['mode'] == 'add')
	{
		storesCreation::add();
	}
	else if ($_REQUEST['mode'] == 'update')
	{
		storesCreation::update();
	}
	if ($_REQUEST['mode'] == 'delete')
	{
		storesCreation::deletestores();
	}
}

function userProfileUpdate() {

	$results = array();
	$results['errorReturnAction'] = "userProfileUpdate";

		userProfile::update();


}
// Assign Ticket Tech

function saveTicketAssignee()
{
	ticket_update::update();
}

/* function getRegExpenseApproval() {

  //getData::getRegExpenseApproval();
  echo getRegExpenseApproval1();
} */

/* function getExpenselookup() {

  //getData::getExpenselookup();
  echo getExpenselookup1();
} */

// Changes Password
// Password reset
function staticresetpwd() {
	$login_user_id = isset( $_REQUEST['reset_login_user_id'] ) ? $_REQUEST['reset_login_user_id'] : "";
	K18_User::staticresetpwd($login_user_id);
	echo '<script>window.location="index.php?action=homePage"</script>';
	//homePage();
	
} 
 

function changePassword() {

  $results = array();
  $results['errorReturnAction'] = "changePassword";



    // User has posted the password edit form
    $retresult = array();
	$currentPassword = isset( $_REQUEST['currentPassword'] ) ? $_REQUEST['currentPassword'] : "";
    $newPassword = isset( $_REQUEST['newPassword'] ) ? $_REQUEST['newPassword'] : "";
    $newPasswordConfirm = isset( $_REQUEST['newPasswordConfirm'] ) ? $_REQUEST['newPasswordConfirm'] : "";
	$user = K18_User::checkuserid( $_SESSION['company_id'],$_SESSION['user_id'], $currentPassword );
    
	if (!$user)
	{
		
		$retresult['success'] = false;
		$retresult['errors'] =  "18KSoftec Error: Please give correct credentials.";
		K18_utility::saveError("18KSoftec Error: Please give correct credentials.");
		trigger_error("18KSoftec Error: Please give correct credentials.");
		
		/* $results['errorMessage'] = "Please give correct credentials.";
		require( TEMPLATE_PATH . "/errorDialog.php" ); */
		return;
	}
    // Do some checks
	
	// Change Log - 2014.04.30-1
	// 30-Apr-2014 - Kuppuram
	// Checking for correct Current Password

	if ( !$user->checkPassword( $currentPassword ) ) 
	{
		$results['errorMessage'] = "Current Password is not valid. Please try again.";
		trigger_error("18KSoftec Error: Please give correct credentials.");
		//require( TEMPLATE_PATH . "/errorDialog.php" );
		return;
	} 
	
	/* if ( $newPassword == $currentPassword ) {
      $results['errorMessage'] = "Current Password and New Password cannot be the same. Please try again.";
      require( TEMPLATE_PATH . "/errorDialog.php" );
      return;
    }

    if ( !$currentPassword || !$newPassword || !$newPasswordConfirm ) {
      $results['errorMessage'] = "Please fill in all the fields in the form.";
      require( TEMPLATE_PATH . "/errorDialog.php" );
      return;
    }

    if ( $newPassword != $newPasswordConfirm ) {
      $results['errorMessage'] = "The two new passwords you entered didn't match. Please try again.";
      require( TEMPLATE_PATH . "/errorDialog.php" );
      return;
    } */


    // All OK: change password
    
    $ret = $user->updatepwd($currentPassword, $newPassword );
	if ($ret = 'SUCCESS')
	{
		$retresult['success'] = true;
		$retresult['errors'] =  "18KSoftec Error: Password has been changed successfully.";
		//echo json_encode($retresult);
		return;
	}
	else
	{
		$retresult['success'] = false;
		$retresult['errors'] =  "18KSoftec Error: Password change failed...Please try again...";
		//echo json_encode($retresult);
		return;
	}

}

function inprocess()
{
require( TEMPLATE_PATH . "/inprocess_page.php" );
}

function globalsearch()
{
require( TEMPLATE_PATH . "/global_search.php" );
}

//include_once "layout_foot.php";
?>
