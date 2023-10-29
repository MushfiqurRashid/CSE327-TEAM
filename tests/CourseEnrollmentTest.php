<?php
use PHPUnit\Framework\TestCase;

/**
 * Summary of CourseEnrollmentTest
 */
class CourseEnrollmentTest extends TestCase
{

    /**
     * Summary of testEnrollmentCourse
     * @param mixed $courseID
     * @param mixed $userID
     * @return void
     */
    public function testEnrollmentCourse($courseID, $userID)
    {
        $Course = new Course();
        $courses = [
            'courseID' => '121',
            'userID' => '221'
        ];
        $enroll = $Course->enrollment($courses);
    }
}   

/**
 * Summary of Course
 */
class Course
{

    /**
     * Summary of enrollment
     * @param mixed $courses
     * @return bool
     */
    public function enrollment($courses)
    {
        if (isset($courses['courseID'])) {
            return true;
        } else {
            return false;
        }
    }
}
