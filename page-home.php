<?php 
/*
  Template Name: home

*/
get_header();  ?>

<div class="main">
  <section class="about">
    <div class="content clearfix">
      <h2 class = "left">The Goal</h2>
      <p class="right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque blanditiis mollitia obcaecati assumenda nisi iste earum omnis quis enim ducimus eum alias a voluptatem, cum animi deserunt hic iure, recusandae odio asperiores incidunt repellat, id. Amet accusantium nulla deserunt ipsum perferendis unde fugit, sed nesciunt cupiditate, sapiente est ex, similique?</p>
      <h2 class = "left">The Motivation</h2>
      <p class="right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam excepturi nemo ducimus ipsum eveniet veniam aspernatur facilis molestiae sapiente, odio ex molestias, minus alias provident consectetur quod corrupti soluta est in numquam illo animi ut perspiciatis unde. Nisi fugiat nemo, facere. Officia, amet modi possimus. Enim magnam consequatur at voluptates.</p> 
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
          <?php  the_field('description'); ?>
          <p class="technologies">  <?php the_terms($post->ID, "technology", "", ", "); ?></p>
          </div>
        </a>
        
      </div>
      <?php endwhile; endif; wp_reset_query(); ?>
    </section>



</div> <!-- /.main -->

<?php get_footer(); ?>