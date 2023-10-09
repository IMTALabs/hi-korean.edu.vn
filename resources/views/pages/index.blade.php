<?php

\Laravel\Folio\name('home');

\Artesaos\SEOTools\Facades\SEOMeta::setTitle('Hi Korean');
\Artesaos\SEOTools\Facades\SEOMeta::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\SEOMeta::setCanonical(url()->current());

\Artesaos\SEOTools\Facades\OpenGraph::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\OpenGraph::setTitle('Hi Korean');
\Artesaos\SEOTools\Facades\OpenGraph::setUrl(url()->current());
\Artesaos\SEOTools\Facades\OpenGraph::addProperty('type', 'articles');

\Artesaos\SEOTools\Facades\JsonLd::setTitle('Hi Korean');
\Artesaos\SEOTools\Facades\JsonLd::setDescription('TRUNG TÂM TIẾNG HÀN HI KOREAN');
\Artesaos\SEOTools\Facades\JsonLd::addImage(asset('assets/images/banner/banner.png'));

?>

@extends('layouts.app')

@section('content')
    <main class="page_content">
        <!-- Banner Section - Start
        ================================================== -->
        <section class="hero_banner style_1">
            <div class="container">
                <div class="row">
                    <img src="{{ asset('assets/images/banner/banner.png') }}" class="object-cover" alt="">
                </div>
            </div>
        </section>
        <!-- Banner Section - End
        ================================================== -->

        <!-- Expect From Course - Start
        ================================================== -->
        <section class="expect_from_course section_space_lg">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6">
                        <div class="section_heading">
                            <h2 class="heading_text">
                                Về chúng tôi
                            </h2>
                            <p class="heading_description mb-0">
                                Tại Hi Korean, chúng tôi sẽ giúp bạn học tiếng Hàn với ý chí phấn đấu, tự tin để vững
                                tiến vào tương lai và tự tin bước vào các công ty Hàn Quốc để làm việc.
                            </p>
                        </div>

                        <div class="image_widget">
                            <img src="{{ asset('assets/images/about/about-usus.jpeg') }}" alt="Hi Korean">
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <!-- Button will hide on Mobile Device -->
                        <div class="btn_wrap pt-0 d-none d-lg-flex justify-content-end">
                            <a class="btn border_dark" href="course.html">
                                <span>
                                    <small>Tìm hiểu thêm</small>
                                    <small>Tìm hiểu thêm</small>
                                </span>
                            </a>
                        </div>

                        <div class="row">
                            <div class="col col-md-6">
                                <div class="service_item" data-magnetic>
                                    <div class="item_icon">
                                        <img src="assets/images/service/icon_academic_cap.svg"
                                             alt="Hi Korean">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Giảng viên chuyên nghiệp</h3>
                                        <p class="mb-0">
                                            100% giảng viên đạt TOPIK 6, có >2 năm kinh nghiệm dạy tiếng Hàn và là giảng
                                            viên của Đại học Hà Nội, Đại học Ngoại ngữ.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="service_item" data-magnetic>
                                    <div class="item_icon">
                                        <img src="assets/images/service/icon_communication.svg"
                                             alt="Hi Korean">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Đội ngũ chăm sóc học viên hỗ trợ 24/7</h3>
                                        <p class="mb-0">
                                            Gửi tài liệu, sắp xếp lịch học bù, bảo lưu chuyển lớp… học viên học liền
                                            mạch, không bị mất kiến thức.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="service_item" data-magnetic>
                                    <div class="item_icon">
                                        <img src="assets/images/service/icon_physics.svg"
                                             alt="Hi Korean">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Phương pháp giảng dạy tích hợp</h3>
                                        <p class="mb-0">
                                            Đào tạo bài bản 4 kỹ năng Nghe - Nói - Đọc - Viết, kết hợp kiến thức ngôn
                                            ngữ và kiến thức chuyên ngành. Hạn chế sử dụng tiếng Việt trong giờ học, tạo
                                            điều kiện tối đa cho học viên sử dụng và tư duy bằng ngôn ngữ tiếng Hàn.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="service_item" data-magnetic>
                                    <div class="item_icon">
                                        <img src="assets/images/service/icon_diploma.svg"
                                             alt="Hi Korean">
                                    </div>
                                    <div class="item_content">
                                        <h3 class="item_title">Giáo trình</h3>
                                        <p class="mb-0">
                                            Giáo trình Funfun Korea - Được biên soạn thành các ppt xinh đẹp + bộ chương
                                            trình ôn tập từ vựng qua các phần mềm dễ học và vui vẻ.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button will show on Mobile Device -->
                        <div class="btn_wrap pb-0 d-block d-lg-none text-center">
                            <a class="btn border_dark" href="course.html">
                                <span>
                                    <small>Explore Courses</small>
                                    <small>Explore Courses</small>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Expect From Course - End
        ================================================== -->

        <!-- Counter Section - Start
        ================================================== -->
        <section class="counter_section bg_light section_space_md">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-6">
                        <div class="counter_item">
                            <h3 class="counter_value">
                                <span class="counter_value_text">500</span>
                                <span>+</span>
                            </h3>
                            <p class="mb-0 line-clamp-3 min-h-[4.5rem]">
                                Giờ học đã diễn ra
                            </p>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6">
                        <div class="counter_item">
                            <h3 class="counter_value">
                                <span class="counter_value_text">1500</span>
                                <span>+</span>
                            </h3>
                            <p class="mb-0 line-clamp-3 min-h-[4.5rem]">
                                Học viên hoàn thành chương trình học và có việc làm
                            </p>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6">
                        <div class="counter_item">
                            <h3 class="counter_value">
                                <span class="counter_value_text">10</span>
                            </h3>
                            <p class="mb-0 line-clamp-3 min-h-[4.5rem]">
                                Khóa học đang được vận hành
                            </p>
                        </div>
                    </div>

                    <div class="col col-lg-3 col-md-6">
                        <div class="counter_item">
                            <h3 class="counter_value">
                                <span class="counter_value_text">40</span>
                                <span>+</span>
                            </h3>
                            <p class="mb-0 line-clamp-3 min-h-[4.5rem]">
                                Giảng viên với kinh nghiệm tiếng Hàn tối thiểu 2 năm giảng dạy tiếng Hàn
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter Section - End
        ================================================== -->

        <!-- Về CEO - Start
        ================================================== -->
        <section class="hero_banner style_1 mt-24">
            <div class="container">
                <div class="content_wrap">
                    <div class="row gap-2 flex-nowrap">
                        <div class="col col-lg-7 text-left">
                            <h1 class="banner_small_title">CEO - Giảng viên</h1>
                            <h2 class="banner_big_title">Nguyễn Phương Thúy</h2>
                            <div class="banner_description text-lg">
                                <ul class="flex flex-col items-start gap-4 mt-12">
                                    <li>Tốt nghiệp loại giỏi Đại học Ngoại ngữ - ĐHQG Hà Nội</li>
                                    <li>Tốt nghiệp loại giỏi Đại học Quốc gia Pusan, Hàn Quốc</li>
                                    <li>Giám sát viên ngân hàng Shinhan Việt Nam</li>
                                    <li>Giảng viên khoa tiếng Hàn, Đại học Hà Nội</li>
                                </ul>
                                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at,
                                    commodi cum distinctio dolor dolores eligendi eveniet impedit in ipsam maiores
                                    maxime nemo officia tempora tempore ullam vero, voluptas, voluptatibus?</p>
                            </div>
                        </div>
                        <div class="col col-lg-5">
                            <div class="banner_image_1 decoration_wrap m-0">
                                <div class="image_wrap">
                                    <img class="w-full" src="assets/images/banner/hero_banner_img_1.jpg"
                                         alt="Collab – Online Learning Platform">
                                </div>
                                <div class="deco_item shape_img_1" data-parallax='{"y" : -130, "smoothness": 6}'>
                                    <img src="assets/images/shape/shape_img_1.png"
                                         alt="Collab – Online Learning Platform">
                                </div>
                                <div class="deco_item shape_img_2" data-parallax='{"y" : 160, "smoothness": 6}'>
                                    <img src="assets/images/shape/shape_img_2.png"
                                         alt="Collab – Online Learning Platform">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Về CEO - End
        ================================================== -->

        <!-- Courses Section - Start
        ================================================== -->
        <section class="courses_section section_space_lg">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col col-lg-6">
                            <h2 class="heading_text mb-0">
                                Tuyển sinh các khóa học
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="tabs_wrapper">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="teb_hr" role="tabpanel">
                            <div class="row justify-center">
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img
                                                    src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b0f368c935-450x300.png"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Sơ cấp/Trung cấp</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="course_details.html">
                                                    Học trực tiếp
                                                </a>
                                            </h3>
                                            <p class="pt-2">
                                                Khoá học dành cho những bạn muốn có được nền tảng tiếng Hàn vững chắc
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img
                                                    src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b0f368c935-450x300.png"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Sơ cấp / Trung cấp</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="course_details.html">
                                                    E-learning
                                                </a>
                                            </h3>
                                            <p class="pt-2">
                                                Khoá học dành cho những bạn muốn có được nền tảng tiếng Hàn vững chắc
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img
                                                    src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b0f368c935-450x300.png"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Sơ cấp / Trung cấp</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="course_details.html">
                                                    Online
                                                </a>
                                            </h3>
                                            <p class="pt-2">
                                                Khoá học dành cho những bạn muốn có được nền tảng tiếng Hàn vững chắc
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img
                                                    src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b0f368c935-450x300.png"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Trẻ em / Người đi làm / Phiên dịch viên</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="course_details.html">
                                                    Theo đối tượng
                                                </a>
                                            </h3>
                                            <p class="pt-2">
                                                Khoá học dành cho những bạn muốn có được nền tảng tiếng Hàn vững chắc
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img
                                                    src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b0f368c935-450x300.png"
                                                    alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">TOPIK / EPS - XKLD</a></li>
                                                </ul>
                                            </div>
                                            <h3 class="item_title py-0">
                                                <a href="course_details.html">
                                                    Luyện thi
                                                </a>
                                            </h3>
                                            <p class="pt-2">
                                                Khoá học dành cho những bạn muốn có được nền tảng tiếng Hàn vững chắc
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Courses Section - End
        ================================================== -->

        <!-- Popular Event Section - Start
        ================================================== -->
        <section class="popular_event_section section_space_lg bg_dark decoration_wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-7">
                        <div class="section_heading mb-lg-0">
                            <h2 class="heading_text text-white">
                                LỊCH KHAI GIẢNG
                            </h2>
                            <p class="heading_description mb-0 text-white">
                                Với kinh nghiệm 6 năm trong lĩnh vực giảng dạy tiếng Hàn, HI KOREAN đã và đang là một
                                trong những trung tâm đào tạo tiếng Hàn uy tín và chất lượng.
                                Đặc biệt, chỉ trong tháng này, HI KOREAN sẽ áp dụng ưu đãi giảm giá lên đến 30% cho khoá
                                học. Đừng bỏ lỡ cơ hội mà hãy để lại thông tin để trung tâm có thể liên hệ và hỗ trợ bạn
                                nhanh nhất nhé!
                            </p>
                            <div class="btn_wrap pb-0">
                                <a class="btn btn_primary" href="event.html">
                                    <span>
                                        <small>Xem tất cả</small>
                                        <small>Xem tất cả</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-5">
                        <div class="popular_event_list">
                            <h3 class="wrap_title">Các lớp học sắp tới</h3>
                            <ul class="unordered_list_block">
                                <li>
                                    <div class="column">
                                        <b class="day">26</b>
                                        <span class="month">Tháng 12<br>2023</span>
                                    </div>
                                    <div class="column">
                                        <h4 class="event_title">Lớp HKSC-24</h4>
                                        <span class="event_name">
                                            <strong>Giảng viên:</strong> <small>Cô Thùy Dương</small>
                                            <strong class="block text-sm">Thứ 3 & Thứ 5 (7h30’-9h00)</strong>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="column">
                                        <b class="day">26</b>
                                        <span class="month">Tháng 12<br>2023</span>
                                    </div>
                                    <div class="column">
                                        <h4 class="event_title">Lớp HKSC-24</h4>
                                        <span class="event_name">
                                            <strong>Giảng viên:</strong> <small>Cô Thùy Dương</small>
                                            <strong class="block text-sm">Thứ 3 & Thứ 5 (7h30’-9h00)</strong>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="column">
                                        <b class="day">26</b>
                                        <span class="month">Tháng 12<br>2023</span>
                                    </div>
                                    <div class="column">
                                        <h4 class="event_title">Lớp HKSC-24</h4>
                                        <span class="event_name">
                                            <strong>Giảng viên:</strong> <small>Cô Thùy Dương</small>
                                            <strong class="block text-sm">Thứ 3 & Thứ 5 (7h30’-9h00)</strong>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="column">
                                        <b class="day">26</b>
                                        <span class="month">Tháng 12<br>2023</span>
                                    </div>
                                    <div class="column">
                                        <h4 class="event_title">Lớp HKSC-24</h4>
                                        <span class="event_name">
                                            <strong>Giảng viên:</strong> <small>Cô Thùy Dương</small>
                                            <strong class="block text-sm">Thứ 3 & Thứ 5 (7h30’-9h00)</strong>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'>
                <img src="assets/images/shape/shape_img_3.png" alt="Collab – Online Learning Platform">
            </div>
            <div class="deco_item shape_img_2" data-parallax='{"x" : -130, "smoothness": 6}'>
                <img src="assets/images/shape/shape_img_3.png" alt="Collab – Online Learning Platform">
            </div>
            <div class="deco_item shape_img_3" data-parallax='{"y" : -130, "smoothness": 6}'>
                <img src="assets/images/shape/shape_img_3.png" alt="Collab – Online Learning Platform">
            </div>
        </section>
        <!-- Popular Event Section - End
        ================================================== -->

        <!-- Call To Action Section - Start
        ================================================== -->
        <section class="calltoaction_section mt-24">
            <div class="boxed_wrapper bg_dark overflow-hidden decoration_wrap">
                <div class="row align-items-center">
                    <div class="col col-lg-7">
                        <div class="section_heading">
                            <h2 class="heading_text text-white">
                                Đăng ký tham gia
                            </h2>
                            <h3 class="text-white">
                                Đặc biệt, chỉ trong tháng này, HI KOREAN sẽ áp dụng ưu đãi giảm giá lên đến 30% cho khoá
                                học. Đừng bỏ lỡ cơ hội mà hãy để lại thông tin để trung tâm có thể liên hệ và hỗ trợ bạn
                                nhanh nhất nhé!
                            </h3>
                            <p class="heading_description mb-0 text-white mt-4">
                                Với kinh nghiệm 6 năm trong lĩnh vực giảng dạy tiếng Hàn, HI KOREAN đã và đang là một
                                trong những trung tâm đào tạo tiếng Hàn uy tín và chất lượng.
                            </p>
                        </div>
                        <ul class="info_list unordered_list_block text-white">
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <span><b>Kinh nghiệm:</b> 6 năm</span>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <span><b>Email:</b> name@example.com</span>
                            </li>
                            <li>
                                <i class="fas fa-caret-right"></i>
                                <span><b>SĐT:</b> (+84) 918 516 666</span>
                            </li>
                        </ul>
                        <ul class="social_links unordered_list">
                            <li>
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-lg-5">
                        <div class="calltoaction_form mb-0">
                            <form action="#">
                                <div class="form_item">
                                    <label for="input_name" class="input_title text-uppercase">Họ và tên</label>
                                    <input id="input_name" type="text" name="name" placeholder="VD: Nguyễn Văn A">
                                </div>
                                <div class="form_item">
                                    <label for="input_email" class="input_title text-uppercase">SĐT</label>
                                    <input id="input_email" type="email" name="email" placeholder="VD: 09xx xxx xxx">
                                </div>
                                <div class="form_item">
                                    <label for="input_question" class="input_title text-uppercase">Ghi chú</label>
                                    <textarea id="input_question" name="Message"
                                              placeholder="VD: Tôi muốn được tư vấn khóa học online sơ cấp"></textarea>
                                </div>
                                <button type="submit" class="btn btn_dark w-100">
                                    <span>
                                        <small>Đăng ký</small>
                                        <small>Đăng ký</small>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="deco_item shape_img_3" data-parallax='{"y" : 130, "smoothness": 6}'>
                    <img src="assets/images/shape/shape_img_3.png" alt="Collab – Online Learning Platform">
                </div>
                <div class="deco_item shape_img_4" data-parallax='{"y" : -130, "smoothness": 6}'>
                    <img src="assets/images/shape/shape_img_3.png" alt="Collab – Online Learning Platform">
                </div>
                <div class="deco_item shape_img_5" data-parallax='{"y" : 130, "smoothness": 6}'>
                    <img src="assets/images/shape/shape_img_3.png" alt="Collab – Online Learning Platform">
                </div>
            </div>
        </section>
        <!-- Call To Action Section - End
        ================================================== -->

        <!-- Testimonial Section - Start
        ================================================== -->
        <section class="testimonial_section section_space_lg">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col col-lg-6">
                            <h2 class="heading_text mb-0">
                                Cảm nhận học viên
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="testimonial_carousel">
                    <div class="common_carousel_1col" data-cursor-text="Drag" data-slick='{"dots":false}'>
                        <div class="carousel_item">
                            <div class="testimonial_item_2">
                                <div class="testimonial_image ms-0 aspect-video"
                                     style="background-image: url('assets/images/shape/shape_img_6.svg');">
                                    {{-- <img src="assets/images/testimonial/testimonial_img_3.png" alt="Collab – Online Learning Platform"> --}}
                                    <lite-youtube class="w-full h-full" videoid="ogfYd705cRs"
                                                  playlabel="Play: Keynote (Google I/O '18)"></lite-youtube>
                                </div>
                                <div class="testimonial_content">
                                    <div class="quote_icon">
                                        <img src="assets/images/icon/icon_quote.svg"
                                             alt="Collab – Online Learning Platform">
                                    </div>
                                    <h3 class="testimonial_title">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore esse.
                                    </h3>
                                    <p>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Et netus et malesuada fames ac turpis egestas
                                    </p>
                                    <div class="testimonial_admin">
                                        <div class="admin_image">
                                            <img src="assets/images/meta/testimonial_thumbnail_1.jpg"
                                                 alt="Collab – Online Learning Platform">
                                        </div>
                                        <div class="admin_content">
                                            <h5 class="testimonial_name">Nguyễn Văn A</h5>
                                            <span class="testimonial_designation">Học viên khóa ...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_item">
                            <div class="testimonial_item_2">
                                <div class="testimonial_image ms-0 aspect-video"
                                     style="background-image: url('assets/images/shape/shape_img_6.svg');">
                                    {{-- <img src="assets/images/testimonial/testimonial_img_3.png" alt="Collab – Online Learning Platform"> --}}
                                    <lite-youtube class="w-full h-full" videoid="ogfYd705cRs"
                                                  playlabel="Play: Keynote (Google I/O '18)"></lite-youtube>
                                </div>
                                <div class="testimonial_content">
                                    <div class="quote_icon">
                                        <img src="assets/images/icon/icon_quote.svg"
                                             alt="Collab – Online Learning Platform">
                                    </div>
                                    <h3 class="testimonial_title">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore esse.
                                    </h3>
                                    <p>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Et netus et malesuada fames ac turpis egestas
                                    </p>
                                    <div class="testimonial_admin">
                                        <div class="admin_image">
                                            <img src="assets/images/meta/testimonial_thumbnail_1.jpg"
                                                 alt="Collab – Online Learning Platform">
                                        </div>
                                        <div class="admin_content">
                                            <h5 class="testimonial_name">Nguyễn Văn A</h5>
                                            <span class="testimonial_designation">Học viên khóa ...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_item">
                            <div class="testimonial_item_2">
                                <div class="testimonial_image ms-0 aspect-video"
                                     style="background-image: url('assets/images/shape/shape_img_6.svg');">
                                    {{-- <img src="assets/images/testimonial/testimonial_img_3.png" alt="Collab – Online Learning Platform"> --}}
                                    <lite-youtube class="w-full h-full" videoid="ogfYd705cRs"
                                                  playlabel="Play: Keynote (Google I/O '18)"></lite-youtube>
                                </div>
                                <div class="testimonial_content">
                                    <div class="quote_icon">
                                        <img src="assets/images/icon/icon_quote.svg"
                                             alt="Collab – Online Learning Platform">
                                    </div>
                                    <h3 class="testimonial_title">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore esse.
                                    </h3>
                                    <p>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Et netus et malesuada fames ac turpis egestas
                                    </p>
                                    <div class="testimonial_admin">
                                        <div class="admin_image">
                                            <img src="assets/images/meta/testimonial_thumbnail_1.jpg"
                                                 alt="Collab – Online Learning Platform">
                                        </div>
                                        <div class="admin_content">
                                            <h5 class="testimonial_name">Nguyễn Văn A</h5>
                                            <span class="testimonial_designation">Học viên khóa ...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_item">
                            <div class="testimonial_item_2">
                                <div class="testimonial_image ms-0 aspect-video"
                                     style="background-image: url('assets/images/shape/shape_img_6.svg');">
                                    {{-- <img src="assets/images/testimonial/testimonial_img_3.png" alt="Collab – Online Learning Platform"> --}}
                                    <lite-youtube class="w-full h-full" videoid="ogfYd705cRs"
                                                  playlabel="Play: Keynote (Google I/O '18)"></lite-youtube>
                                </div>
                                <div class="testimonial_content">
                                    <div class="quote_icon">
                                        <img src="assets/images/icon/icon_quote.svg"
                                             alt="Collab – Online Learning Platform">
                                    </div>
                                    <h3 class="testimonial_title">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore esse.
                                    </h3>
                                    <p>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Et netus et malesuada fames ac turpis egestas
                                    </p>
                                    <div class="testimonial_admin">
                                        <div class="admin_image">
                                            <img src="assets/images/meta/testimonial_thumbnail_1.jpg"
                                                 alt="Collab – Online Learning Platform">
                                        </div>
                                        <div class="admin_content">
                                            <h5 class="testimonial_name">Nguyễn Văn A</h5>
                                            <span class="testimonial_designation">Học viên khóa ...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_item">
                            <div class="testimonial_item_2">
                                <div class="testimonial_image ms-0 aspect-video"
                                     style="background-image: url('assets/images/shape/shape_img_6.svg');">
                                    {{-- <img src="assets/images/testimonial/testimonial_img_3.png" alt="Collab – Online Learning Platform"> --}}
                                    <lite-youtube class="w-full h-full" videoid="ogfYd705cRs"
                                                  playlabel="Play: Keynote (Google I/O '18)"></lite-youtube>
                                </div>
                                <div class="testimonial_content">
                                    <div class="quote_icon">
                                        <img src="assets/images/icon/icon_quote.svg"
                                             alt="Collab – Online Learning Platform">
                                    </div>
                                    <h3 class="testimonial_title">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore esse.
                                    </h3>
                                    <p>
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Et netus et malesuada fames ac turpis egestas
                                    </p>
                                    <div class="testimonial_admin">
                                        <div class="admin_image">
                                            <img src="assets/images/meta/testimonial_thumbnail_1.jpg"
                                                 alt="Collab – Online Learning Platform">
                                        </div>
                                        <div class="admin_content">
                                            <h5 class="testimonial_name">Nguyễn Văn A</h5>
                                            <span class="testimonial_designation">Học viên khóa ...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section - End
        ================================================== -->

        <!-- Advertisement Section - Start
        ================================================== -->
        <section class="advertisement_section bg_dark">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-6">
                        <div class="section_heading mb-lg-0">
                            <h2 class="heading_text text-white">
                                Đội ngũ giảng viên
                            </h2>
                            <p class="heading_description mb-0 text-white">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium autem beatae
                                dolorum eaque eius et fuga, id, labore laboriosam libero magni maiores modi non
                                obcaecati, sint vel voluptate. Aliquam.
                            </p>
                            <div class="btn_wrap pb-0">
                                <a class="btn btn_primary" href="course.html">
                                    <span>
                                        <small>Xem thêm</small>
                                        <small>Xem thêm</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="row images_group decoration_wrap">
                            <div class="col col-md-6 col-sm-6">
                                <div class="image_wrap">
                                    <img src="assets/images/advertisement/advertisement_img_1.jpg"
                                         alt="Collab – Online Learning Platform">
                                </div>
                                <div class="image_wrap">
                                    <img src="assets/images/advertisement/advertisement_img_2.jpg"
                                         alt="Collab – Online Learning Platform">
                                </div>
                            </div>
                            <div class="col col-md-6 col-sm-6">
                                <div class="image_wrap">
                                    <img src="assets/images/advertisement/advertisement_img_3.jpg"
                                         alt="Collab – Online Learning Platform">
                                </div>
                                <div class="image_wrap">
                                    <img src="assets/images/advertisement/advertisement_img_4.jpg"
                                         alt="Collab – Online Learning Platform">
                                </div>
                            </div>
                            <div class="deco_item shape_img_1" data-parallax='{"y" : -130, "smoothness": 6}'>
                                <img src="assets/images/shape/shape_img_3.png" alt="Collab – Online Learning Platform">
                            </div>
                            <div class="deco_item shape_img_2" data-parallax='{"y" : 130, "smoothness": 6}'>
                                <img src="assets/images/shape/shape_img_3.png" alt="Collab – Online Learning Platform">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Advertisement Section - End
        ================================================== -->

        <!-- Brands Section - Start
        ================================================== -->
        <section class="brands_section section_space_lg pb-0">
            <div class="container">
                <div class="section_heading text-center">
                    <h2 class="heading_text mb-0">
                        Cơ sở vật chất
                    </h2>
                </div>
                <ul class="brands_logo_list unordered_list">
                    <li class="aspect-video relative">
                        <a href="#!" class="p-0 !block w-full">
                            <img class="w-full !h-full object-cover rounded-lg" src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b10d30ca2d-768x512.jpeg" alt="Microsoft">
                        </a>
                    </li>
                    <li class="aspect-video relative">
                        <a href="#!" class="p-0 !block w-full">
                            <img class="w-full !h-full object-cover rounded-lg" src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b10d30ca2d-768x512.jpeg" alt="Alphabet">
                        </a>
                    </li>
                    <li class="aspect-video relative">
                        <a href="#!" class="p-0 !block w-full">
                            <img class="w-full !h-full object-cover rounded-lg" src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b10d30ca2d-768x512.jpeg" alt="Intel">
                        </a>
                    </li>
                    <li class="aspect-video relative">
                        <a href="#!" class="p-0 !block w-full">
                            <img class="w-full !h-full object-cover rounded-lg" src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b10d30ca2d-768x512.jpeg" alt="Cisco">
                        </a>
                    </li>
                    <li class="aspect-video relative">
                        <a href="#!" class="p-0 !block w-full">
                            <img class="w-full !h-full object-cover rounded-lg" src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b10d30ca2d-768x512.jpeg" alt="Verizon Communications">
                        </a>
                    </li>
                    <li class="aspect-video relative">
                        <a href="#!" class="p-0 !block w-full">
                            <img class="w-full !h-full object-cover rounded-lg" src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b10d30ca2d-768x512.jpeg" alt="Infopulse.png">
                        </a>
                    </li>
                    <li class="aspect-video relative">
                        <a href="#!" class="p-0 !block w-full">
                            <img class="w-full !h-full object-cover rounded-lg" src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b10d30ca2d-768x512.jpeg" alt="Amazon">
                        </a>
                    </li>
                    <li class="aspect-video relative">
                        <a href="#!" class="p-0 !block w-full">
                            <img class="w-full !h-full object-cover rounded-lg" src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b10d30ca2d-768x512.jpeg" alt="Wix">
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Brands Section - End
        ================================================== -->

        <!-- Intro Video Section - Start
        ================================================== -->
        <section class="intro_video_section section_space_lg bg_light_2 overflow-hidden decoration_wrap">
            <div class="container position-relative">
                <div class="section_heading text-center">
                    <h2 class="heading_text mb-0">
                        Lộ trình học
                    </h2>
                </div>
                <div class="intro_video">
                    <div class="video_wrap tilt">
                        {{-- <img src="assets/images/video/video_poster_1.jpg" alt="Collab – Online Learning Platform"> --}}
                        {{-- <a class="video_play_btn popup_video" href="https://www.youtube.com/watch?v=7e90gBu4pas"> --}}
                        {{--     <span class="icon"><i class="fas fa-play"></i></span> --}}
                        {{-- </a> --}}
                        <lite-youtube class="mx-auto" videoid="ogfYd705cRs"
                                      playlabel="Play: Keynote (Google I/O '18)"></lite-youtube>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon">
                                    <i class="fas fa-signal-1"></i>
                                </div>
                                <h3 class="item_title mb-0">
                                    <span class="d-block">Step 1</span>
                                </h3>
                            </div>
                            <p class="mb-0">
                                Adipiscing bibendum est ultricies integer. Magnis dis parturient montes nascetur ridiculus mus mauris
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon">
                                    <i class="fas fa-signal-2"></i>
                                </div>
                                <h3 class="item_title mb-0">
                                    <span class="d-block">Step 2</span>
                                </h3>
                            </div>
                            <p class="mb-0">
                                Facilisi nullam vehicula ipsum a arcu cursus vitae. Interdum velit laoreet id donec ultrices tincidunt arcu
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon">
                                    <i class="fas fa-signal-3"></i>
                                </div>
                                <h3 class="item_title mb-0">
                                    <span class="d-block">Step 3</span>
                                </h3>
                            </div>
                            <p class="mb-0">
                                Lectus magna fringilla urna porttitor rhoncus dolor purus non. Orci dapibus ultrices in iaculis
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-6 col-sm-6">
                        <div class="iconbox_item">
                            <div class="title_wrap">
                                <div class="item_icon">
                                    <i class="fas fa-signal-4"></i>
                                </div>
                                <h3 class="item_title mb-0">
                                    <span class="d-block">Step 4</span>
                                </h3>
                            </div>
                            <p class="mb-0">
                                Elementum facilisis leo vel fringilla est ullamcorper eget nulla facilisi. Imperdiet proin fermentum leo vel orc
                            </p>
                        </div>
                    </div>
                </div>

                <div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'>
                    <img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform">
                </div>
                <div class="deco_item shape_img_2" data-parallax='{"y" : -130, "smoothness": 6}'>
                    <img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform">
                </div>
            </div>
            <div class="deco_item shape_img_3" data-parallax='{"y" : -130, "smoothness": 6}'>
                <img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform">
            </div>
        </section>
        <!-- Intro Video Section - End
        ================================================== -->
    </main>
@endsection
