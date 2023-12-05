<?php
session_start();

include_once('../config/database.php');

$query = "select * from users";

if(mysqli_query($conn,  $query)){
  $result =mysqli_query($conn, $query);
}