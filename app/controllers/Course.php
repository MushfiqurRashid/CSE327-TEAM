<!-- for courses and course details -->
<?php
/**
 * Summary of Course
 */
class Course
{
    /**
     * Summary of courseID
     * @var int
     */
    public int $courseID;
    /**
     * Summary of courseTitle
     * @var string
     */
    public string $courseTitle;
    /**
     * Summary of __construct
     */
    public function __construct()
    {
        // Construct.
    }

    /**
     * Summary of enrollStudentInCourse
     * @param mixed $courseId
     * @param mixed $userId
     * @return void
     */
    private function enrollStudentInCourse($courseId, $userId)
    {
        include_once './app/views/course/course-details.php';

        if ($price == 0 ) {
            include '../app/model/course.php'; // Include the User model

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $courseId = $_POST['courseId'];
                $emauserIdil = $_POST['userId'];

                enrollStudentInCourse($courseId, $userId);
                echo "Course Enrolled successful!";
                header("../app/views/home/index.php");
            }
            include '../app/views/auth/registration.php';
        } else {
            // addToCart();
        }
    }
}
?>