<?php

/**
 * Class to handle User
 */

class K18_User
{
  // Properties

public $company_name = null;
 
 /**
 * @var varchar(10) 
 */
public $company_id = null;

public $company_seq = null;

/**
 * @var varchar(10) 
 */
public $user_id = null;

/**
 * @var varchar(10) 
 */
public $login_user_id = null;

/**
 * @var varchar(120) 
 */
public $user_name = null;

/**
 * @var varchar(120) 
 */
public $nick_name = null;

/**
 * @var varchar(120) 
 */
public $user_email = null;

/**
 * @var varchar(120) 
 */
public $user_phone = null;

/**
 * @var varchar(260) 
 */
public $user_pwd = null;

public $pass = null;

/**
 * @var varchar(120) 
 */
public $staff_id = null;

/**
 * @var varchar(10) 
 */
public $reporting_to = null;

/**
 * @var varchar(120) 
 */
public $work_location = null;

/**
 * @var varchar(120) 
 */
public $region_code = null;

/**
 * @var varchar(120) 
 */
public $branch_code = null;

/**
 * @var varchar(120) 
 */
public $department = null;

/**
 * @var varchar(120) 
 */
public $designation = null;

/**
 * @var varchar(10) 
 */
public $designation_code = null;

/**
 * @var varchar(10) 
 */
public $division_code = null;

/**
 * @var varchar(10) 
 */
public $zone_code = null;

/**
 * @var varchar(10) 
 */
public $country_code = null;

/**
 * @var varchar(40) 
 */
public $status = null;

/**
 * @var date 
 */
public $active_effective_from = null;

/**
 * @var date 
 */
public $active_effective_to = null;

/**
 * @var varchar(10) 
 */
public $createdby = null;

/**
 * @var datetime 
 */
public $createdon = null;

/**
 * @var varchar(10) 
 */
public $modifiedby = null;

/**
 * @var datetime 
 */
public $modifiedon = null;


/**
 * @var varchar(120) area_code
 */
public $area_code = null;

/**
 * @var varchar(120) area_name
 */
public $area_name = null;

/**
 * @var plaintextPassword
 */
public $plaintextPassword = null;

/**
 * @var last_master_update_date
 */
public $last_master_update_date = null;

public $company_address1 = null;
public $company_address2 = null;
public $company_city = null;
public $company_state = null;
public $company_pincode = null;
public $company_country = null;
public $company_phone = null;
public $company_email = null;
public $cin_no = null;
public $tin_no = null;
public $cst_no = null;
public $cst_date = null;
public $service_tax_no = null;
public $pancard_no = null;

  /**
  * Sets the object's properties using the values in the supplied array
  *
  * @param assoc The property values
  */

