<div class="container-fluid text-center min-vh-100 d-flex flex-column">
   <div class="row flex-grow-1">
      
      <div class="col-md-4 bg-grey hk_bold">
         Placeholder
      </div>

         <section id="ia_splide" class="splide col-md-8" aria-label="Splide Basic HTML Example">
            <!-- Add the progress bar element -->
            <div class="ia_splide-progress">
               <div class="ia_splide-progress-bar"></div>
            </div>

            <div class="splide__track">
                  <ul class="splide__list">
                     <li class="splide__slide">
                        <?php 
                           var_dump($keywords_list);
                        ?>
                     </li>
                     <li class="splide__slide">Slide 02</li>
                     <li class="splide__slide">Slide 03</li>
                  </ul>
            </div>

            <div class="splide__arrows btn-group btn-group-md">
               <button type="button" class="splide__arrow splide__arrow--prev btn btn-outline-primary">
                  <span class="fi fi-rr-angle-up"></span>
               </button>
               <button type="button" class="splide__arrow splide__arrow--next btn btn-outline-primary">
                  <span class="fi fi-rr-angle-down"></span>
               </button>
            </div>
         </section>

   </div>
</div>