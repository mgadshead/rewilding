<?php 
/************************
 Template Name: Home
 ***********************/
get_header(); ?>
<div class="barba-container home" data-barba="container" data-barba-namespace="home">
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
                    <h1 class="animate-in">Rewilding the feminine</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="gradient-animation-1 parallax-container">
        <section>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-6 d-flex align-items-center translate-right">
                        <div class="text-box">
                            <h3 class="animate-in">Is your body calling you to go deeper?</h3>
                            <p class="animate-in">Rewilding The Feminine is a six-day experiential & immersive retreat for womxn held at a gorgeous villa on the shores of the Ionian Sea.</p>
                            <p class="animate-in">Led by trauma informed Somatic Sex and Relationship Coach, Kat Nantz, you will be guided on a journey of exploration and self discovery, awakening your wild erotic energy and self while being deeply cared for and nourished.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 d-flex align-items-center translate-left translate-up-mobile">
                        <img data-src="<?php echo THEME_URL; ?>/img/image-1.webp" class="w-100 parallax-item lazyload" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="animate-in">Something about the video</h2>
                    <div class="youtube-16-9-container">
                        <iframe width="560" height="315" data-src="https://www.youtube.com/embed/HBK0JCXUaCk" class="lazyload" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <p class="animate-in">This <a href="">retreat</a> is a call to the womxn whose wild heart is beckoning them to come home, to transform the wounds that live in their body to create more space to expand into pleasure and freedom.</p>
                    <p class="animate-in">It’s an invitation to the womxn who can feel the deep well of wisdom in their body but feels unsure of how to reclaim and access it.</p>
                    <p class="animate-in">Join us in sacred sisterhood for a 7 day journey of  remembering, reclamation, devotion to self and integration.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="gradient-animation-2 parallax-container">
        <section>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-6 d-flex align-items-center translate-right translate-up-mobile z-index-1">
                        <img data-src="<?php echo THEME_URL; ?>/img/image-2.webp" class="w-100 parallax-item lazyload" />
                    </div>
                    <div class="col-xl-6 d-flex align-items-center translate-left">
                        <div class="text-box">
                            <h3 class="animate-in">Imagine this:</h3>
                            <p class="animate-in">You’re at the edge of a stunning Greek Gulf, surrounded by the turquoise waters of the beautiful Ionian Sea.</p>
                            <p class="animate-in">You wake up each morning as a soft Mediterranean breeze blows through your window, the sun is warming your face, you feel fully embodied and alive, the day ahead is all yours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section>
        <div class="container-fluid">
            <ul class="row list-unstyled icon-list">
                <li class="col">
                    <img data-src="<?php echo THEME_URL; ?>/img/tropical.svg" class="list-icon lazyload"/>
                    <h4 class="equalize">Meals</h4>
                    <p>All  nourishing meals and snacks prepared by a private chef, with locally-sourced ingredients.</p>
                </li>
                <li class="col">
                    <img data-src="<?php echo THEME_URL; ?>/img/tropical.svg" class="list-icon lazyload"/>
                    <h4 class="equalize">Villa</h4>
                    <p>Luxurious shared accommodation at a stunning Greek villa with transportation to and from the airport.</p>
                </li>
                <li class="col">
                    <img data-src="<?php echo THEME_URL; ?>/img/tropical.svg" class="list-icon lazyload"/>
                    <h4 class="equalize">Relax</h4>
                    <p>Relax in the pool with a stunning view of the ocean, swim in the ocean, enjoy a massage, or downtime on the villa grounds.</p>
                </li>
                <li class="col">
                    <img data-src="<?php echo THEME_URL; ?>/img/tropical.svg" class="list-icon lazyload"/>
                    <h4 class="equalize">Transformational Workshops</h4>
                    <p>Each day will include workshops  focusing on somatic healing, core awareness, boundary work, awakening the wild feminine, communication, bioenergetic breath work, storytelling, embodiment, expansive pleasure practices, and movement​.</p>
                    <p>Remember, Reclaim, ReWild.</p>
                </li>
                <li class="col">
                    <img data-src="<?php echo THEME_URL; ?>/img/tropical.svg" class="list-icon lazyload"/>
                    <h4 class="equalize">Excursions</h4>
                    <p>Two optional group excursions to explore local Greek culture.</p>
                </li>
                <li class="col">
                    <img data-src="<?php echo THEME_URL; ?>/img/tropical.svg" class="list-icon lazyload"/>
                    <h4 class="equalize">Coaching Service</h4>
                    <p>One private 25-minute Zoom call with Kat prior to the retreat, a group video chat with all participants before retreat, and a remote coaching session after the retreat, and a commitment to care.</p>
                </li>
            </ul>
        </div>
    </section>
</div>
<?php get_footer(); ?>