<?php






?>
<!DOCTYPE HTML>
<html lang="da-DK" dir="ltr">

<head>
	<meta charset="utf-8">
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

	<script type="application/javascript" src="/vendor/jquery/dist/jquery.min.js"></script>
	<script type="application/javascript" src="/vendor/particles/particles.min.js"></script>
	<script type="application/javascript" src="/assets/uikit/js/uikit.min.js"></script>
	<script type="application/javascript" src="/assets/theme/js/javascript.js"></script>

	<script type="application/javascript" src="/assets/uikit/js/components/sticky.min.js"></script>
	<link rel="stylesheet" href="/assets/uikit/css/components/sticky.min.css" type="text/css">
	<script type="application/javascript" src="/assets/uikit/js/components/accordion.min.js"></script>
	<link rel="stylesheet" href="/assets/uikit/css/components/accordion.min.css" type="text/css">

</body>
</html>
