<?php
  /*
    Template name: "TEmpOrary"
  */
get_header(); ?>


<section class='page-section section-name'>
<div class='inner-column'>

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <article class='content x'>
          <!-- <h1 class='page-title'><?php  // the_title(); ?></h1> -->

          <?php the_content(); ?> 
          <!-- example... how would you put a date in here... besides javascript? -->

          <?php if ( is_page('contact') ) { ?>
            <p>
              and everywhere else: 
              <a href='https://sheriffderek.consulting' target='social'>
                @sheriffderek
              </a>
            </p>

            <?php include('components/signup-form.php'); ?>
          <?php } ?>

        </article>

      <?php endwhile; ?>
    <?php endif; ?>

</div>
</section>