  public function __construct( $data=array() ) {
    if ( isset( $data['ID'] ) ) $this->ID  =  (int)$data['ID'];
	if ( isset( $data['plaintextPassword'] ) ) $this->plaintextPassword = $data['plaintextPassword'];
	
	if ( isset( $data['area_code'] ) ) $this->area_code  =  $data['area_code'];
	if ( isset( $data['area_name'] ) ) $this->area_code  =  $data['area_name'];
	if ( isset( $data['company_name'] ) ) $this->company_name  =  $data['company_name'];
	if ( isset( $data['last_master_update_date'] ) ) $this->last_master_update_date  =  $data['last_master_update_date'];
	
	if ( isset( $data['company_id'] ) ) $this->company_id  =  $data['company_id'];
	if ( isset( $data['company_seq'] ) ) $this->company_seq  =  $data['company_seq'];
	if ( isset( $data['user_id'] ) ) $this->user_id  =  $data['user_id'];
	if ( isset( $data['login_user_id'] ) ) $this->login_user_id  =  $data['login_user_id'];
	if ( isset( $data['user_name'] ) ) $this->user_name  =  $data['user_name'];
	if ( isset( $data['nick_name'] ) ) $this->nick_name  =  $data['nick_name'];
	if ( isset( $data['user_email'] ) ) $this->user_email  =  $data['user_email'];
	if ( isset( $data['user_phone'] ) ) $this->user_phone  =  $data['user_phone'];
	if ( isset( $data['user_pwd'] ) ) $this->user_pwd  =  $data['user_pwd'];
	if ( isset( $data['pass'] ) ) $this->pass  =  $data['pass'];
	if ( isset( $data['uid'] ) ) $this->uid  =  $data['uid'];
	if ( isset( $data['name'] ) ) $this->name  =  $data['name'];
	if ( isset( $data['staff_id'] ) ) $this->staff_id  =  $data['staff_id'];
	if ( isset( $data['reporting_to'] ) ) $this->reporting_to  =  $data['reporting_to'];
	if ( isset( $data['work_location'] ) ) $this->work_location  =  $data['work_location'];
	if ( isset( $data['region_code'] ) ) $this->region_code  =  $data['region_code'];
	if ( isset( $data['branch_code'] ) ) $this->branch_code  =  $data['branch_code'];
	if ( isset( $data['department'] ) ) $this->department  =  $data['department'];
	if ( isset( $data['designation'] ) ) $this->designation  =  $data['designation'];
	if ( isset( $data['designation_code'] ) ) $this->designation_code  =  $data['designation_code'];
	if ( isset( $data['division_code'] ) ) $this->division_code  =  $data['division_code'];
	if ( isset( $data['zone_code'] ) ) $this->zone_code  =  $data['zone_code'];
	if ( isset( $data['country_code'] ) ) $this->country_code  =  $data['country_code'];
	if ( isset( $data['status'] ) ) $this->status  =  $data['status'];
	if ( isset( $data['active_effective_from'] ) ) $this->active_effective_from  =  $data['active_effective_from'];
	if ( isset( $data['active_effective_to'] ) ) $this->active_effective_to  =  $data['active_effective_to'];
	if ( isset( $data['createdby'] ) ) $this->createdby  =  $data['createdby'];
	if ( isset( $data['createdon'] ) ) $this->createdon  =  $data['createdon'];
	if ( isset( $data['modifiedby'] ) ) $this->modifiedby  =  $data['modifiedby'];
	if ( isset( $data['modifiedon'] ) ) $this->modifiedon  =  $data['modifiedon'];
	if ( isset( $data['company_address1'] ) ) $this->company_address1  =  $data['company_address1'];
	if ( isset( $data['company_address2'] ) ) $this->company_address2  =  $data['company_address2'];
	if ( isset( $data['company_city'] ) ) $this->company_city  =  $data['company_city'];
	if ( isset( $data['company_state'] ) ) $this->company_state  =  $data['company_state'];
	if ( isset( $data['company_pincode'] ) ) $this->company_pincode  =  $data['company_pincode'];
	if ( isset( $data['company_country'] ) ) $this->company_country  =  $data['company_country'];
	if ( isset( $data['cin_no'] ) ) $this->cin_no  =  $data['cin_no'];
	if ( isset( $data['company_phone'] ) ) $this->company_phone  =  $data['company_phone'];
	if ( isset( $data['company_email'] ) ) $this->company_email  =  $data['company_email'];
	if ( isset( $data['tin_no'] ) ) $this->tin_no  =  $data['tin_no'];
	if ( isset( $data['cst_no'] ) ) $this->cst_no  =  $data['cst_no'];
	if ( isset( $data['cst_date'] ) ) $this->cst_date  =  $data['cst_date'];
	if ( isset( $data['service_tax_no'] ) ) $this->service_tax_no  =  $data['service_tax_no'];
	if ( isset( $data['pancard_no'] ) ) $this->pancard_no  =  $data['pancard_no'];

	  }

public function crud_K18_User($imode)
	{
	$arr=array();
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$st = '';
	$status = 'Active';
	$retresult = array();
	$errors = array();
	try
	{
		$conn->beginTransaction();
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$st = $conn->prepare('CALL sp_crud_k18_user(?,?,?,?,?,
												    ?,?,?,?,?,
													?,?,?)');


			$st->bindValue(1,$imode, PDO::PARAM_STR );
			$st->bindValue(2,$_SESSION['company_id'], PDO::PARAM_STR );
			$st->bindValue(3,$_SESSION['user_id'], PDO::PARAM_STR );
			$st->bindValue(4,$this->login_user_id, PDO::PARAM_STR );
			$st->bindValue(5,$this->user_name, PDO::PARAM_STR );
			$st->bindValue(6,$this->user_email, PDO::PARAM_STR );
			$st->bindValue(7,$this->user_phone, PDO::PARAM_STR );
			$st->bindValue(8,$this->staff_id, PDO::PARAM_STR );
			$st->bindValue(9,$this->reporting_to, PDO::PARAM_STR );
			$st->bindValue(10,$this->work_location, PDO::PARAM_STR );
			$st->bindValue(11,$this->department, PDO::PARAM_STR );
			$st->bindValue(12,$this->designation, PDO::PARAM_STR );
			$st->bindValue(13,$this->status, PDO::PARAM_STR );
			$st->execute();
		}
		catch (PDOException $e) {
			$retresult['success'] = false;
			K18_utility::saveError($e->getMessage());
			if (contains($e->getMessage(), '18KSoftec Error:'))
			{
					$retresult['errors']  = strstr($e->getMessage(), '18KSoftec Error:');
			}
			else
			{
					$retresult['errors']  = $e->getMessage();
			}
			echo json_encode($retresult);
			$conn = null;
			return;
		}
		$conn->commit();
		$conn = null;
		$retresult['success'] = true;
		$retresult['posted']  = 'Data successfully updated';
		echo json_encode($retresult);
	}
	
	
		
