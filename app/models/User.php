<?php

/**
 * Summary of registration
 * @param mixed $name
 * @param mixed $email
 * @param mixed $password
 * @param mixed $role
 * @return void
 */
function registration($name, $email, $password, $role)
{
   include("config/connection.php");
   
   if (isset($_POST['submit'])) {

      $name = mysqli_real_escape_string($con, $_POST['name']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $pass = md5($_POST['password']);
      $role = $_POST['role'];

      $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

      $result = mysqli_query($con, $select);

      if (mysqli_num_rows($result) > 0) {

         $error[] = 'user already exist!';
      } else {
         $insert = "INSERT INTO users (name, email, password, role) VALUES ('$name','$email','$pass','$role')";
         mysqli_query($con, $insert);
         header('location: ../app/views/home/index.php');
      }
   };
}

/**
 * Summary of login
 * @param mixed $email
 * @return null
 */
function login($email)
{
   if (isset($_POST['submit'])) {
      include("config/connection.php");

      $email = mysqli_real_escape_string($con, $_POST['email']);
      $pass = md5($_POST['password']);

      $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

      $result = mysqli_query($con, $select);

      if (mysqli_num_rows($result) > 0) {
         $row = mysqli_fetch_array($result);
         if ($row['role'] == 'admin') {
            header('location: app/views/dashboard/admin-dashboard.php');
         } elseif ($row['role'] == 'student') {
            header('location: app/views/dashboard/admin-student.php');
         } elseif ($row['role'] == 'instructor') {
            header('location: app/views/dashboard/admin-instructor.php');
         }
         header('location: ../app/views/home/index.php');
      } else {
         $error[] = 'Incorrect Email or Password!';
      }
   };

   return null; // User not found
}
