 <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
      <div class="shell">
        <h2 class="text-bold">Our Working Universities</h2>
        <hr class="divider bg-madison" />
        <div class="universities-slider owl-carousel">
          <!---start--->
          @if(isset($university))
          @foreach($university as $univer)
          <div class="universities_item">
            <div class="ourClient_img">
              <img src="{{$univer->banner_image}}" alt="our_client">
            </div>
          </div>
          @endforeach
          @endif
          <!----end--->
        </div>
      </div>
    </section>