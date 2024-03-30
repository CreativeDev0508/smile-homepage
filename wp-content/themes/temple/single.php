<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
	?>

	<section class="pageindex">
		<picture class="pageindex-bg">
			<source media="(min-width:641px)" srcset="<?php echo T_DIRE_URI; ?>/assets/img/blog/pageindex.jpg">
			<source media="(max-width:640px)" srcset="<?php echo T_DIRE_URI; ?>/assets/img/blog/pageindex-sp.jpg">
			<img src="<?php echo T_DIRE_URI; ?>/assets/img/blog/pageindex.jpg" alt="">
		</picture>
		<div class="pageindex-title">
			<h2 class="lead">お知らせ・事例</h2>
			<h3 class="sub">News & Example</h3>
		</div>
	</section>

	<section class="breadcrumbs">
		<div class="container">
			<ol>
				<li><a href="<?php echo HOME; ?>">TOP</a></li>
				<li><a href="<?php echo HOME . 'blog/'; ?>">お知らせ・事例</a></li>
				<li><?php the_title(); ?></li>
			</ol>
		</div>
	</section>

	<section class="p-example">
		<div class="container">
			<div class="p-example-single">
				<div class="single-meta">
					<?php $blog_cats = get_the_terms(get_the_ID(), 'category'); ?>
					<?php if( $blog_cats ) : ?>
						<div class="label"><?php echo $blog_cats[0]->name; ?></div>
					<?php endif; ?>
					<time class="date"><?php the_time("Y/m/d"); ?></time>
					<h3 class="title"><?php the_title(); ?></h3>
				</div>
				<?php $thumbs = get_field('thumbs'); ?>
				<?php if( $thumbs ) : ?>
					<div class="single-swiper">
						<div class="swiper swiper-main">
							<div class="swiper-wrapper">
								<?php foreach ($thumbs as $thumb) : ?>
									<div class="swiper-slide">
										<figure class="thumb">
											<img src="<?php echo esc_url($thumb['sizes']['medium']); ?>" alt="<?php echo esc_html($thumb['title']); ?>">
										</figure>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="swiper swiper-thumbs">
							<div class="swiper-wrapper">
								<?php foreach ($thumbs as $thumb) : ?>
									<div class="swiper-slide">
										<figure class="thumb">
											<img src="<?php echo esc_url($thumb['sizes']['thumb']); ?>" alt="<?php echo esc_html($thumb['title']); ?>">
										</figure>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<div class="single-content"><?php the_content(); ?></div>
				<div class="single-control">
					<a href="<?php echo HOME . 'blog/' ?>" class="link-btn">
						<span>一覧に戻る</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template', 'parts/access'); ?>

	<?php get_template_part('template', 'parts/instagram'); ?>

	<?php get_template_part('template', 'parts/contact'); ?>

	<?php
		endwhile;
	endif;
	?>

<?php get_footer();?>
