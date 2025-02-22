<?php
function prepare_image_html( $image ) {
	return '<a href="' . esc_attr( $image['src_full'] ?? '' ) . '" >' . esc_attr( $image['title'] ?? '' ) . '<img loading="lazy" decoding="async" alt="' . esc_attr( $image['alt'] ?? '' ) . '"  src="' . esc_attr( $image['src_thumbnail'] ?? '' ) . '" srcset="' . esc_attr( $image['srcset'] ?? '' ) . '" /></a>';
}


if ( isset( $images ) && is_array( $images ) ) {

	// echo '<pre>';
	// print_r( $images );
	// echo '</pre>';

	?>
	<div id="infinity-gallery" class="style-10">
		<?php
		foreach ( $images as $i => $image ) {
			echo prepare_image_html( $image );
		}
		?>
	</div>
	<?php
}
