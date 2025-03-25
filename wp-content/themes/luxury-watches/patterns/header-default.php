<?php
/**
 * Header Default
 * 
 * slug: luxury-watches/header-default
 * title: Header Default
 * categories: luxury-watches
 */

return array(
    'title'      =>__( 'Header Default', 'luxury-watches' ),
    'categories' => array( 'luxury-watches' ),
    'content'    => '<!-- wp:group {"backgroundColor":"accent","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-accent-background-color has-background"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"2px"}},"className":"wow fadeInDown","fontSize":"medium","fontFamily":"barlowcondensed"} -->
<p class="has-text-align-center wow fadeInDown has-barlowcondensed-font-family has-medium-font-size" style="letter-spacing:2px"><strong>'. esc_html__('FREE HEAVY SHIPPING ON ORDER OVER $200','luxury-watches') .'</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mainheader  wow fadeInDown","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group mainheader wow fadeInDown"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"is-vertically-aligned-top menu-box"} -->
<div class="wp-block-column is-vertically-aligned-center is-vertically-aligned-top menu-box" style="flex-basis:40%"><!-- wp:navigation {"className":"head-nav","layout":{"type":"flex","justifyContent":"left"},"fontFamily":"barlowcondensed"} -->
<!-- wp:navigation-link {"label":"HOME","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"ABOUT US","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"WATCHES","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"CONTACT US","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"GET PRO","url":"https://www.wpradiant.net/products/watch-store-wordpress-theme","kind":"custom","className":"getpro"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontFamily":"barlowcondensed"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"searchfeild-inner"} -->
<div class="wp-block-column is-vertically-aligned-center searchfeild-inner" style="flex-basis:40%"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:image {"align":"center","id":7,"width":30,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/user.png" alt="" class="wp-image-7" style="width:30px" width="30"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:image {"align":"center","id":6,"width":40,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/cart.png" alt="" class="wp-image-6" style="width:40px" width="40"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);