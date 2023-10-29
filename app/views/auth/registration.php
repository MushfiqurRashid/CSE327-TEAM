<!-- Include Header -->
<?php
include('../app/views/home/main/header.php');
?>
<!-- Form Header -->
<div class="response-button bg-blue">
    <div class="btn-box-direction custom-btn">
        <a class="btn-box " href="app/views/auth/login.php" role="button">Login</a>
    </div>
    <div class="btn-box-direction custom-btn">
        <a class="btn-box " href="app/views/auth/registration.php" role="button">Signup</a>
    </div>
</div>
<!-- Start Registration Form -->
<div class="form-box">
    <div class="regiser-container" id="registration">
        <form action="app/controlles/user.php" method="post" class="two-forms">
            <div class="input-box">
                <div class="input-text">
                    Enter Name
                </div>
                <input type="text" class="input-field" id="name" placeholer="Name" name="name">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <div class="input-text">
                    Enter Email
                </div>
                <input type="email" class="input-field" id="email" placeholer="Email" name="email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <div class="input-text">
                    Enter Password
                </div>
                <input type="password" class="input-field" id="password" placeholer="Password" name="password">
                <i class="bx bx-lock-altr"></i>
            </div>
            <div class="input-box">
                <div class="input-text">
                    User Type
                </div>
                <select name="usertype" id="role" class="user-type" name="role">
                    <option value="student">Student</option>
                    <option value="instructor">Instructor</option>
                </select>
            </div>
            <div class="input-box">
                <button type="submit" class="submit-btn custom-btn">Register</button>
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check">Remember Me</label>
                </div>
                <div class="two">
                    <label>
                </div>
                <input type="checkbox"">
                    <label for=" register-check">Terms & Condition</label>

                </label>
            </div>
            <div class="three">
                <label>Have an account? <a href="../app/views/auth/login.php" onclick="login()">Login</a></label>
            </div>
        </form>

    </div>
</div>
</div>
<?php
if (isset($_SESSION['registration_message'])) {
    echo '<p class="error-message">' . $_SESSION['registration_message'] . '</p>';
    unset($_SESSION['registration_message']);
}
?>
<!-- End Registration Form -->

<!-- Include Footer -->
<?php
include('../app/views/home/main/footer.php');
?>