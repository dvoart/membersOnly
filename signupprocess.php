<?php

session_start();

if (!isset($_POST['join'])) {
    header("index.php");
}

//generate a password
$arandomnumber = rand();

//encrypt a password (md5 not too secure anymore, better way will be shown later)
$epassword = md5($arandomnumber);
echo $epassword;

//put in db
require_once('db.php');

$sql = "INSERT INTO users (usersFirst, usersLast, usersEmail, usersPassword)
VALUES ('{$_POST['usersFirst']}', '{$_POST['usersLast']}', '{$_POST['usersEmail']}', '{$epassword}')";
//echo $sql;die;

if ($conn->query($sql) === TRUE) {
    //send a welcome email with login to user
    $to = $_POST['usersEmail'];
    $subject = "Thanks for Joining";
    $txt = "Registration successful!

Login at: https://serop.dvo.opalstacked.com/Projects/members/login.php?username=$to

Username: $to
Password: $arandomnumber

Thanks for joining,
Jax Code Team
";


    $headers = "From: Jax Code Academy <webmaster@example.com>";

    mail($to, $subject, $txt, $headers);

    //redirect to login page
    $_SESSION['alert'] = "success";
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
