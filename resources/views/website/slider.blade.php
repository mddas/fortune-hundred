 <section class="section">
      <div class="swiper-container swiper-slider swiper-slider-modern swiper-slider-2" data-loop="true"
        data-dragable="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
          <!---slider start--->
           @if(isset($sliders))
           @foreach($sliders as $slider)
              <div class="swiper-slide" style="
                    background-image: linear-gradient(
                        rgba(27, 40, 92, 0.7),
                        rgba(28, 35, 61, 0.7)
                      ),
                      url(images/slider/sliider2.jpeg);
                    background-size: cover;
                  ">
                <div class="swiper-slide-caption section-70">
                  <div class="container">
                    <div class="range range-xs-center">
                      <div class="cell-md-9 cell-xs-10">
                        <div data-caption-animate="fadeInUp" data-caption-delay="100">
                          <h1 class="text-bold">{{$slider->caption}}</h1>
                        </div>
                        <div class="offset-top-20 offset-xs-top-40 offset-xl-top-15" data-caption-animate="fadeInUp"
                          data-caption-delay="150">
                          <h6 class="">
                            <span data-novi-id="0">{{$slider->short_content}}</span>
                          </h6>
                        </div>
                        <div class="offset-top-20 offset-xl-top-30" data-caption-animate="fadeInUp"
                          data-caption-delay="400">
                          <div class="group-xl group-middle">
                            <a class="btn btn-primary" href="#">Start a Journey</a><a class="btn btn-default"
                              href="#">Contact us</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            @endif
          <!-----slider end----->
        </div>
        <div class="swiper-button-prev fa-arrow-left"></div>
        <div class="swiper-button-next fa-arrow-right"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>