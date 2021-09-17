<?php ?>
<div class="row">
  <div class="col s10">
      <div class="card-panel">
        <p> Mi nombre es Carlos Capriel y este es mi blog personal :D, aqui les estare platicando
           sobre mis experiencias y sobre mi vidad y mis gustos, no me juzguen :D 
        </p>
      </div>
    </div>
  </div>
    <div class="container section">
      <div class="row">
        <div class="col s12">
          <div class="carousel carousel-slider">
            <a class="carousel-item" href="">
              <img src="wallpaper.jpg" alt="">
            </a>
            <a class="carousel-item" href="">
              <img src="wallpaper2.jpg">
            </a>
            <a class="carousel-item" href="">
              <img src="wallpaper3.jpg">
            </a>
            <a class="carousel-item" href="">
              <img src="wallpaper4.jpeg">
            </a>
          </div>
        </div>
      </div>
    </div>
<script>
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems);
      });
</script>