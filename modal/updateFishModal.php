<?php
//require_once '../class/autoloader.php';
//$dbDate = new MysqlData();
//$db = new myPDO("mysql:host=$dbDate->DatabaseServer;dbname=$dbDate->DatabaseName", $dbDate->DatabaseUsername, $dbDate->DatabasePassword);
?>
<?php

$idFisha = $_GET['idFish'];
echo $idFisha;
$fishResult = $db->select("Fish", "idFish = $idFisha" );
foreach ($fishResult as $fishRow) {
    $NameFish = $fishRow['Name'];

}
   


$formFish = new formCreation();


echo '<ul class="nav nav-tabs" id="addFishTab">';
echo '<li class="active"><a href="#General" data-toggle="tab">General</a></li>';
echo '<li><a href="#Temperament"  data-toggle="tab">Temperament</a></li>';
echo '<li><a href="#Values" data-toggle="tab">Values</a></li>';
echo '<li><a href="#Advanced" data-toggle="tab">Advanced</a></li>';
echo '</ul>';

echo '<div class="tab-content" id="myTab">';
echo '<div class="tab-pane fade in active" id="General">';
$formFish->formGroupOpen('', 'col-sm-12', 'General');


$formFish->textbox('Name', 'NameFish', 'Name', $NameFish);
$formFish->textbox('Scientific', 'ScientificName', 'Scientific Name');
$formFish->textbox('Family', 'Family', 'Family');
$formFish->textbox('Location', 'Location', 'Location');
$formFish->select('Beginner Like', 'BeginnerLike');
$formFish->option('MaxExpirience', '5 - MaxExpirience', '');
$formFish->option('Expirience', '4 - Expirience', '');
$formFish->option('Medium', '3 - Medium', '');
$formFish->option('Beginner', '2 - Beginner', '');
$formFish->option('MaxBeginner', '1 - MaxBeginner', '');
$formFish->selectClose();
$formFish->textbox('Water Area', 'WaterArea', 'Water Area');
$formFish->textarea("Diet", "Diet", "Diet", "7");

$formFish->formGroupClose();
echo '</div>';
echo '<div class="tab-pane fade" id="Temperament">';
$formFish->formGroupOpen('', 'col-sm-12', 'Temperament');
$formFish->select("Temperament", "Temperament");
$formFish->option('Aggressive', '5 - Aggressive', '');
$formFish->option('Semi Aggressive', '4 - Semi Aggressive', '');
$formFish->option('Slightly Aggressive', '3 - Slightly Aggressive', '');
$formFish->option('Friendly', '2 - Friendly', '');
$formFish->option('Very Friendly', '1 - Very Friendly', '');
$formFish->selectClose();
$formFish->textarea("Temperament Details", "TemperamentDetails", "Temperament Details", "7");
$formFish->formGroupClose();
echo '</div>';
echo '<div class="tab-pane fade" id="Values">';
$formFish->formGroupOpen('', 'col-sm-12', 'Values');
$formFish->textbox('Min PH', 'MinPH', 'Min PH', 'number', "2", "4", 'step="0.5"');
$formFish->textbox('Max PH', 'MaxPH', 'Max PH', 'number', "2", "4", 'step="0.5"');
$formFish->textbox('Min GH', 'MinGH', 'Min GH', 'number', "2", "4", 'step="0.5"');
$formFish->textbox('Max GH', 'MaxGH', 'Max GH', 'number', "2", "4", 'step="0.5"');
$formFish->textbox('Min KH', 'MinKH', 'Min KH', 'number', "2", "4", 'step="0.5"');
$formFish->textbox('Max KH', 'MaxKH', 'Max KH', 'number', "2", "4", 'step="0.5"');

$formFish->formGroupClose();
echo '</div>';
echo '<div class="tab-pane fade" id="Advanced">';
$formFish->formGroupOpen('', 'col-sm-12', 'Advanced');
$formFish->textbox('Size ', 'AdultSize', 'Adult Size', 'number', "2", "4", 'step="0.1"');
$formFish->textbox('Tank', 'TankLitersMin', 'Tank Liters Min', 'number', "2", "4", 'step="5"');
$formFish->textbox('T. Min', 'TemperatureMin', 'Temperature Min', 'number', "2", "4", 'step="0.5"');
$formFish->textbox('T. Max', 'TemperatureMax', 'Temperature Max', 'number', "2", "4", 'step="0.5"');
$formFish->formGroupClose();
echo '</div>';
echo '</div>';


?>  