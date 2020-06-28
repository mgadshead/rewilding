// import bootstrap from 'bootstrap';
// import touchwipe from './vendor/touchwipe';
import parallax from './module/parallax';
import equalize from './module/equalize';
import { animateIn, imageLoad, openLightMenu } from './module/animations';
// import barba from './module/barba';

$(document).ready(function () {
    imageLoad();
    animateIn();
    parallax();
    equalize();
    openLightMenu();
    gsapAnimations();
});

$(window).scroll(function () {
    animateIn();
    parallax();
    openLightMenu();
});

$(window).resize(function () {
    animateIn();
    parallax();
    equalize();
    openLightMenu();
});

function gsapAnimations() {
    var $menuContainer = $('.menu-container');
    if ($menuContainer.length) {
        if ($menuContainer.hasClass('light-header')) {
            gsap.fromTo(
                '.menu > li',
                { opacity: 0, transform: 'translateY(-8px)' },
                {
                    opacity: 1,
                    transform: 'translateX(0)',
                    duration: 0.5,
                    stagger: 0.1
                }
            );
        } else {
            gsap.fromTo(
                '.menu > li',
                { opacity: 0, transform: 'translateY(-8px)' },
                {
                    opacity: 1,
                    transform: 'translateX(0)',
                    duration: 0.5,
                    stagger: 0.1,
                    delay: 1.6
                }
            );
        }
    }
}
