<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<?php
$attachment_elem_id = get_post_meta(get_the_ID(), 'main_image', true);
$attachment_image = wp_get_attachment_url($attachment_elem_id);
$main_content = get_field('main_content');
?>
<div class="top-section" style="background: url('<?php echo $attachment_image; ?>') no-repeat center / cover">
    <div class="container">
        <div class="top-section__wrapper">
            <h1 class="top-section__title"><?php echo $main_content['main_title']; ?></h1>
            <div id="dynamic-text" class="top-section__dynamic-text"><?php echo $main_content['main_dynamic_array'][0]['main_dynamic_text']; ?></div>
            <div class="top-section__description">
                <div class="top-section__description-wrapper">
                    <?php echo $main_content['main_description']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="top-form" class="top-section__form-wrapper">
            <?php echo do_shortcode('[fc id=\'1\'][/fc]'); ?>
        </div>
    </div>
</div>
<?php foreach ($main_content['main_dynamic_array'] as $text) {
    $array_field[] =  $text['main_dynamic_text'];
}
$array_field = json_encode($array_field);
?>
<script>
    var textArray = <?php echo $array_field; ?>;
    var typed = new Typed('#dynamic-text', {
        strings: textArray,
        typeSpeed: 50,
        backSpeed: 50,
        startDelay: 2000,
        backDelay: 3000,
        fadeOut: true,
        loop: true,
        cursorChar: '',
    });
</script>
<?php
$advantages_elem_id = get_post_meta(get_the_ID(), 'advantages_image', true);
$advantages_image = wp_get_attachment_url($advantages_elem_id);
$advantages_content = get_field('advantages_content');
?>
<section class="advantages-section" id="advantages">
    <div class="container">
        <h2 class="advantages-section__title main-title h2 text-center"><?php echo $advantages_content['advantages_title']; ?></h2>
        <div class="advantages-section__description h2 text-center"><?php echo $advantages_content['advantages_description']; ?></div>
    </div>
    <div class="advantages-section__container" style="background: url('<?php echo $advantages_image; ?>') no-repeat bottom / cover">
        <div class="container">
            <div class="advantages-section__wrapper">
                <?php
                $left_column = get_field('advantages_left_column');
                $left_column_title = $left_column['advantages_left_column_title'];
                $left_column_items = $left_column['item_list'];
                $right_column = get_field('advantages_right_column');
                $right_column_title = $right_column['advantages_right_column_title'];
                $right_column_items = $right_column['item_list'];
                ?>
                <div class="advantages-section__item">
                    <div class="advantages-section__item-wrapper">
                        <p class="advantages-section__item-title"><?php echo $left_column_title; ?></p>
                        <?php foreach ($left_column_items as $content) { ?>
                            <div class="advantages-section__field">
                                <img class="advantages-section__icon" src="/wp-content/themes/zemle-bud/assets/img/checkmark.svg" alt="icon">
                                <span class="advantages-section__text"><?php echo $content['item_text']; ?></span>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="advantages-section__image-wrapper">
                    <img class="advantages-section__image" src="/wp-content/themes/zemle-bud/assets/img/vs.svg" alt="icon">
                </div>
                <div class="advantages-section__item">
                    <div class="advantages-section__item-wrapper">
                        <p class="advantages-section__item-title"><?php echo $right_column_title; ?></p>
                        <?php foreach ($right_column_items as $content) { ?>
                            <div class="advantages-section__field">
                                <img class="advantages-section__icon" src="/wp-content/themes/zemle-bud/assets/img/cross.svg" alt="icon">
                                <span class="advantages-section__text"><?php echo $content['item_text']; ?></span>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$special_top = get_field('special_top');
?>
<section class="block-special" style="background: url('<?php echo $special_top['special_image']; ?>') no-repeat center / cover">
    <div class="container">
        <div class="block-special__wrapper">
            <div class="block-special__item">
                <div class="block-special__text-wrapper">
                    <div class="block-special__text"><?php echo $special_top['special_title']; ?></div>
                </div>
                <h2 class="block-special__description"><?php echo $special_top['special_description']; ?></h2>
            </div>
            <div class="block-special__item">
                <button type="button" class="btn btn-primary js-special-top"><?php echo $special_top['special_text_button']; ?></button>
            </div>
        </div>
    </div>
</section>
<section class="block-prices" id="prices">
    <div class="container">
        <h2 class="main-title"><?php echo get_post_meta(get_the_ID(), 'price_title', true); ?></h2>
        <?php get_template_part('loops/content', 'home'); ?>
        <div class="block-prices__form-wrapper" id="price-form">
            <img class="block-prices__image" src="/wp-content/themes/zemle-bud/assets/img/price.png" alt="decor image">
            <div class="block-prices__form">
                <div class="block-prices__form-title">
                    <?php echo get_post_meta(get_the_ID(), 'price_form_title', true); ?>
                    <img class="block-prices__arrow" src="/wp-content/themes/zemle-bud/assets/img/arrow-form.svg" alt="arrow">
                </div>
                <?php echo do_shortcode('[fc id=\'3\'][/fc]'); ?>
            </div>
        </div>
    </div>
</section>
<?php
$special_bottom = get_field('special_bottom');
?>
<section class="block-special" style="background: url('<?php echo $special_bottom['special_image']; ?>') no-repeat center / cover">
    <div class="container">
        <div class="block-special__wrapper">
            <div class="block-special__item">
                <div class="block-special__text-wrapper">
                    <div class="block-special__text"><?php echo $special_bottom['special_title']; ?></div>
                </div>
                <h2 class="block-special__description"><?php echo $special_bottom['special_description']; ?></h2>
            </div>
            <div class="block-special__item">
                <button type="button" class="btn btn-primary js-special-bottom"><?php echo $special_bottom['special_text_button']; ?></button>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
