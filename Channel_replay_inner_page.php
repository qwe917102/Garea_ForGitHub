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

    /* 頁籤開始 */


    .Channel_replay_tabs {
        /* max-width: 1140px; */
        margin: 0 auto;
        padding: 0 20px;
    }

    .Channel_replay_tabs .red_circle {
        width: 15px;
        height: 15px;
        /* 正圓形，所以寬與高都設一樣 */
        border-radius: 999em;
        background-color: red;
    }

    #Channel_replay_tab-button {
        display: table;
        table-layout: fixed;
        width: 50%;
        margin: 0 0 -2px 0;
        padding: 0;
        list-style: none;
    }

    #Channel_replay_tab-button li {
        display: table-cell;
    }

    #Channel_replay_tab-button li a {

        display: block;
        padding: .5em;
        background: rgba(113, 101, 167, 0.445);
        text-align: center;
        color: #7165A7;
        text-decoration: none;
        width: 100%;
        margin: 0;
        transition: .3s
    }

    .Channel_replay_tabs .logo_lol {
        width: 97%;
    }

    .Channel_replay_tabs .logo_pubg {
        width: 101%;
    }

    .Channel_replay_tabs .logo_overwatch {
        width: 70%;
    }

    #Channel_replay_tab-button li a:hover,
    #Channel_replay_tab-button .is-active a {
        border-bottom-color: transparent;
        background: #7165A7;
        ;
    }

    .Channel_replay_tab-contents {
        width: 100%;
        position: relative;
        margin-top: 0;
    }


    .Channel_replay_tab-button-outer {
        position: relative;
        z-index: 2;
        display: block;
    }

    .Channel_replay_Title {
        letter-spacing: 0.2em;
    }

    .Channel_replay_int {
        background: #7165A7;
    }

    .Channel_replay_V {
        width: 100%;
        background-color: #7165A7;
        padding: .5em 1em .5em 1em;
    }

    #CH_replay_A,
    #CH_replay_B,
    #CH_replay_c,
    #CH_replay_d,
    #CH_replay_E,
    #CH_replay_F {
        cursor: pointer;
    }

    /* 手機板 */
    .Channel_replay_BG {
        background-color: #7165A7;
    }

    .Channel_replay_btn_BG {
        position: relative;
        z-index: 2;
        display: block;
        background-color: #413E53;
    }

    .Channel_replay_M_btn {
        list-style: none;
        cursor: pointer;
    }

    .Channel_replay_M_btn a {
        color: #AD9AFF;
        display: block;
        text-decoration: none;
        list-style: none;
        font-size: 1.2rem;
        text-align: center;
        padding: 3%;
        cursor: pointer;
    }

    .Channel_replay_M_btn .active a {
        color: #fff;
        background: #7165A7;
    }

    .Channel_replay_M_btn a:hover {
        border-bottom-color: transparent;
        color: #fff;
        background: #7165A7;
    }

    .Channel_replay_M_gameint {
        background-color: #AD9AFF;
    }

    .Channel_replay_M_day {
        background-color: #4C38A2;
    }

    .Channel_replay_M_Mid_btn a {
        color: #fff;
        text-align: center;
        cursor: pointer;
    }

    .Channel_replay_M_Mid_btn a:hover {
        color: #FBCC4D;
        text-decoration: none;
        cursor: pointer;
    }

    .Channel_replay_M_Mid_btn p {
        margin: 2%;
    }

    #CH_replay_Am,
    #CH_replay_Bm,
    #CH_replay_Cm,
    #CH_replay_Dm,
    #CH_replay_Em,
    #CH_replay_Fm {
        cursor: pointer;
    }
