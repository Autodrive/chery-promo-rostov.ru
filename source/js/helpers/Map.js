const Map = {
    i: (obj) => {
        Map.obj = obj;
        if (Map.obj.hasClass('inited'))
            return;

        Map.map = new ymaps.Map("" + Map.obj.attr('id') + "", {
            center: Map.getCenter(),
            zoom: Map.getZoom(),
            controls: ["fullscreenControl"]
        });

        Map.makeBalloonLayout();
        Map.makeContentLayout();
        Map.putData();

        Map.obj.addClass('inited');
    },

    getCenter: () => {
        return [47.269884, 39.683796];
    },

    getZoom: () => {
        return 14;
    },

    putData: () => {
        Map.putPoint();
    },

    putPoint: () => {
        var content = '<div class="map">' +
            '<a class="map-close" href="#">&times;</a>' +
            '<p class="name name--blue name--center">КЛЮЧАВТО</p>' +
            '<p class="name">Адрес:</p>' +
            '<p>г. Ростов-на-Дону, ул. Вавилова, 59К</p>' +
            '<p class="name">Время работы:</p>' +
            '<p>Пн-Вс с 08:00 - 20:00</p>' +
            '<p class="name">Телефон</p>' +
            '<a class="link link--big" href="tel:+78632119211">+7 (863) 211-92-11</a>' +
            '<p class="name" hidden>Электронная почта:</p>' +
            '<p class="mb-2"></p>' +
            '<div class="btn" js-popup>Заказать звонок</div>' +
            '</div>';

        var dealer = window.myPlacemark = new ymaps.Placemark(Map.getCenter(), {
            balloonContent: content
        }, {
            balloonShadow: false,
            balloonLayout: Map.layout,
            balloonContentLayout: Map.contentLayout,
            balloonPanelMaxMapArea: 0,
            iconLayout: 'default#imageWithContent',
            iconImageHref: 'static/img/svg/balloon.svg',
            iconImageSize: [40, 40],
            iconImageOffset: [-40, -40],
            balloonOffset: [-250, 10]
        });

        Map.map.geoObjects.add(dealer);
    },

    makeBalloonLayout: () => {
        Map.layout = ymaps.templateLayoutFactory.createClass(
            '<div class="map-dealer">' +
            '<div class="arrow"></div>' +
            '$[[options.contentLayout observeSize minWidth=290 maxWidth=290 maxHeight=400]]' +
            '</div>', {
                build: function() {
                    this.constructor.superclass.build.call(this);

                    this._$element = $('.map-dealer', this.getParentElement());

                    this.applyElementOffset();

                    this._$element.find('.map-close')
                        .on('click', $.proxy(this.onCloseClick, this));
                },
                clear: function() {
                    this._$element.find('.map-close')
                        .off('click');

                    this.constructor.superclass.clear.call(this);
                },
                onSublayoutSizeChange: function() {
                    Map.layout.superclass.onSublayoutSizeChange.apply(this, arguments);

                    if (!this._isElement(this._$element)) {
                        return;
                    }

                    this.events.fire('shapechange');
                },
                applyElementOffset: function() {
                    this._$element.css({
                        left: -(this._$element[0].offsetWidth / 2),
                        top: -(this._$element[0].offsetHeight + this._$element.find('.arrow')[0].offsetHeight)
                    });
                },
                onCloseClick: function(e) {
                    e.preventDefault();
                    this.events.fire('userclose');
                },
                getShape: function() {
                    if (!this._isElement(this._$element)) {
                        return Map.layout.superclass.getShape.call(this);
                    }

                    var position = this._$element.position();

                    return new ymaps.shape.Rectangle(new ymaps.geometry.pixel.Rectangle([
                        [position.left, position.top],
                        [
                            position.left + this._$element[0].offsetWidth,
                            position.top + this._$element[0].offsetHeight + this._$element.find('.arrow')[0].offsetHeight
                        ]
                    ]));
                },
                _isElement: function(element) {
                    return element && element[0] && element.find('.arrow')[0];
                }
            }
        )
    },

    makeContentLayout: () => {
        Map.contentLayout = ymaps.templateLayoutFactory.createClass(
            '<div>$[properties.balloonContent]</div>'
        );
    }
};

export default Map;