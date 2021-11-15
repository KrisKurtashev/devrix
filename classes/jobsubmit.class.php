<?php


Class JobSubmit extends  Dbh {

    protected function setJobOffer($jobTitle, $jobDesc, $jobCompany, $jobLocation, $jobPosition, $jobPublishDate, $jobSalary, $status, $last_edited, $user_id)
    {
        $stmt = $this->connect()->prepare('INSERT INTO dev_list_jobs (title, description, company_name, job_location, job_position, publish_date, job_salary, status, last_edited, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');

        if (!$stmt->execute( array($jobTitle, $jobDesc, $jobCompany, $jobLocation, $jobPosition, $jobPublishDate, $jobSalary, $status, $last_edited, $user_id) )) {
            $stmt = null;
            header("Location: http://".  $_SERVER['HTTP_HOST'] ."/main_page?error=stmtfailedsetdata");
            exit();
        }

        $stmt = null;
    }

    protected function selectAllJobOffers()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM dev_list_jobs;');

        if (!$stmt->execute()) {
            $stmt = null;
            header("Location: http://".  $_SERVER['HTTP_HOST'] ."/main_page?error=stmtfailedsetdata");
            exit();
        }

        $stmt = null;

    }

    protected function UpdateJobOffer($jobTitle, $jobDesc, $jobCompany, $jobLocation, $jobPosition, $jobPublishDate, $jobSalary, $status, $lastEdit, $userId, $offerId)
    {
        $stmt = $this->connect()->prepare('UPDATE dev_list_jobs SET title = ?, description = ?, company_name = ?, job_location = ?, job_position = ?, publish_date = ?, job_salary = ?, status = ?, last_edited = ?, user_id = ? WHERE id = ?;');

        if (!$stmt->execute( array($jobTitle, $jobDesc, $jobCompany, $jobLocation, $jobPosition, $jobPublishDate, $jobSalary, $status, $lastEdit, $userId, $offerId) )) {

            $stmt = null;
            
            header("location:../main_page?error=stmtfailedsetdata");
            exit();
        }

        $stmt = null;

    }

}