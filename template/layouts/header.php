<?php


$menu = array(
				'Forside',
				'Mærkesager',
				/* 'Blog', */
				'Om Rolf',
				'Share With Care',
				'Kontakt'
			);


?>


	<nav class="uk-navbar rb-navbar" data-uk-sticky="{top:-400, animation: 'uk-animation-slide-top', clsactive: 'rb-navbar-sticky'}">
		<div class="uk-container uk-container-center">
			<a href="forside" class="uk-navbar-brand rb-navbar-brand"><span class="alternativet-slash"> / </span> ROLF BJERRE </a>
			<ul class="uk-navbar-nav rb-navbar-nav uk-navbar-flip uk-visible-large">
			<?php foreach($menu as $name): ?>
			<?php
				$nameLower = strtolower($name);
				$name_no_space = str_replace(' ', '-', $nameLower);
				$name_ae = str_replace('æ', 'ae', $name_no_space);
				$name_o = str_replace('ø', 'o', $name_ae);
				$nameSlug = str_replace('å', 'a', $name_o);

			?>
				<li class="rb-navbar-item"><a href="<?php echo $nameSlug; ?>"><?php echo $name; ?></a></li>

			<?php endforeach;?>
				<li class="rb-navbar-item"><a href="http://live.rolfbjerre.dk/">Live Politik</a></li>
			</ul>
			<ul class="uk-navbar-nav rb-navbar-nav uk-navbar-flip uk-hidden-large">
				<li class="rb-navbar-toggle"><a href="#offcanvas" class="uk-navbar-toggle" data-uk-offcanvas></a></li>
			</ul>
		</div>
	</nav>



<div id="offcanvas" class="uk-offcanvas uk-position-z-index">
	<div class="uk-offcanvas-bar rb-offcanvas">
		<h1 class="uk-text-contrast uk-text-center">Menu</h1>
		<ul class="uk-nav uk-nav-offcanvas uk-text-center" data-uk-nav>
			<?php foreach($menu as $icon => $name): ?>
			<?php
				$nameLower = strtolower($name);
				$name_no_space = str_replace(' ', '-', $nameLower);
				$name_ae = str_replace('æ', 'ae', $name_no_space);
				$name_o = str_replace('ø', 'o', $name_ae);
				$nameSlug = str_replace('å', 'a', $name_o);

			?>
				<li class="rb-navbar-item"><a href="<?php echo $nameSlug; ?>"><?php echo $name; ?></a></li>

			<?php endforeach;?>
		</ul>
	</div>
</div>