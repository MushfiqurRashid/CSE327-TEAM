<!-- for course manageent -->
<?php
/**
 * Summary of enrollStudentInCourse
 * @param mixed $courseId
 * @param mixed $userId
 * @return void
 */
function enrollStudentInCourse($courseId, $userId)
{
    include("config/connection.php");
    // Implement course enrollment logic, e.g., insert a record in the enrollments table
    $query = "INSERT INTO enrolled_course (course_id, student_id) VALUES ('$courseId', '$userId')";
    $result = mysqli_query($conn, $query);
}
?>