<?php
		session_start();

	if(!isset($_SESSION['UserData'])){
		header("location:login.php");
		exit;
	}

	if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
		session_unset(); 
		session_destroy();
		header("location:index.php");
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
		<h1>Barotte. <span class="neutral">Intern</span></h1>
		<?php include('includes/nav.php'); ?>
	</header>

	<main class="container">
			<article class="mitglieder" id="mitglieder">
				<h2>Mitgliederverzeichnis</h2>
				<?php include('includes/mitgliederverzeichnis.php'); ?>
			</article>

			<article>
				<div class="row">
					<div class="col">
						<a href="?logout=true">
							<button>Abmelden</button>
						</a>
					</div>
					<div class="col"></div>
					<div class="col"></div>
					<div class="col"></div>
				</div>
			</article>
	</main>

	<?php include('includes/footer.php'); ?>

</body>
</html>