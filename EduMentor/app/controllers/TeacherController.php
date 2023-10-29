<?php

// Include necessary dependencies and models
require_once('../models/Teacher.php');

class TeacherController {
    // Constructor and any required setup can be added here if needed

    public function dashboard() {
        try {
            // Check if the user is logged in as a teacher
            if ($_SESSION['role'] !== 'teacher') {
                throw new Exception("Access denied. You are not a teacher.");
            }

            // Retrieve data for the teacher's dashboard, e.g., assigned courses
            $assignedCourses = Teacher::getAssignedCourses($_SESSION['user_id']);

            // Load the teacher dashboard view
            include('../views/teacher/dashboard.php');
        } catch (Exception $e) {
            // Handle exceptions (e.g., unauthorized access)
            echo "Error: " . $e->getMessage();
        }
    }

    public function createAssignment() {
        try {
            // Check if the user is logged in as a teacher
            if ($_SESSION['role'] !== 'teacher') {
                throw new Exception("Access denied. You are not a teacher.");
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Handle assignment creation logic, e.g., adding an assignment to the database
                $title = $_POST['title'];
                $description = $_POST['description'];
                $dueDate = $_POST['due_date'];
                $teacherId = $_SESSION['user_id'];

                // You would implement the assignment creation logic here, e.g., adding the assignment to the database

                // Redirect back to the dashboard or a confirmation page
                header('Location: /teacher/dashboard');
            } else {
                // Load the view for creating assignments
                include('../views/teacher/create_assignment.php');
            }
        } catch (Exception $e) {
            // Handle exceptions (e.g., unauthorized access or errors during assignment creation)
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
