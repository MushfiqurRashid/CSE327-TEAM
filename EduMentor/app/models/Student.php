<?php

class Student {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Get enrolled courses for a student
    public function getEnrolledCourses($studentId) {
        $courses = [];
        try {
            $query = "SELECT c.title, c.description
                      FROM enrollments e
                      JOIN courses c ON e.course_id = c.id
                      WHERE e.student_id = :studentId";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":studentId", $studentId, PDO::PARAM_INT);
            $stmt->execute();
            $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Handle database errors
            echo "Error: " . $e->getMessage();
        }
        return $courses;
    }

    // Get available courses for a student
    public function getAvailableCourses($studentId) {
        $courses = [];
        try {
            // Add your SQL query to retrieve available courses
            // Example query: "SELECT * FROM courses WHERE id NOT IN (SELECT course_id FROM enrollments WHERE student_id = :studentId)"
            // Execute the query and retrieve the available courses
        } catch (PDOException $e) {
            // Handle database errors
            echo "Error: " . $e->getMessage();
        }
        return $courses;
    }
}
?>
