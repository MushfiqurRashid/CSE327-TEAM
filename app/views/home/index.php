<!-- Include Header -->
<?php
include('./app/views/home/main/header.php');

?>

<!-- Start Video Background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video src="public/video/intro-video.mp4" playsinline autoplay muted loop>
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Learn For Implement</h1>
        <h2 class="my-content">With EDU Mentor</h2>
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started</a>
        <!-- Button trigger modal -->
    </div>
</div>
<!-- End Video Background -->

<!-- Start Banner -->
<div class="container-fluid bd-danger txt-banner">
    <div class="row bottom-banner">
    </div>
</div>
<!-- End Banner  -->

<!-- Start Registration or Login Model -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Welcome</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Login or Signup to Continue...
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="../app/views/auth/login.php" role="button">
                    <button type="button" class="btn btn-primary">Login Now</button>
                </a>
                <a class="btn btn-primary" href="../app/views/auth/registration.php" role="button">
                    <button type="button" class="btn btn-primary">Signup Now</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Registration or Login Model -->

<!-- Start popular course -->
<div class="container mt-5">
    <h1 class="text-center">Popular Course</h1>
    <div class="card-container">
        <?php
        // Fetch dynamic course data from the database.
        $courses = fetchCoursesFromDatabase($conn);
        function fetchCoursesFromDatabase($conn)
        {
            $courseData = array();
            // Perform a query to retrieve course data from the database table
            $sql = "SELECT image,title, description, price FROM courses";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Create an associative array for each course and add it to the courseData array
                    $courseData[] = array(
                        "image" => $row['image'],
                        'title' => $row['title'],
                        'description' => $row['description'],
                        'price' => $row['price'],
                        // Add other course details as needed
                    );
                }
            }
            // Close the database connection
            $conn->close();
            return $courseData;
        }
        foreach ($courses as $course) { ?>
            <div class="card-deck mt-4">
                <div class="card" style="width: 18rem;">
                    echo '<img src="' . $image . ' class=" card-img-top, alt="image">';
                    <div class="card-body">
                        echo '<h5 class="card-title"><?php echo $course['title']; ?></h5>'
                        echo'<p class="card-text"><?php echo $course['description']; ?></p>''
                        <div class="card-footer">
                            <p class="card-text ">
                                echo 'Price: <span class="font-weight-bolder"><?php echo $course['price']; ?> TK</span>'
                            </p>
                        </div>
                        <a href="../app/views/course/course-details.php" class="btn btn-primary">Enroll</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="text-center m-2">
            <a class="btn btn-danger btn-sm" href="../app/views/course/courses.php">View All Course</a>
        </div>
    </div>
</div>
<!-- End popular course -->

<!-- Include Footer -->
<?php
include('./app/views/home/main/footer.php');
?>