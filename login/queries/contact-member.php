<?php
include('../../connect/connect.php');
include('../../connect/functions.php');
dbConnect('members');

$email = validateUser();
$code2 = getCode2($email);
$memberID = $_POST['id'];
$message = $_POST['message'];

$query = mysql_query("SELECT * FROM members WHERE id='$memberID'");
$get = mysql_fetch_assoc($query);
$memberEmail = $get['email'];

if(!$message){//if loading page
	$folder = getImageFolder($memberEmail);
	
	$query = mysql_query("SELECT * FROM members WHERE email='$memberEmail'");
	$get = mysql_fetch_assoc($query);
	$memberName = $get['name'];
	
	$profileImage = getProfilePhoto($memberEmail);
	if($profileImage) $imagePath = '../pics/'.$folder.'/'.$profileImage;
	else $imagePath = '../pics/profile-icon.png';

	$return['contact'] = 'Contact '.ucwords($memberName);
	$return['imagePath'] = $imagePath;

	echo json_encode($return);
}//if

else{//else if message
	
	$query = mysql_query("SELECT * FROM members WHERE email='$memberEmail'");
	$get = mysql_fetch_assoc($query);
	$name = explode(' ',ucwords($get['name']));
	$firstName = $name[0];
	$id = $get['id'];
	//get name of person being contacted
	$query = mysql_query("SELECT * FROM members WHERE email='$memberEmail'");
	$get = mysql_fetch_assoc($query);
	$memberName = explode(' ',ucwords($get['name']));
	$memberFirstName = $memberName[0];
	
	$profilePage = "http://WitzKey.com/login/mentee?id=".$id;
	
	$subject = 'Someone contacted you';

	include('../../sendgrid/fonts.php');
	
	$body_html = "<div style='".$font1."'>
	<p>Hey ".$memberFirstName."!</p> 
	<p>".$firstName." sent you the message below.</p>
	<p><hr></p>
	Email: ".$email."
	<p>Profile: <a href='".$profilePage."'>WitzKey.com</a></p>
	<p>".nl2br($message)."</p>
	</div>";
	
	$body_text = "Hey ".$memberFirstName."! 
	\n\n
	".$firstName." sent you the message below.
	\n\n
	Email: ".$email."
	\n\nProfile: ".$profilePage."
	\n\n
	".$message;
	
	include('../../sendgrid/SendGrid_loader.php');
	$email = $memberEmail;
	include('../../sendgrid/sendEmail.php');
	
	$return['status'] = 'done';
	echo json_encode($return);
}

?>