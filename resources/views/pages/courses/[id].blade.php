<?php

\Laravel\Folio\name('courses.show')

?>

@extends('layouts.app')

@section('content')
    <!-- Page Section - Start
    ================================================== -->
    <section class="page_banner mt-40">
        <div class="container">
            <div class="content_wrapper">
                <div class="row align-items-center">
                    <div class="col col-lg-7">
                        <ul class="breadcrumb_nav unordered_list">
                            <li><a href="{{ route('home') }}">Trang chủ</a></li>
                            <li><a href="{{ route('courses') }}">Khóa học</a></li>
                            <li>Khóa học offline</li>
                        </ul>
                        <h1 class="page_title">
                            Khóa học offline
                        </h1>
                        <ul class="info_list unordered_list_block pb-0">
                            <li>
                                <i class="fas fa-check"></i>
                                <span>
                                    Fermentum iaculis eu non diam phasellus vestibulum. Porta non pulvinar neque laoreet
                                    suspendisse. Justo nec ultrices dui sapien proin sed libero
                                </span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>
                                    At consectetur lorem donec massa sapien. Pulvinar sapien et ligula ullamcorper
                                    malesuada proin
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Section - End
    ================================================== -->

    <!-- Event Details Section - Start
    ================================================== -->
    <section class="details_section event_details_section">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8">
                    <div class="section_space_lg pb-0">
                        <div class="pe-lg-5">
                            <div class="course_info_card d-lg-none">
                                <div class="details_image">
                                    <img src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b0f368c935-450x300.png"
                                         alt="Collab – Online Learning Platform">
                                </div>
                                <div class="item_price">
                                    <span class="sale_price">FREE</span>
                                </div>
                                <a href="pricing.html" class="btn btn_dark">
                                    <span>
                                        <small>Get Course</small>
                                        <small>Get Course</small>
                                    </span>
                                </a>
                                <ul class="course_info_list unordered_list_block">
                                    <li>
                                        <span><i class="fas fa-user"></i> Created</span>
                                        <strong>Wendy Chandler</strong>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-chart-bar"></i> Level</span>
                                        <strong>Beginner</strong>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-clock"></i> Duration</span>
                                        <strong>120 Hours</strong>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-video"></i> Lessons</span>
                                        <strong>3 Video</strong>
                                    </li>
                                    <li>
                                        <span><i class="fas fa-users"></i> Webinar</span>
                                        <strong>4 Hours</strong>
                                    </li>
                                </ul>
                            </div>

                            <div class="details_content">
                                <h3 class="details_info_title">Event Description</h3>
                                <p>
                                    Sagittis id consectetur purus ut faucibus pulvinar elementum integer. Sapien
                                    pellentesque habitant morbi tristique senectus et netus. Gravida in fermentum et
                                    sollicitudin ac orci phasellus egestas. Vulputate sapien nec sagittis aliquam
                                    malesuada bibendum arcu vitae. Massa sed elementum tempus egestas sed. Sed id semper
                                    risus in hendrerit gravida rutrum quisque
                                </p>

                                <h3 class="details_info_title">What you'll learn</h3>
                                <div class="row mb-4">
                                    <div class="col col-md-6 col-sm-6">
                                        <ul class="info_list unordered_list_block">
                                            <li>
                                                <i class="fas fa-square"></i>
                                                <span>
                                                    Sagittis id consectetur purus
                                                </span>
                                            </li>
                                            <li>
                                                <i class="fas fa-square"></i>
                                                <span>
                                                    Sapien pellentesque habitant
                                                </span>
                                            </li>
                                            <li>
                                                <i class="fas fa-square"></i>
                                                <span>
                                                    Vulputate sapien nec sagittis
                                                </span>
                                            </li>
                                            <li>
                                                <i class="fas fa-square"></i>
                                                <span>
                                                    Sed id semper risus in hendrerit
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-6 col-sm-6">
                                        <ul class="info_list unordered_list_block">
                                            <li>
                                                <i class="fas fa-square"></i>
                                                <span>
                                                    Placerat duis ultricies
                                                </span>
                                            </li>
                                            <li>
                                                <i class="fas fa-square"></i>
                                                <span>
                                                    Phasellus vestibulum lorem
                                                </span>
                                            </li>
                                            <li>
                                                <i class="fas fa-square"></i>
                                                <span>
                                                    Ultrices tincidunt arcu sodales
                                                </span>
                                            </li>
                                            <li>
                                                <i class="fas fa-square"></i>
                                                <span>
                                                    Non nisi est sit amet
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-4">
                    <aside class="sidebar d-none d-lg-block">
                        <div class="course_info_card">
                            <div class="details_image">
                                <img src="https://hikorean.edu.vn/wp-content/uploads/2023/08/647b0f368c935-450x300.png"
                                     alt="Collab – Online Learning Platform">
                            </div>
                            <div class="item_price">
                                <span class="sale_price">FREE</span>
                            </div>
                            <a href="pricing.html" class="btn btn_dark">
                                <span>
                                    <small>Get Course</small>
                                    <small>Get Course</small>
                                </span>
                            </a>
                            <ul class="course_info_list unordered_list_block">
                                <li>
                                    <span><i class="fas fa-user"></i> Created</span>
                                    <strong>Wendy Chandler</strong>
                                </li>
                                <li>
                                    <span><i class="fas fa-chart-bar"></i> Level</span>
                                    <strong>Beginner</strong>
                                </li>
                                <li>
                                    <span><i class="fas fa-clock"></i> Duration</span>
                                    <strong>120 Hours</strong>
                                </li>
                                <li>
                                    <span><i class="fas fa-video"></i> Lessons</span>
                                    <strong>3 Video</strong>
                                </li>
                                <li>
                                    <span><i class="fas fa-users"></i> Webinar</span>
                                    <strong>4 Hours</strong>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Details Section - End
    ================================================== -->

    <!-- Policy Section - Start
    ================================================== -->
    <section class="policy_section section_space_lg">
        <div class="container position-relative">
            <div class="section_heading text-center">
                <h2 class="heading_text mb-0">
                    Flexibility in Planning and Teaching
                </h2>
            </div>
            <div class="row">
                <div class="col col-lg-3">
                    <div class="iconbox_item">
                        <div class="title_wrap">
                            <div class="item_icon bg_dark">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <h3 class="item_title mb-0">
                                <span class="d-block">Allocate the time </span>
                                for study
                            </h3>
                        </div>
                        <p class="mb-0">
                            Etiam sit amet nisl purus in mollis nunc sed. Viverra nibh cras pulvinar mattis nunc sed
                            blandit libero volutpat
                        </p>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="iconbox_item">
                        <div class="title_wrap">
                            <div class="item_icon bg_dark">
                                <i class="fas fa-code-branch"></i>
                            </div>
                            <h3 class="item_title mb-0">
                                <span class="d-block">Alternative learning </span>
                                formats
                            </h3>
                        </div>
                        <p class="mb-0">
                            Posuere ac ut consequat semper viverra nam libero justo. Semper feugiat nibh sed pulvinar
                            proin gravida hendrerit
                        </p>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="iconbox_item">
                        <div class="title_wrap">
                            <div class="item_icon bg_dark">
                                <i class="fas fa-comment-smile"></i>
                            </div>
                            <h3 class="item_title mb-0">
                                <span class="d-block">Mentors with over 5 </span>
                                years of experience
                            </h3>
                        </div>
                        <p class="mb-0">
                            Nunc sed velit dignissim sodales ut eu sem. Id faucibus nisl tincidunt eget. Nunc non
                            blandit massa enim
                        </p>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <div class="iconbox_item">
                        <div class="title_wrap">
                            <div class="item_icon bg_dark">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <h3 class="item_title mb-0">
                                <span class="d-block">Follow the Training </span>
                                Program
                            </h3>
                        </div>
                        <p class="mb-0">
                            Tincidunt vitae semper quis lectus nulla at. Eget lorem dolor sed viverra ipsum nunc. Tellus
                            at urna condimentum
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Policy Section - End
    ================================================== -->
@endsection
