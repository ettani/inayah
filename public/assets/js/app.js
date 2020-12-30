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


    // $( "#click" ).click(function() {
    //     alert( "Handler for .click() called." );
    // });

    //Dès qu'on clique sur #participer, on applique show() au titre
    // $("#click").click(function(event){
    //     event.preventDefault();
    //     $(".tablep").show();
    // });
});
