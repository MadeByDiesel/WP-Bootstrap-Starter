<?php get_header( ); ?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-9">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
            <h1><?php the_title( ); ?></h1>
          </div>

          <?php the_content(); ?>

        <?php endwhile; else: ?>


        <?php endif; ?>

      </div>

      <!-- Blog Sidebar Widgets Column -->
      <?php get_sidebar(); ?>
      
    </div>
    <!-- /.row -->
  </div>

<?php get_footer( ); ?>