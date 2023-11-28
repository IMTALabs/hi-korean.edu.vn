<?php

\Laravel\Folio\name('sales');

?>

<x-layouts.app>
    @volt
    <main class="page_content">
        <!-- Pricing Section - Start
        ================================================== -->
        <section class="pricing_section section_space_lg pb-0">
            <div class="container decoration_wrap">
                <div class="section_heading text-center">
                    <h1 class="heading_text mb-0">
                        Ưu đãi nổi bật
                    </h1>
                </div>

                <div class="pricing_cards_wrapper row align-items-center">
                    <div class="col col-lg-4">
                        <div class="pricing_card text-center tilt">
                            <h3 class="card_heading">Đăng ký 2 khóa học</h3>
                            <div class="pricing_wrap">
                                <span class="price_value">Tặng 800.000</span>
                            </div>
                            <div class="btn_wrap pb-0">
                                <a class="btn border_dark" href="{{ route('contact') }}">
                                    <span>
                                        <small>Đăng ký ngay</small>
                                        <small>Đăng ký ngay</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4">
                        <div class="pricing_card text-center bg_dark tilt">
                            <div class="card_badge">Nổi bật</div>
                            <h3 class="card_heading">Đăng ký 4 khóa học</h3>
                            <div class="pricing_wrap">
                                <span class="price_value">Tặng 2.000.000</span>
                            </div>
                            <div class="btn_wrap pb-0">
                                <a class="btn btn_primary" href="{{ route('contact') }}">
                                    <span>
                                        <small>Đăng ký ngay</small>
                                        <small>Đăng ký ngay</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4">
                        <div class="pricing_card text-center tilt">
                            <h3 class="card_heading">Đăng ký 3 khóa học</h3>
                            <div class="pricing_wrap">
                                <span class="price_value">Tặng 1.500.000</span>
                            </div>
                            <div class="btn_wrap pb-0">
                                <a class="btn border_dark" href="{{ route('contact') }}">
                                    <span>
                                        <small>Đăng ký ngay</small>
                                        <small>Đăng ký ngay</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'>
                    <img src="assets/images/shape/shape_img_4.png" alt="Collab – Online Learning Platform">
                </div>
                <div class="deco_item shape_img_2" data-parallax='{"y" : -130, "smoothness": 6}'>
                    <img src="assets/images/shape/shape_img_5.png" alt="Collab – Online Learning Platform">
                </div>
            </div>
        </section>
        <!-- Pricing Section - End
        ================================================== -->

        <!-- FAQ Section - Start
        ================================================== -->
        <section class="faq_section section_space_lg">
            <div class="container">
                <div class="section_heading text-center mb-3">
                    <div class="row justify-content-center">
                        <div class="col col-lg-7">
                            <h2 class="heading_text">
                                Ngoài ra còn vô số các ưu đãi khác khi đăng ký khóa học tại HiKorean
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <section class="pricing_section section_space_lg pb-0">
                        <div class="container decoration_wrap">
                            <div class="pricing_cards_wrapper row align-items-center justify-content-center">
                                <div class="col col-lg-4">
                                    <div class="pricing_card text-center tilt">
                                        <h3 class="card_heading min-h-[100px]">Tặng toàn bộ giáo trình khi đăng ký từ 2 khóa trở lên</h3>
                                        <div class="btn_wrap pb-0">
                                            <a class="btn border_dark" href="{{ route('contact') }}">
                                                <span>
                                                    <small>Đăng ký ngay</small>
                                                    <small>Đăng ký ngay</small>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="pricing_card text-center tilt">
                                        <h3 class="card_heading min-h-[100px]">Tặng 10 buổi giao tiếp với giáo viên Hàn Quốc khi đăng ký từ 3 khóa trở lên</h3>
                                        <div class="btn_wrap pb-0">
                                            <a class="btn border_dark" href="{{ route('contact') }}">
                                                <span>
                                                    <small>Đăng ký ngay</small>
                                                    <small>Đăng ký ngay</small>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <!-- FAQ Section - End
        ================================================== -->
    </main>
    @endvolt
</x-layouts.app>
