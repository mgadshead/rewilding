function parallax() {
    var $parallaxContainer = $('.parallax-container');
    if ($parallaxContainer.length) {
        $parallaxContainer.each(function () {
            var $parallaxItem = $(this).find($('.parallax-item'));
            var $scrollTop = $(document).scrollTop();
            var $windowHeight = $(window).height();
            var $windowWidth = $(window).width();
            var scrollPosition = $scrollTop + $windowHeight;
            var parallaxContainerOffset = $(this).offset().top;
            var parallaxRatio =
                -0.2 * (scrollPosition - parallaxContainerOffset) + 120;
            if (
                parallaxContainerOffset < scrollPosition &&
                $windowWidth >= 1200
            ) {
                $parallaxItem.css(
                    'transform',
                    'translateY(' + parallaxRatio + 'px)'
                );
            } else {
                $parallaxItem.css('transform', 'translateY(-32px)');
            }
        });
    }
}

// trying to make a more extensible plugin, but got bored half way

// the lines that break things are:
// parallaxContainerOffset + 40 <= parallaxItemOffset &&
// parallaxContainerBottom - 40 <= parallaxItemBottom
// $parallaxItem.css('transform', 'translateY(-32px)');

// function parallax() {
//     var $parallaxContainer = $('.parallax-container');
//     if ($parallaxContainer.length) {
//         $parallaxContainer.each(function () {
//             var $parallaxItem = $(this).find($('.parallax-item'));
//             var $scrollTop = $(document).scrollTop();
//             var $windowHeight = $(window).height();
//             var $windowWidth = $(window).width();
//             var scrollPosition = $scrollTop + $windowHeight;
//             var parallaxContainerOffset = $(this).offset().top;
//             var parallaxContainerHeight = $(this).height();
//             var parallaxContainerBottom =
//                 parallaxContainerOffset + parallaxContainerHeight;
//             var parallaxItemOffset = $parallaxItem.offset().top;
//             var parallaxItemHeight = $(this).find('.parallax-item').height();
//             var parallaxItemBottom = parallaxItemOffset + parallaxItemHeight;
//             var parallaxRatio =
//                 -0.2 * (scrollPosition - parallaxContainerOffset) + 120;
//             if (
//                 parallaxContainerOffset < scrollPosition &&
//                 $windowWidth >= 1200 &&
//                 parallaxContainerOffset + 40 <= parallaxItemOffset //&&
//                 // parallaxContainerBottom - 40 >= parallaxItemBottom
//             ) {
//                 $parallaxItem.css(
//                     'transform',
//                     'translateY(' + parallaxRatio + 'px)'
//                 );
//             } else {
//                 // $parallaxItem.css('transform', 'translateY(-32px)');
//             }
//         });
//     }
// }

export default parallax;
