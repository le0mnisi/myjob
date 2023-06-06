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
    <title>My Job</title>
    <link rel="stylesheet" href="/Project/CSS/landing page style_.css">
</head>
<body>   
    <div class="slider">
        <div class="load"></div>
        <div class="content">
            <div class="principal">
                <div class="user-type">
                    <h2>Choose your user type:</h2>
                    <ul>
                        <li><a href="/PHP/jobseeker login.php">Job Seeker</a></li>
                        <li><a href="/PHP/business login.php">Business</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="user-type">
        <h2>Choose your user type:</h2>
        <ul>
            <li><a href="/Project/PHP/jobseeker login.php">Job Seeker</a></li>
            <li><a href="/Project/PHP/business login.php">Business</a></li>
        </ul>
    </div>
    <script src="/Project/JS/landing page javascript"></script>
</body>
</html>

<?php
    include("./config/footer.php");
?>