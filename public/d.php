<?php
require "./includes/head.php";
$file = $_GET["f"];
$url = "/download.php?f=" . $file;
$filepath = "./download/" . $file;
$isValid = file_exists($filepath) && isset($file);

$styles = array("red", "blue", "green", "yellow", "melon");
?>
<body>
	
	<main class="ie-center-fix">
		<div class="<?php echo $styles[array_rand($styles)] ?> section section--full">
			<div class="section__container section__container--full">
				<h1 class="title title--secondary"><?php
				if ($isValid) {
					echo $file;
				}
				else {
					echo "Datei wurde nicht gefunden";
				}
				?></h1>
				<?php if ($isValid): ?>
					<a class="info info--link" href="<?php
					echo $url?>" target="_blank">Download</a>
				<?php endif ?>
			</div>
		</main>

	</body>