	public static function getListofUsers( ) 
	{	
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$qry = '';
		try
		{
			// Admin ,  Sales Head, GM-Business Dev can edit all the details for all the users
			//if ($_SESSION['designation'] == 'Admin' || $_SESSION['designation'] == 'Sales Head' || $_SESSION['designation'] == 'Business Dev Manager' )
			$designation = substr($_SESSION['user_id'],0,2);
			if ($designation == 'A0' || $designation == 'DI' || $designation == 'GM' )
			{
				$qry = "SELECT * from k18_user where company_id = '" . $_SESSION['company_id'] . "'" . " ORDER BY user_name";
			}
			else
			{
				// User other than Admin ,  Sales Head, GM-Business Dev can edit phone number and email for his user id
				$qry = "SELECT * from K18_user where company_id = '" . $_SESSION['company_id'] . "'" . " and login_user_id = '" . $_SESSION['user_id'] . "'";
			}
			//$st = $conn->prepare( "SELECT *	from K18_user ORDER BY user_name");
			$st = $conn->prepare( $qry);
			//$st->bindValue( ":user_id", $user_id, PDO::PARAM_STR );
			$st->execute();
			//$st->setAttribute(PDO::FETCH_ASSOC);
			$arr = $st->errorInfo();
			$list = array();
			$list = $st->fetchAll(PDO::FETCH_ASSOC);
			/* while ( $row = $st->fetch() ) {
				$list[] = new K18_user( $row );
			} */
			/* while ( $row = $st->fetch() ) {
					$list[] = array(
				'user_name' => $row['user_name'],
				'user_email' => $row['user_email'],
			'user_phone' => $row['user_phone'],
			'region_code' => $row['region_code'],
			'designation' => $row['designation']
			);
			} */
		}
		catch (PDOException $e) {
			trigger_error( "Get K18_user: Couldn't execute query" . $e->getMessage());
			trigger_error( "Get K18_user: Couldn't execute query - Statement" . $arr[2]);
			$conn = null;
		}
		$conn = null;
		//return $list;
		echo json_encode($list);
	}
	
