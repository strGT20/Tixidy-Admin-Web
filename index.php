<?php
session_start();
include 'header.php';
include 'db-connect.php';

if (!isset($_SESSION['id_user'])) {
    header("Location: login.php");
    exit();
}else{
    header("Location: home.php");
    exit;
}