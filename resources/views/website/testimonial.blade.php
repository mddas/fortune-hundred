<section
      class="section novi-background bg-cover section-70 section-xl-100 section-xl-bottom-114 bg-madison context-dark position-relative">
      <div class="owl-carousel owl-carousel-default veil-xl-owl-dots veil-owl-nav reveal-xl-owl-nav" data-items="1"
        data-nav="true" data-dots="true" data-nav-class='["owl-prev fa-angle-left", "owl-next fa-angle-right"]'>
        <!----start---->
        @if(isset($testimonials))
        @foreach($testimonials as $test)
        <div>
          <div class="shell">
            <div class="range range-xs-center range-xs-middle">
              <div class="cell-sm-9 cell-sm-push-1">
                <div class="quote-classic-boxed text-center">
                  <div class="quote-body">
                    <q>{{$test->long_content}}</q>
                    <div class="offset-top-30 text-center">
                      <cite class="font-accent">{{$test->caption}}</cite>
                      <div class="offset-top-5">
                        <p class="text-dark text-italic">
                          {{$test->short_content}}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @endif
        <!----End----->
      </div>
    </section>