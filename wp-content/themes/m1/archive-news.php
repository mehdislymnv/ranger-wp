<?php

    $news_page_id = 26;
    $post_per_page = 1;
    $post_type = 'news';
    $total_posts_count = (int)wp_count_posts($post_type)->publish;
    $current_page = (int)get_query_var('paged');
    $total_pages = (int)ceil($total_posts_count / $post_per_page);
    if ($current_page == 0 ) $current_page = 1;

    // http://ranger.sev/news/page/2/
    // get current page number
?>

<?php get_header() ?>

<?php 
    get_template_part( 'template-parts/page/breadcrumb', 'version1', [
        'page_title' => get_the_title($news_page_id)
    ]);
    // wp_reset_postdata();
    // wp_reset_query();

?>

<?php
    $post_arguments = [
        'post_type' => $post_type,
        'paged' => $paged,
        // 'post_status' => null,
        // 'post_status' => 'publish',
        'posts_per_page' => $post_per_page, //3 -1
    ];

    $posts_query = new WP_Query($post_arguments);

    // var_dump($posts_query->have_posts());
    // var_dump(have_posts());

    if ($posts_query->have_posts()): ?>

    <div id="rs-blog" class="rs-blog sec-spacer">
        <div class="container">
            <div class="row">

<?php
        while ($posts_query->have_posts()): $posts_query->the_post();

?>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="single-blog-slide">
                    <div class="images">
                        <a href="<?= the_permalink() ?>">
                            <img src="<?= the_post_thumbnail_url() ?>" alt="<?= the_title() ?>">
                        </a>
                    </div>
                    <div class="blog-details">
                        <span class="date">
                            <i class="fa fa-calendar-check-o"></i>
                            <?= the_field('news_date') ?>
                        </span>
                        <h3>
                            <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
                        </h3>
                        <p><?= the_excerpt(40) ?></p>
                        <div class="read-more">
                            <a href="<?= the_permalink() ?>">Read More</a>
                        </div>
                    </div>
                </div> 
            </div>
<?php 

        endwhile;
        ?>

            </div>
        </div>
    </div>
        <?php
        //wp_reset_postdata();
    endif;
?>

<!-- pagination -->
<?php if ($total_posts_count > $post_per_page): ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="default-pagination text-center">
                <ul>
                    <?php if ($current_page > 1): ?>
                        <li><a href="/news/page/<?= $current_page - 1 ?>"><i class="fa fa-angle-left"></i>Previous</a></li>
                    <?php endif; ?>
                    <?php for($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="<?= $current_page == $i ? 'active' : '' ?>">
                            <a href="/news/page/<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                    <?php if ($current_page != $total_pages): ?>
                        <li>
                            <a href="/news/page/<?= $current_page + 1 ?>">Next<i class="fa fa-angle-right"></i></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer() ?>