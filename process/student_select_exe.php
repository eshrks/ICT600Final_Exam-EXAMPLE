<?php
session_start();

include_once('../config/database.php');

$query = "select * from students";

if(mysqli_query($conn,  $query)){
  $result =mysqli_query($conn, $query);
}