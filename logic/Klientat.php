<?php
class Klientat{
    protected $emri;
    protected $mbiemri;
    protected $username;
    protected $passwordi;
    
    public function __construct($emri, $mbiemri, $username,$passwordi){
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->username= $username;
        $this->passwordi= $passwordi;
    }
    public function getEmri(){
        return $this->emri;
    }
    public function getMbiemri(){
        return $this->mbiemri;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPasswordi(){
        return $this->passwordi;
    }
}