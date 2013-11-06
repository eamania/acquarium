<?php
require_once 'class/autoloader.php';
$dbDate = new MysqlData();
$db = new myPDO("mysql:host=$dbDate->DatabaseServer;dbname=$dbDate->DatabaseName", $dbDate->DatabaseUsername, $dbDate->DatabasePassword);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acquarium</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
<nav class="navbar navbar-default " role="navigation">
    <span class="label label-danger">Acquarium Simple
</span>
    <button type="button" class="btn btn-default navbar-btn right">Sign in</button>
</nav>