
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
