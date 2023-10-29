<!-- Include Header -->
<?php
include('./app/views/home/main/header.php');
?>
<!-- Form Header -->
<div class="response-button bg-blue login-page-button">
    <div class="btn-box-direction custom-btn">
        <a class="btn-box" href="app/views/auth/login.php" role="button">Login</a>
    </div>
    <div class="btn-box-direction custom-btn">
        <a class="btn-box" href="app/views/auth/registration.php" role="button">Signup</a>
    </div>
</div>
<!-- Start Registration Form -->

<div class="form-box">
    <div class="login-container" id="login">
        <form action="../app/controllers/user.php" method="post" class="two-forms">
            <div class="input-box">
                <div class="input-text">
                    Enter Email
                </div>
                <input type="email" name="email" class="input-field" placeholer="Email" required>
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <div class="input-text">
                    Enter Password
                </div>
                <input type="password" name="password" class="input-field" placeholer="Password">
                <i class="bx bx-lock-altr"></i>
            </div>
            <div class="input-box ">
                <button type="submit" name="submit" class="submit-btn custom-btn">Login</button>
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
                <label>Don't have an account? <a href="../app/views/auth/registration.php" onclick="login()">Signup</a></label>
            </div>
        </form>

    </div>
</div>
</div>

<!-- End Registration Form -->

<!-- Include Footer -->
<?php
include('../app/views/home/main/footer.php');
?>