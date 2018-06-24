<?php

// cred.php contains username and password
// saved as $db_user_cred and $db_password_cred, respectively, and not included in remote repository
include_once "cred.php";
$db_server = "localhost"; // using localhost for a while, for development
$db_user = $db_user_cred; // taken from cred.php
$db_password = $db_password_cred; // taken from cred.php
$db_name = "ynote";

$db_handle = mysqli_connect($db_server, $db_user, $db_password, $db_name);

if (!$db_handle) {
    die("Connection failed: " . mysqli_connect_error());
}