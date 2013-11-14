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


<a class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#addFish">
    Inserisci un Pesce</a>


<?php include_once 'footer.php'; ?>
   

<?php
//Modal add fish -->
$modalAddFish = new modalCreation();
$formAddFish = new formCreation();
$formAddFish->action("add.php", "POST", "form-horizontal");
$modalAddFish->headerModal("addFish", "Aggiungi i Pesci", "Pesci Label");
include_once 'modal/addFishModal.php';
$modalAddFish->footerModal("Aggiungi");
$formAddFish->actionClose();
?>  
