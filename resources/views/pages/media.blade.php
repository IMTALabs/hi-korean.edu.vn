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
                            <a href="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/368239551_615154604121982_3252719131205198815_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEncRXfQrGT8GbKTrxb5w9-wTkEwumdt9fBOQTC6Z23121Fiq8hUlir3eQJHQ0sda9R8KuXKQWbjKP1_1bjGRKC&_nc_ohc=Py0pxPyGQ2cAX_NW7SA&_nc_ht=scontent.fhan14-1.fna&oh=00_AfDxiBpmHB2TyWcCKD94VpivfoqlP28aI-QSW0RVF-FZCg&oe=65696B70"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/368239551_615154604121982_3252719131205198815_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEncRXfQrGT8GbKTrxb5w9-wTkEwumdt9fBOQTC6Z23121Fiq8hUlir3eQJHQ0sda9R8KuXKQWbjKP1_1bjGRKC&_nc_ohc=Py0pxPyGQ2cAX_NW7SA&_nc_ht=scontent.fhan14-1.fna&oh=00_AfDxiBpmHB2TyWcCKD94VpivfoqlP28aI-QSW0RVF-FZCg&oe=65696B70"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/367426873_616206084016834_5526045535344941440_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGxUlA8VBAgWopb6JZtExeX4aaXORuBTM3hppc5G4FMzQoAcMPEJkn59OQCzanH6F7DGmqCnv2E9l3cFwVNnWQk&_nc_ohc=U8-JNw-rUz0AX-lFJ8U&_nc_ht=scontent.fhan14-4.fna&oh=00_AfCDGghO4k40CODsDfAI30iFh6SFRY9bnU0Mg88ToU3LZQ&oe=656A7CBC"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/367426873_616206084016834_5526045535344941440_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGxUlA8VBAgWopb6JZtExeX4aaXORuBTM3hppc5G4FMzQoAcMPEJkn59OQCzanH6F7DGmqCnv2E9l3cFwVNnWQk&_nc_ohc=U8-JNw-rUz0AX-lFJ8U&_nc_ht=scontent.fhan14-4.fna&oh=00_AfCDGghO4k40CODsDfAI30iFh6SFRY9bnU0Mg88ToU3LZQ&oe=656A7CBC"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/368212596_616206127350163_8417724170930565580_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeELZtLoucMhJQO2u9uo6FQ8dtwJJGhaNId23AkkaFo0h8KFR6Vb_jlF3-mfRYmSTnB4ok2F5lhGTWEBQIkoN20l&_nc_ohc=eBCdHg8X_lsAX_nEvIO&_nc_ht=scontent.fhan14-3.fna&oh=00_AfA1IKwodcaIAxSSxZJuZCxc3x1v4GqgyW5i3gu7kYyrrA&oe=656B4E22"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/368212596_616206127350163_8417724170930565580_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeELZtLoucMhJQO2u9uo6FQ8dtwJJGhaNId23AkkaFo0h8KFR6Vb_jlF3-mfRYmSTnB4ok2F5lhGTWEBQIkoN20l&_nc_ohc=eBCdHg8X_lsAX_nEvIO&_nc_ht=scontent.fhan14-3.fna&oh=00_AfA1IKwodcaIAxSSxZJuZCxc3x1v4GqgyW5i3gu7kYyrrA&oe=656B4E22"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/368241235_616206157350160_5054740270367602422_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG-XivYrcgcBKEAoYFqGP_Oc3WUiojj58RzdZSKiOPnxDRF_Xh_gltNnCjaWK6mellIndc2gYpyqmnqTImeRGvt&_nc_ohc=18apD1hw8j8AX-IKHSK&_nc_ht=scontent.fhan14-2.fna&oh=00_AfBsLssPMRcxXQPQwOEtrcpaGh83KV5imP9JAg0Ods0u5A&oe=656A9BCC"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/368241235_616206157350160_5054740270367602422_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG-XivYrcgcBKEAoYFqGP_Oc3WUiojj58RzdZSKiOPnxDRF_Xh_gltNnCjaWK6mellIndc2gYpyqmnqTImeRGvt&_nc_ohc=18apD1hw8j8AX-IKHSK&_nc_ht=scontent.fhan14-2.fna&oh=00_AfBsLssPMRcxXQPQwOEtrcpaGh83KV5imP9JAg0Ods0u5A&oe=656A9BCC"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/368268780_617211080583001_6343197235728234933_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeH5iGaslfTl-fnauo2Gzr77Bd7cpNkjbzcF3tyk2SNvN2cNJowu9oo4PucaCyKnIE8G_dOxKchhdSh2XPTCEZfi&_nc_ohc=v6JqHkWmlnIAX9O8bXy&_nc_ht=scontent.fhan14-4.fna&oh=00_AfB2W_bREjFywbjRaeoj8DebLC9RrztknLW5vjXaGepurw&oe=656AD88A"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/368268780_617211080583001_6343197235728234933_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeH5iGaslfTl-fnauo2Gzr77Bd7cpNkjbzcF3tyk2SNvN2cNJowu9oo4PucaCyKnIE8G_dOxKchhdSh2XPTCEZfi&_nc_ohc=v6JqHkWmlnIAX9O8bXy&_nc_ht=scontent.fhan14-4.fna&oh=00_AfB2W_bREjFywbjRaeoj8DebLC9RrztknLW5vjXaGepurw&oe=656AD88A"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/405277704_667893678848074_4168042183294063711_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGD1vt7RnRycZeDuzfMiGT_ltWnloGfpV2W1aeWgZ-lXXKfFlK0Au_K-mnoH8uCuj2GJY8V4qGEUph0r1yvddCr&_nc_ohc=5sUTLUKW9HUAX_tuteT&_nc_ht=scontent.fhan14-2.fna&oh=00_AfDux-IcxLUr0RAp_dVPKmXedQ1lFTEusBqdvTaODBz1_Q&oe=65697862"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/405277704_667893678848074_4168042183294063711_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGD1vt7RnRycZeDuzfMiGT_ltWnloGfpV2W1aeWgZ-lXXKfFlK0Au_K-mnoH8uCuj2GJY8V4qGEUph0r1yvddCr&_nc_ohc=5sUTLUKW9HUAX_tuteT&_nc_ht=scontent.fhan14-2.fna&oh=00_AfDux-IcxLUr0RAp_dVPKmXedQ1lFTEusBqdvTaODBz1_Q&oe=65697862"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/404950690_667420268895415_7284073391731021569_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEvKNsSbP1cw0xSU6Z9-c31rowACN6Ph9aujAAI3o-H1ulcd7KBhv9SHV4BOV6WNfXLfvomFbF0P4QEW0FPeFgo&_nc_ohc=skGhmzKSHj4AX8IEXgK&_nc_ht=scontent.fhan14-2.fna&oh=00_AfASC128w1L1ug5HRJyWhoVugv1FqU3LN7zDraaZ9OtgiQ&oe=656B1587"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/404950690_667420268895415_7284073391731021569_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEvKNsSbP1cw0xSU6Z9-c31rowACN6Ph9aujAAI3o-H1ulcd7KBhv9SHV4BOV6WNfXLfvomFbF0P4QEW0FPeFgo&_nc_ohc=skGhmzKSHj4AX8IEXgK&_nc_ht=scontent.fhan14-2.fna&oh=00_AfASC128w1L1ug5HRJyWhoVugv1FqU3LN7zDraaZ9OtgiQ&oe=656B1587"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/404950672_666340155670093_2869218596214896383_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEMvwslAQEdciSY1ggxRDlCrJq36jbZ6G2smrfqNtnobUyq5DUjLHR3FILKe5n8jKjlDzDQohaw1PPowH5F4Bu_&_nc_ohc=Clr2aoG_0P8AX9gUjKT&_nc_ht=scontent.fhan14-2.fna&oh=00_AfC1uJgB9C2asx-Bfjzd5WeP2RnfKrAGp6QYt6oxfGnsVw&oe=656B0673"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/404950672_666340155670093_2869218596214896383_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEMvwslAQEdciSY1ggxRDlCrJq36jbZ6G2smrfqNtnobUyq5DUjLHR3FILKe5n8jKjlDzDQohaw1PPowH5F4Bu_&_nc_ohc=Clr2aoG_0P8AX9gUjKT&_nc_ht=scontent.fhan14-2.fna&oh=00_AfC1uJgB9C2asx-Bfjzd5WeP2RnfKrAGp6QYt6oxfGnsVw&oe=656B0673"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/402038817_665383005765808_377280083928567942_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGk-mdcaQjHBUQ2L0Ht5g7RybRroBuwhK7JtGugG7CEriuiteIWKOpbR5ePqQebzEjTWJWQwgpk4n2_Tt9VT2Mn&_nc_ohc=FhPT_1qvztEAX-7dnIR&_nc_ht=scontent.fhan14-3.fna&oh=00_AfBLXZc4WuzHXMj577AC3P0GtfTr2wgu22m11LO0J3Ih1A&oe=65695B75"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/402038817_665383005765808_377280083928567942_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGk-mdcaQjHBUQ2L0Ht5g7RybRroBuwhK7JtGugG7CEriuiteIWKOpbR5ePqQebzEjTWJWQwgpk4n2_Tt9VT2Mn&_nc_ohc=FhPT_1qvztEAX-7dnIR&_nc_ht=scontent.fhan14-3.fna&oh=00_AfBLXZc4WuzHXMj577AC3P0GtfTr2wgu22m11LO0J3Ih1A&oe=65695B75"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/402021665_664443695859739_8609935187388795470_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHAIN2GNqqVyEiKQSzo_oFsc3MAYHm91-1zcwBgeb3X7dOSatITG1-QWNPaizyQ9CVzhbyh7Xsvcy4D_0z-O137&_nc_ohc=H1Rm6is4_q4AX8bGQmg&_nc_ht=scontent.fhan14-3.fna&oh=00_AfAFh6ZSK_Ys-f5LECvq7nk0VCrSxCEthj9emrEuZkM4Jg&oe=656B19AD"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/402021665_664443695859739_8609935187388795470_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHAIN2GNqqVyEiKQSzo_oFsc3MAYHm91-1zcwBgeb3X7dOSatITG1-QWNPaizyQ9CVzhbyh7Xsvcy4D_0z-O137&_nc_ohc=H1Rm6is4_q4AX8bGQmg&_nc_ht=scontent.fhan14-3.fna&oh=00_AfAFh6ZSK_Ys-f5LECvq7nk0VCrSxCEthj9emrEuZkM4Jg&oe=656B19AD"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/401036734_661991892771586_5337118796017751919_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF1UUr_-cMuoR2860JvSHMfsZFOB9GFu8GxkU4H0YW7wecczRxV38QZpVX41j0A7X2IMrGlGchpPyHccttL42I3&_nc_ohc=zcGtSMGyJxUAX_rEGTR&_nc_ht=scontent.fhan14-1.fna&oh=00_AfB9SOzqqVkkRc3Uu_wj1dzCJLZN2QMEgFnC0QqdwwwcxQ&oe=656AC3C0"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/401036734_661991892771586_5337118796017751919_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF1UUr_-cMuoR2860JvSHMfsZFOB9GFu8GxkU4H0YW7wecczRxV38QZpVX41j0A7X2IMrGlGchpPyHccttL42I3&_nc_ohc=zcGtSMGyJxUAX_rEGTR&_nc_ht=scontent.fhan14-1.fna&oh=00_AfB9SOzqqVkkRc3Uu_wj1dzCJLZN2QMEgFnC0QqdwwwcxQ&oe=656AC3C0"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/400424888_661717879465654_893166437653688075_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFEu4YAu3bme8DSf-iR10Ljn-BY5-u8doaf4Fjn67x2hvqcZwZZcNw2dsX_GL5XfjpEjc0WXb-eLYbmwl3luF_H&_nc_ohc=eX0hO3rO-fkAX8CFIAL&_nc_ht=scontent.fhan14-3.fna&oh=00_AfDtPYj6bkv6k4pPnxyh45LbFpsBePHfMDFeKcGP9vdnLw&oe=656969FD"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/400424888_661717879465654_893166437653688075_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFEu4YAu3bme8DSf-iR10Ljn-BY5-u8doaf4Fjn67x2hvqcZwZZcNw2dsX_GL5XfjpEjc0WXb-eLYbmwl3luF_H&_nc_ohc=eX0hO3rO-fkAX8CFIAL&_nc_ht=scontent.fhan14-3.fna&oh=00_AfDtPYj6bkv6k4pPnxyh45LbFpsBePHfMDFeKcGP9vdnLw&oe=656969FD"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/369724807_661717866132322_2168440605715437312_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHBDllzms0Cf1dRpFjC-BCh-lCYGzFsOon6UJgbMWw6iQB0S-PSNxGJQCfMZkHXqOvexy7HooGyjmSbjXJ4NBXu&_nc_ohc=IKyYF9heOssAX-swNcb&_nc_ht=scontent.fhan14-2.fna&oh=00_AfDQknlZKVJvOQaWloe9UbAv6jeUb0DuOck51iS5Kag52g&oe=656B151B"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/369724807_661717866132322_2168440605715437312_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHBDllzms0Cf1dRpFjC-BCh-lCYGzFsOon6UJgbMWw6iQB0S-PSNxGJQCfMZkHXqOvexy7HooGyjmSbjXJ4NBXu&_nc_ohc=IKyYF9heOssAX-swNcb&_nc_ht=scontent.fhan14-2.fna&oh=00_AfDQknlZKVJvOQaWloe9UbAv6jeUb0DuOck51iS5Kag52g&oe=656B151B"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/369724807_661717866132322_2168440605715437312_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHBDllzms0Cf1dRpFjC-BCh-lCYGzFsOon6UJgbMWw6iQB0S-PSNxGJQCfMZkHXqOvexy7HooGyjmSbjXJ4NBXu&_nc_ohc=IKyYF9heOssAX-swNcb&_nc_ht=scontent.fhan14-2.fna&oh=00_AfDQknlZKVJvOQaWloe9UbAv6jeUb0DuOck51iS5Kag52g&oe=656B151B"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/369724807_661717866132322_2168440605715437312_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHBDllzms0Cf1dRpFjC-BCh-lCYGzFsOon6UJgbMWw6iQB0S-PSNxGJQCfMZkHXqOvexy7HooGyjmSbjXJ4NBXu&_nc_ohc=IKyYF9heOssAX-swNcb&_nc_ht=scontent.fhan14-2.fna&oh=00_AfDQknlZKVJvOQaWloe9UbAv6jeUb0DuOck51iS5Kag52g&oe=656B151B"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/398212052_657369459900496_8120161634525092930_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEoWvLDuZsjsST7kKYIL1OLL94Nt_Mtqe8v3g238y2p722tnO8j-rw4qRqRkTYGNWe2Bi0NhqItGD2vlST-HWkc&_nc_ohc=6qPU9ISMUyIAX_mYhjC&_nc_ht=scontent.fhan14-2.fna&oh=00_AfBJQHs7ckJxV9q_iyJrepFjnBnNQmFObOAt5X_ar4gefQ&oe=656B2308"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/398212052_657369459900496_8120161634525092930_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEoWvLDuZsjsST7kKYIL1OLL94Nt_Mtqe8v3g238y2p722tnO8j-rw4qRqRkTYGNWe2Bi0NhqItGD2vlST-HWkc&_nc_ohc=6qPU9ISMUyIAX_mYhjC&_nc_ht=scontent.fhan14-2.fna&oh=00_AfBJQHs7ckJxV9q_iyJrepFjnBnNQmFObOAt5X_ar4gefQ&oe=656B2308"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/397422035_654410873529688_8892874443620106538_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF-RZqiLXI_UpLcfdE5IqzVdrklRerk3mF2uSVF6uTeYd9NoGwsqqeDM_VUEF9SZqBw7IDg-imW231PnJAVX7IZ&_nc_ohc=SVp45t8jrPwAX8Tt4Zy&_nc_ht=scontent.fhan14-1.fna&oh=00_AfA1oWj11e7yHj0Mcf4zrwp_7NBkaqDMeEZpp64-6LsdAw&oe=656ABCC2"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/397422035_654410873529688_8892874443620106538_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF-RZqiLXI_UpLcfdE5IqzVdrklRerk3mF2uSVF6uTeYd9NoGwsqqeDM_VUEF9SZqBw7IDg-imW231PnJAVX7IZ&_nc_ohc=SVp45t8jrPwAX8Tt4Zy&_nc_ht=scontent.fhan14-1.fna&oh=00_AfA1oWj11e7yHj0Mcf4zrwp_7NBkaqDMeEZpp64-6LsdAw&oe=656ABCC2"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/395464608_653145740322868_3322948066566415624_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEvALqUcGjz2juNO5rV6PUk6dKI4kihcCzp0ojiSKFwLCJQFoGGErXV9YrDFokssy5MAviUZBSdR61x4C6cv_yx&_nc_ohc=QG28FiHbJGcAX85bdjC&_nc_ht=scontent.fhan14-4.fna&oh=00_AfDSVzwrjNuT2Mb-trggBL-sNTzJ0XnmGMa-GsMDBR_tPg&oe=656A0C09"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/395464608_653145740322868_3322948066566415624_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEvALqUcGjz2juNO5rV6PUk6dKI4kihcCzp0ojiSKFwLCJQFoGGErXV9YrDFokssy5MAviUZBSdR61x4C6cv_yx&_nc_ohc=QG28FiHbJGcAX85bdjC&_nc_ht=scontent.fhan14-4.fna&oh=00_AfDSVzwrjNuT2Mb-trggBL-sNTzJ0XnmGMa-GsMDBR_tPg&oe=656A0C09"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/395458826_652070920430350_6549481012439119803_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHVj9MOk9xF9Ss-U7NdNL84s5dvev5Qy7qzl296_lDLusWer3J6sSxWyVH3OwDke03h8qtjXoGC98Cs9GAtNkEX&_nc_ohc=JlpkGZrx1fsAX9nVy0X&_nc_ht=scontent.fhan14-2.fna&oh=00_AfDPE-0Ni4Wx0NMTyqGCTjJguSnc1fyE7VGQ673uR6i_Gg&oe=656A0E1D"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/395458826_652070920430350_6549481012439119803_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHVj9MOk9xF9Ss-U7NdNL84s5dvev5Qy7qzl296_lDLusWer3J6sSxWyVH3OwDke03h8qtjXoGC98Cs9GAtNkEX&_nc_ohc=JlpkGZrx1fsAX9nVy0X&_nc_ht=scontent.fhan14-2.fna&oh=00_AfDPE-0Ni4Wx0NMTyqGCTjJguSnc1fyE7VGQ673uR6i_Gg&oe=656A0E1D"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/391663417_648247677479341_937631450961726052_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHxD_CDW39fhtDgUBpIzIO964yfQre2CLzrjJ9Ct7YIvA73hjtdRuJu8UHRtuEe2N6E36y6f29waKlCcyfqSjZY&_nc_ohc=2-HBTGE2WooAX_1xotY&_nc_ht=scontent.fhan14-4.fna&oh=00_AfCn66s63i71FTgkZLjMuDCvFM87zn-PgNvacrZYtYvM1Q&oe=656A6191"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/391663417_648247677479341_937631450961726052_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHxD_CDW39fhtDgUBpIzIO964yfQre2CLzrjJ9Ct7YIvA73hjtdRuJu8UHRtuEe2N6E36y6f29waKlCcyfqSjZY&_nc_ohc=2-HBTGE2WooAX_1xotY&_nc_ht=scontent.fhan14-4.fna&oh=00_AfCn66s63i71FTgkZLjMuDCvFM87zn-PgNvacrZYtYvM1Q&oe=656A6191"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/393018033_647021100935332_6971614135902958114_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFVusbfhBGXV0ybiiqD8YdVlfclGtJJckiV9yUa0klySCwldxm0k1leZwq7m8XeZ5Wok3-o6R5b8snw_SBHRs-s&_nc_ohc=lr-Ga0idZa8AX-3I164&_nc_ht=scontent.fhan14-2.fna&oh=00_AfCw16NPO7hzv9Dum8XbQ_lmLK1n3Bfgf01h7fLfig-QxA&oe=656AB665"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/393018033_647021100935332_6971614135902958114_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFVusbfhBGXV0ybiiqD8YdVlfclGtJJckiV9yUa0klySCwldxm0k1leZwq7m8XeZ5Wok3-o6R5b8snw_SBHRs-s&_nc_ohc=lr-Ga0idZa8AX-3I164&_nc_ht=scontent.fhan14-2.fna&oh=00_AfCw16NPO7hzv9Dum8XbQ_lmLK1n3Bfgf01h7fLfig-QxA&oe=656AB665"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/387808645_642902854680490_8211002231050197119_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGt6bM7ydJbyDK7ZcnfchtLlKaY1OqIzs6UppjU6ojOzpcsrDBMirrvpd-9BD1sHJG0wp-K1n9eV7B1bwjSx9_7&_nc_ohc=am1_by2UR9AAX8n48yb&_nc_ht=scontent.fhan14-1.fna&oh=00_AfCcLt6YNNT5Op0TlTuLGNyEQolyB9ag6IZRFvrd1dKkWg&oe=65697A9F"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/387808645_642902854680490_8211002231050197119_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGt6bM7ydJbyDK7ZcnfchtLlKaY1OqIzs6UppjU6ojOzpcsrDBMirrvpd-9BD1sHJG0wp-K1n9eV7B1bwjSx9_7&_nc_ohc=am1_by2UR9AAX8n48yb&_nc_ht=scontent.fhan14-1.fna&oh=00_AfCcLt6YNNT5Op0TlTuLGNyEQolyB9ag6IZRFvrd1dKkWg&oe=65697A9F"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/386475032_642858954684880_7371729786975457698_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFhLFTChd1bFokoEAi4JGB5XbbnRcC2tm1dtudFwLa2bYS7mMgw5D-BfFefhzb-wWgPbu4012jvf7_FifmUmrnC&_nc_ohc=sBaAhabaFNYAX8VRkXC&_nc_ht=scontent.fhan14-4.fna&oh=00_AfAD5ZJpuJ1qcC1QWvW0y7934y5dXPp2hYgpr8kpkYvUgA&oe=656ACFFC"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/386475032_642858954684880_7371729786975457698_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFhLFTChd1bFokoEAi4JGB5XbbnRcC2tm1dtudFwLa2bYS7mMgw5D-BfFefhzb-wWgPbu4012jvf7_FifmUmrnC&_nc_ohc=sBaAhabaFNYAX8VRkXC&_nc_ht=scontent.fhan14-4.fna&oh=00_AfAD5ZJpuJ1qcC1QWvW0y7934y5dXPp2hYgpr8kpkYvUgA&oe=656ACFFC"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/387798055_642225284748247_1767003954275113115_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFngj5OQrbAVFOyibSnZomBA2cMLAyH_f4DZwwsDIf9_hkOqyR8GU0oCUEL1q3t6DU8Dz5X083lMZrVqZtY3NZU&_nc_ohc=4_XXpzl5ilQAX-OX_VE&_nc_ht=scontent.fhan14-4.fna&oh=00_AfDZIJQdpo1DuIuaF-ewbk051hHX1UyWeRz7gWbpYl72Bw&oe=656AEE5B"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-4.fna.fbcdn.net/v/t39.30808-6/387798055_642225284748247_1767003954275113115_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFngj5OQrbAVFOyibSnZomBA2cMLAyH_f4DZwwsDIf9_hkOqyR8GU0oCUEL1q3t6DU8Dz5X083lMZrVqZtY3NZU&_nc_ohc=4_XXpzl5ilQAX-OX_VE&_nc_ht=scontent.fhan14-4.fna&oh=00_AfDZIJQdpo1DuIuaF-ewbk051hHX1UyWeRz7gWbpYl72Bw&oe=656AEE5B"
                                    alt=""/>
                            </a><a href="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/383340529_640150714955704_4667041462302790339_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFplnauX6Pk6w7ngE3PHZ2CpUUrS80g27-lRStLzSDbv4R1KDELXxKYYT8j77YxEvksQWfZ35_3oKFhtknn86MP&_nc_ohc=vCOfMltP0U4AX9BDZOb&_nc_ht=scontent.fhan14-1.fna&oh=00_AfB6N5M15QvDt8RfYbKsOJtTz28wx-vsByG3EdMxgqpiSQ&oe=656A31FF"
                               {{--data-lg-size="1600-2400"--}}
                               target="_blank"
                               class="col-span-1 rounded-lg image"
                            >
                                <img
                                    src="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/383340529_640150714955704_4667041462302790339_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFplnauX6Pk6w7ngE3PHZ2CpUUrS80g27-lRStLzSDbv4R1KDELXxKYYT8j77YxEvksQWfZ35_3oKFhtknn86MP&_nc_ohc=vCOfMltP0U4AX9BDZOb&_nc_ht=scontent.fhan14-1.fna&oh=00_AfB6N5M15QvDt8RfYbKsOJtTz28wx-vsByG3EdMxgqpiSQ&oe=656A31FF"
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
