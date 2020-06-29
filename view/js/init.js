(function($){
  $(function(){

    $('.sidenav').sidenav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

// dropdown (desplegable)
$('.dropdown-trigger').dropdown();

// tooltip (Mensajito emergente)
$(document).ready(function(){
  $('.tooltipped').tooltip();
});

// floatingActionButton (botón flotante)
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.fixed-action-btn');
  var instances = M.FloatingActionButton.init(elems, {
    direction: 'left',
    hoverEnabled: false
  });
});

// floatingActionButton (botón flotante)
$(document).ready(function(){
  $('.fixed-action-btn').floatingActionButton();
});

// para usar los tabs
$(document).ready(function(){
  $('.tabs').tabs();
});

// select
$(document).ready(function(){
  $('select').formSelect();
});

// datepicker (Calendario)
$(document).ready(function(){
  $('.datepicker').datepicker();
});

      