<?php
 require_once 'config/db.php';

 unset($_SESSION['id']) ;
 unset($_SESSION['firstname']) ;
 unset($_SESSION['status']) ;


 header("location: index.php");

?>