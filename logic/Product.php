<?php
class Product{
    protected $emri;
    protected $cmimi;
    protected $foto;
    
    public function __construct($emri, $cmimi, $foto){
        $this->emri = $emri;
        $this->cmimi = $cmimi;
        $this->foto= $foto;
    }

    public function getEmri(){
        return $this->emri;
    }
    public function getCmimi(){
        return $this->cmimi;
    }
    public function getFoto(){
        return $this->foto;
    }
}