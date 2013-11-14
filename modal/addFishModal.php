<?php
$formAddFish = new formCreation();

echo '<ul class="nav nav-tabs" id="addFishTab">';
echo '<li class="active"><a href="#General" data-toggle="tab">General</a></li>';
echo '<li><a href="#Temperament"  data-toggle="tab">Temperament</a></li>';
echo '<li><a href="#Values" data-toggle="tab">Values</a></li>';
echo '<li><a href="#Advanced" data-toggle="tab">Advanced</a></li>';
echo '</ul>';


echo '<div class="tab-content" id="myTab">';
echo '<div class="tab-pane fade in active" id="General">';
$formAddFish->formGroupOpen('', 'col-sm-12', 'General');
$formAddFish->textbox('Name', 'NameFish', 'Name');
$formAddFish->textbox('Scientific', 'ScientificName', 'Scientific Name');
$formAddFish->textbox('Family', 'Family', 'Family');
$formAddFish->textbox('Location', 'Location', 'Location');
$formAddFish->select('Beginner Like', 'BeginnerLike');
$formAddFish->option('MaxExpirience', '5 - MaxExpirience', '');
$formAddFish->option('Expirience', '4 - Expirience', '');
$formAddFish->option('Medium', '3 - Medium', '');
$formAddFish->option('Beginner', '2 - Beginner', '');
$formAddFish->option('MaxBeginner', '1 - MaxBeginner', '');
$formAddFish->selectClose();
$formAddFish->textbox('Water Area', 'WaterArea', 'Water Area');
$formAddFish->textarea("Diet", "Diet", "Diet", "7");

$formAddFish->formGroupClose();
echo '</div>';
echo '<div class="tab-pane fade" id="Temperament">';
$formAddFish->formGroupOpen('', 'col-sm-12', 'Temperament');
$formAddFish->select("Temperament", "Temperament");
$formAddFish->option('Aggressive', '5 - Aggressive', '');
$formAddFish->option('Semi Aggressive', '4 - Semi Aggressive', '');
$formAddFish->option('Slightly Aggressive', '3 - Slightly Aggressive', '');
$formAddFish->option('Friendly', '2 - Friendly', '');
$formAddFish->option('Very Friendly', '1 - Very Friendly', '');
$formAddFish->selectClose();
$formAddFish->textarea("Temperament Details", "TemperamentDetails", "Temperament Details", "7");
$formAddFish->formGroupClose();
echo '</div>';
echo '<div class="tab-pane fade" id="Values">';
$formAddFish->formGroupOpen('', 'col-sm-12', 'Values');
$formAddFish->textbox('Min PH', 'MinPH', 'Min PH', 'number', "2", "4", 'step="0.5"');
$formAddFish->textbox('Max PH', 'MaxPH', 'Max PH', 'number', "2", "4", 'step="0.5"');
$formAddFish->textbox('Min GH', 'MinGH', 'Min GH', 'number', "2", "4", 'step="0.5"');
$formAddFish->textbox('Max GH', 'MaxGH', 'Max GH', 'number', "2", "4", 'step="0.5"');
$formAddFish->textbox('Min KH', 'MinKH', 'Min KH', 'number', "2", "4", 'step="0.5"');
$formAddFish->textbox('Max KH', 'MaxKH', 'Max KH', 'number', "2", "4", 'step="0.5"');

$formAddFish->formGroupClose();
echo '</div>';
echo '<div class="tab-pane fade" id="Advanced">';
$formAddFish->formGroupOpen('', 'col-sm-12', 'Advanced');
$formAddFish->textbox('Size ', 'AdultSize', 'Adult Size', 'number', "2", "4", 'step="0.1"');
$formAddFish->textbox('Tank', 'TankLitersMin', 'Tank Liters Min', 'number', "2", "4", 'step="5"');
$formAddFish->textbox('T. Min', 'TemperatureMin', 'Temperature Min', 'number', "2", "4", 'step="0.5"');
$formAddFish->textbox('T. Max', 'TemperatureMax', 'Temperature Max', 'number', "2", "4", 'step="0.5"');
$formAddFish->formGroupClose();
echo '</div>';
echo '</div>';


?>  