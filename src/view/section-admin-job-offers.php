<?php
?>

<div class="section-job-offers">
    <div class="shell">
        <div class="section-head">
            <h2 class="section-title">
                List Job offers
            </h2>
        </div>

        <div class="section-body">
            <?php
                foreach ( $listJobs as $job)
                {
                    echo view('view.list-job-offers', [
                        'job' => $job
                    ]);

                }
            ?>
        </div>
    </div>
</div>
