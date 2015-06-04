<?php
require('cockpit/bootstrap.php');

$app = new Lime\App();

$baseVars = [
	'pageTitle' => 'Rolf Bjerre'

];

// bind routes
$app->bind("/", function() use($app, $baseVars) {
	$frontpageQuick = collection("Forside Quick (Der bliver kun vist 3 på siden)")->find()->sort(["custom-order"=>1])->limit(3);

	return $app->render('views/home.php with template/template.php', array_merge($baseVars, [
		'frontpageQuick' => $frontpageQuick

	]));
});

$app->bind("/forside", function() use($app, $baseVars) {
	$frontpageQuick = collection("Forside Quick (Der bliver kun vist 3 på siden)")->find()->sort(["custom-order"=>1])->limit(3);

	return $app->render('views/home.php with template/template.php', array_merge($baseVars, [
		'frontpageQuick' => $frontpageQuick

	]));
});

$app->bind("/maerkesager", function() use($app, $baseVars) {

	$maerkesager = collection("Mærkesager")->find()->sort(["custom-order"=>1]);

	return $app->render('views/maerkesager.php with template/template.php', array_merge($baseVars, [
		'maerkesager' => $maerkesager

	]));

});



$app->run();

