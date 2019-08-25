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

    .news_title_img {
        background-image: url("img/hBYYucbmynglxhe.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 35% 20%;
        height: 35vh;
    }

    .news_panel {
        background-color: #1C162A;
        border: 1.5px solid #6B4BFF;
    }

    .news_panel p {
        font-size: 1em;
        color: rgb(255, 255, 255);
    }

    .news_panel .title {
        font-size: 1.2rem;
    }

    .news_panel img {
        width: 100%;
    }

    .news_panel .more {
        color: #A8FF8A;
    }

    .text_area .more {
        letter-spacing: 0.2rem;
    }

    @media only screen and (max-width:768px) {
        .news_panel {
            background-color: #1C162A;
            border: 0;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: space-between;
        }
    }
</style>
<!-- 從這裡開始 -->
<div class="container-fluid overflow-hidden p-0">
    <div class="news_title_img w-100 d-none d-md-block mb-4"></div>
    <div class="GA_phone row d-block d-md-none mt-5 pt-3">
        <div class="GA_title_mobile col-12">
            <p class="middle_text py-2 pl-2 ">資訊新聞</p>
        </div>
        <div class="news_panel mt-3 mx-0 px-4 pt-4 d-md-none row col-12">
            <p class="title col-12">【資訊】《英雄聯盟》六都電競爭霸戰ahq Fighter直落三獲得新北冠軍</p>
            <p class="align-self-end col-12">2019/07/07</p>
            <div class="d-flex justify-content-center col-12">
                <img class="img-fluid" src="img/News/news2.jpg" alt="">
            </div>
            <div class="text_area_down d-flex justify-content-between pt-3 col-12">
                <p class="mb-5">《英雄聯盟》業餘賽事「六都電競爭霸戰」新北賽區決賽上周末於新北市政府 603 大禮堂正式登場，由 ECS 夏季賽排名第一的 ahq Fighter 與實力素人「惡龍咆哮」展開 Bo5 最終對決，共同爭奪新北代表隊以及二十萬的決賽獎金。<br><br>在新北賽區決賽中，ahq Fighter 第一局便展現實力在 19 分鐘成功推倒主堡贏下首勝，第二局雙方前期戰況拉扯，但 AF 中期靠著一波成功開戰團滅惡龍咆哮後，掌握了比賽節奏再取一勝。關鍵賽點第三局，AF 將攻擊重心放在下路，多次由打野古拉格斯帶領成功塔殺惡龍咆哮下路雙人組，最終 AF 大獲全勝，以直落 3 戰績擊敗惡龍咆哮，獲得新北冠軍代表資格與獎金 20 萬。六都電競爭霸戰將持續進行，接下來臺中賽區的賽事即將登場，一起期待更多精彩賽事。
                </p>
            </div>
        </div>
    </div>
    <div class="container my-md-2 py-md-2">
        <div class="GA_title_line d-none d-md-block"></div>
        <div class="GA_title px-5 d-none d-md-block">
            <p class="py-2">資訊新聞</p>
        </div>
        <div class="row p-3">
            <div class="news_panel mt-3 d-none d-md-block col-12">
                <div class="text_area d-flex justify-content-between px-5 pt-4">
                    <p class="title">【資訊】《英雄聯盟》六都電競爭霸戰ahq Fighter直落三獲得新北冠軍</p>
                    <p class="m-0">2019/07/07</p>
                </div>
                <div class="d-flex justify-content-center px-5">
                    <img class="fit-img" src="img/News/news2.jpg" alt="">
                </div>
                <div class="text_area_down d-flex justify-content-between pt-3 px-5">
                    <p class="mb-5">《英雄聯盟》業餘賽事「六都電競爭霸戰」新北賽區決賽上周末於新北市政府 603 大禮堂正式登場，由 ECS 夏季賽排名第一的 ahq Fighter 與實力素人「惡龍咆哮」展開 Bo5 最終對決，共同爭奪新北代表隊以及二十萬的決賽獎金。<br><br>在新北賽區決賽中，ahq Fighter 第一局便展現實力在 19 分鐘成功推倒主堡贏下首勝，第二局雙方前期戰況拉扯，但 AF 中期靠著一波成功開戰團滅惡龍咆哮後，掌握了比賽節奏再取一勝。關鍵賽點第三局，AF 將攻擊重心放在下路，多次由打野古拉格斯帶領成功塔殺惡龍咆哮下路雙人組，最終 AF 大獲全勝，以直落 3 戰績擊敗惡龍咆哮，獲得新北冠軍代表資格與獎金 20 萬。六都電競爭霸戰將持續進行，接下來臺中賽區的賽事即將登場，一起期待更多精彩賽事。
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<?php include __DIR__ . '/__html_end.php' ?>