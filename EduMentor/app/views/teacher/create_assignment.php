<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Assignment - EduMentor</title>
    <link rel="stylesheet" href="your-styles.css"> <!-- Include your custom styles here -->
</head>
<body>
    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Main content -->
    <div class="container">
        <h1>Create Assignment</h1>
        <form action="process_assignment.php" method="post">
            <div class="mb-3">
                <label for="assignmentTitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="assignmentTitle" name="assignmentTitle" required>
            </div>
            <div class="mb-3">
                <label for="assignmentDescription" class="form-label">Description</label>
                <textarea class="form-control" id="assignmentDescription" name="assignmentDescription" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="dueDate" class="form-label">Due Date</label>
                <input type="date" class="form-control" id="dueDate" name="dueDate" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <script src="js/script.js"></script>
</body>
</html>
