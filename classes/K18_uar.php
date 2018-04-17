<?php

/**
 * Class to handle User Access Rights
 */

class K18_uar

{
  // Properties
  
  
   /**
  * @var string The Company id
  */
  public $company_id = null;   
    
  /**
  * @var varchar Role
  */
  public $role = null;
  
  /**
  * @var bigint The Sequence Number of the login from DB
  */
  public $login_seq_no = null;
  
  public $menu_group_id = null;
  
   /**
  * @var string The Menu id
  */
  public $menu_id = null;
  
   /**
  * @var string The Menu User id
  */
  public $menu_user_id = null;
  
  /**
  * @var string Menu Short Description
  */
  public $menu_short_desc = null;
  
  /**
  * @var string Menu Description
  */
  public $menu_desc = null;

  /**
  * @var string Menu Short Description
  */
  public $menu_action = null;
  
   /**
  * @var String Status of the menu
  */
  public $menu_status = null;
  
 /**
  * @var String display rights
  */
  public $menu_disp_rights = null;
  
  /**
  * @var String list rights
  */
  public $list_rights = null;
  
  /**
  * @var String insert rights
  */
  public $insert_rights = null;
  
  /**
  * @var String update rights
  */
  public $update_rights = null;
  
  /**
  * @var String delete rights
  */
  public $delete_rights = null;
  
  /**
  * @var String approve rights
  */
  public $approve_rights = null;
  
  /**
  * @var String print rights
  */
  public $print_rights = null;
  
  /**
  * @var String menu sort order
  */
  public $menu_sort_order = null;
  
    /**
  * @var String menu name
  */
  public $menu_name = null;
  
  public $approval_level = null;
  
  /**
  * Sets the object's properties using the values in the supplied array
  *
  * @param assoc The property values
  */

