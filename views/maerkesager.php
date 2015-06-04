<?php


?>
<div class="uk-container uk-container-center uk-margin-large-top">

	<?php region('Mærkesager') ?>

	<br>

	<h2>Mærkesager</h2>
	<div class="uk-accordion rb-accordion" data-uk-accordion="{showfirst: false, clsactive: 'rb-maerkesager-minus'}">

	<?php foreach($maerkesager as $case): ?>
		<h3 class="uk-accordion-title"><?php echo $case["title"]; ?></h3>
		<div class="uk-accordion-content uk-margin-bottom">
			<?php echo $case["text"]; ?>
		</div>
	<?php endforeach;?>

	</div>

</div>