<?php 
$tns = " (DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP) (HOST = 192.168.0.2)(PORT = 1521)) ) (CONNECT_DATA = (SERVICE_NAME = xe) ) ) "; 
try { 
    $conn = new PDO("oci:dbname=".$tns.";charset=utf8", "team", "team"); 
} catch (PDOException $e) { 
    echo "Failed to obtain database handle " . $e->getMessage(); 
} 
?>