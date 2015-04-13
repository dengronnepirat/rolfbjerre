<?php
require_once("admin/bootstrap.php");
require_once("php/functions.php");
require_once("php/global_variables.php");
require_once("php/facebook_sdk.php"); /** THIS PHP FILE IS REMOVED FROM THE GITHUB REPO FOR SECURITY REASONS */






















?>
<!DOCTYPE html>

<html lang="<?php echo $lang; ?>">
	<head>
		<meta charset="utf-8">
		<title>Rolf Bjerre</title>
		<meta name="description" content="155 characters of message matching text with a call to action goes here">
		<link href="img/favicon.ico" rel="icon" type="image/x-icon" />


		<?php require("php/elements/head-tags.php"); ?>


	</head>
	<body>
		<a href="https://github.com/peterbrinck/rolfbjerre"><img style="position: fixed; top: 0; right: 0; border: 0; z-index: 9999999999;" src="img/ribbon.png" alt="Open Source Website" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>


		<?php require_once("php/elements/navigation.php"); ?>
		<div id="particles-canvas" class="particles hide-on-mobile">
			<div class="particle-info-box">
				<h1>Open Source er vejen frem!</h1>

			</div>

		</div>

			<div class="grid">
				<div class="col-8-12">
					<div class="content">
						<?php region('Forside Tekst') ?>
					</div>
				</div>
				<div class="col-4-12 hide-on-mobile">
					<?php require_once("php/elements/social_feeds.php"); ?>
				</div>
			</div>














	</body>
</html>