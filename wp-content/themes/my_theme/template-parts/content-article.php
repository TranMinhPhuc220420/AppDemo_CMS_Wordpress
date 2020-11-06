<!-- Content -->
<div class="content" style="margin: 200px 0;">
    <div class="container">

        <div class="post-detail">
            <p class="category"><?php the_category(); ?></p>
            <hr>
            <h1 class="post-title"> <?php the_title() ?> </h1>
            <p class="date-up" style="text-align: right; opacity: 0.7;">
							<?php the_date() ?>
							<?php the_tags( '<span class="tag"> <i class="fa fa-tag"></i>', '</span><span class="tag"> <i class="fa fa-tag"></i> ', '</span>' ); ?>

                <i class="fa fa-comment"></i>
                <?php
                if(!have_comments()){
                    echo comments_number();
                }else{
	                echo get_comment_count();
                }
                ?>
            </p>
					
            <?php
		        the_content();
	        ?>
        </div>

        <hr>
        
        <?php
            comments_template();
        ?>
    </div>
</div>
<!-- /Content -->
