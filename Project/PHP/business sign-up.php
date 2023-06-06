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
    <link rel="stylesheet" href="/Project/CSS/slide.css">
    <link rel="stylesheet" href="/Project/CSS/jobseeker sign-up style.css">
    <style>
        #preview {
            width: 100px;
            height: 100px;
            max-width: 100px;
            max-height: 100px;
            padding: 2px;
            border: 2px white solid ;
        }
    </style>
</head>
<body>
    <br><br>
    <form action="config/b_SignUp.php" method="POST" id="signup-form" onsubmit="return validateform()" >

        <h2>Business Sign-up</h2>
        <?php if(isset($message)): ?>
        <p><?php echo $message; ?></p>
        <?php endif; ?>
        
        <div class="form-group">
            <label for="full-name">Business Name</label>
            <input type="text" id="full-name" name="bName" required>
        </div>
        <div class="form-group">
            <label for="full-name">Business Username</label>
            <input type="text" id="bUsername" name="bUsername" required>
        </div>
        <div class="form-group">
            <label for="profile-pic">Profile Picture:</label>
            <div>
                <input type="file" id="profile-pic" name="pPic" onchange="showPreview(event)" required><br><br>
                <img id="preview" src="https://cdn.icon-icons.com/icons2/1369/PNG/512/-insert-photo_90569.png" alt="Preview Image">
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea style="resize: none; border-radius: 0.50rem;" name="address" id="address" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="contactNum">Contact Number</label>
            <input type="text" id="contactNum" name="contactNum" required>
        </div>

        <div class="form-group">
            <label for="industry">Industry</label>
            <input type="text" id="industry" name="industry" required>
        </div>

        <div class="form-group">
            <label for="comp_Descrip">Company Description</label>
            <input type="text" id="comp_Descrip" name="comp_Descrip" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirmpassword" required>
        </div>

        <button id="next-btn">Sign Up</button>
        <div >
            <button onclick="location.href='/Project/PHP/business login.php'" id="login-btn">Already have an account?</button>
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
        var contactNum = document.getElementsByName("contactNum")[0].value;
        var address = document.getElementsByName("address")[0].value;


        if (password === cPassword) {
            alert("Passwords Do Not Match.");
            return false; // Prevent form submission
        }
        return true; // Allow form submission

        if (fullName === "" || email === "" || password === "" || cPassword === "" || address === "" || contactNum === "") {
            alert("All input fields must be filled.");
            return false; // Prevent form submission
        }
        return true; // Allow form submission
    }

    function showPreview(event) {
            var file = event.target.files[0];
            var reader = new FileReader();

            reader.onload = function (e) {
                var previewImg = document.getElementById("preview");
                previewImg.setAttribute("src", e.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
</body>
</html>

<?php
    include("./config/footer.php");
?>