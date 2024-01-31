<?php
include('smtp/PHPMailerAutoload.php');
include '../backend/database/db.php';
session_start();
if(empty($_SESSION['post'])){
	//FIXME have to make email insertion unique
	$emailEsc = mysqli_real_escape_string($db_connect, $_POST['email']);
	$sql_check = "SELECT * FROM subscribers WHERE subEmail = '$emailEsc'";
	$result_check = mysqli_query($db_connect, $sql_check);
	if (mysqli_num_rows($result_check) == 0) {
		//$emailEsc = mysqli_real_escape_string($db_connect, $_POST['email']);
		$sql = "INSERT IGNORE INTO subscribers (subEmail) VALUES ('$emailEsc')";
		$result = mysqli_query($db_connect, $sql);
		$email = $_POST['email'];
		smtp_mailer($email,'Confirmation for subscription', 'Hey there,<br>Thanks for Subscribing!!');
		header('Location: http://localhost/SD_Project/frontend/index.php');
		die();
	}else{
		header('Location: http://localhost/SD_Project/frontend/index.php');
		die();
	}
}
else {
	$post = $_SESSION['post'];
	$sql = "SELECT * FROM subscribers";
	$result = mysqli_query($db_connect, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($subscribers = mysqli_fetch_assoc($result)) {
			smtp_mailer($subscribers['subEmail'],'Newsletter', $post);
		}
	}
	unset($_SESSION['post']);
	header('Location: http://localhost/SD_Project/backend/users/requests.php');
	die();
}

function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer();
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "shihab.cse.20210104156@aust.edu";
	$mail->Password = "ifwj mlrt ugxu loih";
	$mail->SetFrom("shihab.cse.20210104156@aust.edu");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}
}

?>