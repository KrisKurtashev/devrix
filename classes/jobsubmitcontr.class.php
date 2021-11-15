<?php

class JobSubmitContr extends JobSubmit
{
    private $jobTitle;
    private $jobDesc;
    private $jobCompany;
    private $jobLocation;
    private $jobPosition;
    private $jobPublishDate;
    private $jobSalary;
    private $userId;
    private $status;
    private $offerId;
    private $lastEdit;

    public function __construct($jobTitle, $jobDesc, $jobCompany, $jobLocation, $jobPosition, $jobPublishDate, $jobSalary, $userId = 0, $status = 0, $offerId = 1)
    {
        $this->jobTitle = $jobTitle;
        $this->jobDesc = $jobDesc;
        $this->jobCompany = $jobCompany;
        $this->jobLocation = $jobLocation;
        $this->jobPosition = $jobPosition;
        $this->jobPublishDate = $jobPublishDate;
        $this->jobSalary = intval($jobSalary);

        $this->userId = $userId;
        $this->status = $status;
        $this->offerId = $offerId;
        $this->lastEdit = date('d/m/Y H:i:s', time());
    }

    public function SubmitJobOffer() {
        if ($this->emptyInput() == false) {
            //echo "Empty input!";
            header("Location: http://".  $_SERVER['HTTP_HOST'] ."/main_page.php?error=emptyinput");
            exit();
        }


        $this->setJobOffer($this->jobTitle, $this->jobDesc, $this->jobCompany, $this->jobLocation, $this->jobPosition, $this->jobPublishDate, $this->jobSalary, $this->status, $this->lastEdit, $this->userId);
    }

    public function FetchJobOffer() {
        if ($this->emptyInput() == false) {
            //echo "Empty input!";
            header("Location: http://".  $_SERVER['HTTP_HOST'] ."/single_offer_page?offerId=". $this->offerId."error=emptyinput");
            exit();
        }

        $this->UpdateJobOffer($this->jobTitle, $this->jobDesc, $this->jobCompany, $this->jobLocation, $this->jobPosition, $this->jobPublishDate, $this->jobSalary, $this->status, $this->lastEdit, $this->userId, $this->offerId);
    }

    private function emptyInput(): bool
    {
        $result = true;

        if ( empty( $this->jobTitle) || empty( $this->jobDesc) || empty( $this->jobCompany) || empty( $this->jobLocation) || empty( $this->jobPosition) || empty( $this->jobPublishDate) || empty( $this->jobSalary))
        {
            $result = false;
        }

        return $result;
    }


}