  public function __construct( $data=array() ) {
	//if ( isset( $data['login_seq_no'] ) ) $this->login_seq_no = (int) $data['login_seq_no'];
	//if ( isset( $data['company_seq_no'] ) ) $this->company_seq_no = (int) $data['company_seq_no'];
	if ( isset( $data['menu_id'] ) ) $this->menu_id = $data['menu_id'];
    if ( isset( $data['menu_name'] ) ) $this->menu_name =  $data['menu_name'];
	if ( isset( $data['menu_desc'] ) ) $this->menu_desc =  $data['menu_desc'];
	if ( isset( $data['menu_action'] ) ) $this->menu_action =  $data['menu_action'];
	if ( isset( $data['menu_disp_rights'] ) ) $this->menu_disp_rights =  $data['menu_disp_rights'];
	if ( isset( $data['list_rights'] ) ) $this->list_rights =  $data['list_rights'];
	if ( isset( $data['insert_rights'] ) ) $this->insert_rights =  $data['insert_rights'];
	if ( isset( $data['update_rights'] ) ) $this->update_rights =  $data['update_rights'];
	if ( isset( $data['delete_rights'] ) ) $this->delete_rights =  $data['delete_rights'];
	if ( isset( $data['approve_rights'] ) ) $this->approve_rights =  $data['approve_rights'];
	if ( isset( $data['print_rights'] ) ) $this->print_rights =  $data['print_rights'];
	if ( isset( $data['menu_status'] ) ) $this->menu_status =  $data['menu_status'];
	if ( isset( $data['menu_sort_order'] ) ) $this->menu_sort_order =  $data['menu_sort_order'];
	if ( isset( $data['menu_user_id'] ) ) $this->menu_user_id =  $data['menu_user_id'];
	if ( isset( $data['menu_group_id'] ) ) $this->menu_group_id =  $data['menu_group_id'];
	if ( isset( $data['approval_level'] ) ) $this->approval_level =  $data['approval_level'];
	
	

	}

	
  public static function getUserAccessRights($menu_user_id) {
	//trigger_error("menu_user_id :" . $menu_user_id);
	
	try
	{
		$list = array();
		$arr = array();
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
			
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		
		$st = $conn->prepare("SELECT 
								a.menu_user_id,
								a.menu_id,
								b.menu_name,
								b.menu_desc,
								b.menu_action,
								a.menu_disp_rights,
								a.list_rights,
								a.insert_rights,
								a.update_rights,
								a.delete_rights,
								a.approve_rights,
								a.approval_level,
								a.print_rights,	
								a.menu_status,
								b.menu_sort_order
								FROM k18_menu_user_rights a Inner Join k18_menu b 
								On  a.menu_id = b.menu_id and a.company_id = b.company_id
								where  a.menu_user_id   = :menu_user_id
								and a.company_id = :company_id
								and a.menu_status    = 'Active'
								and b.menu_status    = 'Active'
								order by menu_sort_order");
							
		$st->bindValue( ":menu_user_id", $menu_user_id, PDO::PARAM_STR );
		$st->bindValue( ":company_id", $_SESSION['company_id'], PDO::PARAM_STR );
		
		$st->execute();
		$arr = $st->errorInfo();
		while ( $row = $st->fetch() ) {
			$list[] = new K18_uar( $row );
		}					
	}
	
	
	catch (PDOException $e) {
		trigger_error( "Get User Access Rights: Couldn't execute query" . $e->getMessage());
		//trigger_error( "Get User Access Rights: Couldn't execute query - Statement" . $arr[2]);
		$conn = null;
	}
    $conn = null;
    //return $list;
	echo json_encode($list);
  }
  
  
  public function crud_K18_UAR($imode)
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
		$st = $conn->prepare('CALL sp_crud_k18_UAR(?,?,?,?,?,
												   ?,?,?,?,?,
												   ?,?,?,?)');


			$st->bindValue(1,$imode, PDO::PARAM_STR );
			$st->bindValue(2,$_SESSION['company_id'], PDO::PARAM_STR );
			$st->bindValue(3,$_SESSION['user_id'], PDO::PARAM_STR );
			$st->bindValue(4,$this->menu_group_id, PDO::PARAM_STR );
			$st->bindValue(5,$this->menu_id, PDO::PARAM_STR );
			$st->bindValue(6,$this->menu_user_id, PDO::PARAM_STR );
			$st->bindValue(7,$this->menu_disp_rights, PDO::PARAM_STR );
			$st->bindValue(8,$this->list_rights, PDO::PARAM_STR );
			$st->bindValue(9,$this->insert_rights, PDO::PARAM_STR );
			$st->bindValue(10,$this->update_rights, PDO::PARAM_STR );
			$st->bindValue(11,$this->delete_rights, PDO::PARAM_STR );
			$st->bindValue(12,$this->approve_rights, PDO::PARAM_STR );
			$st->bindValue(13,$this->print_rights, PDO::PARAM_STR );
			$st->bindValue(14,$this->menu_status, PDO::PARAM_STR );
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
  
  // this is for CRM
  public static function getUserAccessRights_menu($user_id, $company_id) {
	//trigger_error("Company Seq :" . $company_seq_no);
	
	try
	{
	
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
			
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//$st = $conn->prepare("CALL getUserAccessRights_menu(?, ?, ?)");
		
		$st = $conn->prepare("SELECT a.menu_group_id, case a.menu_group_id
						when 'Admin' then  1
						when 'Master' then  2
						when 'Accounts' then 3
						when 'Inventory' then 4
						when 'HR' then 5
						when 'Functions' then 6
						when 'Reports' then 7
						end  as mg_sort, a.menu_user_id,  a.menu_id, b.menu_name, b.menu_desc, b.menu_action, b.menu_link, 
			a.menu_disp_rights, a.list_rights, a.insert_rights, a.update_rights, a.delete_rights, a.approve_rights, a.approval_level, a.print_rights, 
			   a.menu_status, b.menu_sort_order, e.user_name, now() as systemdate
		FROM k18_menu_user_rights a 
		Inner Join k18_menu b On a.menu_id = b.menu_id and a.company_id = b.company_id
		inner join k18_user e on a.menu_user_id = e.login_user_id and a.company_id = e.company_id
	    where a.menu_user_id     = :user_id
		 and a.company_id     = :company_id
		 and a.menu_disp_rights = 'Y'
		 and a.menu_status      = 'Active'
		 and b.menu_status      = 'Active'
		 order by mg_sort, b.menu_sort_order");

		   $st->bindValue( ":user_id", $user_id, PDO::PARAM_STR );
		   $st->bindValue( ":company_id", $company_id, PDO::PARAM_STR );

		$st->execute();
		$arr = $st->errorInfo();
		$list = array();

		while ( $row = $st->fetch() ) {
			//trigger_error("Loop Login Seq :" . $login_seq_no);
		$list[] = new K18_uar( $row );
		}
	}
	catch (PDOException $e) {
		trigger_error( "Get User Access Rights: Couldn't execute query" . $e->getMessage());
		//trigger_error( "Get User Access Rights: Couldn't execute query - Statement" . $arr[2]);
		$conn = null;
		$_SESSION['app_error'] = $e->getMessage();
		return false;
	}
    $conn = null;
    return $list;
  }
  
  public static function UAR_batch_input($user_rights_details) {
	//trigger_error("Company Seq :" . $company_seq_no);
	
	try
	{
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$st = $conn->prepare("SELECT sp_K18_uar_batch_input(?)");

    $st->bindValue( 1, $user_rights_details, PDO::PARAM_STR );
	
    $st->execute();
	$arr = $st->errorInfo();
    
	}
	catch (PDOException $e) {
		trigger_error( "Batch Input User Access Rights: Couldn't execute query" . $e->getMessage());
		trigger_error( "Batch Input User Access Rights: Couldn't execute query - Statement" . $arr[2]);
		$conn = null;
	}
    $conn = null;
    //return $list;
  }
  
  /**
  * Adds the current User Access Rights in the database.
  */

  public function insert() {


	$arr = array();
	$res = 0;
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$status = 'Active';
	$imode =1;
	try 
	{
		$conn->beginTransaction();
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$st = $conn->prepare( "select sp_insert_crm_menu_user_rights(?,?,?,?,?,?,?,?,?,?,?,?)");
		$st->bindValue( 1 ,$imode, PDO::PARAM_INT );
		$st->bindValue( 2 ,$_SESSION['user_id'], PDO::PARAM_STR );
		$st->bindValue( 3, $this->menu_id, PDO::PARAM_STR );
		$st->bindValue( 4, $this->menu_user_id, PDO::PARAM_STR );
		$st->bindValue( 5, $this->menu_disp_rights, PDO::PARAM_STR );
		$st->bindValue( 6, $this->list_rights, PDO::PARAM_STR );
		$st->bindValue( 7, $this->insert_rights, PDO::PARAM_STR );
		$st->bindValue( 8, $this->update_rights, PDO::PARAM_STR );
		$st->bindValue( 9, $this->delete_rights, PDO::PARAM_STR );
		$st->bindValue( 10, $this->approve_rights, PDO::PARAM_STR );
		$st->bindValue( 11, $this->print_rights, PDO::PARAM_STR );
		$st->bindValue( 12, $this->menu_status, PDO::PARAM_STR );
		$res = $st->execute();
			
		$arr = $st->errorInfo();
		if ( $res >= 1 ) 
		{	
			
		}
		else
		{
			
			trigger_error( "CRM Menu User Rights - Insert : Couldn't execute query" . $this->user_id . " - " . $this->prospect_code  );
			
			trigger_error( "CRM Menu User Rights - Insert: Couldn't execute query - Statement" . $arr[2]);
		}
			
			
	}
		catch (PDOException $e)
		{
			trigger_error( " CRM Menu User Rights - Insert: Couldn't execute query"   . $e->getMessage());
			trigger_error( "CRM Menu User Rights - Insert: Couldn't execute query - Statement" . $arr[2]);
			$conn = null;	
			if ($GLOBALS['crm_debug'] == 'true')
			{
				$ret = 'user_id- '.$_SESSION['user_id'].'-'.
						'menu_id- '.$this->menu_id.'-'.
						'menu_user_id- '.$this->menu_user_id.'-'.
						'menu_disp_rights- '.$this->menu_disp_rights.'-'.
						'list_rights- '.$this->list_rights.'-'.
						'insert_rights- '.$this->insert_rights.'-'.
						'update_rights- '.$this->update_rights.'-'.
						'delete_rights- '.$this->delete_rights.'-'.
						'approve_rights- '.$this->approve_rights.'-'.
						'print_rights- '.$this->print_rights.'-'.
						'menu_status- '.$this->menu_status;

				return $ret;
			}
			if ($GLOBALS['crm_debug'] == 'false' || $GLOBALS['crm_debug'] == '')
			{
				$ret = $e->getMessage();
				$ret = strstr($ret, 'CRM ERROR:');
				return $ret;
			}
		}
		$conn->commit();
		$conn = null;
		return 'SUCCESS';
		
}

 /**
  * Updates the current User Access Rights in the database.
  */
public function update() {


	$arr = array();
	$res = 0;
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$status = 'Active';
	$imode =2;
	try 
	{
		$conn->beginTransaction();
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$st = $conn->prepare( "select sp_insert_crm_menu_user_rights(?,?,?,?,?,?,?,?,?,?,?,?)");
		$st->bindValue( 1 ,$imode, PDO::PARAM_INT );
		$st->bindValue( 2 ,$_SESSION['user_id'], PDO::PARAM_STR );
		$st->bindValue( 3, $this->menu_id, PDO::PARAM_STR );
		$st->bindValue( 4, $this->menu_user_id, PDO::PARAM_STR );
		$st->bindValue( 5, $this->menu_disp_rights, PDO::PARAM_STR );
		$st->bindValue( 6, $this->list_rights, PDO::PARAM_STR );
		$st->bindValue( 7, $this->insert_rights, PDO::PARAM_STR );
		$st->bindValue( 8, $this->update_rights, PDO::PARAM_STR );
		$st->bindValue( 9, $this->delete_rights, PDO::PARAM_STR );
		$st->bindValue( 10, $this->approve_rights, PDO::PARAM_STR );
		$st->bindValue( 11, $this->print_rights, PDO::PARAM_STR );
		$st->bindValue( 12, $this->menu_status, PDO::PARAM_STR );
		$res = $st->execute();
			
		$arr = $st->errorInfo();
		if ( $res >= 1 ) 
		{	
			
		}
		else
		{
			
			trigger_error( "CRM Menu User Rights - Insert : Couldn't execute query" . $this->user_id . " - " . $this->prospect_code  );
			
			trigger_error( "CRM Menu User Rights - Insert: Couldn't execute query - Statement" . $arr[2]);
		}
			
			
	}
		catch (PDOException $e)
		{
			trigger_error( " CRM Menu User Rights - Insert: Couldn't execute query"   . $e->getMessage());
			trigger_error( "CRM Menu User Rights - Insert: Couldn't execute query - Statement" . $arr[2]);
			$conn = null;	
			if ($GLOBALS['crm_debug'] == 'true')
			{
				$ret = 'user_id- '.$_SESSION['user_id'].'-'.
						'menu_id- '.$this->menu_id.'-'.
						'menu_user_id- '.$this->menu_user_id.'-'.
						'menu_disp_rights- '.$this->menu_disp_rights.'-'.
						'list_rights- '.$this->list_rights.'-'.
						'insert_rights- '.$this->insert_rights.'-'.
						'update_rights- '.$this->update_rights.'-'.
						'delete_rights- '.$this->delete_rights.'-'.
						'approve_rights- '.$this->approve_rights.'-'.
						'print_rights- '.$this->print_rights.'-'.
						'menu_status- '.$this->menu_status;

				return $ret;
			}
			if ($GLOBALS['crm_debug'] == 'false' || $GLOBALS['crm_debug'] == '')
			{
				$ret = $e->getMessage();
				$ret = strstr($ret, 'CRM ERROR:');
				return $ret;
			}
		}
		$conn->commit();
		$conn = null;
		return 'SUCCESS';
		
}
  
}

?>
