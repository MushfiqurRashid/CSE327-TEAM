<?php

class Teacher {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Get courses assigned to a teacher
    public function getAssignedCourses($teacherId) {
        $courses = [];
        try {
            $query = "SELECT c.title, c.description
                      FROM courses c
                      WHERE c.instructor_id = :teacherId";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":teacherId", $teacherId, PDO::PARAM_INT);
            $stmt->execute();
            $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Handle database errors
            echo "Error: " . $e->getMessage();
        }
        return $courses;
    }

    // Additional methods for the Teacher model can be added here
}
?>
