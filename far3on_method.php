<?php 

ob_start();
$API_KEY = '427310155:AAGzNvCZBWDA2CTMhryWCsqNGuaGglo9eM8'; //add your bot token
$bot_ = "FAR3ON7BOT"; // add your bot username 
$sudo = 112763847; // add your id 
$bot_id = 427310155;
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}


include "plugin/lockall.php";
include "plugin/dontedit.php";
include "plugin/me.php";
include "plugin/tols.php";
include "plugin/app.php";
include "plugin/sendchannel.php";
include "plugin/qustion.php";
include "plugin/textph.php";
include "plugin/sudo.php";






//====================the file by mounir======================//
?>

