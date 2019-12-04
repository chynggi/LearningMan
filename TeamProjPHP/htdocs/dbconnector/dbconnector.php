<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<?php $tns = " (DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)
(HOST = 192.168.0.18)(PORT = 1521)) ) (CONNECT_DATA = (SERVICE_NAME = xe) ) ) "; 
try { 
    $conn = new PDO("oci:dbname=".$tns.";charset=utf8", "team", "team"); 
}
catch(PDOException $e) 
{ echo "Failed to obtain database handle " . $e->getMessage(); } ?>

OK?
=======
=======
>>>>>>> refs/remotes/origin/master
<?php
$tns = " 
    (DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)
<<<<<<< HEAD
    (HOST = 192.168.0.23)(PORT = 1521)) ) 
=======
    (HOST = 192.168.0.98)(PORT = 1521)) ) 
>>>>>>> a4d2d9044e9578551a63e9b4006a556a0bce85b3
    (CONNECT_DATA = (SERVICE_NAME = xe) )
 ) "; 
try { 
    $conn = new PDO("oci:dbname=".$tns.";charset=utf8", "team", "team"); 
} catch (PDOException $e) {
     echo "Failed to obtain database handle " . $e->getMessage();
}
?>
<<<<<<< HEAD
>>>>>>> refs/remotes/origin/master
=======
<?php 
$tns = " (DESCRIPTION = (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)
(HOST = 192.168.0.18)(PORT = 1521)) ) (CONNECT_DATA = (SERVICE_NAME = xe) ) ) "; 
try { 
    $conn = new PDO("oci:dbname=".$tns.";charset=utf8", "team", "team"); 
}
catch (PDOException $e) { 
    echo "Failed to obtain database handle " . $e->getMessage(); 
} 
?>
<<<<<<< HEAD
>>>>>>> refs/remotes/origin/master
=======
>>>>>>> refs/remotes/origin/LeeDongTak
>>>>>>> refs/remotes/origin/master
=======

>>>>>>> refs/remotes/origin/master
