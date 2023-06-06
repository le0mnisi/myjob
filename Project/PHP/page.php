<?php
  include("./config/headerHome.php");

// Include the file with the Adzuna API code and connection to the API

// Check if a search query is submitted
if (isset($_GET['location']) && isset($_GET['position'])) {
  require_once './adzuna_api.PHP';
    // Get the search parameters
    $location = $_GET['location'];
    $position = $_GET['position'];

    // Make API request with the search parameters
    $result = searchJobs($location, $position);
} else {
    // Make a default API request without search parameters
    $result = null;//searchJobs();
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Board</title>
  <!-- Page styling -->
  <link rel="stylesheet" href="/Project/CSS/page.css">
  <link rel="stylesheet" href="styles.css">
  <!-- Bell styling -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>


<main>
  <section class="hero">
    <div class="hero-content">
      <h1>Welcome to the Job Board</h1>
      <p>Find your dream job today</p>
      <form action="" method="GET" class="search-form">
        <input type="text" name="location" placeholder="Location">
        <input type="text" name="position" placeholder="Position">
        <button type="submit">Search</button>
      </form>
    </div>
  </section>

  <section class="featured-jobs">
    <h2>Featured Jobs</h2>
    <div class="job-listings">
      <?php
        if ($result && isset($result['results']) && !empty($result['results'])) {
            // Generate HTML markup for each job posting
            foreach ($result['results'] as $job) {
              
              //var_dump($job["company"]);
              $jobTitle = htmlspecialchars($job['title']);
                $jobDescription = htmlspecialchars($job['description']);
                $jobApplyURL = htmlspecialchars($job["redirect_url"]);
                $jobMaxPay = isset($job["salary_max"]) ? $job["salary_max"] : "0.00";
                $jobMinPay = isset($job["salary_min"]) ? $job["salary_min"] : "0.00";
                $jobCompany = isset($job["company"]["display_name"]) ?$job["company"]["display_name"]: "Name not found.";

                // Output job posting HTML markup
                echo "<div class='job-posting'>
                        <h3>{$jobTitle}</h3>
                        <div>
                        <p>Pay: R{$jobMinPay} - R{$jobMaxPay}</p>
                        <p>Company: {$jobCompany}</p>
                        </div>
                        <p>{$jobDescription}</p>
                        <a href='{$jobApplyURL}' class='apply-button' target='_blank'>Apply</a>
                    </div>";
            }
            } else {
              // Print debug information
            echo "<p>No job listings found.</p>";
            if (!$result) {
                echo "<p>No response from the API.</p>";
            } elseif (!isset($result['results'])) {
                echo "<p>'results' key is missing in the API response.</p>";
            } elseif (empty($result['results'])) {
                echo "<p>Empty job listings array.</p>";
            } else {
                echo "<p>Unknown issue with job listings.</p>";
            }
          }
      ?>

    </div>
  </section>
</main>

</body>
</html>

<?php
  include("./config/footer.php");

?>