<?php

class formCreation {

    //creazione form
    function action($formAction, $formMethod, $formClass) {
        $action = '<form class="' . $formClass . '" role="form" action="' . $formAction . '" method="' . $formMethod . '" >';
        echo $action;
    }

    function actionClose() {

        echo '</form>';
    }

    //gruppi
    function formGroupOpen($formGroupClass, $formGroupColClass, $formGroupTitle) {

        $formGroup = '<div class="form-group ' . $formGroupClass . ' ">';
        $formGroup .='<div class="' . $formGroupColClass . '"> ';
        $formGroup .='<h3>' . $formGroupTitle . '</h3>';
        echo $formGroup;
    }

    function formGroupClose() {
        $formGroup = '</div>';
        $formGroup .= '</div>';
        echo $formGroup;
    }

    //campi di testo e numerici

    function textbox($labelText, $textNameID, $textPlaceholder = "", $textType = "text", $labelColNumber = "4", $textColNumber = "8", $texthtml = "", $textClass = "", $textValue = "") {

        $text = '<label for="' . $textNameID . '" class="col-sm-' . $labelColNumber . ' control-label">' . $labelText . '</label>';
        $text .= '<div class="col-sm-' . $textColNumber . '">';
        $text .= '<input type="' . $textType . '" name="' . $textNameID . '" id="' . $textNameID . '" class="form-control ' . $textClass . '" placeholder="' . $textPlaceholder . '" value="' . $textValue . '"' . $texthtml . '  />';
        $text .= '</div>';
        echo $text;
    }

    function textarea($labelText, $textareaNameID, $textareaPlaceholder = "", $textareaRows = "4", $labelColNumber = "4", $textareaColNumber = "8", $textareahtml = "", $textareaClass = "", $textareaValue = "") {
        $textarea = '<label for="' . $textareaNameID . '" class="col-sm-' . $labelColNumber . ' control-label">' . $labelText . '</label>';
        $textarea .= '<div class="col-sm-' . $textareaColNumber . '">';
        $textarea .= '<textarea name="' . $textareaNameID . '" id="' . $textareaNameID . '" class="form-control ' . $textareaClass . '" rows="' . $textareaRows . '"  placeholder="' . $textareaPlaceholder . '" ' . $textareahtml . ' >' . $textareaValue . '</textarea>';
        $textarea .= '</div>';
        echo $textarea;
    }
    
    //select e option
    function select($labelText, $selectNameID, $labelColNumber="4", $selectColNumber="8", $selectClass="") {

        $select = '<label for="' . $selectNameID . '" class="col-sm-' . $labelColNumber . ' control-label">' . $labelText . '</label>';
        $select .= '<div class="col-sm-' . $selectColNumber . '">';
        $select .= '<select name="' . $selectNameID . '" id="' . $selectNameID . '" class="form-control ' . $selectClass . '">';
        echo $select;
    }

    function selectClose() {
        $selectClose = '</select>';
        $selectClose .= '</div>';
        echo $selectClose;
    }

    function option($optionValue, $optionText, $optionSelected) {
        $option = '<option value="' . $optionValue . '"selected="' . $optionSelected . '">' . $optionText . '</option>';
        echo $option;
    }

}

