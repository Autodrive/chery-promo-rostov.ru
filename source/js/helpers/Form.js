import Validate from './Validate';

class Form {
  constructor(obj) {
    this.form = obj;
  }

  getValues() {
    if (! this.values) {
      this.values = {};

      let serialize = this.form.serializeArray()
      for (let i in serialize)
        this.values[serialize[i].name] = serialize[i].value;
    }

    return this.values;
  }

  isValid() {
    this.hideErrors();

    this.errors = {};

    // проверка phone
    if (this.form.find('[name="phone"]').length) {
      let value = this.getValues().phone;

      if (! Validate.phone(value))
        this.errors.phone = 'Укажите корректный телефон';
    }

    // Проверка email
    if (this.form.find('[name="email"][required]').length) {
      let value = this.getValues().email;

      if (! Validate.email(value))
        this.errors.email = 'Укажите корректный Email';
    }

    // Проверка на required
    for (let i = 0; i < this.form.find('[required]').length; i++) {
      let elem = this.form.find('[required]').eq(i);

      if (elem.val() == '') {
        this.errors[elem.attr('name')] = 'Поле обязательно для заполнения';
      }
    }

    // Проверка select
    for (let i = 0; i < this.form.find('select').length; i++) {
      let elem = this.form.find('select').eq(i);
      if (! (elem.parent().css('display') === 'none')) {
        if ((! elem.val()) && (elem.val() != [])) {
          elem.parent().find('.rolf-select-head').addClass('error');
          this.errors[elem.attr('name')] = 'Выберите одно из полей';
        }
      }
    }

    return Object.keys(this.errors).length == 0;
  }

  url(value) {
    if (! value)
      return this.uri;

    this.uri = value;

    return this;
  }

  clear() {
    this.form.find('input:not([type="hidden"]):not([type="submit"]), select, textarea').val('');
    this.form.find('input, select, textarea').each(function() {
      $(this).next().text('');
    });
  }

  hideErrors() {
    for (name in this.getValues())
      this.hideError(name)
  }

  hideError(name) {
    this.form.find('[name="' + name + '"]').removeClass('error');
    this.form.find('label[for="' + name + '"].error').remove();
  }

  showError(name, msg) {
    this.form.find('[name="' + name + '"]').addClass('error');
    if (this.form.find('[name="' + name + '"]').next('label.error[for="' + name + '"]').length)
      this.form.find('[name="' + name + '"]').next().html(msg);
    else
      this.form.find('[name="' + name + '"]').after('<label for="' + name + '" generated="true" class="error">' + msg + '</label>');
  }
}

export default Form;