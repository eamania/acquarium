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
    <div class="row">
        <form class="form-horizontal" role="form" action="add.php" method="POST">
            <input type=”hidden” name=”Fish” value=”isFish”>
            <div class="form-group">
<!--                GENERAL-->
                <div class="col-sm-6"> 
                    <h3>General</h3>
                    <label for="NameFish" class="col-sm-4 control-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="NameFish" name="NameFish" placeholder="Name">
                    </div>
                    <label for="ScientificName" class="col-sm-4 control-label">Scientific Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="ScientificName" name="ScientificName" placeholder="Scientific Name">
                    </div>
                    <label for="Family" class="col-sm-4 control-label">Family</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Family" name="Family" placeholder="Family">
                    </div>
                    <label for="Location" class="col-sm-4 control-label">Location</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Location" name="Location" placeholder="Location">
                    </div>
                </div>
<!--                TEMPERAMENT-->
                <div class="form-group">
                    <div class="col-sm-6"> 
                        <h3>Temperament</h3>
                        <label for="Temperament" class="col-sm-4 control-label">Temperament</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="Temperament" name="Temperament">
                                <option>Aggressive</option>
                                <option>Semi Aggressive</option>
                                <option>Slightly Aggressive</option>
                                <option>Friendly</option>
                                <option>Very Friendly</option>
                            </select>                        
                        </div>
                        <label for="TemperamentDetails" class="col-sm-4 control-label">Temperament Details</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" rows="7" id="TemperamentDetails" name="TemperamentDetails" placeholder="Temperament Details"></textarea>
                        </div>
                    </div>
                </div>



  <button type="submit" class="btn btn-default">AGGIUNGI</button>

        </form>
    </div>


</div>
<?php include_once 'footer.php'; ?>
