$(document).ready(function(){
  $('a[data-action="getResult"]').on('click', function(e) {
    e.preventDefault();
    $.each($('#knowMe input'), function(index, value) {
      if($(value).val() == 1) {
          debugger;
          $(value).css('background-color', 'green');
      }
    })
  })

});
