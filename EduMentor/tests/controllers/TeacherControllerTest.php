<?php

require_once('../controllers/TeacherController.php');

class TeacherControllerTest extends \PHPUnit\Framework\TestCase {

    public function testDashboard() {
        // Create a sample session to simulate a logged-in teacher
        $_SESSION['role'] = 'teacher';
        $_SESSION['user_id'] = 1;

        // Create a mock instance of the Student class (you can use a mocking library for this)
        $studentMock = $this->createMock(Student::class);

        // Simulate the expected behavior of Student::getAssignedCourses
        $studentMock->expects($this->once())
            ->method('getAssignedCourses')
            ->with(1)
            ->willReturn(['Course 1', 'Course 2']);

        // Create an instance of the TeacherController with the mocked Student class
        $teacherController = new TeacherController($studentMock);

        // Observe the output (e.g., capture the output buffer)
        ob_start();
        $teacherController->dashboard();
        $output = ob_get_clean();

        // Assert that the expected output (dashboard content) is present in the actual output
        $this->assertStringContainsString('Welcome, Teacher!', $output);
        $this->assertStringContainsString('Assigned Courses', $output);
        $this->assertStringContainsString('Course 1', $output);
        $this->assertStringContainsString('Course 2', $output);
    }

    public function testCreateAssignment() {
        // Create a sample session to simulate a logged-in teacher
        $_SESSION['role'] = 'teacher';
        $_SESSION['user_id'] = 1;

        // Create an instance of the TeacherController
        $teacherController = new TeacherController();

        // Simulate a POST request with assignment data
        $_POST['course_id'] = 1;
        $_POST['assignment_title'] = 'Assignment 1';
        $_POST['assignment_description'] = 'Description for Assignment 1';

        // Observe the output (e.g., capture the output buffer)
        ob_start();
        $teacherController->createAssignment();
        $output = ob_get_clean();

        // Assert that the expected success message is present in the actual output
        $this->assertStringContainsString('Assignment created successfully', $output);
    }

    
}
