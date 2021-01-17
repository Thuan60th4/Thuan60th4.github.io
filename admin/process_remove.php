<?php
require('../include/connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM education WHERE
 id= '$id'";

mysqli_set_charset($conn, 'UTF8');
$result = mysqli_query($conn,$sql); 
if ($result){
    header('location: update.php#Education');
    }


?>