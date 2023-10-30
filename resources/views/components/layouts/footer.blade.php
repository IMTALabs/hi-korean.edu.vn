<footer class="site_footer">
    <div class="footer_widget_area pb-0">
        <div class="container">
            <div class="row">
                <div class="col col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_widget">
                        <div class="site_logo">
                            <a class="site_link" href="index.html">
                                <img src="{{ asset('assets/images/logo/logo.png') }}"
                                     alt="Hi Korean" class="w-24">
                            </a>
                        </div>
                        <p class="line-clamp-6 text-justify">
                            Hi Korean được học viên công nhận có thư viện khóa học đa dạng. Đồng thời đáp ứng đầy đủ nhu
                            cầu của cộng đồng học tiếng Hàn như: Khóa học dành người mới bắt đầu, Giao tiếp cơ bản, Sơ
                            cấp, Trung cấp, Luyện thi TOPIK, Tiếng Hàn Business,...
                        </p>
                        <ul class="social_links unordered_list">
                            <li>
                                <a href="#!"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fas fa-envelope"></i></a>
                            </li>
                            <li>
                                <a href="#!"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_widget">
                        <h3 class="footer_widget_title uppercase">Thông tin liên hệ</h3>
                        <ul class="page_list unordered_list_block">
                            <li>
                                <span class="text-muted">Email</span>
                                <a class="block truncate font-bold" href="mailto:hikoreanno1@gmail.com">hikoreanno1@gmail.com</a>
                            </li>

                            <li>
                                <span class="text-muted">Địa chỉ</span>
                                <a class="line-clamp-2 font-bold">số 20, ngách 850/3 đường Láng, Đống Đa, Hà Nội</a>
                            </li>

                            <li>
                                <span class="text-muted">Số điện thoại</span>
                                <a class="block truncate font-bold">0394.589.291</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_widget">
                        <h3 class="footer_widget_title uppercase">Liên kết</h3>
                        <ul class="page_list unordered_list_block">
                            <li>
                                <a class="font-bold" href="{{ route('about_us') }}" wire:navigate>
                                    <span class="item_text">Giới thiệu</span>
                                </a>
                            </li>
                            <li>
                                <a class="font-bold" href="{{ route('courses') }}" wire:navigate>
                                    <span class="item_text">Khóa học</span>
                                </a>
                            </li>
                            <li>
                                <a class="font-bold" href="{{ route('news') }}" wire:navigate>
                                    <span class="item_text">Tin tức</span>
                                </a>
                            </li>
                            <li>
                                <a class="font-bold" href="{{ route('contact') }}" wire:navigate>
                                    <span class="item_text">Liên hệ</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_widget">
                        <h3 class="footer_widget_title uppercase">Liên hệ</h3>
                        <form action="#" class="mt-8 grid gap-4 relative">
                            <input type="text" class="col-span-1 border border-primary px-4 py-2 rounded-lg"
                                   placeholder="Họ tên">
                            <input type="text" class="col-span-1 border border-primary px-4 py-2 rounded-lg"
                                   placeholder="Số điện thoại">
                            <input type="email" class="col-span-1 border border-primary px-4 py-2 rounded-lg"
                                   placeholder="Email">
                            <button type="submit"
                                    class="uppercase px-10 py-2 bg-black text-alternative-darker rounded-lg font-bold whitespace-nowrap w-fit">
                                Gửi form
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col text-center text-xs text-muted my-2">
                    Copyright @ 2022 Hi Korean
                </div>
            </div>
        </div>
    </div>
</footer>
