<?php
function searchJobs($location = null, $position = null) {
    // Set your Adzuna API credentials
    $appID = '65c99bd0';
    $appKey = '2ce74a23b6da3f1ddb0e6a43f4b8b9fb';

    // Build the request URL for Adzuna API
    // api version
    $requestURL = "https://api.adzuna.com/v1/api/jobs/za/search/1";
    //api id
    $requestURL .= "?app_id=" . urlencode($appID);

    $requestURL .= "&app_key=" . urlencode($appKey);
    $requestURL .= "&results_per_page=30";

    if ($location !== null) {
        $requestURL .= "&where=" . urlencode($location);
    }

    if ($position !== null) {
        $requestURL .= "&what=" . urlencode($position);
    }

    // API request and retrieve response
    $response = file_get_contents($requestURL);

    if ($response === false) {
        throw new Exception("Failed to retrieve job postings from Adzuna API.");
    }

    // Decode the JSON response
    $result = json_decode($response, true);

    return $result;
}

try {
    // Set the search parameters
    // $jobLocation = $_GET["location"];
    // $jobPosition = $_GET["position"];
    

    // // Retrieve job postings from Adzuna API
    // //$adzunaData = searchJobs($jobLocation, $jobPosition);

    // if (!isset($adzunaData['results'])) {
    //     throw new Exception("No job postings found.");
    // }

    // $jobPostings = $adzunaData['results'];

    // Generate HTML markup for each job posting
    // foreach ($jobPostings as $jobPosting) {
    //     $jobTitle = $jobPosting['title'];
    //     $jobDescription = $jobPosting['description'];
    //     $jobLocal = $jobPosting['location']['display_name'];

    //     // Output job posting HTML markup
    //     echo "<div class='job-posting'>
    //             <h3>{$jobTitle}</h3>
    //             <p>{$jobDescription}</p>
    //             <p>{$jobLocal}</p>
    //           </div>";
    // }
} catch (Exception $e) {
    //echo "Error: " . $e->getMessage();
}
?>