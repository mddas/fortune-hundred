@extends("layouts.master")
   @section('content')
        <section class="section breadcrumb-modern context-dark parallax-container" style="background-image:   linear-gradient(
                          rgba(27, 40, 92, 0.7),
                          rgba(28, 35, 61, 0.7)
                        ) ,url(images/about/mission.webp)">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">Study Abroad</h2>

                    <ul class="list-inline list-inline-lg list-inline-dashed p">
                        <li><a href="index.html">Home</a></li>
                        <li>Study Abroad</li>
                    </ul>

                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-catskill">
            <div class="shell-wide">
                <div class="range range-50 range-xs-center range-xl-left">
                    <!----alabum----->
                    @foreach($albumbs as $albumb)
                    <div class="cell-sm-6 cell-md-5 cell-xl-3">
                        <article class="post-event">
                            <div class="post-event-img-overlay"><img class="img-responsive"
                                    src="{{$albumb->banner_image}}"
                                    alt="" width="420" height="420">
                            </div>
                            <div class="unit unit-lg unit-lg-horizontal">
                                <div class="unit-body">
                                    <div class="post-event-body text-lg-left">
                                        <h6><a @if(isset($video)) href="{{route('videogallery',$albumb->nav_name)}}" @else href="{{route('galleryview',$albumb->nav_name)}} @endif">{{$albumb->caption}}</a></h6>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                   @endforeach
                <!------end albumb---->
                   


                </div>
            </div>
        </section><!-- Corporate footer-->

        <!----yakendra--->


        <section class="section breadcrumb-modern context-dark parallax-container" style="background-image:   linear-gradient(
                              rgba(27, 40, 92, 0.7),
                              rgba(28, 35, 61, 0.7)
                            ) ,url(images/gallery/gallery.webp)">
      <div class="parallax-content section-30 section-sm-70">
        <div class="shell">
          <h2 class="veil reveal-sm-block">Image Gallery</h2>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
              <li><a href="index.html">Home</a></li>

              <li>Image Gallery</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
      <div class="shell">
        <hr class="divider bg-madison" />
        <div class="offset-top-60">
          <div class="range range-30 range-xs-center" data-lightgallery="group">
            <div class="cell-xs-10 cell-sm-6 cell-md-4">

              <div class="image_gallery_photo">
                <img src="/website/images/gallery/gallery.webp" alt="" width="370" height="370" />
                <a href="image-item.html">Travel</a>
              </div>


            </div>

            <div class="cell-xs-10 cell-sm-6 cell-md-4">

              <div class="image_gallery_photo">
                <img src="/website/images/gallery/gallery.webp" alt="" width="370" height="370" />
                <a href="image-item.html">Travel</a>
              </div>


            </div>
            <div class="cell-xs-10 cell-sm-6 cell-md-4">

              <div class="image_gallery_photo">
                <img src="/website/images/gallery/gallery.webp" alt="" width="370" height="370" />
                <a href="image-item.html">Travel</a>
              </div>


            </div>
            <div class="cell-xs-10 cell-sm-6 cell-md-4">

              <div class="image_gallery_photo">
                <img src="/website/images/gallery/gallery.webp" alt="" width="370" height="370" />
                <a href="image-item.html">Travel</a>
              </div>


            </div>
            <div class="cell-xs-10 cell-sm-6 cell-md-4">

              <div class="image_gallery_photo">
                <img src="/website/images/gallery/gallery.webp" alt="" width="370" height="370" />
                <a href="image-item.html">Travel</a>
              </div>


            </div>
            <div class="cell-xs-10 cell-sm-6 cell-md-4">

              <div class="image_gallery_photo">
                <img src="/website/images/gallery/gallery.webp" alt="" width="370" height="370" />
                <a href="image-item.html">Travel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection