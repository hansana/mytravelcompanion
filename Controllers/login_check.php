<?php
/**
 * Created by PhpStorm.
 * User: Hansana
 * Date: 13-Jun-16
 * Time: 1:24 PM
 */

if(session_id() == ''){
    session_start();
}


//var_dump($_REQUEST);
if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
    $username = $_REQUEST['username'];   //assigning empId and password to the variables name as $empId and $password.
    $password = $_REQUEST['password'];

//    $connect = mysqli_connect("localhost", "", "", "travelcompanion") or die("can't connect to the database!");   //connect to the database of sierra_project_details

    $connect = new mysqli("localhost", "hansana", "", "travelcompanion");

// Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    $quary = mysqli_query($connect, "SELECT * FROM user WHERE username ='$username'");
    $numrows = mysqli_num_rows($quary);     // this has no meaning in future. because there is no more than one person who has one username.
    mysqli_close($connect);

    if ($numrows != 0) {
        while ($row = mysqli_fetch_assoc($quary)) {
            $dbusername = $row['username'];
            $dbpassword = $row['password'];
            $userId = $row['id'];
            //$dblevel_id = $row['level_id'];
        }

        if ($username == $dbusername && password_verify($password,$dbpassword)) {
//            if ($dbuserState=='active'){
            $_SESSION['username']=$dbusername;
            $_SESSION['id']=$userId;
            //$_SESSION['level_id']=$dblevel_id;
            if ($_SESSION['url'] != ''){
                Header( "Location:" . $_SESSION['url'] . "");
            }else{
                Header( 'Location: ../views/userHome.php' );
            }
            //Header( 'Location: userHome.php' );   //if username and password correct, then heading to the member home page.
//            } else {
//                Header( 'Location: login.php?attempt=6' ); //redirect to the login page with a message indicated with attempt=1
//            }
        }
        else{
            Header( 'Location: ../views/login.php?attempt=1' );     //password incorrect.
        }
    } else {
        Header( 'Location: ../views/login.php?attempt=2' );  //user doesn't exist.
    }
} else {
    Header('Location: ../views/login.php?attempt=3');   //password and user name fields are empty.
}



