
<?php 
  $ogImage = get_template_directory_uri() . '/images/meta/free.jpg';
?>

<head>
  <?php /*
  This is the Global Site Tag (gtag.js) tracking code for this property. Copy and paste this code as the first item into the <HEAD> of every webpage you want to track. If you already have a Global Site Tag on your page, simply add the config line from the snippet below to your existing Global Site Tag.
  */?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-64118220-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-64118220-1');
  </script>

  <meta charset='utf-8'  />
  <title>Sheriffderek Consulting: Guidance Design Implementation</title>
  <meta name='description' content="A thoughtful approach to your goals. Guidance Design Implementation. Research, content strategy, user-testing, user experience, layouts, user interface, design patterns, live style-guides, system architecture, cms, team building, brochures, content portals, applications, and whatever other buzzwords you can muster up. (It’s all really just Design)">
  <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>

  <meta property='og:title' content="Sheriffderek Consulting: Guidance Design Implementation" />
  <meta property='og:description' content="A thoughtful approach to your goals. Guidance Design Implementation. Research, content strategy, user-testing, user experience, layouts, user interface, design patterns, live style-guides, system architecture, cms, team building, brochures, content portals, applications, and whatever other buzzwords you can muster up. (It’s all really just Design)" />
  <meta property='og:type' content='website' />
  <meta property='og:url' content='https://sheriffderek.consulting' />
  <meta property='og:image' content='<?php echo $ogImage; ?>' />

  <?php 
    if ( site_url() != 'http://sheriff:8888') {
      $favicon = get_template_directory_uri() . '/live-favicon' . '.ico';
    } else {
      $favicon = get_template_directory_uri() . '/local-favicon' . '.ico';
    }
  ?>
  <link rel='icon' href='<?php echo $favicon; ?>'>

  <?php wp_head(); ?>
</head>