<?php

require_once('Dbconfig.php');

class Mysql extends Dbconfig    {

    public $connectionString;
    public $dataSet;
    private $sqlQuery;

    protected $databaseName;
    protected $hostName;
    protected $userName;
    protected $passCode;

    function Mysql()    {
        $this->connectionString = NULL;
        $this->sqlQuery = NULL;
        $this->dataSet = NULL;

                $dbPara = new Dbconfig();
                $this->databaseName = $dbPara->dbName;
                $this->hostName = $dbPara->serverName;
                $this->userName = $dbPara->userName;
                $this->passCode = $dbPara->passCode;
                $dbPara = NULL;
    }

    function dbConnect()    {
        $this->connectionString = mysqli_connect($this->hostName,$this->userName,$this->passCode,$this->databaseName);
		if (!$this->connectionString) {
			echo mysqli_connect_errno() . ":" . mysqli_connect_error() . $this->hostName;
			exit;
		}
        return $this->connectionString;
    }

    function dbDisconnect() {
        $this->connectionString = NULL;
        $this->sqlQuery = NULL;
        $this->dataSet = NULL;
                $this->databaseName = NULL;
                $this->hostName = NULL;
                $this->userName = NULL;
                $this->passCode = NULL;
    }

    function selectAll($tableName)  {
        $this->sqlQuery = 'SELECT * FROM '.$this->databaseName.'.'.$tableName;
        $this->dataSet = mysqli_query($this->connectionString,$this->sqlQuery);
        $array = array();
        while ($row = mysqli_fetch_assoc($this -> dataSet)){
            $array[] = $row;
        }
        return $array;
    }

    function selectWhere($tableName,$rowName,$operator,$value,$valueType)   {
        $this -> sqlQuery = 'SELECT * FROM '.$tableName.' WHERE '.$rowName.' '.$operator.' ';
        if($valueType == 'int') {
            $this -> sqlQuery .= $value;
        }
        else if($valueType == 'char')   {
            $this -> sqlQuery .= "'".$value."'";
        }		
        $this -> dataSet = mysqli_query($this -> connectionString,$this -> sqlQuery);
        $this -> sqlQuery = NULL;
        return mysqli_fetch_assoc($this -> dataSet);
    }

    function countWhere($tableName,$rowName,$operator,$value,$valueType)   {
        $this -> sqlQuery = 'SELECT * FROM '.$tableName.' WHERE '.$rowName.' '.$operator.' ';
        if($valueType == 'int') {
            $this -> sqlQuery .= $value;
        }
        else if($valueType == 'char')   {
            $this -> sqlQuery .= "'".$value."'";
        }
        $this -> dataSet = mysqli_query($this -> connectionString,$this -> sqlQuery);
        $this -> sqlQuery = NULL;
        return mysqli_num_rows($this -> dataSet);
    }
    	
    function insertData($table, $array) {
      $query = "INSERT INTO ".$table;
      $fis = array(); 
      $vas = array();
      foreach($array as $field=>$val) {
        $fis[] = "`$field`";
        $vas[] = "'".mysqli_real_escape_string($this -> connectionString,$val)."'";
      }
      $query .= " (".implode(", ", $fis).") VALUES (".implode(", ", $vas).")";
      if (mysqli_query($this -> connectionString,$query))
        return mysqli_insert_id($this -> connectionString);
      else return false;
    }

    function updtData($table, $array, $col, $operator, $vals) {
		$query = "UPDATE ".$table. ' SET ';
		$str="";	  
		foreach($array as $field=>$val) {
			$str.= " ".$field.'="'.mysqli_real_escape_string($this -> connectionString,$val).'",';
		}
		$query .= rtrim($str,",").' WHERE '.$col.$operator.'"'.$vals.'";';
		if (mysqli_query($this -> connectionString,$query))
			return true;
		else return false;
    }		

    function selectFreeRun($query)  {
        $this -> dataSet = mysqli_query($this -> connectionString,$query);
        return $this -> dataSet;
    }

    function freeRun($query)    {
        return mysqli_query($this -> connectionString,$query);
    }

    function validate_field($pattern,$field){
        $state=preg_match($pattern, $field);
            
            if($state==true)
                return true;
            else
                return false; 
    }

    function get_message($message,$stat){

        if($stat==0)
            echo '<span class="label label-danger">'.$message.' !</span></br>';
        else if($stat==1)
            echo '<div class="alert alert-success"><strong>'.$message.'!</strong></div>';
        else if($stat==3)
            echo '<div class="alert alert-danger"><strong>'.$message.'!</strong></div>';
    }

    function my_simple_crypt( $string, $action = 'e' ) {
        // you may change these values to your own
        $secret_key = '!@#$%^&*()';
        $secret_iv = ')(*&^%$#@!';
     
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $key = hash( 'sha256', $secret_key );
        $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
     
        if( $action == 'e' ) {
            $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
        }
        else if( $action == 'd' ){
            $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
        }
     
        return $output;
    }

    function clacDate($bdate,$dedline){
        $datetime1 = new DateTime($bdate);
        $datetime2 = new DateTime($dedline);
        $interval = $datetime1->diff($datetime2);
        return $interval->format('%y-%m-%d');
    }

    public static function getItemTsess($seesnm) {
        if (!isset($_SESSION[$seesnm])) {
            return null;
        }
        $messages = $_SESSION[$seesnm];
        unset($_SESSION[$seesnm]);
        return implode('<br/>', $messages);
    }

    public static function setItemTsess($seesnm,$val) {
        if (!isset($_SESSION[$seesnm])) {
            $_SESSION[$seesnm] = array();
        }
        $_SESSION[$seesnm][] = $val;
    }

}

?>