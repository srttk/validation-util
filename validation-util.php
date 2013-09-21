<?php
/*
*@Author  : Sarath
*@PAckage : Validation-Util
*@Created : 26-Aug-2013
* Using reqular expression
*/


/*
* is_email()
* @param  :Email id (string)
* @return : Return true if valid mail id
*/
function is_email($email){
    return preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i', $email);
  }
  
  
/*
* Validate Alphanumeric Characters
*/
  
function isAlpha($string){
    return ctype_alnum($string);
}



?>
