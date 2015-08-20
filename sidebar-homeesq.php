<?php
/**
 * Home Esquerda sidebar
 * @package WordPress
 * @subpackage direitoacidade
 */
if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div class="widget-area">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- .widget-area -->
<?php endif; ?>
