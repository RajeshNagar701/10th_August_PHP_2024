

<?php

class model{

	public $conn="";
	function __construct(){
							// hostname  // username // pass //db name	
		$this->conn=new Mysqli('localhost','root','','aug10');
	}
	function select($tbl){
		
		$sel="select * from $tbl";   // query
		$run=$this->conn->query($sel);  // run 
		while($fetch=$run->fetch_object()){
			
			$arr[]=$fetch;
		}
		return $arr;
		
	}	
}

$obj=new model;


?>