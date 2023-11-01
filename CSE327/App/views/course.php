<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Course Integration">
    <meta name="author" content="Your Name">
    <title>Course Integration</title>
</head>
<body>
    <div class="container">
        <h1>Course Integration</h1>
       
        if (!empty($error_array)) {
            echo '<div class="error-message">' . implode("<br>", $error_array) . '</div>';
        } elseif (!empty($success_message)) {
            echo '<div class="success-message">' . $success_message . '</div>';
        }
        ?>
        <form method="post">
            <div class="form-group">
                <label for="cTitle">Course Title:</label>
                <input type="text" class="form-control" id="cTitle" name="cTitle" required>
            </div>
            <div class="form-group">
                <label for="cDescription">Course Description:</label>
                <textarea class="form-control" id="cDescription" name="cDescription" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="cMaterial">Course Material:</label>
                <input type="file" class="form-control-file" id="cMaterial" name="cMaterial">
            </div>
            <button type="submit" class="btn btn-primary" name="send">Create Course</button>
        </form>
        <div class="last-uploaded-data">
            <h2>Last Uploaded Course</h2>
            