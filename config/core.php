<?php
// show error reporting
error_reporting(E_ALL);
 
// set your default time-zone
date_default_timezone_set( "Asia/Calcutta" ); 
define( "CLASS_PATH", "classes" ); 
define( "CONTOLLER_PATH", "controller" ); 
define( "TEMPLATE_PATH", "views" );
define( "APP_URL", "index.php" );
define( "DB_DSN", "mysql:host=localhost;dbname=suncomportal" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "sunesoft123" );

require( CLASS_PATH . "/K18_User.php" );
require( CLASS_PATH . "/K18_menu.php" );
require( CLASS_PATH . "/K18_uar.php" );
require( CLASS_PATH . "/K18_utility.php" );
require( CLASS_PATH . "/ticket_update_db_page.php" ); 


?>
