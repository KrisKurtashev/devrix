<?php
require_once('../../../../../wp-config.php');

if (isset($_POST["submit"]))
{

    $jobTitle = $_POST['jobTitle'];
    $jobDesc = $_POST['jobDesc'];
    $jobCompany = $_POST['jobCompany'];
    $jobLocation = $_POST['jobLocation'];
    $jobPosition = $_POST['jobPosition'];
    $jobPublishDate = $_POST['jobPublishDate'];
    $jobSalary = $_POST['jobSalary'];
    $jobStatus = (!empty($_POST['status'])) ? $_POST['status'] : 'submitted';
    $userId = get_current_user_id();
    $offerId = $_GET['offerId'];




    $jobSubmit = new JobSubmitContr($jobTitle, $jobDesc, $jobCompany, $jobLocation, $jobPosition, $jobPublishDate, $jobSalary, $userId, $jobStatus);

    if (isset($_POST['status'])){
        $test = $jobSubmit->FetchJobOffer();
    } else {
        $test = $jobSubmit->SubmitJobOffer();
    }


    //Return to front page
    header("Location: http://".  $_SERVER['HTTP_HOST'] ."/main_page?error=noProblem");
}