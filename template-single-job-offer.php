<?php

/**
 * Template Name: Single offer Page
 */

$usedID = get_current_user_id();
var_dump($usedID);
if (get_current_user_id() == 0) {
    header("Location: http://".  $_SERVER['HTTP_HOST'] ."/login_page?error=nopermissions");
}

if (isset($_GET['offerID']))
{
    $offerID = $_GET['offerID'];

    $jobClass = new JobDataContr($offerID);
    $arrayOffer = $jobClass->GetSingleJobOffer();

}

get_header();
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

<div class="section-offer">
    <div class="shell">
        <h2>Single job offer</h2>

        <?php
            echo view('view.single-job-offer-edit', [
                'job' => $arrayOffer[0]
            ]);
        ?>
    </div>
</div>
