@extends("layouts.master")
   @section('content')
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
            <!---start--->
            <div class="cell-xs-10 cell-sm-6 cell-md-4">

              <div class="image_gallery_photo">
                <img src="{{$albumb->banner_image}}" alt="" width="370" height="370" />
                <a @if(isset($video)) href="{{route('videogallery',$albumb->nav_name)}}" @else href="{{route('galleryview',$albumb->nav_name)}} @endif">{{$albumb->caption}}</a>
              </div>


            </div>
            <!-----end foreach--->
          </div>
        </div>
      </div>
    </section>

    @endsection