<?php
/**
 * Created by PhpStorm.
 * User: Hansana
 * Date: 19-Jan-16
 * Time: 9:39 AM
 */

if(session_id() == ''){
    session_start();
}

if ($_SESSION['username'])
{
}
else{
    die (Header( 'Location: ../views/login.php' ));
}
