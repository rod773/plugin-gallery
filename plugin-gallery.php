<?php
/*
Plugin Name: Plugin Gallery
Description: Coverflow slider
Version: 1.0.0
Author: Rodrigo
*/



function load_scripts(){
    
   $path = plugin_dir_url( __FILE__ );


    wp_enqueue_style('slider_css', $path . 'style.css', date("h:i:s"));


    wp_enqueue_script('slider_js', $path. 'script.js', [], date("h:i:s"), true);


   
}


add_action('wp_footer','load_scripts');


/*
 <!-- partial:index.partial.html -->
    <div class="wgh-container">
      <div class="wgh-slider">
        <input class="wgh-slider-target" type="radio" id="slide-1" name="slider" />
        <input class="wgh-slider-target" type="radio" id="slide-2" name="slider" />
        <input class="wgh-slider-target" type="radio" id="slide-3" name="slider" checked="checked" />
        <input class="wgh-slider-target" type="radio" id="slide-4" name="slider" />
        <input class="wgh-slider-target" type="radio" id="slide-5" name="slider" />
        <div class="wgh-slider__viewport">
          <div class="wgh-slider__viewbox">
            <div class="wgh-slider__container">
              <div class="wgh-slider-item">
                <div class="wgh-slider-item__inner">
                  <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                      src="http://plataformadelmayor.org/wp-content/uploads/2024/08/gallery1.jpg"
                      alt="The 5th Exotic" />
                    <figcaption class="wgh-slider-item-figure__caption"><a href="#">The 5th
                        Exotic</a><span>Quantic</span>
                    </figcaption>
                  </figure>
                  <label class="wgh-slider-item__trigger" for="slide-1" title="Show product 1"></label>
                </div>
              </div>
              <div class="wgh-slider-item">
                <div class="wgh-slider-item__inner">
                  <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                      src="http://plataformadelmayor.org/wp-content/uploads/2024/08/gallery2.jpg"
                      alt="The 5th Exotic" />
                    <figcaption class="wgh-slider-item-figure__caption"><a href="#">The 5th
                        Exotic</a><span>Quantic</span>
                    </figcaption>
                  </figure>
                  <label class="wgh-slider-item__trigger" for="slide-2" title="Show product 2"></label>
                </div>
              </div>
              <div class="wgh-slider-item">
                <div class="wgh-slider-item__inner">
                  <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                      src="http://plataformadelmayor.org/wp-content/uploads/2024/08/gallery3.jpg"
                      alt="The 5th Exotic" />
                    <figcaption class="wgh-slider-item-figure__caption"><a href="#">The 5th
                        Exotic</a><span>Quantic</span>
                    </figcaption>
                  </figure>
                  <label class="wgh-slider-item__trigger" for="slide-3" title="Show product 3"></label>
                </div>
              </div>
              <div class="wgh-slider-item">
                <div class="wgh-slider-item__inner">
                  <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                      src="http://plataformadelmayor.org/wp-content/uploads/2024/08/gallery4.jpg"
                      alt="The 5th Exotic" />
                    <figcaption class="wgh-slider-item-figure__caption"><a href="#">The 5th
                        Exotic</a><span>Quantic</span>
                    </figcaption>
                  </figure>
                  <label class="wgh-slider-item__trigger" for="slide-4" title="Show product 4"></label>
                </div>
              </div>
              <div class="wgh-slider-item">
                <div class="wgh-slider-item__inner">
                  <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image"
                      src="http://plataformadelmayor.org/wp-content/uploads/2024/08/gallery5.jpg"
                      alt="RYSY - Traveler LP" />
                    <figcaption class="wgh-slider-item-figure__caption"><a href="#">RYSY - Traveler
                        LP</a><span>RYSY</span>
                    </figcaption>
                  </figure>
                  <label class="wgh-slider-item__trigger" for="slide-5" title="Show product 5"></label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- partial -->

*/