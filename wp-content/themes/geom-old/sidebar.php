		<div id="secondary" class="widget-area">
			<div class="searchbox">
				<ul class="social">
					<li> <a class="icon-facebook-sign" href="<?php echo of_get_option('w2f_facebook'); ?>"> </a> </li>
					<li> <a class="icon-rss" href="<?php bloginfo('rss2_url'); ?>"> </a> </li>
					<li> <a class="icon-twitter" href=" https://twitter.com/<?php echo of_get_option('w2f_twitter'); ?> "> </a> </li>
				</ul>
			<?php get_search_form(); ?> 
			</div>
			<ul id="sidebar">
				<?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?>
				<?php endif; // end sidebar widget area ?>

			</ul>	
		</div><!-- #secondary .widget-area -->
