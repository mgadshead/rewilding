function equalize() {
    var tallestElement = 0;
    var $equalize = $('.equalize');
    if ($equalize.length) {
        $equalize
            .each(function () {
                $(this).height('auto');
                if ($(this).height() > tallestElement) {
                    tallestElement = $(this).height();
                }
            })
            .height(tallestElement);
    }
}

export default equalize;
