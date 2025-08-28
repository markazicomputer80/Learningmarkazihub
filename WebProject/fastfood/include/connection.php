<?php
include_once('include/function.php');
                               //ComputerName\instanceName
 //$serverName = "localhost\MUSER"; //serverName\instanceName
 $serverName = "PC0\MUSER"; //serverName\instanceName
 $connectionInfo = array("Database"=>"fastfood","CharacterSet" => "UTF-8");
 $conn = sqlsrv_connect( $serverName, $connectionInfo);
 if(!$conn ) {
     DisplayErrors();
     echo "Connection could not be established.<br />";
     die();
 }
?>
