    <!-- Footer -->
    <footer class="clearfix">
        <div class="innerfooter-wrap clearfix">
              <div class="column-one-footer">
                <div class="foot-logo">
                    <a href="<?php bloginfo('url'); ?>" class="logo-footer" title="TUFTS - Catering"><img alt="" src="<?php bloginfo('url'); ?>/ui/images/logo-footer.png" /></a>
                </div>
                <div class="foot-address">
                    <p><?php the_field('footer_address_phone_number','options'); ?><span>&copy; <?php echo date('Y'); ?> <?php the_field('footer_copyright','options'); ?></span></p>
                </div>
                <div class="foot-link">
                    <?php if(get_field('brochure_link','options')): ?><a href="<?php the_field('brochure_link','options'); ?>" class="download" title="DOWNLOAD BROCHURE">DOWNLOAD BROCHURE</a><?php endif; ?>
                </div>
              </div>
			
              <div class="foot-university">
                  <a href="http://www.tufts.edu/" title="TUFTS University" class="university" target="_blank"><img alt="" src="<?php bloginfo('url'); ?>/ui/images/university.png" /></a>
              </div>
        </div>
        <div class="innerfooter-wrap clearfix">
        	<span class="jackrabbit"><a href="http://www.jumpingjackrabbit.com" title="Website Design by Jackrabbit" target="_blank">Website Design</a> by <a href="http://www.jumpingjackrabbit.com" title="Website Design by Jackrabbit" target="_blank">Jackrabbit</a></span>
        </div>
    </footer>

    <?php wp_footer(); ?>
 

</body>

</html>