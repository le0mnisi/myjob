<?php
    include("./config/headerHome.php");
    require("./config/server.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Post</title>
    <link rel="stylesheet" href="/Project/CSS/postJob_style.css">
    <script src="https://kit.fontawesome.com/1244d8c3ae.js" crossorigin="anonymous"></script>
    
</head>
<body>
 
    <form action="config/postJob_.php" id="form" method="POST" onsubmit="return validateForm()">
        <h1>Post A job</h1>
        <br>
        <div>
            <label  for="jobTitle">Job Title</label>
            <div>
                <input type="text" name="jobTitle" placeholder="e.g. Web Developer" required>
            </div>
        </div>
        <br>
        <Label>Job Sector</Label>
        <div>
            <input type="text" name="industry" placeholder="Tech Industry" required>
        </div>
        <br>
        <div>
            <label  for="jobLocation">Job Location</label>
            <div>
                <input type="text" name="jobLocation" placeholder="Town/ Province" required>
            </div>
        </div>
        <br>
        <Label>Cotract Type</Label>
        <select name="cType" id="format">
            <option selected disabled>Choose Contract Type</option>
            <option value="Permanent">Permanent</option>
            <option value="Contract">Contract</option>
            <option value="Training">Training</option>
            <option value="Temporary">Temporary</option>
            <option value="Voluntary">Voluntary</option>
            <option value="Freelance">Freelance</option>
        </select>
        <br>
        <div>
            <label  for="workingHours">Working Hours</label>
            <div>
                <input type="text" name="workingHours" placeholder="Hours" required>
            </div>
        </div>
        <br>
        <div>
            <label for="salary">Salary</label>
            <div>
                <input type="text" name="salary" placeholder="Amount" required>
            </div>
        </div>
        <br>
        <label for="">Salary Time Period</label>
        <select name="tPeriod" id="format">
            <option selected disabled>Choose Time Period</option>
            <option value="Per Hour">Per Hour</option>
            <option value="Per Day">Per Day</option>
            <option value="Per Hour">Per Month</option>
            <option value="Per Month">Per Month</option>
            <option value="Per Year">Per Year</option>
        </select>
        <br>
        <br>
        <div>
            <label for="jobDescription">Job Description</label>
            <div>
                <textarea name="jDescription" id="" cols="30" rows="10"></textarea >
            </div>
        </div>
        <br>
        <div>
            <label for="Skills">Skills Required</label>
            <div>
                <textarea name="sRequired" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <br>
        <br>
        <div>
        <label for="Education">Education Levels Required</label>
        <div>
            <textarea name="edLevel" id="" cols="30" rows="10"></textarea>
        </div>
        </div>
        <br>
        <div>
            <button id="nextBTN" name="Post">Post</button>
        </div>
    </form>
    <br>
    <br>
    <script>
        function validateForm() {
        // Check if any input field is empty
        var jName = document.getElementsByName("jobTitle")[0].value;
        var jIndustry = document.getElementsByName("industry")[0].value;
        var jLocation = document.getElementsByName("jobLocation")[0].value;
        var cType = document.getElementsByName("cType")[0].value;
        var Hours = document.getElementsByName("workingHours")[0].value;
        var Salary = document.getElementsByName("salary")[0].value;
        var tPeriod = document.getElementsByName("tPeriod")[0].value;
        var jDescrip = document.getElementsByName("jDescription")[0].value;
        var srequired = document.getElementsByName("sRequired")[0].value;
        var edLevel = document.getElementsByName("edLevel")[0].value;
        //var edLevel = document.getElementsByName("edLevel")[0].value;

        if (jName === "" || jIndustry === "" || jLocation === "" || cType === "" || Hours === "" || Salary === ""|| tPeriod === "" || jDescrip === "" || srequired === "" || edLevel === "") {
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
