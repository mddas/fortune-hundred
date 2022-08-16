    <section class="section context-dark section-image-aside section-image-aside-left">
      <div class="novi-background bg-cover section-70 section-md-114 bg-madison">
        <div class="shell">
          <div class="range range-xs-center range-sm-right offset-top-0">
            <div class="cell-xs-10 cell-sm-7 text-sm-left">
              <div class="section-image-aside-img bg-cover veil reveal-sm-block" style="
                    background-image: url(https://images.pexels.com/photos/8617981/pexels-photo-8617981.jpeg?auto=compress&cs=tinysrgb&w=600);
                  "></div>
              <div class="section-image-aside-body inset-sm-left-70 inset-lg-left-110">
                <h2 class="text-bold">Our Services</h2>
                <hr class="divider hr-sm-left-0 bg-white" />
                <div class="offset-top-30 offset-md-top-30 text-light">
                  Want to study abroad ? Get free expert advice and information on colleges, courses, exams, admission, student visa, and application process to study overseas.
                </div>
                <div class="text-left post-vacation-wrap offset-top-30">
                  <!------our service start---->
                  @if(isset($services))
                  @foreach($services as $service)
                    <article class="post-vacation">
                        <a class="post-vacation-img-wrap bg-cover bg-image" href="abroad-study-country.html" style="
                              background-image: url({{$service->banner_image}});
                            "></a>
                        <div class="post-vacation-body">
                          <div>
                            <h6 class="post-vacation-title">
                              <a href="/study-abroad">{{$service->caption}}</a>
                            </h6>
                          </div>
                          <div class="offset-lg-top-10">
                            <p>
                             {{$service->short_content}}
                            </p>
                          </div>
                          <div class="post-vacation-meta offset-top-10">
                            <time class="text-dark" </div>
                          </div>
                      </article>
                  @endforeach
                  @endif       
                  <!----our services End----->
                </div>
                <div class="offset-top-60">
                  <a class="servicesButton" href="/study-abroad">
                    View All Services</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>