<?php
ob_start();

ini_set('date.timezone','Asia/Ho_Chi_Minh');
date_default_timezone_set('Asia/Ho_Chi_Minh');

session_start();

require_once('initialize.php');
require_once('classes/DBConnection.php');
$db = new DBConnection;
$conn = $db->conn;

function redirect($url=''){
	if(!empty($url))
	echo '<script>location.href="'.base_url .$url.'"</script>';
}
function validate_image($file){
	if(!empty($file)){
			// exit;
        $ex = explode('?',$file);
        $file = $ex[0];
        $param =  isset($ex[1]) ? '?'.$ex[1]  : '';
		if(is_file(base_app.$file)){
			return base_url.$file.$param;
		}else{
			return base_url.'dist/img/no-image-available.png';
		}
	}else{
		return base_url.'dist/img/no-image-available.png';
	}
}
function isMobileDevice(){
    $aMobileUA = array(
        '/iphone/i' => 'iPhone', 
        '/ipod/i' => 'iPod', 
        '/ipad/i' => 'iPad', 
        '/android/i' => 'Android', 
        '/blackberry/i' => 'BlackBerry', 
        '/webos/i' => 'Mobile'
    );

    //Return true if Mobile User Agent is detected
    foreach($aMobileUA as $sMobileKey => $sMobileOS){
        if(preg_match($sMobileKey, $_SERVER['HTTP_USER_AGENT'])){
            return true;
        }
    }
    //Otherwise return false..  
    return false;
}

function format_num($number){
    if(is_numeric($number)){
        $ex = explode(".",$number);
        $dec_length = isset($ex[1]) ? strlen($ex[1]) : 0;
        return number_format($number,$dec_length);
    }else{
        return '0';
    }
}

ob_end_flush();
?>