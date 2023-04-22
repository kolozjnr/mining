<?php require_once"header.php" ?>
        <section class="container">
            <?php require_once"logo.php" ?>
<style>
  

#slider {
  border: 3px solid #F9F9F9;
}

.slide-item {
  color: #fff;
  text-align: center;
  font-size: 0.9em;
  color: #000;
}

.carousel-indicators {
  display: table;
  left: 0;
  text-align: center;
  position: absolute;
  width: 100%;
  bottom: 10px;
  margin-left: 0;
  padding-right: 30px;
}

.carousel-indicators li {
  position: relative;
  width: 150px !important;
  height: auto !important;
  margin: 0;
  cursor: auto;
  background-color: initial !important;
  border: none;
  border-radius: initial;
  text-indent: initial;
  display: inline-block;
}

.dots,
.carousel-indicators> li:last-child:after {
  width: 30px;
  height: 30px;
  background: #231A42;
  border-radius: 50px;
  display: block;
  padding: 2px;
}

.dots>span {
  display: block;
  height: 100%;
  background: #fff;
  cursor: pointer;
  border-radius: 50%;
  opacity: 0;
}

.line-wrapper {
  position: absolute;
  width: 120px;
  background: #231A42;
  height: 8px;
  top: 0;
  bottom: 0;
  margin: auto;
  right: 0;
}

.line {
  width: 0;
  background: #fff;
  position: absolute;
  top: 0;
  left: 0;
  height: 4px;
  bottom: 0;
  margin: auto 0;
}

.carousel-indicators> li {
  position: relative;
}

.carousel-indicators> li:last-child:after {
  content: '';
  position: absolute;
  right: -30px;
  top: 0;
}
</style>
            <div class="wrapper">
            <div class="container">
  <div id="slider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="active">
        <div class="dots" data-target="#slider" data-slide-to="0"><span></span></div>
        <span class="line-wrapper"><span class="line"></span></span>
      </li>
      <li>
        <div class="dots" data-target="#slider" data-slide-to="1"><span></span></div>
        <span class="line-wrapper"><span class="line"></span></span>
      </li>
      <li>
        <div class="dots" data-target="#slider" data-slide-to="2"><span></span></div>
        <span class="line-wrapper"><span class="line"></span></span>
      </li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="slide-item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et est architecto ut aliquam eveniet illum earum saepe aut delectus optio?</div>
      </div>
      <div class="item">
        <div class="slide-item">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis asperiores et dolores rerum incidunt aliquam illo consequuntur placeat inventore. Perferendis provident libero blanditiis dolores repudiandae et voluptate explicabo error odit?</div>
      </div>
      <div class="item">
        <div class="slide-item">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque, non quod nulla aperiam repellat, tempore autem beatae dignissimos vitae soluta eligendi quidem dolore!</div>
      </div>
    </div>
  </div>
</div>
            </div>

        </section>
        <script>
            jQuery(document).ready(function($) {
  var slider = $('#slider'),
    items = slider.find('li'),
    count = items.length,
    time = 5000;
  slider.carousel({
    interval: time,
    pause: "false"
  });
  animate(0);
  slider.on('slide.bs.carousel', function(event) {
    var active = $(event.target).find('.carousel-inner > .active'),
      pos_prev = $(event.relatedTarget).index();
    animate(pos_prev);
  });
  items.find('.dots').click(function(event) {
    reset($(this).data('slide-to'), true);
  });

  function reset(index, goto = false) {
    items.find('.dots>span').css('opacity', 0);
    items.find('.line').stop().width(0);
    animate(index);
    if (goto == true) {
      items.eq(index).prevAll().find('.dots>span').css('opacity', 1);
      items.eq(index).prevAll().find('.line').width('100%');
    }
  }

  function animate(index) {
    if (index < count) {
      items.eq(index).find('.dots>span').css('opacity', 1);
      items.eq(index).find('.line').stop().animate({
        width: '100%',
      }, time, function() {
        if (index == count - 1) {
          reset(0);
        }
      });
    }

  }
});
        </script>
<?php require_once"footer.php" ?>