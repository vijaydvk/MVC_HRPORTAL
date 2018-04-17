<?php


/**
 * Class to handle Menu
 */

class K18_menu

{
  // Properties
  
  /**
 * @var varchar(50) ID
 */
public $company_id = null;

/**
 * @var varchar(10) User ID
 */
public $user_id = null;

/**
 * @var varchar(40) Sales Division ID
 */
public $menu_group_id = null;

/**
 * @var varchar(10) Region Code
 */
public $menu_id = null;

public $original_menu_id = null;

/**
 * @var varchar(10) Sales Engineer User ID
 */
public $menu_type = null;

/**
 * @var varchar(30) Area
 */
public $menu_name = null;

/**
 * @var varchar(40) Product Group
 */
public $menu_desc = null;

/**
 * @var int(11) Product
 */
public $menu_sort_order = null;

/**
 * @var varchar(2) P / L / O
 */
public $menu_status = null;

/**
 * @var varchar(40) Month
 */
public $menu_action = null;

/**
 * @var varchar(40) Year
 */
public $menu_link = null;

/**
 * @var varchar(10) Target Number
 */
public $createdby = null;

/**
 * @var timestamp Target Amount
 */
public $createdon = null;

/**
 * @var varchar(10) Remarks
 */
public $modifiedby = null;

/**
 * @var varchar(10) Target Status
 */
public $modifiedon = null;

  
  /**
  * Sets the object's properties using the values in the supplied array
  *
  * @param assoc The property values
  */

