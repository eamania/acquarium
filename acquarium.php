<?php include_once 'header.php'; ?>
<div class="row">
    <div class="col-md-4">ID</div>
    <div class="col-md-8">Nome</div>
</div>
<?php
$pdostat = $db->prepare("SELECT * FROM Acquarium");
//$pdostat->bindValue(':id', 1, PDO::PARAM_INT);
$pdostat->execute();
$results = $pdostat->fetchAll();
foreach ($results as $row) {
    echo '<div class="row">';
    echo '<div class="col-md-4">' . $row['idAcquario'] . '</div>' . '<div class="col-md-8">' . $row['Name'] . '</div>';
    echo '</div>';
}
?><div class="container"> 

    <div class="row">
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label  class="col-sm-2 control-label">Nome Acquario</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="NameAcquarium" placeholder="Nome Acquario">
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-2 control-label">Altezza</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Altezza" placeholder="Altezza">
                </div>

                <label  class="col-sm-2 control-label">Larghezza</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Larghezza" placeholder="Larghezza">
                </div>

                <label  class="col-sm-2 control-label">Profondità</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Profondita" placeholder="Profondità">
                </div>

                <label  class="col-sm-2 control-label">Litri</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Litri" placeholder="Litri">
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