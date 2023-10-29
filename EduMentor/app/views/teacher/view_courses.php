<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigned Courses - EduMentor</title>
    <link rel="stylesheet" href="your-styles.css"> <!-- Include your custom styles here -->
</head>
<body>
    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Main content -->
    <div class="container">
        <h1>Assigned Courses</h1>
        <ul>
            <?php foreach ($assignedCourses as $course): ?>
                <li><a href="#"><?php echo $course['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <script src="js/script.js"></script>
</body>
</html>
