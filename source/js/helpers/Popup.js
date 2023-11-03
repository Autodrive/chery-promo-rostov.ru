import './functions';

class Popup {
    constructor(popup) {
        this.popup = popup;
        this.close = popup.find('.popup-close, .close-popup');
        this.defaults = {
            title: "Заполните заявку на обратную&nbsp;связь"
        }
    }

    i() {
        this.addEvents();
    }

    show(data) {
        this.popup.find('.added').remove();
        this.popup.find('.form-group').show();
        this.popup.find('label.error').remove();
        this.popup.find('.error').removeClass('error');
        this.setFields(data);
        this.popup.addClass('open');
        $('html').addClass('no-scroll');
        $('html, header').css('margin-right', getScrollbarWidth());
    }

    hide() {
        $('html, header').css('margin-right', '0');
        $('html').removeClass('no-scroll');
        this.popup.removeClass('open');
        setTimeout(() => {
            this.popup.find('.added').remove();
            this.popup.find('input:not([type="hidden"],[type="submit"]), textarea, select ').each(function () {
                $(this).val('');
            });
        }, 300);
    }

    setFields(data) {
        var title = data.attr('data-title');

        if (title)
            this.popup.find('.popup-title').html(title);
        else
            this.popup.find('.popup-title').html(this.defaults.title);

        for (var i = 0; i < data[0].attributes.length; i++) {
            let key = data[0].attributes[i].nodeName;
            let val = data[0].attributes[i].nodeValue;
            if (key.indexOf('popup-') == 0)
                this.changeHiddenValue(key.slice(6), val);
        }
    }

    changeHiddenValue(name, val) {
        let hidden = this.popup.find('[name="' + name + '"]');

        if (!hidden.length)
            this.popup.find('form').prepend('<input type="hidden" class="added" name="' + name + '" value="' + val + '" >');
        else
            this.popup.find('[name="' + name + '"]').val(val);
    }

    addEvents() {
        var self = this;

        self.close.click(function () {
            self.hide();
        });
    }
}

export default Popup;