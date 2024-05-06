<?php session_start(); ?>

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
   
    <h1>Log in</h1>
    <?php
    if (isset($_SESSION['alert'])) {
        echo '<div class="alert alert-success alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Success!</strong> Thanks for registering! check your email for instructions to logging in. Do not forget to check your spam folder. </div>';

    unset($_SESSION['alert']);
    }
    ?>

    <form action="loginprocess.php" method="post">
        <div class="mb-3 mt-3">
            <label class="form-label">Username:</label>
            <input type="email" class="form-control" name="usersEmail" placeholder="Enter email" required value="<?php if(isset($_GET['username'])) {echo $_GET['username'];}?>"
        </div>
        <div class="mb-3">
            <label class="form-label">Password:</label>
            <input type="text" class="form-control" name="usersLast" placeholder="Enter password" required>
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-label" name="remember"> Remember me
            </label>
        </div>

        <button type="submit" name="join" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>

    


</body>

</html>