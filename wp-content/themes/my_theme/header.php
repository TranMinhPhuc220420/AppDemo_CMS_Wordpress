<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		wp_head();
	?>
</head>

<body>
<!-- Load page -->
<div class="preload load">
    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<!-- /Load page -->

<header>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
				<?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                ?>
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
							
                <?php
                    wp_nav_menu(
                        array(
                            'menu'           => 'primary',
                            'container'      => '',
                            'theme_location' => 'primary',
                            'items_wrap'     => ' <ul id="" class="navbar-nav mr-auto mt-2 mt-lg-0"> %3$s </ul>'
                        )
                    );
                ?>

                <form action="#" class="form-inline my-2 my-lg-0">
                    <input name="key" class="form-control mr-sm-2" type="text" placeholder="Tìm theo tên bài...">
                    <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
                </form>
                
            </div>
        </div>
    </nav>
</header>
<!-- /Header -->

