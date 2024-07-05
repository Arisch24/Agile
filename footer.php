<?php
/**
 * Footer
 *
 * The footer template.
 *
 * @since   1.0.0
 * @package Agile
 */

do_action( 'ag_after_main_inner' ); 
?>

</main>

<?php do_action( 'ag_before_footer' ); ?>

<footer id="ag-footer" class="ag-site-footer">
	<div class="ag-container">
		
	</div>
</footer>

<?php do_action( 'ag_after_footer' ); ?>

<?php wp_footer(); ?>

<?php do_action( 'ag_body_close' ); ?>

	</body>
</html>
