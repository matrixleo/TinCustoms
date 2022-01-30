<?php

abstract class Person
{
    protected $emri;
    protected $mbiemri;
    protected $username;
    protected $passwordi;
    protected $role;

    function __construct($emri, $mbiemri, $username, $passwordi, $role)
    {
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->username = $username;
        $this->passwordi = $passwordi;
        $this->role = $role;
    }

    abstract protected function setSession();
    abstract protected function setCookie();
}
