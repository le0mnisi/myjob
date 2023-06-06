<?php
    session_start();
    require("./config/server.php");
    $comp_Username = $_SESSION['comp_Username'];
    // $sql = "SELECT * FROM postedjobs";
    $sql = "SELECT * FROM postedjobs WHERE comp_Username = '$comp_Username'";
    $result = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Project/CSS/dash.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin panel</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-clinic-medical"></i>
                        <div class="title">My Job</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <!-- <li>
                    <a href="postJob.php">
                        <i class="fa-sharp fa-solid fa-plus" style="color: #ffffff;"></i>
                        <div class="title">Post A Job</div>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="/HTML/managePosts.html">
                        <i class="fas fa-user-md"></i>
                        <div class="title">Manage Job Posts</div>
                    </a>
                </li>
                <li>
                    <a href="/HTML/viewApps.html">
                        <i class="fa-solid fa-file-invoice" style="color: #ffffff;"></i>
                        <div class="title">View Applications</div>
                    </a> -->
                </li>
                <!-- <li>
                    <a href="/HTML/payments.html">
                        <i class="fas fa-hand-holding-usd"></i>
                        <div class="title">Manage Payments</div>
                    </a>
                </li> -->
                <li>
                    <a href="Business profile.php">
                        <i class="fas fa-cog"></i>
                        <div class="title">Company/ Recruiter Profile Settings</div>
                    </a>
                </li>
                <!-- <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        <div class="title">Help</div>
                    </a>
                </li>
            </ul> -->
        </div>
        <div class="main">
            <div class="top-bar">
                <i class="fas fa-bell"></i>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">
                        <?php
                            $sql = "SELECT count(JobID) AS total FROM postedJobs WHERE comp_Username = '$comp_Username'";
                            $resultCount = mysqli_query($connection, $sql);
                            $values = mysqli_fetch_assoc($resultCount);
                            $num_rows = $values['total'];
                            echo $num_rows;
                        ?>
                        </div>
                        <div class="card-name">Jobs Posted</div>
                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-clipboard" style="color: #ffffff;"></i>
                    </div>
                </div>
                <!-- <div class="card">
                    <div class="card-content">
                        <div class="number">0</div>
                        <div class="card-name">Applications Recieved</div>
                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-file-invoice" style="color: #ffffff;"></i>
                    </div>
                </div> -->
                <!-- <div class="card">
                    <div class="card-content">
                        <div class="number">0</div>
                        <div class="card-name">Shortlisted Candidates</div>
                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-users-line" style="color: #ffffff;"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">0</div>
                        <div class="card-name">Meetings</div>
                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-calendar-days" style="color: #ffffff;"></i>
                    </div>
                </div> -->
            </div>
            <div class="tables">
                <div class="jobs-posted">
                    <div class="heading">
                        <h2>Jobs Posted</h2>
                        <!-- <a href="/HTML/managePosts.html" class="btn">View All</a> -->
                    </div>
                    <table class="table_PostedJobs">
                        <thead>
                            <th>ID</th>
                            <th>Job title</th>
                            <th>Industry</th>
                            <th>Location</th>
                            <th>Contract Type</th>
                            <th>Working Hours</th>
                            <th>Salary</th>
                            <th>Salary Time Period</th>
                            <th>Skills Required</th>
                            <th>Education Levels</th>
                        </thead>
                        <tbody>
                            <?php
                            
                                while($row = $result->fetch_assoc()){
                                    $id = $row['JobID'];
                                    $id_ = $row['JobID'];
                                    echo "
                                    <tr>
                                    <td>$row[JobID]</td>
                                    <td>$row[JobName]</td>
                                    <td>$row[JobSector]</td>
                                    <td>$row[JobLocation]</td>
                                    <td>$row[ContractType]</td>
                                    <td>$row[WorkingHours]</td>
                                    <td>$row[Salary]</td>
                                    <td>$row[S_TimePeriod]</td>
                                    <td>$row[skillsRequired]</td>
                                    <td>$row[EdLevels]</td>
                                    <td><a href='updatePost.php?UpdateID=".$id."' style='text-decoration: none; background-color: green; color: white; border: 1px solid black; padding: 2px;'>Update</a></td>
                                    <td><a href='deletePost.php?DeleteID=".$id."' style='text-decoration: none; background-color: red; color: white; border: 1px solid black; padding: 2px;'>Delete</a></td>
                                    </tr>
                                    ";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="meetings">
                    <div class="heading">
                        <h2>Meetings</h2>
                        <a href="/HTML/viewApps.html" class="btn">View All</a>
                    </div>
                    <table class="visiting">
                        <thead>
                            <td>Name & Surname</td>
                            <td>Meeting Date</td>
                            <td>Details</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Name Surname</td>
                                <td>2023-00-00</td>
                                <td><i class="far fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Name Surname</td>
                                <td>2023-00-00</td>
                                <td><i class="far fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Name Surname</td>
                                <td>2023-00-00</td>
                                <td><i class="far fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>Name Surname</td>
                                <td>2023-00-00</td>
                                <td><i class="far fa-eye"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div> -->
            </div>
        </div>
    </div>
    

</body>
</html>
