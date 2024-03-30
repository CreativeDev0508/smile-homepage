<?php

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$blog_category_slug = get_query_var('blog_category') ? get_query_var('blog_category') : "100";
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
		</ol>
	</div>
</section>

<?php
		$args = [
			'post_type' => 'blog',
			'post_status' => 'publish',
			'paged' => $paged,
			'posts_per_page' => 6,
			'orderby' => 'post_date',
			'order' => "DESC",
		];

		$tax_query = [];

		if( !empty($blog_category_slug) && ($blog_category_slug != 100)) {
			$tax_query[] = [
				'taxonomy' => 'blog_category',
				'field' => 'slug',
				'terms' => $blog_category_slug
			];
		}

		if ( !empty($tax_query) ) {
			$args['tax_query'] = $tax_query;
		}
	?>

<?php $result = new WP_Query( $args ); ?>

<section class="p-news">
	<div class="container">
		<div class="news-meta">
			<?php
				$blog_all_cats = get_terms([
					"taxonomy" => 'blog_category',
					"hide_empty" => false,
					"parent" => 0,
					"orderby"   => "id",
					"order"     => "ASC" 
				]);
			?>
			<?php if( !empty( $blog_all_cats ) ) : ?>
			<ul class="cat-list">
				<li>
					<a href="<?php echo esc_url(home_url('/')); ?>blog" class="link-btn btn-main"><span>ALL</span></a>
				</li>
				<?php foreach ($blog_all_cats as $cat) : ?>
				<li>
					<a href="<?php echo esc_url( get_term_link( $cat->term_id, 'blog_category' ) ); ?>"
						class="link-btn"><span>
							<?php echo $cat->name; ?>
						</span>
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?>
		</div>
		<?php if( $result->have_posts() ) : ?>
		<div class="news-list">
			<?php while ( $result->have_posts() ) : $result->the_post(); ?>
			<div class="news-item">
				<?php $thumbs = get_field('thumbs'); ?>
				<?php if( $thumbs ) : ?>
				<a href="<?php the_permalink(); ?>" class="thumb">
					<img src="<?php echo esc_url($thumbs[0]['sizes']['small']); ?>"
						alt="<?php echo esc_html($thumbs[0]['title']); ?>">
				</a>
				<?php endif; ?>
				<div class="content">
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
					<h4 class="title">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h4>
					<a href="<?php the_permalink(); ?>" class="link-btn btn-main">
						<span>詳しくみる</span>
					</a>
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