  public function __construct( $data=array() ) {
	
	if ( isset( $data['company_id'] ) ) $this->company_id  =  $data['company_id'];
	if ( isset( $data['user_id'] ) ) $this->user_id  =  $data['user_id'];
	if ( isset( $data['menu_group_id'] ) ) $this->menu_group_id  =  $data['menu_group_id'];
	if ( isset( $data['menu_id'] ) ) $this->menu_id  =  $data['menu_id'];
	if ( isset( $data['original_menu_id'] ) ) $this->original_menu_id  =  $data['original_menu_id'];
	
	if ( isset( $data['menu_type'] ) ) $this->menu_type  =  $data['menu_type'];
	if ( isset( $data['menu_name'] ) ) $this->menu_name  =  $data['menu_name'];
	if ( isset( $data['menu_desc'] ) ) $this->menu_desc  =  $data['menu_desc'];
	if ( isset( $data['menu_sort_order'] ) ) $this->menu_sort_order  =  $data['menu_sort_order'];
	if ( isset( $data['menu_status'] ) ) $this->menu_status  =  $data['menu_status'];
	if ( isset( $data['menu_action'] ) ) $this->menu_action  =  $data['menu_action'];
	if ( isset( $data['menu_link'] ) ) $this->menu_link  =  $data['menu_link'];
	if ( isset( $data['createdby'] ) ) $this->createdby  =  $data['createdby'];
	if ( isset( $data['createdon'] ) ) $this->createdon  =  $data['createdon'];
	if ( isset( $data['modifiedby'] ) ) $this->modifiedby  =  $data['modifiedby'];
	if ( isset( $data['modifiedon'] ) ) $this->modifiedon  =  $data['modifiedon'];

	
  }

	
  public static function getMenu($user_id) {
	//trigger_error("Company Seq :" . $company_seq_no);
	
	try
	{
	
		$list = array();
		$arr = array();
			
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	 $st = $conn->prepare( "Select a.menu_id, a.menu_type, a.menu_name, a.menu_action, a.menu_link, b.menu_disp_rights
		From k18_menu a Inner Join
		k18_menu_user_rights b On a.menu_id = b.menu_id
		Where b.menu_disp_rights = 'Y' 
		And b.menu_user_id = :user_id
		and a.company_id = :company_id
		And a.menu_status not in 'I' And b.menu_status not in 'I'
		Order By a.menu_sort_order");			
		
		$st->bindValue( ":company_id", $_SESSION['company_id'], PDO::PARAM_STR ); 
	    $st->bindValue( ":user_id", $user_id, PDO::PARAM_STR ); 
	
	/* $st = $conn->prepare("CALL getMenu(?, ?)");
	
    $st->bindValue( 1, $company_seq_no, PDO::PARAM_INT );
	$st->bindValue( 2, $login_seq_no, PDO::PARAM_INT ); */
    $st->execute();
	$arr = $st->errorInfo();
    

    while ( $row = $st->fetch() ) {
		//trigger_error("Loop Login Seq :" . $login_seq_no);
      $list[] = new K18_menu( $row );
    }
	}
	catch (PDOException $e) {
		trigger_error( "Get Menu: Couldn't execute query" . $e->getMessage());
		//trigger_error( "Get Menu: Couldn't execute query - Statement" . $arr[2]);
		$conn = null;
	}
    $conn = null;
    return $list;
  }
  
  public static function getListofMenus() {
	
	//echo 'Company id - ' . $_SESSION['company_id'];
	try
	{
	
		$list = array();
		$arr = array();
			
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	 $st = $conn->prepare( "Select * From k18_menu 
		where menu_status not in ('I') and company_id = :company_id
		Order By menu_sort_order");			
		
		$st->bindValue( ":company_id", $_SESSION['company_id'], PDO::PARAM_STR ); 
	    	
	
    $st->execute();
	$arr = $st->errorInfo();
    

    while ( $row = $st->fetch() ) {
		//trigger_error("Loop Login Seq :" . $login_seq_no);
      $list[] = new K18_menu( $row );
    }
	}
	catch (PDOException $e) {
		trigger_error( "Get Menu List: Couldn't execute query" . $e->getMessage());
		//trigger_error( "Get Menu List: Couldn't execute query - Statement" . $arr[2]);
		$conn = null;
	}
    $conn = null;
    //return $list;
	echo json_encode($list);
  }
  
  public function saveMenu($imode) 
	{
		$arr=array();
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$st = '';
		$status = 'A';
		$retresult = array();
		$errors = array();
		try
		{
			$conn->beginTransaction();
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			
			$st = $conn->prepare("CALL sp_crud_k18_menu(?, ?, ?, ?, ?, 
														?, ?, ?, ?, ?, 
														?, ?, ?)");
			
			
			$st->bindValue( 1 ,$imode, PDO::PARAM_STR );
			$st->bindValue( 2 ,$_SESSION['company_id'], PDO::PARAM_STR );
			$st->bindValue( 3 ,$_SESSION['user_id'], PDO::PARAM_STR );
			$st->bindValue( 4, $this->menu_group_id, PDO::PARAM_STR );
			$st->bindValue( 5, $this->menu_id, PDO::PARAM_STR );
			$st->bindValue( 6, $this->menu_type, PDO::PARAM_STR );
			$st->bindValue( 7, $this->menu_name, PDO::PARAM_STR );
			$st->bindValue( 8, $this->menu_desc, PDO::PARAM_STR );
			$st->bindValue( 9, $this->menu_sort_order, PDO::PARAM_INT );
			$st->bindValue( 10, $this->menu_status, PDO::PARAM_STR );
			$st->bindValue( 11, $this->menu_action, PDO::PARAM_STR );
			$st->bindValue( 12, $this->menu_action . "html", PDO::PARAM_STR );
			$st->bindValue( 13 ,$this->original_menu_id, PDO::PARAM_STR );
			

			if ($st->execute())
			{
			
			}
			else
			{
				$arr = $st->errorInfo();
				trigger_error( "Menu Update: Couldn't execute query" );
			}
			
		
		}
		catch (PDOException $e) {
			
			$retresult['success'] = false;
			//K18_utility::saveError($e->getMessage());
			
			K18_utility::saveError('Error from saveMenu in imode - '. $imode . ' - ' . $e->getMessage());
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
		$retresult['posted']  = "Data successfully updated";
		echo json_encode($retresult);
	}
  

}

?>
