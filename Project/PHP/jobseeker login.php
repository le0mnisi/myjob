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
    <title>Job Seeker Login</title>
    <link rel="stylesheet" href="/Project/CSS/slide.css">
    <link rel="stylesheet" href="/Project/CSS/jobseeker login.css">
</head>
<body>
    <div class="slider">
        <div class="load"></div>
    </div>
    <form action="config/jb_Login.php" method="POST" id="login-form" onsubmit="return validateform()">
        <h2>Job Seeker Login</h2>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="jb_username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button id="next-btn">Login</button>
        <div>
            <button type="button" onclick="location.href='jobseeker sign-up.php'" id="login-btn">Dont have an account?</button>
        </div>
    </form>
</body>
</html>

<?php
    include("./config/footer.php");
?>