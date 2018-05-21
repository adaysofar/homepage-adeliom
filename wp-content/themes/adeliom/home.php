<?php
/*
Template Name: Home
*/

get_header();

global $post;
$banner_icon = get_field('banner_icon');
$banner_intro = get_field('banner_intro');
$banner_txt = get_field('banner_txt');
$banner_button_txt = get_field('banner_button_txt');
$banner_button_link = get_field('banner_button_link', false, false);
$cta_icon = get_field('cta_icon');
$cta_intro = get_field('cta_intro');
$cta_txt = get_field('cta_txt');
$cta_button_txt = get_field('cta_button_txt');
$cta_button_link = get_field('cta_button_link', false, false);
?>

<div class="wrap">
	<main id="main" role="main">

		<div id="banner">
			<div class="container">
				<div class="intro col-12 col-md-6">
					<div class="row">
						<div class="col-0 col-lg-2"><img src="<?php echo $banner_icon['url'];?>" alt="<?php echo $banner_icon['alt'];?>"></div>
						<div class="col-12 col-lg-10"><?php echo $banner_intro; ?></div>
					</div>
					<hr>
				</div>
				<div class="txt col-12 col-md-6 col-lg-4">
					<?php echo $banner_txt; ?>
					<a href="<?php echo get_the_permalink($banner_button_link); ?>"><?php echo $banner_button_txt; ?></a>
				</div>
			</div>
		</div>

		<div class="container">

			<div id="cta" class="row">
				<div class="intro col-12 col-md-6">
					<div class="row">
						<div class="col-3"><img src="<?php echo $cta_icon['url'];?>" alt="<?php echo $cta_icon['alt'];?>"></div>
						<div class="col-12 col-md-9"><?php echo $cta_intro; ?></div>
					</div>
				</div>
				<div class="txt col-12 col-md-6">
					<?php echo $cta_txt; ?>
				</div>
				<a href="<?php echo get_the_permalink($cta_button_link); ?>"><?php echo $cta_button_txt; ?></a>
			</div>

			<div id="refs" class="row">
				<h2 class="col-12">Nos références</h2>
				<?php
					$args = array( 'posts_per_page' => 3 );
					$lastposts = get_posts( $args );
					foreach ( $lastposts as $post ) :
						setup_postdata( $post ); ?>
						<div class="col-12 col-md-4">
							<div class="ref">
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="">
									<div class="meta">
										<h3><?php the_title(); ?></h3>
										<p><i class="far fa-calendar-alt"></i> <?php echo the_field('project_date'); ?></p>
										<p><i class="fas fa-euro-sign"></i> <?php echo the_field('project_cost'); ?></p>
									</div>
								</a>
							</div>
						</div>
					<?php endforeach;
					wp_reset_postdata();
				?>
				<a class="link-ref" href="/nos-references">Voir tous nos projets</a>
			</div>
		</div>
	</main>
</div>
<div class="container">

<?php get_footer(); ?>