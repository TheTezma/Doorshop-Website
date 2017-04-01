<?php /* Template Name: contact-us */ ?>
<?php get_header(); ?>

<div class="row">
	<div class="row" style="margin-top: 25px;">
		<div class="col-9" style="padding-right: 25px;">
			<div class="contact-info">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="col-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

	</div> <!-- /.row -->
	</div>

<?php get_footer(); ?>


