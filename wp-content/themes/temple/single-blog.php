<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
	?>

<section class="pageindex">
	<div class="container">
		<picture class="pageindex-bg">
			<source media="(min-width:641px)" srcset="<?php echo T_DIRE_URI; ?>/assets/img/blog/pageindex.png">
			<source media="(max-width:640px)" srcset="<?php echo T_DIRE_URI; ?>/assets/img/blog/pageindex-sp.png">
			<img src="<?php echo T_DIRE_URI; ?>/assets/img/blog/pageindex.png" alt="">
		</picture>
		<div class="pageindex-title section-title">
			<h3 class="sub">NEWS</h3>
			<h2 class="lead">お知らせ</h2>
		</div>
	</div>
</section>

	<section class="breadcrumbs">
		<div class="container">
			<ol>
				<li><a href="<?php echo HOME; ?>">TOP</a></li>
				<li>お知らせ</li>
				<li><?php the_title(); ?></li>
			</ol>
		</div>
	</section>

	<section class="p-example">
		<div class="container">
			<div class="p-example-single">
				<div class="single-meta">
					<div class="blog-concept">
						<time class="date">
							<?php the_time("Y/m/d"); ?>/
						</time>
						<?php $blog_cats = get_the_terms(get_the_ID(), 'blog_category'); ?>
						<?php if( $blog_cats ) : ?>
						<p class="label">
							<?php echo $blog_cats[0]->name; ?>
						</p>
						<?php endif; ?>
					</div>
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
				<div class="single-content m-text"><?php the_content(); ?></div>
				<div class="single-control">
					<a href="<?php echo HOME . 'blog/' ?>" class="link-btn">
						<span>一覧に戻る</span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="p-related-article">
		<div class="container">
			<div class="section-title">
				<p class="sub">NEWS</p>
				<h3 class="lead">お知らせ</h3>
			</div>
			<div class="related-layout">
			<?php
				$args = shortcode_atts( array(
					'count' => -1,
					'orderby' => 'post_date',
					'order' => 'DESC',
				), $attr );
			
			ob_start();

			$post_args = [
				'post_type' => 'blog',
				'post_status' => 'publish',
				'posts_per_page' => $args['count'],
				'orderby' => $args['orderby'],
				'order' => $args['order'],
			];

			$post_query = new WP_Query( $post_args );
			?>

			<?php if( $post_query->have_posts() ) : ?>
				<div class="news-swiper-slider">
					<div class="swiper news-related-swiper">
						<div class="swiper-wrapper">
							<?php while( $post_query->have_posts() ) : $post_query->the_post(); ?>
								<div class="swiper-slide">
									<div class="news-item">
										<?php $thumbs = get_field('thumbs'); ?>
										<?php if( $thumbs ) : ?>
											<a href="<?php the_permalink(); ?>" class="thumb">
												<img src="<?php echo esc_url($thumbs[0]['sizes']['small']); ?>" alt="<?php echo esc_html($thumbs[0]['title']); ?>">
											</a>
										<?php endif; ?>
										<div class="content">
											<div class="blog-concept">
												<time class="date"><?php the_time("Y/m/d"); ?>/</time>
												<?php $blog_cats = get_the_terms(get_the_ID(), 'blog_category'); ?>
												<?php if( $blog_cats ) : ?>
													<p class="label"><?php echo $blog_cats[0]->name; ?></p>
												<?php endif; ?>
											</div>
											<h4 class="title">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h4>
											<a href="<?php the_permalink(); ?>" class="link-btn btn-main">
												<span>詳しくみる</span>
											</a>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			</div>
		</div>
	</section>

	<?php get_template_part('template', 'parts/contact'); ?>

	<?php
		endwhile;
	endif;
	?>

<?php get_footer();?>
