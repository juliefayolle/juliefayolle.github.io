
$(document).ready(function(){

$('a[data-action="getResult"]').on('click', function(event) {
    event.preventDefault();


    $.each($('#diplome input'), function(index, value) {
      if($(value).val() == 1) {
        $(value).parent().css('color', 'green');
      } else {
        $(value).parent().css('color', 'red');
      }
    })

    $.each($('#personnalite input'), function(index, value) {
      if($(value).val() == 1) {
        $(value).parent().css('color', 'green');
      } else {
        $(value).parent().css('color', 'red');
      }
    })

    $.each($('#formation input'), function(index, value) {
      if($(value).val().toLowerCase() == 'vrai') {
        $(value).val("vrai").css('background-color', 'green');
      } else {
        $(value).val("Réponse : VRAI ").css('background-color', 'red');

      }
    })

    $.each($('#stage select'), function(index, value) {
      if($(value).val() == 1 ) {
        $(value).val("Janvier 2018").css('background-color', 'green');
      } else {
        $(value).val("Janvier 2018").css('background-color', 'red');
      }
    })





  })
})
