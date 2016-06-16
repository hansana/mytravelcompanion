<?php 
if (isset($_REQUEST['first_name']) && 
        isset($_REQUEST['last_name']) && 
        isset($_REQUEST['gender']) && 
        isset($_REQUEST['address']) &&
        isset($_REQUEST['nic']) && 
        isset($_REQUEST['email']) && 
        isset($_REQUEST['mobile']) &&
        isset($_REQUEST['cityLat']) && 
        isset($_REQUEST['cityLng'])        
        
    ){
    
    $firstName = $_REQUEST['first_name'];   
    $lastName = $_REQUEST['last_name'];
    $gender = $_REQUEST['gender'];   
    $adress = $_REQUEST['address'];
    $nic = $_REQUEST['nic'];   
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];    
    $cityLat = $_REQUEST['cityLat'];
    $cityLng = $_REQUEST['cityLng'];

}
else{
    echo "Form submission failed!";
}