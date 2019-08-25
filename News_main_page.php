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
            <p class="middle_text py-2 pl-2 ">新聞主頁</p>
        </div>
    </div>
    <div class="container-fluid py-2  d-block d-md-none">
        <div class="row p-3">
            <div class="news_panel d-flex mt-4 col-12">
                <div class="row">
                    <p class="middle_text px-0 pt-3 mb-1 col-12">【資訊新聞】</p>
                    <div class="picture p-3 col-12">
                        <img class="picture_img" src="img/News/main_inter.jpg" alt="">
                    </div>
                    <div class="text_area p-3 col-12">
                        <div class="text-center">
                            <a class="news_link" href="News_page.php">
                                <p class="more mb-1 ">查看更多</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news_panel d-flex mt-4 col-12">
                <div class="row">
                    <p class="middle_text px-0 pt-3 p-0 mb-1 col-12">【電競新聞】</p>
                    <div class="picture p-3 col-12">
                        <img class="picture_img" src="img/News/main_esport.jpg" alt="">
                    </div>
                    <div class="text_area p-3 col-12">
                        <div class="text-center">
                            <a class="news_link" href="News_page2.php">
                                <p class="more mb-1 ">查看更多</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-md-2 py-md-2">
        <div class="GA_title_line d-none d-md-block"></div>
        <div class="GA_title px-5 d-none d-md-block">
            <p class="py-2">新聞主頁</p>
        </div>

        <div class="row p-3 d-none d-md-block">
            <div class="news_panel d-flex mt-4 col-12">
                <div class="row">
                    <div class="picture p-3 col-3">
                        <img class="picture_img" src="img/News/main_inter.jpg" alt="">
                    </div>
                    <div class="text_area p-3 col-9 d-flex justify-content-between align-items-center">
                        <p class="middle_text m-0">【資訊新聞】</p>
                        <!-- <p class="more_text_none4">隨著時間的過去，2019 《英雄聯盟》世界大賽即將登場，目前各個賽區也正如火如荼的進行最後的夏季賽，不過近日在韓國 LCK 賽區 KingZone DragonX(KZ) 戰隊卻在這個關鍵時刻被爆料出了欠薪罷工、贊助商與 LPL 的 Suning Gaming (SN) 相同，違反 Riot 的兄弟隊條款等爭議，甚至會影響到世界賽資格云云。雖然 Riot 官方對此迅速做出了闢謠，不過對於 KZ 欠薪的傳聞不論是 Riot 、韓國電競協會或 KZ 官方均未正面回應，而 KZ 目前也確實正在招募公關等團隊營運人員。
                            50,000 元獎金與獎勵。
                        </p> -->
                            <!-- <p>2019/07/14</p> -->
                        <a class="news_link" href="News_page.php">
                             <p class="more m-0">查看更多</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news_panel d-flex mt-4 col-12">
                <div class="row">
                    <div class="picture p-3 col-3">
                        <img class="picture_img" src="img/News/main_esport.jpg" alt="">
                    </div>
                    <div class="text_area p-3 col-9 d-flex justify-content-between align-items-center">
                        <p class="middle_text m-0">【電競新聞】</p>
                        <!-- <p class="more_text_none4">隨著時間的過去，2019 《英雄聯盟》世界大賽即將登場，目前各個賽區也正如火如荼的進行最後的夏季賽，不過近日在韓國 LCK 賽區 KingZone DragonX(KZ) 戰隊卻在這個關鍵時刻被爆料出了欠薪罷工、贊助商與 LPL 的 Suning Gaming (SN) 相同，違反 Riot 的兄弟隊條款等爭議，甚至會影響到世界賽資格云云。雖然 Riot 官方對此迅速做出了闢謠，不過對於 KZ 欠薪的傳聞不論是 Riot 、韓國電競協會或 KZ 官方均未正面回應，而 KZ 目前也確實正在招募公關等團隊營運人員。
                            50,000 元獎金與獎勵。
                        </p> -->
                            <!-- <p>2019/07/14</p> -->
                        <a class="news_link" href="News_page2.php">
                             <p class="more m-0">查看更多</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<?php include __DIR__ . '/__html_end.php' ?>