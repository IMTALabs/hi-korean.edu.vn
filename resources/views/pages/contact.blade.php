<?php

\Laravel\Folio\name('contact');

?>

<x-layouts.app>
    @volt
    <main class="page_content">
        <!-- Contact Section - Start
        ================================================== -->
        <section class="contact_section section_space_lg">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5">
                        <div class="pe-lg-5">
                            <div class="section_heading">
                                <h2 class="heading_text uppercase">
                                    Liên hệ
                                </h2>
                            </div>
                            <div class="iconbox_item contact_info_iconbox">
                                <div class="item_icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">Số điện thoại</h3>
                                    <p class="mb-0">0394.589.291</p>
                                </div>
                            </div>
                            <div class="iconbox_item contact_info_iconbox">
                                <div class="item_icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">Địa chỉ email</h3>
                                    <p class="mb-0">hikoreanno1@gmail.com</p>
                                </div>
                            </div>
                            <div class="iconbox_item contact_info_iconbox">
                                <div class="item_icon">
                                    <i class="fas fa-location-dot"></i>
                                </div>
                                <div class="item_content">
                                    <h3 class="item_title">Địa chỉ</h3>
                                    <p class="mb-0">số 20, ngách 850/3 đường Láng, Đống Đa, Hà Nội</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-7">
                        <div class="gmap_canvas">
                            <iframe id="gmap_canvas_iframe"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.77238899742665!2d105.79378375260957!3d21.018347907302694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135adb42176c023%3A0xe45b190103345f70!2zVHJ1bmcgdMOibSB0aeG6v25nIEjDoG4gSGkgS29yZWFu!5e0!3m2!1sen!2s!4v1698631757039!5m2!1sen!2s"
                                    allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section - End
        ================================================== -->

        <!-- Call To Action Section - Start
        ================================================== -->
        <section class="mb-16 calltoaction_section container mx-auto">
            <div
                class="boxed_wrapper pb-4 pt-12 bg-[#FDD561] border border-primary rounded-3xl decoration_wrap bg-center bg-cover bg-blend-multiply"
                style="background-image: url('{{ asset('assets/images/banner/page_banner_image.png') }}')">
                <div class="row align-items-center">
                    <div class="w-full md:w-5/12">
                        <div class="section_heading">
                            <h2 class="heading_text mb-0">
                                Đăng ký tham gia
                            </h2>
                            <h3 class="font-medium text-base">
                                Điền thông tin, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất
                            </h3>

                            <form action="{{ route('contact.store') }}" method="post"
                                  class="mt-8 grid grid-cols-2 gap-4 relative">
                                @csrf
                                <input type="text" class="col-span-1 border border-primary px-4 py-2 rounded-lg"
                                       placeholder="Họ tên" name="name">
                                <input type="text" class="col-span-1 border border-primary px-4 py-2 rounded-lg"
                                       placeholder="Số điện thoại" name="phone_number">
                                <input type="email" class="col-span-full border border-primary px-4 py-2 rounded-lg"
                                       placeholder="Email" name="email">
                                <textarea class="col-span-full border border-primary px-4 py-2 rounded-lg"
                                          placeholder="Lời nhắn" name="message"></textarea>
                                <button type="submit"
                                        class="uppercase px-10 py-2 bg-black text-alternative-darker rounded-lg font-bold absolute -bottom-14">
                                    Gửi form
                                </button>
                            </form>

                            @if(session()->has('message'))
                                <script>
                                    alert("{{ session()->get('message') }}")
                                </script>
                            @endif
                        </div>
                    </div>
                    <div class="hidden md:block md:w-7/12">
                        <svg width="294" height="261" viewBox="0 0 294 261" fill="none"
                             xmlns="http://www.w3.org/2000/svg" class="ml-auto block">
                            <path
                                d="M49 207C196.569 188.497 207.706 81.1818 158.052 74.7059C94.9741 66.479 111.647 169.855 173.83 157.043C240.282 143.351 260.298 69.3093 262 34"
                                stroke="#B67222" stroke-dasharray="10 10"/>
                            <g clip-path="url(#clip0_2512_2794)">
                                <path d="M0.737305 220.436L96.2633 175.733L33.3859 228.043L0.737305 220.436Z"
                                      fill="white" stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M41.8737 229.802L33.251 260.231L52.1425 236.444L41.8737 229.802Z"
                                      fill="#FFEF9E" stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M96.2628 175.733L41.873 229.802L77.703 252.99L96.2628 175.733Z" fill="white"
                                      stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M33.251 228.324V260.267L42.1563 230.192L95.7845 176.758L33.251 228.324Z"
                                      fill="#FEFFDD" stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M23.7314 218.433L33.951 212.731" stroke="#E6BE8F" stroke-width="0.5"
                                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M29.4668 219.459L33.5325 217.054" stroke="#E6BE8F" stroke-width="0.5"
                                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <g clip-path="url(#clip1_2512_2794)">
                                <path d="M226.517 31.6995L293.483 0.511108L249.404 37.0069L226.517 31.6995Z"
                                      fill="white" stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M255.354 38.2336L249.31 59.4632L262.553 42.868L255.354 38.2336Z" fill="#FFEF9E"
                                      stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M293.483 0.511108L255.354 38.2337L280.472 54.4114L293.483 0.511108Z"
                                      fill="white" stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M249.31 37.2029V59.4889L255.552 38.5064L293.147 1.22681L249.31 37.2029Z"
                                      fill="#FEFFDD" stroke="#E6BE8F" stroke-width="1.2" stroke-miterlimit="10"
                                      stroke-linejoin="round"/>
                                <path d="M242.636 30.3024L249.8 26.324" stroke="#E6BE8F" stroke-width="0.5"
                                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M246.657 31.018L249.507 29.3397" stroke="#E6BE8F" stroke-width="0.5"
                                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2512_2794">
                                    <rect width="97" height="86" fill="white" transform="translate(0 175)"/>
                                </clipPath>
                                <clipPath id="clip1_2512_2794">
                                    <rect width="68" height="60" fill="white" transform="translate(226)"/>
                                </clipPath>
                            </defs>
                        </svg>
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
    </main>
    @endvolt
</x-layouts.app>
