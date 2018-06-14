<div id="booking" class="content">
<div class="container">
  <div class="scene" >

    <!-- <h1 class="cover-heading">Book a Show Online</h1>
    <p class="lead">Talent Buyers! Now you can book shows easily online from your laptop or smart phone through Squareup. Book multiple dates. Even pay for them online. You can get your confirmation within minutes. Easy squeezy. Or if you prefer to book the old fashioned way, <a href="mailto:dan@dfcrock.com"> email</a>.</p> -->

    <!-- WP QUERY -->
    <?php
    $query = new WP_Query( 'pagename=square' );
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

  <!-- Start Square Appointments Embed Code -->
  <script src='https://squareup.com/appointments/buyer/widget/9d72ec18-cf4d-4d08-9449-f5ab72d0044f/545ZJYTGVPEGN.js'></script><!-- End Square Appointments EmbedCode -->

</div>
</div> <!-- /container -->
</div>
<hr>
