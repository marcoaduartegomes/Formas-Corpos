<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "formas";
$conn = new mysqli($host, $username, $password, $dbname);
 //fetch.php   
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT * FROM tbl_employee WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>