<?php 
ob_start();
session_start();
include 'baglan.php';
include 'fonksiyon.php';
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
	'id' => 0
	));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$blogsor=$db->prepare("SELECT * FROM blog where blog_id=:id");
$blogsor->execute(array(
  'id' => $_GET['blog_id']
  ));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);

$hakkimdasor=$db->prepare("SELECT * FROM hakkimda order by hakkimda_id");
$hakkimdasor->execute();
$hakkimdacek=$hakkimdasor->fetch(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html lang="en">
<base href="<?php echo $ayarcek['ayar_url']; ?>">
<head>
	
		 <link rel="icon" href="<?php echo $ayarcek['ayar_fovicon']; ?>">
		<!-- Meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
		<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>">
		<!-- Title -->
		<title><?php echo $ayarcek['ayar_title'] ?></title>

		<!-- CSS Plugins -->
        <link rel="stylesheet" href="<?php echo $ayarcek['ayar_url']; ?>css/plugins/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $ayarcek['ayar_url']; ?>css/plugins/font-awesome.css">
		<link rel="stylesheet" href="<?php echo $ayarcek['ayar_url']; ?>css/plugins/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo $ayarcek['ayar_url']; ?>css/plugins/simplebar.css">
		<link rel="stylesheet" href="<?php echo $ayarcek['ayar_url']; ?>css/plugins/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo $ayarcek['ayar_url']; ?>css/plugins/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo $ayarcek['ayar_url']; ?>css/plugins/jquery.animatedheadline.css">
		
		<!-- CSS Base -->
        <link rel="stylesheet" class="back-color" href="<?php echo $ayarcek['ayar_url']; ?>css/style-dark.css">
		<link rel="stylesheet" href="<?php echo $ayarcek['ayar_url']; ?>css/style-demo.css">
		
		<!-- Settings Style -->
		<link rel="stylesheet" class="posit-nav" href="<?php echo $ayarcek['ayar_url']; ?>css/settings/left-nav.css" />
		<link rel="stylesheet" class="theme-color" href="<?php echo $ayarcek['ayar_url']; ?>css/settings/green-color.css" />
		<link rel="stylesheet" class="box-st" href="<?php echo $ayarcek['ayar_url']; ?>css/settings/circle-box.css" />
		
    </head>