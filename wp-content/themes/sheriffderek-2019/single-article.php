<?php include('header.php'); ?>


  <section class='page-content'>

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <article>
          <?php the_content(); ?>asdfasfdasfd
        </article>

      <?php endwhile; ?>
    <?php endif; ?>


    <?php if ( is_page('contact') ) { ?>
      <a href='https://sheriffderek.consulting' target='social'>
        @sheriffderek
      </a>
    <?php } ?>

  </section>


<?php include('footer.php'); ?>