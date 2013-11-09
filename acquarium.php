<?php
include_once 'header.php';
?>

<div class="container"> 

    <?php
    $acquariumShowResult = $db->select("Acquarium");
    if ($acquariumShowResult == NULL) {
        echo 'Nessun Acquario Configurato <br> AGGIUNGINE UNO!';
    } else {
        echo '<div class="row"><div class="col-md-4">ID</div><div class="col-md-8">Nome</div></div>';
        foreach ($acquariumShowResult as $acquariumRow) {
            echo '<div class="row">';
            echo '<div class="col-md-4">' . $acquariumRow['idAcquario'] . '</div>' . '<div class="col-md-8">' . $acquariumRow['Name'] . '</div>';
            echo '</div>';
        }
    }
    ?>

    <div class="row">
        <form class="form-horizontal" role="form" action="add.php" method="POST" >
            <input type=”hidden” name=”Acquarium” value=”isAcquarium”>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Nome Acquario</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="NameAcquarium" name="NameAcquarium" placeholder="Nome Acquario">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Altezza</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Altezza"  name="Altezza"placeholder="Altezza">
                </div>

                <label  class="col-sm-2 control-label">Larghezza</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Larghezza"  name="Larghezza" placeholder="Larghezza">
                </div>

                <label  class="col-sm-2 control-label">Profondità</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Profondita" name="Profondita" placeholder="Profondità">
                </div>

                <label  class="col-sm-2 control-label">Litri</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Litri" name ="Litri"placeholder="Litri">
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Inserisci</button>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>

<?php include_once 'footer.php'; ?>