<?php

require_once 'class/autoloader.php';
$dbDate = new MysqlData();
$db = new myPDO("mysql:host=$dbDate->DatabaseServer;dbname=$dbDate->DatabaseName", $dbDate->DatabaseUsername, $dbDate->DatabasePassword);

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
    }


//INSERIMENTO PESCI

    if ($_POST['NameFish'] != "") {
        $fishInsert = array(
            "Name" => $_POST['NameFish'],
            "ScientificName" => $_POST['ScientificName'],
            "Family" => $_POST['Family'],
            "Location" => $_POST['Location'],
            "Temperament" => $_POST['Temperament'],
            "TemperamentDetails" => $_POST['TemperamentDetails']
        );
        $db->insert("Fish", $fishInsert);
    }
    
