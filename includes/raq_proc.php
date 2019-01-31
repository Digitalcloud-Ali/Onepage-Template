<?php
$to = "ask@mastergraphiks.com";
$from    = $_POST['email'];
$name    = $_POST['name'];
$continue = "http://mastergraphiks.com/thanks.html";
if ($_SERVER['REQUEST_METHOD'] != "POST"){exit;}
$message = "";
while(list($key,$value) = each($_POST)){if(!(empty($value))){$set=1;}$message = $message . "$key: $value\n\n";} if($set!==1){header("location: $_SERVER[HTTP_REFERER]");exit;}
$message = $message;
$message = stripslashes($message);
$subject = "mastergraphiks.com Quote Request";
$headers = "Return-Path: $from\r\n"; 
$headers .= "From: $name <$from>\r\n";
mail($to,$subject,$message,$headers);
?>
<?php header("location: http://mastergraphiks.com/thanks.html"); ?>