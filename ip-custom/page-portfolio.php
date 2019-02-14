<?php
/**
* Template Name: Portfolio Template
*
*/

get_header(); ?>

<div class='clean-grid-main-wrapper clearfix' id='clean-grid-main-wrapper' itemscope='itemscope' itemtype='http://schema.org/Blog' role='main'>
  <div class='clean-grid-posts-wrapper' id='clean-grid-posts-wrapper'>
    <div id="main-content" class="main-content">
      <h1><?php single_post_title(); ?></h1>
      <div id="primary" class="site-content">
        <div id="content" role="main">


          <?php
           $pageid = get_the_id();
                $content_post = get_post($pageid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
          ?>

        </div><!-- #content -->
      </div><!-- #primary -->
    </div><!-- #main-content -->
	</div><!-- #clean-grid-posts-wrapper -->
</div><!-- #clean-grid-main-wrapper -->


<?php get_footer();
