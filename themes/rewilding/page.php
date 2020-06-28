<?php get_header(); ?>
<div class="barba-container page" data-barba="container" data-barba-namespace="page">
    <div class="hero">
        <!-- DON'T FORGET TO SET A FALLBACK! -->
        <video <?php // poster="img/hero-fallback.jpg"?>muted autoplay loop class="hero-video">
            <source src="<?php echo THEME_URL; ?>/video/hero-video.mp4" type="video/mp4">
            <!-- <source src="<?php echo THEME_URL; ?>/video/oak-bay.ogg" type="video/ogg">
            <source src="<?php THEME_URL; ?>/video/oak-bay.webm" type="video/webm"> -->
        </video>
        <div class="video-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="animate-in"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>