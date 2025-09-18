<?php 

if ( post_password_required() ) {
	return;
}

if ( have_comments() ) : ?>

	<!-- .comments-container -->
	
	<?php 
endif;

if ( ! comments_open() && ! is_page() ) : ?>

	<div class="comments-container">
	
		<div class="comments-inner">

			<p class="no-comments"><?php _e( 'Comments are closed.', 'fukasawa' ); ?></p>
		
		</div>
		
	</div>
	
	<?php
endif;

if ( comments_open() ) echo '<div class="respond-container">';

comment_form();

if ( comments_open() ) echo '</div><!-- .respond-container -->';

?>