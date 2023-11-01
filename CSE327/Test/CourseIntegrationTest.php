<?php


/**
 * Summary of CourseIntegrateTest
 */
class CourseIntegrateTest extends \Monolog\Test\TestCase {
    /**
     * Summary of courseIntegrate
     * @var 
     */
    protected $courseIntegrate;
    /**
     * Summary of mockDb
     * @var 
     */
    protected $mockDb;

    /**
     * Summary of setUp
     * @return void
     */
    protected function setUp(): void {
        $this->mockDb = $this->createMock(Database::class); // Replace Database with your actual database class
        $this->mockDb->method('getConnection')->willReturn($this->createMock(PDO::class)); // Replace PDO with your database connection class

        $this->courseIntegrate = new CourseIntegrate($this->mockDb);
    }

    /**
     * Summary of testCreateCourse
     * @return void
     */
    public function testCreateCourse() {
        // Act: Call the method you want to test
        $result = $this->courseIntegrate->createCourse("Test Course", "Course Description", "Course Material");

        // Assert: Check the results
        $this->assertTrue($result, "Failed to create a course.");
    }

    /**
     * Summary of testGetLastUploadedData
     * @return void
     */
    public function testGetLastUploadedData() {
        // Act: Call the method you want to test
        $result = $this->courseIntegrate->getLastUploadedData();

        // Assert: Check the results
        $this->assertIsArray($result, "Expected an array of course data.");
    }
}
