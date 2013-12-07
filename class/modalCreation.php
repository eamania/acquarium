<?php
/**
 * Description of modalCreation
 *
 * Classe per la creazione di un datamodel utilizzando bootstrap
 * 
 * @author Andrea Vignando
 */    

class modalCreation {

    //HEADER DEL MODAL
    function headerModal($modalID, $modalTitle, $modalLabel) {
        echo '<div class="modal fade" id="' . $modalID . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >'; 
        echo '<div class="modal-dialog">';
        echo '<div class="modal-content">';
        echo '<div class="modal-header">';
        echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
        echo '<h4 class="modal-title" id="' . $modalLabel . '">' . $modalTitle . '</h4>';
        echo '</div>';
        echo '<div class="modal-body">';
        
    }

    
    //FOOTER DEL MODAL
    function footerModal($modalType, $modalButtonID) {
        echo '<div class="modal-footer">';
        echo '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
        echo '<input type="submit" id="'.$modalButtonID.'" class="btn btn-primary" value="'. $modalType .'" />';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

}
