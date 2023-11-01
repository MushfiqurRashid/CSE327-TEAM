<?php
/**
 * Summary of Course Integration
 */
class CourseIntegrate
{
    /**
     * Summary of db
     * @var 
     */
    private $db;

    /**
     * Summary of __construct
     * @param mixed $db
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Summary of createCourse
     * @param mixed $cTitle
     * @param mixed $cDescription
     * @param mixed $cMaterial
     * @return bool
     */
    public function createCourse($cTitle, $cDescription, $cMaterial)
    {
        $conn = $this->db->getConnection();

        $cTitle = $conn->real_escape_string($cTitle);
        $cDescription = $conn->real_escape_string($cDescription);
        $cMaterial = $conn->real_escape_string($cMaterial);

        $lastUpdate = date("Y-m-d H:i:s");
        $sql = "INSERT INTO course_info (courseTitle, courseDescription, courseMaterial, lastUpdate) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ssss", $cTitle, $cDescription, $cMaterial, $lastUpdate);
            $result = $stmt->execute();
            $stmt->close();

            if ($result) {
                return true;
            }
        }

        return false;
    }

    /**
     * Summary of getLastUploadedData
     * @return mixed
     */
    public function getLastUploadedData()
    {
        $conn = $this->db->getConnection();
        $query = "SELECT * FROM course_info ORDER BY lastUpdate DESC LIMIT 1";
        $result = $conn->query($query);

        return $result->fetch_assoc();
    }
}
?>
