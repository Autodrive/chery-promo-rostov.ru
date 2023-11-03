$(document).ready(function () {
    var filter = $("#filter"),
        filterList = $(".filter-list"),
        filterToChange = [],
        lastChanged = '';

    filter.on('change', '[name]', function (e, value) {
        let update = false;
        filterToChange = [];
        lastChanged = $(e.target).attr('name');

        filter.find('select').each(function () {
            if (update) filterToChange.push($(this).attr('name'));
            if (lastChanged === $(this).attr('name')) update = true;
        });

        loadFields($(e.target).val());
        loadStock($(e.target).val(), lastChanged);
    });

    loadFields = () => {

        filter.find('select').each(function (i, e) {
            if ($.inArray($(this).attr('name'), filterToChange) !== -1) {
                $(this).find('option').each(function () {
                    if ($(this).attr('value') !== '') $(this).remove();
                });
            }
        });

        $.ajax({
            url: 'ajax/filter.php',
            method: 'POST',
            dataType: 'JSON',
            data: {
                method: 'getFields',
                params: filter.serialize()
            },
            success: function (data) {
                renderFields(data)
            },
            error: function (data) {
                error(data)
            }
        })
    };

    renderFields = (data) => {
        let options = '',
            i = 0;

        filter.find('select').each(function (i, e) {
            if (($.inArray($(this).attr('name'), filterToChange) !== -1) && !!data[$(this).attr('name')]) {
                for (i = 0; i < data[$(this).attr('name')].length; i++) {
                    options += '<option value="' + data[$(this).attr('name')][i] + '">' + data[$(this).attr('name')][i] + '</option>'
                }

                $(this).prop('disabled', false).append(options);
                options = '';
            }
        });

    };

    error = (data) => {
        console.log(data);
    };

    loadStock = (value, name) => {
        if (name === 'model' && value === "") {

            filter.find('select').each(function () {

                if ($(this).attr('name') !== 'model') {
                    $(this).find('option').each(function () {
                        if ($(this).attr('value') !== '') $(this).remove();
                    });

                    $(this).prop('disabled', true);
                }

            });
        }

        $.ajax({
            url: 'ajax/filter.php',
            method: 'POST',
            dataType: 'JSON',
            data: filter.serialize(),
            success: function (data) {
                renderModels(data);
            },
            error: function (data) {
                error(data)
            }
        })
    };

    renderModels = (data) => {
        let stock = '',
            i = 0;

        for (i; i < data['stock'].length; i++) {
            stock += '<div class="car-list__item car-list__item_fourth stock-item" js-popup>' +
                '                        <div class="stock-item__block">' +
                '                            <div class="image image__car"><img src="./static/img/stock/' + data['stock'][i]['image'] + '" alt=""></div>' +
                '                            <p class="stock-item__name">' + data['stock'][i]['model'] + '</p>' +
                '                            <p>' + data['stock'][i]['compl'] + '</p>' +
                '                            <div class="footnote stock-item__info">' +
                '                                ' + (data['stock'][i]['kpp'] ? (' КПП ' + data['stock'][i]['kpp'] + ', ') : '') + (data['stock'][i]['engine'] ? (data['stock'][i]['engine'] + ',') : '') + ' цвет кузова ' + data['stock'][i]['color'] +
                '                            </div>' +
                '                        </div>' +
                '                        <div class="stock-item__block">' +
                '                            <p class="availability">В наличии</p>' +
                '                            <div class="btn btn_full" data-title="Узнать подробности об авто" js-popup="">Узнать' +
                '                                подробности' +
                '                            </div>' +
                '                        </div>' +
                '                    </div>';
        }

        filterList.html(stock);
    };

    $('[data-model]').click(function (e) {
        e.preventDefault();

        let model = $(this).attr('data-model');

        $('html, body').animate({
            scrollTop: filterList.offset().top - $('header.header').height() - 50
        });

        filter.find('[name="model"]').val(model).trigger('change');
    })
});