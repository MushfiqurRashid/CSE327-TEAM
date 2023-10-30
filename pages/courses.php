<?php
// Include the database connection file
include "pages/connection.php";

// Initialize an error array
$error_array = array();

// Check if the form has been submitted
if (isset($_POST['send'])) {
    // Get form data
    $courseTitle = $_POST['cTitle'];
    $courseNote = $_POST['cNote'];
    $courseDescription = $_POST['cDescription'];

    // Define the SQL query to insert data into the database
    $sql = "INSERT INTO course_info (courseTitle, courseNote, courseDescription)
            VALUES ('$courseTitle', '$courseNote', '$courseDescription');";

    // Check if Course Title is empty
    if (empty($courseTitle)) {
        echo "Course Title and Course Note can not be empty";
        die();
    }

    // Execute the SQL query
    $query = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($query) {
        echo "\nNew record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "Data did not submit";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags and CSS links -->

    <!-- Title Page -->
    <title>Course Integration</title>

    <!-- Font for the page -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS -->
    <link href="/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Course Integration</h2>
                </div>
                <div class="card-body">
                    <form method="post">
                        <!-- Course Title Input -->
                        <div class="form-row">
                            <div class="name">Course Title</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="cTitle">
                            </div>
                        </div>
                        <!-- Course Note Input -->
                        <div class="form-row">
                            <div class="name">Course Note</div>
                            <div class "value">
                                <input class="input--style-6" type="text" name="cNote">
                            </div>
                        </div>
                        <!-- Course Description Textarea -->
                        <div class="form-row">
                            <div class="name">Course Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="cDescription" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <!-- Submit Button -->
                    <button class="btn btn--radius-2 btn--blue-2" type="submit" name="send">Send</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript and jQuery references -->

</body>
</html>
