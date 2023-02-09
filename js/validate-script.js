$(document).ready(function () {
  $("form").addClass('order-form');
  $("form input[name=name], form input[name=phone]").attr('required', 'true');
  $("form input[name=name], form input[name=phone]").attr('autocomplete', 'off');

  filter();
  validateForm();
});
function filter() {
  $('input[name="phone"]').on('keyup keypress', function (e) {
    if (e.keyCode == 8 || e.keyCode == 46) {
    }
    else {
      var letters = ' 1234567890()-+';
      return (letters.indexOf(String.fromCharCode(e.which)) != -1);
    }
  });
}
function validateForm() {
  $('.order-form').each(function () {
    $(this).validate({
      rules: {
        "name": {
          required: true,
        },
        phone: 'customphone'
      }
    });
  });
}
$.validator.addMethod('customphone', function (value, element) {
  return this.optional(element) || /^([+]?[ 0-9-\(\)]{3,25})*$/i.test(value);
}, "Введите корректный телефон");