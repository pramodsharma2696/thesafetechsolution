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
								<span class="position_rel">MT4 Admin Support</span>
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
                    <img src="{{ asset('')}}assets/images/services/inner-page/mt-4-administator.png" alt="MT4 Admin Support Banner" class="img-fluid w-100 banner-responsive">
                </div>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="service_mark">
                    <h3 class="light_black">MT4 Admin Support</h3>
                    <p class="pt-4 text-justify">
                        MetaTrader 4 (MT4) is a popular platform for trading Forex, CFDs, and other financial markets. Admin support for MT4 involves managing technical issues, account configurations, and assisting users with trading operations.
                    </p>
                    <p class="text-justify text_none">
                        <strong>1. MT4 Server Management:</strong> Admins handle server setup, performance monitoring, and backup recovery procedures to ensure seamless trading experiences. <br>
                        <strong>2. User Account Management:</strong> Support for account creation, troubleshooting login issues, and managing account settings like leverage and margin requirements. <br>
                        <strong>3. Trading & Order Management:</strong> Help with order execution, managing pending orders, and risk management tools like stop-loss and margin calls.
                    </p>
                    <p class="text-justify text_none">
                        <strong>4. Plugin & Integration Management:</strong> Guidance for custom plugin setup, bridging systems, and liquidity provider integration. <br>
                        <strong>5. Client Terminal Support:</strong> Assist traders with MT4 installation, connection issues, and troubleshooting custom indicators. <br>
                        <strong>6. Security & Compliance:</strong> Best practices for data security, compliance monitoring, and audit trails.
                    </p>
                    <p class="text-justify text_none">
                        <strong>7. Software Updates & Patches:</strong> Keep MT4 software up-to-date with patches, ensuring compatibility with custom plugins. <br>
                        <strong>8. General Troubleshooting:</strong> Address common MT4 errors like “No connection” or “Invalid account”, and escalate issues to MetaQuotes when necessary. <br>
                        <strong>9. User Education & Best Practices:</strong> Provide training, FAQs, and resources for traders to maximize platform functionality.
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