	public static function getByID( $login_user_id) 
	{	$row = null;
		try
		{
			$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
			$st = $conn->prepare( "SELECT a.*, b.last_master_update_date 
			from k18_user a, k18_company b 
			WHERE  a.login_user_id = :login_user_id
			and a.company_id = :company_id
			and a.company_id = b.company_id");
			$st->bindValue( ":company_id", $_SESSION["company_id"], PDO::PARAM_STR );
			$st->bindValue( ":login_user_id", $login_user_id, PDO::PARAM_STR );
			$st->execute();
			$arr = $st->errorInfo();
			$row = $st->fetch();
		}
		catch (PDOException $e) {
			trigger_error( "Get K18_user: Couldn't execute query" . $e->getMessage());
			trigger_error( "Get K18_user: Couldn't execute query - Statement" . $arr[2]);
			$conn = null;
		}
		$conn = null;
		 if ( $row ) return new K18_user( $row );
	}
	
	
	
	
	
  /**
  * Destroy a login session, logging the user out.
  */

	function destroyLoginSession() {
		unset( $_SESSION['user_id'] );
		session_destroy();

		if ( isset( $_COOKIE[session_name()] ) ) {
		  setcookie( session_name(), "", time()-3600, "/" );
		}
	}
  
   // this is for CRM 
	public static function checkuserid_old( $company_id, $user_id, $user_pwd ) {
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$user = null;
	$row = null;
	try
		{
			
			
			$st = $conn->prepare( "SELECT a.user_email, a.user_pwd, a.status,  a.company_id, 
							b.company_name,
							a.login_user_id, a.user_name, a.department, a.designation, a.reporting_to, 
							a.region_code, a.division_code, b.company_address1, b.company_address2,
							b.company_city, b.company_state, b.company_pincode, b.company_country, 
							b.company_phone, b.company_email, b.cin_no, b.tin_no, b.cst_no, 
							date_format(b.cst_date,'%d/%m/%Y') as cst_date,
							b.service_tax_no, b.pancard_no
							FROM k18_user a inner join k18_company b on a.company_id = b.company_id
							WHERE a.status = 'Active' and a.login_user_id = :user_id
							and a.company_id = :company_id");
							
							
			$st->bindValue( ":user_id", $user_id, PDO::PARAM_STR );
			//$st->bindValue( ":company_id", $company_id, PDO::PARAM_STR );	
			
			$st->execute();
			$row = $st->fetch();
		}	
		catch (PDOException $e) {
			trigger_error( "Get Menu: Couldn't execute query" . $e->getMessage());
			//trigger_error( "Get Menu: Couldn't execute query - Statement" . $arr[2]);
			$conn = null;
			$_SESSION['app_error'] = $e->getMessage();
			return false;
		}
		
		if ( $row ) 
		{
			try
			{
				$designation = substr($_SESSION['user_id'],0,2);
				$user = new K18_user( $row );
				if (!$user->checkPassword($user_pwd)){
					trigger_error( "Login Failed: Invalid user or password");
					$conn = null;
					$_SESSION['app_error'] = $e->getMessage();
					$user = null; // Added by Kuppuram on 07-Jul-17
					return false;
				}
				else
				{
					try
					{
						$st = $conn->prepare( "select case ifnull(first_login,'No') 
								when 'Yes' then 'No'
								when 'No' then 'Yes'
								end as first_time_login
								FROM cric_user_profile a 
								WHERE a.status = 'Active' 
								and a.login_user_id = :user_id
								union
								select 'Yes' as first_time_login
								limit 1
								");
									
						$st->bindValue( ":user_id", $user_id, PDO::PARAM_STR );
						
						$st->execute();
						$row = $st->fetch();
						if ( $row )
						{
							if ($row['first_time_login'] == 'No')
							{
								$_SESSION['first_time_login'] = 'No';
							}
							else
							{
								$_SESSION['first_time_login'] = 'Yes';
							}
						}
						else
						{
							$_SESSION['first_time_login'] = 'Yes';
						}
					}	
					catch (PDOException $e) {
						trigger_error( "Get Menu: Couldn't execute query" . $e->getMessage());
						//trigger_error( "Get Menu: Couldn't execute query - Statement" . $arr[2]);
						$conn = null;
						$_SESSION['app_error'] = $e->getMessage();
						return false;
					}
				}
				// Change Log - 2014.04.23-1
				// 23-Apr-2014 - Kuppuram
				// When Application is run in the server, user related details will not be removed
				
				/* if ($_SERVER['SERVER_ADDR'] <> '172.16.32.140')
				//if (trim($_SERVER['SERVER_ADDR']) <> '127.0.0.1') 
				{
					
				
					//if ($designation <> 'A0' && $designation <> 'SH' && $designation <> 'DM' )
				
					$conn->beginTransaction();
					
					$st = $conn->prepare( "delete FROM crm_user_areas WHERE login_user_id <> :user_id");
										
					$st->bindValue( ":user_id", $user_id, PDO::PARAM_STR );
					
					$st->execute();
					$conn->commit();
					
					$conn->beginTransaction();
					
					$st = $conn->prepare( "delete FROM crm_target WHERE engr_user_id <> :user_id");
										
					$st->bindValue( ":user_id", $user_id, PDO::PARAM_STR );
					
					$st->execute();
					$conn->commit();
					
					$conn->beginTransaction();
					
					$st = $conn->prepare( "delete FROM crm_user WHERE login_user_id <> :user_id");
										
					$st->bindValue( ":user_id", $user_id, PDO::PARAM_STR );
					
					$st->execute();
					$conn->commit();
					$conn->beginTransaction();
					$st = $conn->prepare( "delete FROM crm_menu_user_rights WHERE menu_user_id <> :user_id");
										
					$st->bindValue( ":user_id", $user_id, PDO::PARAM_STR );
					
					$st->execute();
					$conn->commit(); 
				} */
			}
			catch (PDOException $e) {
				trigger_error( "Get Menu after deleting users: Couldn't execute query" . $e->getMessage());
				//trigger_error( "Get Menu: Couldn't execute query - Statement" . $arr[2]);
				$conn = null;
				$_SESSION['app_error'] = $e->getMessage();
				return false;
			}
			
			$conn = null;
			return $user;
		}
		else
		{
			trigger_error( "Login Failed: Invalid user or password");
			$conn = null;
			$_SESSION['app_error'] = $e->getMessage();
			return false;
		}
	
	}
	
	public static function checkuserid( $user_id, $user_pwd ) {
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$user = null;
	$row = null;
	try
		{
			
			
			$st = $conn->prepare( "SELECT a.* from users a 
			join sun_settings_user_auth b
			on a.uid = b.uid
			where a.name=:user_id");
			
			// sun_settings_user_auth			
							
			$st->bindValue( ":user_id", $user_id, PDO::PARAM_STR );
			//$st->bindValue( ":company_id", $company_id, PDO::PARAM_STR );	
			
			$st->execute();
			$row = $st->fetch();
		}	
		catch (PDOException $e) {
			trigger_error( "Get Menu: Couldn't execute query" . $e->getMessage());
			//trigger_error( "Get Menu: Couldn't execute query - Statement" . $arr[2]);
			$conn = null;
			$_SESSION['app_error'] = $e->getMessage();
			return false;
		}
		
		if ( $row ) 
		{
			try
			{
				$designation = substr($_SESSION['user_id'],0,2);
				$user = new K18_user( $row );
				// Kuppuram - the following checkPassword is commented as per request from Binay on - 17-Oct-17
				/* if (!$user->checkPassword($user_pwd)){
					trigger_error( "Login Failed: Invalid Username or Password");
					$conn = null;
					$_SESSION['app_error'] = $e->getMessage();
					$user = null; // Added by Kuppuram on 07-Jul-17
					return false;
				} */
				
			}
			catch (PDOException $e) {
				trigger_error( "Get Menu after deleting users: Couldn't execute query" . $e->getMessage());
				//trigger_error( "Get Menu: Couldn't execute query - Statement" . $arr[2]);
				$conn = null;
				$_SESSION['app_error'] = $e->getMessage();
				return false;
			}
			
			$conn = null;
			return $user;
		}
		else
		{
			trigger_error( "Login Failed: Invalid user");
			$conn = null;
			$_SESSION['app_error'] = $e->getMessage();
			return false;
		}
	
	}
	

	public static function staticresetpwd($login_user_id) {
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$newPassword = 'teA4Qu6ZkjaYM';
		try 
		{
			
			$conn->beginTransaction();
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$st = $conn->prepare( "update k18_user set user_pwd = :newpassword 
										where login_user_id = :login_user_id");
										
			$st->bindValue( ":newpassword" ,$newPassword, PDO::PARAM_STR );
			$st->bindValue( ":login_user_id", $login_user_id, PDO::PARAM_STR );
			if ( $res = $st->execute() ) 
			{	
				$arr = $st->errorInfo();
				$ret = 'SUCCESS';
			}
			else
			{
				$retresult['success'] = false;
				K18_utility::saveError('Error from resetpwd ' . $e->getMessage());
				echo json_encode($retresult);
				$conn = null;
				return;
				
			} 
		}
		catch (PDOException $e) {
			$retresult['success'] = false;
			K18_utility::saveError('Error from resetpwd ' . $e->getMessage());
			if (contains($e->getMessage(), '18KSoftec Error:'))
			{
				$retresult['errors']  = strstr($e->getMessage(), '18KSoftec Error:');
				//K18_utility::saveError($e->getMessage());
			}
			else
			{
				$retresult['errors']  = $e->getMessage();
				//K18_utility::saveError($e->getMessage());
			}
			echo json_encode($retresult);
			$conn = null;
			return;
		}
		$conn->commit();
		$conn = null;
		$retresult['success'] = true;
		$retresult['posted']  = 'Password has been reset successfully';
		//echo json_encode($retresult);
		echo '<script> alert("Password has been reset successfully") </script>';
		//echo "<a href=\"views\blankPage.php\" target=\"_blank\">title</a>";  
		
	
	}
	
	public static function staticupdatepwd($currentPassword, $newPassword) {
		$arr = array();
		$res = 0;
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		//$status = 'A';
		$imode =2;
		$pwd = '0';
		$ret = '';
		
		$st = null;
		$newPassword1 = '';
		try 
		{
			
			
			
			$conn->beginTransaction();
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
			if ($_SESSION['user_id'] <> 'A0001' && $currentPassword == $_SESSION['user_id'] && $newPassword == $_SESSION['user_id'])
			{
				$newPassword1 = strtolower(substr($newPassword,0,2)) . substr($newPassword,2,4);
				//$newPassword1 = crm_user::generatePassword();
				//trigger_error( "User Passowrd Generate(): - New Password - " . $_SESSION['plaintextPassword']);
				$newPassword = K18_User::staticencryptPWD($newPassword1);
				//trigger_error( "User Passowrd update(): newPassword1 - " . $newPassword1 . ' - $newPassword - ' . $newPassword);
				$st = $conn->prepare( "update k18_user set user_pwd = :newpassword 
										where login_user_id = :user_id and company_id = :company_id");
									
				$st->bindValue( ":newpassword" ,$newPassword, PDO::PARAM_STR );
				$st->bindValue( ":user_id", $_SESSION['user_id'], PDO::PARAM_STR );
				$st->bindValue( ":company_id", $_SESSION['company_id'], PDO::PARAM_STR );
			}	
			else
			{
				//echo "user_pwd - " . $_SESSION['user_pwd'];
				//echo "newPassword - " . $newPassword;
				if ($_SESSION['user_pwd'] == $newPassword )
				{
					$retresult['success'] = false;
					K18_utility::saveError('Current Password and New Password can not be the same');
					
					$retresult['errors']  = 'Current Password and New Password can not be the same';
					
					echo json_encode($retresult);
					$conn = null;
					return;
				}
				else
				{
					//$currentPassword = User::encryptPWD($currentPassword);
					$newPassword = K18_User::staticencryptPWD($newPassword);
					//trigger_error( "User Passowrd update(): Current Password - " . $currentPassword . " - New Password - " . $newPassword);
					//trigger_error( "User Passowrd update(): New Password - " . $newPassword);
					//echo '$newPassword - $newPassword ' . $newPassword ;
					$st = $conn->prepare( "update k18_user set user_pwd = :newpassword 
											where login_user_id = :user_id and company_id = :company_id");
										
					$st->bindValue( ":newpassword" ,$newPassword, PDO::PARAM_STR );
					$st->bindValue( ":user_id", $_SESSION['user_id'], PDO::PARAM_STR );
					$st->bindValue( ":company_id", $_SESSION['company_id'], PDO::PARAM_STR );
					//$st->bindValue( ":currentpassword", $currentPassword, PDO::PARAM_STR );
				}
			}
			
			/* if ($_SESSION['user_id'] == 'A0001')
			{
				$ret = 'For User A0001, Password cannot be reset';
				$conn = null;
				return $ret;
			} */
			
			if ( $res = $st->execute() ) 
			{	
				$arr = $st->errorInfo();
				$ret = 'SUCCESS';
				//return;
				//crm_user::mailPassword();
				//$conn->commit();
				//trigger_error( "User:update(): result - " . $res );
			}
			else
			{
				$ret = 'FAIL';
				//return;
				/* $arr=array();
				$arr = $st->errorInfo();
				trigger_error( "User Passowrd update(): Couldn't execute query" );
				
				trigger_error( "K18_user: password update (): Couldn't execute query - Statement" . $arr[2]); */
				
			} 
			
			
		}
		//trigger_error( " K18_user: password update (): Couldn't execute query"   . $e->getMessage());
		
		catch (PDOException $e) {
			$retresult['success'] = false;
			K18_utility::saveError('Error from updatepwd in imode - '. $imode . ' - ' . $e->getMessage());
			if (contains($e->getMessage(), '18KSoftec Error:'))
			{
				$retresult['errors']  = strstr($e->getMessage(), '18KSoftec Error:');
				//K18_utility::saveError($e->getMessage());
			}
			else
			{
				$retresult['errors']  = $e->getMessage();
				//K18_utility::saveError($e->getMessage());
			}
			echo json_encode($retresult);
			$conn = null;
			return;
		}
		$conn->commit();
		$conn = null;
		$retresult['success'] = true;
		$retresult['posted']  = 'Data successfully updated';
		echo json_encode($retresult);
		
	}
	
	
	public function updatepwd($currentPassword, $newPassword) {
		$arr = array();
		$res = 0;
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		//$status = 'A';
		$imode =2;
		$pwd = '0';
		$ret = '';
		
		$st = null;
		$newPassword1 = '';
		try 
		{
			
			
			
			$conn->beginTransaction();
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
			if ($_SESSION['user_id'] <> 'A0001' && $currentPassword == $_SESSION['user_id'] && $newPassword == $_SESSION['user_id'])
			{
				$newPassword1 = strtolower(substr($newPassword,0,2)) . substr($newPassword,2,4);
				//$newPassword1 = crm_user::generatePassword();
				//trigger_error( "User Passowrd Generate(): - New Password - " . $_SESSION['plaintextPassword']);
				$newPassword = K18_User::encryptPWD($newPassword1);
				//trigger_error( "User Passowrd update(): newPassword1 - " . $newPassword1 . ' - $newPassword - ' . $newPassword);
				$st = $conn->prepare( "update k18_user set user_pwd = :newpassword 
										where login_user_id = :user_id and company_id = :company_id");
									
				$st->bindValue( ":newpassword" ,$newPassword, PDO::PARAM_STR );
				$st->bindValue( ":user_id", $_SESSION['user_id'], PDO::PARAM_STR );
				$st->bindValue( ":company_id", $_SESSION['company_id'], PDO::PARAM_STR );
			}	
			else
			{
				//$currentPassword = User::encryptPWD($currentPassword);
				$newPassword = K18_User::encryptPWD($newPassword);
				//trigger_error( "User Passowrd update(): Current Password - " . $currentPassword . " - New Password - " . $newPassword);
				//trigger_error( "User Passowrd update(): New Password - " . $newPassword);
				$st = $conn->prepare( "update k18_user set user_pwd = :newpassword 
										where login_user_id = :user_id and company_id = :company_id");
									
				$st->bindValue( ":newpassword" ,$newPassword, PDO::PARAM_STR );
				$st->bindValue( ":user_id", $_SESSION['user_id'], PDO::PARAM_STR );
				$st->bindValue( ":company_id", $_SESSION['company_id'], PDO::PARAM_STR );
				//$st->bindValue( ":currentpassword", $currentPassword, PDO::PARAM_STR );
			}
			
			/* if ($_SESSION['user_id'] == 'A0001')
			{
				$ret = 'For User A0001, Password cannot be reset';
				$conn = null;
				return $ret;
			} */
			
			if ( $res = $st->execute() ) 
			{	
				$arr = $st->errorInfo();
				$ret = 'SUCCESS';
				//return;
				//crm_user::mailPassword();
				//$conn->commit();
				//trigger_error( "User:update(): result - " . $res );
			}
			else
			{
				$ret = 'FAIL';
				//return;
				/* $arr=array();
				$arr = $st->errorInfo();
				trigger_error( "User Passowrd update(): Couldn't execute query" );
				
				trigger_error( "K18_user: password update (): Couldn't execute query - Statement" . $arr[2]); */
				
			} 
			
			
		}
		//trigger_error( " K18_user: password update (): Couldn't execute query"   . $e->getMessage());
		
		catch (PDOException $e) {
			$retresult['success'] = false;
			K18_utility::saveError('Error from updatepwd in imode - '. $imode . ' - ' . $e->getMessage());
			if (contains($e->getMessage(), '18KSoftec Error:'))
			{
				$retresult['errors']  = strstr($e->getMessage(), '18KSoftec Error:');
				//K18_utility::saveError($e->getMessage());
			}
			else
			{
				$retresult['errors']  = $e->getMessage();
				//K18_utility::saveError($e->getMessage());
			}
			echo json_encode($retresult);
			$conn = null;
			return;
		}
		$conn->commit();
		$conn = null;
		$retresult['success'] = true;
		$retresult['posted']  = 'Data successfully updated';
		echo json_encode($retresult);
		
	}
	
	public function checkPassword_old( $password ) {
		return ( $this->user_pwd == crypt ( $password, $this->user_pwd ) );
		
		
	}
	
	public function checkPassword( $password ) {
		//echo $this->pass; // stored in this User - password (encrypted) from DB table
		//echo $password;
		// Kuppuram - the following checkPassword is commented as per request from Binay on - 17-Oct-17
		return ( $this->pass == crypt ( $password, $this->pass ) );
		//return true;
	}
	/**
  * Generates a new random password for the user.
  */

	public function generatePassword() {
		srand();
		$pass = "";

		for ( $i=1; $i <= 8; $i++ ) {
		$char = 58;

		while ( $char > 57 and $char < 65 or strpos ( "1l0ouvi4589", strtolower( chr( $char ) ) ) !== false ) {
		$char = rand( 0, 42 ) + 48;
		}

		$pass .= chr( $char );
		}

		$pass = strtolower ( $pass );
		//$this->plaintextPassword = $pass;
		$_SESSION['plaintextPassword'] = $pass;
		
	}
  
	public function sendPassword() {
		if ( !$_SESSION['user_email'] ) return;
		$headers = "From: " . PASSWORD_EMAIL_FROM_NAME . " <" . PASSWORD_EMAIL_FROM_ADDRESS . ">";
		ob_start();
		require( TEMPLATE_PATH . "/passwordEmail.php" );
		$message = ob_get_contents();
		ob_clean();
		$success = mail( $_SESSION['user_email'], PASSWORD_EMAIL_SUBJECT, $message, $headers );
	}
	public function encryptPWD($plaintextPassword) {
		$encpwd = crypt ( $plaintextPassword, $this->user_pwd );
		
		return $encpwd;
	} 
	
	public static function staticencryptPWD($plaintextPassword) {
		$encpwd = crypt ( $plaintextPassword, $_SESSION['user_pwd'] );
		
		return $encpwd;
	} 
	
	public function mailPassword() {
		require 'PHPMailer/PHPMailerAutoload.php';
 
		$mail = new PHPMailer;
 
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = PASSWORD_EMAIL_FROM_NAME;           // SMTP username
		$mail->Password = 'gk2505';               			 // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
		$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
		$mail->setFrom(PASSWORD_EMAIL_FROM_NAME, 'ELGI CRM Admin');     //Set who the message is to be sent from
		//$mail->addReplyTo('labnol@gmail.com', 'First Last');  //Set an alternative reply-to address
		//$mail->addAddress('josh@example.net', 'Josh Adams');  // Add a recipient
		$mail->addAddress('kuppuram@yahoo.com');               // Name is optional
		$mail->addCC('kuppuram@gmail.com');
		//$mail->addBCC('bcc@example.com');
		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		//$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
		//$mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML
 
		$mail->Subject = 'ELGI CRM';
		$mail->Body    = 'Here is your ELGI CRM Password - <b>' . $_SESSION['plaintextPassword'] . '</b>';
		$mail->AltBody = 'Here is your ELGI CRM Password - ' . $_SESSION['plaintextPassword'];
 
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
 
		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
			exit;
		}
 
		echo 'Message has been sent';
	}
	
	/**
	* Creates a valid login session for this user, logging them in.
	*/

	function createLoginSession() {
		/* session_regenerate_id( true );
		srand();
		$_SESSION['authToken'] = rand( 10e16, 10e20 ); */
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$st = null;

		try 
		{
			
			$conn->beginTransaction();
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			/* $st = $conn->prepare( "DELETE FROM k18_session  
			where login_company_id = :company_id
			and login_user_id = :user_id
			and login_fin_year = :fin_year");
			$st->bindValue( ":user_id", $_SESSION['user_id'], PDO::PARAM_STR );
			$st->bindValue( ":company_id", $_SESSION['company_id'], PDO::PARAM_STR );
			$st->bindValue( ":fin_year", $_SESSION['fin_year'], PDO::PARAM_STR );
			$st->execute() ;
			
			$st = $conn->prepare( "INSERT INTO k18_session (login_company_id, login_user_id, 
			login_session_id, login_fin_year) VALUES (:company_id, :user_id, :session_id, :fin_year)");
				
			$st->bindValue( ":user_id", $_SESSION['user_id'], PDO::PARAM_STR );
			$st->bindValue( ":company_id", $_SESSION['company_id'], PDO::PARAM_STR );
			$st->bindValue( ":session_id", $_SESSION['session_id'], PDO::PARAM_STR );
			$st->bindValue( ":fin_year", $_SESSION['fin_year'], PDO::PARAM_STR );
			$st->execute() ; */
			
			$st = $conn->prepare('CALL sp_create_session(?,?,?,?)');

			$st->bindValue(1,$_SESSION['company_id'], PDO::PARAM_STR );
			$st->bindValue(2,$_SESSION['user_id'], PDO::PARAM_STR );
			$st->bindValue(3,$_SESSION['fin_year'], PDO::PARAM_STR );
			$st->bindValue(4,$_SESSION['session_id'], PDO::PARAM_STR );
			
			$st->execute();
		}	
		catch (PDOException $e) {
			$retresult['success'] = false;
			K18_utility::saveError('Error from create session' . ' - ' . $e->getMessage());
			if (contains($e->getMessage(), '18KSoftec Error:'))
			{
				$retresult['errors']  = strstr($e->getMessage(), '18KSoftec Error:');
				//K18_utility::saveError($e->getMessage());
			}
			else
			{
				$retresult['errors']  = $e->getMessage();
				//K18_utility::saveError($e->getMessage());
			}
			//echo json_encode($retresult);
			$conn = null;
			return false;
		}
		$conn->commit();
		$conn = null;
		$retresult['success'] = true;
		$retresult['posted']  = 'Session Created successfully';
		//echo json_encode($retresult);
		return true;
	}

}

?>
