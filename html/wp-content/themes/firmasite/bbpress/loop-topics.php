<?php

/**
 * Topics Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_topics_loop' ); ?>

<div id="bbp-forum-<?php bbp_forum_id(); ?>" class="bbp-topics">

	<div class="bbp-body modal firmasite-modal-static no-margin-bot">
   		<div class="modal-dialog no-margin-bot">
        <div class="modal-content">
		<?php while ( bbp_topics() ) : bbp_the_topic(); ?>

			<?php bbp_get_template_part( 'loop', 'single-topic' ); ?>

		<?php endwhile; ?>
        </div>
        </div>
	</div>


</div><!-- #bbp-forum-<?php bbp_forum_id(); ?> -->

<?php do_action( 'bbp_template_after_topics_loop' ); ?>
