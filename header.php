<?php

    session_start();
    include "../../global/conn.php";
    include "../include/session-checker.php";

    $siteidentity = "SELECT * FROM siteidentity";
    $query_run = mysqli_query($db,$siteidentity);
    $row = mysqli_fetch_array($query_run);

    $id = $_SESSION['adminid'] ;
    $userconfig = "SELECT * FROM user WHERE userid = $id";
    $query_run = mysqli_query($db,$userconfig);
    $row1 = mysqli_fetch_array($query_run);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?php echo $row['websitename']; ?> - <?php echo $row['websitedesc']; ?></title>
    <link rel="icon" type="image/x-icon" <?php echo "href='../../siteidentity/favicon/".$row['websitefavicon']."'" ?>/>
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
        <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <style class="dark-theme">
        #chart-2 path {
            stroke: #0e1726;
        }
    </style>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    

</head>


  