<?php
//////////////////////////////////////////////////////////////////////////
// Class: DbConnector
// Purpose: Connect to a database, MySQL version
///////////////////////////////////////////////////////////////////////////////////////
require_once 'SystemComponent.php';

class DbConnector extends SystemComponent {

	var $theQuery;
	var $link;
	
	//*** Function: DbConnector, Purpose: Connect to the database ***
	function DbConnector($database = "tagapp"){
	
		// Load settings from parent class
		$settings = SystemComponent::getSettings();
	
		// Get the main settings from the array we just loaded
		switch ($database) {
			case "tags":
			case "tagapp":
				$host = $settings['dbhost'];
				$db = $settings['dbname'];
				$userdb = $settings['dbusername'];
				$passdb = $settings['dbpassword'];
			break;
			case "user":
				$host = $settings['dbhost_wp'];
				$db = $settings['dbname_wp'];
				$userdb = $settings['dbusername_wp'];
				$passdb = $settings['dbpassword_wp'];
			break;
		}
		
		// Connect to the database
		$this->link = mysqli_connect($host, $userdb, $passdb) or die("Unable to connect to MySQL. Host: ".$host." database: ".$db." User: ".$userdb." Password - none");
		//mysqli_query('set names utf8', $this->link);
		$this->link->set_charset("utf8");
		mysqli_select_db($this->link,$db);
		register_shutdown_function(array(&$this, 'close'));
	}
	
	//*** Function: query, Purpose: Execute a database query ***
	function query($query) {
		$this->theQuery = $query;
		//$this->logQuery($query);
		return mysqli_query($this->link,$query);
	}
	
	//*** Function: getQuery, Purpose: Returns the last database query, for debugging ***
	function getQuery() {
		return $this->theQuery;
	}
	
	//*** Function: getQuery, Purpose: Returns the last database query, for debugging ***
	function lastAddedID() {
		return  mysqli_insert_id();
	}
	
	//*** Function: getNumRows, Purpose: Return row count, MySQL version ***
	function getNumRows($result){
		//retutn 0;		
		//$this->logQuery($result);
		//$rowcount=mysqli_free_result($result);
		$rowcount =0; 
				if($result){
		$rowcount=mysqli_num_rows($result);
				}
		return $rowcount;//mysqli_num_rows($result);
	}
	
	//*** Function: fetchArray, Purpose: Get array of query results ***
	function fetchArray($result) {
		return mysqli_fetch_array($result);
	}
	
	//*** Function: fetchObject, Purpose: Get objects of query results ***
	function fetchObject($result) {
		return mysqli_fetch_object($result);
	}
	
	//*** Function: close, Purpose: Close the connection ***
	function close() {
		mysqli_close($this->link);
	}
	
	private function logQuery($query){
		$file = 'q.txt';
		$myfile = fopen($file, "a") or die("Unable to open file!");
		fwrite($myfile, "\n". $query);
		fclose($myfile);
	}
}

?>
