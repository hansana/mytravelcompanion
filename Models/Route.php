<?php

class route
{
    public $user_id;
    public $city1Lat;
    public $city1Lng;
    public $city2Lat;
    public $city2Lng;
    public $from;
    public $to;
    public $id_repeat;
    public $start_time;
    public $ridekind;
    public $description;

    public function __construct($user_id,$city1Lat,$city1Lng,$city2Lat,$city2Lng,$from,$to,$id_repeat,$start_time,$ridekind,$description){     
        
        $this->user_id = $user_id;
        $this->city1Lat = $city1Lat;
        $this->city2Lat = $city2Lat;
        $this->from = $from;
        $this->city1Lng = $city1Lng;
        $this->city2Lng = $city2Lng;
        $this->to = $to;
        $this->id_repeat = $id_repeat;
        $this->start_time = $start_time;
        $this->ridekind = $ridekind;
        $this->description = $description;
    }
    public function getuser_id() {
        return $this->user_id;
    }
    
    public function setuser_id($user_id) {
        $this->user_id = $user_id;
    }
    
    public function getcity1Lat() {
        return $this->city1Lat;
    }
    
    public function setcity1Lat($city1Lat) {
        $this->city1Lat= $city1Lat;
    }
    
    public function getcity1Lng() {
        return $this->city1Lng;
    }
    
    public function setcity1Lng($city1Lng) {
        $this->city1Lng= $city1Lng;
    }
    public function getcity2Lat() {
        return $this->city2Lat;
    }
    
    public function setcity2Lat($city2Lat) {
        $this->city2Lat= $city2Lat;
    }
    
    public function getcity2Lng() {
        return $this->city2Lng;
    }
    
    public function setcity2Lng($city2Lng) {
        $this->city2Lng= $city2Lng;
    }    
    
    public function getfrom() {
        return $this->from;
    }
    
    public function setfrom($from) {
        $this->from= $from;
    } 
    
    public function getto() {
        return $this->to;
    }
    
    public function setto($to) {
        $this->to= $to;
    }    
    
    public function getid_repeat() {
        return $this->id_repeat;
    }
    
    public function setid_repeat($id_repeat) {
        $this->id_repeat= $id_repeat;
    }
    
    public function getstart_time() {
        return $this->start_time;
    }
    
    public function setstart_time($start_time) {
        $this->start_time= $start_time;
    }
    
    public function getridekind() {
        return $this->ridekind;
    }
    
    public function setridekind($ridekind) {
        $this->ridekind= $ridekind;
    }
    
    public function getdescription() {
        return $this->description;
    }
    
    public function setdescription($description) {
        $this->description= $description;
    }    
    
}