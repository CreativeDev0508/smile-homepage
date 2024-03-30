<?php

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$work_custom_category = get_query_var('work_custom_category') ? get_query_var('work_custom_category') : "100";
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
		</ol>
	</div>
</section>

<section class="p-work">
	<div class="container">
		<div class="news-meta">
			<ul class="cat-list">
				<li>
					<a href="<?php echo esc_url(home_url('/')); ?>work" class="link-btn btn-main"><span>ALL</span></a>
				</li>
				<?php
					$args = array(
						'post_type' => 'work',
						'orderby' => 'post_date',
						'order'   => 'ASC',
						'taxonomy' => 'custom_category',
					);
			
					$cats = get_categories($args);
					foreach($cats as $cat): ?>
				<li>
					<a href="<?php echo esc_url(home_url('/')); ?>work?work_custom_category=<?php echo $cat->cat_ID; ?>"
						class="link-btn">
						<span>
							<?php echo $cat->name; ?>
						</span>
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="news-list">
			<?php
				$args = array(
					'post_type' => 'work',
					'orderby' => 'date',
					'post_status' => 'publish',
					'order' => 'DESC',
					'paged' => $paged,
					'posts_per_page' => 6,
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

				$result = new WP_Query( $args );              
				if ( $result-> have_posts() ) :
				while ( $result->have_posts() ) : 
					$result->the_post();    
					$cat = get_the_terms(get_the_ID(), 'custom_category');
					?>
				<div class="news-item">
					<?php $thumbs = get_field('thumbs'); ?>
					<?php if( $thumbs ) : ?>
					<a href="<?php the_permalink(); ?>" class="thumb">
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
			<?php
				endwhile;
				wp_reset_postdata(); 
				endif;
			?>	
		</div>
		<div class="wp-pagination">
			<?php if(function_exists('wp_pagenavi')) : ?>
			<?php wp_pagenavi(array('query' => $result)); ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_template_part('template', 'parts/contact'); ?>


<?php get_footer();?>