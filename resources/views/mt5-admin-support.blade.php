@extends('master')
@section('contents')


<main class="position_rel">

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
    <section class="pt-5 pt_responsive">
    <div class="container">
        <div class="row">
            <!-- Text Content Section -->
            <div class="col-xl-6 col-lg-6">
                <div class="service_mark">
                    <h3 class="light_black">MT5 Admin Support</h3>
                    <p class="pt-4 text-justify">Welcome to the MT5 Admin Support page, where we provide comprehensive solutions to help brokers and administrators manage their MetaTrader 5 platform effectively. From server management and user account control to risk management and troubleshooting, our support services ensure seamless operations for your trading environment.</p>
                    
                    <!-- Short description of major services -->
                    <p class="text-justify pt-lg-4 p-lg-0 text_dis">
                        Our services include:
                        <ul>
                            <li><strong>Server Setup & Management</strong> – Configuring servers, monitoring resources, and ensuring optimal performance.</li>
                            <li><strong>User Account Management</strong> – Account creation, modification, password recovery, and group management.</li>
                            <li><strong>Risk Management</strong> – Real-time trade monitoring, leverage control, and exposure analysis.</li>
                            <li><strong>Financial Operations</strong> – Handling deposits, withdrawals, and commission settings.</li>
                            <li><strong>Platform Customization</strong> – Integration of custom plugins and third-party systems.</li>
                            <li><strong>Security & Compliance</strong> – Data encryption, user access control, and compliance reporting.</li>
                        </ul>
                    </p>

                    <!-- Call to action -->
                    <p class="order-lg-2 text-justify">
                        If you're looking for reliable MetaTrader 5 Admin Support to enhance your platform's performance, efficiency, and security, <strong>contact our team today</strong>. We provide 24/7 expert support tailored to your specific needs.
                    </p>
                </div>
            </div>

            <!-- Image Section -->
            <div class="col-xl-6 col-lg-6">
                <div class="mark_img1 mx-lg-auto">
                    <img src="{{ asset('assets/images/services/mt-5-administator.png') }}" class="img-responsive" alt="MT5 Admin Support">
                </div>
            </div>
        </div>
    </div>
</section>



</main>


@endsection