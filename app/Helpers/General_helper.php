<?php 

function show_validation_error($field, $errors){

    if(empty($errors)){
        return '';
    }
    if(key_exists($field, $errors)){
        return '<div class="text-danger">'. $errors[$field] .'</div>';
    }
}


?>