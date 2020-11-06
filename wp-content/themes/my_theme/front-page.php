<!-- Header -->
<?php
	get_header();
?>

<!-- Carousel -->
<div id="carousel" class="slide carousel" style="padding-top: 74px;">
    <ol class="carousel-indicators">
        <?php
            $slideTo = 0;
            $args    = array(
                'post_type'      => 'post',
                'orderby'        => 'ID',
                'post_status'    => 'publish',
                'order'          => 'DESC',
                'posts_per_page' => - 1 // this will retrive all the post that is published
            );
            $result  = new WP_Query( $args );
            if ( $result->have_posts() ) : ?>
                <?php while ( $result->have_posts() ) : $result->the_post(); ?>


            <li data-target="#carousel" data-slide-to="<?php echo $slideTo ++; ?>"
                class=" <?php echo $slideTo == 0 ? "active" : "" ?>"></li>
                
                <?php endwhile; ?>
            <?php endif; ?>
    </ol>

    <div class="carousel-inner">
			<?php
				$active = false;
				$args   = array(
					'post_type'      => 'post',
					'orderby'        => 'ID',
					'post_status'    => 'publish',
					'order'          => 'DESC',
					'posts_per_page' => - 1 // this will retrive all the post that is published
				);
				$result = new WP_Query( $args );
				if ( $result->have_posts() ) : ?>
					<?php while ( $result->have_posts() ) : $result->the_post(); ?>

                <div class="carousel-item <?php echo ! $active ? "active" : "" ?>">
                    <img src=" <?php echo get_the_post_thumbnail_url();
											$active = true ?>" class="w-100" alt="">
                    <div class="carousel-caption">
                        <h5>
                            <a href="<?php echo get_permalink() ?>">
															<?php echo the_title(); ?>
                            </a>
                        </h5>
                        <p> <?php the_excerpt() ?></p>
                    </div>
                </div>
					
					
					<?php endwhile; ?>
				<?php endif;
				wp_reset_postdata(); ?>

    </div>

    <a class="carousel-control-prev control" href="#carousel" role="button" data-slide="prev">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </a>
    <a class="carousel-control-next control" href="#carousel" role="button" data-slide="next">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </a>
    <svg viewBox="0 0 1440 142" fill="none" xmlns="http://www.w3.org/2000/svg" class="down-svg">
        <path d="M0 133.96V59.3599C26.6 85.6599 79.5 65.0599 132.5 59.3599C185.8 54.0599 238.5 123.2 291.5 112.5C344.8 102.2 427 -5.50001 480 37.5C533.3 80.5 621 132.2 674 100.5C727.3 68.2 778.5 29.2 831.5 23.5C884.8 18.2 933.5 42.7 986.5 80C1039.8 117.7 1097 79.8 1150 37.5C1203.3 -5.20001 1299 42.8 1352 37.5C1405.3 31.8 1440 -20.5 1440 9.50001V256.66H1413.3C1386.7 256.66 1333 256.66 1280 256.66C1226.7 256.66 1173 256.66 1120 256.66C1066.7 256.66 1013 256.66 960 256.66C906.7 256.66 853 256.66 800 256.66C746.7 256.66 693 256.66 640 256.66C586.7 256.66 533 256.66 480 256.66C426.7 256.66 373 256.66 320 256.66C266.7 256.66 213 256.66 160 256.66C106.7 256.66 53 256.66 27 256.66H0V133.96Z"
              fill="#4b00ff40"></path>
    </svg>
    <svg viewBox="0 0 1440 135" fill="none" xmlns="http://www.w3.org/2000/svg" class="down-svg">
        <path d="M0 133.96V59.3599C26.6 85.6599 79.5 65.0599 132.5 59.3599C185.8 54.0599 238.5 123.2 291.5 112.5C344.8 102.2 427 -5.50001 480 37.5C533.3 80.5 621 132.2 674 100.5C727.3 68.2 778.5 29.2 831.5 23.5C884.8 18.2 933.5 42.7 986.5 80C1039.8 117.7 1097 79.8 1150 37.5C1203.3 -5.20001 1299 42.8 1352 37.5C1405.3 31.8 1440 -20.5 1440 9.50001V256.66H1413.3C1386.7 256.66 1333 256.66 1280 256.66C1226.7 256.66 1173 256.66 1120 256.66C1066.7 256.66 1013 256.66 960 256.66C906.7 256.66 853 256.66 800 256.66C746.7 256.66 693 256.66 640 256.66C586.7 256.66 533 256.66 480 256.66C426.7 256.66 373 256.66 320 256.66C266.7 256.66 213 256.66 160 256.66C106.7 256.66 53 256.66 27 256.66H0V133.96Z"
              fill="#f7f7f9"></path>
    </svg>
    <ul class="bg-bubble">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<!-- /Carousel -->

<!-- Content -->
<div class="content">
    <!-- New Post -->
    <section class="new-posts">
        <div class="container">
            <h5 class="title mb-md-5">
                Tin tức mới
            </h5>
            <div class="row">
                <?php
                $args   = array(
                    'post_type'      => 'post',
                    'orderby'        => 'ID',
                    'post_status'    => 'publish',
                    'order'          => 'DESC',
                    'posts_per_page' => - 1 // this will retrive all the post that is published
                );
                $result = new WP_Query( $args );
                if ( $result->have_posts() ) : ?>
                    <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                <div class="col-md-4 mb-md-5 mr-xs-2" data-scroll="">

                    <div class="card post-medium post shadow" data-scroll="">
                        <div class="inner">
                            <a href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-post" alt="">
                            </a>

                            <figcaption>
                                <button class="btn btn-danger btn-quick-view" data-idpost="1">
                                    Xem nhanh
                                </button>
                            </figcaption>

                        </div>
                        <div class="card-body post-body">
                            <h5 class="post-title hv-l">
                                <a href="<?php echo get_permalink(); ?>">
                                                                            <?php echo get_the_title() ?>
                                </a>
                            </h5>
                            <p class="card-text post-sapo">
                                                                    <?php the_excerpt() ?>
                            </p>
                            <p class="post-date-up">
                                <i class="fa fa-calendar-alt" aria-hidden="true"></i><?php the_date() ?>
                            </p>
                        </div>
                    </div>
                </div>
                    <?php endwhile; ?>
                <?php endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
</div>
<!-- /Content -->
<?php
	get_footer();
?>