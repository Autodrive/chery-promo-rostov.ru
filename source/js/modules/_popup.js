import Popup from '../helpers/Popup';
import '../helpers/functions';

$(document).ready(function () {
    var popup = new Popup($('.popup'));
    popup.i();
    
    $(document).on('click', '[js-popup]', function (e) {
        e.stopPropagation();
        e.preventDefault();
        if ($('#popup').find('select').length)
            form.update($('#popup').find('select'));
        popup.show($(this));
    });
});