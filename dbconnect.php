<?php 
//open a connection to the DB
$link = mysql_connect("localhost","$user","$pass");
//select a DB
		mysql_select_db("$dbname", $link);

//here we get the column names of our table from the information schema
$hquery = ("SELECT `COLUMN_NAME` 
			FROM `INFORMATION_SCHEMA`.`COLUMNS` 
			WHERE `TABLE_SCHEMA`='$dbname' 
			AND `TABLE_NAME`='$tablename'");

//Here we loop through the column names and store them as an array
$heading = mysql_query($hquery);
while ($newrow = mysql_fetch_array($heading)){
$newarr[] = $newrow;
}



 


//open another connection to the DB
$link1 = mysql_connect("localhost","$user1","$pass1");
//select a DB
		mysql_select_db("$dbname1", $link);

//here we get the column names of our table from the information schema
$hquery1 = ("SELECT `COLUMN_NAME` 
			FROM `INFORMATION_SCHEMA`.`COLUMNS` 
			WHERE `TABLE_SCHEMA`='$dbname1' 
			AND `TABLE_NAME`='$tablename1'");

//Here we loop through the column names and store them as an array
$heading1 = mysql_query($hquery1);
while ($newrow1 = mysql_fetch_array($heading1)){
$newarr1[] = $newrow1;
}


//Close the connection
 
mysql_close($link);
?>
