<?php

//session_start();

// require configuration file
//require 'config/database.php';
include_once '../config/database.php';
if(session_id() == '') {session_start();}
$action = isset( $_REQUEST['action'] ) ? $_REQUEST['action'] : "";
$action(); 
function getDataChangeDetails()
{	
	try
	{
		$database = new Database();
	    $conn = $database->getConnection(); 
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$qry =	"SELECT UR.name as RequestedBy,
					U.name as RequestedFor,
                    date_format(from_unixtime(SD.submit_time),'%m/%d/%y %h:%m %p') as SubmitTime,                                                                                               
                    group_concat(ifnull(SDR.dc_type,'')) as RequestType
                    from sun_datachange_records SD
                    LEFT JOIN users U ON SD.for_uid = U.uid
                    LEFT JOIN users UR ON UR.uid = SD.requested_by_uid
                    LEFT JOIN sun_datachange_requested SDR on SDR.dc_id = SD.dc_id
                    group by SD.dc_id
				";		
		$st = $conn->prepare( $qry );	
		$st->execute();
		$data = array();
		$row = $st->fetchAll(PDO::FETCH_ASSOC);
		foreach ($row as $key => $value) {
			$data[$key] = $value;
			
		}	
		$conn = null;	
		ob_start("ob_gzhandler");
		//echo(json_encode($data));
		$retresult['success'] = true;
		$retresult['details'] = $data;
		echo(json_encode($retresult));
	}
	catch (Exception $e) {
		$retresult['success'] = false;
		$retresult['errors']  = 'In getDataChangeDetails, Non PDO Exception - '.$e->getMessage();
		echo json_encode($retresult);
		$conn = null;
		return;
		
	}
	catch (PDOException $e) {
		$retresult['success'] = false;
		$retresult['errors']  = 'In getDataChangeDetails, PDO Exception - '.$e->getMessage();
		echo json_encode($retresult);
		$conn = null;
		return;
		
	}
}


?>