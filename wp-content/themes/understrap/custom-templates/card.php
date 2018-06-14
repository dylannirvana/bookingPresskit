<div id="bio" class="content">
  <div class="container">

  
    <!-- WP QUERY -->
    <?php
      $query = new WP_Query( 'pagename=bio' );
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();

          echo '<h2>';
          the_title();
          echo '</h2>';

          echo '<div class="bio d-flex flex-wrap">';
          the_content();
          echo '</div>';
        }
      }
      wp_reset_postdata();
    ?>
<!-- END WP_Query -->

    <hr>

  </div> <!-- /container -->
</div>
