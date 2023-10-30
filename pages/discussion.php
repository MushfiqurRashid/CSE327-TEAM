<?php
// Include the database connection file
include "pages/connection.php";

/**
 * Check if the 'createPost' form has been submitted.
 */
if (isset($_POST['createPost'])) {
    // Get input data from the form
    $courseTitle = $_POST['cTitle'];
    $courseNote = $_POST['cNote'];
    $courseDescription = $_POST['cDescription'];

    // Check if a course with the same title exists
    $checkQuery = "SELECT * FROM course_info WHERE courseTitle='$cTitle'";
    $result = mysqli_query($conn, $checkQuery);
    $numRows = mysqli_num_rows($result);

    // Redirect to the index page if a course with the same title exists
    if ($numRows == 1) {
        header("location: index.php");
    } else {
        // Show an alert if there's no matching course title
        echo '<script>alert("Wrong course title name. Please try again.")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion Forum</title>

    <!-- Latest Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Discussion Forum</h1>

        <!-- Display posts -->
        <?php foreach ($posts as $post): ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($post['title']) ?></h5>
                    <p class="card-text"><?= htmlspecialchars($post['content']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Create new post form -->
        <form action="create_post.php" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="createPost">Create Post</button>
        </form>
    </div>
</body>
</html>
