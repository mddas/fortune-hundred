
	 

	@extends('layouts.master')
    @section("content")

<!-----yakendra---->
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
						<!----start--->
						@foreach($photos as $photo)
                        <div class="cell-xs-10 cell-sm-6 cell-md-4">
                            <figure class="thumbnail-classic thumbnail-md">
                                <div class="thumbnail-classic-img-wrap">
                                    <img src="images/gallery/gallery.webp" alt="" width="370" height="370" />
                                </div>
                                <figcaption class="thumbnail-classic-caption text-center">
                                    <div>
                                        <h4 class="thumbnail-classic-title">{{$photo->caption}}</h4>
                                    </div>
                                    <hr class="divider divider-sm" />

                                    <div class="offset-top-20 veil reveal-lg-block">
                                        <a class="thumbnail-classic-link icon novi-icon icon-xxs fa-search-plus"
                                            href="/uploads/photo_gallery/{{$photo->file}}"
                                            data-lightgallery="item">

                                            <img src="/uploads/photo_gallery/{{$photo->file}}"
                                                alt="" width="370" height="370" />


                                        </a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
						@endforeach
						<!---close--->

                    </div>
                </div>
            </div>
        </section>


<!----yakendra close--->
		  


		  <!-- <script>
			  // $('#lightgallery').html('')
			
			  $.ajax({  
				type: 'GET',  
				url: '/get_gallery_photos', 
				data: { slug: "$slug" },
				success: function(data) {
					$.each( data, function( key, value ) {
							$('#lightgallery').append('<div class="item col-md-3" data-src="/uploads/photo_gallery/'+value['file']+'" data-sub-html="'+value['name']+'">\
									<a href="">\
										<img src="/uploads/photo_gallery/'+value['file']+'" alt="'+value['name']+'"/>\
										<div class="gallery-overlay"><img src="/website/images/home/plus.png"></div>\
									</a>\
								</div>')
						});
				}
			});
	    </script> -->
    @endsection
    
