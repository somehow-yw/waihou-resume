<?php
	header("Content-type:texe/html;charset=uft-8");
	$db=mysql_connect("bdm267988413.my3w.com","bdm267988413","yym199123");
	if($db){
		mysql_select_db("bdm267988413_db",$db);
		$sql="SELECT * FROM basic";
		$result=mysql_query($sql);
		$arr=array();
		while($row=mysql_fetch_assoc($result)){
			array_push($arr,$row)
		}
		echo json_encode($arr);
	}
?>