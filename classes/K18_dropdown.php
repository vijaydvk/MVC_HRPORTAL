<?php

/**
 * Class to handle drop down data
 */

class K18_dropdown
{
  // Properties

  
  /**
  * @var compcatcode of the this row
  */
  public $compcatcode = null;
  
  /**
  * @var compcatname of the this row
  */
  public $compcatname = null;
  
  /**
  * @var codevalue from lookup of the this row
  */
  public $codevalue = null;
  
  /**
  * @var codeid from lookup of the this row
  */
  public $codeid = null;
  
  /**
  * @var shortdesc from lookup of the this row
  */
  public $shortdesc = null;
  
  /**
  * @var Product seq no from Product Master of the this row
  */
  public $prod_seq_no = null;
  
  /**
  * @var Product Description from Product Master of the this row
  */
  public $product_description = null;
  
  /**
  * @var Cities from Region Master of the this row
  */
  public $city = null;
  
  /**
  * @var Areas from Region Master of the this row
  */
  public $area = null;
  
  /**
  * @var roles from Role Master of the this row
  */
  public $role = null;
  
  /**
  * @var role desc from Role Master of the this row
  */
  public $role_desc = null;
  
  /**
  * @var user Seq Number 
  */
  public $user_seq_no = null;
  
  /**
  * @var user name from 
  */
  public $user_name = null;
  
   /**
  * @var nick name from 
  */
  public $nick_name = null;

  /**
  * @var customer seq no
  */
  public $comp_cust_seq_no = null;
  
  /**
  * @var customer name
  */
  public $customer_name = null;
  
  /**
  * @var spare_seq_no
  */
  public $spare_seq_no = null;
  
  /**
  * @var spare id
  */
  public $spare_id = null;
  
  /**
  * @var spare name
  */
  public $spare_name = null;

  /**
  * @var AMC Schedule Seq Number
  */
  public $amc_sched_seq_no = null;

  /**
  * @var To be Attended date
  */
  public $to_be_attendeded_date = null;
  
  
	public $branch_code = null;
	public $branch_name = null;
	public $dealer_code = null;
	public $dealer_name = null;
	public $area_code = null;
	public $area_name = null;
	public $industrial_area_code = null;
	public $industrial_area_name = null;
	public $product_group_code = null;
	public $product_group_name = null;
	public $industry_code  = null;
	public $industry_segment = null;
	public $task_type = null;
	

	public $product_code = null;
	public $product_name = null;
	public $prospect_vendor_code  = null; 
	public $prospect_vendor_name  = null;
	public $competitor_id = null;
	public $competitor_product = null;
	
	public $col1 = null;
	public $col2 = null;
	public $col3 = null;
	public $col4 = null;
	public $col5 = null;
	public $col6 = null;
	public $col7 = null;
	public $col8 = null;
	
	public $region_code = null;
	public $region_name = null;	
	public $sales_division_code = null;
	public $sales_division_name = null;
	public $sort_order = null;
	public $help_line_text = null;
	
	public $to_user_id = null;
	public $server_file = null;
	public $local_file = null;
    public $downloadedby = null;
	public $downloadedon = null;
	
	public $sp_name = null;
	
	public $login_user_id = null;
	
	public $term_type = null;
	
	public $term_desc = null;
	
	public $term_short_desc = null;
		
	public $two_country_code = null;
	
	public $country_name = null;
	
	public $port_code = null;
	
	public $port_name = null;
	
	public $sortorder = null;
	public $sub_region_code = null;
	
  /**
  * Sets the object's properties using the values in the supplied array
  *
  * @param assoc The property values
  */

  public function __construct( $data=array() ) {
    if ( isset( $data['compcatcode'] ) ) $this->compcatcode = $data['compcatcode'];
	if ( isset( $data['compcatname'] ) ) $this->compcatname = $data['compcatname'];
	if ( isset( $data['codevalue'] ) ) $this->codevalue = $data['codevalue'];
	if ( isset( $data['shortdesc'] ) ) $this->shortdesc = $data['shortdesc'];
	if ( isset( $data['prod_seq_no'] ) ) $this->prod_seq_no = $data['prod_seq_no'];
	//if ( isset( $data['prod_name'] ) ) $this->prod_name = $data['prod_name'];
	if ( isset( $data['area'] ) ) $this->area = $data['area'];
	if ( isset( $data['city'] ) ) $this->city = $data['city'];
	if ( isset( $data['role'] ) ) $this->role = $data['role'];
	if ( isset( $data['role'] ) ) $this->role = $data['role'];
	if ( isset( $data['role_desc'] ) ) $this->role_desc = $data['role_desc'];
	if ( isset( $data['user_seq_no'] ) ) $this->user_seq_no =  (int) $data['user_seq_no'];
	if ( isset( $data['user_name'] ) ) $this->user_name = $data['user_name'];
	if ( isset( $data['nick_name'] ) ) $this->nick_name = $data['nick_name'];
	if ( isset( $data['comp_cust_seq_no'] ) ) $this->comp_cust_seq_no =  (int) $data['comp_cust_seq_no'];
	if ( isset( $data['customer_name'] ) ) $this->customer_name =  $data['customer_name'];
	if ( isset( $data['spare_seq_no'] ) ) $this->spare_seq_no =  (int) $data['spare_seq_no'];
	if ( isset( $data['spare_id'] ) ) $this->spare_id =  $data['spare_id'];
	if ( isset( $data['spare_name'] ) ) $this->spare_name =  $data['spare_name'];
	if ( isset( $data['amc_sched_seq_no'] ) ) $this->amc_sched_seq_no =  (int) $data['amc_sched_seq_no'];
	if ( isset( $data['to_be_attendeded_date'] ) ) $this->to_be_attendeded_date =  $data['to_be_attendeded_date'];
	
	if ( isset( $data['branch_code'] ) ) $this->branch_code =  $data['branch_code'];
	if ( isset( $data['branch_name'] ) ) $this->branch_name =  $data['branch_name'];
	if ( isset( $data['dealer_code'] ) ) $this->dealer_code =  $data['dealer_code'];
	if ( isset( $data['dealer_name'] ) ) $this->dealer_name =  $data['dealer_name'];
	if ( isset( $data['area_code'] ) ) $this->area_code =  $data['area_code'];
	if ( isset( $data['area_name'] ) ) $this->area_name =  $data['area_name'];
	if ( isset( $data['industrial_area_code'] ) ) $this->industrial_area_code =  $data['industrial_area_code'];
	if ( isset( $data['industrial_area_name'] ) ) $this->industrial_area_name =  $data['industrial_area_name'];
	if ( isset( $data['product_group_code'] ) ) $this->product_group_code =  $data['product_group_code'];
	if ( isset( $data['product_group_name'] ) ) $this->product_group_name =  $data['product_group_name'];
	if ( isset( $data['industry_code'] ) ) $this->industry_code =  $data['industry_code'];
	if ( isset( $data['industry_segment'] ) ) $this->industry_segment =  $data['industry_segment'];
	if ( isset( $data['task_type'] ) ) $this->task_type =  $data['task_type'];
	
	
	if ( isset( $data['product_code'] ) ) $this->product_code =  $data['product_code'];
	if ( isset( $data['product_description'] ) ) $this->product_description =  $data['product_description'];
	
	if ( isset( $data['prospect_vendor_code'] ) ) $this->prospect_vendor_code =  $data['prospect_vendor_code'];
	if ( isset( $data['prospect_vendor_name'] ) ) $this->prospect_vendor_name =  $data['prospect_vendor_name'];

	if ( isset( $data['competitor_id'] ) ) $this->competitor_id =  $data['competitor_id'];
	if ( isset( $data['competitor_product'] ) ) $this->competitor_product =  $data['competitor_product'];
	
	if ( isset( $data['col1'] ) ) $this->col1 =  $data['col1'];
	if ( isset( $data['col2'] ) ) $this->col2 =  $data['col2'];
	if ( isset( $data['col3'] ) ) $this->col3 =  $data['col3'];
	if ( isset( $data['col4'] ) ) $this->col4 =  $data['col4'];
	if ( isset( $data['col5'] ) ) $this->col5 =  $data['col5'];
	if ( isset( $data['col6'] ) ) $this->col6 =  $data['col6'];
	if ( isset( $data['col7'] ) ) $this->col7 =  $data['col7'];
	if ( isset( $data['col8'] ) ) $this->col8 =  $data['col8'];
	
	if ( isset( $data['region_code'] ) ) $this->region_code =  $data['region_code'];
	if ( isset( $data['region_name'] ) ) $this->region_name =  $data['region_name'];
	
	if ( isset( $data['sales_division_code'] ) ) $this->sales_division_code =  $data['sales_division_code'];
	if ( isset( $data['sales_division_name'] ) ) $this->sales_division_name =  $data['sales_division_name'];
	if ( isset( $data['sort_order'] ) ) $this->sort_order =  $data['sort_order'];
	if ( isset( $data['help_line_text'] ) ) $this->help_line_text =  $data['help_line_text'];
	
	if ( isset( $data['to_user_id'] ) ) $this->to_user_id =  $data['to_user_id'];
	if ( isset( $data['server_file'] ) ) $this->server_file =  $data['server_file'];
	if ( isset( $data['local_file'] ) ) $this->local_file =  $data['local_file'];
	if ( isset( $data['downloadedby'] ) ) $this->downloadedby =  $data['downloadedby'];
	if ( isset( $data['downloadedon'] ) ) $this->downloadedon =  $data['downloadedon'];
	if ( isset( $data['sp_name'] ) ) $this->sp_name =  $data['sp_name'];
	
	if ( isset( $data['login_user_id'] ) ) $this->login_user_id =  $data['login_user_id'];
	
	if ( isset( $data['term_type'] ) ) $this->term_type =  $data['term_type'];
	if ( isset( $data['term_short_desc'] ) ) $this->term_short_desc =  $data['term_short_desc'];
	if ( isset( $data['term_desc'] ) ) $this->term_desc =  $data['term_desc'];
	
	
	if ( isset( $data['two_country_code'] ) ) $this->two_country_code =  $data['two_country_code'];
	if ( isset( $data['country_name'] ) ) $this->country_name =  $data['country_name'];
	
	if ( isset( $data['port_code'] ) ) $this->port_code =  $data['port_code'];
	if ( isset( $data['port_name'] ) ) $this->port_name =  $data['port_name'];

	if ( isset( $data['sortorder'] ) ) $this->sortorder =  (int) $data['sortorder'];
	if ( isset( $data['codeid'] ) ) $this->codeid = $data['codeid'];
	if ( isset( $data['sub_region_code'] ) ) $this->sub_region_code = $data['sub_region_code'];
	
	
	}

	
	public static function getDesignations() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    /* $st = $conn->prepare( "SELECT shortdesc as codevalue, shortdesc FROM k18_lookup 
				where codegroup = 'MCT' and codeid = 'designation' order by shortdesc" ); */
	$st = $conn->prepare( "SELECT shortdesc as codevalue, shortdesc FROM k18_lookup 
				where codeid = 'designation' order by shortdesc" );
				
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
    /* while ( $row = $st->fetch() ) {
      //$list[] = new crm_dropdown( $row );
	  array_push($list,array($row['codevalue'],$row['shortdesc']));
    } */

    $conn = null;
		
    echo(json_encode($list));
	}
		
	public static function getDesignationCodeAndDesc() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    /* $st = $conn->prepare( "SELECT codevalue, shortdesc FROM k18_lookup 
			where codegroup = 'MCT' and codeid = 'designation' order by shortdesc" ); */
	$st = $conn->prepare( "SELECT codevalue, shortdesc FROM k18_lookup 
			where codeid = 'designation' order by shortdesc" );
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
    /* while ( $row = $st->fetch() ) {
      //$list[] = new crm_dropdown( $row );
	  array_push($list,array($row['codevalue'],$row['shortdesc']));
    } */

    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getAllLookupValues() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    /* $st = $conn->prepare( "SELECT codeid, shortdesc FROM k18_lookup 
							where codegroup = 'MCT' and codeid not in ('designation') 
							and status = 'Active' order by codeid, shortdesc" ); */
	$st = $conn->prepare( "SELECT codeid, shortdesc FROM k18_lookup 
							where codeid not in ('designation') 
							and status = 'Active' order by codeid, shortdesc" );
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
   
    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getcodeidList() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    /* $st = $conn->prepare( "SELECT distinct codeid FROM k18_lookup 
				where codegroup = 'MCT' order by codeid" ); */
	$st = $conn->prepare( "SELECT distinct codeid FROM k18_lookup 
				order by codeid" );
				
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
 
    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getUserRights() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "select menu_name, concat('M',menu_disp_rights,'L',list_rights,
							'I',insert_rights,'U',update_rights,'D',delete_rights,'A', 
							approve_rights,'P', print_rights,'E', export_rights) as user_rights 
							from k18_menu_user_rights a inner join k18_menu b on a.menu_id = b.menu_id
							and a.company_id = :company_id and menu_user_id = :user_id" );
	
	$st->bindValue( ':company_id', $_SESSION['company_id'], PDO::PARAM_STR );
	$st->bindValue( ':user_id', $_SESSION['user_id'], PDO::PARAM_STR );
	
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
   
    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getLookupValues($codeid) {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    /* $st = $conn->prepare( "SELECT shortdesc as codevalue, shortdesc FROM k18_lookup 
							where codegroup = 'MCT' and codeid = :codeid order by shortdesc" ); */
	$st = $conn->prepare( "SELECT shortdesc as codevalue, shortdesc FROM k18_lookup 
							where codeid = :codeid order by shortdesc" );	
							
	$st->bindValue( ":codeid", $codeid, PDO::PARAM_STR );
	
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
	   
    $conn = null;
		
    echo(json_encode($list));
	}
	
	
	
	public static function getMaterialList() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT * FROM vilv_material 
							order by material_name" );
		
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
   
    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getListofPurchaseTypes() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT * FROM vilv_tax_master where transaction_type = 'Purchase'
							order by tax_type, tax_name " );
		
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
   
    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getListofSalesTypes() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT * FROM vilv_tax_master where transaction_type = 'Sales'
							order by tax_type, tax_name " );
		
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
   
    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getListofSBCTypes() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT * FROM vilv_tax_master where tax_type = 'SBC'
							order by tax_type, tax_name " );
		
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
   
    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getListofKishiKalyanTypes() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT * FROM vilv_tax_master where tax_type = 'KISHI'
							order by tax_type, tax_name " );
		
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
   
    $conn = null;
		
    echo(json_encode($list));
	}
	
	
	public static function getSiteDetail() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "select site_name, customer_name, customer_address1, customer_address2, 
							customer_address3, customer_city, customer_state from vilv_site a, vilv_enquiry b
							where a.enquiry_no = b.enquiry_no and a.company_id = :company_id" );
	$st->bindValue( ":company_id", $_SESSION['company_id'], PDO::PARAM_STR );	
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
   
    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getToolList() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT tool_desc FROM vilv_tool 
							order by tool_desc" );
		
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
   
    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getConsumableList() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT consumbale_desc, major_unit FROM vilv_consumable 
							order by consumbale_desc" );
		
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
   
    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getEnquiry_no($codeid) {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT enquiry_no FROM vilv_enquiry
							where company_id = :company_id and status = 'Active' order by enquiry_no" );
	
	$st->bindValue( ":company_id", $_SESSION['company_id'], PDO::PARAM_STR );
	
    $st->execute();
	
	$list = array();
	$list = $st->fetchAll(PDO::FETCH_ASSOC);
   
    $conn = null;
		
    echo(json_encode($list));
	}
	
	
  /**
  * Returns List of Categories of Companies
  
  */
  
  public static function getCompCat() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT compcatcode, compcatname FROM ezfms_comp_cat" );
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new ezfms_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
    
	public static function getSpares() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT spare_seq_no, spare_id, spare_name FROM ezfms_spare
							where company_seq_no = :company_seq_no" );	
	$st->bindValue( ":company_seq_no", $_SESSION['company_seq_no'], PDO::PARAM_INT );
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new ezfms_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
 
  
	/**
	* Gets CRM State List
	*/
	// Change Log - 2014.06.16-1
	// 16-Jun-2014 - Kuppuram
	// Get State List
  public static function getStates() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT codevalue, shortdesc FROM crm_lookup where codegroup = 'LG' and codeid = 'State'" );
	$st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
	
    return $list;
	}
	
	/**
	* Gets CRM Areas
	*/
	// Change Log - 2014.06.19-1
	// 21-Jun-2014 - Kuppuram
	// Get Area List
	public static function getAreas() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT area_code, area_name FROM crm_area where status = 'A' order by area_code" );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
	
    return $list;
	}
	
	
	
	
	
	
	
	
	
