@extends('layouts.app')
@section('main')
<div style="height:110px; background-color:gray">
@include('layouts.header')
</div>
<div class="map-grid">
	     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13677.625435099686!2d77.07371475000001!3d31.01492615!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4f4fefd65caa0317!2sJaypee+University+of+Information+Technology!5e0!3m2!1sen!2sin!4v1511038127908"> </iframe>
	    </div>
  <!-- contact -->
<div class="contact">
   <div class="container"> 
   <h3 class="title clr">Contact</h3>
   <div class="contact-two-grids">
<div class=" col-md-4 col-sm-5 contact-icons">
         <h5> Get In Touch </h5>
 				<div class=" footer_grid_left">
					<div class="col-md-3 col-sm-3 icon_grid_left">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
					</div>
					<div class=" col-md-9 col-sm-9 address-gried">
					<p>Jaypee university of information Technology<span>Waknaghat, Solan, H.P.</span></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="footer_grid_left">

					<div class="col-md-3 col-sm-3 icon_grid_left">
						<span class="fa fa-volume-control-phone" aria-hidden="true"></span>
					</div>
					<div class=" col-md-9  col-sm-9 address-gried">
					<p>+(91) 9805055335 <span>+(91) 9805104370</span></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				<div class="footer_grid_left">
					<div class="col-md-3 col-sm-3 icon_grid_left">
						<span class="fa fa-envelope" aria-hidden="true"></span>
					</div>
						<div class=" col-md-9 col-sm-9 address-gried">
			
					<p><a href="mailto:info@example.com">info@ieeejuit.in</a>
						<span><a href="mailto:info@example.com">sanchit.juit@gmail.com</a></span></p>
					</div>
				</div>

					<div class="clearfix"> </div>
			</div>
   <div class="col-md-8 col-sm-7 contact-us">
   @if (Session::has('flash_message'))
<div class="alert alert-success">{{ Session::get('flash_message')}}</div>
@endif
   <form action="{{route('contact.store')}}" method="post">{{ csrf_field() }}
							<div class="col-md-6 styled-input">
						
								<input type="text" name="Name" placeholder="Name" required="">
						
							</div>
							<div class="col-md-6 styled-input">

								<input type="email" name="Email" placeholder="Email" required=""> 
								
							</div> 

							<div class="clearfix"> </div>
							<div class="styled-input">

								<input type="text" name="phone" placeholder="phone" required="">
							
							</div>
							<div class="styled-input">
							
								<textarea name="Message" placeholder="Message" required=""></textarea>
							
							</div>	 
							<div>
							<div class="click">
							<input type="submit" value="SEND">
							</div>
							</div>
						</form>
					  </div>
					</div>
						<div class="clearfix"> </div>
 
   				
</div>
 </div>


@stop