 <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
      <div class="shell">
        <h2 class="text-bold">Statistics</h2>
        <hr class="divider bg-madison" />
        <div class="range range-65 range-xs-center range-md-left offset-top-55 counters">
          <!---start---->
          @if(isset($statistics))
          @foreach($statistics as $stastic)
          <div class="cell-sm-6 cell-md-3">
            <div class="counter-type-1">
              <span class="icon novi-icon icon-lg icon-outlined text-madison mdi mdi-school"></span>
              <div class="h3 text-bold text-primary offset-top-15">
                <span class="counter">{{$stastic->caption}}</span><span class="symbol">%</span>
              </div>
              <hr class="divider bg-gray-light divider-sm" />
              <div class="offset-top-10">
                <h6 class="text-black font-accent">{{$stastic->short_content}}</h6>
              </div>
            </div>
          </div>
          @endforeach
          @endif
          <!-------end stastics----->
        </div>
      </div>
    </section>