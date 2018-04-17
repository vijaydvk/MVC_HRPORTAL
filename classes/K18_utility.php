<?php
/**
 * Class to handle Various Utility Purposes
 */

class K18_utility

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
  * Sets the object's properties using the values in the supplied array
  *
  * @param assoc The property values
  */

  public function __construct( $data=array() ) {
	
	if ( isset( $data['company_id'] ) ) $this->company_id  =  $data['company_id'];
	if ( isset( $data['user_id'] ) ) $this->user_id  =  $data['user_id'];

	
  }

	
  public static function saveError($error_log) 
	{
		$arr=array();
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$st = '';
		$date = date ("Y-m-d H:i:s");
		
		try
		{
			$conn->beginTransaction();
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			
			$st = $conn->prepare("insert into k18_error_log (company_id, user_id, error_log, createdon)
			values (:company_id, :user_id, :error_log, :createdon)");
			
			if (isset($_SESSION['company_id']))
			{
				$st->bindValue( ":company_id", $_SESSION['company_id'], PDO::PARAM_STR );
			}
			else
			{
				$st->bindValue( ":company_id", '18K', PDO::PARAM_STR );
			}
			if (isset($_SESSION['user_id']))
			{
				$st->bindValue( ":user_id", $_SESSION['user_id'], PDO::PARAM_STR );
			}
			else
			{
				$st->bindValue( ":user_id", 'A0001', PDO::PARAM_STR );
			}
			$st->bindValue( ":error_log", $error_log, PDO::PARAM_STR );
			$st->bindValue( ":createdon", $date, PDO::PARAM_STR );
			

			if ($st->execute())
			{
			
			}
			else
			{
				$arr = $st->errorInfo();
				trigger_error( "Error Log Insert: Couldn't execute query" );
			}
			
		
		}
		catch (PDOException $e) {
			
			trigger_error($e->getMessage());
			
			$conn = null;
		}
		$conn->commit();
		$conn = null;
		return 'SUCCESS';
	}
  

}

?>
