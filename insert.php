<?php

$mysqli = new mysqli("localhost", "root", "167349258123", "db_gmap");
$cs1 = "SET character_set_results=utf8"; 
$cs2 = "SET character_set_client = utf8"; 
$cs3 = "SET character_set_connection = utf8"; 

$sql = "INSERT INTO tbl_location(id,lat,lng,location_name) ";
$sql .= " VALUES('','".$_POST["lat"]."', '".$_POST["lng"]."', '".$_POST["location_name"]."') ";
echo $sql;
$mysqli->query($sql);


?>