<?php

$custom_terms = get_terms('danhmuc_sanpham');
$args = array(
    'post_type' => 'san_pham',
    'tax_query' => array(
        array(
            'taxonomy' => 'danhmuc_sanpham',
            'field' => 'slug',
            'terms' => $custom_terms[0]->slug, // or the category name e.g. Germany
        ),
    )
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        ?>

        <a href="<?php the_permalink();?>" title="<?php the_title(); ?>">

            <h3><?php the_title(); ?></h3>

        </a>
        <?php
    }
}
wp_reset_postdata();
?>