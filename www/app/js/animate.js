let animate = {
    sectionArray: [],

    init: function () {
        // this.animateMain();
        this.setArray();
        this.sectionOnScroll();
        this.events();
    },


    setArray: function () {
        let animate = $('.js-section');
        for (let i = 0; i < animate.length; i++) {
            let anim = 0;
            if ($(document).scrollTop() > $(animate[i]).position().top) {
                anim = 1;
            }
            this.sectionArray[i] = {
                element: animate[i],
                offsetTop: $(animate[i]).position().top - 600,
                action: $(animate[i]).attr("data-action"),
                complete: anim,
            };
        }
    },



    home: function () {
        TweenMax.staggerFromTo('.home__title', 0.5, {
            opacity: 0,
            y: -100
        }, {
            opacity: 1,
            y: 0
        },0.2);

        TweenMax.staggerFromTo('.home__buttons', 1.8, {
            opacity: 0,
            y: 100
        }, {
            opacity: 1,
            y: 0
        },0.4);
    },

    why: function () {
        TweenMax.staggerFromTo('.why__title', 0.5, {
            opacity: 0,
            y: -100
        }, {
            opacity: 1,
            y: 0
        },0.2);

        TweenMax.staggerFromTo('.why__item', 0.8, {
            opacity: 0,
            y: 50,
            delay: 0.4
        },{
            opacity: 1,
            y: 0,
            delay: 0.4
        },0.2);
    },

    services: function () {
        TweenMax.staggerFromTo('.services__title', 0.5, {
            opacity: 0,
            y: -100
        }, {
            opacity: 1,
            y: 0
        },0.2);

        TweenMax.staggerFromTo('.services__item', 0.8, {
            opacity: 0,
            delay: 0.4
        },{
            opacity: 1,
            delay: 0.4
        },0.2);
    },







    setVisibility: function (element) {
        $(element).find('.js-visibility').css("visibility", "inherit");
    },

    sectionOnScroll: function () {
        let scrollPosition = $(document).scrollTop();

        for(let i = 0; i < this.sectionArray.length; i++) {

            if ((this.sectionArray[i].complete === 0) && (this.sectionArray[i].offsetTop <= scrollPosition)) {

                // this.setVisibility(this.sectionArray[i].element);

                let x = this.sectionArray[i].action;
                this[x]();

                this.sectionArray[i].complete = 1;
            }
            else if(this.sectionArray[i].complete === 1) {
                this.setVisibility(this.sectionArray[i].element);
            }
        }
    },


    events: function () {
        let self = this;

        $(window).on('scroll', function () {
            self.sectionOnScroll();
        });
    }
};

$(function () {
    animate.init();
});
