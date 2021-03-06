<?php
/**
 * Ribbon with right button section
 *
 * @package zerif-lite
 */

$zerif_ribbonright_text = get_theme_mod( 'zerif_ribbonright_text' );

$zerif_ribbonright_buttonlabel = get_theme_mod( 'zerif_ribbonright_buttonlabel' );

$zerif_ribbonright_buttonlink = get_theme_mod( 'zerif_ribbonright_buttonlink' );

/* For new users, add default values for the Ribbon section controls */
if ( ! zerif_check_if_old_version_of_theme() && current_user_can( 'edit_theme_options' ) ) {
	$zerif_ribbonright_text = get_theme_mod( 'zerif_ribbonright_text', __( 'Change this text in RightButton Ribbon','zerif-lite' ) );
	$zerif_ribbonright_buttonlabel = get_theme_mod( 'zerif_ribbonright_buttonlabel', __( 'Get in touch','zerif-lite' ) );
	$zerif_ribbonright_buttonlink = get_theme_mod( 'zerif_ribbonright_buttonlink', esc_url( admin_url( 'customize.php?autofocus&#91;control&#93;=zerif_ribbonright_buttonlink' ) ) );
}

if ( ! empty( $zerif_ribbonright_text ) ) {

	if ( ! empty( $zerif_ribbonright_buttonlabel ) && ! empty( $zerif_ribbonright_buttonlink ) ) {

		echo '<section class="purchase-now" id="ribbon_right">';

	} else {

		echo '<section class="purchase-now ribbon-without-button" id="ribbon_right">';

	}

	echo '<div class="container">';

	echo '<div class="row">';

	echo '<div class="col-md-9" data-scrollreveal="enter left after 0s over 1s">';

	echo '<h3 class="white-text">';

	echo wp_kses_post( $zerif_ribbonright_text );

	echo '</h3>';

	echo '</div>';

	if ( ! empty( $zerif_ribbonright_buttonlabel ) && ! empty( $zerif_ribbonright_buttonlink ) ) {

		echo '<div class="col-md-3" data-scrollreveal="enter right after 0s over 1s">';

		echo '<a href="' . esc_url( $zerif_ribbonright_buttonlink ) . '" class="btn btn-primary custom-button red-btn">' . wp_kses_post( $zerif_ribbonright_buttonlabel ) . '</a>';

		echo '</div>';

	} elseif ( is_customize_preview() ) {

		echo '<div class="col-md-3" data-scrollreveal="enter right after 0s over 1s">';

		echo '<a href="" class="btn btn-primary custom-button red-btn zerif_hidden_if_not_customizer"></a>';

		echo '</div>';

	}

	echo '</div>';

	echo '</div>';

	echo '</section>';

} elseif ( is_customize_preview() ) {

	$zerif_ribbonright_buttonlabel = get_theme_mod( 'zerif_ribbonright_buttonlabel' );

	$zerif_ribbonright_buttonlink = get_theme_mod( 'zerif_ribbonright_buttonlink' );

	if ( ! empty( $zerif_ribbonright_buttonlabel ) && ! empty( $zerif_ribbonright_buttonlink ) ) {

		echo '<section class="purchase-now zerif_hidden_if_not_customizer" id="ribbon_right">';

	} else {

		echo '<section class="purchase-now ribbon-without-button zerif_hidden_if_not_customizer" id="ribbon_right">';

	}

	echo '<div class="container">';

		echo '<div class="row">';

			echo '<div class="col-md-9" data-scrollreveal="enter left after 0s over 1s">';

				echo '<h3 class="white-text"></h3>';

			echo '</div>';

	if ( ! empty( $zerif_ribbonright_buttonlabel ) && ! empty( $zerif_ribbonright_buttonlink ) ) {


		echo '<div class="col-md-3" data-scrollreveal="enter right after 0s over 1s">';


		echo '<a href="' . esc_url( $zerif_ribbonright_buttonlink ) . '" class="btn btn-primary custom-button red-btn">' . wp_kses_post( $zerif_ribbonright_buttonlabel ) . '</a>';


		echo '</div>';


	} elseif ( is_customize_preview() ) {

		echo '<div class="col-md-3" data-scrollreveal="enter right after 0s over 1s">';


		echo '<a href="" class="btn btn-primary custom-button red-btn zerif_hidden_if_not_customizer"></a>';


		echo '</div>';

	}


	echo '</div>';


	echo '</div>';


	echo '</section>';

}


