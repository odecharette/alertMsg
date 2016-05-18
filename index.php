<?php
	require 'FlashMessages.php';
	// Start a Session
	if (!session_id()) @session_start();

	// Instantiate the class
	$msg = new FlashMessages();	
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<h1>test Message flash</h1>

	<?php
		// Wherever you want to display the messages simply call:
	$msg->info('This is an info message');
	$msg->success('This is a success message');
	$msg->warning('This is a warning message');
	$msg->error('This is an error message');
	$msg->display();

	// ou plus court : 
	$msg->info('This is an info message')->display();

	?>

</body>
</html>