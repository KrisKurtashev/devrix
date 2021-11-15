<?php

/**
 * Include Custom Post Creator.
 */
include('src/custom-post-type.php');
include('src/helpers.php');
include 'includes/autoloader.inc.php';

/**
 * Create custom post type "Campaigns"
 */
// Example
// $campaigns = new CustomPostType('Campaigns', 'Campaign', 'campaigns', ['category']);
$mainPage = new CreatePage('Main page', 'main_page', 'template-main.php');
$singleOfferPage = new CreatePage('Single offer page', 'single_offer_page', 'template-single-job-offer.php');
$listOffersPage = new CreatePage('Admin Job offers page', 'admin_job_offers_page', 'template-list-offers.php');
$LoginPage = new CreatePage('Login page', 'login_page', 'template-login.php');



function motionkata_scripts()
{
    wp_deregister_script('jquery');

    //wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/assets/js/vendor/jquery-3.1.1.min.js');

    //wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style-v-1.1.2.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/master.css');
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/assets/css/styles.css');
}
add_action('wp_enqueue_scripts', 'motionkata_scripts');
