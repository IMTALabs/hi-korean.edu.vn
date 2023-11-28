<?php

\Laravel\Folio\name('courses.show');

?>

<x-layouts.app>
    @volt
    <main class="page_content">
        <div class="container mx-auto">
            <div class="flex items-center py-10">
                <a href="{{ route('home') }}" class="text-gray-500">Trang chủ</a>
                <i class="mx-2 fas fa-chevron-right"></i>
                <span>Topik 3-4</span>
            </div>
            <div class="grid gap-x-16 lg:grid-cols-2">
                <div class="lg:col-span-1">
                    <div class="flex grow flex-col items-start justify-center">
                        <span class="bg-alternative-darker text-[#3C1E1F] font-bold text-2xl px-6 py-1 rounded">
                            Khóa học
                        </span>
                        <h1 class="mt-8 uppercase !text-5xl text-black !leading-[4.5rem]">
                            Topik 3-4
                        </h1>
                        <ol class="mt-8 marker:text-3xl marker:font-bold">
                            <li>Topik 3/ Topik 4</li>
                            <li>Cam kết ĐẠT TOPIK 3/ TOPIK 4 nếu đi học và làm bài đầy đủ</li>
                            <li>Nâng cao CƠ HỘI VIỆC LÀM trong tương lai</li>
                            <li>KHẢ NĂNG THĂNG TIẾN NHANH trong công việc</li>
                            <li>DU HỌC không còn là mơ ước</li>
                        </ol>
                    </div>
                </div>
                <div class="lg:col-span-1 max-lg:hidden">
                    <img class="w-full" src="{{ asset('assets/images/course/Group 11770.png') }}" alt="">
                </div>
            </div>
        </div>

        <!-- Về chúng tôi - Start
        ================================================== -->
        <section class="expect_from_course section_space_lg py-16 bg-[#F8F2E6]">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5">
                        <div class="section_heading">
                            <h3 class="text-2xl !text-secondary">Topik 3-4</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                Giới thiệu khóa học
                            </h2>
                        </div>
                    </div>
                    <div class="col col-lg-7">
                        <div class="row">
                            <div class="col">
                                <div class="accordion space-y-8" id="faq_accordion_1">
                                    <div class="accordion-item bg-white px-8 py-4 rounded-xl">
                                        <div class="accordion-button text-lg relative" role="button"
                                             data-bs-toggle="collapse"
                                             data-bs-target="#collapse_one" aria-expanded="true">
                                            <div
                                                class="px-4 py-1 bg-alternative text-primary font-bold rounded lg:mr-4 lg:-ml-12 max-lg:absolute max-lg:-top-10">
                                                48 buổi
                                            </div>
                                            Chi tiết
                                        </div>
                                        <div id="collapse_one" class="accordion-collapse collapse show"
                                             data-bs-parent="#faq_accordion_1">
                                            <div class="accordion-body">
                                                <ul class="space-y-4 pl-4">
                                                    <li class="font-bold">1 buổi orientation: Giới thiệu về kỳ thi Topik. Hướng dẫn cách học, cách lên thời gian biểu ôn thi.</li>
                                                    <li class="font-bold">9 buổi ngữ pháp:</li>
                                                    <li class="ml-8">Giúp học viên nắm được ít nhất 63 điểm ngữ pháp trung cấp bổ trợ cho phần đọc và viết.</li>
                                                    <li class="ml-8">Mỗi buổi học đưa ra 7 điểm ngữ pháp thông qua hội thoại. Sau đó phân tích từng ngữ pháp thông qua ví dụ, đưa ra định nghĩa và chú ý sử dụng cùng cách chia.</li>
                                                    <li class="ml-8">Trước mỗi buổi học, học viên đọc trước tài liệu về 7 ngữ pháp sẽ học để có thể trao đổi sâu hơn trong buổi học. Và cuối mỗi buổi, học viên có nhiệm vụ làm bài luyện tập ngữ pháp đã được gửi.</li>
                                                    <li class="font-bold">8 buổi đọc:</li>
                                                    <li class="ml-8">Gồm 6 buổi lý thuyết và 2 buổi ôn tập.</li>
                                                    <li class="ml-8">Trong 6 buổi lý thuyết học viên được học lần lượt từ câu 1 đến câu 30. Trước tiên, giảng viên sẽ đi vào giới thiệu dạng đề, sau đó phân tính ví dụ và đưa ra các bước làm bài kèm tips. Cuối cùng là thời gian học viên sử dụng kiến thức vừa học để áp dụng vào làm câu luyện tập.</li>
                                                    <li class="ml-8">2 buổi ôn tập, học viên cần làm trước phần đề được giao ở nhà với thời gian như khi thi thật. Sau đó, giảng viên chữa đề và nhắc lại các chú ý khi làm đề thi đọc.</li>
                                                    <li class="ml-8">Học viên làm bài tập được giao ở trong sách Master Topik. Khi có thắc mắc, học viên đăng lên nhóm Facebook Topik của trung tâm để cùng thảo luận và được giải đáp.</li>
                                                    <li class="font-bold">7 buổi nghe:</li>
                                                    <li class="ml-8">Gồm 5 buổi lý thuyết và 2 buổi ôn tập.</li>
                                                    <li class="ml-8">Nội dung tương tự với phần đọc.</li>
                                                    <li class="ml-8">Phần nghe sẽ là kỹ năng được tiếp cận cuối cùng, khi học viên đã nắm chắc ngữ pháp, có một lượng từ vựng nhất định.</li>
                                                    <li class="ml-8">Học viên làm bài tập được giao ở trong sách Master Topik. Khi có thắc mắc, học viên đăng lên nhóm Facebook Topik của trung tâm để cùng thảo luận và được giải đáp.</li>
                                                    <li class="font-bold">20 buổi viết:</li>
                                                    <li class="ml-8">Riêng kỹ năng viết các học viên được học kĩ cả 4 dạng câu từ câu 51 đến câu 54. Phù hợp cho cả học viên có nhu cầu thi Topik 5-6.</li>
                                                    <li class="ml-8">Kỹ năng viết do cô Đặng Dương – giảng viên đại học có kinh nghiệm chuyên sâu cho kỹ năng này phụ trách giảng dạy. Học viên được luyện viết các cấu trúc câu thông dụng, được chữa bài và chỉ ra các lỗi hay mắc để đạt điểm cao cho phần thi này.</li>
                                                    <li class="ml-8">Cách thức triển khai kỹ năng viết sẽ là giới thiệu dạng đề, các cấu trúc thường gặp và cần thiết cho phần viết. Học viên luyện tập viết từng câu lẻ theo cấu trúc được đưa ra. Tiếp theo, giảng viên đưa ra dạng đề, phân tích cách làm và cho học viên luyện tập viết đề.</li>
                                                    <li class="font-bold">3 buổi chữa đề thi thử:</li>
                                                    <li class="ml-8">3 buổi cuối cùng của khóa học, học viên làm bài thi thử. Giảng viên căn cứ vào kết quả và quá trình học tập để đưa ra đánh giá, nhận xét cho học viên cũng như những lưu ý khi vào phòng thi.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Về chúng tôi - End
        ================================================== -->

        <!-- Về chúng tôi - Start
        ================================================== -->
        <section class="expect_from_course section_space_lg py-16">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5">
                        <div class="section_heading">
                            <h3 class="text-2xl !text-secondary">Topik 3-4</h3>
                            <h2 class="mb-0 uppercase heading_text">
                                Điểm mạnh
                            </h2>
                        </div>
                    </div>
                    <div class="col col-lg-7">
                        <div class="row">
                            <div class="col">
                                <div class="accordion space-y-8" id="faq_accordion_2">
                                    <div class="accordion-item bg-[#F8F2E6] px-8 py-4 rounded-xl">
                                        <div id="collapse_two" class="accordion-collapse collapse show"
                                             data-bs-parent="#faq_accordion_2">
                                            <div class="accordion-body">
                                                <ul class="space-y-4 pl-4">
                                                    <li>100% giảng viên đại học khoa ngôn ngữ Hàn, kinh nghiệm luyện thi Topik nhiều khóa với tỷ lệ đỗ lên đến 95%</li>
                                                    <li>Tặng bộ elearning theo dõi tiến độ học, tổng hợp các video giảng dạy theo từng kỹ năng có thể xem đi xem lại, kho bài luyện tập khổng lồ, tập hợp từ vựng từ các đề thi, tính năng thi thử đánh giá trình độ sát nhất.</li>
                                                    <li>Cam kết học lại miễn phí (điều kiện: ....)</li>
                                                    <li>Ngoài giáo viên phụ trách giảng dạy, có đội ngũ giáo viên sẵn sàng giải đáp thắc mắc và hướng dẫn phương pháp học phù hợp</li>
                                                    <li>Được tham gia group cộng đồng Topik II Việt Nam, cập nhật các thông tin liên quan đến kỳ thi, bài giải đề, từ vựng và ngữ pháp cần thiết cho kỳ thi.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Về chúng tôi - End
        ================================================== -->
    </main>
    @endvolt
</x-layouts.app>
