$(document).ready(function () {
    $('input[type="tel"]').inputmask({
        mask: "+7 (999) 999-99-99",
        showMaskOnHover: false
    });

    $('.btn').each(function () {
        $(this).on('click', addElement);
    });

    function addElement(e) {
        var addDiv = document.createElement('div'),
            mValue = Math.max(this.clientWidth, this.clientHeight),
            rect = this.getBoundingClientRect(),
            sDiv = addDiv.style,
            self = $(this);

        sDiv.width = sDiv.height = mValue + 'px';
        sDiv.left = e.clientX - rect.left - (mValue / 2) + 'px';
        sDiv.top = e.clientY - rect.top - (mValue / 2) + 'px';
        addDiv.classList.add('pulse');
        var div = addDiv;
        this.appendChild(addDiv);

        setTimeout(function () {
            self.find(div).remove();
        }, 700)
    }
});