<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="post-cover">

<div class="format-box">
<i class="icon-picture"></i>
</div>


	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'لینک مستقیم به %s', '_s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

	
	</header><!-- .entry-header -->

	<div class="entry-content">
	
	<?php
					$thumb = get_post_thumbnail_id();
					$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
					$image = aq_resize( $img_url, 540, 350, true ); //resize & crop the image
				?>
				
				<?php if($image) : ?>
					<a class="thickbox" title= "<?php the_title(); ?>" href="<?php echo $img_url ?>"><img style="margin-bottom:20px;" src="<?php echo $image ?>"/></a>
				<?php endif; ?>
		<?php the_content( __( 'ادامه <span class="meta-nav">&larr;</span>', '_s' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'صفحه:', '_s' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->




	<footer class="entry-meta">
	
		<span class="clock"> <i class="icon-time"></i><abbr title="<?php the_time('نوشته شده در j F Y؛ ساعت g:i a');?>"> <?php days_ago(); ?></abbr></span>
		<span class="comments-link"> <i class="icon-comment"></i>  <?php comments_popup_link( __( 'نظر شما چيست؟', '_s' ), __( 'يک ديدگاه', '_s' ), __( '% ديدگاه', '_s' ) ); ?></span>
		<span class="perml"> <i class="icon-bolt"></i> <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'فقط درباره %s بخوانید', '_s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">لینک مستقیم</a></span>

	</footer><!-- #entry-meta -->
</div>	

</article><!-- #post-<?php the_ID(); ?> -->