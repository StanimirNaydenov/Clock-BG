<?php
/**
 * Banner Section
 * 
 * slug: luxury-watches/banner
 * title: Banner
 * categories: luxury-watches
 */

return array(
    'title'      =>__( 'Banner', 'luxury-watches' ),
    'categories' => array( 'luxury-watches' ),
    'content'    => '<!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png","id":17,"dimRatio":0,"minHeight":600,"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"className":"wp-block-group alignfull"} -->
<main class="wp-block-cover alignfull wp-block-group" style="padding-top:0;padding-bottom:0;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-17" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"tagName":"main","align":"full","className":"wp-block-group alignfull wow fadeInUp","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull wow fadeInUp"><!-- wp:columns {"verticalAlignment":"center","align":"full","className":"slider-banner"} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center slider-banner"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"padding":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-left:var(--wp--preset--spacing--80);flex-basis:60%"><!-- wp:paragraph {"align":"left","textColor":"background","className":"has-background-color has-text-color has-upper-heading-font-size","fontSize":"normal","fontFamily":"robotoflex"} -->
<p class="has-text-align-left has-background-color has-text-color has-upper-heading-font-size has-robotoflex-font-family has-normal-font-size">'. esc_html__('LUXURY WATCHES','luxury-watches') .'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"600","letterSpacing":"1px"}},"textColor":"background","fontFamily":"barlowcondensed"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-barlowcondensed-font-family" style="font-size:40px;font-style:normal;font-weight:600;letter-spacing:1px">'. esc_html__('THE MOST LUXURIOUS WATCH BRAND','luxury-watches') .'<br>'. esc_html__('IN THE WORLD. A TIMELESS MASTERPIECE','luxury-watches') .'</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"primary","style":{"typography":{"letterSpacing":"1.5px"},"border":{"radius":"15px","width":"3px"}},"borderColor":"accent","className":"is-style-outline theme-btn","fontSize":"medium","fontFamily":"barlowcondensed"} -->
<div class="wp-block-button has-custom-font-size is-style-outline theme-btn has-barlowcondensed-font-family has-medium-font-size" style="letter-spacing:1.5px"><a class="wp-block-button__link has-primary-color has-accent-background-color has-text-color has-background has-border-color has-accent-border-color wp-element-button" href="#" style="border-width:3px;border-radius:15px"><strong>'. esc_html__('SHOP COLLECTION','luxury-watches') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group --></div></main>
<!-- /wp:cover -->',
);