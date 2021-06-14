<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package psd2css
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'psd2css' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="container">
            <div class="site-branding">
                <?php if (is_front_page()) { ?>
                <h1>
                    <a href="<?php echo site_url(); ?>">
                        <?php getSvg('logo'); ?>
                    </a>
                </h1>
                <?php } else { ?>
                <a href="<?php echo site_url(); ?>">
                    <?php getSvg('logo'); ?>
                </a>
                <?php } ?>
            </div><!-- .site-branding -->
        </div>
	</header><!-- #masthead -->
