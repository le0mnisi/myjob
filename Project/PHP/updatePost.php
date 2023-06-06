<?php
    session_start();
    include("./config/header.php");
    require("./config/server.php");

    $id = $_GET['UpdateID'];
    $sql = "SELECT * FROM postedjobs WHERE JobID = $id";
    $current = $connection->query($sql);
    $row = $current->fetch_assoc();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_GET['UpdateID'];
        $jName = $_POST['jobTitle'];
        $comp_Username = $_SESSION['comp_Username'];
        $jIndustry = $_POST['industry'];
        $jLocation = $_POST['JobLocation'];
        $cType = $_POST['cType'];
        $Hours= $_POST['workingHours'];
        $Salary= $_POST['salary'];
        $tPeriod = $_POST['tPeriod'];
        $jDescrip = $_POST['jDescription'];
        $sRequired = $_POST['sRequired'];
        $edLevel = $_POST['edLevel'];
        
    
        $sql = "UPDATE postedjobs set JobID = '$id', JobName = '$jName', JobSector = '$jIndustry', JobLocation = '$jLocation',
        ContractType = '$cType', WorkingHours = '$Hours', Salary = '$Salary', S_TimePeriod = '$tPeriod', j_Description = '$jDescrip', skillsRequired = '$sRequired', EdLevels = '$edLevel'
        where JobID = '$id'";
        mysqli_query($connection, $sql);
        header("Location: ./dash.php");
    }
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

       <form action='#' id="form" method="POST" onsubmit="return validateForm()">
        <h1>Update Job</h1>
        <br>
        <div>
            <label  for="jobTitle">Job Title</label>
            <div>
                <input type="text" name="jobTitle" placeholder="e.g. Web Developer" required 
                <?php 
                if(isset($row["JobName"])){
               
                    echo "value='".$row["JobName"]."'"  ;
                } 
                    ?>>
            </div>
        </div>
        <br>
        <Label>Job Sector</Label>
        <div>
            <input type="text" name="industry" placeholder="e.g Tech Industry" required
            <?php 
                if(isset($row["JobSector"])){
               
                    echo "value='".$row["JobSector"]."'"  ;
                } 
                ?>>
        </div>
        <br>
        <div>
            <label  for="jobLocation">Job Location</label>
            <div>
                <input type="text" name="JobLocation" placeholder="Town/ Province" required
                <?php 
                if(isset($row["JobLocation"])){
               
                    echo "value='".$row["JobLocation"]."'"  ;
                } 
                ?>>
            </div>
        </div>
        <br>
        <Label>Cotract Type</Label>
        <select name="cType" id="format">
            <option selected disabled >Choose Contract Type</option>
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
                <input type="text" name="workingHours" placeholder="Hours" required <?php 
                if(isset($row["WorkingHours"])){
               
                    echo "value='".$row["WorkingHours"]."'"  ;
                } 
                ?>>
            </div>
        </div>
        <br>
        <div>
            <label for="salary">Salary</label>
            <div>
                <input type="text" name="salary" placeholder="Amount" required <?php 
                if(isset($row["Salary"])){
               
                    echo "value='".$row["Salary"]."'"  ;
                } 
                ?>>
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
                <textarea name="jDescription" id="" cols="30" rows="10" > <?php 
                if(isset($row["JobLocation"])){
               
                    echo "".$row["JobLocation"].""  ;
                } 
                ?></textarea >
            </div>
        </div>
        <br>
        <div>
            <label for="Skills">Skills Required</label>
            <div>
                <textarea name="sRequired" id="" cols="30" rows="10"> <?php 
                if(isset($row["skillsRequired"])){
               
                    echo "".$row["skillsRequired"].""  ;
                } 
                ?></textarea>
            </div>
        </div>
        <br>
        <br>
        <div>
        <label for="Education">Education Levels Required</label>
        <div>
            <textarea name="edLevel" id="" cols="30" rows="10"> <?php 
                if(isset($row["EdLevels"])){
               
                    echo "".$row["EdLevels"].""  ;
                } 
                ?></textarea>
        </div>
        </div>
        <br>
        <div>
            <button id="nextBTN" name="submit">Update</button>
        </div>
    </form>
    <br>
    <br>
</body>
</html>

<?php
    include("./config/footer.php");
?>