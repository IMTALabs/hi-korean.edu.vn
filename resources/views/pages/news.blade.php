<?php

\Laravel\Folio\name('news');

?>

@extends('layouts.app')

@section('content')
    <!-- Page Section - Start
    ================================================== -->
    <section class="page_banner mt-40">
        <div class="container">
            <div class="content_wrapper" style="background-image: url('assets/images/banner/page_banner_image.png');">
                <div class="row align-items-center">
                    <div class="col col-lg-6">
                        <ul class="breadcrumb_nav unordered_list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#!">Blogs</a></li>
                            <li>Our Blogs</li>
                        </ul>
                        <h1 class="page_title">Tin tức</h1>
                        <p class="page_description">
                            Egestas sed tempus urna et pharetra. Leo integer malesuada nunc vel. Libero id faucibus nisl
                            tincidunt eget nullam non nisi. Faucibus turpis in eu mi bibendum neque egestas
                        </p>
                        <form action="#">
                            <div class="form_item mb-0">
                                <input type="search" name="search" placeholder="What do you want to learn ?">
                                <button type="submit" class="btn btn_dark">
                                    <span>
                                        <small>Search</small>
                                        <small>Search</small>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Section - End
    ================================================== -->

    <!-- Blog Section - Start
    ================================================== -->
    <section class="blog_section section_space_lg">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8">
                    <div class="row">
                        <div class="col col-lg-6">
                            <div class="blog_item">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Photography</a></li>
                                </ul>
                                <div class="item_image">
                                    <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}" data-cursor-text="View">
                                        <img src="assets/images/blog/blog_img_4.jpg"
                                             alt="Collab – Online Learning Platform">
                                    </a>
                                </div>
                                <div class="item_content">
                                    <ul class="meta_info_list unordered_list">
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-thumbtack"></i>
                                                <span>Sticky Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-user"></i>
                                                <span>by Durrad</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-calendar-day"></i>
                                                <span>Feb 12, 2023</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                            The Top Technical Skills All Employees Need in 2022
                                        </a>
                                    </h3>
                                    <a class="btn_unfill" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                        <span class="btn_text">Read Articles</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-long-arrow-right"></i>
                                            <i class="fas fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="blog_item">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Photography</a></li>
                                </ul>
                                <div class="item_image">
                                    <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}" data-cursor-text="View">
                                        <img src="assets/images/blog/blog_img_5.jpg"
                                             alt="Collab – Online Learning Platform">
                                    </a>
                                </div>
                                <div class="item_content">
                                    <ul class="meta_info_list unordered_list">
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-thumbtack"></i>
                                                <span>Sticky Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-user"></i>
                                                <span>by Durrad</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-calendar-day"></i>
                                                <span>Feb 12, 2023</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                            The Best Graphic Design Careers — for Beginners and Professionals
                                        </a>
                                    </h3>
                                    <a class="btn_unfill" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                        <span class="btn_text">Read Articles</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-long-arrow-right"></i>
                                            <i class="fas fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="blog_item">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Photography</a></li>
                                </ul>
                                <div class="item_content">
                                    <ul class="meta_info_list unordered_list">
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-thumbtack"></i>
                                                <span>Sticky Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-user"></i>
                                                <span>by Durrad</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-calendar-day"></i>
                                                <span>Feb 12, 2023</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                            Machine Learning vs. Deep Learning: What’s the Difference?
                                        </a>
                                    </h3>
                                    <a class="btn_unfill" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                        <span class="btn_text">Read Articles</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-long-arrow-right"></i>
                                            <i class="fas fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="blog_item">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Photography</a></li>
                                </ul>
                                <div class="item_content">
                                    <ul class="meta_info_list unordered_list">
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-thumbtack"></i>
                                                <span>Sticky Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-user"></i>
                                                <span>by Durrad</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-calendar-day"></i>
                                                <span>Feb 12, 2023</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                            Data Analyst Career Path in 2023: Skills, Roles and Trends
                                        </a>
                                    </h3>
                                    <a class="btn_unfill" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                        <span class="btn_text">Read Articles</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-long-arrow-right"></i>
                                            <i class="fas fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="blog_item">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Photography</a></li>
                                </ul>
                                <div class="item_image">
                                    <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}" data-cursor-text="View">
                                        <img src="assets/images/blog/blog_img_6.jpg"
                                             alt="Collab – Online Learning Platform">
                                    </a>
                                </div>
                                <div class="item_content">
                                    <ul class="meta_info_list unordered_list">
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-thumbtack"></i>
                                                <span>Sticky Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-user"></i>
                                                <span>by Durrad</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-calendar-day"></i>
                                                <span>Feb 12, 2023</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                            How to Onboard a New Manager or Team Leader Remotely
                                        </a>
                                    </h3>
                                    <a class="btn_unfill" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                        <span class="btn_text">Read Articles</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-long-arrow-right"></i>
                                            <i class="fas fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="blog_item">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Photography</a></li>
                                </ul>
                                <div class="item_image">
                                    <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}" data-cursor-text="View">
                                        <img src="assets/images/blog/blog_img_7.jpg"
                                             alt="Collab – Online Learning Platform">
                                    </a>
                                </div>
                                <div class="item_content">
                                    <ul class="meta_info_list unordered_list">
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-thumbtack"></i>
                                                <span>Sticky Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-user"></i>
                                                <span>by Durrad</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-calendar-day"></i>
                                                <span>Feb 12, 2023</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                            4 Ideas to Improve Learning in the Flow of Work
                                        </a>
                                    </h3>
                                    <a class="btn_unfill" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                        <span class="btn_text">Read Articles</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-long-arrow-right"></i>
                                            <i class="fas fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="blog_item">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Photography</a></li>
                                </ul>
                                <div class="item_image">
                                    <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}" data-cursor-text="View">
                                        <img src="assets/images/blog/blog_img_8.jpg"
                                             alt="Collab – Online Learning Platform">
                                    </a>
                                </div>
                                <div class="item_content">
                                    <ul class="meta_info_list unordered_list">
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-thumbtack"></i>
                                                <span>Sticky Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-user"></i>
                                                <span>by Durrad</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-calendar-day"></i>
                                                <span>Feb 12, 2023</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                            The Best Graphic Design Careers — for Beginners and Professionals
                                        </a>
                                    </h3>
                                    <a class="btn_unfill" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                        <span class="btn_text">Read Articles</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-long-arrow-right"></i>
                                            <i class="fas fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="blog_item">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Photography</a></li>
                                </ul>
                                <div class="item_image">
                                    <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}" data-cursor-text="View">
                                        <img src="assets/images/blog/blog_img_9.jpg"
                                             alt="Collab – Online Learning Platform">
                                    </a>
                                </div>
                                <div class="item_content">
                                    <ul class="meta_info_list unordered_list">
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-thumbtack"></i>
                                                <span>Sticky Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-user"></i>
                                                <span>by Durrad</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-calendar-day"></i>
                                                <span>Feb 12, 2023</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                            How to Become a Web Designer: A Comprehensive Guide
                                        </a>
                                    </h3>
                                    <a class="btn_unfill" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                        <span class="btn_text">Read Articles</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-long-arrow-right"></i>
                                            <i class="fas fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="blog_item">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Photography</a></li>
                                </ul>
                                <div class="item_image">
                                    <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}" data-cursor-text="View">
                                        <img src="assets/images/blog/blog_img_10.jpg"
                                             alt="Collab – Online Learning Platform">
                                    </a>
                                </div>
                                <div class="item_content">
                                    <ul class="meta_info_list unordered_list">
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-thumbtack"></i>
                                                <span>Sticky Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-user"></i>
                                                <span>by Durrad</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-calendar-day"></i>
                                                <span>Feb 12, 2023</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                            How to Become a Cyber Security Engineer: Job Details and Skills
                                        </a>
                                    </h3>
                                    <a class="btn_unfill" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                        <span class="btn_text">Read Articles</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-long-arrow-right"></i>
                                            <i class="fas fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="blog_item">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Photography</a></li>
                                </ul>
                                <div class="item_image">
                                    <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}" data-cursor-text="View">
                                        <img src="assets/images/blog/blog_img_11.jpg"
                                             alt="Collab – Online Learning Platform">
                                    </a>
                                </div>
                                <div class="item_content">
                                    <ul class="meta_info_list unordered_list">
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-thumbtack"></i>
                                                <span>Sticky Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-user"></i>
                                                <span>by Durrad</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-calendar-day"></i>
                                                <span>Feb 12, 2023</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                            The Top Technical Skills All Employees Need in 2023
                                        </a>
                                    </h3>
                                    <a class="btn_unfill" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                        <span class="btn_text">Read Articles</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-long-arrow-right"></i>
                                            <i class="fas fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="blog_item">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Photography</a></li>
                                </ul>
                                <div class="item_image">
                                    <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}" data-cursor-text="View">
                                        <img src="assets/images/blog/blog_img_12.jpg"
                                             alt="Collab – Online Learning Platform">
                                    </a>
                                </div>
                                <div class="item_content">
                                    <ul class="meta_info_list unordered_list">
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-thumbtack"></i>
                                                <span>Sticky Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-user"></i>
                                                <span>by Durrad</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-calendar-day"></i>
                                                <span>Feb 12, 2023</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                            The 6 Best Cybersecurity Certifications to Launch Your Career
                                        </a>
                                    </h3>
                                    <a class="btn_unfill" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                        <span class="btn_text">Read Articles</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-long-arrow-right"></i>
                                            <i class="fas fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6">
                            <div class="blog_item">
                                <ul class="item_category_list unordered_list">
                                    <li><a href="#!">Photography</a></li>
                                </ul>
                                <div class="item_image">
                                    <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}" data-cursor-text="View">
                                        <img src="assets/images/blog/blog_img_13.jpg"
                                             alt="Collab – Online Learning Platform">
                                    </a>
                                </div>
                                <div class="item_content">
                                    <ul class="meta_info_list unordered_list">
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-thumbtack"></i>
                                                <span>Sticky Post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-user"></i>
                                                <span>by Durrad</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-calendar-day"></i>
                                                <span>Feb 12, 2023</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="item_title">
                                        <a href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                            The Best Graphic Design Careers — for Beginners and Professionals
                                        </a>
                                    </h3>
                                    <a class="btn_unfill" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                        <span class="btn_text">Read Articles</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-long-arrow-right"></i>
                                            <i class="fas fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination_wrap">
                        <ul class="pagination_nav unordered_list">
                            <li><a href="#!"><i class="fas fa-long-arrow-left"></i></a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li><a href="#!">2</a></li>
                            <li><a href="#!">...</a></li>
                            <li><a href="#!">6</a></li>
                            <li><a href="#!"><i class="fas fa-long-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <aside class="sidebar ps-lg-4">
                        <div class="widget">
                            <div class="widget_title" role="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapse_category" aria-expanded="true"
                                 aria-controls="collapse_category">
                                Category
                            </div>
                            <div class="collapse show" id="collapse_category">
                                <div class="card card-body">
                                    <div class="checkbox_item">
                                        <input id="checkbox_design" type="checkbox">
                                        <label for="checkbox_design"><span>Design</span><span>(18)</span></label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input id="checkbox_it_software" type="checkbox">
                                        <label for="checkbox_it_software"><span>IT &
                                                Software</span><span>(11)</span></label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input id="checkbox_development" type="checkbox">
                                        <label
                                            for="checkbox_development"><span>Development</span><span>(10)</span></label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input id="checkbox_marketing" type="checkbox">
                                        <label for="checkbox_marketing"><span>Marketing</span><span>(4)</span></label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input id="checkbox_business" type="checkbox">
                                        <label for="checkbox_business"><span>Business</span><span>(8)</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget_title" role="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapse_blog" aria-expanded="true" aria-controls="collapse_blog">
                                Related Articles
                            </div>
                            <div class="collapse show" id="collapse_blog">
                                <div class="card card-body">
                                    <ul class="blog_small_group unordered_list_block">
                                        <li>
                                            <a class="blog_small" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                                <span class="item_image">
                                                    <img src="assets/images/blog/blog_small_img_3.jpg"
                                                         alt="Collab – Online Learning Platform">
                                                </span>
                                                <span class="item_content">
                                                    <span class="item_author"><i class="fas fa-user-alt"></i> by
                                                        Corabelle Durrad</span>
                                                    <strong class="item_title">See How Michaele Built a New Life and
                                                        Career </strong>
                                                    <small class="item_post_date">October 12, 2023</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="blog_small" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                                <span class="item_image">
                                                    <img src="assets/images/blog/blog_small_img_4.jpg"
                                                         alt="Collab – Online Learning Platform">
                                                </span>
                                                <span class="item_content">
                                                    <span class="item_author"><i class="fas fa-user-alt"></i> by
                                                        Corabelle Durrad</span>
                                                    <strong class="item_title">Driving Skills Development for a 2030
                                                        Workforce</strong>
                                                    <small class="item_post_date">October 12, 2023</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="blog_small" href="{{ route('news.show', ['id' => 'create-an-resume']) }}">
                                                <span class="item_image">
                                                    <img src="assets/images/blog/blog_small_img_5.jpg"
                                                         alt="Collab – Online Learning Platform">
                                                </span>
                                                <span class="item_content">
                                                    <span class="item_author"><i class="fas fa-user-alt"></i> by
                                                        Corabelle Durrad</span>
                                                    <strong class="item_title">New Skills, New Career: How Asmita to
                                                        Pursue a New Role</strong>
                                                    <small class="item_post_date">October 12, 2023</small>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget_title" role="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapse_recent_comments" aria-expanded="true"
                                 aria-controls="collapse_recent_comments">
                                Recent Comments
                            </div>
                            <div class="collapse show" id="collapse_recent_comments">
                                <div class="card card-body">
                                    <ul class="recent_comments_list unordered_list_block">
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-comments"></i>
                                                <strong>Irene Flores</strong>
                                            </a>
                                            <span>felis eget velit aliquet sagittis id consectetur</span>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-comments"></i>
                                                <strong>Anthony Patterson</strong>
                                            </a>
                                            <span>gravida in fermentum et sollicitudin</span>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-comments"></i>
                                                <strong>Wendy Johnson</strong>
                                            </a>
                                            <span>aenean sed adipiscing diam donec</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget_title" role="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapse_tags_list" aria-expanded="true"
                                 aria-controls="collapse_tags_list">
                                Tags
                            </div>
                            <div class="collapse show" id="collapse_tags_list">
                                <div class="card card-body">
                                    <ul class="tags_list style_2 unordered_list">
                                        <li><a href="#!">Project Management</a></li>
                                        <li><a href="#!">Engineer</a></li>
                                        <li><a href="#!">Network</a></li>
                                        <li><a href="#!">Systems</a></li>
                                        <li><a href="#!">Security</a></li>
                                        <li><a href="#!">IT & Software</a></li>
                                        <li><a href="#!">Career</a></li>
                                        <li><a href="#!">IT & Software</a></li>
                                        <li><a href="#!">IT & Software</a></li>
                                        <li><a href="#!">Hard Skills</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget_title" role="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapse_archives_month" aria-expanded="true"
                                 aria-controls="collapse_archives_month">
                                Archives
                            </div>
                            <div class="collapse show" id="collapse_archives_month">
                                <div class="card card-body">
                                    <ul class="info_list unordered_list_block">
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-square"></i>
                                                <span>December</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-square"></i>
                                                <span>January</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-square"></i>
                                                <span>February</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fas fa-square"></i>
                                                <span>March</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget_title" role="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapse_calendar" aria-expanded="true"
                                 aria-controls="collapse_calendar">
                                Calendar
                            </div>
                            <div class="collapse show" id="collapse_calendar">
                                <div class="card card-body">
                                    <div class="vanilla-calendar"></div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section - End
    ================================================== -->
@endsection
