<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll in Courses - EduMentor</title>
    <link rel="stylesheet" href="your-styles.css"> <!-- Include your custom styles here -->
</head>
<body>
    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Main content -->
    <div class="container">
        <h1>Enroll in Courses</h1>
        <ul>
            <?php foreach ($availableCourses as $course): ?>
                <li>
                    <h3><?php echo $course['title']; ?></h3>
                    <p><?php echo $course['description']; ?></p>
                    <form action="enroll.php" method="post">
                        <input type="hidden" name="courseId" value="<?php echo $course['id']; ?>">
                        <button type="submit" class="btn btn-primary">Enroll</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <script src="js/script.js"></script> <!-- Include your custom JavaScript here -->
</body>
</html>
