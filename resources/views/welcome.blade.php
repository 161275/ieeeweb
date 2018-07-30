@extends('layouts.app')
@section('main')
			<!-- Collect the nav links, forms, and other content for toggling -->
			@include('layouts.header')
 <!-- Slideshow 4 -->
 <div class="slider">
    <div class="callbacks_container">
      <ul class="rslides" id="slider4">
        <li>
         			<div class="slider-img w3-oneimg">
					 <div class="container">
		             <div class="slider-info">
						<h4>We Build <span class="home-banner"> Your Dream</span> </h4>
						<p>The world's largest technical professional organization for the advancement of technology.</p>
						<div class="w3layouts_more-buttn">
							<a href="#" data-toggle="modal" data-target="#myModal">Register Here</a>
							<!-- <a href="#" >Register Here</a> -->
						</div>
						</div>
					</div>
					</div>
        </li>
        <!-- <li>
								<div class="slider-img w3-twoimg">
                    <div class="container">
		             <div class="slider-info">
						<h4>We Make<span class="home-banner"> Best Home</span> </h4>
						<p>Quis autem vel eum iure reprehderit.</p>
						<div class="w3layouts_more-buttn">
							<a href="#" data-toggle="modal" data-target="#myModal">Get More</a>
						</div>
						</div>
					</div>
					</div>
        </li>
        <li>
          						<div class="slider-img w3-threeimg">
                         <div class="container">
		             <div class="slider-info">
						<h4>Find Your<span class="home-banner">  Dream Home</span> </h4>
						<p>Quis autem vel eum iure reprehderit.</p>
						<div class="w3layouts_more-buttn">
							<a href="#" data-toggle="modal" data-target="#myModal">Get More</a>
						</div>
						</div>
					</div>
					</div>
        </li> -->
      </ul>
    </div>
	 <div class="clearfix"> </div>
	</div>
    <!-- This is here just to demonstrate the callbacks -->
    <!-- <ul class="events">
      <li>Example 4 callback events</li>
    </ul>-->
	 <!-- //banner -->
	 	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Registration</h4>
				</div>
				<div class="modal-body">
					<!-- <div class="out-info">
						<img src="images/g1.jpg" alt="" />
						<p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
							eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellu</p>
					</div> -->
					<form method="POST" action="" class="form-group" required=""><br>
					<input type="text" placeholder="Name" name="name" class="form-control" required=""><br>
					<input type="text" placeholder="Enrollment No." name="roll_no" class="form-control" required=""><br>
					<input type="email" placeholder="example@exapmle.com" name="email" class="form-control" required=""><br>
					<input type="text" placeholder="Contact No." name="con_no" class="form-control" required=""><br>
					<input type="text" placeholder="Watsapp No." name="wat_no" class="form-control" required=""><br>
<input type="submit" value="Submit" name="Submit" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->

	  <!--about -->
	<div class="about" id="about">
	<div class="container">
		<div class="about-top-grids">
				<div class="col-md-7 about-top-grid">
					<h2>Who We Are</h2>
					<p>IEEE is the world's largest technical professional organization dedicated to advancing technology for the benefit of humanity. IEEE and its members inspire a global community to innovate for a better tomorrow through its highly cited publications, conferences, technology standards, and professional and educational activities. IEEE creates an environment where members collaborate on world‐changing technologies, from computing and sustainable energy systems to aerospace, communications, robotics, healthcare, and more. IEEE is the trusted “voice” for engineering, computing, and technology information around the globe. IEEE is led by a diverse body of elected and appointed volunteer members.

JUIT has IEEE-Student Branch with five major teams-

Web
Robotics
Programming
Android and
Design.
			         
					</p>
	<!-- <div class="stats-cout">
						<div class="col-md-3 col-sm-3 col-xs-6 stats-grid stats-grid-1">
							<div class="  counter">350</div>
							<div class="stat-info-num">
								<h4>Clients</h4>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 stats-grid stats-grid-2">

							<div class=" counter">250</div>
							<div class="stat-info-num">
								<h4>Transport</h4>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 stats-grid stats-grid-3">

							<div class="counter">500</div>
							<div class="stat-info-num">
								<h4>Projects</h4>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 stats-grid stats-grid-4">

							<div class="counter">60</div>
							<div class="stat-info-num">
								<h4>Awards</h4>
							</div>
						</div>
						<div class="clearfix"></div>
					</div> -->

			</div>
				</div>
				<div class="col-md-5 pope banner-agileits-btm" id="video">
		<div class="button">

			<a href="#small-dialog1" class="play-icon popup-with-zoom-anim"><span class="fa fa-play-circle" aria-hidden="true"></span></a>			
		</div>
			<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">		
				<div class="agileits_modal_body">
				<iframe src="https://player.vimeo.com/video/2910294"></iframe>
				</div>
			</div>
	</div>
				<div class="clearfix"> </div>
			</div>
