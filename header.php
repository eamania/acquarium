<?php
require_once 'class/autoloader.php';
$dbDate = new MysqlData();
$db = new myPDO($dbDate::DATABASE_SERVER, $dbDate::DATABASE_USERNAME, $dbDate::DATABASE_PASSWORD, $dbDate::DATABASE_NAME);
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
    <button type="button" class="btn btn-default navbar-btn">Sign in</button>
    <button type="button" class="btn btn-default navbar-btn">Sign in</button>
    <button type="button" class="btn btn-default navbar-btn">Sign in</button>
    <button type="button" class="btn btn-default navbar-btn">Sign in</button>

</nav>