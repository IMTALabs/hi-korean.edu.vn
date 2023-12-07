<?php

\Laravel\Folio\name('media');

?>

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/lightgallery@2.7.2/css/lightgallery-bundle.min.css">
    <style>
        #lightgallery img {
            aspect-ratio: 1/1;
            object-fit: cover;
        }
    </style>
@endpush

@push('scripts')
    <script type="module">
        import lightGallery from "https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/+esm";
        import lgThumbnail from "https://unpkg.com/lightgallery@2.7.2/plugins/zoom/lg-zoom.es5.js";
        import lgZoom from "https://unpkg.com/lightgallery@2.7.2/plugins/thumbnail/lg-thumbnail.es5.js";

        lightGallery(document.getElementById("lightgallery"), {
            plugins: [lgZoom, lgThumbnail],
            speed: 500
        });
    </script>
@endpush

<x-layouts.app>
    @volt
    <main class="page_content min-h-[calc(100vh-504px)]">
        <div class="grow">
            <section class="courses_section section_space_lg mt-12">
                <div class="container">
                    <div class="section_heading">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col col-lg-6">
                                <h2 class="heading_text mb-0">
                                    Hoạt động
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="pswp-gallery pswp-gallery--single-column grid grid-cols-2 lg:grid-cols-4 gap-4"
                             id="lightgallery">
                            <a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/406988114_673141608323281_1451367100632332734_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=3635dc&_nc_ohc=XuCjIkaR_NAAX8g4QUI&_nc_ht=scontent.fhan2-3.fna&oh=00_AfB6bo3v4UNNCUTdOFENP-TKVKDtKlIkV5gcCGtN6Us7Eg&oe=65758093"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/407107413_671092138528228_369144510044780480_n.jpg?stp=c0.23.206.206a_dst-jpg_p206x206&_nc_cat=110&ccb=1-7&_nc_sid=3d9721&_nc_ohc=G6sqfU8fdYwAX8yQhke&_nc_ht=scontent.fhan2-4.fna&oh=00_AfABxoazKJCeNzXMY8v5Uy1tj3sPaw70Sa4CMIXYCBZm6w&oe=657719C4"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/407107413_671092138528228_369144510044780480_n.jpg?stp=c0.23.206.206a_dst-jpg_p206x206&_nc_cat=110&ccb=1-7&_nc_sid=3d9721&_nc_ohc=G6sqfU8fdYwAX8yQhke&_nc_ht=scontent.fhan2-4.fna&oh=00_AfABxoazKJCeNzXMY8v5Uy1tj3sPaw70Sa4CMIXYCBZm6w&oe=657719C4"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/405366705_669435822027193_1171052380477824084_n.jpg?stp=dst-jpg_p206x206&_nc_cat=106&ccb=1-7&_nc_sid=3d9721&_nc_ohc=Jc0CeTsPEQ4AX8yvLGU&_nc_ht=scontent.fhan2-3.fna&oh=00_AfBfC3T7t1SIuKT-_hJ-ZW55NBTl5ymODfA6_KOV77Ts7A&oe=657739EF"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/405366705_669435822027193_1171052380477824084_n.jpg?stp=dst-jpg_p206x206&_nc_cat=106&ccb=1-7&_nc_sid=3d9721&_nc_ohc=Jc0CeTsPEQ4AX8yvLGU&_nc_ht=scontent.fhan2-3.fna&oh=00_AfBfC3T7t1SIuKT-_hJ-ZW55NBTl5ymODfA6_KOV77Ts7A&oe=657739EF"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/405220642_668924832078292_3800056797278474169_n.jpg?stp=dst-jpg_p206x206&_nc_cat=109&ccb=1-7&_nc_sid=3d9721&_nc_ohc=NRbASp5Z96IAX-BmR2r&_nc_ht=scontent.fhan2-3.fna&oh=00_AfDHHpuVtupoLjgzBL1LTe8AMKTWrmrV5ofl-8ktEUQ3aw&oe=6575F8CF"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/405220642_668924832078292_3800056797278474169_n.jpg?stp=dst-jpg_p206x206&_nc_cat=109&ccb=1-7&_nc_sid=3d9721&_nc_ohc=NRbASp5Z96IAX-BmR2r&_nc_ht=scontent.fhan2-3.fna&oh=00_AfDHHpuVtupoLjgzBL1LTe8AMKTWrmrV5ofl-8ktEUQ3aw&oe=6575F8CF"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/404950690_667420268895415_7284073391731021569_n.jpg?stp=dst-jpg_p206x206&_nc_cat=100&ccb=1-7&_nc_sid=3d9721&_nc_ohc=MsWFFVcCJbUAX8Hk5Mx&_nc_ht=scontent.fhan2-4.fna&oh=00_AfBf_OoIBx_OywfmUPZX8Gjsu2hQnibA0gA71VyQcMKGlg&oe=6576F307"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/404950690_667420268895415_7284073391731021569_n.jpg?stp=dst-jpg_p206x206&_nc_cat=100&ccb=1-7&_nc_sid=3d9721&_nc_ohc=MsWFFVcCJbUAX8Hk5Mx&_nc_ht=scontent.fhan2-4.fna&oh=00_AfBf_OoIBx_OywfmUPZX8Gjsu2hQnibA0gA71VyQcMKGlg&oe=6576F307"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/403603887_666347109002731_9166771656352911663_n.jpg?stp=dst-jpg_p206x206&_nc_cat=101&ccb=1-7&_nc_sid=3d9721&_nc_ohc=83TljBVCsrsAX-gfB4C&_nc_ht=scontent.fhan2-3.fna&oh=00_AfDM_ba4n1csg7207bHgJqF4bgYAw-ZLfaIGYN4JH_UCNg&oe=65761DDA"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/403603887_666347109002731_9166771656352911663_n.jpg?stp=dst-jpg_p206x206&_nc_cat=101&ccb=1-7&_nc_sid=3d9721&_nc_ohc=83TljBVCsrsAX-gfB4C&_nc_ht=scontent.fhan2-3.fna&oh=00_AfDM_ba4n1csg7207bHgJqF4bgYAw-ZLfaIGYN4JH_UCNg&oe=65761DDA"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/402082989_665391252431650_4922739579280060871_n.jpg?stp=dst-jpg_p206x206&_nc_cat=100&ccb=1-7&_nc_sid=3d9721&_nc_ohc=iFTrf5ScYGMAX9PvY7k&_nc_ht=scontent.fhan2-4.fna&oh=00_AfDUK6JPpBHt1_qRTDipwnWTcji8mVZ9KUsPQsEQwDYOrA&oe=6576DBA3"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/402082989_665391252431650_4922739579280060871_n.jpg?stp=dst-jpg_p206x206&_nc_cat=100&ccb=1-7&_nc_sid=3d9721&_nc_ohc=iFTrf5ScYGMAX9PvY7k&_nc_ht=scontent.fhan2-4.fna&oh=00_AfDUK6JPpBHt1_qRTDipwnWTcji8mVZ9KUsPQsEQwDYOrA&oe=6576DBA3"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/402104714_665391102431665_2806733120842325304_n.jpg?stp=dst-jpg_p206x206&_nc_cat=100&ccb=1-7&_nc_sid=3d9721&_nc_ohc=uTUS8rcPB7kAX9Yt1qj&_nc_ht=scontent.fhan2-4.fna&oh=00_AfDIKln5KM32G0WP-4ZElR_fcQ42z2G_Kvty03wx9b4zUg&oe=6576A636"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/402104714_665391102431665_2806733120842325304_n.jpg?stp=dst-jpg_p206x206&_nc_cat=100&ccb=1-7&_nc_sid=3d9721&_nc_ohc=uTUS8rcPB7kAX9Yt1qj&_nc_ht=scontent.fhan2-4.fna&oh=00_AfDIKln5KM32G0WP-4ZElR_fcQ42z2G_Kvty03wx9b4zUg&oe=6576A636"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/400664701_662240439413398_6770887023367592849_n.jpg?stp=dst-jpg_p206x206&_nc_cat=102&ccb=1-7&_nc_sid=3d9721&_nc_ohc=b4QXose3Oe0AX9CWTNK&_nc_ht=scontent.fhan2-3.fna&oh=00_AfCB-3Q3YnlXuU_B4M7bPhWyiovvE91q6OtrlZcHiOW2Ww&oe=65768D16"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/400664701_662240439413398_6770887023367592849_n.jpg?stp=dst-jpg_p206x206&_nc_cat=102&ccb=1-7&_nc_sid=3d9721&_nc_ohc=b4QXose3Oe0AX9CWTNK&_nc_ht=scontent.fhan2-3.fna&oh=00_AfCB-3Q3YnlXuU_B4M7bPhWyiovvE91q6OtrlZcHiOW2Ww&oe=65768D16"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/402183054_662240412746734_4004005643901650160_n.jpg?stp=dst-jpg_p206x206&_nc_cat=107&ccb=1-7&_nc_sid=3d9721&_nc_ohc=Xy5jhqiJKZ0AX_eJj5R&_nc_ht=scontent.fhan2-3.fna&oh=00_AfBIkqMU--cDvt6fi6en2V5O6mA4Xa_2DIPyIBWfamqiXg&oe=657600E2"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/402183054_662240412746734_4004005643901650160_n.jpg?stp=dst-jpg_p206x206&_nc_cat=107&ccb=1-7&_nc_sid=3d9721&_nc_ohc=Xy5jhqiJKZ0AX_eJj5R&_nc_ht=scontent.fhan2-3.fna&oh=00_AfBIkqMU--cDvt6fi6en2V5O6mA4Xa_2DIPyIBWfamqiXg&oe=657600E2"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/402026967_662240402746735_692489240976985890_n.jpg?stp=dst-jpg_p206x206&_nc_cat=105&ccb=1-7&_nc_sid=3d9721&_nc_ohc=UTKRceYUR8MAX8LEcpJ&_nc_ht=scontent.fhan2-4.fna&oh=00_AfCKSq09t9rIMBfs-8LoHMTPSDrIohzku-mXNH4vcDKiJg&oe=65762285"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/402026967_662240402746735_692489240976985890_n.jpg?stp=dst-jpg_p206x206&_nc_cat=105&ccb=1-7&_nc_sid=3d9721&_nc_ohc=UTKRceYUR8MAX8LEcpJ&_nc_ht=scontent.fhan2-4.fna&oh=00_AfCKSq09t9rIMBfs-8LoHMTPSDrIohzku-mXNH4vcDKiJg&oe=65762285"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/402022982_662240379413404_5147524926743132813_n.jpg?stp=dst-jpg_p206x206&_nc_cat=107&ccb=1-7&_nc_sid=3d9721&_nc_ohc=DyQ1Odar2C8AX-kJVHx&_nc_ht=scontent.fhan2-3.fna&oh=00_AfA8zTRLv0V6IYgYk2U-RQ8wltFvz13NAz38bgg85otsZQ&oe=6576C0FA"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/402022982_662240379413404_5147524926743132813_n.jpg?stp=dst-jpg_p206x206&_nc_cat=107&ccb=1-7&_nc_sid=3d9721&_nc_ohc=DyQ1Odar2C8AX-kJVHx&_nc_ht=scontent.fhan2-3.fna&oh=00_AfA8zTRLv0V6IYgYk2U-RQ8wltFvz13NAz38bgg85otsZQ&oe=6576C0FA"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/402022982_662240379413404_5147524926743132813_n.jpg?stp=dst-jpg_p206x206&_nc_cat=107&ccb=1-7&_nc_sid=3d9721&_nc_ohc=DyQ1Odar2C8AX-kJVHx&_nc_ht=scontent.fhan2-3.fna&oh=00_AfA8zTRLv0V6IYgYk2U-RQ8wltFvz13NAz38bgg85otsZQ&oe=6576C0FA"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/402022982_662240379413404_5147524926743132813_n.jpg?stp=dst-jpg_p206x206&_nc_cat=107&ccb=1-7&_nc_sid=3d9721&_nc_ohc=DyQ1Odar2C8AX-kJVHx&_nc_ht=scontent.fhan2-3.fna&oh=00_AfA8zTRLv0V6IYgYk2U-RQ8wltFvz13NAz38bgg85otsZQ&oe=6576C0FA"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/401851227_662240359413406_1519773480201031202_n.jpg?stp=dst-jpg_p206x206&_nc_cat=101&ccb=1-7&_nc_sid=3d9721&_nc_ohc=RwnPYyN7yacAX91MUdj&_nc_ht=scontent.fhan2-3.fna&oh=00_AfCAJjoz0qei6znJukT3IcMO8isAk0UrnzcJphpxxAPqfw&oe=65765E64"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/401851227_662240359413406_1519773480201031202_n.jpg?stp=dst-jpg_p206x206&_nc_cat=101&ccb=1-7&_nc_sid=3d9721&_nc_ohc=RwnPYyN7yacAX91MUdj&_nc_ht=scontent.fhan2-3.fna&oh=00_AfCAJjoz0qei6znJukT3IcMO8isAk0UrnzcJphpxxAPqfw&oe=65765E64"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/402430447_662240356080073_3180062801980935193_n.jpg?stp=dst-jpg_p206x206&_nc_cat=104&ccb=1-7&_nc_sid=3d9721&_nc_ohc=B7TzobZqQesAX9PJtrs&_nc_ht=scontent.fhan2-4.fna&oh=00_AfBnp5KgAEfx9EBmV8gKN-LzbGxRWWesa_MHXrnIlBKlCA&oe=6576E10F"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/402430447_662240356080073_3180062801980935193_n.jpg?stp=dst-jpg_p206x206&_nc_cat=104&ccb=1-7&_nc_sid=3d9721&_nc_ohc=B7TzobZqQesAX9PJtrs&_nc_ht=scontent.fhan2-4.fna&oh=00_AfBnp5KgAEfx9EBmV8gKN-LzbGxRWWesa_MHXrnIlBKlCA&oe=6576E10F"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/402008787_662240326080076_3475102778663571662_n.jpg?stp=dst-jpg_p206x206&_nc_cat=100&ccb=1-7&_nc_sid=3d9721&_nc_ohc=oppQO8p9y6MAX_iQSVj&_nc_ht=scontent.fhan2-4.fna&oh=00_AfBHJEnp1pSjWntyETPUJ1l0HDnVjIE02S0sXS4eFDuI0g&oe=6577097D"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/402008787_662240326080076_3475102778663571662_n.jpg?stp=dst-jpg_p206x206&_nc_cat=100&ccb=1-7&_nc_sid=3d9721&_nc_ohc=oppQO8p9y6MAX_iQSVj&_nc_ht=scontent.fhan2-4.fna&oh=00_AfBHJEnp1pSjWntyETPUJ1l0HDnVjIE02S0sXS4eFDuI0g&oe=6577097D"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/402046914_662240329413409_3635491334767678718_n.jpg?stp=dst-jpg_p206x206&_nc_cat=102&ccb=1-7&_nc_sid=3d9721&_nc_ohc=DdJ4beklYuEAX-8Hv3Q&_nc_ht=scontent.fhan2-3.fna&oh=00_AfAS7CslDjJcW3kTxmduA5-NblH-xyO3GgIIfvrkUX86mg&oe=6576C13C"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/402046914_662240329413409_3635491334767678718_n.jpg?stp=dst-jpg_p206x206&_nc_cat=102&ccb=1-7&_nc_sid=3d9721&_nc_ohc=DdJ4beklYuEAX-8Hv3Q&_nc_ht=scontent.fhan2-3.fna&oh=00_AfAS7CslDjJcW3kTxmduA5-NblH-xyO3GgIIfvrkUX86mg&oe=6576C13C"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/346459792_6298735356842324_2676532810345233814_n.jpg?stp=dst-jpg_p206x206&_nc_cat=104&ccb=1-7&_nc_sid=3d9721&_nc_ohc=FtSk_zA1JKEAX96Zt2s&_nc_ht=scontent.fhan2-4.fna&oh=00_AfDS2kDH3CC6F8HeYzlAKnBdM4M2WBaUqdFdCK1KdAvetw&oe=65758E3A"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/346459792_6298735356842324_2676532810345233814_n.jpg?stp=dst-jpg_p206x206&_nc_cat=104&ccb=1-7&_nc_sid=3d9721&_nc_ohc=FtSk_zA1JKEAX96Zt2s&_nc_ht=scontent.fhan2-4.fna&oh=00_AfDS2kDH3CC6F8HeYzlAKnBdM4M2WBaUqdFdCK1KdAvetw&oe=65758E3A"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/346962795_1595990694219851_4016284449159608578_n.jpg?stp=dst-jpg_p206x206&_nc_cat=107&ccb=1-7&_nc_sid=3d9721&_nc_ohc=H-tyzWrp2EoAX8avmk1&_nc_oc=AQmPOoWsMX8fN8q67buKGRKEISMbe3B1Yduxkwo9Dl1Yo4mTOyUjKBMms76NEuuDDIw&_nc_ht=scontent.fhan2-3.fna&oh=00_AfCflR9coZnwDeOEa1BwZjK_rJmR2QTQWJTEtA8TIW6uSg&oe=6576F664"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/346962795_1595990694219851_4016284449159608578_n.jpg?stp=dst-jpg_p206x206&_nc_cat=107&ccb=1-7&_nc_sid=3d9721&_nc_ohc=H-tyzWrp2EoAX8avmk1&_nc_oc=AQmPOoWsMX8fN8q67buKGRKEISMbe3B1Yduxkwo9Dl1Yo4mTOyUjKBMms76NEuuDDIw&_nc_ht=scontent.fhan2-3.fna&oh=00_AfCflR9coZnwDeOEa1BwZjK_rJmR2QTQWJTEtA8TIW6uSg&oe=6576F664"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/346804338_818152512502706_6674156403580190462_n.jpg?stp=dst-jpg_p206x206&_nc_cat=102&ccb=1-7&_nc_sid=3d9721&_nc_ohc=bOmkWmD2QG0AX_lwADl&_nc_ht=scontent.fhan2-3.fna&oh=00_AfC5xM05TzyHIZEviGhYS8w_3lQZSgmlMZz2iO5RcCLDhA&oe=65758C26"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/346804338_818152512502706_6674156403580190462_n.jpg?stp=dst-jpg_p206x206&_nc_cat=102&ccb=1-7&_nc_sid=3d9721&_nc_ohc=bOmkWmD2QG0AX_lwADl&_nc_ht=scontent.fhan2-3.fna&oh=00_AfC5xM05TzyHIZEviGhYS8w_3lQZSgmlMZz2iO5RcCLDhA&oe=65758C26"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/346804338_818152512502706_6674156403580190462_n.jpg?stp=dst-jpg_p206x206&_nc_cat=102&ccb=1-7&_nc_sid=3d9721&_nc_ohc=bOmkWmD2QG0AX_lwADl&_nc_ht=scontent.fhan2-3.fna&oh=00_AfC5xM05TzyHIZEviGhYS8w_3lQZSgmlMZz2iO5RcCLDhA&oe=65758C26"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/346804338_818152512502706_6674156403580190462_n.jpg?stp=dst-jpg_p206x206&_nc_cat=102&ccb=1-7&_nc_sid=3d9721&_nc_ohc=bOmkWmD2QG0AX_lwADl&_nc_ht=scontent.fhan2-3.fna&oh=00_AfC5xM05TzyHIZEviGhYS8w_3lQZSgmlMZz2iO5RcCLDhA&oe=65758C26"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/346804338_818152512502706_6674156403580190462_n.jpg?stp=dst-jpg_p206x206&_nc_cat=102&ccb=1-7&_nc_sid=3d9721&_nc_ohc=bOmkWmD2QG0AX_lwADl&_nc_ht=scontent.fhan2-3.fna&oh=00_AfC5xM05TzyHIZEviGhYS8w_3lQZSgmlMZz2iO5RcCLDhA&oe=65758C26"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/346804338_818152512502706_6674156403580190462_n.jpg?stp=dst-jpg_p206x206&_nc_cat=102&ccb=1-7&_nc_sid=3d9721&_nc_ohc=bOmkWmD2QG0AX_lwADl&_nc_ht=scontent.fhan2-3.fna&oh=00_AfC5xM05TzyHIZEviGhYS8w_3lQZSgmlMZz2iO5RcCLDhA&oe=65758C26"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/346813841_1679658085832583_8637774075892601898_n.jpg?stp=dst-jpg_p206x206&_nc_cat=101&ccb=1-7&_nc_sid=3d9721&_nc_ohc=jOcvEUCbZacAX_2-Q93&_nc_ht=scontent.fhan2-3.fna&oh=00_AfC8TXJLXzleT4hAVYecT3AlxGpMC45t51q0iGmQ5tfcOQ&oe=657657E9"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/346813841_1679658085832583_8637774075892601898_n.jpg?stp=dst-jpg_p206x206&_nc_cat=101&ccb=1-7&_nc_sid=3d9721&_nc_ohc=jOcvEUCbZacAX_2-Q93&_nc_ht=scontent.fhan2-3.fna&oh=00_AfC8TXJLXzleT4hAVYecT3AlxGpMC45t51q0iGmQ5tfcOQ&oe=657657E9"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/400325990_659311976372911_2837271457302946918_n.jpg?stp=dst-jpg_p206x206&_nc_cat=107&ccb=1-7&_nc_sid=3d9721&_nc_ohc=AT514PlVsv8AX9MOikj&_nc_ht=scontent.fhan2-3.fna&oh=00_AfDmuFpszWrwoz4bQG50hPIdvSzP_94p4szqJVlxP1OgEg&oe=657637C9"
                                    alt=""/>
                            </a><a href="https://scontent.fhan2-3.fna.fbcdn.net/v/t39.30808-6/400325990_659311976372911_2837271457302946918_n.jpg?stp=dst-jpg_p206x206&_nc_cat=107&ccb=1-7&_nc_sid=3d9721&_nc_ohc=AT514PlVsv8AX9MOikj&_nc_ht=scontent.fhan2-3.fna&oh=00_AfDmuFpszWrwoz4bQG50hPIdvSzP_94p4szqJVlxP1OgEg&oe=657637C9"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan2-4.fna.fbcdn.net/v/t39.30808-6/400389959_659294459707996_8034000912485917994_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=3635dc&_nc_ohc=Ka-BdRVl54IAX8nBiF1&_nc_ht=scontent.fhan2-4.fna&oh=00_AfBwWPfCsNB3CM5ZeWva0lLV_gMdPGzlBpmM6u3OEn1UzQ&oe=6575B59A"
                                    alt=""/>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    @endvolt
</x-layouts.app>
