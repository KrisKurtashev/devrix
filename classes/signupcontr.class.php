<?php

class SignupContr extends Signup {
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdrepeat, $email) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }

    public function signupUser() {
        if ($this->emptyInput() == false) {
            //echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        if ($this->invalidUid() == false) {
            //echo "Invalid Username!";
            header("location: ../index.php?error=username");
            exit();
        }

        if ($this->invalidEmail() == false) {
            //echo "Invalid Email!";
            header("location: ../index.php?error=email");
            exit();
        }

        if ($this->pwdMatch() == false) {
            //echo "Passwords don`t match!";
            header("location: ../index.php?error=passwordmatch");
            exit();
        }

        if ($this->uidTakenCheck() == false) {
            //echo "Username or Email taken!!";
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput(): bool
    {
        $result = true;

        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email) ) {
            $result = false;
        }

        return $result;
    }


    private function invalidUid(): bool
    {
        $result = true;

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        }

        return $result;
    }

    private function invalidEmail(): bool
    {
        $result = true;

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }

        return $result;
    }

    private function pwdMatch(): bool
    {
        $result = true;

        if ($this->pwd !== $this->pwdrepeat) {
            $result = false;
        }

        return $result;
    }

    private function uidTakenCheck(): bool
    {
        $result = true;

        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        }

        return $result;
    }
}