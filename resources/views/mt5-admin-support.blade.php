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
							<h5 class="dark_gray heading mb-0 pb-4 pt-5 wow fadeInDown">
								<span class="position_rel">MT5 Admin Support</span>
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>

<!-- content-area-24-feb-2020 -->
<section class="pt-3 pt_responsive">
    <div class="container-fluid p-0">
        <!-- Full-width Banner Image focusing on footer section -->
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="banner_img">
                    <img src="{{ asset('')}}assets/images/services/inner-page/mt-5-administator.png" alt="MT5 Admin Support Banner" class="img-fluid w-100 banner-responsive">
                </div>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="service_mark">
                    <h3 class="light_black">MT5 Admin Support</h3>
                    <p class="pt-4 text-justify">
                    Welcome to the MT5 Admin Support page, where we provide comprehensive solutions to help brokers and administrators manage their MetaTrader 5 platform effectively. From server management and user account control to risk management and troubleshooting, our support services ensure seamless operations for your trading environment.
                    </p>
                    <p class="text-justify text_none">
                        <strong>Server Setup & Management:</strong> – Configuring servers, monitoring resources, and ensuring optimal performance. <br>
                        <strong>User Account Management:</strong> – Account creation, modification, password recovery, and group management. <br>
                        <strong>Risk Management:</strong>  – Real-time trade monitoring, leverage control, and exposure analysis.
                    </p>
                    <p class="text-justify text_none">
                        <strong>Financial Operations:</strong>  – Handling deposits, withdrawals, and commission settings. <br>
                        <strong>Platform Customization:</strong> – Integration of custom plugins and third-party systems.<br>
                        <strong>Security & Compliance:</strong> – Data encryption, user access control, and compliance reporting.
                    </p>
                    <p class="text-justify text_none">
                        If you're looking for reliable MetaTrader 5 Admin Support to enhance your platform's performance, efficiency, and security, <strong>contact our team today</strong>. We provide 24/7 expert support tailored to your specific needs.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional CSS for styling -->
<style>
    .banner_img img {
        width: 100%;
        height: auto; /* Adjust height automatically */
        max-height: 450px; /* Limit max height for larger screens */
        object-fit: cover; /* Maintain aspect ratio and cover container */
        object-position: bottom; /* Focus more on the footer section of the image */
    }

    @media (max-width: 768px) {
        .banner_img img {
            max-height: 300px; /* Reduce height on smaller screens */
            object-position: center; /* Center image for better view on smaller devices */
        }
    }
</style>


@endsection