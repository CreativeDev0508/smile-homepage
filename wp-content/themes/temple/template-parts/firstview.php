<?php 
  global $post, $wp_query;
  $page_title_jp = "";
  $page_title_en = "";
  if( is_archive() || is_category() || is_single() ) {
    $last_category = [];
    $query_categories = get_the_category();
    if(!empty($query_categories)) {
      $last_category = end(array_values($query_categories));
    }
    if (!empty($last_category)) {
      $page_title_jp = $last_category->name;
      $page_title_en = get_field('name-en', 'category_' . $last_category->term_id);
    }
  } elseif ( is_page() ) {
    $page_title_jp = get_the_title();
    $page_title_en = get_field('title-en');
  } elseif ( is_search() ) {
    $page_title_jp = get_search_query();
    $page_title_en = "Search";
  } elseif ( is_404() ) {
    $page_title_jp = "404";
    $page_title_en = "Page Not Found";
  }
?>

<section class="pageindex">
  <div class="wrapper">
    <div class="container">
      <div class="pageindex-title">
        <h3 class="lead"><?php echo $page_title_jp; ?></h3>
        <p class="sub"><?php echo $page_title_en; ?></p>
      </div>
    </div>
  </div>
</section>
