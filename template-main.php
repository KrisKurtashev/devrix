<?php
/**
 * Template Name: Main Page
 */


if (isset($_POST["submit"]))
{
    var_dump($_SERVER['DOCUMENT_ROOT']);
    //Grabing the data
    $jobTitle = $_POST['jobTitle'];
    $jobDesc = $_POST['jobDesc'];
    $jobCompany = $_POST['jobCompany'];
    $jobLocation = $_POST['jobLocation'];
    $jobPosition = $_POST['jobPosition'];
    $jobPublishDate = $_POST['jobPublishDate'];
    $jobSalary = $_POST['jobSalary'];

    $jobSubmit = new JobSubmitContr($jobTitle, $jobDesc, $jobCompany, $jobLocation, $jobPosition, $jobPublishDate, $jobSalary);
}

get_header();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="site-wrapper">
    <header class="site-header">
        <h1 class="site-title"><a href="#">Job Offers</a></h1>
        
        <div class="nav">
            <ul>
                <li>
                    <a href="http://devrix.dev.org/main_page/">Main</a>
                    <a href="http://devrix.dev.org/admin_job_offers_page/">Admin Job submits</a>
                </li>
            </ul>
        </div>
    </header>

    <div class="section-form">
        <form id="frm-jobSubmmit" action="<?php echo '/wp-content/themes/twentytwentyone-child/includes/job/jobsubmit.inc.php'?>" method="post" >
            <div class="form-block">
                <div class="form-row">
                    <label for="jobTitle">
                        Offer Title
                    </label>
                    <input type="text" id="jobTitle" name="jobTitle" placeholder="Offer Title" required>
                </div>

                <div class="form-row">
                    <label for="jobDesc">
                        Description
                    </label>
                    <input type="text" id="jobDesc" name="jobDesc" placeholder="Description" required>
                </div>

                <div class="form-row">
                    <label for="jobCompany">
                        Company name
                    </label>
                    <input type="text" id="jobCompany" name="jobCompany" placeholder="Company name" required>
                </div>

                <div class="form-row">
                    <label for="jobLocation">
                        Job Location
                    </label>
                    <input type="text" id="jobLocation" name="jobLocation" placeholder="Job location" required>
                </div>

                <div class="form-row">
                    <label for="jobPosition">
                        Job position
                    </label>
                    <input type="text" id="jobPosition" name="jobPosition" placeholder="Job position" required>
                </div>

                <div class="form-row">
                    <label for="jobPublishDate">
                        Offer publish date
                    </label>
                    <input type="date" id="jobPublishDate" name="jobPublishDate" placeholder="offer publish date" required>
                </div>

                <div class="form-row">
                    <label for="jobSalary">
                        Salary
                    </label>
                    <input type="number" id="jobSalary" name="jobSalary" placeholder="Salary" required>
                </div>
            </div>

            <div class="clearfix">
                <button type="submit" name="submit" class="signupbtn">Submit offer</button>
            </div>
        </form>
    </div>

    <ul class="jobs-listing">
        <li class="job-card">
            <div class="job-primary">
                <h2 class="job-title"><a href="#">Front End Developer</a></h2>
                <div class="job-meta">
                    <a class="meta-company" href="#">Company Awesome Ltd.</a>
                    <span class="meta-date">Posted 14 days ago</span>
                </div>
                <div class="job-details">
                    <span class="job-location">The Hague (The Netherlands)</span>
                    <span class="job-type">Contract staff</span>
                </div>
            </div>
            <div class="job-logo">
                <div class="job-logo-box">
                    <img src="https://i.imgur.com/ZbILm3F.png" alt="">
                </div>
            </div>
        </li>

        <li class="job-card">
            <div class="job-primary">
                <h2 class="job-title"><a href="#">Front End Developer</a></h2>
                <div class="job-meta">
                    <a class="meta-company" href="#">Company Awesome Ltd.</a>
                    <span class="meta-date">Posted 14 days ago</span>
                </div>
                <div class="job-details">
                    <span class="job-location">The Hague (The Netherlands)</span>
                    <span class="job-type">Contract staff</span>
                </div>
            </div>
            <div class="job-logo">
                <div class="job-logo-box">
                    <img src="https://i.imgur.com/ZbILm3F.png" alt="">
                </div>
            </div>
        </li>
    </ul>

    <footer class="site-footer">
        <p>Copyright 2020 | Developer links:
            <a href="/edits.html">Edits</a>,
            <a href="/index.html">Home</a>,
            <a href="/single.html">Single</a>
        </p>
    </footer>
</div>

</body>
</html>
