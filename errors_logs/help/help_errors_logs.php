<?php


// CALL IN CONTROLLER

require_once($_SERVER['DOCUMENT_ROOT'] . '/StiopaNet/developer/plugins/errors_logs/errors_logs.php');

/* 

EXEMPLE TO CALL THE FUNCTION "errorLog" WITH FOUR ARGUMENTS :

ARGUMENT 1- TEXT TO DESCRIBE ERROR,
ARGUMENT 2- FILE ADRESSE ($_SERVER["PHP_SELF"]),
ARGUMENT 3- ROUTER CONTROLLER
ARGUMENT 4- LINE WHERE IS THE ERROR

*/

errorLog('[PHP][MODEL] Problem with condition function selectInBDD for NAV STICK', $_SERVER["PHP_SELF"], $_GET['router'], __LINE__);