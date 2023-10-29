<!-- for the home page -->
<?php
session_start(); // Start or resume the session
    /**
     * Summary of userIsLoggedIn
     * @return bool
     */
    function userIsLoggedIn() {
        // Check if a user is logged in by examining a session variable
        return isset($_SESSION['user_id']);
    }
?>