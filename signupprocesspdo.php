<?php


session_start();

if (!isset($_POST['join'])) {
    header("Location:index.php");
}

// generate a password
$arandomnumber = rand();


//encrypt password
$epassword = md5($arandomnumber);


// Create connection
$link = mysqli_connect("localhost","dvo","4Z0vs7ffXPV2cL","dvoproject");

//check connection
if($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Prepare an insert statement
$sql = "INSERT INTO users (usersFirst, usersLast, usersEmail, usersPassword) 
VALUES (?, ?, ?, ?)";

// Bind variables to the prepared statement as parameters

if($stmt = mysqli_prepare($link, $sql)) {
    
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt,"ssss", $first_name, $last_name, $email, $epassword);



    /* Set the parameters values and execute the statement again to insert another row */
    $first_name = $POST['usersFirst'];
    $last_name = $POST['usersLast'];
    $email = $POST['usersEmail'];
    mysqli_stmt_execute($stmt);

    // email user
    $to = $email;
    $subject = "Dvo's signup";

    $txt = "Thanks for registering!
    
    Login at https://dvo.dvo.opalstacked.com/projects/membersonly/login.php?username=$to


Username = $email
Password = $arandomnumber

Dvos signup team
";

$headers = "From: Dvo's portfolio <donotreplay@dvo.com>";
mail($to,$subject,$txt,$headers);

// set Session alert and redirect
$_SESSION['alert'] = "success";
header("Location: login.php");
} else {
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}

// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($link);


