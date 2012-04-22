<?php
class Connection {

	public function __construct($host,$user,$password,$db){
		$this->db = array("host"=>$host,"user"=>$user,"pw"=>$password,"db_name"=>$db);
	}
	
		$hidubd = mysql_connect($i['host'], $i['user'], $i['pw']) or die(mysql_error());
		$connect = mysql_select_db($i['db_name'], $hidubd) or die(mysql_error());
		$result = mysql_query($query, $hidubd) or die(mysql_error());
		$this->result = $result;
		
	}
	public function fetch(){
		$rows = mysql_num_rows($this->result);
		$data = array();
		for($i=0;$i<$rows;$i++){
			$data[$i] = mysql_fetch_assoc($this->result);

		}
		return $data;
	}
}
?>