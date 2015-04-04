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
    <div class="content">
    <?php
      query_posts( array( 'post_type' => 'day') );
      if ( have_posts() ) : while ( have_posts() ) : the_post();?>
      <div class="dailyPost"> 
        <?php   the_post_thumbnail("large"); ?>
        <div class="dailyPostContent"> 
        <p class="technologies">  <?php the_terms($post->ID, "technologies", "", ", "); ?></p>

        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
          <a href="<?php  the_field('portfolio_url'); ?>" class="portfolioLink" target="_blank">Visit the full page</a>
        </div>
      </div>
              <?php endwhile; endif; wp_reset_query(); ?>
              </div>
  </section>



</div> <!-- /.main -->

<?php get_footer(); ?>