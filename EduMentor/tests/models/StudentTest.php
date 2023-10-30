<?php
use PHPUnit\Framework\TestCase;

// Include the Student model
require_once('../models/Student.php');

class StudentTest extends TestCase
{
    public function testGetEnrolledCourses()
    {
        // Create a test instance of Student
        $student = new Student($this->createMock(PDO::class)); // You should adjust the class used here

        // Define your expected query and result
        $expectedQuery = "SELECT c.title, c.description
              FROM enrollments e
              JOIN courses c ON e.course_id = c.id
              WHERE e.student_id = :studentId";
        $expectedResult = [/* Your expected results here */];

        // Create a mock statement
        $stmt = $this->createMock(PDOStatement::class);

        // Configure the behavior of the mock statement
        $stmt->method('fetchAll')->willReturn($expectedResult);

        // Create a mock PDO instance
        $pdo = $this->createMock(PDO::class);

        // Configure the behavior of the mock PDO
        $pdo->method('prepare')->willReturn($stmt);

        // Inject the mock PDO instance into the Student instance
        $student->setDb($pdo);

        // Call the method you want to test
        $result = $student->getEnrolledCourses(1); // Replace with a valid student ID

        // Add your assertions based on the expected results
        $this->assertEquals($expectedResult, $result);
    }

    // Add more test methods for other model functions
}