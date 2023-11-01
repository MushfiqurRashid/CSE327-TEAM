<?php
/**
 * Summary of Course
 */
class Course
{
    /**
     * Summary of db
     * @var 
     */
    private $db;

    /**
     * Summary of __construct
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Summary of createCourse
     * @param mixed $title
     * @param mixed $note
     * @param mixed $description
     * @return void
     */
    public function createCourse($title, $note, $description)
    {
        // Perform database insertion here
        // Example code:
        $conn = $this->db->getConnection();
        $title = mysqli_real_escape_string($conn, $title);
        $note = mysqli_real_escape_string($conn, $note);
        $description = mysqli_real_escape_string($conn, $description);

        // SQL query and execution
        $sql = "INSERT INTO course_info (courseTitle, courseNote, courseDescription) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $title, $note, $description);
        $stmt->execute();
    }
}