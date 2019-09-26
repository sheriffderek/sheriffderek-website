<?php
  /*
    Template name: 'Master template'
  */
?>

<?php get_header(); ?>


<section class='page-section section-name'>
<div class='inner-column'>
  
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <article class='content'>
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



    <?php if ( is_page('welcome') ) { ?>
      <figure class='avatar'>
        <img src='https://sheriffderek.consulting/resources/social/insignia/1000.png' alt='' />
      </figure>
    <?php } ?>



    <?php if ( is_page('style-guide') ) { ?>
      <figure class='avatar'>asdfasdf
        <img src='https://sheriffderek.consulting/resources/social/insignia/1000.png' alt='' />
      </figure>
    <?php } ?>



    <?php if ( is_page( array('landing', 'welcome')) ) { ?>
      <?php include('components/big-menu.php'); ?>
    <?php } ?>


    <?php if (is_page('guidance') || is_page('design') || is_page('implementation')) { ?>

      <?php
        $type;
        if (is_page('guidance')) {
          $type = 'guidance';
        } else if (is_page('design')) {
          $type = 'design';
        } else {
          $type = 'implementation';
        }

        $arguments = array(
          'category_name' => $type
        );

        $theQuery = new WP_Query($arguments);
      ?>

      <ul class='article-list'>
        <?php while($theQuery->have_posts()) : $theQuery->the_post(); ?>

        <li class='article'>
          <article class='content'>
            <h1 class='title'>
              <a href="<?php the_permalink() ?>" rel="bookmark">
                <?php the_title(); ?>
              </a>
            </h1>

            <h2 class='date'>
              <?php the_date(); ?>
              <span class='updated'>
                <em>Last updated: <?php the_modified_date('F j, Y'); ?></em>
              </span>
            </h2>

            <p>Short teaser for this article would go here.</p>
          </article>
        </li>

        <?php endwhile; wp_reset_postdata(); ?>
      </ul>
    <?php } ?>

</div>
</section>


<?php get_footer(); ?>