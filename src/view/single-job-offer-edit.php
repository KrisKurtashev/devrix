<?php

?>

<form id="<?php echo 'editJobOfferId-' . $job['id']; ?>" action="<?php echo '/wp-content/themes/twentytwentyone-child/includes/job/jobsubmit.inc.php?offerId=' . $job['id'] ?>" method="post" >
    <div class="form-block">
        <div class="form-row">
            <label for="jobTitle">
                Offer Title
            </label>
            <input type="text" id="jobTitle" name="jobTitle" placeholder="Offer Title" value="<?php echo $job['title']; ?>" required>
        </div>

        <div class="form-row">
            <label for="jobDesc">
                Description
            </label>
            <input type="text" id="jobDesc" name="jobDesc" placeholder="Description" value=" <?php echo $job['description']; ?>" >
        </div>

        <div class="form-row">
            <label for="jobCompany">
                Company name
            </label>
            <input type="text" id="jobCompany" name="jobCompany" placeholder="Company name" value=" <?php echo $job['company_name']; ?>" >
        </div>

        <div class="form-row">
            <label for="jobLocation">
                Job Location
            </label>
            <input type="text" id="jobLocation" name="jobLocation" placeholder="Job location"  value=" <?php echo $job['job_location']; ?>">
        </div>

        <div class="form-row">
            <label for="jobPosition">
                Job position
            </label>
            <input type="text" id="jobPosition" name="jobPosition" placeholder="Job position" value=" <?php echo $job['job_position']; ?>">
        </div>

        <div class="form-row">
            <label for="jobPublishDate">
                Offer publish date
            </label>
            <input type="date" id="jobPublishDate" name="jobPublishDate" placeholder="offer publish date" value="<?php echo date("Y-m-d", strtotime($job['publish_date'])); ?>">
        </div>

        <div class="form-row">
            <label for="jobSalary">
                Salary
            </label>
            <input type="number" id="jobSalary" name="jobSalary" placeholder="Salary" value="<?php echo $job['job_salary']; ?>" >
        </div>

        <div class="form-row">
            <label for="status">
                Status
            </label>

            <select name="status" id="status" form="<?php echo 'editJobOfferId-' . $job['id']; ?>">
                <option <?php echo $result =($job['status'] === 'submitted')? 'selected': ''; ?> value="submitted">Submitted</option>
                <option  <?php echo $result =($job['status'] === 'approved')? 'selected': ''; ?> value="approved">Approved</option>
                <option <?php echo $result =($job['status'] === 'rejected')? 'selected': ''; ?> value="rejected">Rejected</option>
            </select>
        </div>
    </div>

    <div class="form-block">
        <div class="clearfix">
            <button type="submit" name="submit" class="signupbtn">Submit offer</button>
        </div>
    </div>
</form>
