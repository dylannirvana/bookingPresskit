<!-- MUSIC -->
<div id="music" class="content">
<div class="container space">

  <!-- <div class="scene" > -->
    <!-- <h1 class="cover-heading">Cool music</h1>
    <p class="lead">Check out some cool tunes on Soundcloud. Or buy up directly from Apple iTunes.</p> -->

    <!-- WP QUERY -->
    <?php
    $query = new WP_Query( 'pagename=soundcloud' );
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


  <!-- Soundcloud Embed Code -->
  <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/348766639&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>

  <div class="row space">
    <div class="col-md-7">
      <!-- <h4>In your iTunes</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->

      <!-- WP QUERY -->
      <?php
      $query = new WP_Query( 'pagename=itunes' );
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();

          echo '<h4>';
          the_title();
          echo '</h4>';

          echo '<div class="lead">';
          the_content();
          echo '</div>';
        }
      }
      wp_reset_postdata();
      ?>
      <!-- END WP_Query -->

    </div>
    <div class="col-md-5">
      <!-- iTunes embed code -->
      <iframe src="https://widgets.itunes.apple.com/widget.html?c=us&brc=FFFFFF&blc=FFFFFF&trc=FFFFFF&tlc=FFFFFF&d=Dylan Nirvana like Elvis Costello. Morrissey meets Motorhead.&t=Dylan Nirvana &amp; The Bad Flower&m=song&e=song&w=250&h=300&ids=267819209,630140914,630140915,630140916,121180909&wt=playlist&partnerId=&affiliate_id=&at=&ct=" frameborder=0 style="overflow-x:hidden;overflow-y:hidden;width:250px;height: 300px;border:0px"></iframe>
    </div>
  </div>
<br>

<!-- </div> -->
  </div> <!-- /container -->
</div>
<hr>