	// Kuppuram
	// 23-Sep-2014
	public static function fn_list_userid_reporting_to() {
	
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	try
	{
    $st = $conn->prepare( "select '(' || '''' || array_to_string(array(select * from fn_list_userid_reporting_to (:p_user_id )),''',''') || ''''  || ')'");
	$st->bindValue( ":p_user_id", $_SESSION['reporting_to'], PDO::PARAM_STR );
		
    $st->execute();
	
	$row = '';
	
	$row = $st->fetchColumn();
	$_SESSION['reportees'] = $row;
	//trigger_error( "Get User List Reporting To: - 'reportees' - " . $_SESSION['reportees']);
    }
	catch (PDOException $e) {
		trigger_error( "Get User List Reporting To: Couldn't execute query" . $e->getMessage() . ' - User Id - '. $_SESSION['user_id'] . ' - Reportees - ' . $_SESSION['reporting_to'] . ' - ' . $_SESSION['reportees']);
		//trigger_error( "Get Pre Prospect: Couldn't execute query - Statement" . $arr[2]);
		$conn = null;
	}	
	$conn = null;
    return $row;
	}
	
	
	public static function getReporting_to_List() {
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		try
		{
			$st = $conn->prepare( "select login_user_id, login_user_id || ' - ' || user_name   as user_name from crm_user 
									where login_user_id not like 'SE%' and login_user_id not like 'A0%' 
									and sales_division_code = '" . $_SESSION['sales_division_code'] . "'" . 
									" and status = 'A' order by user_name");
						
			$st->execute();
			
			$list = array();

			while ( $row = $st->fetch() ) {
				$list[] = new crm_dropdown( $row );
			}
		}
		catch (PDOException $e) {
			trigger_error( "Get Reporting To List: Couldn't execute query" . $e->getMessage() );
			//trigger_error( "Get Pre Prospect: Couldn't execute query - Statement" . $arr[2]);
			$conn = null;
		}	
		$conn = null;
		return $list;
	}
	
	
	
	public static function getBranches() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT branch_code, branch_name from crm_branch order by branch_name" );
			
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
		
