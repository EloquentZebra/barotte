<?php
	header('X-Content-Type-Options: nosniff');
	header('X-Content-Type: text/html; charset=UTF-8');
	header('X-Frame-Options: deny');
	header("X-XSS-Protection: 1; mode=block");
	header("Referrer-Policy: no-referrer");
	header("Content-Security-Policy: default-src 'self';");

	$page_name = "Home";
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
		<h1><a href="index.php">Barotte.</a> <span class="neutral hide-on-mobile">Willkommen</span></h1>
		<?php include('includes/nav.php'); ?>
	</header>

	<main class="container">
			<article class="about" id="about">
				<p>Wir sind mit Gründungsdatum 15.09.2017 die im Moment jüngste Rotte der Pfadi Angenstein</p>
				<p>Unser erklärtes Ziel ist es, die Geselligkeit unter den Mitgliedern zu fördern sowie wo nötig und möglich die Unterstützung der Pfadi Angenstein.</p>
				<p>Weiteres zur Barotte ist in unseren <a href="downloads/statuten.pdf">Statuten</a> ersichtlich.</p>
			</article>

			<article class="termine" id="termine">
				<h2>Termine</h2>
				<table>
					<thead>
						<tr>
							<th>Datum</th>
							<th>Zeit</th>
							<th>Anlass</th>
							<th>Ort</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>29.05.2021</td>
							<td>später Nachmittag & Abend</td>
							<td>Vereinsversammlung</td>
							<td>tba</td>
						</tr>
					</tbody>
				</table>			
			</article>

			<article class="kontakt" id="kontakt">
				<h2>Vorstand &amp; Kontakt</h2>
				<p>Der Vorstand besteht im Moment aus den folgenden Personen:</p>
				<ul>
					<li>Jonas Grüter / <strong>Kaa</strong> (Präsident)</li>
					<li>Luca Vecchi / <strong>Littlefoot</strong> (Vize-Präsident)</li>
					<li>Nicolas Vollgraff / <strong>Pluto</strong> (Kassier)</li>
					<li>Pascal Vollgraff / <strong>Bugs</strong> (Beisitzer)</li>
				</ul>

				<p>Der Vorstand kann per E-Mail an <a href="mailto:vorstand@barotte.pfadiangenstein.ch">vorstand@barotte.pfadiangenstein.ch</a> erreicht werden.</p>
			</article>
	</main>

	<?php include('includes/footer.php'); ?>

</body>
</html>