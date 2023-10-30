<?php
use PHPUnit\Framework\TestCase;

// Include the Teacher model
require_once('../models/Teacher.php');

class TeacherTest extends TestCase
{
    public function testGetAssignedCourses()
    {
        // Create a test instance of Teacher
        $teacher = new Teacher($this->createMock(PDO::class)); // You should adjust the class used here

        // Define your expected query and result
        $expectedQuery = "SELECT c.title, c.description
              FROM courses c
              WHERE c.instructor_id = :teacherId";
        $expectedResult = [/* Your expected results here */];

        // Create a mock statement
        $stmt = $this->createMock(PDOStatement::class);

        // Configure the behavior of the mock statement
        $stmt->method('fetchAll')->willReturn($expectedResult);

        // Create a mock PDO instance
        $pdo = $this->createMock(PDO::class);

        // Configure the behavior of the mock PDO
        $pdo->method('prepare')->willReturn($stmt);

        // Inject the mock PDO instance into the Teacher instance
        $teacher->setDb($pdo);

        // Call the method you want to test
        $result = $teacher->getAssignedCourses(1); // Replace with a valid teacher ID

        // Add your assertions based on the expected results
        $this->assertEquals($expectedResult, $result);
    }

    // Add more test methods for other model functions
}
