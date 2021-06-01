<?php get_header(); ?>



<?php
    if(have_posts()):
        while(have_posts()):the_post();
		get_template_part('template-parts/page/breadcrumb', null, [
			'page_title' => get_the_title()
		]);

		?>

 
        <!-- Blog Single Start Here -->
		<div class="single-blog-details sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
						<div class="single-image">
							<img src="<?= the_post_thumbnail_url()?>" alt="single">
						</div>
						<h3><?= get_the_title( ) ?></h3>
						
						<blockquote>
							<i class="fa fa-quote-left" aria-hidden="true"></i>
							<?=get_the_excerpt() ?>
						</blockquote>
                        <?php the_content() ?>
						
						<div class="share-section">
							<div class="row">
								<div class="col-sm-6 col-xs-12 life-style">
									<span class="author"> 
										<a href="<?= the_field("new_source_url") ?>" target='_blank'><i class="fa fa-user-o" aria-hidden="true" ></i>
                                Source</a>
									</span> 
									<span class="comment"> 
										<a href="#"> 
											<i class="fa fa-commenting-o" aria-hidden="true"></i> 12
										</a>
									</span>
									<span class="date">
										<i class="fa fa-calendar" aria-hidden="true"></i> 
                                        <?= the_field('news_date') ?>
									</span>
									<span class="cat">
										<a href="#"><i class="fa fa-folder-o" aria-hidden="true"></i> Life Style </a>
									</span>
								</div>
								<div class="col-sm-6 col-xs-12">
									<ul class="share-link1">
										<li><a href="#"> Tags:</a></li>
										<li><a href="#"> Football</a></li>
										<li><a href="#"> Club</a></li>
										<li><a href="#"> Sports</a></li>
									</ul>
								</div>
							</div>
						</div>


						                                
					</div>
                    <div class="col-md-3 col-sm-12">
                        <?php  get_template_part( 'template-parts/sidebars/sidebar', 'news' ) ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Single End Here -->




<!-- Club Section Start -->

<div class="rs-club sec-spacer">
			<div class="container">
                <h3 class="title-bg"><?= the_title() ?> </h3>
				<div class="row">
					<div class="col-md-6 col-ms-12">
						<div class="rs-club-text">
						<?php the_content() ?>
						</div>
					</div>
					<div class="col-md-6  col-ms-12">
						<div class="rs-club-image">
							<?php the_post_thumbnail()?>
							<!-- <img src="images/breadcrumbs/club.jpg" alt=""> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Club Section End -->
		<?php
        endwhile;

    else:
        get_template_part( 'template-parts/common/content','none' );
    endif;
    

?>
<?php get_footer()?>
