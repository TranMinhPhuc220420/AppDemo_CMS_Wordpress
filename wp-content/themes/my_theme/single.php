<?php
	get_header();
?>

<!-- Content -->
<div class="content">
    <div class="container">
        <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    get_template_part('template-parts/content', 'article');
                }
            }
        ?>
    </div>
</div>
<!-- /Content -->

<?php
	get_footer();
?>