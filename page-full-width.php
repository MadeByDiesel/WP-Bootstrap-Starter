<?php 
/*
  Template Name: Full Width Template
*/
?>

<?php get_header( ); ?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h1><?php the_title( ); ?></h1>
          </div>

          <?php the_content(); ?>

        <?php endwhile; else: ?>


        <?php endif; ?>

      </div>

    </div>
    <!-- /.row -->
  </div>

<?php get_footer( ); ?>