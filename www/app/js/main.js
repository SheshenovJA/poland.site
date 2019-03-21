let front = {

    init: function () {
        this.events();
    },

    events: function () {
        //header
        $(document).scroll(function(){
            if($(this).scrollTop() > 1)
            {
                $('.header').addClass('active');
            } else {
                $('.header').removeClass('active');
            }
        });
        //header


        $('.scroll__link').on('click', function (e) {
            e.preventDefault();
            let target = this.hash;
            $target = $(target);
            let isset = $('body').has(target).length ;

            if (isset != 0) {
                $('html, body').animate({
                    scrollTop: $target.offset().top - 30
                }, 300, function () {
                    window.location.hash = target ;
                });
            } else {
                window.location = '/' + target;
            }
        });

        $(document).on('click', '.js-panel-top', function (e) {
            $(this).parent().find('.js-panel-bottom').slideToggle();
            $(this).toggleClass('active');
        });

    }

};


$(function () {
    front.init();
});






