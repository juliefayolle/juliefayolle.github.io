$(document).ready(function(){
  $('a[data-action="getResult"]').on('click', function(e) {
    e.preventDefault();
    $('fieldset#diplome').prepend('<h4 class="style-reponses">BTS Communication</h4>');
    $('fieldset#formation').prepend('<h4 class="style-reponses">Vrai</h4>');
    $('fieldset#personnalite').prepend('<h4 class="style-reponses">Curieuse, patiente et créative</h4>');
    $('fieldset#stage').prepend('<h4 class="style-reponses">Janvier 2018</h4>');

  })
});
