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
<div class="container">

<?php get_template_part('loops/content', 'home'); ?>

</div><!-- /.container -->
<?php get_footer(); ?>
