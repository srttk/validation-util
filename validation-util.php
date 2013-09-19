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

/*
* Generate random string
*/
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}


?>
