<?php

if ($_POST == NULL) {
    $previousurl = htmlspecialchars($_SERVER['HTTP_REFERER']);
    if ($previousurl !== "add.php") {
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
    $dbDate = new MysqlData();
    $db = new myPDO("mysql:host=$dbDate->DatabaseServer;dbname=$dbDate->DatabaseName", $dbDate->DatabaseUsername, $dbDate->DatabasePassword);
    $previousurl = htmlspecialchars($_SERVER['HTTP_REFERER']);

//INSERIMENTO ACQUARI
    if ($_POST['NameAcquarium'] != "") {
        $acquariumInsert = array(
            "Name" => $_POST['NameAcquarium'],
            "Height" => $_POST['Altezza'],
            "Width" => $_POST['Larghezza'],
            "Depth" => $_POST['Profondita'],
            "Liters" => $_POST['Litri'],
            "idUser" => 1
        );
        $db->insert("Acquarium", $acquariumInsert);
        echo '<script>';
        echo " document.location.href = '" . $previousurl . "'";
        echo '</script>';
    }
//INSERIMENTO PESCI
    if ($_POST['NameFish'] != "") {
        $fishInsert = array(
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
        $db->insert("Fish", $fishInsert);
        echo '<script>';
        echo " document.location.href = '" . $previousurl . "'";
        echo '</script>';
    }
}