</style>
<!-- 從這裡開始 -->
<div class="container-fluid overflow-hidden mb-5 pt-3 px-0">
    <div class="GA_phone row d-block d-md-none mt-5">
        <div class="GA_title_mobile col-12">
            <p class="middle_text py-2 pl-2 ">賽事回顧</p>
        </div>
    </div>
    <div class="container mt-md-5 pt-md-5 d-none d-md-block">
        <div class="GA_title_line d-none d-md-block"></div>
        <div class="GA_title px-5 d-none d-md-block">
            <p class="py-2">賽事回顧</p>
        </div>

        <div class="Channel_replay_tabs mt-4 p-0 d-none d-md-block">
            <div class="Channel_replay_tab-button-outer d-flex ">
                <ul class="d-flex align-items-center m-0">
                </ul>
                <div class="Channel_replay_tab-button-outer d-flex justify-content-end">
                    <ul id="Channel_replay_tab-button">
                        <li>
                            <a class="" href="#Channel_replay_tab01">
                                <img class="fit-image logo_lol" src="img/League_of_Legends_Logo_Taiwan.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="" href="#Channel_replay_tab02">
                                <img class="fit-image logo_pubg" src="img/kisspng-playerunknown-s-battlegrounds-xbox-360-video-game-5b14a16712ea44.5143315615280786950775.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="" href="#Channel_replay_tab03">
                                <img class="fit-image logo_overwatch" src="img/Overwatch.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="Channel_replay_tab01" class="Channel_replay_tab-contents text-white mb-2">
            <div class="Channel_replay_V mb-2">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe id="orign_vedio" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/-5QGfFzTTa4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row d-none d-md-flex">
                <div class="col-5 pt-3 m-0">
                    <p class="Channel_replay_Title middle_text text-white">遊戲簡介</p>
                    <div class="Channel_replay_int px-4 py-4">
                        <p class="middle_text">《英雄聯盟》是由美國 Riot Games
                            開發的多人線上戰術競技（MOBA）類型，以第三人稱俯視角進行的遊戲。玩家以「召喚師」身分從數百位具有獨特能力的「英雄」選擇一位進行五對五形式的戰鬥。目前為止，擁有億萬玩家的喜愛，形成了自己獨有的電子競技文化。
                        </p>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col-6 pt-3 m-0">
                    <p class="Channel_replay_Title middle_text text-white">其他影片</p>
                    <div class="Channel_replay_int px-4 py-4">
                        <div class="row">
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="CH_replay_A" class="d-flex">
                                    <div class="w-75 col-3">
                                        <img data-id="-5QGfFzTTa4" class="lolvedio1 fit-image" src="http://img.youtube.com/vi/-5QGfFzTTa4/default.jpg " alt="">
                                    </div>
                                    <p class="text-white ml-2 col-9">2019/07/08 LSC 《英雄聯盟》校園聯賽 季後賽八強 高中職組A：Day1</p>
                                </a>
                            </div>
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="CH_replay_B" class=" d-flex">
                                    <div class="w-100 col-3">
                                        <img data-id="lOFDQp4dBa8" class="lolvedio2 fit-image" src="http://img.youtube.com/vi/lOFDQp4dBa8/default.jpg " alt="">
                                    </div>
                                    <p class="text-white ml-2 col-9">《LOL》2019 LMS 夏季職業聯賽 W5D3 │GRX vs JT, HKA vs FW</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Channel_replay_tab02" class="Channel_replay_tab-contents text-white mb-2">
            <div class="Channel_replay_V mb-2">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe id="orign_vedioP" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/smMSlPtMGNQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-5 pt-3 m-0">
                    <p class="Channel_replay_Title middle_text">遊戲簡介</p>
                    <div class="Channel_replay_int px-4 py-4">
                        <p class="middle_text">《絕地求生》是由韓國電子遊戲開發商 Bluehole 旗下的PUBG公司開發，於2017
                            發行的多人制第一／三人稱大逃殺遊戲，遊戲最初概念是基於製作人 Brendan Greene 製作的模組，每局遊戲最多 100
                            名玩家參與。比賽開始後，地圖的安全區域逐漸隨機位置縮小，玩家必須在這個大型死亡競賽中，收集武器和裝備並追捕擊殺其他玩家，生存至最後的一人（團隊）即贏得比賽勝利。
                        </p>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col-6 pt-3 m-0">
                    <p class="Channel_replay_Title middle_text text-white">其他影片</p>
                    <div class="Channel_replay_int px-4 py-4">
                        <div class="row">
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="CH_replay_c" class="d-flex">
                                    <div class="col-3">
                                        <img data-id="smMSlPtMGNQ" class="pubgvedio1 fit-image" src="http://img.youtube.com/vi/smMSlPtMGNQ/default.jpg " alt="">
                                    </div>
                                    <p class="text-white ml-2 col-9">[PUBG_TW] 2019 PML Phase 1 Week 1 Day 1 - 補賽日</p>
                                </a>
                            </div>
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="CH_replay_d" class=" d-flex">
                                    <div class="col-3">
                                        <img data-id="v5xccWkxOKk" class="pubgvedio2 fit-image" src="http://img.youtube.com/vi/v5xccWkxOKk/default.jpg " alt="">
                                    </div>
                                    <p class="text-white ml-2 col-9">[PUBG_TW] 2019 PML Phase 1 Week 1 Day 2</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Channel_replay_tab03" class="Channel_replay_tab-contents text-white mb-2">
            <div class="Channel_replay_V mb-2">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe id="orign_vedioO" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/5ZfUGBLi2Q8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-5 pt-3 m-0">
                    <p class="Channel_replay_Title middle_text">遊戲簡介</p>
                    <div class="Channel_replay_int px-4 py-4">
                        <p class="middle_text">《鬥陣特攻》是一款由暴雪娛樂開發並發行的多人第一人稱射擊遊戲，於 2016 年5 月 24 日發行。遊戲把玩家分為兩支隊伍，如 MOBA
                            遊戲一樣，玩家可以從幾個英雄角色中選擇一位進行對戰，並可在遊戲中隨時更換。英雄分為三類：攻擊型、肉盾型和輔助型，每個角色都有自己技能和風格，玩家必須發揮團隊合作與良好配合，將英雄技能完全發揮，合力與隊員保護並捍衛地圖上的控制點，或在有限時間內護送載具到達指定地點。
                        </p>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col-6 pt-3 m-0">
                    <p class="Channel_replay_Title middle_text text-white">其他影片</p>
                    <div class="Channel_replay_int px-4 py-4">
                        <div class="row">
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="CH_replay_E" class="d-flex">
                                    <div class="col-3">
                                        <img data-id="5ZfUGBLi2Q8" class="overvedio1 fit-image" src="http://img.youtube.com/vi/5ZfUGBLi2Q8/default.jpg " alt="">
                                    </div>
                                    <p class="text-white ml-2 col-9">《鬥陣特攻》太平洋職業錦標賽S2 W3D3</p>
                                </a>
                            </div>
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="CH_replay_F" class=" d-flex">
                                    <div class="col-3">
                                        <img data-id="W92njgRuMPk" class="overvedio2 fit-image" src="http://img.youtube.com/vi/W92njgRuMPk/default.jpg " alt="">
                                    </div>
                                    <p class="text-white ml-2 col-9">《鬥陣特攻》太平洋職業錦標賽S2 W6D3 ArT vs FW</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-block d-md-none">
        <div class="Channel_replay_BG mt-4">
            <div class="Channel_replay_btn_BG d-flex">
                <ul class="row m-0 p-0 col-12 Channel_replay_M_btn">
                    <li class="col-4 p-0 active">
                        <a class="M_lol">英雄聯盟
                        </a>
                    </li>
                    <li class="col-4 p-0 "><a class="M_pubg">絕地求生
                        </a>
                    </li>
                    <li class="col-4 p-0 "><a class="M_over">鬥陣特工
                        </a>
                    </li>
                </ul>
            </div>
            <div id="Channel_M_tab01" class="Channel_GM_contents text-white mb-2">

                <div class="embed-responsive embed-responsive-21by9 mb-4">
                    <iframe id="M_vedio" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/-5QGfFzTTa4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>

                <div class="Channel_replay_M_Mid_btn d-flex row m-0 px-2">
                    <a class="Channel_replay_M_gameint col-6">
                        <p class="middle_text">遊戲簡介</p>
                    </a>
                    <a class="Channel_replay_M_day col-6">
                        <p class="middle_text">其他影片</p>
                    </a>
                </div>

                <div class="fight_list row col-12 p-2 m-0">
                    <p class="middle_text p-4">《英雄聯盟》是由美國 Riot Games
                        開發的多人線上戰術競技（MOBA）類型，以第三人稱俯視角進行的遊戲。玩家以「召喚師」身分從數百位具有獨特能力的「英雄」選擇一位進行五對五形式的戰鬥。目前為止，擁有億萬玩家的喜愛，形成了自己獨有的電子競技文化。</p>
                </div>
                <div class="day_list row col-12 p-2 m-0">
                    <div class="Channel_replay_int px-4 py-4">
                        <div class="row">
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="CH_replay_Am" class="d-flex">
                                    <img data-id="-5QGfFzTTa4" class="m_lol fit-image col-5" src="http://img.youtube.com/vi/-5QGfFzTTa4/default.jpg " alt="">
                                    <p class="text-white col-7">2019/07/08 LSC 《英雄聯盟》校園聯賽 季後賽八強 高中職組A：Day1</p>
                                </a>
                            </div>
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="CH_replay_Bm" class="d-flex">
                                    <img data-id="lOFDQp4dBa8" class="m_lol2 fit-image col-5" src="http://img.youtube.com/vi/lOFDQp4dBa8/default.jpg " alt="">
                                    <p class="text-white col-7">《LOL》2019 LMS 夏季職業聯賽 W5D3 │GRX vs JT, HKA vs FW</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Channel_M_tab02" class="Channel_GM_contents text-white mb-2">

                <div class="embed-responsive embed-responsive-21by9 mb-4">
                    <iframe id="M_vedio2" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/smMSlPtMGNQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>

                <div class="Channel_replay_M_Mid_btn d-flex row m-0 px-2">
                    <a class="Channel_replay_M_gameint col-6">
                        <p class="middle_text">遊戲簡介</p>
                    </a>
                    <a class="Channel_replay_M_day col-6">
                        <p class="middle_text">其他影片</p>
                    </a>
                </div>

                <div class="fight_list row col-12 p-2 m-0">
                    <p class="middle_text p-4">《絕地求生》是由韓國電子遊戲開發商 Bluehole 旗下的PUBG公司開發，於2017
                        發行的多人制第一／三人稱大逃殺遊戲，遊戲最初概念是基於製作人 Brendan Greene 製作的模組，每局遊戲最多 100
                        名玩家參與。比賽開始後，地圖的安全區域逐漸隨機位置縮小，玩家必須在這個大型死亡競賽中，收集武器和裝備並追捕擊殺其他玩家，生存至最後的一人（團隊）即贏得比賽勝利。
                    </p>
                </div>
                <div class="day_list row col-12 p-2 m-0">
                    <div class="Channel_replay_int px-4 py-4">
                        <div class="row">
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="CH_replay_Cm" class="d-flex">
                                    <img data-id="smMSlPtMGNQ" class="m_pubg fit-image col-5" src="http://img.youtube.com/vi/smMSlPtMGNQ/default.jpg " alt="">
                                    <p class="text-white col-7">[PUBG_TW] 2019 PML Phase 1 Week 1 Day 1 - 補賽日</p>
                                </a>
                            </div>
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="CH_replay_Dm" class="d-flex">
                                    <img data-id="v5xccWkxOKk" class="m_pubg2 fit-image col-5" src="http://img.youtube.com/vi/v5xccWkxOKk/default.jpg " alt="">
                                    <p class="text-white col-7">[PUBG_TW] 2019 PML Phase 1 Week 1 Day 2</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Channel_M_tab03" class="Channel_GM_contents text-white mb-2">

                <div class="embed-responsive embed-responsive-21by9 mb-4">
                    <iframe id="M_vedio3" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/5ZfUGBLi2Q8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>

                <div class="Channel_replay_M_Mid_btn d-flex row m-0 px-2">
                    <a class="Channel_replay_M_gameint col-6">
                        <p class="middle_text">遊戲簡介</p>
                    </a>
                    <a class="Channel_replay_M_day col-6">
                        <p class="middle_text">其他影片</p>
                    </a>
                </div>

                <div class="fight_list row col-12 p-2 m-0">
                    <p class="middle_text p-4">《鬥陣特攻》是一款由暴雪娛樂開發並發行的多人第一人稱射擊遊戲，於 2016 年5 月 24 日發行。遊戲把玩家分為兩支隊伍，如 MOBA
                        遊戲一樣，玩家可以從幾個英雄角色中選擇一位進行對戰，並可在遊戲中隨時更換。英雄分為三類：攻擊型、肉盾型和輔助型，每個角色都有自己技能和風格，玩家必須發揮團隊合作與良好配合，將英雄技能完全發揮，合力與隊員保護並捍衛地圖上的控制點，或在有限時間內護送載具到達指定地點。
                    </p>
                </div>
                <div class="day_list row col-12 p-2 m-0">
                    <div class="Channel_replay_int px-4 py-4">
                        <div class="row">
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="CH_replay_Em" class="d-flex">
                                    <img data-id="5ZfUGBLi2Q8" class="m_over fit-image col-5" src="http://img.youtube.com/vi/5ZfUGBLi2Q8/default.jpg " alt="">
                                    <p class="text-white col-7">《鬥陣特攻》太平洋職業錦標賽S2 W3D3</p>
                                </a>
                            </div>
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="CH_replay_Fm" class="d-flex">
                                    <img data-id="W92njgRuMPk" class="m_over2 fit-image col-5" src="http://img.youtube.com/vi/W92njgRuMPk/default.jpg " alt="">
                                    <p class="text-white col-7">《鬥陣特攻》太平洋職業錦標賽S2 W6D3 ArT vs FW</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<script>
    $(function() {
        var $tabButtonItem = $('#Channel_replay_tab-button li'),
            $tabSelect = $('#Channel_replay_tab-select'),
            $tabContents = $('.Channel_replay_tab-contents'),
            activeClass = 'is-active';

        $tabButtonItem.first().addClass(activeClass);
        $tabContents.not(':first').hide();

        $tabButtonItem.find('a').on('click', function(e) {
            var target = $(this).attr('href');

            $tabButtonItem.removeClass(activeClass);
            $(this).parent().addClass(activeClass);
            $tabSelect.val(target);
            $tabContents.hide();
            $(target).show();
            e.preventDefault();
        });

        $tabSelect.on('change', function() {
            var target = $(this).val(),
                targetSelectNum = $(this).prop('selectedIndex');

            $tabButtonItem.removeClass(activeClass);
            $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
            $tabContents.hide();
            $(target).show();
        });
    });
