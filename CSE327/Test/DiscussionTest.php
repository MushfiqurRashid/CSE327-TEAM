<?php
use PHPUnit\Framework\TestCase;

/**
 * Summary of DiscussionTest
 */
class DiscussionTest extends TestCase {
    /**
     * Summary of testSendMessageWithNoUserLoggedIn
     * @return void
     */
    public function testSendMessageWithNoUserLoggedIn() {
        // Arrange: Set up the environment
        $_SESSION['user_id'] = null;
        $_SERVER['REQUEST_METHOD'] = 'POST';

        // Act: Call the method you want to test
        $discussion = new Discussion();
        ob_start();
        $discussion->sendMessage();
        $output = ob_get_clean();

        // Assert: Check the results
        $this->assertStringContainsString("Access denied", $output);
    }

    /**
     * Summary of testSendMessageWithUserLoggedInAndPostRequest
     * @return void
     */
    public function testSendMessageWithUserLoggedInAndPostRequest() {
        // Arrange: Set up the environment
        $_SESSION['user_id'] = 1; // Simulate a logged-in user
        $_POST['message'] = "Test message";
        $_SERVER['REQUEST_METHOD'] = 'POST';

        // Act: Call the method you want to test
        $discussion = new Discussion();
        ob_start();
        $discussion->sendMessage();
        $output = ob_get_clean();

        // Assert: Check the results
        $this->assertStringContainsString("Location: /discussion/view", xdebug_get_headers());
    }

    /**
     * Summary of testViewMessages
     * @return void
     */
    public function testViewMessages() {
        // Arrange: Set up the environment
        // Mock the DiscussionMessage::getAllMessages method
        $mockedMessages = ["Message 1", "Message 2"];
        $mockedDiscussionMessage = $this->createMock(DiscussionMessage::class);
        $mockedDiscussionMessage->method('getAllMessages')->willReturn($mockedMessages);

        // Act: Call the method you want to test
        $discussion = new Discussion();
        ob_start();
        $discussion->viewMessages();
        $output = ob_get_clean();

        // Assert: Check the results
        $this->assertStringContainsString("Message 1", $output);
        $this->assertStringContainsString("Message 2", $output);
    }
}