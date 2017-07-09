<section class="title_wrap">
	<div class="wrapper">
		<h1>
			<?php
				if (isset( $page['title'] )) {
					echo $page['title'];
				} else {
					echo the_title();
				}
			?>
		</h1>
		<?php
			if (isset( $page['subtitle'] )) {
				echo '<h4>' . $page['subtitle'] . '</h4>';
			}
		?>
	</div>
</section>
