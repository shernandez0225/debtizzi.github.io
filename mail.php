<?php
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: site@debtizzi.com" . "\r\n";

if(isset($_POST['submit-appointment'])){
	foreach ($_POST as $key => $value){
    $message .= "<b> ".htmlspecialchars($key)."</b> : ".htmlspecialchars($value)."<br>";
}
mail('sal@debtizzi.com,richard@debtizzi.com,r.rowe@debtdiscounts.com', 'Inquiry from client', $message,$headers);

//echo "test";
}


if(isset($_POST['Learn-more-home'])){
	foreach ($_POST as $key => $value){
    $message .= "<b> ".htmlspecialchars($key)."</b> : ".htmlspecialchars($value)."<br>";
}
mail('sal@debtizzi.com,richard@debtizzi.com,r.rowe@debtdiscounts.com', 'Agent Inquiry', $message,$headers);

//echo "test";
}	
header("location:index.html?message=success");
die();
?>