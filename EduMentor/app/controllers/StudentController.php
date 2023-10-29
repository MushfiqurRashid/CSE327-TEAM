<?php

// Include necessary dependencies and models
require_once('../models/Student.php');

class StudentController {
    // Constructor and any required setup can be added here if needed

    public function dashboard() {
        try {
            // Check if the user is logged in as a student
            if ($_SESSION['role'] !== 'student') {
                throw new Exception("Access denied. You are not a student.");
            }

            // Retrieve data for the student's dashboard, e.g., enrolled courses
            $enrolledCourses = Student::getEnrolledCourses($_SESSION['user_id']);

            // Load the student dashboard view
            include('../views/student/dashboard.php');
        } catch (Exception $e) {
            // Handle exceptions (e.g., unauthorized access)
            echo "Error: " . $e->getMessage();
        }
    }

    public function enrollCourses() {
        try {
            // Check if the user is logged in as a student
            if ($_SESSION['role'] !== 'student') {
                throw new Exception("Access denied. You are not a student.");
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Handle course enrollment logic, e.g., adding a course to the database
                $courseId = $_POST['course_id'];
                $studentId = $_SESSION['user_id'];

                // You would implement the course enrollment logic here, e.g., adding the enrollment record to the database

                // Redirect back to the dashboard or a confirmation page
                header('Location: /student/dashboard');
            } else {
                // Load the view for viewing and enrolling in courses
                include('../views/student/enroll_courses.php');
            }
        } catch (Exception $e) {
            // Handle exceptions (e.g., unauthorized access or errors during course enrollment)
            echo "Error: " . $e->getMessage();
        }
    }

    public function viewCourses() {
        try {
            // Check if the user is logged in as a student
            if ($_SESSION['role'] !== 'student') {
                throw new Exception("Access denied. You are not a student.");
            }

            // Retrieve and display a list of available courses for enrollment
            $availableCourses = Student::getAvailableCourses($_SESSION['user_id']);

            // Load the view for viewing and enrolling in courses
            include('../views/student/enroll_courses.php');
        } catch (Exception $e) {
            // Handle exceptions (e.g., unauthorized access)
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
