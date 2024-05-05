<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1>Sign up</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">



                <form action="signupprocesspdo.php" method="post">
                    <div class="mb-3">
                        <label for="userFirst" class="form-label">First name:</label>
                        <input type="text" class="form-control" name="usersFirst" placeholder="Enter first name">
                    </div>
                    <div class="mb-3">
                        <label for="usersLast" class="form-label">Last name:</label>
                        <input type="text" class="form-control" name="usersLast" placeholder="Enter Last name">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="usersEmail" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="usersEmail" placeholder="Enter email">
                    </div>

                
                    <button type="submit" name="join" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>