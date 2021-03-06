<?php
/**
 * Front-end output for the widget.
 *
 * @package HelpHub
 */

?>
<?php
echo $args['before_widget']; // WPCS: XSS OK.
?>

<div class="info-box">
	<span class="dashicons
	<?php echo esc_attr( $instance['icon'] ); ?>
	"></span>
	<h3><?php echo esc_html( $instance['title'] ); ?></h3>
	<p><?php echo esc_html( $instance['description'] ); ?></p>

	<ul class="meta-list">
		<?php
		$menu_items = wp_get_nav_menu_items( $instance['menu'] );
		foreach ( $menu_items as $menu_item ) {
			printf(
				'<li><a href="%s">%s</a></li>',
				esc_url( $menu_item->url ),
				esc_html( $menu_item->title )
			);
		}
		?>
	</ul>

</div>


<?php
echo $args['after_widget']; // WPCS: XSS OK.
