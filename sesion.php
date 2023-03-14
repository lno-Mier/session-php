<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Into</title>
</head>
<body>
	<?php
		session_start();
	?>
	<form method="get">
		<input type="text" name="guest_name" />
		<input type="submit" />
	</form>
	<?php
		$guest_name = "anonim";
		if (isset($_GET['guest_name']) == true) {
			$guest_name = $_GET['guest_name'];
			echo 'Hello' . ' ' . $guest_name;
			$_SESSION['guest_name'] = $guest_name;
		};
	?>
	<h2>
		<?php
			echo $_SESSION['guest_name'];
		?>
	</h2>
</body>
</html>
