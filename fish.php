<?php
include_once 'header.php';
$fishShowResult = $db->select("Fish");
?>
<div class="container"> 

    <?php
    if ($fishShowResult == NULL) {
        echo 'Nessun Pesce Configurato <br> AGGIUNGINE UNO!';
    } else {
        echo '<div class="row"><div class="col-md-4">Name</div><div class="col-md-8">Species</div></div>';
        foreach ($fishShowResult as $fishRow) {
            echo '<div class="row">';
            echo '<div class="col-md-4">' . $fishRow['Name'] . '</div>' . '<div class="col-md-8">' . $fishRow['Family'] . '</div>';
            echo '</div>';
        }
    }
    ?>
</div>

<?php $modalAddFish = new modalCreation(); ?>

<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#<?php echo "addFish" ?>">
    Inserisci un Pesce</button>

<?php include_once 'footer.php'; ?>

<!-- Modal -->
<?php
$formAddFish = new formCreation();
$formAddFish->action("add.php", "POST", "form-horizontal");
$modalAddFish->headerModal("addFish", "Aggiungi i Pesci", "Pesci Label");
?>  
<div class="row">
    <?php
    $formAddFish->formGroupOpen('', 'col-sm-12', 'General');
    
    $formAddFish->textbox('col-sm-4 control-label', 'Name', 'form-control', 'NameFish', 'Name', '');
    
    $formAddFish->textbox('col-sm-4 control-label', 'Scientific', 'form-control', 'ScientificName', 'Scientific Name', '');
    
    $formAddFish->textbox('col-sm-4 control-label', 'Family', 'form-control', 'Family', 'Family', '');
    
    $formAddFish->textbox('col-sm-4 control-label', 'Location', 'form-control', 'Location', 'Location', '');
    
    $formAddFish->formGroupClose();
    
    $formAddFish->formGroupOpen('', 'col-sm-12', 'Temperament');
    
    $formAddFish->select("col-sm-4 control-label", "Temperament", "Temperament", "form-control");
    $formAddFish->option("Aggressive", "Aggressive", '');
    $formAddFish->option("Semi Aggressive", "Semi Aggressive", '');
    $formAddFish->option("Slightly Aggressive", "Slightly Aggressive", '');
    $formAddFish->option("Friendly", "Friendly", '');
    $formAddFish->option("Very Friendly", "Very Friendly", '');
    $formAddFish->selectClose();    
    $formAddFish->textarea('col-sm-4 control-label', 'Temperament Details', 'form-control', 'TemperamentDetails', 7, 'Temperament', '');
    
    $formAddFish->formGroupClose();
    ?>
</div>
<?php $modalAddFish->footerModal("Aggiungi"); ?>  
</form>