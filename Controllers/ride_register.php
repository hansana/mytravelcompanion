<?php

if (isset($_REQUEST['city1Lng']) && 
        isset($_REQUEST['city1Lat']) && 
        isset($_REQUEST['city2Lng']) && 
        isset($_REQUEST['city2Lat']) && 
        isset($_REQUEST['from']) && 
        isset($_REQUEST['to']) && 
        isset($_REQUEST['city1']) && 
        isset($_REQUEST['city2']) &&         
        isset($_REQUEST['id_repeat']) && 
        isset($_REQUEST['start_time']) && 
        isset($_REQUEST['ridekind']) &&
        isset($_REQUEST['description'])
    ){
    
    
    $city1Lat = $_REQUEST['city1Lat'];   
    $city1Lng = $_REQUEST['city1Lng'];
    $city2Lat = $_REQUEST['city2Lat'];   
    $city2Lng = $_REQUEST['city2Lng'];
    $from = $_REQUEST['from'];
    $to = $_REQUEST['to'];
    $city1 = $_REQUEST['city1'];
    $city2 = $_REQUEST['city2'];    
    $id_repeat = $_REQUEST['id_repeat'];
    $start_time = $_REQUEST['start_time'];
    $ridekind = $_REQUEST['ridekind'];
    $description = $_REQUEST['description'];
    
}
else{
    echo "Form submission failed!";
}

//echo $city1Lat;
//echo $city2Lng;
//echo $from;
//echo $to;
//echo $ridekind;

include 'user_checkLogin.php';

$userId=$_SESSION['id'];

if(session_id() == ''){
    session_start();
}


//require ('../models/Route.php');
//include_once('../Controllers/DBAccess/routeDBAccess.php');
//
//$route=new Route($userId,$city1Lat,$city1Lng,$city2Lat,$city2Lng,$from,$to,$id_repeat,$start_time,$ridekind,$description);
//$t=new routeDBAccess();
//$t->addRoute($route);

//if ($t->addRoute($route)){
//    header('Location: ../Views/userHome.php');
//}
//else{
//    header('Location: ../Views/postNewRide.php');
//}

$connect = new mysqli("localhost", "hansana", "", "travelcompanion");

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
////"INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
$stmt="INSERT INTO routes (user_id,start_lat,start_lng,end_lat,end_lng,start_city,end_city,id_repeat,start_time,ridekind,descrition) "
        . "VALUES ($userId,$city1Lat,$city1Lng,$city2Lat,$city2Lng,$city1,$city2,$id_repeat,$start_time,$ridekind,$description)";


//if ($connect->query($stmt)===TRUE){
//    header('Location: ../Views/userHome.php');   
//}
//else{
//    header('Location: ../Views/postNewRide.php');
//}
//mysqli_close($connect);

if ($connect->query($stmt)===TRUE){
    header('Location: ../Views/userHome.php');   
}

 else {
    echo "Error: " . $stmt . "<br>" . $connect->error;
}

