<?php
session_start();


$epassword = md5($_POST['usersPassword']);


// check if there login is valid
include('db.php');

$sql = "SELECT * FROM users WHERE usersEmail = '{$_POST['usersEmail']}' AND usersPassword = '{$epassword}'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

$_SESSION['logged'] = true;
$_SESSION['usersFirst'] = $row['usersFirst'];
$_SESSION['usersLast'] = $row['usersLast'];
$_SESSION['usersEmail'] = $row['usersEmail'];

header("Location: dashboard.php");
  }
} else {
header("Location: login.php");
}


?>