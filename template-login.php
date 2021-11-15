<?php
/**
 * Template Name: Login Page
 */


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

<body>

<div class="section-forms">
    <?php wp_login_form(); ?>


</div>

</body>
</html>
