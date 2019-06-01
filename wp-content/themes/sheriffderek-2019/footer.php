
      <!-- ... -->
    </main>


    <?php if (!is_page( array('landing', 'welcome'))) { ?>
      <footer class='page-section site-footer'>
      <div class='inner-column'>

        <?php include('components/site-menu.php'); ?>

      </div>
      </footer>
    <?php } ?>

    <?php wp_footer(); ?>
  </body>

</html>