<?php
include('../../connect/connect.php');
include('../../connect/functions.php');
dbConnect('members');

$email = validateUser();

$image = $_POST['image'];

$code2 = getCode2($email);

switch($image){
	case 'profile':
		$folder = getImageFolder($email);
		$profileImage = getProfilePhoto($email);
		$return['folder'] = $folder;
		$return['profileImage'] = $profileImage;
		echo json_encode($return);
	; 
	break;	
}//switch

?>