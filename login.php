<?php
	session_start();

	require('includes/credentials.php');

	if(isset($_POST['submit'])){
		$pwlogin = $pwinclude;

		$pw = isset($_POST['pw']) ? $_POST['pw'] : '';

		if ($pw == $pwlogin){
			$_SESSION['UserData'] = $pwlogin;
			header("location:intern.php");
			exit;
		} else {
			$msg="Falsches Passwort. Du Hurensohn.";
		}
	}

	header('X-Content-Type-Options: nosniff');
	header('X-Content-Type: text/html; charset=UTF-8');
	header('X-Frame-Options: deny');
	header("X-XSS-Protection: 1; mode=block");
	header("Referrer-Policy: no-referrer");
	header("Content-Security-Policy: default-src 'self';");

	$page_name = "Intern";
?>

<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Pfadi, Barotte, Pfadi Angenstein, Roverrotte, Angenstein, Rover">
	<meta name="description" content="Die Barotte ist eine der Roverrotten der Pfadi Angenstein">
	<meta name="author" content="Jonas Grüter / Kaa">
	<meta name="format-detection" content="telephone=no">
	<meta name="theme-color" content="#c82626">
	<meta name="robots" content="index,nofollow">
	<meta name="referrer" content="no-referrer">
	<title>Barotte</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="enable-dm">
	<header class="container">
		<h1>Barotte. <span class="neutral">Login</span></h1>
		<?php include('includes/nav.php'); ?>
	</header>

	<main class="container">
			<form action="" method="POST">
				<label for="pw">Passwort</label>
				<input type="password" name="pw" id="pw">
				<input type="submit" name="submit" value="Login">
			</form>
			<?php if(isset($msg)){?>
				<p><?php echo $msg;?></p>
			<?php } ?>
	</main>

	<?php include('includes/footer.php'); ?>

</body>
</html>