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

    // Additional methods for the Student model can be added here
}
?>
