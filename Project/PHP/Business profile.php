<?php
require("./config/server.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Project/CSS/Jobseeker_.css">
    <title>Business Profile</title>
</head>
<body>
    <form>
    <h1 id="heading1">Company Profile</h1>
        <label for="profile-pic">Profile Picture:</label>
        <div>
            <input type="file" id="profile-pic" required><br><br>
        </div>

        <label for="company-name">Company Name:</label>
        <div>
            <input type="text" id="company-name" name="companyName" required><br><br>
        </div>
        
        <label for="business-address">Business Address:</label>
        <div>
            <!-- <input type="text" id="business-address" name="business-address"><br><br> -->
            <textarea id="business-address" name="business-address" rows="4" cols="50"></textarea><br>
        
        </div>
        
        <label for="hr-manager">HR Manager:</label>
        <div>
            <input type="text" id="hr-manager" name="hrManager" required><br><br>
        </div>
        
        <label for="description">Description:</label><br>
        <div>
            <textarea id="description" name="description" rows="4" cols="50"></textarea><br>
        </div>

        <h4>Industry:</h4>
        <div id="industry">
            <label for="finance">Finance</label>
            <input type="checkbox" id="finance" name="industry" value="finance">
        
            <label for="technology">Technology</label>
            <input type="checkbox" id="technology" name="industry" value="technology">
        
            <label for="logistics">Logistics</label>
            <input type="checkbox" id="logistics" name="industry" value="logistics">
        
            <label for="health-sciences">Health Sciences</label>
            <input type="checkbox" id="health-sciences" name="industry" value="health-sciences">
            
            <label for="humanities">Humanities</label>
            <input type="checkbox" id="humanities" name="industry" value="humanities">
        
            <label for="tourism-hospitality">Tourism & Hospitality</label>
            <input type="checkbox" id="tourism-hospitality" name="industry" value="tourism-hospitality">
        
            <label for="marine">Marine</label><br>
            <input type="checkbox" id="marine" name="industry" value="marine">
        
            <label for="media-entertainment">Media & Entertainment</label><br><br>
            <input type="checkbox" id="media-entertainment" name="industry" value="media-entertainment">
        </div>
        <br><br>
        <button  id="submission">Submit</button>
        <!-- <input type="submit" value="Submit" id="submission"><br><br> -->
    </form>
    <script src="Business Profile.js"></script>
</body>
</html>
<?php

require("./config/server.php");
 // Get the form data
$companyName = $_POST['company-name'];
$businessAddress = $_POST['business-address'];
$hrManager = $_POST['hr-manager'];
$description = $_POST['description'];
$industries = $_POST['industry'];

// Store the data in a database
// ...

// Return a response to the client
$response = array(
  'success' => true,
  'message' => 'Data saved successfully'
);
echo json_encode($response);



include("./config/footer.php");
?>