    return $list;
	}
	
	public static function getRegions() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT region_code, region_name from crm_region order by region_name" );
			
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
		
    return $list;
	}
	
	// Change Log - 2014.07.22-1
	// 22-Jul-2014 - Kuppuram
	// Sub Areas should be listed
	public static function getAreas4Region($login_user_id) {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    /* $st = $conn->prepare( "select a.area_code, a.area_name from crm_area a inner join crm_user b on a.region_code = b.region_code 
		where b.login_user_id = :login_user_id order by area_name" ); */
	$st = $conn->prepare( "select a.industrial_area_code, a.industrial_area_name from crm_industrial_area a inner join crm_user b on a.region_code = b.region_code 
		where b.login_user_id = :login_user_id order by industrial_area_name" );	
	$st->bindValue( ":login_user_id", $login_user_id , PDO::PARAM_INT ); 		
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
		
    return $list;
	}
	
	public static function getSalesDivisions() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT sales_division_code, sales_division_name from crm_sales_division order by sales_division_name" );
			
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
		
    return $list;
	}
	
	
	public static function getFilesToBeDownloaded() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT server_file, local_file from crm_filedownload where status = 'Active' and to_user_id = '**' " );
			
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
		
    return $list;
	}
	
	public static function FilesToBeDownloadedUpdateStatus() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$date = date('Y-m-d');
    $st = $conn->prepare( "update crm_filedownload set downloadedby = '" . $_SESSION['user_id'] . "'" . ", downloadedon = localtimestamp " . ", status = 'Completed', to_user_id = '" . $_SESSION['user_id'] . "'" . " where status = 'Active' and to_user_id = '**' " );
			
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
		
    return $list;
	}
	
	public static function startFilesDownload() {
		include('Net/SFTP.php');
		$filedownload_status = 'SUCCESS';
		$files_not_downloaded = '';
		
		$results = array();
		$results['FilesToBeDownloaded'] = crm_dropdown::getFilesToBeDownloaded();

			//$sftp = new Net_SFTP('127.0.0.1', 3061, 60);
			$sftp = new Net_SFTP('172.16.32.140', 22, 60);
			if (!$sftp->login('elgicrm', 'Teksoft18K')) {
				$filedownload_status = 'Login Failed';
				//exit('Login Failed');
			}

			// outputs the contents of filename.remote to the screen
			//echo $sftp->get('config.php');
			
			// copies filename.remote to filename.local from the SFTP server
			//$sftp->get('config.php', 'f:/GKNC/config.php');
			
			if 	($filedownload_status == 'SUCCESS')
			{
				$contents = $results['FilesToBeDownloaded']; 
					foreach ($contents as $content) { 
						if (!$sftp->get($content->server_file, $content->local_file )){
							$files_not_downloaded = $files_not_downloaded . ', ' . $content->server_file;
						}
					} 
			}		
		if 	($filedownload_status == 'Login Failed')
		{
			$filedownload_status = 'Login Failed';
		}
		elseif 	($files_not_downloaded <> '')
		{
			$filedownload_status = 'Download Failed files - ' . $files_not_downloaded ;
		}
		elseif ($filedownload_status == 'SUCCESS')
		{
			crm_dropdown::FilesToBeDownloadedUpdateStatus();
		}
		return 	$filedownload_status;	
	}
	
	public static function runScript() {
		$sql_file = 'test.sql';

		try
			{
			$contents = file_get_contents($sql_file);

			// Remove C style and inline comments
			$comment_patterns = array('/\/\*.*(\n)*.*(\*\/)?/', //C comments
									  '/\s*--.*\n/', //inline comments start with --
									  '/\s*#.*\n/', //inline comments start with #
									  );
			$contents = preg_replace($comment_patterns, "\n", $contents);

			//Retrieve sql statements
			$statements = explode(";\n", $contents);
			$statements = preg_replace("/\s/", ' ', $statements);
			$statements = preg_replace("/\'/", "''", $statements);
			

			$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );

			foreach ($statements as $query) {
				if (trim($query) != '') {
					//$query = 'PREPARE qry from ' . $query . ';';
					//$query = $query . 'EXECUTE qry ';
					$_SESSION['qry'] = $query;
					$st = $conn->prepare('select sp_script_exe (' . $query . ')');
					//$st = $conn->prepare('execute' . $query );
					echo 'Executing query: ' . $query . "\n";
					$st->execute();

					
				}
			}
			//trigger_error('Run Query - ' . $query);
			}
			catch (PDOException $e) {
				trigger_error( "Run Scripts: Couldn't execute query" . $e->getMessage());
				$conn = null;
				$_SESSION['app_error'] = $e->getMessage();
				return 'FAILED';
			}
			$conn = null;
			return 'SUCCESS';
	}
	
	public static function getOppLostReasons() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT codevalue, shortdesc FROM crm_lookup where codegroup = 'LG' and codeid = 'OppLostReason' order by sortorder" );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
		
    return $list;
	}
	
	
	
	// For CRM
	public static function getTarget() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = $_SESSION['month'];
	$year = $_SESSION['year'];
	
	// Change  Log 2014.04.25-1
	// 25-Apr-2014 - Kuppuram
	// Sales Head, GM - Business Development Managers can view consolidated for all
	// Other Managers like Zonal Heads, Regional Managers and Area Managers can view consolidated 
	// for respective team
	if ($_SESSION['short_designation'] == 'SE')
	{
		$qry =	"select 0 as target_number ";
		$qry =	$qry . " union all ";
		$qry =	$qry . " select target_number as target_number from crm_target where target_month = " . $mon . " and target_year =  " . $year . " and p_l_o = 'Enq Gen' and engr_user_id = '" . $_SESSION['user_id'] . "'" ;
		$qry =	$qry . " union all ";
		$qry =	$qry . " select target_number as target_number from crm_target where target_month = " . $mon . " and target_year =  " . $year . " and p_l_o = 'Enq Conv' and engr_user_id = '" . $_SESSION['user_id'] . "'";
		$qry =	$qry . " union all ";
		$qry =	$qry . " select target_number as target_number from crm_target where target_month = " . $mon . " and target_year =  " . $year . " and p_l_o = 'Enq Conv Won' and engr_user_id = '" . $_SESSION['user_id'] . "'";
		$qry =	$qry . " union all ";
		$qry =	$qry . " select 0 as target_number"; 
	}
	else
	{
		if ($_SESSION['reportees'] == '')
		{
			$qry =	"select 0 as target_number ";
			$qry =	$qry . " union all  ";
			$qry =	$qry . " select sum(d.target_number) as target_number from crm_target d where d.target_month = " . $mon . " and d.target_year =  " . $year . " and p_l_o = 'Enq Gen'
			and d.engr_user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id and substring(d.engr_user_id,1,2) in ('SE','AM')) ";
			$qry =	$qry . " union all  ";
			$qry =	$qry . " select sum(e.target_number) as target_number from crm_target e where e.target_month = " . $mon . " and e.target_year = " . $year . " and p_l_o = 'Enq Conv' 
			and e.engr_user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id and substring(e.engr_user_id,1,2) in ('SE','AM')) ";
			$qry =	$qry . " union all "; 
			$qry =	$qry . " select sum(e.target_number) as target_number from crm_target e where e.target_month = " . $mon . " and e.target_year = " . $year . " and p_l_o = 'Enq Conv Won' 
			and e.engr_user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id and substring(e.engr_user_id,1,2) in ('SE','AM')) ";
			$qry =	$qry . " union all "; 
			$qry =	$qry . " select 0 as target_number ";  
		}
		else
		{
			$qry =	"select 0 as target_number ";
			$qry =	$qry . " union all  ";
			$qry =	$qry . " select sum(d.target_number) as target_number from crm_target d where d.target_month = " . $mon . " and d.target_year =  " . $year . " and p_l_o = 'Enq Gen'
			and d.engr_user_id in " . $_SESSION['reportees'] . " and substring(d.engr_user_id,1,2) in ('SE','AM') ";
			$qry =	$qry . " union all  ";
			$qry =	$qry . " select sum(e.target_number) as target_number from crm_target e where e.target_month = " . $mon . " and e.target_year = " . $year . " and p_l_o = 'Enq Conv' 
			and e.engr_user_id in " . $_SESSION['reportees'] . " and substring(e.engr_user_id,1,2) in ('SE','AM') ";
			$qry =	$qry . " union all "; 
			$qry =	$qry . " select sum(e.target_number) as target_number from crm_target e where e.target_month = " . $mon . " and e.target_year = " . $year . " and p_l_o = 'Enq Conv Won' 
			and e.engr_user_id in " . $_SESSION['reportees'] . " and substring(e.engr_user_id,1,2) in ('SE','AM') ";
			$qry =	$qry . " union all "; 
			$qry =	$qry . " select 0 as target_number "; 
		}	
	}
	
	
	$st = $conn->prepare( $qry );
	
	$st->execute();
	
	//trigger_error("Target Query" . $qry);
	
	$list = array();

    while ( $row = $st->fetch() ) {
      //$list[] = new ezfms_dropdown( $row );
	  array_push($list,array($row['target_number']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getTargetReview() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$from_month = $_SESSION['fmonth'];
	$from_year = $_SESSION['fyear'];
	$to_month = $_SESSION['tmonth'];
	$to_year = $_SESSION['tyear'];
	$fromdate = $_SESSION['fromdate'];
	$todate = $_SESSION['todate'];
	$salesengs1 = $_SESSION['salesengs'];
	$salesengs = '';
	
	$salesengs = str_replace(",", "','" , $salesengs1);
	$salesengs = "'" . $salesengs . "'";
	
	$qry =	"select 0 as target_number, '' as engr_name ";
		$qry =	$qry . " union all  ";
		$qry =	$qry . " select sum(d.target_number) as target_number, e.user_name as engr_name from crm_target d, crm_user e " . 
				"  where d.engr_user_id = e.login_user_id  and d.status = 'Active'"  .
				" and d.target_month between " . $from_month . " and " . $to_month . 
				" and d.target_year between " . $from_year . " and " . $to_year . " and p_l_o = 'Enq Gen'
						and d.engr_user_id in (" . $salesengs . ") " .
				" group by engr_name";
		$qry =	$qry . " union all  ";
		$qry =	$qry . " select sum(d.target_number) as target_number, e.user_name as engr_name from crm_target d, crm_user e " . 
				"  where d.engr_user_id = e.login_user_id  and d.status = 'Active'"  .
				"and d.target_month between " . $from_month . " and " . $to_month . " and d.target_year between " . $from_year . " and " . $to_year . " and p_l_o = 'Enq Conv' 
						and d.engr_user_id in (" . $salesengs . ") " .
				" group by engr_name";
		$qry =	$qry . " union all "; 
		$qry =	$qry . " select sum(d.target_number) as target_number, e.user_name as engr_name from crm_target d, crm_user e " . 
				"  where d.engr_user_id = e.login_user_id  and d.status = 'Active'"  .
				" and d.target_month between " . $from_month . " and " . $to_month . " and d.target_year between " . $from_year . " and " . $to_year . " and p_l_o = 'Enq Conv Won' 
						and d.engr_user_id in (" . $salesengs . ") " .
				" group by engr_name";
		$qry =	$qry . " union all "; 
		$qry =	$qry . " select 0 as target_number, '' as engr_name "; 
	
	
	
	$st = $conn->prepare( $qry );
	
	$st->execute();
	
	//trigger_error("Target Query" . $qry);
	
	$list = array();

    while ( $row = $st->fetch() ) {
      //$list[] = new ezfms_dropdown( $row );
	  array_push($list,array($row['target_number'],$row['engr_name']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	// For CRM
	public static function getOppCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = $_SESSION['month'];
	$year = $_SESSION['year'];
	
	/* if ($_SESSION['month'] == 'previousmonth')
	{
		if ($mon == 1)
		{
			$mon = 12;
			$year = $year - 1;
		}
		else
		{
			$mon = $mon - 1;
		}
		
	} */
	// Change  Log 2014.04.25-1
	// 25-Apr-2014 - Kuppuram
	// Sales Head, GM - Business Development Managers can view consolidated for all
	// Other Managers like Zonal Heads, Regional Managers and Area Managers can view consolidated 
	// for respective team
	if ($_SESSION['short_designation'] == 'SE')
	{
		$qry = "select count(*) as dispcount from crm_prospect where status in ('Active', 'Converted') and date_part('month',prospect_date) = " . $mon . " and date_part('year',prospect_date) = " . $year . " and user_id = '" . $_SESSION['user_id'] . "'";
		$qry = $qry . " union all " ; 
		$qry = $qry ." select count(*) as dispcount  from crm_lead where status in ('Active', 'Converted', 'Deferred') and date_part('month',lead_date) = " . $mon . " and date_part('year',lead_date) = " . $year  . " and user_id = '" . $_SESSION['user_id'] . "'";
		$qry = $qry . " union all " ;
		$qry = $qry	. " select count(*) as dispcount  from crm_opportunity where status in ('Active', 'Won', 'Lost') and date_part('month',opportunity_date) = " . $mon . " and date_part('year',opportunity_date) = " . $year  . " and user_id = '" . $_SESSION['user_id'] . "'";
		$qry = $qry . " union all " ;
		$qry = $qry	. " select count(*) as dispcount  from crm_opportunity where status = 'Won' and date_part('month',opportunity_date) = " . $mon . " and date_part('year',opportunity_date) = " . $year  . " and user_id = '" . $_SESSION['user_id'] . "'";
		$qry = $qry . " union all " ;
		$qry = $qry	. " select count(*) as dispcount  from crm_opportunity where status = 'Lost' and date_part('month',opportunity_date) = " . $mon . " and date_part('year',opportunity_date) = " . $year  . " and user_id = '" . $_SESSION['user_id'] . "'";
    }
	else
	{
		if ($_SESSION['reportees'] == '')
		{
			$qry = "select count(*) as dispcount from crm_prospect d where d.status in ('Active', 'Converted') and date_part('month',d.prospect_date) = " . $mon . " and date_part('year',d.prospect_date) = " . $year . 
			" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id ) and substring(d.user_id,1,2) in ('SE','AM') ";
			$qry = $qry . " union all " ; 
			$qry = $qry ." select count(*) as dispcount  from crm_lead e where e.status in ('Active', 'Converted', 'Deferred') and date_part('month',e.lead_date) = " . $mon . " and date_part('year',e.lead_date) = " . $year  . 
			" and e.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id ) and substring(e.user_id,1,2) in ('SE','AM') ";
			$qry = $qry . " union all " ;
			$qry = $qry	. " select count(*) as dispcount  from crm_opportunity f where f.status in ('Active', 'Won', 'Lost') and date_part('month',f.opportunity_date) = " . $mon . " and date_part('year',f.opportunity_date) = " . $year  .
			" and f.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id ) and substring(f.user_id,1,2) in ('SE','AM') ";
			$qry = $qry . " union all " ;
			$qry = $qry	. " select count(*) as dispcount  from crm_opportunity g where status = 'Won' and date_part('month',g.opportunity_date) = " . $mon . " and date_part('year',g.opportunity_date) = " . $year  . 
			" and g.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id ) and substring(g.user_id,1,2) in ('SE','AM') ";
			$qry = $qry . " union all " ;
			$qry = $qry	. " select count(*) as dispcount  from crm_opportunity h where status = 'Lost' and date_part('month',h.opportunity_date) = " . $mon . " and date_part('year',h.opportunity_date) = " . $year  . 
			" and h.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id ) and substring(h.user_id,1,2) in ('SE','AM') "; 
		}
		else
		{
			$qry = "select count(*) as dispcount from crm_prospect d where d.status in ('Active', 'Converted') and date_part('month',d.prospect_date) = " . $mon . " and date_part('year',d.prospect_date) = " . $year . 
			" and d.user_id in " . $_SESSION['reportees'] . " and substring(d.user_id,1,2) in ('SE','AM') ";
			$qry = $qry . " union all " ; 
			$qry = $qry ." select count(*) as dispcount  from crm_lead e where e.status in ('Active', 'Converted', 'Deferred') and date_part('month',e.lead_date) = " . $mon . " and date_part('year',e.lead_date) = " . $year  . 
			" and e.user_id in " . $_SESSION['reportees'] . " and substring(e.user_id,1,2) in ('SE','AM') ";
			$qry = $qry . " union all " ;
			$qry = $qry	. " select count(*) as dispcount  from crm_opportunity f where f.status in ('Active', 'Won', 'Lost') and date_part('month',f.opportunity_date) = " . $mon . " and date_part('year',f.opportunity_date) = " . $year  .
			" and f.user_id in " . $_SESSION['reportees'] . " and substring(f.user_id,1,2) in ('SE','AM') ";
			$qry = $qry . " union all " ;
			$qry = $qry	. " select count(*) as dispcount  from crm_opportunity g where status = 'Won' and date_part('month',g.opportunity_date) = " . $mon . " and date_part('year',g.opportunity_date) = " . $year  . 
			" and g.user_id in " . $_SESSION['reportees'] . " and substring(g.user_id,1,2) in ('SE','AM') ";
			$qry = $qry . " union all " ;
			$qry = $qry	. " select count(*) as dispcount  from crm_opportunity h where status = 'Lost' and date_part('month',h.opportunity_date) = " . $mon . " and date_part('year',h.opportunity_date) = " . $year  . 
			" and h.user_id in " . $_SESSION['reportees'] . " and substring(h.user_id,1,2) in ('SE','AM') ";
		}	
	}

	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      //$list[] = new ezfms_dropdown( $row );
	  //array_push($list,array($row['label']));
	  array_push($list,array($row['dispcount']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getOppCountReview() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$from_month = $_SESSION['fmonth'];
	$from_year = $_SESSION['fyear'];
	$to_month = $_SESSION['tmonth'];
	$to_year = $_SESSION['tyear'];
	$fromdate = $_SESSION['fromdate'];
	$todate = $_SESSION['todate'];
	$salesengs1 = $_SESSION['salesengs'];
	$salesengs = '';
	
	$salesengs = str_replace(",", "','" , $salesengs1);
	$salesengs = "'" . $salesengs . "'";
	
	
	$qry = "select count(*) as dispcount from crm_prospect d where d.status in ('Active', 'Converted') and d.prospect_date between '" . $fromdate . "' and '" . $todate . "'".
			" and d.user_id in (" . $salesengs . ") " ;
		 	
		$qry = $qry . " union all " ; 
		
		$qry = $qry . "select count(*) as dispcount from crm_lead d where d.status in ('Active', 'Converted', 'Deferred') and d.lead_date between '" . $fromdate . "' and '" . $todate .  "'".
			" and d.user_id in (" . $salesengs . ") " ;
		
		$qry = $qry . " union all " ; 
		
		$qry = $qry . "select count(*) as dispcount from crm_opportunity d where d.status in ('Active', 'Won', 'Lost') and d.opportunity_date between '" . $fromdate . "' and '" . $todate .  "'". 
			" and d.user_id in (" . $salesengs . ") " ;	

		$qry = $qry . " union all " ; 
		
		$qry = $qry . "select count(*) as dispcount from crm_opportunity d where d.status in ('Won') and d.opportunity_date between '" . $fromdate . "' and '" . $todate .  "'".
			" and d.user_id in (" . $salesengs . ") " ;	
			
		$qry = $qry . " union all " ; 
		
		$qry = $qry . "select count(*) as dispcount from crm_opportunity d where d.status in ('Lost') and d.opportunity_date between '" . $fromdate . "' and '" . $todate .  "'".
			" and d.user_id in (" . $salesengs . ") " ;		
		
		
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      //$list[] = new ezfms_dropdown( $row );
	  //array_push($list,array($row['label']));
	  array_push($list,array($row['dispcount']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	
	// For CRM
	// Funnel Count is Cummulative
	public static function getFunnelCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = $_SESSION['month'];
	$year = $_SESSION['year'];
	
	/* $qry = "select 'Prospect' as label, count(*) as dispcount from crm_prospect where date_part('month',prospect_date) = " . $mon . " and date_part('year',prospect_date) = " . $year . " and user_id = '" . $_SESSION['user_id'] . "'";
	$qry = $qry . " union all " ;
	$qry = $qry . " select 'Enquiry Generation' as label, count(*) as dispcount  from crm_lead where date_part('month',lead_date) = " . $mon . " and date_part('year',lead_date) = " . $year  . " and user_id = '" . $_SESSION['user_id'] . "'";
	$qry = $qry . " union all " ;
	$qry = $qry	. " select 'Enquiry Conversion' as label, count(*) as dispcount  from crm_opportunity where date_part('month',opportunity_date) = " . $mon . " and date_part('year',opportunity_date) = " . $year  . " and user_id = '" . $_SESSION['user_id'] . "'";
	*/
	
	// Change  Log 2014.04.25-1
	// 25-Apr-2014 - Kuppuram
	// Sales Head, GM - Business Development Managers can view consolidated for all
	// Other Managers like Zonal Heads, Regional Managers and Area Managers can view consolidated 
	// for respective team
	if ($_SESSION['short_designation'] == 'SE')
	{
		$qry = "select 'Prospect' as label, count(*) as dispcount from crm_prospect where status in ('Active', 'Converted') and user_id = '" . $_SESSION['user_id'] . "'";
		$qry = $qry . " union all " ;
		$qry = $qry . " select 'Enquiry Generation' as label, count(*) as dispcount  from crm_lead where status in ('Active', 'Converted') and user_id = '" . $_SESSION['user_id'] . "'";
		$qry = $qry . " union all " ;
		$qry = $qry	. " select 'Enquiry Conversion' as label, count(*) as dispcount  from crm_opportunity where status in ('Active', 'Won', 'Lost') and  user_id = '" . $_SESSION['user_id'] . "'";
		$qry = $qry . " union all " ;
		$qry = $qry	. " select 'Enquiry Conversion' as label, count(*) as dispcount  from crm_opportunity where status in ('Won') and  user_id = '" . $_SESSION['user_id'] . "'";
	}
	else
	{
		if ($_SESSION['reportees'] == '')
		{
			$qry = "select 'Prospect' as label, count(*) as dispcount from crm_prospect d where d.status in ('Active', 'Converted') " .
					" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id ) and substring(d.user_id,1,2) in ('SE','AM') ";

			$qry = $qry . " union all " ;
			$qry = $qry . " select 'Enquiry Generation' as label, count(*) as dispcount  from crm_lead e where e.status in ('Active', 'Converted') " .
			" and e.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id ) and substring(e.user_id,1,2) in ('SE','AM') ";
			$qry = $qry . " union all " ;
			$qry = $qry	. " select 'Enquiry Conversion' as label, count(*) as dispcount  from crm_opportunity f where f.status in ('Active', 'Won', 'Lost') " .
			" and f.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id ) and substring(f.user_id,1,2) in ('SE','AM') ";
			$qry = $qry . " union all " ;
			$qry = $qry	. " select 'Enquiry Conversion' as label, count(*) as dispcount  from crm_opportunity f where f.status in ('Won') " .
			" and f.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id ) and substring(f.user_id,1,2) in ('SE','AM') "; 	
		}
		else
		{
			$qry = "select 'Prospect' as label, count(*) as dispcount from crm_prospect d where d.status in ('Active', 'Converted') " .
					" and d.user_id in " . $_SESSION['reportees'] . " and substring(d.user_id,1,2) in ('SE','AM') ";

			$qry = $qry . " union all " ;
			$qry = $qry . " select 'Enquiry Generation' as label, count(*) as dispcount  from crm_lead e where e.status in ('Active', 'Converted') " .
			" and e.user_id in " . $_SESSION['reportees'] . " and substring(e.user_id,1,2) in ('SE','AM') ";
			$qry = $qry . " union all " ;
			$qry = $qry	. " select 'Enquiry Conversion' as label, count(*) as dispcount  from crm_opportunity f where f.status in ('Active', 'Won', 'Lost') " .
			" and f.user_id in " . $_SESSION['reportees'] . " and substring(f.user_id,1,2) in ('SE','AM') ";
			$qry = $qry . " union all " ;
			$qry = $qry	. " select 'Enquiry Conversion' as label, count(*) as dispcount  from crm_opportunity f where f.status in ('Won') " .
			" and f.user_id in " . $_SESSION['reportees'] . " and substring(f.user_id,1,2) in ('SE','AM') ";
		}
	}


	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      //$list[] = new ezfms_dropdown( $row );
	  //array_push($list,array($row['label']));
	  //array_push($list,array($row['dispcount']));
	  array_push($list,array($row['label'],intval($row['dispcount'])));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	// For CRM
	public static function getAreaOppCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = $_SESSION['month'];
	$year = $_SESSION['year'];
	
	// Change  Log 2014.04.25-1
	// 25-Apr-2014 - Kuppuram
	// Sales Head, GM - Business Development Managers can view consolidated for all
	// Other Managers like Zonal Heads, Regional Managers and Area Managers can view consolidated 
	// for respective team
	if ($_SESSION['short_designation'] == 'SE')
	{
		$qry = " select area_code, count(*) as oppcount from crm_opportunity where status in ('Active', 'Won', 'Lost') and date_part('month',opportunity_date) = " . $mon . " and date_part('year',opportunity_date) = " . $year  . " and user_id = '" . $_SESSION['user_id'] . "'" . " group by area_code order by oppcount desc";	
	}
	else
	{
		if ($_SESSION['reportees'] == '')
		{
			$qry = " select d.area_code, count(d.area_code) as oppcount from crm_opportunity d
			where d.status in ('Active', 'Won', 'Lost') and date_part('month',d.opportunity_date) = " . $mon . " and date_part('year',d.opportunity_date) = " . $year  .
			" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
				in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
				" and a.login_user_id = c.login_user_id ) and substring(d.user_id,1,2) in ('SE','AM') " .		
				" group by d.area_code order by oppcount desc";	
		}
		else
		{
			$qry = " select d.area_code, count(d.area_code) as oppcount from crm_opportunity d
			where d.status in ('Active', 'Won', 'Lost') and date_part('month',d.opportunity_date) = " . $mon . " and date_part('year',d.opportunity_date) = " . $year  .
			" and d.user_id in " . $_SESSION['reportees'] . " and substring(d.user_id,1,2) in ('SE','AM') " .		
				" group by d.area_code order by oppcount desc";		
		}	
	}
    //$st = $conn->prepare( "select count(*) as oppcount from crm_opportunity where date_part('month',opportunity_date) = " . $mon . " and date_part('year',opportunity_date) = " . $year );
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      //$list[] = new ezfms_dropdown( $row );
	  //array_push($list,array($row['area_code']));
	  //array_push($list,array($row['oppcount']));
	  array_push($list,array($row['area_code'],intval($row['oppcount'])));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	// For CRM
	public static function getAreaProspectCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = $_SESSION['month'];
	$year = $_SESSION['year'];
	
	// Change  Log 2014.04.25-1
	// 25-Apr-2014 - Kuppuram
	// Sales Head, GM - Business Development Managers can view consolidated for all
	// Other Managers like Zonal Heads, Regional Managers and Area Managers can view consolidated 
	// for respective team
	if ($_SESSION['short_designation'] == 'SE')
	{
		$qry = " select area_code, count(*) as prospectcount from crm_prospect where status in ('Active', 'Converted') and date_part('month',prospect_date) = " . $mon . " and date_part('year',prospect_date) = " . $year  . " and user_id = '" . $_SESSION['user_id'] . "'" . " group by area_code order by prospectcount desc";	
    }
	else
	{
		if ($_SESSION['reportees'] == '')
		{
			$qry = " select d.area_code, count(d.area_code) as prospectcount from crm_prospect d 
				where d.status in ('Active', 'Converted') and date_part('month',d.prospect_date) = " . $mon . " and date_part('year',d.prospect_date) = " . $year  . 
				" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
				in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
				" and a.login_user_id = c.login_user_id ) and substring(d.user_id,1,2) in ('SE','AM') " .
				" group by d.area_code order by prospectcount desc"; 	
		}
		else
		{
			$qry = " select d.area_code, count(d.area_code) as prospectcount from crm_prospect d 
				where d.status in ('Active', 'Converted') and date_part('month',d.prospect_date) = " . $mon . " and date_part('year',d.prospect_date) = " . $year  . 
				" and d.user_id in " . $_SESSION['reportees'] . " and substring(d.user_id,1,2) in ('SE','AM') " .
				" group by d.area_code order by prospectcount desc";	
		}	
		
	}
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      //$list[] = new ezfms_dropdown( $row );
	  //array_push($list,array($row['area_code']));
	  //array_push($list,array($row['prospectcount']));
	  array_push($list,array($row['area_code'],intval($row['prospectcount'])));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	// For CRM
	public static function getAreaLeadCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = $_SESSION['month'];
	$year = $_SESSION['year'];
		
	// Change  Log 2014.04.25-1
	// 25-Apr-2014 - Kuppuram
	// Sales Head, GM - Business Development Managers can view consolidated for all
	// Other Managers like Zonal Heads, Regional Managers and Area Managers can view consolidated 
	// for respective team
	if ($_SESSION['short_designation'] == 'SE')
	{
		$qry = " select area_code, count(*) as leadcount from crm_lead where status in ('Active', 'Converted') and date_part('month',lead_date) = " . $mon . " and date_part('year',lead_date) = " . $year  . " and user_id = '" . $_SESSION['user_id'] . "'" . " group by area_code order by leadcount desc";
	}
	else
	{
		if ($_SESSION['reportees'] == '')
		{
			$qry = " select d.area_code, count(d.area_code) as leadcount from crm_lead d
				where status in ('Active', 'Converted','Deferred') and date_part('month',lead_date) = " . $mon . " 
				and date_part('year',lead_date) = " . $year  . 
				" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
				in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
				" and a.login_user_id = c.login_user_id ) and substring(d.user_id,1,2) in ('SE','AM') " .		
				" group by d.area_code order by leadcount desc";	 
		}
		else
		{
			$qry = " select d.area_code, count(d.area_code) as leadcount from crm_lead d
				where status in ('Active', 'Converted','Deferred') and date_part('month',lead_date) = " . $mon . " 
				and date_part('year',lead_date) = " . $year  . 
				" and d.user_id in " . $_SESSION['reportees'] . " and substring(d.user_id,1,2) in ('SE','AM') " .		
				" group by d.area_code order by leadcount desc";			
		}		
		
	}
	
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      //$list[] = new ezfms_dropdown( $row );
	 // array_push($list,array($row['area_code']));
	  //array_push($list,array($row['leadcount']));
	  array_push($list,array($row['area_code'],intval($row['leadcount'])));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	/////////////////////////
	// Change  Log 2014.08.22-1
	// 22-Aug-2014 - Kuppuram
	// For given month, Leads are more than due to delayed conversion from Prospect to Lead
	// So For leads, prospect month and year can be displayed for explanation
	// and the same for Opportunity
	public static function getMonthWiseProspectCount4Lead() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = $_SESSION['month'];
	$year = $_SESSION['year'];
	
	
	// Change  Log 2014.04.25-1
	// 25-Apr-2014 - Kuppuram
	// Sales Head, GM - Business Development Managers can view consolidated for all
	// Other Managers like Zonal Heads, Regional Managers and Area Managers can view consolidated 
	// for respective team
	if ($_SESSION['short_designation'] == 'SE')
	{
		$qry = "select a.area_code as area_code, to_char(b.prospect_date,'MM-YYYY') as prospectmonthyear, to_char(a.createdon,'MM-YYYY') as leadcreatedmonthyear,  count(*) as odm_count 
					from crm_lead a 
					inner join crm_prospect b on a.prospect_code = b.prospect_code
					where date_part('month',a.createdon) = " . $mon . " and date_part('year',a.createdon) = " . $year .
					" and a.user_id = '" . $_SESSION['user_id'] . "'" .
					" group by a.area_code, prospectmonthyear, leadcreatedmonthyear
					order by a.area_code, prospectmonthyear ";
    }
	else
	{
		if ($_SESSION['reportees'] == '')
		{
			$qry = " select a.area_code as area_code, to_char(b.prospect_date,'MM-YYYY') as prospectmonthyear, to_char(a.createdon,'MM-YYYY') as leadcreatedmonthyear,  count(*) as odm_count 
					from crm_lead a 
					inner join crm_prospect b on a.prospect_code = b.prospect_code
					where date_part('month',a.createdon) = " . $mon . " and date_part('year',a.createdon) = " . $year .
					" and a.user_id in (select distinct c.login_user_id from crm_user_areas c, crm_user d 
											where c.area_code in (select e.area_code from crm_user_areas e " .
											" where e.login_user_id = '" . $_SESSION['user_id'] . "')" .
						" and c.login_user_id = d.login_user_id ) and substring(a.user_id,1,2) in ('SE','AM')
					group by a.area_code, prospectmonthyear, leadcreatedmonthyear
					order by a.area_code, prospectmonthyear"; 
		}
		else
		{
			$qry = " select a.area_code as area_code, to_char(b.prospect_date,'MM-YYYY') as prospectmonthyear, to_char(a.createdon,'MM-YYYY') as leadcreatedmonthyear,  count(*) as odm_count 
					from crm_lead a 
					inner join crm_prospect b on a.prospect_code = b.prospect_code
					where date_part('month',a.createdon) = " . $mon . " and date_part('year',a.createdon) = " . $year .
					" and a.user_id in " . $_SESSION['reportees'] . " and substring(a.user_id,1,2) in ('SE','AM')
					group by a.area_code, prospectmonthyear, leadcreatedmonthyear
					order by a.area_code, prospectmonthyear";
		}			
					
	}
		
	//trigger_error("getOppCount Query" . $qry);
	
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      array_push($list,array($row['area_code'],$row['prospectmonthyear'],$row['leadcreatedmonthyear'],intval($row['odm_count'])));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	/////////////////////////
	// Change  Log 2014.08.22-1
	// 22-Aug-2014 - Kuppuram
	// For given month, Leads are more than due to delayed conversion from Prospect to Lead
	// So For leads, prospect month and year can be displayed for explanation
	// and the same for Opportunity
	public static function getMonthWiseProspectCount4Opp() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = $_SESSION['month'];
	$year = $_SESSION['year'];
	
	
	// Change  Log 2014.04.25-1
	// 25-Apr-2014 - Kuppuram
	// Sales Head, GM - Business Development Managers can view consolidated for all
	// Other Managers like Zonal Heads, Regional Managers and Area Managers can view consolidated 
	// for respective team
	if ($_SESSION['short_designation'] == 'SE')
	{
		$qry = "select a.area_code as area_code, to_char(b.prospect_date,'MM-YYYY') as prospectmonthyear, to_char(a.createdon,'MM-YYYY') as leadcreatedmonthyear,  count(*) as odm_count 
				from crm_opportunity a inner join crm_lead f on a.lead_code = f.lead_code
				inner join crm_prospect b on f.prospect_code = b.prospect_code
				where date_part('month',a.createdon) = " . $mon . " and date_part('year',a.createdon) = " . $year . 
				" and a.user_id = '" . $_SESSION['user_id'] . "'" .
				" group by a.area_code, prospectmonthyear, leadcreatedmonthyear
				order by a.area_code, prospectmonthyear";
    }
	else
	{
		$qry = " select a.area_code as area_code, to_char(b.prospect_date,'MM-YYYY') as prospectmonthyear, to_char(a.createdon,'MM-YYYY') as leadcreatedmonthyear,  count(*) as odm_count 
				 from crm_opportunity a inner join crm_lead f on a.lead_code = f.lead_code
				 inner join crm_prospect b on f.prospect_code = b.prospect_code
				 where date_part('month',a.createdon) = " . $mon . " and date_part('year',a.createdon) = " . $year . 
				" and a.user_id in (select distinct c.login_user_id from crm_user_areas c, crm_user d 
									where c.area_code in (select e.area_code from crm_user_areas e 
									where e.login_user_id = '" . $_SESSION['user_id'] . "')" .
				" and c.login_user_id = d.login_user_id ) and substring(a.user_id,1,2) in ('SE','AM')
				 group by a.area_code, prospectmonthyear, leadcreatedmonthyear
				 order by a.area_code, prospectmonthyear";
	}
		
	//trigger_error("getOppCount Query" . $qry);
	
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      array_push($list,array($row['area_code'],$row['prospectmonthyear'],$row['leadcreatedmonthyear'],intval($row['odm_count'])));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	// For CRM
	public static function getSegOppCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = $_SESSION['month'];
	$year = $_SESSION['year'];
	
	// Change  Log 2014.04.25-1
	// 25-Apr-2014 - Kuppuram
	// Sales Head, GM - Business Development Managers can view consolidated for all
	// Other Managers like Zonal Heads, Regional Managers and Area Managers can view consolidated 
	// for respective team
	if ($_SESSION['short_designation'] == 'SE')
	{
		$qry = " select industry_segment, count(*) as oppcount from crm_opportunity where status in ('Active', 'Won', 'Lost') and date_part('month',opportunity_date) = " . $mon . " and date_part('year',opportunity_date) = " . $year  . " and user_id = '" . $_SESSION['user_id'] . "'" . " group by industry_segment order by oppcount desc";	
	}
	else
	{
		if ($_SESSION['reportees'] == '')
		{
			$qry = " select d.industry_segment, count(d.industry_segment) as oppcount from crm_opportunity d
			where d.status in ('Active', 'Won', 'Lost') and date_part('month',d.opportunity_date) = " . $mon . 
			" and date_part('year',d.opportunity_date) = " . $year  . 
			" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id ) and substring(d.user_id,1,2) in ('SE','AM') " .
					" group by d.industry_segment order by oppcount desc";	
		}
		else
		{
			$qry = " select d.industry_segment, count(d.industry_segment) as oppcount from crm_opportunity d
			where d.status in ('Active', 'Won', 'Lost') and date_part('month',d.opportunity_date) = " . $mon . 
			" and date_part('year',d.opportunity_date) = " . $year  . 
			" and d.user_id in " . $_SESSION['reportees'] . " and substring(d.user_id,1,2) in ('SE','AM') " .
					" group by d.industry_segment order by oppcount desc";	
		}
		
		
	}
	
    
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
   
	  array_push($list,array($row['industry_segment'],intval($row['oppcount'])));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	// For CRM
	public static function getSegProspectCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = $_SESSION['month'];
	$year = $_SESSION['year'];
	
	// Change  Log 2014.04.25-1
	// 25-Apr-2014 - Kuppuram
	// Sales Head, GM - Business Development Managers can view consolidated for all
	// Other Managers like Zonal Heads, Regional Managers and Area Managers can view consolidated 
	// for respective team
	if ($_SESSION['short_designation'] == 'SE')
	{
		$qry = " select industry_segment, count(*) as prospectcount from crm_prospect where status in ('Active', 'Converted') and date_part('month',prospect_date) = " . $mon . " and date_part('year',prospect_date) = " . $year  . " and user_id = '" . $_SESSION['user_id'] . "'" . " group by industry_segment order by prospectcount desc";	
	}
	else
	{
		if ($_SESSION['reportees'] == '')
		{
			$qry = " select d.industry_segment, count(d.industry_segment) as prospectcount from crm_prospect d
			where d.status in ('Active', 'Converted') and date_part('month',d.prospect_date) = " . $mon . 
			" and date_part('year',prospect_date) = " . $year  . 
			" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id ) and substring(d.user_id,1,2) in ('SE','AM') " .		
					" group by d.industry_segment order by prospectcount desc";	
		}
		else
		{
			$qry = " select d.industry_segment, count(d.industry_segment) as prospectcount from crm_prospect d
			where d.status in ('Active', 'Converted') and date_part('month',d.prospect_date) = " . $mon . 
			" and date_part('year',prospect_date) = " . $year  . 
			" and d.user_id in " . $_SESSION['reportees'] . " and substring(d.user_id,1,2) in ('SE','AM') " .		
					" group by d.industry_segment order by prospectcount desc";	
		}
	}
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
 
	  array_push($list,array($row['industry_segment'],intval($row['prospectcount'])));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	// For CRM
	public static function getSegLeadCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = $_SESSION['month'];
	$year = $_SESSION['year'];
	
	// Change  Log 2014.04.25-1
	// 25-Apr-2014 - Kuppuram
	// Sales Head, GM - Business Development Managers can view consolidated for all
	// Other Managers like Zonal Heads, Regional Managers and Area Managers can view consolidated 
	// for respective team
	if ($_SESSION['short_designation'] == 'SE')
	{
		$qry = " select industry_segment, count(*) as leadcount from crm_lead where status in ('Active', 'Converted') and date_part('month',lead_date) = " . $mon . " and date_part('year',lead_date) = " . $year  . " and user_id = '" . $_SESSION['user_id'] . "'" . " group by industry_segment order by leadcount desc";
	}
	else
	{
		if ($_SESSION['reportees'] == '')
		{
			$qry = " select d.industry_segment, count(d.industry_segment) as leadcount from crm_lead d
				where d.status in ('Active', 'Converted', 'Deferred') and date_part('month',d.lead_date) = " . $mon . 
				" and date_part('year',d.lead_date) = " . $year  . 
				" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
					in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "')" .
					" and a.login_user_id = c.login_user_id ) and substring(d.user_id,1,2) in ('SE','AM') " .
					" group by d.industry_segment order by leadcount desc";	
		}
		else
		{
			$qry = " select d.industry_segment, count(d.industry_segment) as leadcount from crm_lead d
				where d.status in ('Active', 'Converted', 'Deferred') and date_part('month',d.lead_date) = " . $mon . 
				" and date_part('year',d.lead_date) = " . $year  . 
				" and d.user_id in " . $_SESSION['reportees'] . " and substring(d.user_id,1,2) in ('SE','AM') " .
					" group by d.industry_segment order by leadcount desc";	
		}
	}
	
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {

	  array_push($list,array($row['industry_segment'],intval($row['leadcount'])));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	
	function multiexplode ($delimiters,$string) {
    
		$ready = str_replace($delimiters, $delimiters[0], $string);
		$launch = explode($delimiters[0], $ready);
		return  $launch;
		//$text = "here is a sample: this text, and this will be exploded. this also | this one too :)";
		//$exploded = multiexplode(array(",",".","|",":"),$text);

		//print_r($exploded);

		//And output will be like this:
		// Array
		// (
		//    [0] => here is a sample
		//    [1] =>  this text
		//    [2] =>  and this will be exploded
		//    [3] =>  this also 
		//    [4] =>  this one too 
		//    [5] => )
		// )
	}
	
	
	
	// For CRM
	
	
		// For CRM
	
	public static function getSaleEngPreProspectCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$fromdate = $_SESSION['fromdate'];
	$todate = $_SESSION['todate'];
	$salesengs1 = $_SESSION['salesengs'];
	$salesengs = '';
	
	
	// Change  Log 2014.04.28-1
	// 28-Apr-2014 - Kuppuram
	// c.designation = 'Sales Engineer' has been changed to 
	// c.login_user_id <> 'A0001'
	
	if ($salesengs1 == 'All')
		{
			
			//$qry = " select trim(region_code) as region_code, trim(industry_segment) as industry_segment, count(*) as prospectcount from crm_prospect 
			//		where status in ('Active', 'Converted') and prospect_date between '" . $fromdate . "' and '" . $todate . "'" . " group by region_code, industry_segment order by industry_segment,region_code  ";
			
			if ($_SESSION['reportees'] == '')
			{			
				$qry = " select e.user_name as er_name, count(d.user_id) as preprospectcount from crm_pre_prospect d inner join crm_user e
				on d.user_id = e.login_user_id 
				where d.status in ('Active', 'Converted') and d.pre_prospect_date between '" . $fromdate . "' and '" . $todate . "'" .
				" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
				in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "'" . ")" .
				" and a.login_user_id = c.login_user_id and c.login_user_id <> 'A0001' )" .
				" group by er_name";
				
				//" and a.login_user_id = c.login_user_id ) " .
				//" and a.login_user_id = c.login_user_id and c.designation = 'Sales Engineer') " .
				//trigger_error( "Employee wise Query - " . $qry);
			}
			else
			{
				$qry = " select e.user_name as er_name, count(d.user_id) as preprospectcount from crm_pre_prospect d inner join crm_user e
				on d.user_id = e.login_user_id 
				where d.status in ('Active', 'Converted') and d.pre_prospect_date between '" . $fromdate . "' and '" . $todate . "'" .
				" and d.user_id in " . $_SESSION['reportees'] .
				" group by er_name";
			}
		}
	else
		{
			$salesengs = str_replace(",", "','" , $salesengs1);
			$salesengs = "'" . $salesengs . "'";
			//$qry = " select count(*) as prospectcount from crm_prospect where prospect_date between '" . $fromdate . "' and '" . $todate . "' and user_id = '" . $_SESSION['user_id'] . "'" . " and region_code = '" . $_SESSION['region'] . "'" . " and industry_segment in (" . $segments . ") group by industry_segment order by industry_segment";	
			//$qry = " select trim(region_code) as region_code, trim(industry_segment) as industry_segment, count(*) as prospectcount from crm_prospect status in ('Active', 'Converted') and where prospect_date between '" . $fromdate . "' and '" . $todate . "'" . " and industry_segment in (" . $segments . ") group by region_code, industry_segment order by industry_segment,region_code  ";
			$qry = " select e.user_name as er_name, count(d.user_id) as preprospectcount from crm_pre_prospect d inner join crm_user e
			on d.user_id = e.login_user_id 
			where d.status in ('Active', 'Converted') and d.pre_prospect_date between '" . $fromdate . "' and '" . $todate . "'" .
			" and d.user_id in (" . $salesengs . ") " .
			" group by er_name";
		}
	
	$st = $conn->prepare( $qry );
	//trigger_error( "Region and Segment Query - " . $qry);
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
 
	  array_push($list,array($row['er_name'], intval($row['preprospectcount'])));
	  //array_push($list,intval($row['prospectcount']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}

	public static function getSaleEngAreaPreProspectCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$fromdate = $_SESSION['fromdate'];
	$todate = $_SESSION['todate'];
	$salesengs1 = $_SESSION['salesengs'];
	$salesengs = '';
	
	// Change  Log 2014.04.28-1
	// 28-Apr-2014 - Kuppuram
	// c.designation = 'Sales Engineer' has been changed to 
	// c.login_user_id <> 'A0001'
	
	if ($salesengs1 == 'All')
		{
			
			//$qry = " select trim(region_code) as region_code, trim(industry_segment) as industry_segment, count(*) as prospectcount from crm_prospect 
			//		where status in ('Active', 'Converted') and prospect_date between '" . $fromdate . "' and '" . $todate . "'" . " group by region_code, industry_segment order by industry_segment,region_code  ";
			if ($_SESSION['reportees'] == '')
			{		
				$qry = " select e.user_name as er_name, d.area_code, count(d.area_code) as preprospectcount from crm_pre_prospect d inner join crm_user e
				on d.user_id = e.login_user_id 
				where d.status in ('Active', 'Converted') and d.pre_prospect_date between '" . $fromdate . "' and '" . $todate . "'" .
				" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
				in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "'" . ")" .
				" and a.login_user_id = c.login_user_id and c.login_user_id <> 'A0001' ) " .
				" group by er_name, d.area_code order by er_name, d.area_code" ;
				/* " union " .
				" select d.area_code as er_name, count(d.user_id) as preprospectcount from crm_pre_prospect d 
				where d.status in ('Active', 'Converted') and d.pre_prospect_date between '" . $fromdate . "' and '" . $todate . "'" .
				" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
				in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "'" . ")" .
				" and a.login_user_id = c.login_user_id ) 
				 group by er_name "; */
			}
			else
			{
				$qry = " select e.user_name as er_name, d.area_code, count(d.area_code) as preprospectcount from crm_pre_prospect d inner join crm_user e
				on d.user_id = e.login_user_id 
				where d.status in ('Active', 'Converted') and d.pre_prospect_date between '" . $fromdate . "' and '" . $todate . "'" .
				" and d.user_id in " . $_SESSION['reportees'] .
				" group by er_name, d.area_code order by er_name, d.area_code" ;
			}
			
		
		}
	else
		{
			$salesengs = str_replace(",", "','" , $salesengs1);
			$salesengs = "'" . $salesengs . "'";
			//$qry = " select count(*) as prospectcount from crm_prospect where prospect_date between '" . $fromdate . "' and '" . $todate . "' and user_id = '" . $_SESSION['user_id'] . "'" . " and region_code = '" . $_SESSION['region'] . "'" . " and industry_segment in (" . $segments . ") group by industry_segment order by industry_segment";	
			//$qry = " select trim(region_code) as region_code, trim(industry_segment) as industry_segment, count(*) as prospectcount from crm_prospect status in ('Active', 'Converted') and where prospect_date between '" . $fromdate . "' and '" . $todate . "'" . " and industry_segment in (" . $segments . ") group by region_code, industry_segment order by industry_segment,region_code  ";
			$qry = " select e.user_name as er_name, d.area_code, count(d.area_code) as preprospectcount from crm_pre_prospect d inner join crm_user e
			on d.user_id = e.login_user_id 
			where d.status in ('Active', 'Converted') and d.pre_prospect_date between '" . $fromdate . "' and '" . $todate . "'" .
			" and d.user_id in (" . $salesengs . ") " .
			" group by er_name, d.area_code order by er_name, d.area_code" ;
		}
	
	$st = $conn->prepare( $qry );
	//trigger_error( "Region and Segment Query - " . $qry);
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
 
	  array_push($list,array($row['er_name'] . ' - ' . $row['area_code'], intval($row['preprospectcount'])));
	  //array_push($list,intval($row['prospectcount']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}

	// For CRM
	
	public static function getSaleEngProspectCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$fromdate = $_SESSION['fromdate'];
	$todate = $_SESSION['todate'];
	$salesengs1 = $_SESSION['salesengs'];
	$salesengs = '';
	
	// Change  Log 2014.04.28-1
	// 28-Apr-2014 - Kuppuram
	// c.designation = 'Sales Engineer' has been changed to 
	// c.login_user_id <> 'A0001'
	
	if ($salesengs1 == 'All')
		{
			
			//$qry = " select trim(region_code) as region_code, trim(industry_segment) as industry_segment, count(*) as prospectcount from crm_prospect 
			//		where status in ('Active', 'Converted') and prospect_date between '" . $fromdate . "' and '" . $todate . "'" . " group by region_code, industry_segment order by industry_segment,region_code  ";
			if ($_SESSION['reportees'] == '')
			{		
				$qry = " select e.user_name as er_name, count(d.user_id) as prospectcount from crm_prospect d inner join crm_user e
				on d.user_id = e.login_user_id 
				where d.status in ('Active', 'Converted') and d.prospect_date between '" . $fromdate . "' and '" . $todate . "'" .
				" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
				in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "'" . ")" .
				" and a.login_user_id = c.login_user_id and c.login_user_id <> 'A0001') " .
				" group by er_name";
			}
			else
			{
				$qry = " select e.user_name as er_name, count(d.user_id) as prospectcount from crm_prospect d inner join crm_user e
				on d.user_id = e.login_user_id 
				where d.status in ('Active', 'Converted') and d.prospect_date between '" . $fromdate . "' and '" . $todate . "'" .
				" and d.user_id in " . $_SESSION['reportees'] .
				" group by er_name";
			}
		}
	else
		{
			$salesengs = str_replace(",", "','" , $salesengs1);
			$salesengs = "'" . $salesengs . "'";
			//$qry = " select count(*) as prospectcount from crm_prospect where prospect_date between '" . $fromdate . "' and '" . $todate . "' and user_id = '" . $_SESSION['user_id'] . "'" . " and region_code = '" . $_SESSION['region'] . "'" . " and industry_segment in (" . $segments . ") group by industry_segment order by industry_segment";	
			//$qry = " select trim(region_code) as region_code, trim(industry_segment) as industry_segment, count(*) as prospectcount from crm_prospect status in ('Active', 'Converted') and where prospect_date between '" . $fromdate . "' and '" . $todate . "'" . " and industry_segment in (" . $segments . ") group by region_code, industry_segment order by industry_segment,region_code  ";
			$qry = " select e.user_name as er_name, count(d.user_id) as prospectcount from crm_prospect d inner join crm_user e
			on d.user_id = e.login_user_id 
			where d.status in ('Active', 'Converted') and d.prospect_date between '" . $fromdate . "' and '" . $todate . "'" .
			" and d.user_id in (" . $salesengs . ") " .
			" group by er_name";
		}
	
	$st = $conn->prepare( $qry );
	//trigger_error( "Region and Segment Query - " . $qry);
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
 
	  array_push($list,array($row['er_name'], intval($row['prospectcount'])));
	  //array_push($list,intval($row['prospectcount']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getSaleEngLeadCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$fromdate = $_SESSION['fromdate'];
	$todate = $_SESSION['todate'];
	$from_month = date("m", strtotime($fromdate));
	$to_month = date("m", strtotime($todate));
	$from_year = date("Y", strtotime($fromdate));
	$to_year = date("Y", strtotime($todate));
	
	$salesengs1 = $_SESSION['salesengs'];
	$salesengs = '';
	
	// Change  Log 2014.04.28-1
	// 28-Apr-2014 - Kuppuram
	// c.designation = 'Sales Engineer' has been changed to 
	// c.login_user_id <> 'A0001'
	
	if ($salesengs1 == 'All')
		{
			if ($_SESSION['reportees'] == '')
			{
				$qry = " select e.user_name as er_name, count(d.user_id) as leadcount,
				(select sum(f.target_number) from crm_target f
				where f.engr_user_id = d.user_id " . " and f.p_l_o = 'Enq Gen' 
				and f.target_month between " . $from_month . " and " . $to_month . " and f.target_year between " . $from_year . " and " . $to_year .
				" group by f.engr_user_id) as target_count
				from crm_lead d inner join crm_user e
				on d.user_id = e.login_user_id 
				where d.status in ('Active', 'Converted') and d.lead_date between '" . $fromdate . "' and '" . $todate . "'" .
				" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
				in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "'" . ")" .
				" and a.login_user_id = c.login_user_id and c.login_user_id <> 'A0001') " .
				" group by d.user_id, er_name 
				order by er_name ";
			}
			else
			{
				$qry = " select e.user_name as er_name, count(d.user_id) as leadcount,
				(select sum(f.target_number) from crm_target f
				where f.engr_user_id = d.user_id " . " and f.p_l_o = 'Enq Gen' 
				and f.target_month between " . $from_month . " and " . $to_month . " and f.target_year between " . $from_year . " and " . $to_year .
				" group by f.engr_user_id) as target_count
				from crm_lead d inner join crm_user e
				on d.user_id = e.login_user_id 
				where d.status in ('Active', 'Converted') and d.lead_date between '" . $fromdate . "' and '" . $todate . "'" .
				" and d.user_id in " . $_SESSION['reportees'] .
				" group by d.user_id, er_name 
				order by er_name ";
			}

		}
	else
		{
			//where f.engr_user_id in (" . $salesengs . ") "  . " and f.p_l_o = 'Enq Gen' 
			$salesengs = str_replace(",", "','" , $salesengs1);
			$salesengs = "'" . $salesengs . "'";
			//$qry = " select count(*) as prospectcount from crm_prospect where prospect_date between '" . $fromdate . "' and '" . $todate . "' and user_id = '" . $_SESSION['user_id'] . "'" . " and region_code = '" . $_SESSION['region'] . "'" . " and industry_segment in (" . $segments . ") group by industry_segment order by industry_segment";	
			//$qry = " select trim(region_code) as region_code, trim(industry_segment) as industry_segment, count(*) as prospectcount from crm_prospect status in ('Active', 'Converted') and where prospect_date between '" . $fromdate . "' and '" . $todate . "'" . " and industry_segment in (" . $segments . ") group by region_code, industry_segment order by industry_segment,region_code  ";
			$qry = " select e.user_name as er_name, count(d.user_id) as leadcount,
			(select sum(f.target_number) from crm_target f
			where f.engr_user_id = d.user_id " . " and f.p_l_o = 'Enq Gen' 
			and f.target_month between " . $from_month . " and " . $to_month . " and f.target_year between " . $from_year . " and " . $to_year .
			" group by f.engr_user_id) as target_count
			from crm_lead d inner join crm_user e
			on d.user_id = e.login_user_id 
			where d.status in ('Active', 'Converted') and d.lead_date between '" . $fromdate . "' and '" . $todate . "'" .
			" and d.user_id in (" . $salesengs . ") " .
			" group by d.user_id, er_name 
			order by er_name ";
		}
	
	$st = $conn->prepare( $qry );
	//trigger_error( "Region and Segment Query - " . $qry);
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
 
	  array_push($list,array($row['er_name'], intval($row['leadcount']), intval($row['target_count'])));
	  //array_push($list,intval($row['prospectcount']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	public static function getSaleEngOppCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$fromdate = $_SESSION['fromdate'];
	$todate = $_SESSION['todate'];
	$from_month = date("m", strtotime($fromdate));
	$to_month = date("m", strtotime($todate));
	$from_year = date("Y", strtotime($fromdate));
	$to_year = date("Y", strtotime($todate));
	
	$salesengs1 = $_SESSION['salesengs'];
	$salesengs = '';
	
	// Change  Log 2014.04.28-1
	// 28-Apr-2014 - Kuppuram
	// c.designation = 'Sales Engineer' has been changed to 
	// c.login_user_id <> 'A0001'
	
	if ($salesengs1 == 'All')
		{
			if ($_SESSION['reportees'] == '')
			{			
				$qry = " select e.user_name as er_name, count(d.user_id) as oppcount,
				(select sum(f.target_number) from crm_target f
				where f.engr_user_id = d.user_id " . " and f.p_l_o = 'Enq Conv' 
				and f.target_month between " . $from_month . " and " . $to_month . " and f.target_year between " . $from_year . " and " . $to_year .
				" group by f.engr_user_id) as target_count,
				(select sum(g.target_number) from crm_target g
				where g.engr_user_id = d.user_id " . " and g.p_l_o = 'Enq Conv Won' 
				and g.target_month between " . $from_month . " and " . $to_month . " and g.target_year between " . $from_year . " and " . $to_year .
				" group by g.engr_user_id) as target_won_count,
				(select count(h.user_id) from crm_opportunity h
				where h.user_id = d.user_id " . " and h.status = 'Won' 
				and h.opportunity_date between '" . $fromdate . "' and '" . $todate . "'" .
				" group by h.user_id) as won_count,
				(select count(i.user_id) from crm_opportunity i
				where i.user_id = d.user_id " . " and i.status = 'Loss' 
				and i.opportunity_date between '" . $fromdate . "' and '" . $todate . "'" .
				" group by i.user_id) as loss_count
				from crm_opportunity d inner join crm_user e
				on d.user_id = e.login_user_id 
				where d.status in ('Active', 'Won', 'Lost','Indent') and d.opportunity_date between '" . $fromdate . "' and '" . $todate . "'" .
				" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code 
				in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "'" . ")" .
				" and a.login_user_id = c.login_user_id and c.login_user_id <> 'A0001') " .
				" group by d.user_id, e.user_name 
				 order by er_name ";
			}
			else
			{
				$qry = " select e.user_name as er_name, count(d.user_id) as oppcount,
				(select sum(f.target_number) from crm_target f
				where f.engr_user_id = d.user_id " . " and f.p_l_o = 'Enq Conv' 
				and f.target_month between " . $from_month . " and " . $to_month . " and f.target_year between " . $from_year . " and " . $to_year .
				" group by f.engr_user_id) as target_count,
				(select sum(g.target_number) from crm_target g
				where g.engr_user_id = d.user_id " . " and g.p_l_o = 'Enq Conv Won' 
				and g.target_month between " . $from_month . " and " . $to_month . " and g.target_year between " . $from_year . " and " . $to_year .
				" group by g.engr_user_id) as target_won_count,
				(select count(h.user_id) from crm_opportunity h
				where h.user_id = d.user_id " . " and h.status = 'Won' 
				and h.opportunity_date between '" . $fromdate . "' and '" . $todate . "'" .
				" group by h.user_id) as won_count,
				(select count(i.user_id) from crm_opportunity i
				where i.user_id = d.user_id " . " and i.status = 'Loss' 
				and i.opportunity_date between '" . $fromdate . "' and '" . $todate . "'" .
				" group by i.user_id) as loss_count
				from crm_opportunity d inner join crm_user e
				on d.user_id = e.login_user_id 
				where d.status in ('Active', 'Won', 'Lost','Indent') and d.opportunity_date between '" . $fromdate . "' and '" . $todate . "'" .
				" and d.user_id in " . $_SESSION['reportees'] .
				" group by d.user_id, e.user_name 
				 order by er_name ";
			}

		}
	else
		{
			$salesengs = str_replace(",", "','" , $salesengs1);
			$salesengs = "'" . $salesengs . "'";
			/* $qry = " select e.user_name as er_name, count(d.user_id) as oppcount from crm_opportunity d inner join crm_user e
			on d.user_id = e.login_user_id 
			where d.status in ('Active', 'Won', 'Lost','Indent') and d.opportunity_date between '" . $fromdate . "' and '" . $todate . "'" .
			" and d.user_id in (" . $salesengs . ") " .
			" group by er_name"; */
			
			$qry = " select e.user_name as er_name, count(d.user_id) as oppcount,
			(select sum(f.target_number) from crm_target f
			where f.engr_user_id = d.user_id " . " and f.p_l_o = 'Enq Conv' 
			and f.target_month between " . $from_month . " and " . $to_month . " and f.target_year between " . $from_year . " and " . $to_year .
			" group by f.engr_user_id) as target_count,
			(select sum(g.target_number) from crm_target g
			where g.engr_user_id = d.user_id " . " and g.p_l_o = 'Enq Conv Won' 
			and g.target_month between " . $from_month . " and " . $to_month . " and g.target_year between " . $from_year . " and " . $to_year .
			" group by g.engr_user_id) as target_won_count,
			(select count(h.user_id) from crm_opportunity h
			where h.user_id = d.user_id " . " and h.status = 'Won' 
			and h.opportunity_date between '" . $fromdate . "' and '" . $todate . "'" .
			" group by h.user_id) as won_count,
			(select count(i.user_id) from crm_opportunity i
			where i.user_id = d.user_id " . " and i.status = 'Loss' 
			and i.opportunity_date between '" . $fromdate . "' and '" . $todate . "'" .
			" group by i.user_id) as loss_count
			from crm_opportunity d inner join crm_user e
			on d.user_id = e.login_user_id 
			where d.status in ('Active', 'Won', 'Lost','Indent') and d.opportunity_date between '" . $fromdate . "' and '" . $todate . "'" .
			" and d.user_id in (" . $salesengs . ") " .
			" group by d.user_id, e.user_name order by er_name";
		}
	
	$st = $conn->prepare( $qry );
	//trigger_error( "Region and Segment Query - " . $qry);
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
 
	  array_push($list,array($row['er_name'], intval($row['oppcount']), intval($row['target_count']), intval($row['target_won_count']), intval($row['won_count']), intval($row['loss_count'])));
	  //array_push($list,intval($row['prospectcount']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}


	// For CRM
	public static function getRegionSegProspectCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$fromdate = $_SESSION['fromdate'];
	$todate = $_SESSION['todate'];
	$segments1 = $_SESSION['segments'];
	$segments = '';
	
	// Change  Log 2014.04.28-1
	// 28-Apr-2014 - Kuppuram
	// c.designation = 'Sales Engineer' has been changed to 
	// c.login_user_id <> 'A0001'
	
	if ($segments1 == 'All')
		{
			if ($_SESSION['reportees'] == '')
			{
				$qry = " select trim(d.region_code) as region_code, trim(d.industry_segment) as industry_segment, count(d.*) as prospectcount from crm_prospect d
						where d.status in ('Active', 'Converted') and d.prospect_date between '" . $fromdate . "' and '" . $todate . "'" . 		
						" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code " .
						" in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "'" . ")" .
						" and a.login_user_id = c.login_user_id and " .
						" c.login_user_id <> 'A0001') " .
						" group by region_code, industry_segment order by prospectcount, industry_segment,region_code  ";
			}
			else
			{
				$qry = " select trim(d.region_code) as region_code, trim(d.industry_segment) as industry_segment, count(d.*) as prospectcount from crm_prospect d
						where d.status in ('Active', 'Converted') and d.prospect_date between '" . $fromdate . "' and '" . $todate . "'" . 		
						" and d.user_id in " . $_SESSION['reportees'] .
						" group by region_code, industry_segment order by prospectcount, industry_segment,region_code  ";
			}
		}
	else
		{
			$segments = str_replace(",", "','" , $segments1);
			$segments = "'" . $segments . "'";
			if ($_SESSION['reportees'] == '')
			{
				$qry = " select trim(d.region_code) as region_code, trim(d.industry_segment) as industry_segment, count(d.*) as prospectcount from crm_prospect d
						where d.status in ('Active', 'Converted') and d.prospect_date between '" . $fromdate . "' and '" . $todate . "'" . 		
						" and d.industry_segment in (" . $segments . ") " .
						" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code " .
						" in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "'" . ")" .
						" and a.login_user_id = c.login_user_id and " . 
						" c.login_user_id <> 'A0001') " .
						" group by region_code, industry_segment order by prospectcount desc, industry_segment,region_code  ";
			}
			else
			{
				$qry = " select trim(d.region_code) as region_code, trim(d.industry_segment) as industry_segment, count(d.*) as prospectcount from crm_prospect d
						where d.status in ('Active', 'Converted') and d.prospect_date between '" . $fromdate . "' and '" . $todate . "'" . 		
						" and d.industry_segment in (" . $segments . ") " .
						" and d.user_id in " . $_SESSION['reportees'] .
						" group by region_code, industry_segment order by prospectcount desc, industry_segment,region_code  ";
			}
		}
	
	$st = $conn->prepare( $qry );
	//trigger_error( "Region and Segment Query - " . $qry);
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
 
	  array_push($list,array($row['region_code'], $row['industry_segment'],intval($row['prospectcount'])));
	  //array_push($list,intval($row['prospectcount']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	
	
	// For CRM
	public static function getRegionSegLeadCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$fromdate = $_SESSION['fromdate'];
	$todate = $_SESSION['todate'];
	$segments1 = $_SESSION['segments'];
	$segments = '';
	
	// Change  Log 2014.04.28-1
	// 28-Apr-2014 - Kuppuram
	// c.designation = 'Sales Engineer' has been changed to 
	// c.login_user_id <> 'A0001'
	
	if ($segments1 == 'All')
		{
			if ($_SESSION['reportees'] == '')
			{
				$qry = " select trim(d.region_code) as region_code, trim(d.industry_segment) as industry_segment, count(d.*) as leadcount from crm_lead d
						where d.status in ('Active', 'Converted') and d.lead_date between '" . $fromdate . "' and '" . $todate . "'" . 		
						" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code " .
						" in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "'" . ")" .
						" and a.login_user_id = c.login_user_id and " .
						" c.login_user_id <> 'A0001') " .
						" group by region_code, industry_segment order by leadcount, industry_segment,region_code  ";
			}
			else
			{
				$qry = " select trim(d.region_code) as region_code, trim(d.industry_segment) as industry_segment, count(d.*) as leadcount from crm_lead d
						where d.status in ('Active', 'Converted') and d.lead_date between '" . $fromdate . "' and '" . $todate . "'" . 		
						" and d.user_id in " . $_SESSION['reportees'] .
						" group by region_code, industry_segment order by leadcount, industry_segment,region_code  ";
			}
		}
	else
		{
			$segments = str_replace(",", "','" , $segments1);
			$segments = "'" . $segments . "'";
			if ($_SESSION['reportees'] == '')
			{
				$qry = " select trim(d.region_code) as region_code, trim(d.industry_segment) as industry_segment, count(d.*) as leadcount from crm_lead d
						where d.status in ('Active', 'Converted') and d.lead_date between '" . $fromdate . "' and '" . $todate . "'" . 		
						" and d.industry_segment in (" . $segments . ") " .
						" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code " .
						" in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "'" . ")" .
						" and a.login_user_id = c.login_user_id and " .
						" c.login_user_id <> 'A0001') " .
						" group by region_code, industry_segment order by leadcount, industry_segment,region_code  ";
			}
			else
			{
				$qry = " select trim(d.region_code) as region_code, trim(d.industry_segment) as industry_segment, count(d.*) as leadcount from crm_lead d
						where d.status in ('Active', 'Converted') and d.lead_date between '" . $fromdate . "' and '" . $todate . "'" . 		
						" and d.industry_segment in (" . $segments . ") " .
						" and d.user_id in " . $_SESSION['reportees'] .
						" group by region_code, industry_segment order by leadcount, industry_segment,region_code  ";
			}
		}
	
	$st = $conn->prepare( $qry );
	//trigger_error( "Region and Segment Query - " . $qry);
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
 
	  array_push($list,array($row['region_code'], $row['industry_segment'],intval($row['leadcount'])));
	  //array_push($list,intval($row['prospectcount']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	// For CRM
	public static function getRegionSegOppCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$fromdate = $_SESSION['fromdate'];
	$todate = $_SESSION['todate'];
	$segments1 = $_SESSION['segments'];
	$segments = '';
	
	// Change  Log 2014.04.28-1
	// 28-Apr-2014 - Kuppuram
	// c.designation = 'Sales Engineer' has been changed to 
	// c.login_user_id <> 'A0001'
	
	if ($segments1 == 'All')
		{
			if ($_SESSION['reportees'] == '')
			{
				$qry = " select trim(d.region_code) as region_code, trim(d.industry_segment) as industry_segment, count(d.*) as oppcount from crm_opportunity d
						where d.status in ('Active', 'Won', 'Lost') and d.opportunity_date between '" . $fromdate . "' and '" . $todate . "'" . 		
						" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code " .
						" in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "'" . ")" .
						" and a.login_user_id = c.login_user_id and " . 
						" c.login_user_id <> 'A0001') " .
						" group by region_code, industry_segment order by oppcount, industry_segment,region_code  ";
			}
			else
			{
				$qry = " select trim(d.region_code) as region_code, trim(d.industry_segment) as industry_segment, count(d.*) as oppcount from crm_opportunity d
						where d.status in ('Active', 'Won', 'Lost') and d.opportunity_date between '" . $fromdate . "' and '" . $todate . "'" . 		
						" and d.user_id in " . $_SESSION['reportees']  .
						" group by region_code, industry_segment order by oppcount, industry_segment,region_code  ";
			}
		}
	else
		{
			$segments = str_replace(",", "','" , $segments1);
			$segments = "'" . $segments . "'";
			if ($_SESSION['reportees'] == '')
			{	
				$qry = " select trim(d.region_code) as region_code, trim(d.industry_segment) as industry_segment, count(d.*) as oppcount from crm_opportunity d
						where d.status in ('Active', 'Won', 'Lost') and d.opportunity_date between '" . $fromdate . "' and '" . $todate . "'" . 		
						" and d.industry_segment in (" . $segments . ") " .
						" and d.user_id in (select distinct a.login_user_id from crm_user_areas a, crm_user c where a.area_code " .
						" in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION['user_id'] . "'" . ")" .
						" and a.login_user_id = c.login_user_id and " .
						" c.login_user_id <> 'A0001') " .
						" group by region_code, industry_segment order by oppcount, industry_segment,region_code  ";	
			}
			else
			{
				$qry = " select trim(d.region_code) as region_code, trim(d.industry_segment) as industry_segment, count(d.*) as oppcount from crm_opportunity d
						where d.status in ('Active', 'Won', 'Lost') and d.opportunity_date between '" . $fromdate . "' and '" . $todate . "'" . 		
						" and d.industry_segment in (" . $segments . ") " .
						" and d.user_id in " . $_SESSION['reportees']  .
						" group by region_code, industry_segment order by oppcount, industry_segment,region_code  ";	
			}
		}
	
	$st = $conn->prepare( $qry );
	//trigger_error( "Region and Segment Query - " . $qry);
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
 
	  array_push($list,array($row['region_code'], $row['industry_segment'],intval($row['oppcount'])));
	  //array_push($list,intval($row['prospectcount']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	// For CRM
	/* public static function getRegionSegProspectTicks() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$fromdate = $_SESSION['fromdate'];
	$todate = $_SESSION['todate'];
	$segments1 = $_SESSION['segments'];
	$segments = '';
	
	
	if ($segments1 == 'All')
		{
			//$qry = " select industry_segment from crm_prospect where prospect_date between '" . $fromdate . "' and '" . $todate . "' and user_id = '" . $_SESSION['user_id'] . "'" . " and region_code in ('East', 'West','North','South') group by industry_segment order by industry_segment";	
			$qry = " select industry_segment from crm_prospect where prospect_date between '" . $fromdate . "' and '" . $todate . "'" . " and region_code in ('East', 'West','North','South') group by industry_segment order by industry_segment";	
		}
	else
		{
			$segments = str_replace(",", "','" , $segments1);
			$segments = "'" . $segments . "'";
			//$qry = " select industry_segment from crm_prospect where prospect_date between '" . $fromdate . "' and '" . $todate . "' and user_id = '" . $_SESSION['user_id'] . "'" . " and region_code in ('East', 'West','North','South')" .  " and industry_segment in (" . $segments . ") group by industry_segment order by industry_segment";	
			$qry = " select industry_segment from crm_prospect where prospect_date between '" . $fromdate . "' and '" . $todate . "'" . " and region_code in ('East', 'West','North','South')" .  " and industry_segment in (" . $segments . ") group by industry_segment order by industry_segment";	
			
		}
	
	$st = $conn->prepare( $qry );
	//trigger_error( "Region and Segment Query - " . $qry);
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
 
	  //array_push($list,array($row['region_code'] .' - '. $row['industry_segment'],intval($row['prospectcount'])));
	  array_push($list,$row['industry_segment']);
    }

    $conn = null;
		
    echo(json_encode($list));
	} */
	
	// For CRM
	public static function getTeamProspectCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = $_SESSION['month'];
	$year = $_SESSION['year'];

	// Change Log - 2014.07.04-1
	// 05-Jul-2014 - Kuppuram
	// Home Page Team wise graph is not properly showing
	// The following query is commented and new query is added below
	
	/* $qry = "select  b.user_name, count(a.prospect_code) as prospectcount 
			from crm_prospect a, crm_user b
			where a.status in ('Active', 'Converted') and date_part('month',a.prospect_date) = " . $mon . "
			and date_part('year',a.prospect_date) = " . $year  . "
			and a.user_id in (select c.login_user_id from crm_user c 
								where c.branch_code = (select distinct d.branch_code from crm_user d 
								where d.login_user_id = '" . $_SESSION['user_id'] . "'))  
			and a.user_id = b.login_user_id
			group by b.user_name order by b.user_name"; */
	
	// Kuppuram - 18-Sep-2014
	// nick_name
	// $qry = "select  b.user_name, count(a.prospect_code) as prospectcount 
	if ($_SESSION['reportees'] == '')
	{
		$qry = "select  b.nick_name, count(a.prospect_code) as prospectcount 
				from crm_prospect a, crm_user b
				where a.status in ('Active', 'Converted') and date_part('month',a.prospect_date) = " . $mon . "
				and date_part('year',a.prospect_date) = " . $year  . "
				and a.user_id in (select distinct e.login_user_id from crm_user_areas e, crm_user f where e.area_code 
								in (select g.area_code from crm_user_areas g where g.login_user_id = '" . $_SESSION['user_id'] . "' )
							and e.login_user_id = f.login_user_id and f.login_user_id <> 'A0001' )
				and a.user_id = b.login_user_id
				group by b.nick_name order by prospectcount desc";
	}
	else
	{
		$qry = "select  b.nick_name, count(a.prospect_code) as prospectcount 
				from crm_prospect a, crm_user b
				where a.status in ('Active', 'Converted') and date_part('month',a.prospect_date) = " . $mon . "
				and date_part('year',a.prospect_date) = " . $year  . "
				and a.user_id in " . $_SESSION['reportees'] . 
				" and a.user_id = b.login_user_id
				group by b.nick_name order by prospectcount desc";
	}
			
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {

	  array_push($list,array($row['nick_name'],intval($row['prospectcount'])));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	// For CRM
	public static function getTeamLeadCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = $_SESSION['month'];
	$year = $_SESSION['year'];
	
	// Change Log - 2014.07.04-1
	// 05-Jul-2014 - Kuppuram
	// Home Page Team wise graph is not properly showing
	// The following query is commented and new query is added below
	
	
	
	/* $qry = "select  b.user_name, count(a.lead_code) as leadcount 
			from crm_lead a, crm_user b
			where a.status in ('Active', 'Converted','Deferred') and date_part('month',a.lead_date) = " . $mon . "
			and date_part('year',a.lead_date) = " . $year  . "
			and a.user_id in (select c.login_user_id from crm_user c where c.branch_code = (select distinct d.branch_code from crm_user d where d.login_user_id = '" . $_SESSION['user_id'] . "'))  
			and a.user_id = b.login_user_id
			group by b.user_name order by b.user_name"; */
	
	// Kuppuram - 18-Sep-2014
	// nick_name	
	//$qry = "select  b.user_name, count(a.lead_code) as leadcount 
	if ($_SESSION['reportees'] == '')
	{
		$qry = "select  b.nick_name, count(a.lead_code) as leadcount 
				from crm_lead a, crm_user b
				where a.status in ('Active', 'Converted') and date_part('month',a.lead_date) = " . $mon . "
				and date_part('year',a.lead_date) = " . $year  . "
				and a.user_id in (select distinct e.login_user_id from crm_user_areas e, crm_user f where e.area_code 
								in (select g.area_code from crm_user_areas g where g.login_user_id = '" . $_SESSION['user_id'] . "' )
							and e.login_user_id = f.login_user_id and f.login_user_id <> 'A0001' )
				and a.user_id = b.login_user_id
				group by b.nick_name order by leadcount desc";			
	}
	else
	{
		$qry = "select  b.nick_name, count(a.lead_code) as leadcount 
				from crm_lead a, crm_user b
				where a.status in ('Active', 'Converted') and date_part('month',a.lead_date) = " . $mon . "
				and date_part('year',a.lead_date) = " . $year  . "
				and a.user_id in " . $_SESSION['reportees'] . 
				" and a.user_id = b.login_user_id
				group by b.nick_name order by leadcount desc";	
	}
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {

	  array_push($list,array($row['nick_name'],intval($row['leadcount'])));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	// For CRM
	public static function getTeamOppCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = $_SESSION['month'];
	$year = $_SESSION['year'];
	
	// Change Log - 2014.07.04-1
	// 05-Jul-2014 - Kuppuram
	// Home Page Team wise graph is not properly showing
	// The following query is commented and new query is added below
	
	/* $qry = "select  b.user_name, count(a.opportunity_code) as oppcount 
			from crm_opportunity a, crm_user b
			where a.status in ('Active', 'Won', 'Lost') and date_part('month',a.opportunity_date) = " . $mon . "
			and date_part('year',a.opportunity_date) = " . $year  . "
			and a.user_id in (select c.login_user_id from crm_user c where c.branch_code = (select distinct d.branch_code from crm_user d where d.login_user_id = '" . $_SESSION['user_id'] . "'))  
			and a.user_id = b.login_user_id
			group by b.user_name order by b.user_name"; */
	
	// Kuppuram - 18-Sep-2014
	// nick_name
	//$qry = "select  b.user_name, count(a.opportunity_code) as oppcount 
	if ($_SESSION['reportees'] == '')
	{
		$qry = "select  b.nick_name, count(a.opportunity_code) as oppcount 
				from crm_opportunity a, crm_user b
				where a.status in ('Active', 'Won', 'Lost') and date_part('month',a.opportunity_date) = " . $mon . "
				and date_part('year',a.opportunity_date) = " . $year  . "
				and a.user_id in (select distinct e.login_user_id from crm_user_areas e, crm_user f where e.area_code 
								in (select g.area_code from crm_user_areas g where g.login_user_id = '" . $_SESSION['user_id'] . "' )
							and e.login_user_id = f.login_user_id and f.login_user_id <> 'A0001' )
				and a.user_id = b.login_user_id
				group by b.nick_name order by oppcount desc";			
	}
	else
	{
		$qry = "select  b.nick_name, count(a.opportunity_code) as oppcount 
				from crm_opportunity a, crm_user b
				where a.status in ('Active', 'Won', 'Lost') and date_part('month',a.opportunity_date) = " . $mon . "
				and date_part('year',a.opportunity_date) = " . $year  . "
				and a.user_id in " . $_SESSION['reportees'] .
				" and a.user_id = b.login_user_id
				group by b.nick_name order by oppcount desc";
	}
			
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {

	  array_push($list,array($row['nick_name'],intval($row['oppcount'])));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	//////////////////////////////
	
	// For CRM
	
	public static function getTaskWeeks() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = date('n');
	$year = date('Y');
	$qry = "select date_trunc('week', task_done_date)::date || ' - ' ||
			(date_trunc('week', task_done_date) + '6 days') ::date as taskweeks
			from crm_opportunity_tasks
			where date_part('month',task_done_date) = ". $mon . " and date_part('year',task_done_date) = " . $year . " and task_type = 'CustomerVisit' and status = 'Completed' 
			group by date_trunc('week', task_done_date)
			order by date_trunc('week', task_done_date)";
	
    
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      //$list[] = new ezfms_dropdown( $row );
	  array_push($list,array($row['taskweeks']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	// For CRM
	
	public static function getTaskCount() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = date('n');
	$year = date('Y');
	if ($_SESSION['month'] == 'previousmonth')
	{
		if ($mon == 1)
		{
			$mon = 12;
			$year = $year - 1;
		}
		else
		{
			$mon = $mon - 1;
		}
		
	}
	
	//trigger_error( "Month - " . $mon);
	$qry = "select count(task_type) as taskcount
			from crm_opportunity_tasks
			where date_part('month',task_done_date) = ". $mon . " and date_part('year',task_done_date) = " . $year . " and task_type = 'CustomerVisit'  and status = 'Completed'
			group by date_trunc('week', task_done_date)";
			
	
    
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      //$list[] = new ezfms_dropdown( $row );
	  array_push($list,array($row['taskcount']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	// For CRM
	
	public static function getTaskCountp() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = date('n');
	$year = date('Y');
	
	if ($_SESSION['month'] == 'previousmonth')
	{
		if ($mon == 1)
		{
			$mon = 12;
			$year = $year - 1;
		}
		else
		{
			$mon = $mon - 1;
		}
		
	}
	$qry = "select count(task_type) as taskcount
			from crm_prospect_tasks
			where date_part('month',task_done_date) = ". $mon . " and date_part('year',task_done_date) = " . $year . " and task_type = 'CustomerVisit'  and status = 'Completed' 
			group by date_trunc('week', task_done_date)";
			
	
    
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      //$list[] = new ezfms_dropdown( $row );
	  array_push($list,array($row['taskcount']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	// For CRM
	
	public static function getTaskCountl() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$mon = date('n');
	$year = date('Y');
	
	if ($_SESSION['month'] == 'previousmonth')
	{
		if ($mon == 1)
		{
			$mon = 12;
			$year = $year - 1;
		}
		else
		{
			$mon = $mon - 1;
		}
		
	}
	$qry = "select count(task_type) as taskcount
			from crm_lead_tasks
			where date_part('month',task_done_date) = ". $mon . " and date_part('year',task_done_date) = " . $year . " and task_type = 'CustomerVisit' and status = 'Completed'
			group by date_trunc('week', task_done_date)";
			
	
    
	$st = $conn->prepare( $qry );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      //$list[] = new ezfms_dropdown( $row );
	  array_push($list,array($row['taskcount']));
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
	
		
	
	public static function wssyncdown( $company_seq_no, $table_name, $modifiedon ) {
    $qry = "";
	try
	{
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$qry = "SELECT * from " . $table_name . " where company_seq_no = " . $company_seq_no . " and modifiedon > '" . $modifiedon . "' order by modifiedon";
	
    $st = $conn->prepare( $qry );
	$st->bindValue( ":company_seq_no", $company_seq_no, PDO::PARAM_INT );
    $st->bindValue( ":modifiedon", $modifiedon, PDO::PARAM_STR );
    $st->execute();
	$list = array();

	$list = $st->fetchAll(PDO::FETCH_ASSOC);
    
	}
	catch (PDOException $e)
    {
		trigger_error( "Synx:retrieve(): Couldn't execute query for the table - " . $table_name . " - " . $e->getMessage());
		$conn = null;
		return "Error";	
	}
	$conn = null;
	//echo(json_encode($list));
    if ( $list ) 
	{
		echo(json_encode($list));
		
		
		return "Success";
	}
	else
	{
		//return "No Row";
		return $qry;
	}
	
  }
	
	public static function wssyncdowncount( $company_seq_no, $table_name, $modifiedon ) {
    try
	{
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$qry = "SELECT count(*) as rowcount from " . $table_name . " where company_seq_no = " . $company_seq_no . " and modifiedon > " . $modifiedon;
	
    $st = $conn->prepare( $qry );
	$st->bindValue( ":company_seq_no", $company_seq_no, PDO::PARAM_INT );
    $st->bindValue( ":modifiedon", $modifiedon, PDO::PARAM_STR );
    $st->execute();
	$list = array();

	$list = $st->fetchAll(PDO::FETCH_ASSOC);
    
	}
	catch (PDOException $e)
    {
		trigger_error( "Synx:retrieve(): Couldn't execute query for the table - " . $table_name . " - " . $e->getMessage());
		$conn = null;
		return "Error";	
	}
	$conn = null;
	//echo(json_encode($list));
    if ( $list ) 
	{
		echo(json_encode($list));
		
		
		return "Success";
	}
	else
	{
		return "No Row";
	}
	
  }
  
  
  //CRM
  
  public static function getPageHelp($menu_id, $page_mode) {
    $status = 'A';
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	
    $st = $conn->prepare( "SELECT sort_order, help_line_text
							FROM crm_page_help where menu_id = :menu_id and page_mode = :page_mode order by sort_order");
	$st->bindValue( ":menu_id", $menu_id , PDO::PARAM_STR ); 
	$st->bindValue( ":page_mode", $page_mode , PDO::PARAM_STR ); 
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	
	
  // CRM
  
  public static function getProducts() {
    $status = 'A';
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	
    $st = $conn->prepare( "SELECT product_group_code, product_code, product_description 
							FROM crm_product where status = :status order by product_description");
	$st->bindValue( ":status", $status , PDO::PARAM_STR ); 
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	 public static function getProductsBPV() {
    $status = 'A';
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	
    $st = $conn->prepare( "SELECT product_group_code, product_code, product_description 
							FROM crm_product where status = :status and product_code = 'S011123' order by product_description");
	$st->bindValue( ":status", $status , PDO::PARAM_STR ); 
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	public static function getMainProducts() {
    $status = 'A';
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	
    $st = $conn->prepare( "SELECT coalesce(product_description,'') || '~' || coalesce(product_code,'') ||'~' || coalesce(basic_price,0) ||'~'|| coalesce(opl,0) ||'~'|| coalesce(discount_allowed,0) as productdetails 
							FROM crm_product where status = :status and product_group_code <> 'ACCESSORY' order by product_description");
	$st->bindValue( ":status", $status , PDO::PARAM_STR ); 
    $st->execute();
	
	$list = array();

    /* while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    } */
	while ( $row = $st->fetch() ) {
     
	  array_push($list,array($row['productdetails']));
    }

    $conn = null;
    echo(json_encode($list));
	}
	
	public static function getAccessoryProducts() {
    $status = 'A';
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	
    $st = $conn->prepare( "SELECT coalesce(product_description,'') || '~' || coalesce(product_code,'') ||'~' || coalesce(basic_price,0) ||'~'|| coalesce(opl,0) ||'~'|| coalesce(discount_allowed,0) as productdetails 
							FROM crm_product where status = :status and product_group_code = 'ACCESSORY' order by product_description");
	$st->bindValue( ":status", $status , PDO::PARAM_STR ); 
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
     
	  array_push($list,array($row['productdetails']));
    }


    $conn = null;
    echo(json_encode($list));
	}
	
	// Change Log - 2015.02.09-1
	// 09-Feb-2015 - Kuppuram
	// For ID, get price from crm_product_price
	public static function getMainProductsID() {
    $status = 'A';
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	
    $st = $conn->prepare( "SELECT coalesce(a.product_description,'') || '~' || coalesce(a.product_code,'') ||
				'~' || coalesce(b.dealer_price,0) ||'~'|| coalesce(b.customer_price,0) ||'~'
				|| coalesce(b.discount_allowed,0) as productdetails 
				FROM crm_product a, crm_product_price b 
				where a.product_code = b.product_code  and
				a.status = :status and a.product_group_code <> 'ACCESSORY' 
				and b.sales_division_code = :sales_division_code
				and b.country = :country
				and b.dealer_code = :dealer_code
				and b.currency = :currency
				order by product_description");
	$st->bindValue( ":status", $status , PDO::PARAM_STR ); 
	$st->bindValue( ":sales_division_code", $_SESSION['sales_division_code'] , PDO::PARAM_STR ); 
	$st->bindValue( ":country", 'ALL' , PDO::PARAM_STR ); 
	$st->bindValue( ":dealer_code", 'ALL' , PDO::PARAM_STR ); 
	$st->bindValue( ":currency", 'USD' , PDO::PARAM_STR ); 
    $st->execute();
	
	$list = array();

    /* while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    } */
	while ( $row = $st->fetch() ) {
     
	  array_push($list,array($row['productdetails']));
    }

    $conn = null;
    echo(json_encode($list));
	}
	
	// Change Log - 2015.02.09-1
	// 09-Feb-2015 - Kuppuram
	// For ID, get price from crm_product_price
	public static function getAccessoryProductsID() {
    $status = 'A';
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	
    $st = $conn->prepare( "SELECT coalesce(a.product_description,'') || '~' || coalesce(a.product_code,'') ||
				'~' || coalesce(b.dealer_price,0) ||'~'|| coalesce(b.customer_price,0) ||'~'
				|| coalesce(b.discount_allowed,0) as productdetails 
				FROM crm_product a, crm_product_price b 
				where a.product_code = b.product_code  and
				a.status = :status and a.product_group_code = 'ACCESSORY' 
				and b.sales_division_code = :sales_division_code
				and b.country = :country
				and b.dealer_code = :dealer_code
				and b.currency = :currency
				order by product_description");
	$st->bindValue( ":status", $status , PDO::PARAM_STR ); 
	$st->bindValue( ":sales_division_code", $_SESSION['sales_division_code'] , PDO::PARAM_STR ); 
	$st->bindValue( ":country", 'ALL' , PDO::PARAM_STR ); 
	$st->bindValue( ":dealer_code", 'ALL' , PDO::PARAM_STR ); 
	$st->bindValue( ":currency", 'USD' , PDO::PARAM_STR ); 
    $st->execute();
	
	$list = array();

    /* while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    } */
	while ( $row = $st->fetch() ) {
     
	  array_push($list,array($row['productdetails']));
    }

    $conn = null;
    echo(json_encode($list));
	}
	
  // CRM
  
  // CRM
  
  public static function getCompetitions($product_code) {
    $status = 'A';
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	
	if ($product_code == 'all')
	{
		$st = $conn->prepare( "select distinct elgi_competitor_id as competitor_id from crm_bpv where elgi_competitor_id <> 'ELGI' and status = 'None'");
		
	}
	else
	{
		$st = $conn->prepare( "select distinct elgi_competitor_id as competitor_id from crm_bpv where elgi_competitor_id <> 'ELGI' and product_code = :product_code and status = :status");
		$st->bindValue( ":status", $status , PDO::PARAM_STR ); 
		$st->bindValue( ":product_code", $product_code , PDO::PARAM_STR ); 						
	}
    $st->execute();
	
	$list = array();

    /* while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list; */
	
	 while ( $row = $st->fetch() ) {
  
	  array_push($list,array($row['competitor_id']));
	   
    }

    $conn = null;
		
    echo(json_encode($list));
	}
	
  // CRM
  
  // CRM
  
  public static function getCompetitionProducts($product_code, $competitor_id) {
    $status = 'A';
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	
	if ($product_code == 'all')
	{
		$st = $conn->prepare( "SELECT competitor_product as competitor_product
							FROM crm_bpv where elgi_competitor_id <> 'ELGI' and status = 'None'");
		
	}
	else
	{
		$st = $conn->prepare( "SELECT distinct competitor_product as competitor_product
								FROM crm_bpv where elgi_competitor_id = :competitor_id and product_code = :product_code and status = :status");
		$st->bindValue( ":competitor_id", $competitor_id , PDO::PARAM_STR ); 						
		$st->bindValue( ":product_code", $product_code , PDO::PARAM_STR ); 						
		$st->bindValue( ":status", $status , PDO::PARAM_STR ); 
	}
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
  
	  array_push($list,array($row['competitor_product']));
	   
    }

    $conn = null;
		
    echo(json_encode($list));

	}
	
  // CRM
  
   // CRM
  
  public static function getBPVDetails($imode, $product_code, $competitor_id,$competitor_product,$hours ,$years, $einsurance,$cinsurance) {
    
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	
	$st = $conn->prepare( "SELECT * from BPVCompare(:imode, :product_code, :competitor_id,:competitor_product,:hours, :einsurance,:cinsurance,:years)");
	$st->bindValue( ":competitor_id", $competitor_id , PDO::PARAM_STR ); 						
	$st->bindValue( ":product_code", $product_code , PDO::PARAM_STR ); 						
	$st->bindValue( ":competitor_product", $competitor_product , PDO::PARAM_STR ); 						
	$st->bindValue( ":hours", $hours , PDO::PARAM_INT ); 						
	$st->bindValue( ":years", $years , PDO::PARAM_INT ); 						
	$st->bindValue( ":einsurance", $einsurance , PDO::PARAM_INT ); 						
	$st->bindValue( ":cinsurance", $cinsurance , PDO::PARAM_INT ); 	
	
	$st->bindValue( ":imode", $imode , PDO::PARAM_STR ); 

    $st->execute();
	
	$list = array();

     while ( $row = $st->fetch() ) {
  
	  //array_push($list,array($row['col1']),array($row['col2']),array($row['col3']),array($row['col4']),array($row['col5']),array($row['col6']),array($row['col7']),array($row['col8']));
	 array_push($list,array('col0'=>$row['col0']),array('col1'=>$row['col1']),array('col2'=>$row['col2']),array('col3'=>$row['col3']),array('col4'=>$row['col4']),array('col5'=>$row['col5']),array('col6'=>$row['col6']),array('col7'=>$row['col7']),array('col8'=>$row['col8']));
	   
    } 
	
	/*  while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    } */

    $conn = null;
		
    echo(json_encode($list));

	}
	
  // CRM
  
  // CRM
	public static function getp_l_o() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT shortdesc as codevalue, shortdesc FROM crm_lookup where codegroup = 'LG' and codeid = 'TargetType' order by sortorder");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
  // CRM
  public static function getBranchCodes() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    //$st = $conn->prepare( "SELECT codevalue, shortdesc FROM lookup where codegroup = 'LG' and codeid = 'BR' order by sortorder");
	$st = $conn->prepare( "SELECT branch_code, branch_name FROM crm_branch where status = 'A' and region_code = :region_code order by branch_name");
	$st->bindValue( ":region_code", $_SESSION['region_code'], PDO::PARAM_STR );
	$st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	
	
	// CRM
   public static function getDealerCodes() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$st = $conn->prepare( "SELECT dealer_code, dealer_name from crm_dealer where status = 'A' order by dealer_name");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// CRM
	public static function getAreaCodes() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT area_code, area_name
				FROM crm_area where status = 'A' order by area_name");
	//$st->bindValue( ":region_code", $_SESSION['region_code'], PDO::PARAM_STR );
	$st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	public static function getAreaCodes4user() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "select distinct c.area_code as area_code, c.area_code as area_name  from crm_industrial_area c where c.industrial_area_code	in (	
							SELECT distinct a.industrial_area_code
							FROM crm_industrial_area a inner join crm_user_areas b on a.industrial_area_code = b.area_code
						where status = 'A' and b.login_user_id = :login_user_id )");
	$st->bindValue( ":login_user_id", $_SESSION['user_id'], PDO::PARAM_STR );
	$st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	
	// CRM
	public static function getIndustrialAreaCodes() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    //$st = $conn->prepare( "SELECT codevalue, shortdesc FROM lookup where codegroup = 'LG' and codeid = 'IA' order by sortorder");
	/* $st = $conn->prepare( "SELECT industrial_area_code, industrial_area_name
					FROM crm_industrial_area where status = 'A' and region_code = :region_code order by industrial_area_name"); */
	$st = $conn->prepare( "SELECT distinct a.industrial_area_code, a.industrial_area_name
							FROM crm_industrial_area a inner join crm_user_areas b on a.industrial_area_code = b.area_code
						where status = 'A' and b.login_user_id = :login_user_id order by a.industrial_area_name"); 		
	$st->bindValue( ":login_user_id", $_SESSION['user_id'], PDO::PARAM_STR );
	$st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// CRM
	public static function getIndustrialAreaCodes4Area($area_code) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    //$st = $conn->prepare( "SELECT codevalue, shortdesc FROM lookup where codegroup = 'LG' and codeid = 'IA' order by sortorder");
	$st = $conn->prepare( "SELECT industrial_area_code, industrial_area_name
					FROM crm_industrial_area where status = 'A' and 
					region_code = :region_code and
					area_code = :area_code
					order by industrial_area_name");
	$st->bindValue( ":region_code", $_SESSION['region_code'], PDO::PARAM_STR );
	$st->bindValue( ":area_code", $area_code, PDO::PARAM_STR );
	$st->execute();

	
		$list = array();

		while ( $row = $st->fetch() ) {
		  $list[] = new crm_dropdown( $row );
		  
		  //array_push($list,array($row['industrial_area_code'],$row['industrial_area_name']));
		}

		$conn = null;
			
		echo(json_encode($list));
	}
	
	// CRM
	public static function getAreaCode4SubArea($industrial_area_code) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
   
	// 30-Dec-2014 - industrial area Kasihpur belongs to New Delhi				
	/* $st = $conn->prepare( "SELECT distinct a.area_code FROM crm_industrial_area a 		
					where a.status = 'A' and 
					a.region_code = :region_code and
					a.industrial_area_code = :industrial_area_code"); */
					
	$st = $conn->prepare( "SELECT distinct a.area_code FROM crm_industrial_area a 		
					where a.status = 'A' and 
					a.industrial_area_code = :industrial_area_code");				

	//$st->bindValue( ":region_code", $_SESSION['region_code'], PDO::PARAM_STR );
	$st->bindValue( ":industrial_area_code", $industrial_area_code, PDO::PARAM_STR );
	$st->execute();

	
		$list = array();

		while ( $row = $st->fetch() ) {
		  $list[] = new crm_dropdown( $row );
		  
		  //array_push($list,array($row['industrial_area_code'],$row['industrial_area_name']));
		}

		$conn = null;
			
		echo(json_encode($list));
	}
	// Change Log - 2015.02.01-1
	// 01-Feb-2015 - Kuppuram
	// Get Regions - ID
	public static function getRegions4ID() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
   
	$st = $conn->prepare( "SELECT distinct a.region_code as area_code, a.region_code as area_name FROM crm_country a 		
					where a.status = 'A' ");				

	
	//$st->bindValue( ":sub_region_code", $sub_region_code, PDO::PARAM_STR );
	$st->execute();

	
		$list = array();

		while ( $row = $st->fetch() ) {
		  $list[] = new crm_dropdown( $row );
		  
		  //array_push($list,array($row['sub_region_code'],$row['industrial_area_name']));
		}

		$conn = null;
			
		return $list;	
		//echo(json_encode($list));
	}
	
	// Change Log - 2015.02.01-1
	// 01-Feb-2015 - Kuppuram
	// Get Regions for given sub regions - ID
	public static function getRegions4SubRegion($sub_region_code) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
   
	$st = $conn->prepare( "SELECT distinct a.region_code as area_code FROM crm_country a 		
					where a.status = 'A' and 
					a.sub_region_code = :sub_region_code");				

	
	$st->bindValue( ":sub_region_code", $sub_region_code, PDO::PARAM_STR );
	$st->execute();

	
		$list = array();

		while ( $row = $st->fetch() ) {
		  $list[] = new crm_dropdown( $row );
		  
		  //array_push($list,array($row['sub_region_code'],$row['industrial_area_name']));
		}

		$conn = null;
			
		echo(json_encode($list));
	}
	
	// CRM
	public static function getCustomerTypes() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT shortdesc as codevalue, shortdesc FROM crm_lookup where codegroup = 'LG' and codeid = 'CustomerType' order by sortorder");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// CRM
	// Change Log - 2014.08.02-1
	// 02-Aug-2014 - Kuppuram
	// Get Sales Tax List
	public static function getSalesTax() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT shortdesc as codevalue, shortdesc FROM crm_lookup where codegroup = 'LG' and codeid = 'SalesTaxStructure' order by sortorder");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.02-1
	// 02-Aug-2014 - Kuppuram
	// Get Excise Duty List
	public static function getExciseDuty() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT shortdesc as codevalue, shortdesc FROM crm_lookup where codegroup = 'LG' and codeid = 'ExciseDutyStructure' order by sortorder");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.02-1
	// 02-Aug-2014 - Kuppuram
	// Get Excise Duty List
	public static function getCommercialTerms() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT shortdesc as codevalue, shortdesc FROM crm_lookup where codegroup = 'LG' and codeid = 'CommercialTerms' order by sortorder");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.02-1
	// 02-Aug-2014 - Kuppuram
	// Get Excise Duty List
	public static function getCurrencies() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT shortdesc as codevalue, shortdesc FROM crm_lookup where codegroup = 'LG' and codeid = 'Currency' order by sortorder");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.05-2
	// 05-Aug-2014 - Kuppuram
	// get Countries in prospect, lead and opp form add and edit forms
	public static function getCountries() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT country_name as two_country_code, country_name FROM crm_country where status = 'A' order by country_name");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2015.02.01-1
	// 01-Feb-2015 - Kuppuram
	// get Sub Regions for ID
	public static function getCountries4SubRegion($sub_region_code) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT country_name as two_country_code, country_name 
							FROM crm_country where status = 'A' 
							and sub_region_code = :sub_region_code
							order by country_name");
		
		$st->bindValue( ":sub_region_code", $sub_region_code, PDO::PARAM_STR );
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      //$list[] = new crm_dropdown( $row );
	  array_push($list,array($row['two_country_code'],$row['country_name']));
    }

    $conn = null;
    echo(json_encode($list));
	}
	
	// Change Log - 2015.02.01-1
	// 01-Feb-2015 - Kuppuram
	// get Sub Regions for ID
	public static function getSubRegions4ID() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT distinct sub_region_code as industrial_area_code, sub_region_code as industrial_area_name FROM crm_country where status = 'A' order by sub_region_code");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.09-1
	// 09-Aug-2014 - Kuppuram
	// International Division Terms in Quot

	public static function getTerms_Ports4India() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT port_name as port_code, port_name FROM crm_port where two_country_code = 'IN' and status = 'A' order by port_name");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.09-1
	// 09-Aug-2014 - Kuppuram
	// International Division Terms in Quot

	public static function getTerms_PortsDestination_Lead() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT port_name as port_code, port_name FROM crm_port where country_name = (select country from crm_lead where lead_code = '" . $_SESSION['lead_code']. "')  order by port_name");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.09-1
	// 09-Aug-2014 - Kuppuram
	// International Division Terms in Quot

	public static function getTerms_PortsDestination_Opp() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT port_name as port_code, port_name FROM crm_port where country_name = (select country from crm_opportunity where opportunity_code = '" . $_SESSION['opportunity_code']. "')  order by port_name");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.09-1
	// 09-Aug-2014 - Kuppuram
	// International Division Terms in Quot

	public static function getTerms_price_type() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT term_short_desc, term_desc, sortorder FROM crm_term_lookup where sales_division_code = 'ID' and term_type = 'price_type' order by term_desc");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.09-1
	// 09-Aug-2014 - Kuppuram
	// International Division Terms in Quot

	public static function getTerms_mode_shipment() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT term_short_desc, term_desc, sortorder FROM crm_term_lookup where sales_division_code = 'ID' and term_type = 'shipment_mode' order by term_desc");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	
	// Change Log - 2014.08.09-1
	// 09-Aug-2014 - Kuppuram
	// International Division Terms in Quot

	public static function getTerms_price_desc() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT term_short_desc, term_desc FROM crm_term_lookup where sales_division_code = 'ID' and term_type = 'price_desc' order by term_desc");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.09-1
	// 09-Aug-2014 - Kuppuram
	// International Division Terms in Quot

	public static function getTerms_freight() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT term_short_desc, term_desc FROM crm_term_lookup where sales_division_code = 'ID' and term_type = 'freight' order by term_desc");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.09-1
	// 09-Aug-2014 - Kuppuram
	// International Division Terms in Quot

	public static function getTerms_delivery() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT term_short_desc, term_desc FROM crm_term_lookup where sales_division_code = 'ID' and term_type = 'delivery' order by term_desc");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.09-1
	// 09-Aug-2014 - Kuppuram
	// International Division Terms in Quot

	public static function getTerms_payment() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT term_desc as term_short_desc, term_desc FROM crm_term_lookup where sales_division_code = 'ID' and term_type = 'payment' order by term_desc");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.09-1
	// 09-Aug-2014 - Kuppuram
	// International Division Terms in Quot

	public static function getTerms_documentation() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT term_short_desc, term_desc FROM crm_term_lookup where sales_division_code = 'ID' and term_type = 'documentation' order by term_desc");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.09-1
	// 09-Aug-2014 - Kuppuram
	// International Division Terms in Quot

	public static function getTerms_inspection() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT term_short_desc, term_desc FROM crm_term_lookup where sales_division_code = 'ID' and term_type = 'inspection' order by term_desc");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2014.08.09-1
	// 09-Aug-2014 - Kuppuram
	// International Division Terms in Quot

	public static function getTerms_warranty() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT term_short_desc, term_desc FROM crm_term_lookup where sales_division_code = 'ID' and term_type = 'warranty' order by term_desc");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}

	// Change Log - 2014.08.09-1
	// 09-Aug-2014 - Kuppuram
	// International Division Terms in Quot

	public static function getTerms_installation() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT term_short_desc, term_desc FROM crm_term_lookup where sales_division_code = 'ID' and term_type = 'installation' order by term_desc");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}

	// Change Log - 2014.08.09-1
	// 09-Aug-2014 - Kuppuram
	// International Division Terms in Quot

	public static function getTerms_validity() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT term_short_desc, term_desc FROM crm_term_lookup where sales_division_code = 'ID' and term_type = 'validity' order by term_desc");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}

	// CRM
	public static function getPreProspectSources() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT shortdesc as codevalue, shortdesc FROM crm_lookup where codegroup = 'LG' and codeid = 'PreProspectSource' and codevalue = 'CC' order by sortorder");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// CRM
	public static function getProspectSources() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT shortdesc as codevalue, shortdesc FROM crm_lookup where codegroup = 'LG' and codeid = 'ProspectSource' order by sortorder");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// CRM
	public static function getProspectAddSources() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT shortdesc as codevalue, shortdesc FROM crm_lookup where codegroup = 'LG' and codeid = 'ProspectSource' and shortdesc not in ('Cold Call') order by sortorder");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// CRM
	public static function getProspectVendors() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT prospect_vendor_code, prospect_vendor_name
						FROM crm_prospect_vendor where status = 'A' order by prospect_vendor_name");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// CRM
	public static function getLeadSources() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT shortdesc as codevalue, shortdesc FROM crm_lookup where codegroup = 'LG' and codeid = 'ProspectSource' order by sortorder");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// CRM
	public static function getIndustrialSegments() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    //$st = $conn->prepare( "SELECT codevalue, shortdesc FROM lookup where codegroup = 'LG' and codeid = 'IS' order by sortorder");
	$st = $conn->prepare( "SELECT industry_code, industry_segment
							FROM crm_industry_segment where status = 'A' order by industry_segment");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// Change Log - 2015.02.02-1
	// 02-Feb-2015 - Kuppuram
	// Instead of dropdown list, we enable search and select for industry segment
	public static function getIndustrialSegmentsSearch() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    //$st = $conn->prepare( "SELECT codevalue, shortdesc FROM lookup where codegroup = 'LG' and codeid = 'IS' order by sortorder");
	$st = $conn->prepare( "SELECT coalesce(industry_segment,'') || '~' || coalesce(industry_code,'') as industry_segment
							FROM crm_industry_segment where status = 'A' order by industry_segment");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      //$list[] = new crm_dropdown( $row );
	  array_push($list,array($row['industry_segment']));
	  
    }

    $conn = null;
    echo(json_encode($list));
	}
	
	// Change Log - 2014.07.20-1
	// 20-Jul-2014 - Kuppuram
	// Sales Engineer Selection in Sales Engineer wise Report
	public static function getSalesEngrs4Branch($branch_code) {
	$branch_code = str_replace(",", "','" , $branch_code);
	$branch_code = "'" . $branch_code . "'";
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    
	// $st = $conn->prepare( "select distinct c.login_user_id, c.user_name from crm_user c where c.login_user_id in " . $_SESSION["reportees"] .  
			// " and c.branch_code in (" . $branch_code . ") and c.status = 'A' and c.designation = 'Sales Engineer' order by c.user_name ") ;
	
	$st = $conn->prepare( "select distinct c.login_user_id, c.user_name from crm_user c, crm_target d where c.login_user_id in " . $_SESSION["reportees"] .  
			" and c.branch_code in (" . $branch_code . ") and c.status = 'A' and c.designation = 'Sales Engineer' ". 
			" and d.engr_user_id = c.login_user_id order by c.user_name ") ;
			
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
		 $list[] = new crm_dropdown( $row );
	  //array_push($list,array($row['login_user_id'], $row['user_name']));
	  
    }

    $conn = null;
		
    echo(json_encode($list));
    
	}
	
	// Change Log - 2014.09.07-1
// 07-Sep-2014 - Kuppuram
// Changes in Sales Tax and ED in Lead Edit
	public static function getTaxList() {

    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    
	$st = $conn->prepare( "
					select codeid, shortdesc from crm_lookup where codeid = 'VATPercent'
					union
					select codeid, shortdesc from crm_lookup where codeid = 'VATDeclPercent'
					union
					select codeid, shortdesc  from crm_lookup where codeid = 'CSTPercent'
					union
					select codeid, shortdesc  from crm_lookup where codeid = 'CSTDeclPercent'
					union
					select codeid, shortdesc from crm_lookup where codeid = 'EDPercent'
					") ;
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
		 $list[] = new crm_dropdown( $row );
	  //array_push($list,array($row['login_user_id'], $row['user_name']));
	  
    }

    $conn = null;
		
    echo(json_encode($list));
    
	}

	// Change Log - 2014.07.20-1
	// 20-Jul-2014 - Kuppuram
	// Sales Engineer Selection in Sales Engineer wise Report
	public static function getSalesEngineers() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    
	/* $st = $conn->prepare( "select distinct a.login_user_id, c.user_name from crm_user_areas a, crm_user c where a.area_code 
			in (select b.area_code from crm_user_areas b where b.login_user_id = '" . $_SESSION["user_id"] . "')
			and a.login_user_id = c.login_user_id and c.login_user_id <> 'A0001' 
			and c.designation = 'Sales Engineer' and c.status = 'A' order by c.user_name"); */
			
	$st = $conn->prepare( "select distinct a.login_user_id, a.user_name from crm_user a where a.login_user_id in " . $_SESSION["reportees"] . " and a.status = 'A' and a.designation = 'Sales Engineer' order by a.user_name");		
			
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// CRM
	/* public static function getIndustrialCodes() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT codevalue, shortdesc FROM lookup where codegroup = 'LG' and codeid = 'IC' order by sortorder");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new ezfms_dropdown( $row );
    }

    $conn = null;
    return $list;
	} */
	
	// CRM
	public static function getProductGroups() {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    //$st = $conn->prepare( "SELECT codevalue, shortdesc FROM lookup where codegroup = 'LG' and codeid = 'PG' order by sortorder");
	$st = $conn->prepare( "SELECT product_group_code, product_group_name 
							FROM crm_product_group where status = 'A' order by product_group_name");
	    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	// CRM
	public static function getStatusSalesInqLG() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT codevalue, shortdesc FROM crm_lookup where codegroup = 'LG' and codeid = 'LeadStatusType' order by sortorder" );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
		
    return $list;
	}
	
	// CRM
	public static function getLeadStages() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	
	if ($_SESSION['sales_division_code'] == 'CH')
	{
		$st = $conn->prepare( "SELECT codevalue, shortdesc FROM crm_lookup 
			where codegroup = 'LG' and codeid = 'LeadStage' 
			and codevalue <> 'TF' order by sortorder" );
	}
	else
	{
		$st = $conn->prepare( "SELECT codevalue, shortdesc FROM crm_lookup 
			where codegroup = 'LG' and codeid = 'LeadStage' 
			order by sortorder" );
	}
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
		
    return $list;
	}
	
	// CRM
	public static function getOppStages() {
	
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $st = $conn->prepare( "SELECT codevalue, shortdesc FROM crm_lookup where codegroup = 'LG' and codeid = 'OppStage' order by sortorder" );
	
    $st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
		
    return $list;
	}
	
	// CRM
	public static function getTaskTypes($stage_applicable) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
   
	$st = $conn->prepare( "SELECT task_type
						FROM crm_task_type where status = 'A' and stage_applicable = :stage_applicable order by sort_order");
	$st->bindValue( ":stage_applicable", $stage_applicable, PDO::PARAM_STR );						
	$st->execute();
	
	$list = array();

    while ( $row = $st->fetch() ) {
      $list[] = new crm_dropdown( $row );
    }

    $conn = null;
    return $list;
	}
	
	public static function datasync($cur_sync_function) {
 
 
	$arr = array();
	$res = 0;
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$status = 'Active';
	$imode =1;
	$exe_qry = 'select ' . $cur_sync_function . "('" . $_SESSION['user_id'] . "')";
	// Testing
	//fb( "In datasync - Procedure Name - " .  $cur_sync_function);	
	try 
	{
		$conn->beginTransaction();
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//$st = $conn->prepare( "select sp_sync_crm_pre_prospect()");											  
		$st = $conn->prepare( $exe_qry);											  
		$res = $st->execute();
			
		$arr = $st->errorInfo();
		
			
			
	}
		catch (PDOException $e)
		{
			trigger_error( "CRM Data sync " .$_SESSION['user_id']. ' - ' . $cur_sync_function ." : Couldn't execute query - Statement"   . $e->getMessage());
			//trigger_error( "CRM Data sync: Couldn't execute query - Statement" . $arr[2]);
			$conn = null;	
			$ret = $e->getMessage();
			$ret = strstr($ret, 'CRM ERROR:');
			return $ret;
			
		}
		$conn->commit();
		$conn = null;
		return 'SUCCESS';
		
	}
	
	
	// The following function is not used, instead, from login page datasyncAuto is triggered.
	public static function datasyncall() {
 
	$list = array();
	$arr = array();
	$res = 0;
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$status = 'Active';
	$imode =1;
	$st = '';
	$address = '127.0.0.1';
	$port = 3061;
	try
	{
		if (($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) === false) {
			$ret =  "socket_create() failed: reason: " . socket_strerror(socket_last_error()) ;
			return $ret;
		}

		/* if (socket_bind($sock, $address, $port) === false) {
			$ret = "socket_bind() failed: reason: " . socket_strerror(socket_last_error($sock)) ;
			return $ret;
		} */
		
		if (!socket_set_option($sock, SOL_SOCKET, SO_REUSEADDR, 1)) { 
			$ret =  "socket_strerror(socket_last_error($sock))"; 
			return $ret; 
		} 
	}
	catch (PDOException $e)
		{
			trigger_error( "CRM Data sync " .$_SESSION['user_id']. ' - ' . $cur_sync_function ." : Couldn't execute query - Statement"   . $e->getMessage());
			//trigger_error( "CRM Data sync: Couldn't execute query - Statement" . $arr[2]);
			$conn = null;	
			$ret = $e->getMessage();
			$ret = strstr($ret, 'CRM ERROR:');
			return $ret;
			
		}
		
	try 
	{
		$st = $conn->prepare( "SELECT sp_name
						FROM crm_synctables where synctype = 'u' order by sortorder");
		$st->execute();
	    while ( $row = $st->fetch() ) {
			array_push($list,$row['sp_name']);
		}
		
		foreach($list as $val) {
			// Testing
			//fb( "In datasyncall - Procedure Name - " .  $val);
			crm_dropdown::datasync($val);
		}
			
	}
		catch (PDOException $e)
		{
			trigger_error( "CRM Data sync " .$_SESSION['user_id']. ' - ' . $cur_sync_function ." : Couldn't execute query - Statement"   . $e->getMessage());
			//trigger_error( "CRM Data sync: Couldn't execute query - Statement" . $arr[2]);
			$conn = null;	
			$ret = $e->getMessage();
			$ret = strstr($ret, 'CRM ERROR:');
			return $ret;
			
		}
		//$conn->commit();
		$conn = null;
		return 'SUCCESS';
		
	}
	
	/* public static function datasync_master($cur_sync_function) {
 
 
	$arr = array();
	$res = 0;
	$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
	$status = 'Active';
	$imode =1;
	$exe_qry = 'select ' . $cur_sync_function . '()';
		
	try 
	{
		$conn->beginTransaction();
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//$st = $conn->prepare( "select sp_sync_crm_pre_prospect()");											  
		$st = $conn->prepare( $exe_qry);											  
		$res = $st->execute();
			
		$arr = $st->errorInfo();
		
			
			
	}
		catch (PDOException $e)
		{
			trigger_error( "CRM Data sync " . $cur_sync_function ." : Couldn't execute query - Statement"   . $e->getMessage());
			//trigger_error( "CRM Data sync: Couldn't execute query - Statement" . $arr[2]);
			$conn = null;	
			$ret = $e->getMessage();
			$ret = strstr($ret, 'CRM ERROR:');
			return $ret;
			
		}
		$conn->commit();
		$conn = null;
		return 'SUCCESS';
		
	} */
	

}
?>
