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
* Validate date (mm/dd/yyyy) format
*/

 function valid_date_mm_dd_yyyy($date=NULL){
	if(preg_match("~^\d{1,2}([/.-])\d{1,2}\\1\d{4}$~", $date)==1){
		list($m,$d,$y)=explode("/",$date);
		return checkdate($m,$d,$y);
	}
	return FALSE;
}


?>
