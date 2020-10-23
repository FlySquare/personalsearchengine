<?php
ob_start();
session_start();
include 'db.php';
if(isset($_POST['user_kayit'])){
$username = $_POST['user_instaname'];

$ayarkaydet=$db->prepare("INSERT INTO users SET
				 users_instaname=:users_instaname
		");

	$insert=$ayarkaydet->execute(array(
				'users_instaname' => $username

		));


	if ($insert) {
    $_SESSION['user_instaname'] = $username;
		header("Location:../index.php");

	} else {

			header("Location:../login.php?hata=yes");
	}


}
 ?>
