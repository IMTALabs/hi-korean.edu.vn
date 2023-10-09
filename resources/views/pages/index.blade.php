<?php

    \Laravel\Folio\name('home');

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
                                Tại Hi Korean, chúng tôi sẽ giúp bạn học tiếng Hàn với ý chí phấn đấu, tự tin để vững tiến vào tương lai và tự tin bước vào các công ty Hàn Quốc để làm việc.
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
                                            100% giảng viên đạt TOPIK 6, có >2 năm kinh nghiệm dạy tiếng Hàn và là giảng viên của Đại học Hà Nội, Đại học Ngoại ngữ.
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
                                            Gửi tài liệu, sắp xếp lịch học bù, bảo lưu chuyển lớp… học viên học liền mạch, không bị mất kiến thức.
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
                                            Đào tạo bài bản 4 kỹ năng Nghe - Nói - Đọc - Viết, kết hợp kiến thức ngôn ngữ và kiến thức chuyên ngành. Hạn chế sử dụng tiếng Việt trong giờ học, tạo điều kiện tối đa cho học viên sử dụng và tư duy bằng ngôn ngữ tiếng Hàn.
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
                                            Giáo trình Funfun Korea - Được biên soạn thành các ppt xinh đẹp + bộ chương trình ôn tập từ vựng qua các phần mềm dễ học và vui vẻ.
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

        <!-- Về CEO - Start
        ================================================== -->
        <section class="hero_banner style_1">
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
                                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at, commodi cum distinctio dolor dolores eligendi eveniet impedit in ipsam maiores maxime nemo officia tempora tempore ullam vero, voluptas, voluptatibus?</p>
                            </div>
                        </div>
                        <div class="col col-lg-5">
                            <div class="banner_image_1 decoration_wrap m-0">
                                <div class="image_wrap">
                                    <img class="w-full" src="assets/images/banner/hero_banner_img_1.jpg" alt="Collab – Online Learning Platform">
                                </div>
                                <div class="deco_item shape_img_1" data-parallax='{"y" : -130, "smoothness": 6}'>
                                    <img src="assets/images/shape/shape_img_1.png" alt="Collab – Online Learning Platform">
                                </div>
                                <div class="deco_item shape_img_2" data-parallax='{"y" : 160, "smoothness": 6}'>
                                    <img src="assets/images/shape/shape_img_2.png" alt="Collab – Online Learning Platform">
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
                                Highest Rated Online Courses
                            </h2>
                        </div>
                        <div class="col col-lg-5">
                            <p class="heading_description mb-0 text-lg-end">
                                Dignissim enim sit amet venenatis urna cursus eget nunc. Egestas sed sed risus pretium
                                quam vulputate
                            </p>
                        </div>
                    </div>
                </div>

                <div class="tabs_wrapper">
                    <ul class="nav" role="tablist">
                        <li role="presentation">
                            <button class="active" data-bs-toggle="tab" data-bs-target="#teb_hr" type="button"
                                    role="tab" aria-selected="true">
                                <i class="fas fa-users"></i>
                                <span>HR</span>
                            </button>
                        </li>
                        <li role="presentation">
                            <button data-bs-toggle="tab" data-bs-target="#teb_photography" type="button" role="tab"
                                    aria-selected="false">
                                <i class="fas fa-camera"></i>
                                <span>Photography</span>
                            </button>
                        </li>
                        <li role="presentation">
                            <button data-bs-toggle="tab" data-bs-target="#teb_programming" type="button" role="tab"
                                    aria-selected="false">
                                <i class="fas fa-chart-network"></i>
                                <span>Programming</span>
                            </button>
                        </li>
                        <li role="presentation">
                            <button data-bs-toggle="tab" data-bs-target="#teb_marketing" type="button" role="tab"
                                    aria-selected="false">
                                <i class="fas fa-lightbulb-on"></i>
                                <span>Marketing</span>
                            </button>
                        </li>
                        <li role="presentation">
                            <button data-bs-toggle="tab" data-bs-target="#teb_design" type="button" role="tab"
                                    aria-selected="false">
                                <i class="fas fa-palette"></i>
                                <span>Design</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="teb_hr" role="tabpanel">
                            <div class="row">
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_1.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Computer Science</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">$29.99</span>
                                                    <del class="remove_price">$39.99</del>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Programming for Everybody (Getting Started with Python)
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_2.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Photography</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">$9.99</span>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Photography Masterclass: A Complete Guide to Photography
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_3.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Business</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">FREE</span>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Project Management Principles and Practices
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="teb_photography" role="tabpanel">
                            <div class="row">
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_1.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Computer Science</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">$29.99</span>
                                                    <del class="remove_price">$39.99</del>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Programming for Everybody (Getting Started with Python)
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_2.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Photography</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">$9.99</span>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Photography Masterclass: A Complete Guide to Photography
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_3.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Business</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">FREE</span>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Project Management Principles and Practices
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="teb_programming" role="tabpanel">
                            <div class="row">
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_1.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Computer Science</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">$29.99</span>
                                                    <del class="remove_price">$39.99</del>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Programming for Everybody (Getting Started with Python)
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_2.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Photography</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">$9.99</span>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Photography Masterclass: A Complete Guide to Photography
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_3.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Business</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">FREE</span>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Project Management Principles and Practices
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="teb_marketing" role="tabpanel">
                            <div class="row">
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_1.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Computer Science</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">$29.99</span>
                                                    <del class="remove_price">$39.99</del>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Programming for Everybody (Getting Started with Python)
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_2.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Photography</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">$9.99</span>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Photography Masterclass: A Complete Guide to Photography
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_3.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Business</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">FREE</span>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Project Management Principles and Practices
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="teb_design" role="tabpanel">
                            <div class="row">
                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_1.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Computer Science</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">$29.99</span>
                                                    <del class="remove_price">$39.99</del>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Programming for Everybody (Getting Started with Python)
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_2.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Photography</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">$9.99</span>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Photography Masterclass: A Complete Guide to Photography
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-lg-4">
                                    <div class="course_card">
                                        <div class="item_image">
                                            <a href="course_details.html" data-cursor-text="View">
                                                <img src="assets/images/course/course_image_3.jpg"
                                                     alt="Hi Korean">
                                            </a>
                                        </div>
                                        <div class="item_content">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <ul class="item_category_list unordered_list">
                                                    <li><a href="#!">Business</a></li>
                                                </ul>
                                                <div class="item_price">
                                                    <span class="sale_price">FREE</span>
                                                </div>
                                            </div>
                                            <ul class="meta_info_list unordered_list">
                                                <li>
                                                    <i class="fas fa-chart-bar"></i>
                                                    <span>Beginner</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-clock"></i>
                                                    <span>120 Hours</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                    <span>3.5 (3k reviews)</span>
                                                </li>
                                            </ul>
                                            <h3 class="item_title">
                                                <a href="course_details.html">
                                                    Project Management Principles and Practices
                                                </a>
                                            </h3>
                                            <a class="btn_unfill" href="course_details.html">
                                                <span class="btn_text">View Course</span>
                                                <span class="btn_icon">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </span>
                                            </a>
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

        <!-- Advertisement Section - Start
        ================================================== -->
        <section class="advertisement_section bg_dark">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-6">
                        <div class="section_heading mb-lg-0">
                            <h2 class="heading_text text-white">
                                Take the Next Step Toward Your Personal and Professional Goals
                            </h2>
                            <p class="heading_description mb-0 text-white">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur.
                            </p>
                            <div class="btn_wrap pb-0">
                                <a class="btn btn_primary" href="course.html">
                                    <span>
                                        <small>Explore Courses</small>
                                        <small>Explore Courses</small>
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
                                         alt="Hi Korean">
                                </div>
                                <div class="image_wrap">
                                    <img src="assets/images/advertisement/advertisement_img_2.jpg"
                                         alt="Hi Korean">
                                </div>
                            </div>
                            <div class="col col-md-6 col-sm-6">
                                <div class="image_wrap">
                                    <img src="assets/images/advertisement/advertisement_img_3.jpg"
                                         alt="Hi Korean">
                                </div>
                                <div class="image_wrap">
                                    <img src="assets/images/advertisement/advertisement_img_4.jpg"
                                         alt="Hi Korean">
                                </div>
                            </div>
                            <div class="deco_item shape_img_1" data-parallax='{"y" : -130, "smoothness": 6}'>
                                <img src="assets/images/shape/shape_img_3.png" alt="Hi Korean">
                            </div>
                            <div class="deco_item shape_img_2" data-parallax='{"y" : 130, "smoothness": 6}'>
                                <img src="assets/images/shape/shape_img_3.png" alt="Hi Korean">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Advertisement Section - End
        ================================================== -->

        <!-- Courses Info Section - Start
        ================================================== -->
        <section class="courses_info_section section_space_lg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-6">
                        <div class="image_widget">
                            <img src="assets/images/about/about_image_2.jpg" alt="Hi Korean">
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="content_wrap ps-lg-3">
                            <div class="section_heading">
                                <h2 class="heading_text">
                                    Supporting Student Learning in Your Course
                                </h2>
                                <p class="heading_description mb-0">
                                    Rutrum tellus pellentesque eu tincidunt. Venenatis cras sed felis eget velit aliquet
                                    sagittis id consectetur. Sit amet porttitor eget dolor morbi
                                </p>
                            </div>
                            <ul class="info_list unordered_list_block">
                                <li>
                                    <i class="fas fa-square"></i>
                                    <span>
                                        Learn in-demand skills with over 183,000 video courses
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-square"></i>
                                    <span>
                                        Choose courses taught by real-world experts
                                    </span>
                                </li>
                                <li>
                                    <i class="fas fa-square"></i>
                                    <span>
                                        Learn at your own pace, with lifetime access on mobile and desktop
                                    </span>
                                </li>
                            </ul>
                            <div class="btn_wrap pb-0">
                                <a class="btn btn_dark" href="mentor.html">
                                    <span>
                                        <small>Our Mentors</small>
                                        <small>Our Mentors</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Courses Info Section - End
        ================================================== -->

        <!-- Pricing Section - Start
        ================================================== -->
        <section class="pricing_section section_space_lg bg_light">
            <div class="container decoration_wrap">
                <div class="section_heading text-center">
                    <h2 class="heading_text mb-0">
                        Premium Price Packages
                    </h2>
                </div>

                <div class="pricing_cards_wrapper row align-items-center">
                    <div class="col col-lg-4">
                        <div class="pricing_card text-center tilt">
                            <h3 class="card_heading">Basic Plan</h3>
                            <div class="pricing_wrap">
                                <span class="price_value"><sup>$</sup>50</span>
                                <small class="d-block">per 3 mounth</small>
                            </div>
                            <hr>
                            <ul class="info_list unordered_list_block text-start">
                                <li>
                                    <i class="fas fa-caret-right"></i>
                                    <span>All Video for 3 Months</span>
                                </li>
                                <li>
                                    <i class="fas fa-caret-right"></i>
                                    <span>Testing for 10 Courses</span>
                                </li>
                                <li>
                                    <i class="fas fa-caret-right"></i>
                                    <span>Checking 5 Homework</span>
                                </li>
                                <li>
                                    <i class="fas fa-caret-right"></i>
                                    <span>Mentor Consultation </span>
                                </li>
                            </ul>
                            <div class="btn_wrap pb-0">
                                <a class="btn border_dark" href="#!">
                                    <span>
                                        <small>Grav Now</small>
                                        <small>Grav Now</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4">
                        <div class="pricing_card text-center bg_dark tilt">
                            <div class="card_badge">recommended</div>
                            <h3 class="card_heading">Standart Plan</h3>
                            <div class="pricing_wrap">
                                <span class="price_value"><sup>$</sup>150</span>
                                <small class="d-block">per 6 mounth</small>
                            </div>
                            <hr>
                            <ul class="info_list unordered_list_block text-start">
                                <li>
                                    <i class="fas fa-caret-right"></i>
                                    <span>All Video for 3 Months</span>
                                </li>
                                <li>
                                    <i class="fas fa-caret-right"></i>
                                    <span>Testing for 10 Courses</span>
                                </li>
                                <li>
                                    <i class="fas fa-caret-right"></i>
                                    <span>Checking 5 Homework</span>
                                </li>
                                <li>
                                    <i class="fas fa-caret-right"></i>
                                    <span>Mentor Consultation </span>
                                </li>
                            </ul>
                            <div class="btn_wrap pb-0">
                                <a class="btn btn_primary" href="#!">
                                    <span>
                                        <small>Grav Now</small>
                                        <small>Grav Now</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4">
                        <div class="pricing_card text-center tilt">
                            <h3 class="card_heading">Premium Plan</h3>
                            <div class="pricing_wrap">
                                <span class="price_value"><sup>$</sup>250</span>
                                <small class="d-block">per 12 mounth</small>
                            </div>
                            <hr>
                            <ul class="info_list unordered_list_block text-start">
                                <li>
                                    <i class="fas fa-caret-right"></i>
                                    <span>All Video for 3 Months</span>
                                </li>
                                <li>
                                    <i class="fas fa-caret-right"></i>
                                    <span>Testing for 10 Courses</span>
                                </li>
                                <li>
                                    <i class="fas fa-caret-right"></i>
                                    <span>Checking 5 Homework</span>
                                </li>
                                <li>
                                    <i class="fas fa-caret-right"></i>
                                    <span>Mentor Consultation </span>
                                </li>
                            </ul>
                            <div class="btn_wrap pb-0">
                                <a class="btn border_dark" href="#!">
                                    <span>
                                        <small>Grav Now</small>
                                        <small>Grav Now</small>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'>
                    <img src="assets/images/shape/shape_img_4.png" alt="Hi Korean">
                </div>
                <div class="deco_item shape_img_2" data-parallax='{"y" : -130, "smoothness": 6}'>
                    <img src="assets/images/shape/shape_img_5.png" alt="Hi Korean">
                </div>
            </div>
        </section>
        <!-- Pricing Section - End
        ================================================== -->

        <!-- Testimonial Section - Start
        ================================================== -->
        <section class="testimonial_section section_space_lg">
            <div class="container">
                <div class="section_heading">
                    <div class="row align-items-center">
                        <div class="col col-lg-7">
                            <h2 class="heading_text mb-0">
                                Don’t just take our word for it
                            </h2>
                        </div>
                        <div class="col col-lg-5 d-lg-flex d-none justify-content-end">
                            <div class="carousel_arrow">
                                <button type="button" class="cc2c_left_arrow">
                                    <i class="far fa-arrow-left"></i>
                                    <i class="far fa-arrow-left"></i>
                                </button>
                                <button type="button" class="cc2c_right_arrow">
                                    <i class="far fa-arrow-right"></i>
                                    <i class="far fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial_carousel">
                    <div class="common_carousel_2col" data-cursor-text="Drag" data-slick='{"dots":false}'>
                        <div class="carousel_item">
                            <div class="testimonial_item">
                                <div class="testimonial_image">
                                    <img src="assets/images/testimonial/testimonial_img_1.jpg"
                                         alt="Hi Korean">
                                </div>
                                <div class="testimonial_content">
                                    <ul class="rating_star unordered_list">
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                    </ul>
                                    <h3 class="testimonial_title">Very interesting course</h3>
                                    <p>
                                        Elit ut aliquam purus sit amet luctus venenatis lectus magna. Sed nisi lacus sed
                                        viverra tellus in hac habitasse platea
                                    </p>
                                    <h4 class="testimonial_designation">Course: Academic Information Seeking</h4>
                                    <h5 class="testimonial_name">Matthew Lina</h5>
                                    <span class="quote_icon">
                                        <i class="fas fa-quote-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_item">
                            <div class="testimonial_item">
                                <div class="testimonial_image">
                                    <img src="assets/images/testimonial/testimonial_img_2.jpg"
                                         alt="Hi Korean">
                                </div>
                                <div class="testimonial_content">
                                    <ul class="rating_star unordered_list">
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                    </ul>
                                    <h3 class="testimonial_title">Very interesting course</h3>
                                    <p>
                                        Elit ut aliquam purus sit amet luctus venenatis lectus magna. Sed nisi lacus sed
                                        viverra tellus in hac habitasse platea
                                    </p>
                                    <h4 class="testimonial_designation">Course: Academic Information Seeking</h4>
                                    <h5 class="testimonial_name">Nahia Colunga</h5>
                                    <span class="quote_icon">
                                        <i class="fas fa-quote-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_item">
                            <div class="testimonial_item">
                                <div class="testimonial_image">
                                    <img src="assets/images/testimonial/testimonial_img_1.jpg"
                                         alt="Hi Korean">
                                </div>
                                <div class="testimonial_content">
                                    <ul class="rating_star unordered_list">
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                    </ul>
                                    <h3 class="testimonial_title">Very interesting course</h3>
                                    <p>
                                        Elit ut aliquam purus sit amet luctus venenatis lectus magna. Sed nisi lacus sed
                                        viverra tellus in hac habitasse platea
                                    </p>
                                    <h4 class="testimonial_designation">Course: Academic Information Seeking</h4>
                                    <h5 class="testimonial_name">Matthew Lina</h5>
                                    <span class="quote_icon">
                                        <i class="fas fa-quote-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel_item">
                            <div class="testimonial_item">
                                <div class="testimonial_image">
                                    <img src="assets/images/testimonial/testimonial_img_2.jpg"
                                         alt="Hi Korean">
                                </div>
                                <div class="testimonial_content">
                                    <ul class="rating_star unordered_list">
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                        <li class="active"><i class="fas fa-star"></i></li>
                                    </ul>
                                    <h3 class="testimonial_title">Very interesting course</h3>
                                    <p>
                                        Elit ut aliquam purus sit amet luctus venenatis lectus magna. Sed nisi lacus sed
                                        viverra tellus in hac habitasse platea
                                    </p>
                                    <h4 class="testimonial_designation">Course: Academic Information Seeking</h4>
                                    <h5 class="testimonial_name">Nahia Colunga</h5>
                                    <span class="quote_icon">
                                        <i class="fas fa-quote-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel_arrow d-lg-none d-flex justify-content-center">
                        <button type="button" class="cc2c_left_arrow">
                            <i class="far fa-arrow-left"></i>
                            <i class="far fa-arrow-left"></i>
                        </button>
                        <button type="button" class="cc2c_right_arrow">
                            <i class="far fa-arrow-right"></i>
                            <i class="far fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section - End
        ================================================== -->

        <!-- Newslatter Section - Start
        ================================================== -->
        <section class="newslatter_section">
            <div class="container">
                <div class="newslatter_box" style="background-image: url('assets/images/shape/shape_img_6.svg');">
                    <div class="row justify-content-center">
                        <div class="col col-lg-6">
                            <div class="section_heading text-center">
                                <h2 class="heading_text">
                                    Subscribe Now Forget 20% Discount Every Courses
                                </h2>
                                <p class="heading_description mb-0">
                                    Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Sed magna purus,
                                    fermentum eu
                                </p>
                            </div>
                            <form action="#">
                                <div class="form_item m-0">
                                    <input type="email" name="email" placeholder="Your Email">
                                    <button type="submit" class="btn btn_dark">
                                        <span>
                                            <small>Subsctibe</small>
                                            <small>Subsctibe</small>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newslatter Section - End
        ================================================== -->

    </main>
@endsection
