<?php
/**
 * The template for displaying the footer
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package devitm-theme
 * @since DevITM 1.0.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/header/site-header' ); ?>