<?php
class Connection {
	
	//this way they never have to change the class only give details makes it easier
    public function __construct($host,$user,$pw,$db){
    	$this->$db = array("host"=>$host,"user"=>$user,"pw"=>$pw,"db_name"=>$db);
    }
	
	//You don't have to change anything here :)
    public function query($query) {
		$i = $this->$db;
		$hidubd = mysql_connect($i['host'], $i['user'], $i['pw']) or die(mysql_error());
		$connect = mysql_select_db($i['db_name'], $hidubd) or die(mysql_error());
		$result = mysql_query($query, $hidubd) or die(mysql_error());
		
		return $result;
    }
}
?>