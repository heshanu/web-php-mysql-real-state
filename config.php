<?php
$con = mysql_connect("localhost", "root", "root") or die("Failed to connect to MySql.");
mysql_select_db("property", $con) or die("Failed to connect to database");
?>