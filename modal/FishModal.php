

    <?php
if (!isset($_REQUEST['idFish'])) {
      

}

else {
$idFish = $_GET['idFish'];
echo $idFish;
$fishResult = $db->select("Fish", "idFish = $idFish" );
foreach ($fishResult as $fishRow) {}
}
?>
<?php  
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
$formFish->textbox('Name', 'NameFish', 'Name', $fishRow['Name']);
$formFish->textbox('Scientific', 'ScientificName', 'Scientific Name', $fishRow['ScientificName']);
$formFish->textbox('Family', 'Family', 'Family', $fishRow['Family']);
$formFish->textbox('Location', 'Location', 'Location', $fishRow['Location']);
$formFish->select('Beginner Like', 'BeginnerLike');
$formFish->option('MaxExpirience', '5 - MaxExpirience', '');
$formFish->option('Expirience', '4 - Expirience', '');
$formFish->option('Medium', '3 - Medium', '');
$formFish->option('Beginner', '2 - Beginner', '');
$formFish->option('MaxBeginner', '1 - MaxBeginner', '');
$formFish->selectClose();
$formFish->textbox('Water Area', 'WaterArea', 'Water Area', $fishRow['WaterArea']);
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
$formFish->textbox('Min PH', 'PH_Min_Fish', 'Min PH', $fishRow['PH_Min_Fish'], 'number', "2", "4", 'step="0.5"');
$formFish->textbox('Max PH', 'PH_Max_Fish', 'Max PH', $fishRow['PH_Max_Fish'], 'number', "2", "4", 'step="0.5"');
$formFish->textbox('Min GH', 'GH_Min_Fish', 'Min GH', $fishRow['GH_Min_Fish'], 'number', "2", "4", 'step="0.5"');
$formFish->textbox('Max GH', 'GH_Max_Fish', 'Max GH', $fishRow['GH_Max_Fish'], 'number', "2", "4", 'step="0.5"');
$formFish->textbox('Min KH', 'KH_Min_Fish', 'Min KH', $fishRow['KH_Min_Fish'], 'number', "2", "4", 'step="0.5"');
$formFish->textbox('Max KH', 'KH_Max_Fish', 'Max KH', $fishRow['KH_Max_Fish'], 'number', "2", "4", 'step="0.5"');

$formFish->formGroupClose();
echo '</div>';
echo '<div class="tab-pane fade" id="Advanced">';
$formFish->formGroupOpen('', 'col-sm-12', 'Advanced');
$formFish->textbox('Size ', 'AdultSizeMin', 'Adult Size', $fishRow['AdultSizeMin'], 'number', "2", "4", 'step="0.1"');
$formFish->textbox('Tank', 'TankLitersMin', 'Tank Liters Min', $fishRow['TankLitersMin'], 'number', "2", "4", 'step="5"');
$formFish->textbox('T. Min', 'TemperatureMIn', 'Temperature Min', $fishRow['TemperatureMIn'], 'number', "2", "4", 'step="0.5"');
$formFish->textbox('T. Max', 'TemperatureMax', 'Temperature Max', $fishRow['TemperatureMax'], 'number', "2", "4", 'step="0.5"');
$formFish->formGroupClose();
echo '</div>';
echo '</div>';
?>  
<div id="risultato"></div>

