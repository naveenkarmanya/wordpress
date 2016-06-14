<!--Start Footer Wrapper -->
<div class="footer_wrapper">
    <div class="container_24">
        <div class="grid_24">
            <div class="footer">
                <?php
                /* A sidebar in the footer? Yep. You can can customize
                 * your footer with four columns of widgets.
                 */
                get_sidebar('footer');
                ?>
            </div>  
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="footer_bottom">
    <div class="container_24">
        <div class="grid_24">
            <div class="bottom_footer_content">
                <div class="grid_12 alpha">

                </div>
                <div class="grid_12 omega">   
                    <div class="copyright">
                        <p class="copyright">
                            <a href="http://wordpress.org/" rel="generator">
                                <?php
                                _e('Powered by WordPress', 'karmanya');
                                ?></a>
                            <span class="sep">&nbsp;|&nbsp;</span>
                            <?php printf(__('Theme: ', 'karmanya')); ?><a rel="nofollow" target="_blank" href="<?php echo esc_url(__('http://wordpress.karmanya.co.in/', 'karmanya')); ?>" rel="designer"><?php printf(__(' %s', 'karmanya'), 'karmanya'); ?></a><?php printf(__(' By %s', 'karmanya'), 'InkThemes'); ?>

                        </p>
                    </div>
                </div>		
            </div>	
        </div>
    </div>
</div>
</div>

</body>
</html>
