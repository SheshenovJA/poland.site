var date = {
    default_options: [{
        "locale": {
            "format": "DD/MM/YYYY",
            "separator": " - ",
            "applyLabel": "Окей",
            "cancelLabel": "Ніт",
            "fromLabel": "Від",
            "toLabel": "До",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "daysOfWeek": [
                "Нд",
                "Пн",
                "Вт",
                "Ср",
                "Чт",
                "Пт",
                "Сб"
            ],
            "monthNames": [
                "Січень",
                "Лютий",
                "Березень",
                "Квітень",
                "Травень",
                "Червень",
                "Липень",
                "Серпень",
                "Вересень",
                "Жовтень",
                "Листопад",
                "Грудень"
            ],
            "firstDay": 1
        },
        "linkedCalendars": false,
      //  "autoUpdateInput": false,
        // "timeZone": 'UTC',
        "opens": "right",
        "drops": "down"
    }],
    init: function () {
        var dateranges = $('input[name="daterange"]');
        console.log(dateranges);
        for (var i = 0; i < dateranges.length; i++) {
            this.dateRangeInit(dateranges[i]);
        }

    },
    dateRangeInit: function (dateSel) {
        // console.log(this.default_options);
        var def_options = this.default_options[0];
        var options = {};
        var date_from = $(dateSel).closest('form').find('input[name="date_from"]');
        var date_to = $(dateSel).closest('form').find('input[name="date_to"]');

        // var date_from_admin = $(dateSel).data('date_from');
        // var date_to_admin = $(dateSel).data('date_to');
        // if (date_from_admin && date_to_admin) {
        //     $.extend(options, options, {
        //         "startDate": 1517184000,
        //         "endDate": 1517529599
        //     });
        // }

        var minDate = $(dateSel).data('min_date');
        var maxDate = $(dateSel).data('max_date');
        var startDate = $(dateSel).data('start_date');

        if (minDate) {
            $.extend(options, options, {
                "minDate": minDate
            });
        }

        if (maxDate) {
            $.extend(options, options, {
                "maxDate": maxDate
            });
        }

        if (startDate) {
            $.extend(options, options, {
                "startDate": startDate
            });
        }


        var options_1 = {};
        if (!jQuery.isEmptyObject(options)) {
            $.extend(options_1, def_options, options);
        } else {
            options_1 = def_options;
        }
        console.log(options_1);
        var x = $(dateSel).daterangepicker(options_1
            , function (start, end, label) {
                start = moment.tz(start.format('YYYY-MM-DD') + ' 00:00:00', 'UTC');
                end = moment.tz(end.format('YYYY-MM-DD') + ' 23:59:59', 'UTC');
                console.log(start.format('X'));
                console.log(end.format('X'));
                date_from.val(start.format('X'));
                date_to.val(end.format('X'));
            }
        );
        console.log(x);
    },


};
date.init();


$('.verifyRe').click(function (event) {
    event.preventDefault();
    var t = $(this);
    var href = t.attr('href');
    swal({
        title: t.data('title'),
        text: t.data('description'),
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        confirmButtonColor: t.data('color_button'),
        confirmButtonText: "Да",
        cancelButtonColor: "#b6c2c9",
        cancelButtonText: "Отменить"
    }, function (isConfirm) {
        if (isConfirm) {
            window.location.href = href;
        }
    });
});