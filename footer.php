<footer class="footer js-footer">
    <div class="footer__wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                    <div class="logo">
                        <?php get_default_logo_link([
                            'name'    => 'logo.svg',
                            'options' => [
                                'class'  => 'logo-img',
                                'width'  => 150,
                                'height' => 50,
                            ],
                        ])
                        ?>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                    <div class="footer__container">
                        <?php if (has_phones()) { ?>
                            <ul class="phone">
                                <?php foreach (get_phones() as $phone) { ?>
                                    <li class="phone-item">
                                        <span class="phone-icon">
                                            <i class="far fa-phone-alt"></i>
                                        </span>
                                        <a href="tel:<?php echo esc_attr(get_phone_number($phone)); ?>" class="phone-number">
                                            <?php echo esc_html($phone); ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="date">&copy; <?php echo date('Y'); ?>. Все права защищены</div>
            <div class="developer">
                <?php _e('Developed by ', 'brainworks') ?><a href="https://brainworks.pro/" target="_blank">BrainWorks</a>
            </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper end Do not delete! -->

<?php scroll_top(); ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
