$(document).ready(function() {
    $('#don').keyup(function () {
      if ($('#don').val() <= 0 || $('#don').val() == null) {
        $('#valeur').text(0);
      } else {
        $('#valeur').text($(this).val());
      }
      $('#reduc').text($(this).val()*66/100);
      $('#donTotal').text($(this).val()*34/100);
    });
});
