<?php 

add_action( 'admin_menu', 'wardrobe_fashion_stylist_menu' );
add_action( 'admin_init', 'wardrobe_fashion_stylist_register_settings' );

function wardrobe_fashion_stylist_menu() {
    add_menu_page(
        'Theme Options',
        'Theme Option',
        'manage_options',
        'wardrobe_fashion_stylist_theme_option',
        'wardrobe_fashion_stylist_preloader_page_callback',
        'dashicons-screenoptions',
        30
    );
}

function wardrobe_fashion_stylist_register_settings() {
    register_setting( 'wardrobe_fashion_stylist_preloader_settings', 'wardrobe_fashion_stylist_preloader_toggle' );
}

function wardrobe_fashion_stylist_preloader_page_callback() {
    ?>
    <div class="menu-box">
        <h2><?php echo esc_html('Preloader Setting','plumber-works'); ?></h2>
        <form method="post" action="options.php">
            <?php settings_fields( 'wardrobe_fashion_stylist_preloader_settings' ); ?>
            <?php $toggle = get_option( 'wardrobe_fashion_stylist_preloader_toggle', 'off' ); ?>
            <label for="wardrobe_fashion_stylist_preloader_toggle">
                <input type="checkbox" id="wardrobe_fashion_stylist_preloader_toggle" name="wardrobe_fashion_stylist_preloader_toggle" <?php checked( $toggle, 'on' ); ?> />
                <?php echo esc_html('Enable Preloader','plumber-works'); ?>
            </label>
            <?php submit_button(); ?>
        </form>
    </div>
    


    <?php
}
