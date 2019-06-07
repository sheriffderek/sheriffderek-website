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

          <aside class='heading'>
            <figure class='logo'>
              <canvas class='space' width='60' height='60'></canvas>
            </figure>
            
            <div class='info'>
              <h1>Sheriffderek Consulting</h1>
              <div class='contact'>
                <a href='tel:2133734808'>(213) 373-4808</a>
              </div>
            </div>
          </aside>


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



<script src='https://unpkg.com/zdog@1/dist/zdog.dist.js'></script>

<script>
  var TAU = Zdog.TAU;
  var darkPink = '#f06';
  var lightPink = '#fCC';

  // var space = document.getElementById('space');

  let isSpinning = true;

  var logo = new Zdog.Illustration({
    element: '.space',
    rotate: {
      x: 2,
      y: 1.1,
    },
    // zoom: 1,
    dragRotate: true,
    // stop rotation when dragging starts
    onDragStart: function() {
      isSpinning = false;
    },
  });

  ( function() {

    var sphere = new Zdog.Anchor({
      addTo: logo,
    });

    var halve = new Zdog.Hemisphere({
      addTo: sphere,
      diameter: 60,
      scale: 1,
      color: lightPink,
      backface: darkPink, // stops the blinking
      stroke: false,
    });

    halve.copy({
      rotate: { y: TAU/2 },
      color: darkPink,
      backface: lightPink,
    });

    logo.updateRenderGraph();
  })();


  function animate() {
    // rotate illo each frame
    if (isSpinning) {
      logo.rotate.x += 0.003;
    }
    logo.updateRenderGraph();
    // animate next frame
    requestAnimationFrame( animate );
  }
  // start animation
  animate();
</script>


</div>
</section>