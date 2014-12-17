
<!--  Carousel - consult the Twitter Bootstrap docs at
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
  <div class="carousel-inner">
    <div class="item active"><!-- class of active since it's the first item -->
         {{ HTML::image('images/img1.jpg', 'img1') }}
      <div class="carousel-caption">
        <p></p>
      </div>
    </div>
    <div class="item">
      {{ HTML::image('images/img2.jpg', 'img2') }}
      <div class="carousel-caption">
        <p></p>
      </div>
    </div>
    <div class="item">
      {{ HTML::image('images/img3.jpg', 'img3') }}
      <div class="carousel-caption">
        <p></p>
      </div>
    </div>
    <div class="item">
      {{ HTML::image('images/img4.jpg', 'img4') }}
      <div class="carousel-caption">
        <p></p>
      </div>
    </div>
    <div class="item">
      {{ HTML::image('images/img5.jpg', 'img5') }}
      <div class="carousel-caption">
        <p></p>
      </div>
    </div>
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
    <script>
      $(document).ready(function(){
        $('.carousel').carousel({interval: 6000});
      });
    </script>
</div><!-- /.carousel -->

