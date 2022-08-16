  <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
      <div class="shell">
        <div class="range range-50">
          <div class="cell-sm-4 cell-sm-push-2 text-sm-left">
            <div class="inset-sm-left-50">
              <img class="img-responsive reveal-inline-block img-rounded"
                src="{{$message->banner_image ?? ''}}"
                alt="" width="340" height="300" />
              <div class="offset-top-20">
                <h6 class="text-primary text-bold">{{$message->caption ?? ''}}</h6>
              </div>

            </div>
          </div>
          <div class="cell-sm-8 cell-sm-push-1 text-sm-left">
            <h2 class="text-bold">{{$message->short_content ?? ''}}</h2>
            <hr class="divider bg-madison hr-sm-left-0" />
            <div class="offset-top-30 offset-sm-top-30">
              <p>
                {{$message->long_content ?? ''}}
              </p>
            </div>
            <a href="/about/massage-from-chairman" class="message_readMore"> Read More</a>

          </div>
        </div>
      </div>
    </section>