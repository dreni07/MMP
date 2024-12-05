<?php
include 'includes/db.inc.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class='text-center'>Login</h2>

                        <form action="" method='POST'>
                            <div class="mb-3">
                                <label for="email" class='form-label'>Email</label>
                                <input type="email" name='email' id='email' class='form-control'>
                            </div>
                            <div class="mb-3">
                                <label for="password" class='form-label'>Password</label>
                                <input type="password" name='password' id='password' class='form-control'>

                            </div>

                            <button type='submit' class='btn btn-primary w-100'>Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>

