<?php
Class Job extends  Dbh {


    protected function selectAllJobOffers():array
    {
        $stmt = $this->connect()->prepare('SELECT * FROM dev_list_jobs;');


        if (!$stmt->execute()) {
            $stmt = null;
            header("location:../main_page?error=stmtfailedsetdata");
            exit();
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;

        return $result;
    }


    protected function selectSingleJobOffer($id):array
    {
        $stmt = $this->connect()->prepare('SELECT * FROM dev_list_jobs WHERE id = ? ;');


        if (!$stmt->execute(array($id))) {
            $stmt = null;
            header("Location: http://".  $_SERVER['HTTP_HOST'] ."/main_page?error=stmtfailedsetdata");
            exit();
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;

        return $result;
    }
}