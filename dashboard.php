<?php session_start(); 
if(!isset($_SESSION['logged'])) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <h1>Dashboard</h1>

<a href="logout.php">Log out</a>

Welcome <?=$_SESSION['usersFirst']?>

Your Name: <?=$_SESSION['usersFirst']?> <?=$_SESSION['usersLast']?>
<br>
Your Email: <?=$_SESSION['usersEmail']?>




            </div>
        </div>
    </div>




</body>

</html>