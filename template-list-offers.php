<?php
/**
 * Template Name: List-offers
 */

if (get_current_user_id() == 0) {
    header("Location: http://".  $_SERVER['HTTP_HOST'] ."/login_page?error=nopermissions");
}

get_header();

$jobData = new JobDataContr();

$listJobs = $jobData->GetJobOffers();


?>

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

<?php

echo view('view.section-admin-job-offers', [
    'listJobs' => $listJobs
]);

?>