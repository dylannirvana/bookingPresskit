

    <div id="photo" class="text-center cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <div role="main" class="inner cover">

        <!-- <h1 class="cover-heading">Dan Connolly</h1>
        <p class="lead">Singing with power and a heart felt soul that is rarely seen. Sounds a lot like Robert Plant. Book a rocking performance now!</p> -->

        <!-- WP QUERY -->
        <?php
        $query = new WP_Query( 'pagename=cover' );
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

      </div>
    </div>
