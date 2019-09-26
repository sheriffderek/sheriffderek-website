<!doctype html>

<?php
  $welcomeMessage = "Welcome to the Home page!";
  $templateDirectory = get_template_directory_uri();
  $imagePath = get_template_directory_uri() . '/images';
?>

<html class='theme-name'>

  <?php require('partials/head.php'); ?>

  <body class='<?php body_class(); ?>'>

    <header class='page-section site-header'>
    <div class='inner-column'>

      <?php // include('components/small-menu.php'); ?>

      <?php // include('components/site-heading.php'); ?>

    </div>
    </header>

    <main class='page-section page-content'>
      <!-- ... -->
