<?php 
/*
  Template Name: home

*/
get_header();  ?>

<div class="main">
  <section class="about">
    <div class="content clearfix">
      <h2 class = "left">The Goal</h2>
      <p class="right">The goal of this project is to create one small web application every day for 100 days that is primarily coded in JavaScript/jQuery.
          Some days I will code useful utilities, other days I will make stuff that is just cool! I will also be trying to build applications in different frameworks!
      </p>
      <h2 class = "left">The Motivation</h2>
      <p class="right">My motivation for choosing to code so much Javasccript</p> 
    </div> <!-- /.container -->
  </section>
  <section class="days">
    <?php
      query_posts( array( 'post_type' => 'day',
        'order' => 'ASC') );

      if ( have_posts() ) : while ( have_posts() ) : the_post();?>
      <?php global $post; ?>
      <?php
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
      ?>
      <div class="dailyPost" style="background: url(<?php echo $src[0]; ?>) no-repeat; background-size: cover"> 
        <a href="<?php  the_field('link'); ?>">


          <div class="dailyPostContent"> 
          <h3><?php the_title(); ?></h3>
          <p> <?php  the_field('description'); ?></p>
          
          <p class="technologies">  <?php the_terms($post->ID, "technology", "", ""); ?></p>
          </div>
        </a>
        
      </div>
      <?php endwhile; endif; wp_reset_query(); ?>
    </section>



</div> <!-- /.main -->

<?php get_footer(); ?>