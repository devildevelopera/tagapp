<?php
define('DB_NAME', 'tagapp');
define('DB_USER', '');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

class Dbconfig {
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;
	
    function Dbconfig() {
        //if($_SERVER['SERVER_NAME']==='localhost'){
          $this -> serverName = '107.170.213.186';
          $this -> userName = 'tagapp_user';
          $this -> passCode = 'tagapp_password';
          $this -> dbName = 'tagapp_new';//'tags';//
        //}
    }

    //hosted data
    //$this -> serverName = 'localhost';
    //$this -> userName = 'smartlay_tagappuser';
    //$this -> passCode = 'm=,pW;ZSLR+.';
    //$this -> dbName = 'smartlay_tagapp';
}
?>