<?php
include_once 'header.php';
$fishShowResult = $db->select("Fish");
?>	
<div class="container"> 

    <?php
    if ($fishShowResult == NULL) {
        echo 'Nessun Pesce Configurato <br> AGGIUNGINE UNO!';
    } else {
        $formEditFish = new formCreation();
        echo '<div class="row"><div class="col-md-4">Name</div></div>';
        foreach ($fishShowResult as $fishRow) {
            echo '<div class="row">';
            $idFish = $fishRow['idFish'];
            $myPage = $_SERVER['PHP_SELF'];
            $formEditFish->action("#", "POST", "form-horizontal", "");
//            $formEditFish->textbox('Id', 'idFish', 'idFish', $idFish, 'hidden');
            echo '<div class="col-md-4"><a href="" title="" class="" type="submit" data-toggle="modal" data-target="#editFish">' . $fishRow['Name'] . '</a> </div>';
            echo '<input type="submit" />';
            $formEditFish->actionClose();
            echo '</div>';
        }
    }
    ?>
</div>
        <p id="risultato"></p>

<?php include_once 'footer.php'; ?>
<?php
if (!isset($_REQUEST['idFish'])) {
    echo '<a class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#addFish">
    Inserisci un Pesce</a>';
    //Modal add fish -->
    $modalFish = new modalCreation();
    $formFish = new formCreation();
    $formFish->action("add.php", "POST", "form-horizontal", "add-elemento");
    $modalFish->headerModal("addFish", "Aggiungi i Pesci", "Pesci Label");
    include_once 'modal/FishModal.php';
    $modalFish->footerModal("Aggiungi", "bottone");
    $formFish->actionClose();
 
} else {
    echo '<a class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#editFish">
    Modifica  un Pesce</a>';
    //Modal edit fish --> 
    $modalFish = new modalCreation();
    $formFish = new formCreation();
    $formFish->action("update.php", "POST", "form-horizontal", "");
    $modalFish->headerModal("editFish", "Modifica i Pesci", "Pesci Label");
    include_once 'modal/FishModal.php';
    $modalFish->footerModal("Salva");
    $formFish->actionClose();
}
?>  
