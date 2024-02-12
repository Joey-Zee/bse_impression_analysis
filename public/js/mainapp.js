// Wait till all content is loaded into dom
document.addEventListener( 'DOMContentLoaded', function()
{
   // If there are active banners
   if ($( "#ia_splide" ).length)
   {
      // Get the slides so we know how many and a way to manipulate them
      const slides = document.querySelectorAll(".splide__slide");

      // Options for mobile
      if ($(window).width() < 768)
      {

      }
     
      var splide_opt = {
         type : 'slide', 
         perMove : 1,
         direction : 'ttb',
         pagination : false,
         height :'100%',
      };
   
      // Setup the slider object
      var splide = new Splide( '#ia_splide', splide_opt )

      // Progress Bar
      var bar = splide.root.querySelector( '.ia_splide-progress-bar' );

      // Updates the bar width whenever the carousel moves:
      splide.on( 'mounted move', function () {
         var end  = splide.Components.Controller.getEnd() + 1;
         var rate = Math.min( ( splide.index + 1 ) / end, 1 );
         bar.style.width = String( 100 * rate ) + '%';
      } );

      // Init the slider
      splide.mount();

   };
   
});