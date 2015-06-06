<?php






?>
<!DOCTYPE HTML>
<html lang="da-DK" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<base href="<?php echo $this->routeUrl('/')?>">

	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="/assets/uikit/css/uikit.min.css" type="text/css">
	<link rel="stylesheet" href="/assets/theme/css/theme.rolfbjerre.min.css" type="text/css">

</head>

<body class="" data-cockpit-page="{page:'home'}">
	<div id="header">
		<?php require_once("layouts/header.php"); ?>
	</div>

	<div id="main">
		<?php echo $content_for_layout;?>
	</div>

	<div id="footer">
		<?php require_once("layouts/footer.php"); ?>
	</div>

	<script async src="/vendor/jquery/dist/jquery.min.js"></script>
	<script async src="/vendor/particles/particles.min.js"></script>
	<script async src="/assets/uikit/js/uikit.min.js"></script>
	<script async src="/assets/theme/js/javascript.js"></script>

	<script src="/assets/uikit/js/components/sticky.min.js"></script>
	<link rel="stylesheet" href="/assets/uikit/css/components/sticky.min.css" type="text/css">

	<script src="/assets/uikit/js/components/accordion.min.js"></script>
	<link rel="stylesheet" href="/assets/uikit/css/components/accordion.min.css" type="text/css">

	<script src="/assets/uikit/js/components/slideshow.min.js"></script>
	<link rel="stylesheet" href="/assets/uikit/css/components/slideshow.min.css" type="text/css">

	<script src="/assets/uikit/js/components/slidenav.min.js"></script>
	<link rel="stylesheet" href="/assets/uikit/css/components/slidenav.min.css" type="text/css">

	<script src="/assets/uikit/js/components/dotnav.min.js"></script>
	<link rel="stylesheet" href="/assets/uikit/css/components/dotnav.min.css" type="text/css">

</body>
</html>