</div>
 <!-- //about -->
 
	<!--//services-->
		<!--blog -->
	<!-- <div class="blog" id="blog">
		<div class="container">
			<h3 class="title ">Blog</h3>
						<div class="blog-grid-w3-agileits">
				<div class=" col-md-7 blog-img blog-img1-agileits-w3layouts">
					<a href="#" data-toggle="modal" data-target="#myModal">
						<h6>Lorem ipsum</h6>
						<p><span class="fa fa-clock-o" aria-hidden="true"></span>12 feb 2017</p>
					</a>
				</div>
				<div class=" col-md-5 blog-info-w3layouts">
					<div class="inner-info-w3ls">
						<p class="para-agileits">Aenean pulvinar diam vel felis volutpat dictum, suscipit sapien scelerisque tempus non mollis massa. Aenean ac tellus
							suscipit sapien scelerisque tempus non mollis massa.</p>
					</div>
											<div class="w3layouts_more-buttn bolg-bttn">
							<a href="#" data-toggle="modal" data-target="#myModal">Get More</a>
						</div>
				</div>
				<div class="clearfix"></div>
			</div>
									<div class="blog-grid-w3-agileits">

				<div class=" col-md-5 blog-info-w3layouts right-side">
					<div class="inner-info-w3ls">
						<p class="para-agileits">Aenean pulvinar diam vel felis volutpat dictum, suscipit sapien scelerisque tempus non mollis massa. Aenean ac tellus
							suscipit sapien scelerisque tempus non mollis massa.</p>
					</div>
					<div class="w3layouts_more-buttn bolg-bttn">
							<a href="#" data-toggle="modal" data-target="#myModal">Get More</a>
						</div>

				</div>
								<div class=" col-md-7 blog-img blog-img2-agileits-w3layouts">
					<a href="#" data-toggle="modal" data-target="#myModal">
						<h6>Lorem ipsum</h6>
						<p><span class="fa fa-clock-o" aria-hidden="true"></span>15 july 2017</p>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
</div>
</div> -->
<!--//blog -->
	
		<!-- gallery -->
<!-- gallery -->

	<!-- //gallery --> 


   <!--team -->
   
	  <!--// team -->	
	  <!-- <div id="testimonials" class="testimonials">
		<div class="container">
			<h3 class="title">Testimonials</h3>
		
		<div class="test-monials">
			<div class=" sreen-gallery-cursual">
				<div id="owl-demo" class="owl-carousel">
										<div class="item-owl">
						<div class="col-md-6 col-sm-6 col-xs-6 test-review">
							<div class=" col-md-3 img-agile">
								<img src="images/c1.jpg" class="img-responsive" alt="" />
							</div>
							<div class="  col-md-9 textagile">
							<div class="test-name">
								<h5>Allyi</h5>
							</div>
								<p> At vero eos et accusam kasd gubergren sed diam aliquyamerat, sed voluptua labore
									et doloremagnal aliquyamerat, sed diam voluptua.</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 test-review">
							<div class=" col-md-3 img-agile">
								<img src="images/c2.jpg" class="img-responsive" alt="" />
							</div>
							<div class="  col-md-9 textagile">
							<div class="test-name">
								<h5>Lara Will</h5>
							</div>
								<p> At vero eos et accusam et gubergren sed diam aliquyamerat, sed voluptua labore
									et doloremagnal aliquyamerat, sed diam voluptua.</p>
							</div>
						</div>
							<div class="clearfix"> </div>
					</div>
					<div class="item-owl">
						<div class="col-md-6 col-sm-6 col-xs-6 test-review">
							<div class=" col-md-3 img-agile">
								<img src="images/c1.jpg" class="img-responsive" alt="" />
							</div>
							<div class="  col-md-9 textagile">
							<div class="test-name">
								<h5>Allyi</h5>
							</div>
								<p> At vero eos et accusam et kasd gubergren sed diam aliquyamerat, sed voluptua labore
									et doloremagnal aliquyamerat, sed diam voluptua.</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 test-review">
							<div class=" col-md-3  img-agile">
								<img src="images/c2.jpg" class="img-responsive" alt="" />
							</div>
							<div class="  col-md-9  textagile">
							<div class="test-name">
								<h5>
								Lara Will</h5>
							</div>
								<p> At vero eos et accusam et gubergren sed diam aliquyamerat, sed voluptua labore
									et doloremagnal aliquyamerat, sed diam voluptua.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	</div> -->
	<!--// testimonials -->

  <!-- //cantact-->
    <!-- footer-->

<!--//footer-->
	<!--js working-->

@stop