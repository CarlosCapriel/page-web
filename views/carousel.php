<?php ?>

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