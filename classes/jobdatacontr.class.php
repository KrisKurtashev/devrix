<?php
class JobDataContr extends Job
{
    private $offerId;

    public function __construct($offerId = 1)
    {
        $this->offerId = $offerId;
    }

    public function GetJobOffers(): array
    {
        return $this->selectAllJobOffers();
    }

    public function GetSingleJobOffer(): array
    {
        if ($this->isInputNum() == false) {
            //echo "Not number!";
            header("Location: ../main_page.php?error=wrongNumData");
            exit();
        }

        return $this->selectSingleJobOffer($this->offerId);
    }


    private function isInputNum(): bool
    {
        $result = true;

        if (!is_numeric($this->offerId))
        {
            $result = false;
        }

        return $result;
    }

}