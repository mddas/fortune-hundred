
			


@extends('layouts.master')
    @section("content")
       
			<!--
			=====================================================
				Google Map
			=====================================================
			-->
			<!-- Google Map -->
			<div class="google-map-two">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14130.158104648897!2d85.2769905!3d27.7006235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xee785c7b2619b6b8!2sRaki%20International%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1659951335320!5m2!1sen!2snp" width="100%" height="368px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>


			<!------md----->
					<section class="sahid_contact_detail_raki mt-5 p-5">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2>Are You Interest To Contact With Us?</h2>
                <div class="add-contact mt-5">
					@if(isset($contacts))
					@foreach($contacts as $cont)
                        <span class="call-us wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><i class="fas fa-map-marker-alt"></i><div class="contact_info_detail">
                                <h4>{{$cont->caption}}</h4>
                                <span><a href="#">@php echo $cont->long_content; @endphp </a></span>
                            </div></span>
					@endforeach
					
					@else
					 	<span class="call-us wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><i class="fas fa-map-marker-alt"></i><div class="contact_info_detail">
                                <h4>Location</h4>
                                <span><a href="#">Nepal,977-1-5224501,info@rakiint.com.np</a></span>
                            </div></span>
					@endif
                    <!-- <span class="call-us wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"><i class="fas fa-phone-volume"></i><div class="contact_info_detail">
                                <h4>Our Location</h4>
                                <span><a href="#">977-01-5218921, 5219934, 5219935</a></span>
                            </div></span>
                    <span class="call-us wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><i class="fas fa-envelope"></i><div class="contact_info_detail">
                                <h4>Email</h4>
                                <span><a href="#">info@sahidhospitalkalanki.com</a></span>
                            </div></span> -->

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <div class="contact_form">
                    <div role="form" class="wpcf7" id="wpcf7-f59-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <h3 class="section-title text-center">Make An Appointment</h3>
                       <form action="{{route('contactstore')}}" method="POST" class="theme-form-one form-validation" autocomplete="on" enctype='multipart/form-data'>
									 @csrf	
                    
                            <p><label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" placeholder="Name *" name="name">
                                </span>
                                </label>
                            </p>
                            <p><label>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" placeholder="Email *" name="email">
                                </span>
                                </label>
                            </p>
                            <p><label>
                                <span class="wpcf7-form-control-wrap your-subject">
                                    <input type="text" placeholder="Phone *" name="number">
                                </span>
                                </label>
                            </p>
                            <p><label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea placeholder="Message" name="message"></textarea>
                                </span>
                                </label></p>
                            <p><button type="submit" class="theme-button-one">Submit</button></p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
			<!----md end---->
@endsection

	