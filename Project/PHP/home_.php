<?php
require("./config/server.php");
include("./config/headerHome.php");


// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


// Retrieve job listings from the database
$sql = "SELECT postedjobs.*, companyprofile.comp_Name, companyprofile.comp_Email, companyprofile.comp_IMG
FROM postedjobs
JOIN companyprofile ON postedjobs.comp_Username = companyprofile.comp_Username";
$result = $connection->query($sql);
// Close the database connection

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/Project/CSS/test.css">
</head>
<body>
    <br><br>
    <div  class="browse">
        <a id="browse" href="/Project/PHP/page.php">Browse Via Adzuna</a>
    </div>
    <!-- <form method="GET" action="">
            <label for="location">Filter by Location:</label>
            <select name="location" id="location">
                <option value="">All Locations</option>
                <option value="Location2">Location 2</option>
            </select>
            <input id="filterBTN" type="submit" value="Filter">
        </form> -->
    <div class="job-listings">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="job-card">
                <h2><?php echo $row['comp_Name']?></h2>
      
                <h2><?php echo $row['JobName']; ?></h2>
                <p>Location: <?php echo $row['JobLocation']; ?></p>
                <p>Salary: R<?php echo  $row['Salary']; ?></p>
                <p><?php echo $row['J_Description']; ?></p>
                <br>
                <p>Email CV to <?php echo  $row['comp_Email']; ?> to apply </p>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>

<?php
include("./config/footer.php");
?>