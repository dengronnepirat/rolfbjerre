<?php

?>

<div id="particles-canvas" class="uk-cover uk-hidden-small uk-margin-large-bottom rb-particles">
	<div class="uk-flex uk-flex-center uk-flex-middle rb-cover-text">Open-Source er vejen frem!</div>
</div>

<div class="uk-container uk-container-center uk-margin-large-top">
	<div class="uk-block-default">
		<div class="uk-grid">
			<?php foreach ($frontpageQuick as $circle): ?>
				<div class="uk-width-large-1-3 uk-margin-large-bottom uk-flex rb-circle-wrapper">
					<div class="uk-panel uk-panel-box uk-text-center rb-circle-panel">
						<div class="uk-flex uk-flex-center uk-margin">
							<div class="rb-quick-circle uk-flex uk-flex-center uk-flex-middle" data-uk-scrollspy="{cls:'uk-animation-scale-up' , repeat: true}">
								<i class="uk-icon-<?php echo $circle['icon_slug']; ?> uk-icon-large uk-text-contrast rb-circle-icon"></i>
							</div>
						</div>
						<h3 class="uk-panel-title"><?php echo $circle["title"]; ?></h3>
						<p><?php echo markdown($circle["text"]); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<div class="uk-container uk-container-center uk-margin-top">

	<?php region('Slideshow Facts'); ?>


</div>