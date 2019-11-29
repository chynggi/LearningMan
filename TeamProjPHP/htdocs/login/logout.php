<?php
session_start();
session_destroy();
header("Location: ../index.php"); //헤더 함수를 이용해서 리다이렉션 시킬 수 있다.
?>