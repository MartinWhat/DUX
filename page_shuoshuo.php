<?php 
/* Template Name: 说说/心情 */
    get_header(); 
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/vertical_timeline.css" />
<section class="container">
<div class="content-wrap">
<div class="content">
	<div style="background: #FFF; padding: 30px; border-radius: 5px;">
		<ul class="cbp_tmtimeline">
			<?php 
			query_posts("post_type=shuoshuo & post_status=publish & posts_per_page=-1");
			if ( have_posts() ) { 
				while ( have_posts() ) { 
					the_post(); ?>
					<li>
						<time class="cbp_tmtime"><i class="fa fa-clock-o"></i>    <?php the_time('Y年n月j日G:i'); ?></time>
						<div class="cbp_tmicon">
							<img src="https://cdn.wc1234.cn/wp-file/2018/12/20160401191740_tHjR3_看图王-150x150.jpeg" class="avatar avatar-48" width="48" height="48">
							<?php //echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>

						</div>
						<div class="cbp_tmlabel" >
							<span style="font-size:14px;"><?php the_content(); ?></span>
							<h2><?php //the_title(); ?><span><?php echo get_bloginfo('name'); ?>  |  <?php echo get_bloginfo('description' ); ?></span></h2>
						</div>
					</li>
				<?php }
			} ?>
		</ul>
	</div>
</div>	
</div>
	<?php get_sidebar(); ?>
</section>
	<?php get_footer();?>