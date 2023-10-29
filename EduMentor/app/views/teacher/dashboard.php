<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard - EduMentor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">EduMentor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#">Home</a>
                    <a class="nav-link" href="#">Courses</a>
                    <a class="nav-link" href="#">Profile</a>
                    <a class="nav-link" href="#">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Assigned Courses</div>
                    <div class="card-body">
                        <ul>
                            <?php foreach ($assignedCourses as $course) { ?>
                                <li><a href="#"><?php echo $course['title']; ?></a></li>
                            <?php } ?>
                            <!-- Add more courses -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Assignment</div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="assignmentTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" id="assignmentTitle">
                            </div>
                            <div class="mb-3">
                                <label for="assignmentDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="assignmentDescription" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="dueDate" class="form-label">Due Date</label>
                                <input type="date" class="form-control" id="dueDate">
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container">
            <span class="text-muted">Copyright &copy; <?php echo date("Y"); ?> EduMentor</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
