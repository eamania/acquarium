<?php

if ($_POST == NULL) {
    $previousurl = htmlspecialchars($_SERVER['HTTP_REFERER']);
    if ($previousurl !== "delete.php") {
        echo '<script>';
        echo " document.location.href = 'index.php'";
        echo '</script>';
    } else {
        echo '<script>';
        echo " document.location.href = '" . $previousurl . "'";
        echo '</script>';
    }
} else {
    require_once 'class/autoloader.php';
    $previousurl = htmlspecialchars($_SERVER['HTTP_REFERER']);
    $dbDate = new MysqlData();
    $db = new myPDO("mysql:host=$dbDate->DatabaseServer;dbname=$dbDate->DatabaseName", $dbDate->DatabaseUsername, $dbDate->DatabasePassword);


//ELIMINAZIONE ACQUARI

    if ($_POST['idFish'] != "") {
        $idAcquario = $_POST['idAcquario'];
        $bind = array(
            ":idAcquario" => $idAcquario
        );
        $db->delete("Acquarium", "idAcquario = :idAcquario", $bind);
        echo '<script>';
        echo " document.location.href = '" . $previousurl . "'";
        echo '</script>';
    }


//ELIMINAZIONE PESCI

    if ($_POST['idFish'] != "") {
        $idFish = $_POST['idFish'];
        $bind = array(
            ":idFish" => $idFish
        );
        $db->delete("Fish", "idFish = :idFish", $bind);
        echo '<script>';
        echo " document.location.href = '" . $previousurl . "'";
        echo '</script>';
    }
}