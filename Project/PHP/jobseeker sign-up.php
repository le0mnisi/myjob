<?php
    include("./config/header.php");
    require("./config/server.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker Sign-up</title>
    <link rel="stylesheet" href="/Project/CSS/jobseeker sign-up style.css">
</head>
<body>

<br><br>
    <form action="config/jb_Signup.php" method="POST" id="signup-form" onsubmit="return validateform()">
        <h2>Job Seeker Sign-up</h2>
        <div class="form-group">
            <label for="full-name">Name</label>
            <input type="text" id="full-name" name="fullname" required>
        </div>
        <div class="form-group">
            <label for="full-name">Surname</label>
            <input type="text" id="surname" name="surname" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirmpassword" required>
        </div>
        <div class="form-group">
            <label for="birthdate">Birthdate</label>
            <input type="date" id="birthdate" name="birthdate" required>
        </div>
        <button  id="next-btn">Sign Up</button>
        <div>
            <button type="button" onclick="location.href='jobseeker login.php'" id="login-btn">Already have an account?</button>
        </div>
    </form>
<br><br>
<script>
        function validateform() {
        // Check if any input field is empty
        var fullName = document.getElementsByName("fullname")[0].value;
        var email = document.getElementsByName("email")[0].value;
        var password = document.getElementsByName("password")[0].value;
        var cPassword = document.getElementsByName("confirmpassword")[0].value;
        var birthdate = document.getElementsByName("birthdate")[0].value;

        if (fullName === "" || email === "" || password === "" || cPassword === "" || birthdate === "") {
            alert("All input fields must be filled.");
            return false; // Prevent form submission
        }
        return true; // Allow form submission
    }
    </script>
</body>
</html>

<?php
    include("./config/footer.php");
?>