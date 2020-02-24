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
<section class="advantages-section">
    <div class="container">
        <h2 class="advanced-section__title main-title h2 text-center"><?php echo $advantages_content['advantages_title']; ?></h2>
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
<div class="block-special">
    <div class="container">
        <div class="block-special__wrapper">

        </div>
    </div>
</div>
<div class="container">

<?php get_template_part('loops/content', 'home'); ?>

</div><!-- /.container -->
<?php get_footer(); ?>
