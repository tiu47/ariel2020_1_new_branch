
// A $( document ).ready() block.
$( document ).ready(function() {
   alto = window.screen.height

   $('.intro').css({'height':alto+'px'})
   $('.works').css({'height':alto+'px'})
   $('.about').css({'height':alto+'px'})
    console.log( "ready!" );
})