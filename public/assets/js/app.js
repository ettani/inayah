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



    $('#myTable').DataTable();
    $('#myTable2').DataTable();
    $('#myTable3').DataTable();
    $('#myTable4').DataTable();

});

function marqueelike() {
    $('.messagedefilant').each(function() {
        var texte = $(this).html();
        $(this).html('<div><span>' + texte + '</span><span>' + texte + '</span></div>');
    });
}

$(window).on('load', function() {
    marqueelike();
});
