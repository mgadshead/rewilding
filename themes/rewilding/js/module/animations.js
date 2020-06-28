// animate in ever element with class="animate-in"
function animateIn() {
    var $elementsToAnimateIn = $('.animate-in');
    if ($elementsToAnimateIn.length) {
        var scrollPosition = $(document).scrollTop() + $(window).height();
        $elementsToAnimateIn.each(function () {
            if ($(this).offset().top < scrollPosition - 16) {
                // triggers when 16px past the bottom
                $(this).css({ transform: 'translateY(0)', opacity: '1' });
            }
        });
    }
}

// add a class to every image when it's loaded to run an animation
function imageLoad() {
    var $imagesToAnimate = $('img');
    if ($imagesToAnimate.length) {
        $imagesToAnimate.each(function () {
            $(this).on('load', function () {
                $(this).addClass('animate-images');
            });
        });
    }
}

// change the menu to the light background once the user scrolls past the hero section
function openLightMenu() {
    var $menuContainer = $('.menu-container');
    if ($menuContainer.length) {
        var heroSectionHeight = $('.hero').height();
        var menuHeight = $('.menu-container').height();
        var scrollTop = $(document).scrollTop();
        if (scrollTop >= heroSectionHeight - menuHeight) {
            $menuContainer.addClass('light-header');
        } else {
            $menuContainer.removeClass('light-header');
        }
    }
}

// function gsapAnimations() {
//     var $menuContainer = $('.menu-container');
//     if ($menuContainer.length) {
//         if ($menuContainer.hasClass('light-header')) {
//             gsap.fromTo(
//                 '.menu > li',
//                 { opacity: 0, transform: 'translateY(-8px)' },
//                 {
//                     opacity: 1,
//                     transform: 'translateX(0)',
//                     duration: 0.5,
//                     stagger: 0.1
//                 }
//             );
//         } else {
//             gsap.fromTo(
//                 '.menu > li',
//                 { opacity: 0, transform: 'translateY(-8px)' },
//                 {
//                     opacity: 1,
//                     transform: 'translateX(0)',
//                     duration: 0.5,
//                     stagger: 0.1,
//                     delay: 1.6
//                 }
//             );
//         }
//     }
// }

export { animateIn, imageLoad, openLightMenu };
