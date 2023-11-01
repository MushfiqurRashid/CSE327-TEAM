<?php


/**
 * Summary of DiscussionMessage
 */
class DiscussionMessage {
    /**
     * Summary of id
     * @var 
     */
    private $id;
    /**
     * Summary of userId
     * @var 
     */
    private $userId;
    /**
     * Summary of message
     * @var 
     */
    private $message;
    /**
     * Summary of attachment
     * @var 
     */
    private $attachment;
    /**
     * Summary of timestamp
     * @var 
     */
    private $timestamp;

    /**
     * Summary of __construct
     * @param mixed $userId
     * @param mixed $message
     * @param mixed $attachment
     */
    public function __construct($userId, $message, $attachment = null) {
        $this->userId = $userId;
        $this->message = $message;
        $this->attachment = $attachment;
    }

    // Save a new discussion message to the database
    /**
     * Summary of save
     * @return bool
     */
    public function save() {
        global $conn;

        // Prepare the SQL statement
        $sql = "INSERT INTO discussion_messages (user_id, message, attachment) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        // Bind parameters and execute the query
        mysqli_stmt_bind_param($stmt, "sss", $this->userId, $this->message, $this->attachment);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            return true;  // Message saved successfully
        } else {
            return false;  // Failed to save the message
        }
    }

    // Retrieve discussion messages from the database
    /**
     * Summary of getAllMessages
     * @return array
     */
    public static function getAllMessages() {
        global $conn;

        $messages = array();

        // Prepare the SQL statement
        $sql = "SELECT * FROM discussion_messages ORDER BY timestamp DESC";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $message = new DiscussionMessage($row['user_id'], $row['message'], $row['attachment']);
                $message->setId($row['id']);
                $message->setTimestamp($row['timestamp']);
                $messages[] = $message;
            }
        }

        return $messages;
    }

    // Getter and setter methods for properties
    /**
     * Summary of getId
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Summary of setId
     * @param mixed $id
     * @return void
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * Summary of getTimestamp
     * @return mixed
     */
    public function getTimestamp() {
        return $this->timestamp;
    }

    /**
     * Summary of setTimestamp
     * @param mixed $timestamp
     * @return void
     */
    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }
}
