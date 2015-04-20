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
		<meta name="description" content="Rolf Bjerre's Mærkesager">
		<link href="img/favicon.ico" rel="icon" type="image/x-icon" />


		<?php require("php/elements/head-tags.php"); ?>


	</head>
	<body>
		<a href="https://github.com/peterbrinck/rolfbjerre"><img style="position: fixed; top: 0; right: 0; border: 0; z-index: 9999999999;" src="img/ribbon.png" alt="Open Source Website" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>


		<?php require_once("php/elements/navigation.php"); ?>
		<br>
		<br>
		<br>
		<br>
		<br>

			<div class="grid">
				<div class="col-8-12">
					<div class="content">
						<?php region('Mærkesager') ?>
					</div>
				</div>
				<div class="col-4-12 hide-on-mobile">
					<?php require_once("php/elements/social_feeds.php"); ?>
				</div>
			</div>













<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.peterbrinck.dk/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 3]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//analytics.peterbrinck.dk/piwik.php?idsite=3" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

	</body>
</html>