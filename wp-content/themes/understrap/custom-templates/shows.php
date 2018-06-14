<div id="shows" class="content">
<div class="container">
  <div class="scene" >

    <!-- <h1 class="cover-heading">Performance Calendar</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->

    <!-- WP QUERY -->
    <?php
    $query = new WP_Query( 'pagename=shows' );
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post();

        echo '<h1 class="cover-heading">';
        the_title();
        echo '</h1>';

        echo '<div class="lead">';
        the_content();
        echo '</div>';
      }
    }
    wp_reset_postdata();
    ?>
    <!-- END WP_Query -->

  <!-- Bands in Town Embed Code -->
  <script charset="utf-8" src="https://widget.bandsintown.com/main.min.js"></script><a class="bit-widget-initializer" data-artist-name="Dylan Nirvana & The Bad Flowers" data-display-local-dates="true" data-display-past-dates="true" data-auto-style="false" data-text-color="#000000" data-link-color="#31465C" data-popup-background-color="#FFFFFF" data-background-color="#FFFFFF" data-display-limit="15" data-link-text-color="#FFFFFF"></a>

</div>
</div> <!-- /container -->
</div>
<hr>
