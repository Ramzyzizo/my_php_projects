<?php
#empty => true
function checkEmpty($value){
    if(empty($value)){
        return true;
    }
    return false;
}
#True email => false
function validemail($email){
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }
    return false;
}
#check len <=min => false
function checkless($value,$min){
    if (strlen(trim($value))<= $min){
        return false;
    }
    return true;
}
?>