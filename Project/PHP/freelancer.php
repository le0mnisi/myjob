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
    <link rel="stylesheet" href="/Project/CSS/Jobseeker_.css">
    <title>Profile</title>
</head>
<body>
    <div>
        
        <form action=""   id="Freelancer">
        <h1 id="heading1"> Freelance User-Profile</h1>

            <label for="profile-pic">Profile Picture:</label>
            <div>
              <input type="file" id="profile-pic" name="profile-pic"><br><br>
              <div>
                <img id="profile-pic-preview" src="" alt="Profile Picture"><br><br>
              </div>  
            </div>

            <label for="name">Name:</label>
            <div>
              <input type="text" id="name" name="name"><br><br>
            </div>  
            
            <label for="surname">Surname:</label>
            <div>
              <input type="text" id="surname" name="surname"><br><br>
            </div>
            
            <label for="address">Address:</label>
            <div>
              <input type="text" id="address" name="address"><br><br>
            </div>
            
            <label for="phone">Phone Number:</label>
            <div>
              <input type="text" id="phone" name="phone"><br><br>
            </div>
            
            <label for="email">Email Address:</label>
            <div>
              <input type="text" id="email" name="email"><br><br>
            </div>
            
            <label for="grade">Highest Grade Passed:</label>
            <div>
              <input type="text" id="grade" name="grade"><br><br>
            </div>
            
            <label for="Pdescription">Short Personal Description:</label>
            <div>
              <textarea name="Pdescription" id="Pdescription" cols="30" rows="10"></textarea>

            </div>

            <label for="wdescription">Previous Work Experience</label>
            <div>
              <textarea name="wdescription" id="wdescription" cols="30" rows="10"></textarea>
            </div>

            <label for="documents">Previous Work done:</label>
            <div>
              <input type="file" id="documents" name="documents"><br><br>
            </div>
                       
            <label for="documents">Supporting Documents:</label>
            <div>
              <input type="file" id="documents" name="documents"><br><br>
            </div>
            
            <label for="social">Social Media Links:</label>
            <div>
              <input type="text" id="social" name="social"><br><br>
            </div>

            <label for="">Select????</label>
            <select name="SELECT????" id="">
              <option selected disabled>Choose Category</option>
              <option value="Technology">Technology</option>
              <option value="Finance">Finance</option>
              <option value="health-sciences">health-sciences</option>
              <option value="Hummanities">Humanities</option>
              <option value="Civil and Construction">Civil and Construction</option>
              <option value="Law">Law</option>
              <option value="Marine">Marine</option>
              <option value="Transport & Logistics">Transport & Logistics</option>
              <option value="Media & Entertainment">Media & Entertainment</option>
              <option value="Artisian">Artisian</option>
            </select>
            <br><br>
            <button type="submit">Submit</button>
            <!-- <input type="submit" value="Submit"> -->
        </form>
    </div>
    <script src="/JS/Freelancer.js"></script>
</body>
</html>
<?php

require("./config/server.php");
  
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
 
 $sql = "SELECT * FROM `name`;";

?>

<?php
    include("./config/footer.php");
?>