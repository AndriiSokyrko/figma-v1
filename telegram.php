<?php
/*  https://api.telegram.org/bot936471140:AAEIlJ2jrHw_ly16h1gWFUkg18AjwZhEkI4/getUpdates */
/* where xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx token my Bot*/
/* 936471140:AAEIlJ2jrHw_ly16h1gWFUkg18AjwZhEkI4 */
$user_name=$_POST["user_name"];
$user_phone=$_POST["user_phone"];
$user_email=$_POST["user_email"];
$user_product=$_POST["user_producuct"];
$user_message = $_POST["user_message"];

$token="936471140:AAEIlJ2jrHw_ly16h1gWFUkg18AjwZhEkI4";
$chat_id="-379897559";
$arr =[
  'Name'=> $user_name,
  'phone'=> $user_phone,
    'Email'=>$user_email,
    'product'=>$user_product,
    'Message'=>$user_message
];
//foreach ($arr as $key=>$value){
    $text = "Hi. I am". $user_name."My phone ".$user_phone
        ." My E-mail ".$user_email." I 've interested for ".$user_product.
        " ".$user_message;
//}
$sendToTelgram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chatId={$chat_id}
                       &parse_mode=html&text={$text}","r");
if($sendToTelgram){
    echo "<h1 class='success'>Thank you for your order</h1>";
    return true;
} else {
    header('location: thank-you.html');
}


?>