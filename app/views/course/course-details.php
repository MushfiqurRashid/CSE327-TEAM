<!-- Include Header -->
<?php
include('../app/views/home/main/header.php');
?>
<!-- Start Course Details page Banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./pictures/course.jpg" alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;">
    </div>
</div>
<!-- End Course Details page Banner -->

<!-- start main content Dynamic -->

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            foreach ($images) {
            echo '<img src="' . $image . '" alt="Image" class="card-img-top" ;>
            }
        </div>
        <div class="col-md-8">
            <div class="card-body">
                foreach ($course) {
                <h5 class="card-title">
                    Course Name: <?php echo $course['$title']; ?>
                </h5>
                <p class="card-text">
                    Description: <?php echo $course['$description']; ?>
                </p>
                }
                <form action="" method="post">
                    foreach($course){
                    <p class="card-text d-inline">
                        Price: <span class="font-weight-bolder"><?php echo $course['$price']; ?></span>
                        }
                    </p>
                    <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="enroll" action='enrollStudentInCourse()'>
                        Buy Now
                    </button>
                    <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="addtocart">
                    <a href="../app/views/cart/add-to-cart.php">Add To Cart</a>
                    </button>
                    <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="addtocart">
                        <a href="../app/views/discussion/discussion-forum.php">Discussion Forum</a>
                    </button>
                </form>

                <!-- Dynamic lesson table -->
                <div class="container">
                    <div class="row">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Lesson No.</th>
                                    <th scope="col">Lesson Name.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Loop through course lessons dynamically
                                foreach ($course_lessons as $lesson) {
                                    echo '<tr>';
                                    echo '<th scope="row">' . $lesson['lesson_number'] . '</th>';
                                    echo '<td>' . $lesson['lesson_title'] . '</td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- ... -->
            </div>
        </div>
    </div>
</div>
<!-- end main content -->

<!-- Include Footer -->
<?php
include('../app/views/home/main/footer.php');
?>