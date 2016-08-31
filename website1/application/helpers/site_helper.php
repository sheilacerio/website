<?php
/**
 * Created by PhpStorm.
 * User: dhamez
 * Date: 8/30/16
 * Time: 12:57 AM
 */
function issetor(&$variable, $placeholder = ''){
    if(isset($variable)){
        return $variable;
    } else {
        return $placeholder;
    }
}
