<?php

/**
 * Summary of User
 */
class User
{
    /**
     * Summary of name
     * @var string
     */
    public string $name;
    /**
     * Summary of email
     * @var string
     */
    public string $email;
    /**
     * Summary of password
     * @var string
     */
    public string $password;
    /**
     * Summary of role
     * @var string
     */
    public string $role;

    /**
     * Summary of __construct
     * @param mixed $name
     * @param mixed $email
     * @param mixed $password
     * @param mixed $role
     */
    public function __construct($name, $email, $password, $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    /**
     * Summary of login
     * @param mixed $email
     * @param mixed $password
     * @return void
     */
    public function login($email, $password)
    {
        include '../app/model/User.php'; // Include the User model

        login($email);

        if ($user && $user['password'] === $password) {
            // Successful login
            echo "Login Successful!";
        } else {
            // Failed login
            echo "Login failed. Invalid email or password.";
        }
        include '../app/views/auth/login.php'; // Include the login view
    }

    /**
     * Summary of registration
     * @return void
     */
    public function registration($name, $email, $password, $role)
    {
        // Implement the registration logic, which may involve interacting with the model and view.
        include '../app/model/User.php'; // Include the User model
        require_once("./app/views/auth/registration.php"); //Include the Views file.

        // For simplicity, let's assume the registration form data is POSTed to this controller function.
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];; // Set a default role for new users

            registration($name, $email, $password, $role);
            echo "Registration successful. You can now log in.";
            header("../app/views/home/index.php");
        }

        include '../app/views/auth/registration.php'; // Include the registration view
    }

    /**
     * Summary of logout
     * @return never
     */
    public function logout()
    {
        // Start the session (if not already started)
        session_start();

        // Destroy the session
        session_destroy();

        // Redirect to the login page or any other page after logout
        header('Location: login.php');
        exit;
    }
}
