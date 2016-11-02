<?php
/**
 * The header for our theme.
 *
 * @link https://www.unocus.com
 *
 * @package Unocus
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '-', true, 'right' ); ?></title>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<meta name="description" content="<?php echo $description; ?>" />
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<!-- 顶部加载条 -->
	<div id="progress"></div>
<!-- 移动端导航 -->
  	<div id="mo-nav">
  		<?php wp_nav_menu( array( 'depth' => 2, 'theme_location' => 'primary', 'container' => false ) ); ?>
  	</div>

  	<div id="page" class="site wrapper">
  		
  	</div>