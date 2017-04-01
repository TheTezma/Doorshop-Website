<?php /* Template Name: diy */ ?>
<?php get_header(); ?>

<div class="row">
		<h2>DIY How To...</h2>
			
		<div class="row" style="padding-bottom: 27px">
			<div class="col-s4" style="margin: 0;">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
				<div class="diy-panel">
					<img width="280" src="<?php bloginfo('template_directory');?>/Images/tapemeasure.png">
					<div class="diy-panel-footer">
						<a href="#">MEASURE A DOOR</a>
					</div>
				</div>
			</div>
			<div class="col-s4" style="margin: 0 27px;">
				<div class="diy-panel">
					<img width="280" height="280" src="<?php bloginfo('template_directory');?>/Images/doorinstall.jpg" style="background-size: cover;">
					<div class="diy-panel-footer">
						<a href="#">INSTALL A DOOR</a>
					</div>
				</div>
			</div>
			<div class="col-s4" style="margin: 0;">
				<div class="diy-panel">
					<img width="280" height="280" src="<?php bloginfo('template_directory');?>/Images/lockinstall.jpg">
					<div class="diy-panel-footer">
						<a href="#">INSTALL A LOCK</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<img class="flyer" src="<?php bloginfo('template_directory');?>/Images/flyer.jpg">
</dov>
<?php get_footer(); ?>