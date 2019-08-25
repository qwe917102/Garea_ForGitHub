<?php require __DIR__ . '/__db_connect.php' ?>

<?php include __DIR__ . '/main_page_header.php' ?>

<!-- 從這裡開始 -->
<div class="container-fluid overflow-hidden mb-5 pt-3 px-0">
    <div class="GA_phone row d-block d-md-none mt-5">
        <div class="GA_title_mobile col-12">
            <p class="middle_text py-2 pl-2 ">電競賽事</p>
        </div>
    </div>
    <div class="container mt-md-5 pt-md-5 d-none d-md-block">
        <div class="GA_title_line2  d-none d-md-block"></div>
        <div class="GA_title px-5 d-none d-md-block">
            <p class="py-2">電競賽事</p>
        </div>

        <div class="Channel_Game_tabs mt-4 p-0 d-none d-md-block">
            <div class="Channel_Game_tab-button-outer d-flex ">
                <ul class="d-flex align-items-center m-0">
                    <div class="red_circle mr-2 mt-1"></div>
                    <p class="middle_text text-danger m-0">Live</p>
                </ul>
                <div class="Channel_Game_tab-button-outer d-flex justify-content-end">
                    <ul id="Channel_Game_tab-button">
                        <li>
                            <a class="gaming" href="#Channel_Game_tab01">
                                <img class="fit-image logo_lol" src="img/League_of_Legends_Logo_Taiwan.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="gaming" href="#Channel_Game_tab02">
                                <img class="fit-image logo_pubg" src="img/kisspng-playerunknown-s-battlegrounds-xbox-360-video-game-5b14a16712ea44.5143315615280786950775.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="gaming" href="#Channel_Game_tab03">
                                <img class="fit-image logo_overwatch" src="img/Overwatch.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="Channel_Game_tab01" class="Channel_Game_tab-contents text-white mb-2">
            <div class="Channel_switch_vedio mb-2">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe id="orign_vedio" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/-5QGfFzTTa4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row d-none d-md-flex">
                <div class="col-5 pt-3 m-0">
                    <p class="Channel_Game_Title middle_text text-white">賽程表</p>
                    <div class="Channel_Game_int px-4 py-4">
                        <p class="big_text text-white mb-2">2019/08/20</p>
                        <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                            <div class="Channel_Game_team mb-2">
                                <div class="w-100">
                                    <img class="fit_logo" src="img/Channel/ESport_lol/SK TELECOM T1.png" alt="">
                                </div>
                                <p class="Channel_team_textEN justify-content-center">
                                    SK T1
                                </p>
                            </div>
                            <p class="VS_text text-white">V.S</p>
                            <div class="Channel_Game_team mb-2 ">
                                <div class="w-100">
                                    <img class="fit_logo" src="img/Channel/ESport_lol/BOMBERS.png" alt="">
                                </div>
                                <p class="Channel_team_textEN">
                                    BOMBERS
                                </p>
                            </div>
                        </div>
                        <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                            <div class="Channel_Game_team mb-2">
                                <div class="w-100">
                                    <img class="fit_logo" src="img/Channel/ESport_lol/DETONATION FOCUSME.png" alt="">
                                </div>
                                <p class="Channel_team_textEN text-align-center">
                                    DF
                                </p>
                            </div>
                            <p class="VS_text text-white  d-block">V.S</p>
                            <div class="Channel_Game_team mb-2">
                                <div class="w-100">
                                    <img class="fit_logo" src="img/Channel/ESport_lol/G2 ESPORTS.png" alt="">
                                </div>
                                <p class="Channel_team_textEN">
                                    G2
                                </p>
                            </div>
                        </div>
                        <p class="big_text text-white mb-2">2019/08/21</p>
                        <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_lol/INTZ E-SPORTS CLUB.png" alt="">
                                <p class="Channel_team_textEN text-align-center">
                                    INTZ
                                </p>
                            </div>
                            <p class="VS_text text-white  d-block">V.S</p>
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_lol/INVICTUS GAMING.png" alt="">
                                <p class="Channel_team_textEN">
                                    IG
                                </p>
                            </div>
                        </div>
                        <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_lol/ISURUS GAMING.png" alt="">
                                <p class="Channel_team_textEN text-align-center">
                                    ISURUS
                                </p>
                            </div>
                            <p class="VS_text text-white  d-block">V.S</p>
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_lol/LCS - TEAM LIQUID.png" alt="">
                                <p class="Channel_team_textEN">
                                    TL
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col-6 pt-3 m-0">
                    <p class="Channel_Game_Title middle_text text-white">今日賽事</p>
                    <div class="Channel_Game_int px-4 py-4">
                        <div class="row">
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="vedio_btnA" class="d-flex">
                                    <div class="w-75 col-3">
                                        <img data-id="-5QGfFzTTa4" class="lolvedio1 fit-image" src="http://img.youtube.com/vi/-5QGfFzTTa4/default.jpg " alt="">
                                    </div>
                                    <p class="text-white ml-2 col-9">2019/08/20 LSC 《英雄聯盟》校園聯賽 季後賽八強 高中職組A：Day1</p>
                                </a>
                            </div>
                            <div class="d-block mb-0 px-0 col-12">
                                <a id="vedio_btnB" class=" d-flex">
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
        <div id="Channel_Game_tab02" class="Channel_Game_tab-contents text-white mb-2">
            <div class="Channel_switch_vedio mb-2">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe id="orign_vedioP" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/smMSlPtMGNQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-5 pt-3 m-0">
                    <p class="Channel_Game_Title middle_text">賽程表</p>
                    <div class="Channel_Game_int px-4 py-4">
                        <p class="big_text mb-2">2019/08/20</p>
                        <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/ahq e-Sports Club.png" alt="">
                                <p class="Channel_team_textEN text-align-center">
                                    ahq
                                </p>
                            </div>
                            <p class="VS_text d-block">V.S</p>
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/Flash Wolves.png" alt="">
                                <p class="Channel_team_textEN">
                                    FW
                                </p>
                            </div>
                        </div>
                        <div class="d-flex w-100 justify-content-between align-items-center mb-4">
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/Team SADES.png" alt="">
                                <p class="Channel_team_textEN">
                                    TS
                                </p>
                            </div>
                            <p class="Channel_Game_team_VS VS_text d-block">V.S</p>
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/G-rex Gaming.png" alt="">
                                <p class="Channel_team_textEN">
                                    G-rex
                                </p>
                            </div>
                        </div>
                        <p class="big_text mb-2">2019/08/21</p>
                        <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/Talon.png" alt="">
                                <p class="Channel_team_textEN">
                                    Talon
                                </p>
                            </div>
                            <p class=" VS_text d-block  m-0">V.S</p>
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/MP5.png" alt="">
                                <p class="Channel_team_textEN">
                                    MP5
                                </p>
                            </div>
                        </div>
                        <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/Nova Monster Shield.png" alt="">
                                <p class="Channel_team_textEN">
                                    NMS
                                </p>
                            </div>
                            <p class="Channel_Game_team_VS VS_text text-white  d-block  m-0">V.S</p>
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/Sennheiser Victory Fox.png" alt="">
                                <p class="Channel_team_textEN">
                                    SVF
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col-6 pt-3 m-0">
                    <p class="Channel_Game_Title middle_text text-white">今日賽事</p>
                    <div class="Channel_Game_int px-4 py-4">
                        <div class="row">
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="vedio_btnc" class="d-flex">
                                    <div class="col-3">
                                        <img data-id="smMSlPtMGNQ" class="pubgvedio1 fit-image" src="http://img.youtube.com/vi/smMSlPtMGNQ/default.jpg " alt="">
                                    </div>
                                    <p class="text-white ml-2 col-9">[PUBG_TW] 2019 PML Phase 1 Week 1 Day 1 - 補賽日</p>
                                </a>
                            </div>
                            <div class="d-block mb-0 px-0 col-12">
                                <a id="vedio_btnd" class=" d-flex">
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
        <div id="Channel_Game_tab03" class="Channel_Game_tab-contents text-white mb-2">
            <div class="Channel_switch_vedio mb-2">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe id="orign_vedioO" class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/5ZfUGBLi2Q8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-5 pt-3 m-0">
                    <p class="Channel_Game_Title middle_text">賽程表</p>
                    <div class="Channel_Game_int px-4 py-4">
                        <p class="big_text mb-2">2019/08/20</p>
                        <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/BAZAAR.png" alt="">
                                <p class="Channel_team_textEN text-align-center">BAZAAR</p>
                            </div>
                            <p class="VS_text d-block">V.S</p>
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/MEGA.png" alt="">
                                <p class="Channel_team_textEN text-align-center">MEGA</p>
                            </div>
                        </div>
                        <div class="d-flex w-100 justify-content-between align-items-center mb-4">
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/Blank Esports.png" alt="">
                                <p class="Channel_team_textEN text-align-center">Blank</p>
                            </div>
                            <p class="VS_text d-block">V.S</p>
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/Chaos Theory.png" alt="">
                                <p class="Channel_team_textEN text-align-center">CT</p>
                            </div>
                        </div>
                        <p class="big_text mb-2">2019/08/21</p>
                        <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/Detonator KR.png" alt="">
                                <p class="Channel_team_textEN text-align-center">DK</p>
                            </div>
                            <p class="VS_text d-block">V.S</p>
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/Hong Kong Attitude.png" alt="">
                                <p class="Channel_team_textEN text-align-center">HKA</p>
                            </div>
                        </div>
                        <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/LogitechG A Bang.png" alt="">
                                <p class="Channel_team_textEN text-align-center">LAB</p>
                            </div>
                            <p class="VS_text d-block">V.S</p>
                            <div class="Channel_Game_team mb-2">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/Machi Esports.png" alt="">
                                <p class="Channel_team_textEN text-align-center">Machi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col-6 pt-3 m-0">
                    <p class="Channel_Game_Title middle_text text-white">今日賽事</p>
                    <div class="Channel_Game_int px-4 py-4">
                        <div class="row">
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="vedio_btnE" class="d-flex">
                                    <div class="col-3">
                                        <img data-id="5ZfUGBLi2Q8" class="overvedio1 fit-image" src="http://img.youtube.com/vi/5ZfUGBLi2Q8/default.jpg " alt="">
                                    </div>
                                    <p class="text-white ml-2 col-9">《鬥陣特攻》太平洋職業錦標賽S2 W3D3</p>
                                </a>
                            </div>
                            <div class="d-block mb-0 px-0 col-12">
                                <a id="vedio_btnF" class=" d-flex">
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
        <div class="Channel_GM_tabs mt-4">
            <div class="Channel_GM_tab-button-outer d-flex">
                <ul class="row m-0 p-0 col-12 Channel_M_btn">
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

                <div class="Mid_btn d-flex row m-0 px-2">
                    <a class="fight_btn col-6">
                        <p class="middle_text">賽程表</p>
                    </a>
                    <a class="day_btn col-6">
                        <p class="middle_text">今日賽事</p>
                    </a>
                </div>

                <div class="fight_list row col-12 p-2 m-0">
                    <p class="M_times col-12">2019/08/20</p>
                    <div class="row col-12 m-0">
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_lol/SK TELECOM T1.png" alt="">
                                <p class="t_name">SK T1</p>
                            </div>
                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center big_text">
                            <div>V.S</div>
                        </div>
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_lol/BOMBERS.png" alt="">
                                <p class="t_name">BOMBERS</p>
                            </div>
                        </div>
                    </div>
                    <div class="row col-12 m-0">
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_lol/DETONATION FOCUSME.png" alt="">
                                <p class="t_name">DF</p>
                            </div>

                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center big_text">
                            <div>V.S</div>
                        </div>
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_lol/G2 ESPORTS.png" alt="">
                                <p class="t_name">G2</p>
                            </div>
                        </div>
                    </div>
                    <p class="M_times col-12">2019/08/21</p>
                    <div class="row col-12 m-0">
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_lol/INTZ E-SPORTS CLUB.png" alt="">
                                <p class="t_name">INTZ</p>
                            </div>

                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center big_text">
                            <div>V.S</div>
                        </div>
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_lol/INVICTUS GAMING.png" alt="">
                                <p class="t_name">IG</p>
                            </div>
                        </div>
                    </div>
                    <div class="row col-12 m-0 d-flex justify-content-center">
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_lol/ISURUS GAMING.png" alt="">
                                <p class="t_name">ISURUS</p>
                            </div>

                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center big_text">
                            <div>V.S</div>
                        </div>
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo " src="img/Channel/ESport_lol/LCS - TEAM LIQUID.png" alt="">
                                <p class="t_name">TL</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="day_list row col-12 p-2 m-0">
                    <div class="Channel_Game_int px-4 py-4">
                        <div class="row">
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="btnAm" class="d-flex">
                                    <img data-id="-5QGfFzTTa4" class="m_lol fit-image col-5" src="http://img.youtube.com/vi/-5QGfFzTTa4/default.jpg " alt="">
                                    <p class="text-white col-7">2019/08/20 LSC 《英雄聯盟》校園聯賽 季後賽八強 高中職組A：Day1</p>
                                </a>
                            </div>
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="btnBm" class="d-flex">
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

                <div class="Mid_btn d-flex row m-0 px-2">
                    <a class="fight_btn col-6">
                        <p class="middle_text">賽程表</p>
                    </a>
                    <a class="day_btn col-6">
                        <p class="middle_text">今日賽事</p>
                    </a>
                </div>

                <div class="fight_list row col-12 p-2 m-0">
                    <p class="M_times col-12">2019/08/20</p>
                    <div class="row col-12 m-0">
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/ahq e-Sports Club.png" alt="">
                                <p class="t_name">ahq</p>
                            </div>
                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center big_text">
                            <div>V.S</div>
                        </div>
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/Flash Wolves.png" alt="">
                                <p class="t_name">FW</p>
                            </div>
                        </div>
                    </div>
                    <div class="row col-12 m-0">
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/Team SADES.png" alt="">
                                <p class="t_name">TS</p>
                            </div>

                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center big_text">
                            <div>V.S</div>
                        </div>
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/G-rex Gaming.png" alt="">
                                <p class="t_name">G-rex</p>
                            </div>
                        </div>
                    </div>
                    <p class="M_times col-12">2019/08/21</p>
                    <div class="row col-12 m-0">
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/Talon.png" alt="">
                                <p class="t_name">Talon</p>
                            </div>

                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center big_text">
                            <div>V.S</div>
                        </div>
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/MP5.png" alt="">
                                <p class="t_name">MP5</p>
                            </div>
                        </div>
                    </div>
                    <div class="row col-12 m-0 d-flex justify-content-center">
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_pubg/Nova Monster Shield.png" alt="">
                                <p class="t_name">NMS</p>
                            </div>

                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center big_text">
                            <div>V.S</div>
                        </div>
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo " src="img/Channel/ESport_pubg/Sennheiser Victory Fox.png" alt="">
                                <p class="t_name">SVF</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="day_list row col-12 p-2 m-0">
                    <div class="Channel_Game_int px-4 py-4">
                        <div class="row">
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="btnCm" class="d-flex">
                                    <img data-id="smMSlPtMGNQ" class="m_pubg fit-image col-5" src="http://img.youtube.com/vi/smMSlPtMGNQ/default.jpg " alt="">
                                    <p class="text-white col-7">[PUBG_TW] 2019 PML Phase 1 Week 1 Day 1 - 補賽日</p>
                                </a>
                            </div>
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="btnDm" class="d-flex">
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

                <div class="Mid_btn d-flex row m-0 px-2">
                    <a class="fight_btn col-6">
                        <p class="middle_text">賽程表</p>
                    </a>
                    <a class="day_btn col-6">
                        <p class="middle_text">今日賽事</p>
                    </a>
                </div>

                <div class="fight_list row col-12 p-2 m-0">
                    <p class="M_times col-12">2019/08/20</p>
                    <div class="row col-12 m-0">
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/BAZAAR.png" alt="">
                                <p class="t_name">BAZAAR</p>
                            </div>
                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center big_text">
                            <div>V.S</div>
                        </div>
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/MEGA.png" alt="">
                                <p class="t_name">MEGA</p>
                            </div>
                        </div>
                    </div>
                    <div class="row col-12 m-0">
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/Blank Esports.png" alt="">
                                <p class="t_name">Blank</p>
                            </div>

                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center big_text">
                            <div>V.S</div>
                        </div>
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/Chaos Theory.png" alt="">
                                <p class="t_name">CT</p>
                            </div>
                        </div>
                    </div>
                    <p class="M_times col-12">2019/08/21</p>
                    <div class="row col-12 m-0">
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/Detonator KR.png" alt="">
                                <p class="t_name">DK</p>
                            </div>

                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center big_text">
                            <div>V.S</div>
                        </div>
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/LogitechG A Bang.png" alt="">
                                <p class="t_name">LAB</p>
                            </div>
                        </div>
                    </div>
                    <div class="row col-12 m-0 d-flex justify-content-center">
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo" src="img/Channel/ESport_overwatch/Machi Esports.png" alt="">
                                <p class="t_name">Machi</p>
                            </div>

                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center big_text">
                            <div>V.S</div>
                        </div>
                        <div class="col-4">
                            <div class="M_fit">
                                <img class="fit_logo " src="img/Channel/ESport_pubg/Sennheiser Victory Fox.png" alt="">
                                <p class="t_name">SVF</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="day_list row col-12 p-2 m-0">
                    <div class="Channel_Game_int px-4 py-4">
                        <div class="row">
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="btnEm" class="d-flex">
                                    <img data-id="5ZfUGBLi2Q8" class="m_over fit-image col-5" src="http://img.youtube.com/vi/5ZfUGBLi2Q8/default.jpg " alt="">
                                    <p class="text-white col-7">《鬥陣特攻》太平洋職業錦標賽S2 W3D3</p>
                                </a>
                            </div>
                            <div class="d-block mb-4 px-0 col-12">
                                <a id="btnFm" class="d-flex">
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
    var gameBg = [
        'url("img/lol.png") no-repeat',
        'url("img/pubg.png") no-repeat',
        'url("img/overwatch.png") no-repeat',
    ];
    $('.Channel_Game_tab-button-outer li').click(function() {
        var bgImg = $(this).index();
        // console.log(bgImg);
        $('body').css("background", gameBg[bgImg]);
        $('body').css("background-size", "cover");
        $('body').css("background-position", "center center");
    })

    function qqq(gb) {
        var bgImg = $(gb).index()
        // console.log(bgImg)
        $('body').css("background", gameBg[bgImg])
        $('body').css("background-size", "cover")
        $('body').css("background-position", "center top");
    };
    qqq('.Channel_Game_tab-button-outer li');
    $(function() {
        var $tabButtonItem = $('#Channel_Game_tab-button li'),
            // $tabSelect = $('#Channel_Game_tab-select'),
            $tabContents = $('.Channel_Game_tab-contents'),
            activeClass = 'is-active';

        $tabButtonItem.first().addClass(activeClass);
        $tabContents.not(':first').hide();

        $tabButtonItem.find('a').on('click', function(e) {
            var target = $(this).attr('href');

            $tabButtonItem.removeClass(activeClass);
            $(this).parent().addClass(activeClass);
            // $tabSelect.val(target);
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

    $('#vedio_btnA').click(function() {
        let lol_id = $(".lolvedio1").attr("data-id");
        //   console.log(lol_id);
        $("#orign_vedio").attr("src", "https://www.youtube.com/embed/" + lol_id);
        //   console.log(orign_vedio);
    });
    $('#vedio_btnB').click(function() {
        let lol_id2 = $(".lolvedio2").attr("data-id");
        // console.log(lol_id2);
        $("#orign_vedio").attr("src", "https://www.youtube.com/embed/" + lol_id2);
        // console.log(orign_vedio);
    });
    // pubg
    // 設定class與youtube的id，修改大影片的專屬id，將按鈕改掉。
    $('#vedio_btnc').click(function() {
        let pubg_id1 = $(".pubgvedio1").attr("data-id");
        // console.log(pubg_id1);
        $("#orign_vedioP").attr("src", "https://www.youtube.com/embed/" + pubg_id1);
        // console.log(orign_vedio);
    });
    $('#vedio_btnd').click(function() {
        let pubg_id2 = $(".pubgvedio2").attr("data-id");
        $("#orign_vedioP").attr("src", "https://www.youtube.com/embed/" + pubg_id2);
    });
    //鬥陣特工
    $('#vedio_btnE').click(function() {
        let pubg_id1 = $(".overvedio1").attr("data-id");
        // console.log(pubg_id1);
        $("#orign_vedioO").attr("src", "https://www.youtube.com/embed/" + pubg_id1);
        // console.log(orign_vedio);
    });
    $('#vedio_btnF').click(function() {
        let pubg_id2 = $(".overvedio2").attr("data-id");
        $("#orign_vedioO").attr("src", "https://www.youtube.com/embed/" + pubg_id2);
    });
    // 手機板

    $("#Channel_M_tab02").hide();
    $("#Channel_M_tab03").hide();
    // 切換紐樣式
    $(".Channel_M_btn li").click(function() {
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
    $(".fight_btn").click(function() {
        $(".day_list").stop().hide();
        $(".fight_list").stop().show();
        // console.log("fight_btn");        
    });
    $(".day_btn").click(function() {
        $(".day_list").stop().show();
        $(".fight_list").stop().hide();
        // console.log("fight_btn");        
    });
    // 點圖片切換影片
    $('#btnAm').click(function() {
        let lol_id = $(".m_lol").attr("data-id");
        $("#M_vedio").attr("src", "https://www.youtube.com/embed/" + lol_id);
    });
    $('#btnBm').click(function() {
        let lol_id2 = $(".m_lol2").attr("data-id");
        $("#M_vedio").attr("src", "https://www.youtube.com/embed/" + lol_id2);
    });
    $('#btnCm').click(function() {
        let lol_id = $(".m_pubg").attr("data-id");
        $("#M_vedio2").attr("src", "https://www.youtube.com/embed/" + lol_id);
    });
    $('#btnDm').click(function() {
        let lol_id2 = $(".m_pubg2").attr("data-id");
        $("#M_vedio2").attr("src", "https://www.youtube.com/embed/" + lol_id2);
    });
    $('#btnEm').click(function() {
        let lol_id = $(".m_over").attr("data-id");
        $("#M_vedio3").attr("src", "https://www.youtube.com/embed/" + lol_id);
    });
    $('#btnFm').click(function() {
        let lol_id2 = $(".m_over2").attr("data-id");
        $("#M_vedio3").attr("src", "https://www.youtube.com/embed/" + lol_id2);
    });
</script>
<?php include __DIR__ . '/__html_end.php' ?>