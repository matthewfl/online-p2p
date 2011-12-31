<?php
if(file_exists('config.php')) {
	include 'config.php';
}else{
// need to write the auto config setup
	exit;
}
if($_GET['a']) {
// perform an aciton with another server
	if($_GET['a'] == 'search') {
		// send the server the query and the server will look in its own database
		// will also ask its peers and also save any results that they turn up
	}else if($_GET['a'] == 'request') {
	}else if($_GET['a'] == 'locate') {
	}else if($_GET['a'] == 'init') {
		
	}else if($_GET['a'] == 'bootstrap') {
	}
}else{
// display a page to the user
	session_start();
	if($_GET['p'] == 'jquery') {
	// need to load a static version of jquery into this file
	}else if($_GET['p'] == 'search'){
		
	}else{
		?>
<html>
	<head>
		<title>Php p2p filenetwork</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	</head>
	<body>
		<?php if(OPEN_TO_PUBLIC || isset($_SESSION['user'])) { ?>
			<form
		<?php } else { ?>
			this is that herp derp login page
		<?php } ?>
	</body>
</html>
		<?php
	}

}