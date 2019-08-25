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
            <p class="title col-12">【資訊】《Free Fire》世界盃台灣選拔賽開放報名，亞洲資格賽總獎金30萬元</p>
            <p class="align-self-end col-12">2019/07/08</p>
            <div class="d-flex justify-content-center col-12">
                <img class="img-fluid" src="img/News/news1.jpg" alt="">
            </div>
            <div class="text_area_down d-flex justify-content-between pt-3 col-12">
                <p class="mb-5">Garena 旗下吃雞手遊《Free Fire - 我要活下去》所舉辦的世界盃亞洲資格賽，台灣賽區選拔即日起正式開放報名。報名參賽玩家將與全台各地吃雞好手競爭，爭奪全台最強的封號及第一名 50,000 元獎金與獎勵。<br><br>即日起至 7 月 24 日（三），台灣賽區選拔開放線上報名，完成報名及參加 7 月 25 日（四）至 7 月 30 日（二）「線上海選賽」的玩家，即可獲得遊戲金幣、武器塗裝箱等多項好禮，即便是輸了也能獲得專屬的限定短褲「黑金球褲」。<br><br>海選賽脫穎而出的 72 支隊伍將於 8 月 3 日（六）、8 月 4 日（日）參加「線上資格賽」，屆時表現優異的 24 支隊伍可晉級 8 月 10 日（六）在華山文創園區舉辦的「世界盃夏季選拔賽」，到時將有 6 支隊伍出線，出征馬來西亞參加亞洲資格賽，爭取 11 月份代表亞洲征戰世界盃。
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
                    <p class="title">【資訊】《Free Fire》世界盃台灣選拔賽開放報名，亞洲資格賽總獎金30萬元</p>
                    <p class="m-0">2019/07/08</p>
                </div>
                <div class="d-flex justify-content-center px-5">
                    <img class="fit-img" src="img/News/news1.jpg" alt="">
                </div>
                <div class="text_area_down d-flex justify-content-between pt-3 px-5">
                    <p class="mb-5">Garena 旗下吃雞手遊《Free Fire - 我要活下去》所舉辦的世界盃亞洲資格賽，台灣賽區選拔即日起正式開放報名。報名參賽玩家將與全台各地吃雞好手競爭，爭奪全台最強的封號及第一名 50,000 元獎金與獎勵。<br><br>即日起至 7 月 24 日（三），台灣賽區選拔開放線上報名，完成報名及參加 7 月 25 日（四）至 7 月 30 日（二）「線上海選賽」的玩家，即可獲得遊戲金幣、武器塗裝箱等多項好禮，即便是輸了也能獲得專屬的限定短褲「黑金球褲」。<br><br>海選賽脫穎而出的 72 支隊伍將於 8 月 3 日（六）、8 月 4 日（日）參加「線上資格賽」，屆時表現優異的 24 支隊伍可晉級 8 月 10 日（六）在華山文創園區舉辦的「世界盃夏季選拔賽」，到時將有 6 支隊伍出線，出征馬來西亞參加亞洲資格賽，爭取 11 月份代表亞洲征戰世界盃。
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<?php include __DIR__ . '/__html_end.php' ?>