<?php include('header.php'); ?>


<section class='page-section section-name'>
<div class='inner-column'>
  
  <article class='content'>
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <article>
          <?php the_content(); ?>
        </article>

      <?php endwhile; ?>
    <?php endif; ?>


    <footer>
      <h2 class='date'>
        <?php the_date(); ?>
        <span class='updated'>
          <em>Last updated: <?php the_modified_date('F j, Y'); ?></em>
        </span>
      </h2>
    </footer>
  </article>


  <aside class='mailing-list'>
    <?php include('components/signup-form.php'); ?>
  </aside>

</div>
</section>


<?php include('footer.php'); ?>