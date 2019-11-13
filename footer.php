<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bercometal
 */

?>

<!--==========================
Footer
============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
		    
          <div class="col-lg-3 col-md-6 footer-info">
            <?php dynamic_sidebar('widget_footer_left')?>            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <?php dynamic_sidebar('widget_footer_center_left')?> 
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <?php dynamic_sidebar('widget_footer_center_right')?>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <?php dynamic_sidebar('widget_footer_right')?>          
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Bercometal</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="#">Webmain</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<?php wp_footer(); ?>

</body>
</html>
