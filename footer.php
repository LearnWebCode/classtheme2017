<footer class="site-footer">
  <?php
    wp_nav_menu(array(
      'theme_location' => 'footerMenu'
    ));
  ?>
  <p>Copyright &copy; <?php echo date('Y');?> Hypothetical Lessons Inc</p>
</footer>

<?php wp_footer(); ?>

</div>

</body>
</html>