//class formCreation2 {
//    /*     * *****************************************************************************
//      Input, textarea, fieldset and menu attributes - Do not edit below this line!
//     * ***************************************************************************** */
//
//    /** general form variables */
//    var $_dyna_form_action;      // action='' attribute
//    var $_dyna_form_img;  // submit button image option
//    var $_dyna_form_label;  // adds a label to an input - enter label text or leave empty for none	
//    var $_dyna_form_method;      // method='' attribute post or get
//    var $_dyna_form_name;        // name='' attribute
//    var $_dyna_form_readonly;    // sets input or textarea to readonly - enter readonly or leave empty for writable
//    var $_dyna_form_target;      // form target ie: target="_blank" leave empty for "_self"
//    var $_dyna_form_tooltip;     // title='' tooltip
//    var $_dyna_form_value;       // value='' attribute
//
//    /** fieldset variables */
//    var $_dyna_form_legend;      // legend for fieldset - leave empty for no legend header
//
//    /** input variables */
//    var $_dyna_form_checked;     // checkbox or radio checked='' attribute - enter checked or leave empty for not checked
//    var $_dyna_form_max;         // input maxlength='' attribute
//    var $_dyna_form_size;        // input size='' attribute
//    var $_dyna_form_url;         // image path for button/submit type="image" attribute
//
//    /** select variables */
//    var $_dyna_form_option;      // option text
//    var $_dyna_form_selected;    // pre-selected option - enter 'selected' or leave empty for not selected
//
//    /** textarea variables */
//    var $_dyna_form_cols;   // textarea width
//    var $_dyna_form_default;  // textarea default text
//    var $_dyna_form_rows;        // textarea height
//    var $_dyna_form_wrap;        // wordwrap type ie: virtual, hard, soft - enter wrap type or leave empty for none
//
//    /** input, textarea, fieldset and menu CSS class id */
//    var $_dyna_form_classID;     // CSS class id - enter ID or leave empty to inherit page style
//
//    /*     * ****************************************************************************
//      Generate form functions
//     * **************************************************************************** */
//
//    /** Form object attributes 
//
//      Usage: echo $form->action('action=','method=post or get','target=');
//
//      Example form: echo $form->action('somepage.php','post','_empty');
//
//      Note: You must manually close the form in your HTML
//
//     */
//    function action($_dyna_form_action, $_dyna_form_method, $_dyna_form_target) {
//        if (trim(strtolower($_dyna_form_method)) == 'post') {
//            $_method = 'post';
//        } else {
//            $_method = 'get';
//        }
//
//        if (trim($_dyna_form_target == '')) {
//            $_target = '';
//        } else {
//            $_target = ' target="' . $_dyna_form_target . '"';
//        }
//
//        /** generate form tag and attributes */
//        $_action = '<form action="' . $_dyna_form_action . '" method="' . $_method . '" enctype="multipart/form-data"' . $_target . '>';
//
//        return $_action;
//    }
//
//    /** Text type input object attributes
//
//      Usage: echo $form->text('name=','value=',size,maxlength,'readonly','CSS classID','tooltip','label');
//
//      Example text input: echo $form->text('username','',20,'','','','','Username: ');
//      Example text input: echo $form->text('date',date('m-d-y'),20,'',readonly,'border','','');
//
//     */
//    function text($_dyna_form_name, $_dyna_form_value, $_dyna_form_size, $_dyna_form_max, $_dyna_form_readonly, $_dyna_form_classID, $_dyna_form_tooltip, $_dyna_form_label, $_dyna_form_labelClassID) {
//        if (trim($_dyna_form_size) != '' && is_numeric($_dyna_form_size)) {
//            $_size = ' size="' . trim($_dyna_form_size) . '"';
//        } else {
//            $_size = '';
//        }
//
//        if (trim($_dyna_form_max) != '' && is_numeric($_dyna_form_max)) {
//            $_max = ' maxlength="' . trim($_dyna_form_max) . '"';
//        } else {
//            $_max = '';
//        }
//
//        if (trim(strtolower($_dyna_form_readonly)) == 'readonly') {
//            $_readonly = ' readonly="readonly"';
//        } else {
//            $_readonly = '';
//        }
//
//        if (trim($_dyna_form_classID) == '') {
//            $_classID = '';
//        } else {
//            $_classID = ' class="' . $_dyna_form_classID . '"';
//        }
//
//        if (trim($_dyna_form_tooltip) == '') {
//            $_tip = '';
//        } else {
//            $_tip = ' title="' . $_dyna_form_tooltip . '"';
//        }
//
//        /** generate text input tag and attributes */
//        if (trim($_dyna_form_label) == '') {
//            $_text = '<input type="text" name="' . $_dyna_form_name . '" value="' . $_dyna_form_value . '"' . $_size . $_max . $_readonly . $_classID . $_tip . ' />';
//
//            return $_text;
//        } else {
//            $_text = '<label for="' . $_dyna_form_name . '"' . $_dyna_form_labelClassID . '>' . $_dyna_form_label . '</label>';
//            $_text .= '<input type="text" name="' . $_dyna_form_name . '" id="' . $_dyna_form_name . '" value="' . $_dyna_form_value . '"' . $_size . $_max . $_readonly . $_classID . $_tip . ' />';
//
//            return $_text;
//        }
//    }
//
//    /** Button/Submit/Reset type input object attributes
//
//      Usage: echo $form->button('name=','value=','button image path - see note','url to go to','CSS classID','tooltip');
//      Usage: echo $form->submit('name=','value=','button image path - see note','CSS classID','tooltip');
//      Usage: echo $form->reset('value=','CSS classID','tooltip');
//
//      Example button input: echo $form->button('get_file','../images/my_image.gif','http://somesite.com/','','');
//      Example submit input: echo $form->submit('','Submit Form','','','Click here to send info!');
//      Example submit input: echo $form->submit('','','../images/sub_button.gif','','');
//      Example reset input: echo $form->reset('Reset Form','','');
//
//      Note: leave $_dyna_form_img(button image path) empty to default to type= button or submit
//      Note: leave $_dyna_form_tooltip empty to default to $_dyna_form_value (value=)
//
//     */
//    function button($_dyna_form_name, $_dyna_form_value, $_dyna_form_img, $_dyna_form_url, $_dyna_form_classID, $_dyna_form_tooltip) {
//        if (trim($_dyna_form_img) != '') {
//            $type = ' type="image" src="' . $_dyna_form_img . '" border="0"';
//        } else {
//            $type = ' type="button"';
//        }
//
//        if (trim($_dyna_form_classID) == '') {
//            $_classID = '';
//        } else {
//            $_classID = ' class="' . $_dyna_form_classID . '"';
//        }
//
//        if (trim($_dyna_form_tooltip) == '') {
//            $_tip = '';
//        } else {
//            $_tip = ' title="' . $_dyna_form_tooltip . '"';
//        }
//
//        /** generate button input tag and attributes */
//        $_button = '<form>';
//        $_button .= '<input' . $type . ' value="' . $_dyna_form_value . '" onclick=window.location.href="' . $_dyna_form_url . '"' . $_classID . $_tip . ' />';
//        $_button .= '</form>';
//
//        return $_button;
//    }
//
//    function submit($_dyna_form_name, $_dyna_form_value, $_dyna_form_img, $_dyna_form_classID, $_dyna_form_tooltip) {
//        if (trim($_dyna_form_img) != '') {
//            $_type = ' type="image" src="' . $_dyna_form_img . '" border="0"';
//        } else {
//            $_type = ' type="submit"';
//        }
//
//        if (trim($_dyna_form_classID) == '') {
//            $_classID = '';
//        } else {
//            $_classID = ' class="' . $_dyna_form_classID . '"';
//        }
//
//        if (trim($_dyna_form_tooltip) == '') {
//            $_tip = '';
//        } else {
//            $_tip = ' title="' . $_dyna_form_tooltip . '"';
//        }
//
//        /** generate submit input tag and attributes */
//        $_submit = '<input' . $_type . ' name="' . $_dyna_form_name . '" value="' . $_dyna_form_value . '"' . $_classID . $_tip . ' />';
//
//        return $_submit;
//    }
//
//    function reset($_dyna_form_value, $_dyna_form_classID, $_dyna_form_tooltip) {
//        if (trim($_dyna_form_classID) == '') {
//            $_classID = '';
//        } else {
//            $_classID = ' class="' . $_dyna_form_classID . '"';
//        }
//
//        if (trim($_dyna_form_tooltip) == '') {
//            $_tip = '';
//        } else {
//            $_tip = ' title="' . $_dyna_form_tooltip . '"';
//        }
//
//        /** generate reset input tag and attributes */
//        $_reset = '<input type="reset" value="' . $_dyna_form_value . '"' . $_classID . $_tip . ' />';
//
//        return $_reset;
//    }
//
//    /** Hidden type input object attributes
//
//      Usage: echo $form->hidden('name=','value=');
//
//      Example hidden input: echo $form->hidden('func','get_id');
//
//     */
//    function hidden($_dyna_form_name, $_dyna_form_value) {
//        /** generate hidden input tag and attributes */
//        $_hidden = '<input type="hidden" name="' . $_dyna_form_name . '" value="' . $_dyna_form_value . '" />';
//
//        return $_hidden;
//    }
//
//    /** Checkbox type input object attributes
//
//      Usage: echo $form->checkbox('name=','value=','checked','CSS classID','tooltip','label');
//
//      Example checkbox input: echo $form->checkbox('send_info','yes','checked','','','');
//
//     */
//    function checkbox($_dyna_form_name, $_dyna_form_value, $_dyna_form_checked, $_dyna_form_classID, $_dyna_form_tooltip, $_dyna_form_label) {
//        if (trim(strtolower($_dyna_form_checked)) == 'checked') {
//            $_checked = ' checked="checked"';
//        } else {
//            $_checked = '';
//        }
//
//        if (trim($_dyna_form_classID) == '') {
//            $_classID = '';
//        } else {
//            $_classID = ' class="' . $_dyna_form_classID . '"';
//        }
//
//        if (trim($_dyna_form_tooltip) == '') {
//            $_tip = '';
//        } else {
//            $_tip = ' title="' . $_dyna_form_tooltip . '"';
//        }
//
//        /** generate checkbox input tag and attributes */
//        if (trim($_dyna_form_label == '')) {
//            $_checkbox = '<input type="checkbox" name="' . $_dyna_form_name . '" value="' . $_dyna_form_value . '"' . $_checked . $_classID . $_tip . ' />';
//
//            return $_checkbox;
//        } else {
//            $_checkbox = '<label for="' . $_dyna_form_name . '"' . $_classID . '>' . $_dyna_form_label . '</label>';
//            $_checkbox .= '<input type="checkbox" name="' . $_dyna_form_name . '" id="' . $_dyna_form_name . '" value="' . $_dyna_form_value . '"' . $_checked . $_classID . $_tip . ' />';
//
//            return $_checkbox;
//        }
//    }
//
//    /** Radio type input object attributes
//
//      Usage: echo $form->radio('name=','value=','checked','CSS classID','tooltip','label');
//
//      Example radio input: echo $form->radio('send_info','yes','checked','','','');
//
//     */
//    function radio($_dyna_form_name, $_dyna_form_value, $_dyna_form_checked, $_dyna_form_classID, $_dyna_form_tooltip, $_dyna_form_label) {
//        if (trim(strtolower($_dyna_form_checked)) == 'checked') {
//            $_checked = ' checked="checked"';
//        } else {
//            $_checked = '';
//        }
//
//        if (trim($_dyna_form_classID == '')) {
//            $_classID = '';
//        } else {
//            $_classID = ' class="' . $_dyna_form_classID . '"';
//        }
//
//        if (trim($_dyna_form_tooltip == '')) {
//            $_tip = '';
//        } else {
//            $_tip = ' title="' . $_dyna_form_tooltip . '"';
//        }
//
//        /** generate radio input tag and attributes */
//        if (trim($_dyna_form_label == '')) {
//            $_radio = '<input type="radio" name="' . $_dyna_form_name . '" value="' . $_dyna_form_value . '"' . $_checked . $_classID . $_tip . ' />';
//
//            return $_radio;
//        } else {
//            $_radio = '<label for="' . $_dyna_form_name . '"' . $_classID . '>' . $_dyna_form_label . '</label>';
//            $_radio .= '<input type="radio" name="' . $_dyna_form_name . '" id="' . $_dyna_form_name . '" value="' . $_dyna_form_value . '"' . $_checked . $_classID . $_tip . ' />';
//
//            return $_radio;
//        }
//    }
//
//    /** File type input object attributes
//
//      Usage: echo $form->file('name=',size,'CSS classID','tooltip','label');
//
//      Example file input: echo $form->file('file','','','','Upload File: ');
//
//     */
//    function file($_dyna_form_name, $_dyna_form_size, $_dyna_form_classID, $_dyna_form_tooltip, $_dyna_form_label) {
//        if (trim($_dyna_form_size) != '' && is_numeric($_dyna_form_size)) {
//            $_size = ' size="' . $_dyna_form_size . '"';
//        } else {
//            $_size = '';
//        }
//
//        if (trim($_dyna_form_classID == '')) {
//            $_classID = '';
//        } else {
//            $_classID = ' class="' . $_dyna_form_classID . '"';
//        }
//
//        if (trim($_dyna_form_tooltip == '')) {
//            $_tip = '';
//        } else {
//            $_tip = ' title="' . $_dyna_form_tooltip . '"';
//        }
//
//        /** generate file input tag and attributes */
//        if (trim($_dyna_form_label == '')) {
//            $_file = '<input type="file" name="' . $_dyna_form_name . '"' . $_size . $_classID . $_tip . ' />';
//
//            return $_file;
//        } else {
//            $_file = '<label for="' . $_dyna_form_name . '"' . $_classID . '>' . $_dyna_form_label . '</label>';
//            $_file .= '<input type="file" name="' . $_dyna_form_name . '" id="' . $_dyna_form_name . '"' . $_size . $_classID . $_tip . ' />';
//
//            return $_file;
//        }
//    }
//
//    /** Textarea object attributes
//
//      Usage: echo $form->textarea('name=','default text',num cols,num rows,'wrap type','readonly','CSS classID','tooltip','label');
//
//      Example textarea: echo $form->textarea('guest_input','Enter Comments Here',60,20,'virtual','','guestBox','','');
//      Example textarea: echo $form->textarea('stats',$_dyna_form_POST['stats'],60,20,'virtual','readonly','guestBox','Site Stats','Stats: ');
//
//     */
//    function textarea($_dyna_form_name, $_dyna_form_default, $_dyna_form_cols, $_dyna_form_rows, $_dyna_form_wrap, $_dyna_form_readonly, $_dyna_form_classID, $_dyna_form_tooltip, $_dyna_form_label) {
//        if (trim($_dyna_form_cols) != '' && is_numeric($_dyna_form_cols)) {
//            $_cols = ' cols="' . trim($_dyna_form_cols) . '"';
//        } else {
//            $_cols = '';
//        }
//
//        if (trim($_dyna_form_rows) != '' && is_numeric($_dyna_form_rows)) {
//            $_rows = ' rows="' . trim($_dyna_form_rows) . '"';
//        } else {
//            $_rows = '';
//        }
//
//        if (trim(strtolower($_dyna_form_readonly)) == 'readonly') {
//            $_readonly = ' readonly="readonly"';
//        } else {
//            $_readonly = '';
//        }
//
//        if (trim($_dyna_form_wrap == '')) {
//            $_wrap = '';
//        } else {
//            $_wrap = ' wrap="' . $_dyna_form_wrap . '"';
//        }
//
//        if (trim($_dyna_form_classID == '')) {
//            $_classID = '';
//        } else {
//            $_classID = ' class="' . $_dyna_form_classID . '"';
//        }
//
//        if (trim($_dyna_form_tooltip == '')) {
//            $_tip = '';
//        } else {
//            $_tip = ' title="' . $_dyna_form_tooltip . '"';
//        }
//
//        /** generate textarea tag and attributes */
//        if (trim($_dyna_form_label == '')) {
//            $_textarea = '<textarea name="' . $_dyna_form_name . '"' . $_cols . $_rows . $_readonly . $_wrap . $_classID . $_tip . '>' . $_dyna_form_default . '</textarea>';
//
//            return $_textarea;
//        } else {
//            $_textarea = '<label for="' . $_dyna_form_name . '"' . $_classID . '>' . $_dyna_form_label . '</label>';
//            $_textarea .= '<textarea name="' . $_dyna_form_name . '" id="' . $_dyna_form_name . '"' . $_cols . $_rows . $_readonly . $_wrap . $_classID . $_tip . '>' . $_dyna_form_default . '</textarea>';
//
//            return $_textarea;
//        }
//    }
//
//    /** Select and Option object attributes
//
//      Usage: echo $form->select('name=','CSS classID','label');
//      Usage: echo $form->option('value=','option text','selected');
//
//      Example select: echo $form->select('file_type','selectBox','Image Types: ');
//      Example option: echo $form->option('gif','GIF Image','');
//
//      Note: You must manually close the select menu in your HTML
//
//     */
//    function select($_dyna_form_name, $_dyna_form_classID, $_dyna_form_label) {
//        if (trim($_dyna_form_classID == '')) {
//            $_classID = '';
//        } else {
//            $_classID = ' class="' . $_dyna_form_classID . '"';
//        }
//
//        /** generate select tag and attributes */
//        if (trim($_dyna_form_label == '')) {
//            $_select = '<select name="' . $_dyna_form_name . '"' . $_classID . '>';
//
//            return $_select;
//        } else {
//            $_select = '<label for="' . $_dyna_form_name . '"' . $_classID . '>' . $_dyna_form_label . '</label>';
//            $_select .= '<select name="' . $_dyna_form_name . '" id="' . $_dyna_form_name . '"' . $_classID . '>';
//
//            return $_select;
//        }
//    }
//
//    function option($_dyna_form_value, $_dyna_form_option, $_dyna_form_selected) {
//        if (trim(strtolower($_dyna_form_selected)) == 'selected') {
//            $_selected = ' selected="selected"';
//        } else {
//            $_selected = '';
//        }
//
//        /** generate option tag and attributes */
//        $_option = '<option value="' . $_dyna_form_value . '"' . $_selected . '>' . $_dyna_form_option . '</option>';
//
//        return $_option;
//    }
//
//    /** Fieldset/Legend object attributes
//
//      Usage: echo $form->fieldset('legend title','CSS classID');
//
//      Example select: echo $form->fieldset('User Input','');
//
//      Note: Leave legend title empty for no heading
//
//      Note: You must manually close the fieldset in your HTML
//
//     */
//    function fieldset($_dyna_form_legend, $_dyna_form_classID) {
//        if (trim($_dyna_form_classID == '')) {
//            $_classID = '';
//        } else {
//            $_classID = ' class="' . $_dyna_form_classID . '"';
//        }
//
//        /** generate fieldset/legend tag and attributes */
//        if (trim($_dyna_form_legend == '')) {
//            $_fieldset = '<fieldset' . $_classID . '>';
//
//            return $_fieldset;
//        } else {
//            $_fieldset = '<fieldset' . $_classID . '>';
//            $_fieldset .= '<legend>' . $_dyna_form_legend . '</legend>';
//
//            return $_fieldset;
//        }
//    }
//
//}
?>
