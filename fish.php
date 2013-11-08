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
            echo '<div class="col-md-4">' . $fishRow['Name'] . '</div>' . '<div class="col-md-8">' . $fishRow['Species'] . '</div>';
            echo '</div>';
        }
    }
    
    ?>





</div>
<?php include_once 'footer.php'; ?>
