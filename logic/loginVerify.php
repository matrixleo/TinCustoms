<?php
class LoginLogic
{
    private $username;
    private $passwordi;

    public function __construct($username, $passwordi)
    {
        $this->username = $username;
        $this->passwordi = $passwordi;
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->passwordi)) {
           // echo '1';
             header("Location:../home.php");
        } else if ($this->usernameAndpasswordiCorrect($this->username, $this->passwordi)) {
            //echo '2';
             header('Location:../home.php?login=success');
        } else {
           // echo '3';
             header("Location:../home.php");
        }
    }

    private function variablesNotDefinedWell($username, $passwordi)
    {
        if (empty($username) || empty($passwordi)) {
            return true;
        }
        return false;
    }

    private function usernameAndpasswordiCorrect($username, $passwordi)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0){
            return false;
        } 
        else if ($passwordi == $user['passwordi']) {
            if($user['role']==1){
                $obj = new Admin($user['emri'], $user['mbiemri'], $user['username'], $user['passwordi'], $user['role']);
                $obj->setSession();
            }
            else{
                $obj = new User($user['emri'], $user['mbiemri'], $user['username'], $user['passwordi'],$user['role']);
                $obj->setSession();
            }
            return true;
        }else{
            return false;
        }

        
    }
}

class RegisterLogic
{
    private $emri;
    private $mbiemri;
    private $username;
    private $passwordi; 
    public function __construct($emri, $mbiemri, $username, $passwordi)
    {
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->username = $username;
        $this->passwordi = $passwordi;
    }

    public function insertData()
    {
        $user = new User($this->emri, $this->mbiemri, $this->username,$this->passwordi,0);

        $mapper = new UserMapper();
        $mapper->insertUser($user);

        
        header("Location:../home.php");
    }
}
