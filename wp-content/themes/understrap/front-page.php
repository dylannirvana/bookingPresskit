<?php
/**
* Template Name: Empty Page Template
*
* Template for displaying a page just with the header and footer area and a "naked" content area in between.
* Good for landingpages and other types of pages where you want to add a lot of custom markup.
*
* @package understrap
*/

get_header(); ?>

<!-- These are the scenes -->
  <!-- Photo -->
  <?php get_template_part( "custom-templates/cover") ?>
  <!-- Bio -->
  <?php get_template_part( "custom-templates/card") ?>
  <!-- Booking -->
  <?php get_template_part( "custom-templates/square") ?>
  <!-- Music -->
  <?php get_template_part( "custom-templates/music") ?>
  <!-- Tickets -->
  <?php get_template_part( "custom-templates/shows") ?>
  <!-- Social -->
  <?php get_template_part( "custom-templates/instagram") ?>
  <!-- Fixed logo -->
  <?php get_template_part( "custom-templates/logo" ) ?>

  <!-- END scenes  -->

<?php get_footer(); ?>
