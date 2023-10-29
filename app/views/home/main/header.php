<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- Font Awesome css -->
    <link rel="stylesheet" href="public/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:wght@400;700&display=swap" rel="stylesheet">
    <!-- Custom Css -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style-login-register.css">
    <title>Edu Mentor</title>
</head>

<body>
    <!-- start Navigation  -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-clr pl-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="../server.php">EDU Mentor</a>
            <div class="navbar-text">Learn For Implement</div>
            <!-- <span class="navbar-text">Learn For Implement</span> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav custom-nav pl-2">
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link active" aria-current="page" href="../server.php">Home</a>
                    </li>
                    <li class="nav-item custom-nav-item pl-1">
                        <a class="nav-link active" href="app/views/main/about.php">About</a>
                    </li>
                    <li class="nav-item custom-nav-item pl-1">
                        <a class="nav-link active" href="app/views/course/courses.php">Courses</a>
                    </li>
                    <li class="nav-item custom-nav-item pl-1">
                        <a class="nav-link active" href="app/views/cart/cart.php">Cart</a>
                    </li>
                    <li class="nav-item custom-nav-item pl-1">
                        <a class="nav-link active" role="button" oneclick="logout()">Logout</a>
                    </li>
                    <?php
                    include("./app/controllers/home.php");
                    if (userIsLoggedIn()) { // Implement a function to check if the user is logged in
                        echo '<li class="nav-item custom-nav-item pl-1">
                            <a class="nav-link active" href="app/views/dashboard/dashboard.php">Dashboard</a>
                        </li>';
                    } else {
                        echo '<li class="nav-item custom-nav-item pl-1">
                            <a class="nav-link active" href="app/views/auth/login.php">Login</a>
                        </li>
                        <li class="nav-item custom-nav-item pl-1">
                            <a class="nav-link active" href="app/views/auth/registration.php">Signup</a>
                        </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end Navigation  -->