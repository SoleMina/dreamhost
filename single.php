<?php
/**
 * Template Name: Blog Individual
 */

get_header(); ?>

<section id="banner" style="background-image: url('https://www.totalkickboxing.ie/wp-content/uploads/2018/12/Rectangle-1.png'); background-size: cover; background-position: 100% 100%; padding: 15% 10%;">
	<div class="container">
		<h1 class="text-center"><?php the_title(); ?></h1>
	</div>
</section>
<section class="blog-section">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
					endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
		<div class="row">
			<div class="col-lg-6">
				<img src="<?php the_field("img_one"); ?>" alt="">
			</div>
			<div class="col-lg-6">
				<img src="<?php the_field("img_two"); ?>" alt="">
			</div>
		</div>
		<div>
			<p><?php the_field("parrafo_one"); ?></p>
		</div>
		<a href="<?php the_field("next_blog_link"); ?>">Next blog <i class="fas fa-arrow-right"></i></a>
	</div>
</section>

<?php get_footer(); ?>