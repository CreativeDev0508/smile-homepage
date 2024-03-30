<?php
	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$work_custom_category = get_query_var('work_custom_category') ? get_query_var('work_custom_category') : "100";
?>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
	?>

<section class="pageindex">
	<div class="container">
		<picture class="pageindex-bg">
			<source media="(min-width:641px)" srcset="<?php echo T_DIRE_URI; ?>/assets/img/work/pageindex.png">
			<source media="(max-width:640px)" srcset="<?php echo T_DIRE_URI; ?>/assets/img/work/pageindex-sp.png">
			<img src="<?php echo T_DIRE_URI; ?>/assets/img/work/pageindex.png" alt="">
		</picture>
		<div class="pageindex-title section-title">
			<h3 class="sub">EXAMPLE</h3>
			<h2 class="lead">施工事例</h2>
		</div>
	</div>
</section>

	<section class="breadcrumbs">
		<div class="container">
			<ol>
				<li><a href="<?php echo HOME; ?>">TOP</a></li>
				<li>施工事例</li>
				<li><?php the_title(); ?></li>
			</ol>
		</div>
	</section>

	<section class="p-example">
		<div class="container">
			<div class="p-example-single">
				<div class="single-meta">
					<div class="work-concept">
						<time class="date">
							<?php the_time("Y/m/d"); ?>
						</time>
						<p class="label">
							<?php $cat = get_the_terms(get_the_ID(), 'custom_category');?>
							<?php if($cat): ?>
								<?php echo $cat[0]->name; ?>
							<?php endif;?>
						</p>
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
				<div class="work-content">
					<div class="work-item">
						<div class="work-item-left">
						内容
						</div>
						<div class="work-item-right">
							<p class="m-text"><?php echo get_field('request');?></p>
						</div>
					</div>
					<!-- <h3 class="mx-text">
						施工事例データ
					</h3>
					<div class="work-item">
						<div class="work-item-left">
						施工事例
						</div>
						<div class="work-item-right">
							<p class="m-text"><?php echo get_field('example');?></p>
						</div>
					</div>
					<div class="work-item">
						<div class="work-item-left">
						工事期間
						</div>
						<div class="work-item-right">
							<p class="m-text"><?php echo get_field('period');?></p>
						</div>
					</div>
					<div class="work-item">
						<div class="work-item-left">
						使用商材
						</div>
						<div class="work-item-right">
							<p class="m-text"><?php echo get_field('use');?></p>
						</div>
					</div> -->
				</div>
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
			<h3 class="sub">EXAMPLE</h3>
			<h2 class="lead">施工事例</h2>
			</div>
			<div class="related-layout">
			<?php
				$args = array(
					'post_type' => 'work',
					'orderby' => 'date',
					'post_status' => 'publish',
					'order' => 'DESC',
					'paged' => $paged,
					'posts_per_page' => -1,
				);

				if (!empty($work_custom_category) && ($work_custom_category != 100)) {
					$args['tax_query'] = array(
						array(
							'taxonomy' => 'custom_category',
							'field' => 'term_id', 
							'terms' => $work_custom_category,
						),
					);
				}

				$post_query = new WP_Query( $args );              
				if ( $post_query-> have_posts() ) :
					
				?>
				<div class="news-swiper-slider">
					<div class="swiper work-related-swiper">
						<div class="swiper-wrapper">
							<?php
								while( $post_query->have_posts() ) : $post_query->the_post();
								$cat = get_the_terms(get_the_ID(), 'custom_category'); 
							?>
								<div class="swiper-slide">
									<div class="news-item">
										<?php $thumbs = get_field('thumbs'); ?>
										<?php if( $thumbs ) : ?>
										<a href="<?php the_permalink(); ?>" class="thumb work-thumb">
											<img src="<?php echo esc_url($thumbs[0]['sizes']['small']); ?>"
												alt="<?php echo esc_html($thumbs[0]['title']); ?>">
										</a>
										<?php endif; ?>
										<div class="content">
											<div class="work-concept">
												<time class="date">
													<?php the_time("Y/m/d"); ?>
												</time>
												<p class="label">
													<?php echo $cat[0]->name; ?>
												</p>
											</div>
											<h4 class="title">
												<a href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a>
											</h4>
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
