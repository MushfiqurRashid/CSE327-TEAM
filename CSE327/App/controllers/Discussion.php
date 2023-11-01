<?php

/**
 * Summary of Discussion_forum
 */
class Discussion {
    /**
     * Summary of sendMessage
     * @throws \Exception
     * @return void
     */
    public function sendMessage() {
        try {
            // Check if the user is logged in
            if (!isset($_SESSION['user_id'])) {
                throw new Exception("Access denied. Please log in to send messages.");
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Handle message creation logic, e.g., adding a new message to the database
                $message = $_POST['message'];
                $attachment = $_FILES['attachment']; // Handle file upload

                // You would implement the message creation logic here, e.g., adding the message to the database

                // Redirect back to the discussion forum or a confirmation page
                header('Location: /discussion/view');
            } else {
                // Load the view for sending a new message
                include('../views/discussion/send_message.php');
            }
        } catch (Exception $e) {
            // Handle exceptions (e.g., unauthorized access or errors during message creation)
            echo "Error: " . $e->getMessage();
        }
    }

    /**
     * Summary of viewMessages
     * @return void
     */
    public function viewMessages() {
        try {
            // Retrieve and display a list of discussion messages
            $discussionMessages = DiscussionMessage::getAllMessages();

            // Load the view for viewing discussion messages
            include('../views/discussion/view_messages.php');
        } catch (Exception $e) {
            // Handle exceptions (e.g., access or data retrieval errors)
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