</script>
<script>
    //點擊圖片和文字區域取得影片中的id

    $('#CH_replay_A').click(function() {
        let lol_id = $(".lolvedio1").attr("data-id");
        //   console.log(lol_id);
        $("#orign_vedio").attr("src", "https://www.youtube.com/embed/" + lol_id);
        //   console.log(orign_vedio);
    });
    $('#CH_replay_B').click(function() {
        let lol_id2 = $(".lolvedio2").attr("data-id");
        console.log(lol_id2);
        $("#orign_vedio").attr("src", "https://www.youtube.com/embed/" + lol_id2);
        console.log(orign_vedio);
    });
    // pubg
    // 設定class與youtube的id，修改大影片的專屬id，將按鈕改掉。
    $('#CH_replay_c').click(function() {
        let pubg_id1 = $(".pubgvedio1").attr("data-id");
        console.log(pubg_id1);
        $("#orign_vedioP").attr("src", "https://www.youtube.com/embed/" + pubg_id1);
        console.log(orign_vedio);
    });
    $('#CH_replay_d').click(function() {
        let pubg_id2 = $(".pubgvedio2").attr("data-id");
        $("#orign_vedioP").attr("src", "https://www.youtube.com/embed/" + pubg_id2);
    });
    //鬥陣特工
    $('#CH_replay_E').click(function() {
        let pubg_id1 = $(".overvedio1").attr("data-id");
        console.log(pubg_id1);
        $("#orign_vedioO").attr("src", "https://www.youtube.com/embed/" + pubg_id1);
        console.log(orign_vedio);
    });
    $('#CH_replay_F').click(function() {
        let pubg_id2 = $(".overvedio2").attr("data-id");
        $("#orign_vedioO").attr("src", "https://www.youtube.com/embed/" + pubg_id2);
    });
    // 手機板

    $("#Channel_M_tab02").hide();
    $("#Channel_M_tab03").hide();
    // 切換紐樣式
    $(".Channel_replay_M_btn li").click(function() {
        $(this).addClass("active").siblings().removeClass("active");
    });
    // 切換頁面
    $(".M_lol").click(function() {
        $("#Channel_M_tab01").stop().show();
        $("#Channel_M_tab02").stop().hide();
        $("#Channel_M_tab03").stop().hide();
    });
    $(".M_pubg").click(function() {
        $("#Channel_M_tab01").stop().hide();
        $("#Channel_M_tab02").stop().show();
        $("#Channel_M_tab03").stop().hide();
    });
    $(".M_over").click(function() {
        $("#Channel_M_tab01").stop().hide();
        $("#Channel_M_tab02").stop().hide();
        $("#Channel_M_tab03").stop().show();
    });
    // 中間共用區
    $(".day_list").hide();
    $(".Channel_replay_M_gameint").click(function() {
        $(".day_list").stop().hide();
        $(".fight_list").stop().show();
        // console.log("Channel_replay_M_gameint");        
    });
    $(".Channel_replay_M_day").click(function() {
        $(".day_list").stop().show();
        $(".fight_list").stop().hide();
        // console.log("Channel_replay_M_gameint");        
    });
    // 點圖片切換影片
    $('#CH_replay_Am').click(function() {
        let lol_id = $(".m_lol").attr("data-id");
        $("#M_vedio").attr("src", "https://www.youtube.com/embed/" + lol_id);
    });
    $('#CH_replay_Bm').click(function() {
        let lol_id2 = $(".m_lol2").attr("data-id");
        $("#M_vedio").attr("src", "https://www.youtube.com/embed/" + lol_id2);
    });
    $('#CH_replay_Cm').click(function() {
        let lol_id = $(".m_pubg").attr("data-id");
        $("#M_vedio2").attr("src", "https://www.youtube.com/embed/" + lol_id);
    });
    $('#CH_replay_Dm').click(function() {
        let lol_id2 = $(".m_pubg2").attr("data-id");
        $("#M_vedio2").attr("src", "https://www.youtube.com/embed/" + lol_id2);
    });
    $('#CH_replay_Em').click(function() {
        let lol_id = $(".m_over").attr("data-id");
        $("#M_vedio3").attr("src", "https://www.youtube.com/embed/" + lol_id);
    });
    $('#CH_replay_Fm').click(function() {
        let lol_id2 = $(".m_over2").attr("data-id");
        $("#M_vedio3").attr("src", "https://www.youtube.com/embed/" + lol_id2);
    });
</script>
<?php include __DIR__ . '/__html_end.php' ?>