<?php

/*
    =================================
        POLYLANG TRANSLATION FILES
    =================================
*/

require get_template_directory() . '/inc/template/poly-lang-translations-words.php';


/**
 * Output's localized string if polyLang exists or output's not translated one as a fallback
 *  @param $string
 * @return void
 */
function pl_e( $string = '' ) {
	if ( function_exists( 'pll_e' ) ) {
        pll_e( $string );
    } else if ( function_exists( 'pll__' ) ) {
        echo pll__( $string );
    } else {
        echo $string;
    }
}


function pll_( $string = '' ) {
	if ( function_exists( 'pll__' ) ) {
		return pll__( $string );
	}
}


// these function prefixes can be either you are comfortable with.
function sunset_add_to_polylang_register() {
	global $translationWords;
	// Check for existing function and existing words to translate
	if ( function_exists( 'pll_register_string' ) && ! empty( $translationWords ) ) {
		foreach( $translationWords as $word ) {
			pll_register_string( '', $word, 'yes-soft', false );
		}
	}
}
add_action( 'after_setup_theme', 'sunset_add_to_polylang_register' );

