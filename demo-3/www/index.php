<html>
<head>
	<title>Hello world!</title>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}

	#logo {
		margin-bottom: 40px;
	}
	.container {
		max-width: 550px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}
	
	</style>
</head>
<body>
	<div class="container">

		<img id="logo" src="/logo.png" />
		<h1><?php echo "Hello ".($_ENV["NAME"]?$_ENV["NAME"]:"world")."!"; ?> v.3.0</h1>
		<h3>Vad är Lorem Ipsum?</h3>
		<p><strong>Lorem Ipsum</strong> är en utfyllnadstext från tryck- och förlagsindustrin. Lorem ipsum har varit standard ända sedan 1500-talet, när en okänd boksättare tog att antal bokstäver och blandade dem för att göra ett provexemplar av en bok. Lorem ipsum har inte bara överlevt fem århundraden, utan även övergången till elektronisk typografi utan större förändringar. Det blev allmänt känt på 1960-talet i samband med lanseringen av Letraset-ark med avsnitt av Lorem Ipsum, och senare med mjukvaror som Aldus PageMaker.</p>
		<p>Lastbalansering vad är det?</p>
		<?php if($_ENV["HOSTNAME"]) {?><h3>My hostname is <?php echo $_ENV["HOSTNAME"]; ?></h3><?php } ?>
		<?php
		$links = [];
		foreach($_ENV as $key => $value) {
			if(preg_match("/^(.*)_PORT_([0-9]*)_(TCP|UDP)$/", $key, $matches)) {
				$links[] = [
					"name" => $matches[1],
					"port" => $matches[2],
					"proto" => $matches[3],
					"value" => $value
				];
			}
		}
		if($links) {
		?>
			<h3>Links found</h3>
			<?php
			foreach($links as $link) {
				?>
				<b><?php echo $link["name"]; ?></b> listening in <?php echo $link["port"]+"/"+$link["proto"]; ?> available at <?php echo $link["value"]; ?><br />
				<?php
			}
			?>
		<?php
		}

		if($_ENV["DOCKERCLOUD_AUTH"]) {
			?>
			<h3>I have Docker Cloud API powers!</h3>
			<?php
		}
		?>
	</div>
</body>
</html>
