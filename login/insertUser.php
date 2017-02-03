<?php
session_start();

if(isset($_SESSION['usr_id'])) {
    header("Location: index.php");
}

include_once 'dbconnect.php';
