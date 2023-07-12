$(document).ready(function() {
  $('input[id^="notaimput"]').on('input', function() {
    var value = $(this).val();
    value = value.replace(/\s/g, ''); 

    $(this).val(value);

    if (value === '' || isNaN(value)) {
      $(this).val('');
    } else {
      var number = parseFloat(value);

      if (number < 0 || number > 20) {
        $(this).val('');
      }
    }
  });
});