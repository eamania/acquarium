<?php

//if ($_POST == NULL) {
//    $previousurl = htmlspecialchars($_SERVER['HTTP_REFERER']);
//    if ($previousurl !== "delete.php") {
//        echo '<script>';
//        echo " document.location.href = 'index.php'";
//        echo '</script>';
//    } else {
//        echo '<script>';
//        echo " document.location.href = '" . $previousurl . "'";
//        echo '</script>';
//    }
//} else {
//    require_once 'class/autoloader.php';
//    $previousurl = htmlspecialchars($_SERVER['HTTP_REFERER']);
//    $dbDate = new MysqlData();
//    $db = new myPDO("mysql:host=$dbDate->DatabaseServer;dbname=$dbDate->DatabaseName", $dbDate->DatabaseUsername, $dbDate->DatabasePassword);
//
//
////ELIMINAZIONE ACQUARI
//
//    if ($_POST['idFish'] != "") {
//        $idAcquario = $_POST['idAcquario'];
//        $bind = array(
//            ":idAcquario" => $idAcquario
//        );
//        $db->delete("Acquarium", "idAcquario = :idAcquario", $bind);
//        echo '<script>';
//        echo " document.location.href = '" . $previousurl . "'";
//        echo '</script>';
//    }


//UPDATE PESCI

    if ($_POST['idFish'] != "") {
        $fishUpdate = array(
            "Name" => $_POST['NameFish'],
            "ScientificName" => $_POST['ScientificName'],
            "Family" => $_POST['Family'],
            "Location" => $_POST['Location'],
            "Temperament" => $_POST['Temperament'],
            "TemperamentDetails" => $_POST['TemperamentDetails'],
            "BeginnerLike" => $_POST['BeginnerLike'],
            "WaterArea" => $_POST['WaterArea'],
            "Diet" => $_POST['Diet'],
            "PH_Min_Fish" => $_POST['MinPH'],
            "PH_Max_Fish" => $_POST['MaxPH'],
            "GH_Min_Fish" => $_POST['MinGH'],
            "GH_Max_Fish" => $_POST['MaxGH'],
            "KH_Min_Fish" => $_POST['MinKH'],
            "KH_Max_Fish" => $_POST['MaxKH'],
            "AdultSizeMin" => $_POST['AdultSize'],
            "TankLitersMin" => $_POST['TankLitersMin'],
            "TemperatureMIn" => $_POST['TemperatureMin'],
            "AdultSizeMax" => $_POST['TemperatureMax']
        );

        $idFish = $_POST['idFish'];
        $bind = array(
            ":idFish" => $idFish
        );
        $db->update("mytable", $fishUpdate, "idFish = :fname", $bind);
     $idFish = $_POST['idFish'];
}