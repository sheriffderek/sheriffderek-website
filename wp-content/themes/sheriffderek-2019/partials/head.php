
<?php 
  $ogImage = get_template_directory_uri() . '/images/meta/free.jpg';
?>

<head>
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