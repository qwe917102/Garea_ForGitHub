<?php require __DIR__ . '/__db_connect.php' ?>

<?php include __DIR__ . '/main_page_header.php' ?>
<style>
    .about_banner {
        background-image: url("img/JbnIkSbmynglxhr.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 100% 40%;
        height: 30vh;
    }

    .GA_title {
        background: #7165A7;
        width: 200px;
        height: 40px;
        position: relative;
        clip-path: polygon(50% 25%, 100% 25%, 100% 43%, 87% 100%, 0 100%, 0% 25%);
        margin: 0;
    }

    .GA_title_line {
        width: 2000px;
        height: 8px;
        margin: 0 0 -17px 0;
        background: #7165A7;
    }

    .GA_title p {
        position: absolute;
        color: #FBCC4D;
        letter-spacing: 0.5rem;
        font-size: 1.2rem;
        letter-spacing: 0.5rem;
        vertical-align: middle;
    }

    .about_text {
        font-size: 2em;
        font-weight: 400;
        text-align: center;
        color: #FBCC4D;
        letter-spacing: 5px;
    }

    .about_logo {
        width: auto;
        height: 250px;
        max-width: 100%;
        max-height: auto;
        margin: 5% auto;
    }

    .about_inner_text {
        color: #EFEFEF;
        font-size: 1.2em;
        letter-spacing: 5px;
    }

    .text_box {
        /* background-color: #594E8D; */
        padding: 2% 5%;
    }

    .about_area {
        background-color: #0A0A0A;
    }

    .GA {
        background-image: url("img/space-blur.jpg");
    }

    .parallax2 {
        /*視差*/
        background-image: url("./img/space-blur.jpg");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* 標題手機 */
    .GA_phone {
        margin: 0;
    }

    .GA_title_mobile {
        width: 100%;
        height: 50px;
        background: #7165A7;
        color: #FFFFFF;
        letter-spacing: 0.5rem;
    }

    .GA_title_mobile p {
        color: #FBCC4D;
    }

    .about_M_text {
        font-size: 1em;
        text-align: center;
        color: #FBCC4D;
        letter-spacing: 3px;
    }

    .about_M_logo {
        width: auto;
        height: 150px;
        max-width: 100%;
        max-height: auto;
        margin: 5% auto;
    }

    .about_M_inner_text {
        color: #EFEFEF;
        font-size: 1em;
        letter-spacing: 5px;
    }

    .about_M_area {
        background-color: #0A0A0A;
    }

    .about_M_area p {
        padding: 0;
        margin: 0;
    }
</style>

<div class="container-fluid px-0 pt-3 overflow-hidden  parallax2">

    <div class="w-100 about_banner position-relative"></div>
    <div class="GA_phone row d-block d-md-none mt-0">
        <div class="GA_title_mobile col-12">
            <p class="middle_text py-2 pl-2 ">關於我們</p>
        </div>
    </div>

    <div class="parallax2 row text-center justify-content-center col-12 m-0 pt-4 pb-5 d-flex d-md-none">
        <div class="col-7">
            <img class="about_M_logo text-center" src="img/GA_mobileLogo.svg">
        </div>
        <div class="col-12">
            <p class="about_M_text">
                [ 為電競而生，以勝利為前提 ]
            </p>
            <p class="about_M_text">＂Gaming Area＂永遠為玩家提供最好的
            </p>
        </div>
    </div>

    <div class="container-fluid py-4 d-block d-md-none about_M_area">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="4000">
                    <div class="col-12 text-left text_box d-block w-100">
                        <p class="about_M_inner_text ">
                            Gaming
                            Area提供玩家們良好優質的周邊設備，遊玩時有更好的遊戲體驗。在電競空間，你絕不會錯過最新的電子競技資訊，你可以看到最即時的賽事直播。
                            <br> <br>
                            不定期推出優惠活動，提供產品選擇的協助，找到適合自己的產品。
                            <br> <br>
                        </p>
                    </div>
                </div>
                <div class="carousel-item" data-interval="4000">
                    <div class="col-12 text-left text_box d-block w-100">
                        <p class="about_M_inner_text ">
                            「英雄聯盟戰隊AHQ已經在電競業界締造出令人印象深刻的重大成就。
                            <br> <br>
                            Gaming Area在電競產業享有盛譽，透過這種的夥伴關係，我們的電競選手在最高級別的訓練和實戰中，都能得到GA最新和最強的產品奧援，為成功奠定長遠基礎。」<br><br>
                        </p>

                    </div>
                </div>
                <div class="carousel-item" data-interval="4000">
                    <div class="col-12 text-left text_box d-block w-100">
                        <p class="about_M_inner_text ">
                            Gaming Area與合作夥伴的電競硬體將成為電競選手們未來在世界級電競賽事中獲勝的利器，幫助各戰隊進一步達成電競專業化的目標。
                            <br> <br>
                            Gaming Area精選且多樣化的產品，讓玩家們能在網站上直接購買。
                            <br> <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-none d-md-block pb-5">
        <div class="container my-md-2 py-md-4">
            <div class="GA_title_line d-none d-md-block"></div>
            <div class="GA_title px-5 d-none d-md-block">
                <p class="py-2">關於我們</p>
            </div>
            <div class="row text-center justify-content-center col-12 p-0 m-0">
                <div class="col-7 ">
                    <img class="about_logo text-center" src="img/GA_mobileLogo.svg">
                </div>
                <div class="col-12">
                    <p class="about_text">
                        [ 為電競而生，以勝利為前提 ]
                    </p>
                    <p class="about_text">＂Gaming Area＂永遠為玩家提供最好的
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="about_area  d-none d-md-block">
        <div class="container my-md-0 py-md-4">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="7000">
                        <div class="col-12 text-left text_box d-block w-100">
                            <p class="about_inner_text">
                                Gaming
                                Area提供玩家們良好優質的周邊設備，遊玩時有更好的遊戲體驗。在電競空間，你絕不會錯過最新的電子競技資訊，你可以看到最即時的賽事直播。不定期推出優惠活動，提供產品選擇的協助，找到適合自己的產品。
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="7000">
                        <div class="col-12 text-left text_box d-block w-100">
                            <p class="about_inner_text">
                                「英雄聯盟戰隊AHQ已經在電競業界締造出令人印象深刻的重大成就。Gaming
                                Area在電競產業享有盛譽，透過這種的夥伴關係，我們的電競選手在最高級別的訓練和實戰中，都能得到GA找到最新和最強的產品奧援，為成功奠定長遠基礎。」
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="7000">
                        <div class="col-12 text-left text_box d-block w-100">
                            <p class="about_inner_text">
                                Gaming Area與合作夥伴的電競硬體將成為電競選手們未來在世界級電競賽事中獲勝的利器，幫助各戰隊進一步達成電競專業化的目標。Gaming
                                Area精選且多樣化的產品，讓玩家們能在網站上直接購買。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>