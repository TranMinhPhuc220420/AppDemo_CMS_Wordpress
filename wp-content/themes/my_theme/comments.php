<!-- Comment -->
<div class="comment shadow">
    <h5>Bình luận:</h5>
	
		<?php
			
			wp_list_comments(
				array(
					'avatar' => 120,
					'style' => 'div'
				)
			)
			
		?>
		
		<?php
			if(comments_open()){
				comment_form(
					array(
						'class_form' => '',
						'title_reply_before' => '<h2 id=""> ',
						'title_reply_after' => '</h2>'
					)
				);
			}
		?>
	
    <ul class="bg-circle">
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<!-- /Comment -->