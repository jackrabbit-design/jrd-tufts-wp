    <!-- Footer -->
    <footer>
        <div class="container">
          <div class="row">
              <div class="col-md-7">
                <div class="col-md-3">
                    <a href="<?php bloginfo('url'); ?>" class="logo-footer" title="TUFTS - Catering"><img alt="" src="<?php bloginfo('url'); ?>/ui/images/logo-footer.png" /></a>
                </div>
                <div class="col-md-6">
                    <p><?php the_field('footer_address_phone_number','options'); ?><span>&copy; <?php echo date('Y'); ?> <?php the_field('footer_copyright','options'); ?></span></p>
                </div>
                <div class="col-md-3">
                    <?php if(get_field('brochure_link','options')): ?><a href="<?php the_field('brochure_link','options'); ?>" class="download" title="DOWNLOAD BROCHURE">DOWNLOAD BROCHURE</a><?php endif; ?>
                </div>
              </div>
              <div class="col-md-5">
                  <a href="http://www.tufts.edu/" title="TUFTS University" class="university" target="_blank"><img alt="" src="<?php bloginfo('url'); ?>/ui/images/university.png" /></a>
              </div>
          </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <?php if(is_page_template('template-contact.php')){ ?><script src="ui/js/contact_me.js"></script><?php } ?>

</body>

</html>