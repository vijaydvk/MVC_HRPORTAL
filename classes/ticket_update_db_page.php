<?php

// require '../config/database.php';
/* if(session_id() == '') {session_start();}
$mode = isset( $_REQUEST['mode'] ) ? $_REQUEST['mode'] : "";
$mode(); */

class ticket_update
{
 public static function update()
 {
	try
	{ 
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			if($_POST['mode'] == "comment" )
			{
				$sql = "UPDATE sun_it_tickets SET 
				t_status = :t_status,
				submit_time = UNIX_TIMESTAMP()
				where
				t_id = :t_id";
				$query = $conn->prepare($sql);
				$insert=$query->execute(array(":t_status"=>$_POST['t_status'],
				":t_id"=>$_POST['t_id']));
				
				$sql = "INSERT into sun_it_tickets_detail
				(t_id,
				uid,
				tech_note,
				t_detail_timestamp)
				values
				(:t_id,
				:uid,
				:tech_note,
				UNIX_TIMESTAMP())";
				$query = $conn->prepare($sql);
				$insert=$query->execute(array(":uid"=>$_SESSION['uid'],
				":t_id"=>$_POST['t_id'],
				":tech_note"=>$_POST['tech_note'],
				));
			}
			else
			{
				$sql = "UPDATE sun_it_tickets SET 
				tech_uid=:tech_uid,
				t_status = 'Assigned To Tech'
				where
				t_id = :t_id";
				$query = $conn->prepare($sql);
				$insert=$query->execute(array(":tech_uid"=>$_POST['tech_uid'],
				":t_id"=>$_POST['t_id']));
			}
		if($insert){
			$retresult['success'] = true;
			$retresult['msg'] = 'Data has been Updated successfully.';
		}
	}
	catch (PDOException $e)
    {
		$retresult['success'] = false;
		K18_utility::saveError("ticket_update_db_page - Update:" . 'PDO-Exception'. $e->getMessage());
		if (contains($e->getMessage(), '18KSoftec Error:'))
		{
			$retresult['errors']  = strstr($e->getMessage(), '18KSoftec Error:');
		}
		else
		{
			//$retresult['errors']  = $e->getMessage();
			$retresult['errors']  = "Updation is not successful";
		}
		echo json_encode($retresult);
		$conn = null;
		return;
	}
	catch (Exception $e)
    {

		$retresult['success'] = false;
		K18_utility::saveError("ticket_update_db_page - Update:" . 'Non-PDO-Exception' . $e->getMessage());
		if (contains($e->getMessage(), '18KSoftec Error:'))
		{
			$retresult['errors']  = strstr($e->getMessage(), '18KSoftec Error:');
		}
		else
		{
			//$retresult['errors']  = $e->getMessage();
			$retresult['errors']  = "Updation is not successful";
		}
		
		echo json_encode($retresult);
		$conn = null;
		return;
	}
    $conn = null;
	//echo $data;
	echo json_encode($retresult);
	return;
   } 
}  
?>
