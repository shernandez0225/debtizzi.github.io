<?php
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: site@debtizzi.com" . "\r\n";

if(isset($_POST['submit-appointment'])){
	foreach ($_POST as $key => $value){
		if($key == 'Debt'){
				if($value == '15000'){ $value = '10,000-15,000'; }
				if($value == '20000'){ $value = '15,000-20,000'; }
				if($value == '25000'){ $value = '20,000-25,000'; }
				if($value == '30000'){ $value = '25,000-30,000'; }
				if($value == '35000'){ $value = '30,000-35,000'; }
				if($value == '40000'){ $value = '35,000-40,000'; }
				if($value == '50000'){ $value = '40,000-50,000'; }
				if($value == '50001'){ $value = 'More than 50,000'; }
		}
		$message .= "<b> ".htmlspecialchars($key)."</b> : ".htmlspecialchars($value)."<br>";
		
}
//mail('sal@debtizzi.com,richard@debtizzi.com,r.rowe@debtdiscounts.com', 'Inquiry from client', $message,$headers);
mail('vishal@virtualheight.com', 'Inquiry from client', $message,$headers);
echo "test1";
}


if(isset($_POST['Learn-more-home'])){
	foreach ($_POST as $key => $value){
		if($key == 'Debt'){
				if($value == '15000'){ $value = '10,000-15,000'; }
				if($value == '20000'){ $value = '15,000-20,000'; }
				if($value == '25000'){ $value = '20,000-25,000'; }
				if($value == '30000'){ $value = '25,000-30,000'; }
				if($value == '35000'){ $value = '30,000-35,000'; }
				if($value == '40000'){ $value = '35,000-40,000'; }
				if($value == '50000'){ $value = '40,000-50,000'; }
				if($value == '50001'){ $value = 'More than 50,000'; }
		}
    $message .= "<b> ".htmlspecialchars($key)."</b> : ".htmlspecialchars($value)."<br>";
}
//mail('sal@debtizzi.com,richard@debtizzi.com,r.rowe@debtdiscounts.com', 'Inquiry From Client', $message,$headers);
mail('vishal@virtualheight.com', 'Inquiry from client', $message,$headers);
echo "test";
}	
//header("location:index.html?message=success");
die();
?>