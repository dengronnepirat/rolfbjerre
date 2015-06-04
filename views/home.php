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
							<div class="rb-quick-circle uk-flex uk-flex-center uk-flex-middle" data-uk-scrollspy="{cls:'uk-animation-scale-up'}">
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

<div class="uk-container uk-container-center uk-margin-large-top">
	<div class="uk-grid">
		<div class="uk-width-large-7-10 uk-width-medium-1-1 uk-margin-large-bottom">
			<h1>Hi</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam facere ullam quidem et excepturi, culpa doloremque. Accusantium architecto doloribus ab officiis possimus natus, atque dolorem sit illo fuga quae assumenda, voluptatum sapiente odit! Architecto, tempore eaque modi? Nostrum praesentium pariatur quae porro, beatae rerum inventore assumenda dignissimos temporibus perspiciatis dolores, minus magni unde esse veniam iste cumque? Consectetur voluptate excepturi sed quaerat voluptatem, rerum beatae, magnam similique ratione iste quis, natus dolores vitae quod vero velit necessitatibus non. Quisquam ipsam deserunt, beatae repellendus quaerat quia distinctio voluptatem minus explicabo voluptatibus, quis nulla soluta vitae delectus quidem, impedit consequuntur molestiae perferendis, dolorem est? Corporis dolorum optio tempore, porro repudiandae assumenda quos, vel ipsum quisquam voluptate maiores impedit. Odit consectetur harum, repellendus non ipsa animi fugiat reprehenderit dolor. Ab laudantium adipisci eos, explicabo quos reprehenderit impedit rerum dolorem ex. Ad adipisci eligendi aliquam ipsum laboriosam ipsa ut, numquam, asperiores magni veniam! Natus quam, quos, cumque culpa rem sint ut voluptatibus itaque labore?</p>
		</div>

		<div class="uk-width-large-3-10 uk-width-medium-1-1">
			<h1>Social</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste minus pariatur ipsa laboriosam maxime rerum. Similique incidunt dicta recusandae dolorem quasi necessitatibus corrupti id quod laudantium, expedita quisquam commodi temporibus sequi quo fugit! Repellat nisi tenetur iste, neque eligendi sit. Sunt placeat nihil enim dolorum nisi ad, necessitatibus, aut sint modi. Optio expedita dignissimos officia doloremque nobis sint. Quisquam rem quos nostrum quibusdam repudiandae minima reiciendis quam, ex alias fugit id deserunt, architecto. Id quasi quod architecto odit aspernatur nihil inventore, laudantium, debitis officiis, quibusdam delectus nisi accusamus, obcaecati ex sequi? Repudiandae natus ducimus recusandae illum laborum mollitia autem dolores unde! Harum fugit laudantium tempora cumque, molestias! Earum ipsum consectetur ut quis ad doloremque dolor, temporibus corrupti numquam, nisi aperiam recusandae voluptatem, quas. Quod dignissimos rerum aperiam laudantium soluta. Suscipit obcaecati quidem explicabo dolor sint, excepturi hic accusantium autem provident voluptatum quibusdam unde maxime magnam, atque fugit consequuntur quas eaque fugiat earum velit laborum, nisi! Dicta quidem, et voluptatem sit voluptatibus dolor cumque totam ad saepe aperiam. Et sit dignissimos, autem ipsum quam. Assumenda cum in aut, cumque atque sit, praesentium tempora quae nemo voluptates adipisci voluptatem esse iste sapiente consectetur delectus id. Vel facilis dolores expedita, nam rem. Tempora.</p>
		</div>


	</div>
</div>