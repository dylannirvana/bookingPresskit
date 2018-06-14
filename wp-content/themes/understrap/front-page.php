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
  <!-- <section class="panel "> -->
  <?php get_template_part( "custom-templates/cover") ?>
<!-- </section> -->
  <!-- Bio -->
  <!-- <section class="panel "> -->
  <?php get_template_part( "custom-templates/card") ?>
<!-- </section> -->
  <!-- Booking -->
  <!-- <section class="panel "> -->
  <?php get_template_part( "custom-templates/square") ?>
<!-- </section> -->
  <!-- Music -->
  <!-- <section class="panel two"> -->
  <?php get_template_part( "custom-templates/music") ?>
<!-- </section> -->
  <!-- Tickets -->
  <!-- <section class="panel three"> -->
  <?php get_template_part( "custom-templates/shows") ?>
  <!-- </section> -->
  <!-- <section class="panel four"> -->
  <?php get_template_part( "custom-templates/instagram") ?>

  <!-- END scenes  -->

<?php get_footer(); ?>
<!-- </section> -->
