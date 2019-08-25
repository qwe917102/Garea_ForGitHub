<?php require __DIR__ . '/__db_connect.php' ?>

<?php include __DIR__ . '/main_page_header.php' ?>
<style>
    /* 標題桌機 */
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

    /* Banner */
    .news_title_img {
        background-image: url("img/News/BG.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 35% 20%;
        height: 35vh;
    }

    .news_panel {
        background-color: #594E8D;
        border: 1.5px solid #6B4BFF;
    }

    .picture_img {
        object-fit: cover;
        width: 100%;
    }

    .news_panel p {
        color: #fff
    }

    .text_area .more {
        color: #A8FF8A;
        flex-wrap: wrap-reverse;
        letter-spacing: 0.2rem;
    }

    .news_link:hover,
    .news_link p:hover {
        color: #FBCC4D;
        text-decoration: none;
    }
</style>
<!-- 從這裡開始 -->
<div class="container-fluid overflow-hidden p-0">
    <div class="news_title_img w-100 d-none d-md-block mb-4"></div>
    <div class="GA_phone row d-block d-md-none mt-5 pt-3">
        <div class="GA_title_mobile col-12">
            <p class="middle_text py-2 pl-2 ">資訊新聞</p>
        </div>
    </div>
    <div class="container-fluid py-2  d-block d-md-none">
        <div class="row p-3">
            <div class="news_panel d-flex mt-4 col-12">
                <div class="row">
                    <div class="picture p-3 col-12">
                        <img class="picture_img" src="img/News/news1.jpg" alt="">
                    </div>
                    <div class="text_area p-3 col-12">
                        <p class="middle_text p-0 mb-1 col-12">【資訊】《Free Fire》世界盃台灣選拔賽開放報名，亞洲資格賽總獎金30萬元</p>
                        <p class="text-right p-0 mb-1 col-12">2019/07/08</p>
                        <p class="p-0 mb-1 col-12">Garena 旗下吃雞手遊《Free Fire - 我要活下去》所舉辦的世界盃亞洲資格賽，台灣賽區選拔即日起正式開放報名。報名參賽玩家將與全台各地吃雞好手競爭，爭奪全台最強的封號及第一名
                            50,000 元獎金與獎勵。</p>
                        <div class="text-center">
                            <a class="news_link" href="News_inner_page.php">
                                <p class="more mb-1 ">查看更多</p>
                            </a>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news_panel d-flex mt-4 col-12">
                <div class="row">
                    <div class="picture p-3 col-12">
                        <img class="picture_img" src="img/News/news2.jpg" alt="">
                    </div>
                    <div class="text_area p-3 col-12">
                        <p class="middle_text p-0 mb-1 col-12">【資訊】《英雄聯盟》六都電競爭霸戰ahq Fighter直落三獲得新北冠軍</p>
                        <p class="text-right p-0 mb-1 col-12">2019/07/07</p>
                        <p class="p-0 mb-1 col-12">《英雄聯盟》業餘賽事「六都電競爭霸戰」新北賽區決賽上周末於新北市政府 603 大禮堂正式登場，由 ECS 夏季賽排名第一的 ahq Fighter 與實力素人「惡龍咆哮」展開 Bo5
                            最終對決，共同爭奪新北代表隊以及二十萬的決賽獎金。</p>
                        <div class="text-center">
                            <a class="news_link" href="News_inner_page2.php">
                                <p class="more mb-1 ">查看更多</p>
                            </a>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news_panel d-flex mt-4 col-12">
                <div class="row">
                    <div class="picture p-3 col-12">
                        <img class="picture_img" src="img/News/news3.jpg" alt="">
                    </div>
                    <div class="text_area p-3 col-12">
                        <p class="middle_text p-0 mb-1 col-12">【資訊】《絕地求生》MET亞洲系列賽今日開戰，NovaMS與ahq誓言為台港澳爭光</p>
                        <p class="text-right p-0 mb-1 col-12">2019/07/07</p>
                        <p class="p-0 mb-1 col-12">《絕地求生 PUBG》經典賽事亞洲系列賽（PUBG Classic Series：MET Asia Series，簡稱 MET）於今（26）日在泰國曼谷 BITEC
                            中心正式開賽，台港澳賽區代表 NovaMS 與 ahq eSports Club，將與五大賽區一共 16 支戰隊齊聚一堂，爭取亞洲最強之稱號以及高達 30 萬美金的賽事總獎金。</p>
                        <div class="text-center">
                            <a class="news_link" href="News_inner_page.php">
                                <p class="more mb-1 ">查看更多</p>
                            </a>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-md-2 py-md-2">
        <div class="GA_title_line d-none d-md-block"></div>
        <div class="GA_title px-5 d-none d-md-block">
            <p class="py-2">資訊新聞</p>
        </div>

        <div class="row p-3 d-none d-md-block">
            <div class="news_panel d-flex mt-4 col-12">
                <div class="row">
                    <div class="picture p-3 col-3">
                        <img class="picture_img" src="img/News/news1.jpg" alt="">
                    </div>
                    <div class="text_area p-3 col-9">
                        <p class="middle_text">【資訊】《Free Fire》世界盃台灣選拔賽開放報名，亞洲資格賽總獎金30萬元</p>
                        <p>Garena 旗下吃雞手遊《Free Fire - 我要活下去》所舉辦的世界盃亞洲資格賽，台灣賽區選拔即日起正式開放報名。報名參賽玩家將與全台各地吃雞好手競爭，爭奪全台最強的封號及第一名
                            50,000 元獎金與獎勵。
                        </p>
                        <div class="d-flex justify-content-between">
                            <p>2019/07/08</p>
                            <a class="news_link" href="News_inner_page.php">
                                <p class="more">查看更多</p>
                            </a>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news_panel d-flex mt-4 col-12">
                <div class="row">
                    <div class="picture p-3 col-3">
                        <img class="picture_img" src="img/News/news2.jpg" alt="">
                    </div>
                    <div class="text_area p-3 col-9">
                        <p class="middle_text">【資訊】《英雄聯盟》六都電競爭霸戰ahq Fighter直落三獲得新北冠軍</p>
                        <p>《英雄聯盟》業餘賽事「六都電競爭霸戰」新北賽區決賽上周末於新北市政府 603 大禮堂正式登場，由 ECS 夏季賽排名第一的 ahq Fighter 與實力素人「惡龍咆哮」展開 Bo5
                            最終對決，共同爭奪新北代表隊以及二十萬的決賽獎金。
                        </p>
                        <div class="d-flex justify-content-between">
                            <p>2019/07/07</p>
                            <a class="news_link" href="News_inner_page2.php">
                                <p class="more">查看更多</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news_panel d-flex mt-4 col-12">
                <div class="row">
                    <div class="picture p-3 col-3">
                        <img class="picture_img" src="img/News/news3.jpg" alt="">
                    </div>
                    <div class="text_area p-3 col-9">
                        <p class="middle_text">【資訊】《絕地求生》MET亞洲系列賽今日開戰，NovaMS與ahq誓言為台港澳爭光</p>
                        <p>《絕地求生 PUBG》經典賽事亞洲系列賽（PUBG Classic Series：MET Asia Series，簡稱 MET）於今（26）日在泰國曼谷 BITEC
                            中心正式開賽，台港澳賽區代表 NovaMS 與 ahq eSports Club，將與五大賽區一共 16 支戰隊齊聚一堂，爭取亞洲最強之稱號以及高達 30 萬美金的賽事總獎金。
                        </p>
                        <div class="d-flex justify-content-between">
                            <p>2019/07/07</p>
                            <a class="news_link" href="News_inner_page2.php">
                                <p class="more">查看更多</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<?php include __DIR__ . '/__html_end.php' ?>