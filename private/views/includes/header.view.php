<!DOCTYPE html>
<html lang="en" version="1.0">
	<head>
		<title>Byteskill - <?php echo $_title ?></title>
		<!-- Meta -->
		<meta charset="UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="HTML, CSS, JavaScript">
		<meta name="author" content="Byteskill">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap" rel="stylesheet">
		<!-- Logo -->
		<link rel="apple-touch-icon" sizes="180x180" href="assets/images/logo/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo/favicon-16x16.png">
		<link rel="manifest" href="assets/images/logo/site.webmanifest">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/all.min.css"> <!-- Fontawesome -->
		<link rel="stylesheet" type="text/css" href="assets/css/master.css">
		<?php
		foreach($__css as &$ss)
		{
			echo '<link rel="stylesheet" type="text/css" href="assets/css/' . $ss . '.css">'; // The dots are for concatonation
		}
		?>
	</head>
	<body>
