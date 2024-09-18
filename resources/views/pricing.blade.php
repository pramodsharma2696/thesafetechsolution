@extends('master')
@section('contents')
 
<section class="banner_sec banner_bg position_rel">
	<div class="shapes_wrapper">
		<div class="shape shape_new" data-aos="fade-down-right" data-aos-duration="1500" data-aos-delay="100"></div>
		<div class="shape ring_shape_2 rounded-circle"></div>
		<!-- Animated Shapes -->
		<!-- Static shapes -->
		<div class="shape circle_shape">
			<div data-aos="fade-down-left"></div>
		</div>
		<div class="shape circle_shape circle_shape_2">
			<div data-aos="fade-down-left" data-aos-delay="500"></div>
		</div>
	    <div class="bannerbg_shape bannerbg_shape_2 rounded-0 w-100"></div>
	</div>

	<section class="pb-1 banner_main">
		<div class="container-fluid pl-lg-5">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner_text mt-2 breadcrum">
						<div class="heading_text pt-4">
							<h5 class="dark_gray heading mb-0 pb-lg-4 pt-lg-5 wow fadeInDown">
								<span class="position_rel">Website Pricing</span>
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>

<!-- packages section num-1 -->
<section class="pt_80" id="main_host_plan">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
				<div class="host_pan py-3 mb-5 mb-lg-0">
					<h4 class="text-center font-weight-bold  text-capitalize light_black">Basic</h4>
					<p class="text-capitalize text-center light_black">Static Website Plan For You</p>

					<div class="hosting_optn text-center mx-3">
						<h5 class="mb-0 text-uppercase color_red">save upto 15%</h5>
						<p class="mb-0">1 year at <strike>RS. 15,000/-</strike></p>
						<h4 class="mb-0 font-weight-bold light_black">RS. 11,999/-</h4>
					</div>

					<div class="pay_btn mx-3 mt-3 text-center py-2">
						<form action="https://www.weblooks.in/payment-checkout.php" name="payment_form" id="payment_form" method="POST">
							<input type="hidden" name="p_name" value="Static Website">
							<input type="hidden" name="p_id" value="WEBSN01">
							<input type="hidden" name="p_amount" value="11999">
							<button type="submit" class="btn text-capitalize">buy now</button>
						</form>
					</div>

					<div class="host_list pl-3 pt-4">
						<div>
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>1</strong> Year Domain Name</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>1</strong> Year Shared Hosting (1GB, only FTP)</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>2</strong> Professional Emails</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Upto <strong>4</strong> Web Pages</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>2</strong> Template Design Options</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Social Media Linking</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Google Map Integration</span>
						</div>										
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Upto <strong>25</strong> Images</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">PHP Enquiry Form</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Responsive Website</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Google Analytics Integration</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Whatsapp Integration</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>2</strong> Content Revisions</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>1</strong> Year E-mail Support</span>
						</div>
					</div>

				</div>
			</div>

			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
				<div class="host_pan py-3 mb-5 mb-lg-0">
					<h4 class="text-center font-weight-bold  text-capitalize light_black">Professional</h4>
					<p class="text-capitalize text-center light_black">Static Website Plan For You</p>

					<div class="hosting_optn text-center mx-3">
						<h5 class="mb-0 text-uppercase color_red">save 10%</h5>
						<p class="mb-0">1 year at <strike>RS. 18,000/-</strike></p>
						<h4 class="mb-0 font-weight-bold light_black">RS. 14,999/-</h4>
					</div>

					<div class="pay_btn mx-3 mt-3 text-center py-2">
					    <form action="https://www.weblooks.in/payment-checkout.php" name="payment_form" id="payment_form" method="POST">
							<input type="hidden" name="p_name" value="Static Website">
							<input type="hidden" name="p_id" value="WEBSN02">
							<input type="hidden" name="p_amount" value="14999">
							<button type="submit" class="btn text-capitalize">buy now</button>
						</form>
						<!--<a class="text-capitalize" href="#">buy now</a>-->
					</div>

					<div class="host_list pl-3 pt-4">
						<div>
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>1</strong> Year Domain Name</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>1</strong> Year Shared Hosting (1GB, Cpanel)</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>2</strong> Professional Emails</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Upto <strong>6</strong> Web Pages</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>3</strong> Customize Design Options</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Social Media Linking</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Google Map Integration</span>
						</div>										
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Upto <strong>40</strong> Images</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">PHP Enquiry Form</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Responsive Website</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Google Analytics Integration</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Whatsapp Integration</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>3</strong> Content Revisions</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>1</strong> Year E-mail Support</span>
						</div>
					</div>

				</div>
			</div>

			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
				<div class="host_pan py-3 mb-5 mb-lg-0">
					<h4 class="text-center font-weight-bold  text-capitalize light_black">Premium</h4>
					<p class="text-capitalize text-center light_black">Static Website Plan For You</p>

					<div class="hosting_optn text-center mx-3">
						<h5 class="mb-0 text-uppercase color_red">save upto 10%</h5>
						<p class="mb-0">1 year at <strike>RS. 22,500/-</strike></p>
						<h4 class="mb-0 font-weight-bold light_black">RS. 19,999/-</h4>
					</div>

					<div class="pay_btn mx-3 mt-3 text-center py-2">
					    <form action="https://www.weblooks.in/payment-checkout.php" name="payment_form" id="payment_form" method="POST">
							<input type="hidden" name="p_name" value="Static Website">
							<input type="hidden" name="p_id" value="WEBSN03">
							<input type="hidden" name="p_amount" value="19999">
							<button type="submit" class="btn text-capitalize">buy now</button>
						</form>
						<!--<a class="text-capitalize" href="#">buy now</a>-->
					</div>

					<div class="host_list px-3 pt-4">
						<div>
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>1</strong> Year Domain Name</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>1</strong> Year Shared Hosting (1GB, Cpanel)</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>5</strong> Professional Emails</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Upto <strong>10</strong> Web Pages</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>3</strong> Cutomized Design Options</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Social Media Linking</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Google Map Integration</span>
						</div>										
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Upto <strong>50</strong> Images</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">PHP Enquiry Form</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Responsive Website</span>
						</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Google Analytics Integration</span>
						</div>
						<div class="pt-2">
									<i class="fas fa-arrow-circle-right d-inline-block"></i>
									<span class="pl-3 d-inline-block">WhatsApp Integration</span>
								</div>
						<div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block"><strong>5</strong> Content Revisions</span>
						</div>
						<!-- <div class="pt-2">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 d-inline-block">Google Analytics Integration</span>
						</div> -->	
						<div class="pt-2">
							<button class="accordion1">
							<i class="fas fa-arrow-circle-right d-inline-block"></i>
							<span class="pl-3 color_gray">SEO Url Submission</span></button>
							<div class="panel2">								
								<div class="pt-2">
									<i class="fas fa-arrow-circle-right d-inline-block"></i>
									<span class="pl-3 d-inline-block">Chat Box Integration</span>
								</div>
								
								<div class="pt-2">
									<i class="fas fa-arrow-circle-right d-inline-block"></i>
									<span class="pl-3 d-inline-block"><strong>1</strong> Year Phone, E-mail Support</span>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- custom-package-design -->
<section class="pb-5">
	<div class="container">
		<div class="custom_pack p-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<div class="custom_pack_text">
							<h4 class="mb-0 light_black font-weight-bold">
								<i class="fas fa-arrow-circle-right d-inline-block color_org pr-3"></i>
								Custom Packages Available As Per Customer Requirements
							</h4>
						</div>
					</div>

					<div class="col-lg-2">
						<div class="pay_btn text-center py-2">
							<a class="text-capitalize popup_main_btn" href="#">buy now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="https://www.weblooks.in/assets/js/webpack_tab.js"></script>

@endsection
 
