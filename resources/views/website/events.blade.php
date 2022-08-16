  <section class="section novi-background bg-cover section-70 section-md-114 bg-catskill">
      <div class="shell-wide">
        <h2 class="text-bold">Events</h2>
        <hr class="divider bg-madison" />
        <div class="range range-50 offset-top-50 range-xs-center">
          <!----events start----->
          @if(isset($events))
          @foreach($events as $event)
          <div class="cell-sm-6 cell-md-5 cell-xl-3">
            <article class="post-event">
              <div class="post-event-img-overlay">
                <img class="img-responsive"
                  src="{{$event->banner_image}}"
                  alt="" width="420" height="420" />
                <div class="post-event-overlay context-dark">
                  <div class="offset-top-20">
                    <a class="btn btn-default" href="{{route('readmore',$event->nav_name)}}">Learn More</a>
                  </div>
                </div>
                <div class="post-event-meta text-center">
                  <div class="h3 text-bold reveal-inline-block reveal-lg-block">
                    31
                  </div>
                  <p class="reveal-inline-block reveal-lg-block">{{$event->created_at}}</p>
                  <span
                    class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                </div>
              </div>
              <div class="unit unit-lg unit-lg-horizontal">
                <div class="unit-body">
                  <div class="post-event-body text-lg-left">
                    <h6><a href="event-page.html">{{$event->caption}}</a></h6>
                    <ul class="list-inline list-inline-xs">
                      <li>
                        <a href="{{route('readmore',$event->nav_name)}}"><span class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle"
                            style="color: #2c3590"></span><span class="inset-left-10 text-dark text-middle">{{$event->short_content}}</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
          </div>
          @endforeach      
          @endif   
          <!-----end events---->
        </div>

      </div>
    </section>