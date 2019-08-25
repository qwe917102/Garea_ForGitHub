<?php require __DIR__. '/__db_connect.php' ?>
<?php include __DIR__. '/main_page_header.php' ?>
<link rel="stylesheet" href="css/GA_FOX_page.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<style>
	.sweet-alert {
		background-color: #211661;
		border-radius: 0;
		font-family: 'Noto Sans TC', sans-serif;
		padding-top: 30px;
	}

	.sweet-alert h2,
	.sweet-alert p {
		color: #ffffff;
	}

	.sweet-alert[data-has-confirm-button=false][data-has-cancel-button=false] {
		padding-bottom: 20px;
	}

	.sweet-alert button.confirm {
		background: #412f8f !important;
		border-radius: 0;
		border: 2px solid #ffffff;
	}
</style>
<div class="container pt-5 my-5 p-0">
    <div class="game_start py-5">
        <div class="d-flex justify-content-center">
            <p class="GAFOX_text py-md-3 m-md-0 ">
                哈囉！我是電競狐．哈比，是否不知道如何選購您心愛的電競單品嗎？<br><br>或者您還在猶豫買哪一款呢？沒關係！讓我來解決您的問題！<br>按下下面的按鈕讓我為您挑選最適合您的電競潮流單品！！</p>
        </div>
        <div class="d-flex justify-content-center align-items-center m-5">
            <p class="text-center habe mr-5">電競狐-哈比</p>
            <div class="GAFOX py-3 w-25">
                <img src="img/FOX/GAFOX.svg" class="fit-image" alt="">
            </div>

        </div>
        <button class="d-block start_game w-25 mx-auto p-2">
            即刻開始
        </button>
    </div>
    <div class="Q1 py-5 d-none row col-12 pb-4 m-0">
        <div class="d-flex justify-content-center col-12 py-5">
            <div class="question col-5 px-4 d-flex flex-column justify-content-center">
                <p class="m-0">Ｑ１<br>今天想要選購哪一種商品呢？</p>
            </div>
            <div class="GAFOX p-0 col-5">
                <img class="w-50" src="img/FOX/GAFOX.svg" class="" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-around py-4 row col-12 m-0">
            <div class="answer1 mouse d-flex flex-column m-auto col-md-3">
                <p class="bt_text">滑鼠</p>
                <div class="GA_FOX_item">
                    <style type="text/css">
                    .GA_Q2_logo .st0 {
                        fill: none;
                        stroke: #BF68FF;
                        stroke-miterlimit: 10;
                        transition: .5s;
                    }
                    </style>
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">
                        <g>
                            <g>
                                <g id="圖層_1-2" class="GA_Q2_logo">
                                    <path class="st0" d="M100,40.6L100,40.6c3.4,0,6.1,2.8,6.1,6.1V66c0,3.4-2.8,6.1-6.1,6.1l0,0c-3.4,0-6.1-2.8-6.1-6.1V46.8
                                    C93.9,43.4,96.6,40.6,100,40.6z" />
                                    <polygon class="st0"
                                        points="90.4,19.1 88.9,96.7 98.9,105.9 98.9,123.6 55.8,101.3 55.8,46 			" />
                                    <path class="st0"
                                        d="M55.8,106l43,22.3v59.9c0,0-37.6-0.8-49.9-47.7C48.9,140.5,59.7,119.7,55.8,106z" />
                                    <polygon class="st0"
                                        points="109.6,19.1 111.1,96.7 101.2,105.9 101.2,123.6 144.2,101.3 144.2,46 			" />
                                    <path class="st0"
                                        d="M144.2,106l-43,22.3v59.9c0,0,37.6-0.8,49.9-47.6C151.1,140.5,140.3,119.7,144.2,106z" />
                                    <rect x="95" y="11.9" class="st0" width="10" height="22.7" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>

            <div class="answer1 keyboard d-flex flex-column m-auto col-md-3">
                <p class="bt_text">鍵盤</p>
                <div class="GA_FOX_item">
                    <style type="text/css">
                    .GA_Q2_logo .st0 {
                        fill: none;
                        stroke: #BF68FF;
                        stroke-miterlimit: 10;
                        transition: .5s;
                    }
                    </style>
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">
                        <g>
                            <g>
                                <g id="圖層_1-2_1_" class="GA_Q2_logo">
                                    <path class="st0" d="M14.9,63.7h170.3c2.2,0,4,1.8,4,4v64.6c0,2.2-1.8,4-4,4H14.9c-2.2,0-4-1.8-4-4V67.7
                                    C10.9,65.5,12.7,63.7,14.9,63.7z" />
                                    <path class="st0" d="M20.8,69.4h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C18.8,70.3,19.7,69.4,20.8,69.4z" />
                                    <path class="st0" d="M20.8,85.5h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C18.8,86.4,19.7,85.5,20.8,85.5z" />
                                    <path class="st0" d="M20.8,101.6h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C18.8,102.5,19.7,101.6,20.8,101.6z" />
                                    <path class="st0" d="M42.5,69.4h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C40.5,70.3,41.4,69.4,42.5,69.4z" />
                                    <path class="st0" d="M42.5,85.5h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C40.5,86.4,41.4,85.5,42.5,85.5z" />
                                    <path class="st0" d="M42.5,101.6h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C40.5,102.5,41.4,101.6,42.5,101.6z" />
                                    <path class="st0" d="M65.3,69.4h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C63.3,70.3,64.2,69.4,65.3,69.4z" />
                                    <path class="st0" d="M65.3,85.5h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C63.3,86.4,64.2,85.5,65.3,85.5z" />
                                    <path class="st0" d="M65.3,101.6h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C63.3,102.5,64.2,101.6,65.3,101.6z" />
                                    <path class="st0" d="M86.9,69.4h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C84.9,70.3,85.8,69.4,86.9,69.4z" />
                                    <path class="st0" d="M86.9,85.5h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C84.9,86.4,85.8,85.5,86.9,85.5z" />
                                    <path class="st0" d="M86.9,101.6h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C84.9,102.5,85.8,101.6,86.9,101.6z" />
                                    <path class="st0" d="M108.5,69.4h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C106.5,70.3,107.4,69.4,108.5,69.4z" />
                                    <path class="st0" d="M169.8,69.4h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C167.8,70.3,168.7,69.4,169.8,69.4z" />
                                    <path class="st0" d="M131.7,69.4h22.2c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-22.2c-1.1,0-2-0.9-2-2v-7.4
                                    C129.7,70.3,130.6,69.4,131.7,69.4z" />
                                    <path class="st0" d="M42.5,119.3h53.9c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2H42.5c-1.1,0-2-0.9-2-2v-7.4
                                    C40.5,120.2,41.4,119.3,42.5,119.3z" />
                                    <path class="st0" d="M108.5,85.5h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C106.5,86.4,107.4,85.5,108.5,85.5z" />
                                    <path class="st0" d="M169.8,85.5h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C167.8,86.4,168.7,85.5,169.8,85.5z" />
                                    <path class="st0" d="M130.9,103.9h10.9c0.7,0,1.2-0.5,1.2-1.2v-5.8h11.6c0.7,0,1.2-0.5,1.2-1.2v-9c0-0.7-0.5-1.2-1.2-1.2h-23.8
                                    c-0.7,0-1.2,0.5-1.2,1.2v16C129.7,103.3,130.3,103.8,130.9,103.9L130.9,103.9z" />
                                    <path class="st0" d="M108.5,101.6h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C106.5,102.5,107.4,101.6,108.5,101.6z" />
                                    <path class="st0" d="M20.8,119.3h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C18.8,120.2,19.7,119.3,20.8,119.3z" />
                                    <path class="st0" d="M108.5,119.3h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C106.5,120.2,107.4,119.3,108.5,119.3z" />
                                    <path class="st0" d="M134.4,119.3h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C132.4,120.2,133.3,119.3,134.4,119.3z" />
                                    <path class="st0" d="M152.4,119.3h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C150.4,120.2,151.3,119.3,152.4,119.3z" />
                                    <path class="st0" d="M152.4,103.6h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C150.4,104.5,151.3,103.6,152.4,103.6z" />
                                    <path class="st0" d="M169.8,119.3h9.3c1.1,0,2,0.9,2,2v7.4c0,1.1-0.9,2-2,2h-9.3c-1.1,0-2-0.9-2-2v-7.4
                                    C167.8,120.2,168.7,119.3,169.8,119.3z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="answer1 ear d-flex flex-column m-auto col-md-3">
                <p class="bt_text">耳機</p>
                <div class="GA_FOX_item">
                    <style type="text/css">
                    .GA_Q2_logo .st0 {
                        fill: none;
                        stroke: #BF68FF;
                        stroke-miterlimit: 10;
                        transition: .5s;
                    }
                    </style>
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">
                        <g id="圖層_3">
                            <g>
                                <g id="圖層_1-2_2_" class="GA_Q2_logo">
                                    <path class="st0" d="M18.7,115.3l4.3-1.6c1.2-0.4,2.4,0.1,2.9,1.3l23.9,63.3c0.4,1.2-0.1,2.4-1.3,2.9l-4.3,1.6
                                            c-1.2,0.4-2.4-0.1-2.9-1.3l-23.9-63.3C16.9,117,17.5,115.7,18.7,115.3z" />
                                    <path class="st0" d="M29,111.6l12.2-4.6c1.2-0.4,2.4,0.1,2.9,1.3L68,171.5c0.4,1.2-0.1,2.4-1.3,2.9L54.5,179
                                            c-1.2,0.4-2.4-0.1-2.9-1.3l-23.9-63.3C27.2,113.3,27.8,112,29,111.6z" />
                                    <path class="st0" d="M155.8,182.7l-4.3-1.6c-1.2-0.4-1.7-1.7-1.3-2.9l23.9-63.3c0.4-1.2,1.7-1.7,2.9-1.3l4.3,1.6
                                            c1.2,0.4,1.7,1.7,1.3,2.9l-23.9,63.3C158.3,182.5,157,183.1,155.8,182.7z" />
                                    <path class="st0" d="M145.5,179l-12.2-4.6c-1.2-0.4-1.7-1.7-1.3-2.9l23.9-63.3c0.4-1.2,1.7-1.7,2.9-1.3l12.2,4.6
                                            c1.2,0.4,1.7,1.7,1.3,2.9l-23.9,63.3C147.9,178.9,146.7,179.4,145.5,179z" />
                                    <path class="st0" d="M99.6,26.3c34.2,0.1,63,23.2,72.4,55c2.2,11.3,0,18.7-1.7,22.4c-0.3,0.5-0.5,1.1-0.5,1.7
                                            c0,1.1,2.5,1,3.3,1.1c1.6,0,3.1,0.4,4.5,1.1c2.6,1.3,2.9,1.3,3.3,1.1c1.1-0.5,1.8-3.2-1.6-21.5c-0.6-3.4-1.2-6.2-1.6-8.1l0,0
                                            c-8.1-36.5-40.7-62.3-78.1-61.9h0.6c-37.4-0.4-69.9,25.5-78.1,61.9l0,0c-0.4,1.9-0.9,4.7-1.6,8.1c-3.3,18.2-2.7,21-1.6,21.5
                                            c0.5,0.2,0.7,0.2,3.3-1.1c1.4-0.7,2.9-1.1,4.5-1.1c0.8-0.1,3.3,0,3.3-1.1c0-0.6-0.2-1.2-0.5-1.7C28,99.9,25.8,92.5,28,81.3
                                            c9.4-31.8,38.2-54.9,72.4-55C100.4,26.3,99.6,26.3,99.6,26.3z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="Q2 py-5 d-none row col-12 m-auto  mb-5">
        <div class="d-flex justify-content-center col-12 py-5">
            <div class="question col-5 px-4 d-flex flex-column justify-content-center">
                <p class="m-0">Ｑ２<br>請問您覺得您是下列哪種玩家？</p>
            </div>
            <div class="GAFOX p-0 col-5">
                <img class="w-50" src="img/FOX/GAFOX2.svg" class="fit-image" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-center py-4 row col-12 m-auto">
            <div class="answer2 new d-flex justify-content-center  col-6 GA_FOX_item02">
                <div class="flex-column GA_FOX_item02">
                    <p class="bt_text">電玩新手</p>
                    <div class="GAFOX p-0 ">
                        <img class="fit-image p-4" src="img/FOX/player2.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="answer2 old d-flex justify-content-center  col-6 GA_FOX_item02">
                <div class="flex-column">
                    <p class="bt_text">電玩愛好者</p>
                    <div class="GAFOX p-0">
                        <img class="fit-image p-4" src="img/FOX/player1.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Q3-new py-5 d-none row col-12 m-auto  mb-5">
        <div class="d-flex justify-content-center col-12 py-5">
            <div class="question col-3 px-4 d-flex flex-column justify-content-center">
                <p class="m-0">Ｑ３<br>喜歡以下哪種顏色？</p>
            </div>
            <div class="GAFOX p-0 col-5">
                <img class="w-50" src="img/FOX/GAFOX3.svg" class="fit-image" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-around py-4 row col-12 ">
            <div class="answer3-n col-2 d-flex flex-column align-items-center" data-brand="1">
                <p class="bt_text">黃色</p>
                <div class="GA_Q3circleA"></div>
            </div>
            <div class="answer3-n col-2 d-flex flex-column align-items-center" data-brand="2">
                <p class="bt_text">綠色</p>
                <div class="GA_Q3circleB"></div>
            </div>
            <div class="answer3-n col-2 d-flex flex-column align-items-center" data-brand="3">
                <p class="bt_text">青色</p>
                <div class="GA_Q3circleC"></div>
            </div>
            <div class="answer3-n col-2 d-flex flex-column align-items-center" data-brand="4">
                <p class="bt_text">紅色</p>
                <div class="GA_Q3circleD"></div>
            </div>
        </div>
    </div>
    <div class="Q4-new py-5 d-none row col-12 m-auto  mb-5">
        <div class="d-flex justify-content-center col-12 py-5">
            <div class="question col-5 px-4 d-flex flex-column justify-content-center">
                <p class="m-0">Ｑ４<br>平常都玩哪種遊戲？</p>
            </div>
            <div class="GAFOX p-0 col-5">
                <img class="w-50" src="img/FOX/GAFOX4.svg" class="fit-image" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-around py-3">
            <div class="answer4-n">
                <p class="bt_text">MOBA<br>多人線上戰術擂台</p>
                <div class="GAQ4_item">
                    <style type="text/css">
                    .q4_moba .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                        fill: #BF68FF;
                        transition: .5s;
                    }

                    .q4_moba .st1 {
                        fill: #BF68FF;
                        transition: .5s;
                    }
                    </style>
                    <svg version="1.1" id="blade" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">
                        <g class="q4_moba">
                            <g>
                                <rect x="140.7" y="145"
                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -62.7814 151.5678)" class="st0"
                                    width="21.7" height="13.2" />
                                <polygon class="st0" points="176.3,161 165.2,149.9 149.9,165.2 155.4,170.8 161,176.3" />

                                <rect x="163.8" y="168.1"
                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -72.3432 174.652)" class="st0"
                                    width="21.7" height="13.2" />
                            </g>
                            <g class="q4_moba">
                                <g>
                                    <path class="st1"
                                        d="M13,13l14.7,26.5L42.3,66l0,0l83,83l-5.3,5.3l-0.1,17.4l14-14l23.8-23.8l14-14l-18.3,1l-4.4,4.4l-83-83l0,0				L39.5,27.7L13,13z M137.7,136.7l-1,1L26.2,27.2l1-1L137.7,136.7z" />
                                </g>
                            </g>
                        </g>
                        <g class="q4_moba">
                            <g>
                                <rect x="41.8" y="140.7"
                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -92.9892 78.6399)" class="st0"
                                    width="13.2" height="21.7" />
                                <polygon class="st0" points="39,176.3 50.1,165.2 34.8,149.9 29.2,155.4 23.7,161" />

                                <rect x="18.8" y="163.8"
                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -116.0734 69.0781)" class="st0"
                                    width="13.2" height="21.7" />
                            </g>
                            <g>
                                <g>
                                    <path class="st1"
                                        d="M187,13l-26.5,14.7L134,42.3l0,0l-83,83l-5.3-5.3l-17.4-0.1l14,14L66,157.7l14,14l-1-18.3l-4.4-4.4l83-83 l0,0l14.7-26.5L187,13z M63.3,137.7l-1-1L172.8,26.2l1,1L63.3,137.7z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="answer4-n">
                <p class="bt_text">FPS<br>第一人稱射擊遊戲</p>
                <div class="GAQ4_item">
                    <style type="text/css">
                    .q4_fps .st0 {
                        fill: #BF68FF;
                        transition: .5s;
                    }
                    </style>
                    <svg version="1.1" id="gun" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">
                        <g class="q4_fps">
                            <g>
                                <g>
                                    <path class="st0"
                                        d="M57.1,125.4c-2.4,3-6.2,4.3-9.8,3.6c0.7,0.9,1.6,1.7,2.7,2.4c3.1,1.9,6.8,1.9,9.8,0.4l0.2-0.2L57.1,125.4z" />
                                    <path class="st0" d="M46.4,134.7c-2.9-6-0.3-13.1,5.6-16c0.5-0.2,1.1-0.4,1.6-0.6l-2.6-5.5c-0.5,0.2-1.1,0.4-1.6,0.7
				c-9,4.3-12.7,15-8.5,24c1.7,3.6,4.5,6.4,7.8,8.1l3.9-4.8C50,139.5,47.7,137.5,46.4,134.7z" />
                                </g>
                                <g>
                                    <polygon class="st0" points="72.7,153 92.1,143.7 29.6,13 12.3,15 10,22" />
                                    <polygon class="st0"
                                        points="9.1,24.9 6.9,32 53,129.6 21.4,168.6 44.1,187 70.9,153.9 70.9,153.9" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="st0" d="M142.9,125.4c2.4,3,6.2,4.3,9.8,3.6c-0.7,0.9-1.6,1.7-2.7,2.4c-3.1,1.9-6.8,1.9-9.8,0.4l-0.2-0.2
				L142.9,125.4z" />
                                    <path class="st0" d="M153.6,134.7c2.9-6,0.3-13.1-5.6-16c-0.5-0.2-1.1-0.4-1.6-0.6l2.6-5.5c0.5,0.2,1.1,0.4,1.6,0.7
				c9,4.3,12.7,15,8.5,24c-1.7,3.6-4.5,6.4-7.8,8.1l-3.9-4.8C150,139.5,152.3,137.5,153.6,134.7z" />
                                </g>
                                <g>
                                    <polygon class="st0" points="127.3,153 107.9,143.7 170.4,13 187.7,15 190,22" />
                                    <polygon class="st0"
                                        points="190.9,24.9 193.1,32 147,129.6 178.6,168.6 155.9,187 129.1,153.9 129.1,153.9" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="answer4-n">
                <p class="bt_text">RTS<br>即時戰略</p>
                <div class="GAQ4_item">
                    <style type="text/css">
                    .q4_rts .st0 {
                        fill: #BF68FF;
                        transition: .5s;
                    }
                    </style>
                    <svg version="1.1" id="rts" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">
                        <g class="q4_rts">
                            <g>
                                <path class="st0"
                                    d="M46,90.3c-15.5,0-28,7.4-28,16.5c0,9.1,12.5,16.5,28,16.5s28-7.4,28-16.5C74,97.6,61.5,90.3,46,90.3z M46,117
			                    c-9.7,0-17.5-4.6-17.5-10.3c0-5.7,7.8-10.3,17.5-10.3s17.5,4.6,17.5,10.3C63.5,112.4,55.7,117,46,117z" />
                                <g>
                                    <rect x="43" y="16.8" class="st0" width="7" height="92" />
                                    <polygon class="st0" points="95,35.7 72.5,43.7 50,51.6 50,35.7 50,19.9 72.5,27.8" />
                                </g>
                            </g>
                            <g>
                                <path class="st0" d="M133,106.3c-15.5,0-28,7.4-28,16.5c0,9.1,12.5,16.5,28,16.5s28-7.4,28-16.5C161,113.6,148.5,106.3,133,106.3z
			                    M133,133c-9.7,0-17.5-4.6-17.5-10.3s7.8-10.3,17.5-10.3s17.5,4.6,17.5,10.3S142.7,133,133,133z" />
                                <g>
                                    <rect x="130" y="32.8" class="st0" width="7" height="92" />
                                    <polygon class="st0"
                                        points="182,51.7 159.5,59.7 137,67.6 137,51.7 137,35.9 159.5,43.8" />
                                </g>
                            </g>
                            <g>
                                <path class="st0" d="M80,150.3c-15.5,0-28,7.4-28,16.5c0,9.1,12.5,16.5,28,16.5s28-7.4,28-16.5C108,157.6,95.5,150.3,80,150.3z
			                     M80,177c-9.7,0-17.5-4.6-17.5-10.3s7.8-10.3,17.5-10.3s17.5,4.6,17.5,10.3S89.7,177,80,177z" />
                                <g>
                                    <rect x="77" y="76.8" class="st0" width="7" height="92" />
                                    <polygon class="st0"
                                        points="129,95.7 106.5,103.7 84,111.6 84,95.7 84,79.9 106.5,87.8" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="Q5-new py-5 d-none row col-12 m-auto  mb-2">
        <div class="d-flex justify-content-center col-12 py-5">
            <div class="question col-5 px-4 d-flex flex-column justify-content-center">
                <p class="m-0">Ｑ５<br>是怎樣個性的人呢？</p>
            </div>
            <div class="GAFOX p-0 col-5">
                <img class="w-50" src="img/FOX/GAFOX5.svg" class="fit-image" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-around py-3">
            <div class="answer5">
                <p class="bt_text">活潑外向</p>
                <div class="GAQ5_face">
                    <style type="text/css">
                    .q5face .st0 {
                        fill: #BF68FF;
                        transition: .25s;
                    }

                    .q5face .st1 {
                        stroke: #BF68FF;
                        transition: .25s;
                    }

                    .q5face .st2 {
                        fill: #BF68FF;
                        stroke: #BF68FF;
                        stroke-miterlimit: 10;
                        transition: .25s;
                    }

                    .q5face .st3 {
                        fill: none;
                        stroke: #BF68FF;
                        stroke-miterlimit: 10;
                        transition: .5s;
                    }
                    </style>
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">

                        <g id="Face1" class="q5face">
                            <g>
                                <g>
                                    <path class="st0" d="M53.9,104.1h-1.5c-2.1-2.4-3.1-5.3-3.1-8.8s1-6.5,3.1-8.9H54c-2.1,2.5-3.2,5.5-3.2,8.9
				                    C50.8,98.6,51.8,101.6,53.9,104.1z" />
                                    <path class="st1" d="M63,98.8c0,1.7-1.4,3-3,3s-3-1.4-3-3c0-1.7,1.4-3,3-3C61.7,95.8,63,97.2,63,98.8z M62.2,98.8
				                    c0-1.2-1-2.2-2.2-2.2s-2.2,1-2.2,2.2s1,2.2,2.2,2.2C61.3,101.1,62.2,100.1,62.2,98.8z" />
                                    <path class="st2" d="M84.9,93.6c0,0.7-0.1,1.4-0.3,2c-0.2,0.6-0.4,1.2-0.7,1.8c-0.3,0.6-0.7,1.1-1.2,1.5c-0.5,0.5-1,0.8-1.5,1.2
                                    c-0.6,0.3-1.1,0.6-1.8,0.7c-0.6,0.2-1.3,0.3-2,0.3s-1.4-0.1-2-0.3c-0.6-0.2-1.2-0.4-1.8-0.7s-1.1-0.7-1.5-1.2
                                    c-0.5-0.5-0.8-1-1.2-1.5c-0.3-0.6-0.6-1.1-0.8-1.8c-0.2-0.6-0.3-1.3-0.3-2s0.1-1.3,0.3-2c0.2-0.6,0.4-1.2,0.8-1.8
                                    c0.3-0.6,0.7-1.1,1.2-1.5c0.5-0.5,1-0.8,1.5-1.2c0.6-0.3,1.1-0.6,1.8-0.8c0.6-0.2,1.3-0.3,2-0.3s1.3,0.1,2,0.3
                                    c0.6,0.2,1.2,0.4,1.8,0.8c0.6,0.3,1.1,0.7,1.5,1.2s0.8,1,1.2,1.5c0.3,0.6,0.6,1.1,0.7,1.8C84.8,92.2,84.9,92.9,84.9,93.6z
                                    M77.4,87.4c-0.6,0-1.1,0.1-1.7,0.2c-0.5,0.1-1,0.4-1.5,0.6c-0.5,0.3-0.9,0.6-1.3,1s-0.7,0.8-1,1.3s-0.5,1-0.6,1.5
                                    s-0.2,1.1-0.2,1.7h6.2L77.4,87.4L77.4,87.4z" />
                                    <path class="st2" d="M106.6,85.6l-7.9,15.5h-0.1l-7.9-15.5l0.9-0.5l2.9,5.7h8.3l2.9-5.7L106.6,85.6z M98.6,99L98.6,99l3.7-7.2H95
				                    L98.6,99z" />
                                    <path class="st2" d="M127.3,93.6c0,0.7-0.1,1.4-0.3,2c-0.2,0.6-0.4,1.2-0.7,1.8c-0.3,0.6-0.7,1.1-1.2,1.5c-0.5,0.5-1,0.8-1.5,1.2
                                    s-1.1,0.6-1.8,0.7c-0.6,0.2-1.3,0.3-2,0.3s-1.4-0.1-2-0.3c-0.6-0.2-1.2-0.4-1.8-0.7c-0.6-0.3-1.1-0.7-1.5-1.2
                                    c-0.5-0.5-0.8-1-1.2-1.5c-0.3-0.6-0.6-1.1-0.8-1.8c-0.2-0.6-0.3-1.3-0.3-2s0.1-1.3,0.3-2c0.2-0.6,0.4-1.2,0.8-1.8
                                    c0.3-0.6,0.7-1.1,1.2-1.5c0.5-0.5,1-0.8,1.5-1.2c0.6-0.3,1.1-0.6,1.8-0.8c0.6-0.2,1.3-0.3,2-0.3s1.3,0.1,2,0.3
                                    c0.6,0.2,1.2,0.4,1.8,0.8c0.6,0.3,1.1,0.7,1.5,1.2s0.8,1,1.2,1.5c0.3,0.6,0.6,1.1,0.7,1.8C127.2,92.2,127.3,92.9,127.3,93.6z
                                    M119.9,87.4c-0.6,0-1.1,0.1-1.7,0.2c-0.5,0.1-1,0.4-1.5,0.6c-0.5,0.3-0.9,0.6-1.3,1s-0.7,0.8-1,1.3s-0.5,1-0.6,1.5
                                    s-0.2,1.1-0.2,1.7h6.2L119.9,87.4L119.9,87.4z" />
                                    <path class="st1" d="M137.6,98.8c0,1.7-1.4,3-3,3s-3-1.4-3-3c0-1.7,1.4-3,3-3C136.3,95.8,137.6,97.2,137.6,98.8z M136.8,98.8
				                    c0-1.2-1-2.2-2.2-2.2s-2.2,1-2.2,2.2s1,2.2,2.2,2.2C135.8,101.1,136.8,100.1,136.8,98.8z" />
                                    <path class="st0" d="M144.9,104.1h-1.5c2.1-2.5,3.1-5.4,3.1-8.8s-1.1-6.4-3.2-8.9h1.5c2.1,2.5,3.1,5.4,3.1,8.9
				                    C148,98.8,147,101.7,144.9,104.1z" />
                                </g>
                                <ellipse class="st3" cx="100" cy="100" rx="75" ry="52.5" />
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="answer5">
                <p class="bt_text">沉默寡言</p>
                <div class="GAQ5_face">
                    <style type="text/css">
                    .q5face2 .st0 {
                        fill: none;
                        stroke: #BF68FF;
                        stroke-miterlimit: 10;
                    }

                    .q5face2 .st1 {
                        fill: #BF68FF;
                    }
                    </style>
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">

                        <g id="face2" class="q5face2">
                            <ellipse class="st0" cx="100" cy="100" rx="75" ry="52.5" />
                            <g>
                                <path class="st1" d="M49.3,95.1c0-4.5,1.3-8.2,3.4-11.6L54,84c-2,3.3-2.9,7.1-2.9,11s0.9,7.8,2.9,11l-1.3,0.6
			                    C50.6,103.3,49.3,99.6,49.3,95.1z" />
                                <path class="st1" d="M73,100.1c0,1.9-1.6,3.5-3.5,3.5S66,102,66,100.1s1.6-3.5,3.5-3.5S73,98.2,73,100.1z M71.8,100.1
			                    c0-1.3-1-2.3-2.3-2.3s-2.3,1.1-2.3,2.3c0,1.3,1.1,2.3,2.3,2.3S71.8,101.4,71.8,100.1z" />
                                <path class="st1" d="M83,96c0-4.2,2.7-6.6,5.8-6.6s5.8,2.4,5.8,6.6c0,4.1-2.7,6.5-5.8,6.5S83,100.1,83,96z M84.8,83.7l1.3-0.2
                                c0.2,1.3,1,2.7,2.7,2.7s2.5-1.3,2.7-2.7l1.3,0.2c-0.1,1.9-1.2,3.9-4,3.9C86.1,87.6,84.9,85.6,84.8,83.7z M92.4,96
                                c0-2.9-1.5-4.8-3.6-4.8c-2.2,0-3.6,2-3.6,4.8s1.4,4.8,3.6,4.8S92.4,98.8,92.4,96z" />
                                <path class="st1" d="M96.1,104h12.2v1.4H96.1V104z" />
                                <path class="st1"
                                    d="M109.8,96c0-4.2,2.7-6.6,5.8-6.6c3.1,0,5.8,2.4,5.8,6.6c0,4.1-2.7,6.5-5.8,6.5S109.8,100.1,109.8,96z
                                M111.5,83.7l1.3-0.2c0.2,1.3,1,2.7,2.7,2.7s2.5-1.3,2.7-2.7l1.3,0.2c-0.1,1.9-1.2,3.9-4,3.9C112.8,87.6,111.7,85.6,111.5,83.7z
                                M119.2,96c0-2.9-1.5-4.8-3.6-4.8c-2.2,0-3.6,2-3.6,4.8s1.4,4.8,3.6,4.8C117.7,100.8,119.2,98.8,119.2,96z" />
                                <path class="st1" d="M144,106.1c2-3.3,2.9-7.1,2.9-11s-1-7.8-2.9-11l1.3-0.6c2.1,3.4,3.4,7.1,3.4,11.6s-1.3,8.2-3.4,11.7
			                    L144,106.1z" />
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="answer5">
                <p class="bt_text">害羞內向</p>
                <div class="GAQ5_face">
                    <style type="text/css">
                    .q5face2 .st0 {
                        fill: none;
                        stroke: #BF68FF;
                        stroke-miterlimit: 10;
                    }

                    .q5face2 .st1 {
                        fill: #BF68FF;
                    }
                    </style>
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">

                        <g id="face3" class="q5face2">
                            <ellipse class="st0" cx="100" cy="100" rx="75" ry="52.5" />
                            <g>
                                <path class="st1" d="M57.1,106.7h-2c-2.8-3.2-4.2-7.1-4.2-11.8c0-4.7,1.4-8.7,4.2-12h2c-2.8,3.4-4.2,7.4-4.2,11.9
			                    C52.9,99.4,54.3,103.3,57.1,106.7z" />
                                <path class="st1"
                                    d="M68.3,99.6c-0.3,0.1-0.6,0.2-0.9,0.2c-0.6,0-1.1-0.2-1.4-0.6s-0.6-0.9-0.6-1.4c0-0.6,0.2-1,0.6-1.4
                                s0.9-0.6,1.4-0.6c0.7,0,1.3,0.3,1.8,0.8s0.7,1.2,0.7,2c0,0.9-0.3,1.7-1,2.5s-1.6,1.1-2.7,1.1c-1.3,0-2.4-0.4-3.3-1.3
                                c-1-0.9-1.4-2-1.4-3.4c0-1.6,0.6-2.9,1.9-3.9c1.3-1,2.9-1.5,4.9-1.5c2.1,0,3.9,0.5,5.1,1.6c1.3,1.1,1.9,2.4,1.9,3.9
                                c0,1.1-0.4,2.2-1.1,3.1s-1.8,1.5-3.2,1.9V101c1.3-0.5,1.9-1.6,1.9-3.5c0-1.1-0.4-2.1-1.3-2.8c-0.8-0.7-2-1.1-3.5-1.1
                                c-1.4,0-2.4,0.4-3.2,1.1s-1.1,1.7-1.1,2.9c0,1,0.2,1.7,0.7,2.3c0.5,0.6,1.1,0.9,1.9,0.9C67.3,100.8,67.9,100.4,68.3,99.6z
                                M67.5,98.7c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7c-0.2-0.2-0.4-0.3-0.7-0.3
                                c-0.3,0-0.5,0.1-0.7,0.3s-0.3,0.4-0.3,0.7s0.1,0.5,0.3,0.7C66.9,98.6,67.2,98.7,67.5,98.7z" />
                                <path class="st1" d="M86.4,81.4l-3.5,4.4h-1.7l3-4.4H86.4z" />
                                <path class="st1" d="M103.4,88L98,102.3h-2.3L90.3,88H93l3.8,11.2l3.8-11.2H103.4z" />
                                <path class="st1" d="M112.8,85.9h-1.7l-3.5-4.4h2.3L112.8,85.9z" />
                                <path class="st1"
                                    d="M124.8,99.6c-0.3,0.1-0.6,0.2-0.9,0.2c-0.6,0-1.1-0.2-1.4-0.6s-0.6-0.9-0.6-1.4c0-0.6,0.2-1,0.6-1.4
                                s0.9-0.6,1.4-0.6c0.7,0,1.3,0.3,1.8,0.8s0.7,1.2,0.7,2c0,0.9-0.3,1.7-1,2.5s-1.6,1.1-2.7,1.1c-1.3,0-2.4-0.4-3.3-1.3
                                c-1-0.9-1.4-2-1.4-3.4c0-1.6,0.6-2.9,1.9-3.9s2.9-1.5,4.9-1.5c2.1,0,3.9,0.5,5.1,1.6c1.3,1.1,1.9,2.4,1.9,3.9
                                c0,1.1-0.4,2.2-1.1,3.1s-1.8,1.5-3.2,1.9V101c1.3-0.5,1.9-1.6,1.9-3.5c0-1.1-0.4-2.1-1.3-2.8c-0.8-0.7-2-1.1-3.5-1.1
                                c-1.4,0-2.4,0.4-3.2,1.1c-0.8,0.7-1.1,1.7-1.1,2.9c0,1,0.2,1.7,0.7,2.3c0.5,0.6,1.1,0.9,1.9,0.9
                                C123.7,100.8,124.4,100.4,124.8,99.6z M123.9,98.7c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7
                                c-0.2-0.2-0.4-0.3-0.7-0.3c-0.3,0-0.5,0.1-0.7,0.3s-0.3,0.4-0.3,0.7s0.1,0.5,0.3,0.7C123.4,98.6,123.6,98.7,123.9,98.7z" />
                                <path class="st1" d="M138.1,106.7h-2c2.8-3.4,4.2-7.3,4.2-11.8s-1.4-8.5-4.2-11.9h2c2.8,3.3,4.2,7.3,4.2,12
			                    C142.3,99.6,140.9,103.5,138.1,106.7z" />
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="Q3-old py-5 d-none row col-12 m-auto  mb-5">
        <div class="d-flex justify-content-center col-12 py-5">
            <div class="question col-5 px-4 d-flex flex-column justify-content-center">
                <p class="m-0">Ｑ３<br>平常都喜歡甚麼品牌的電競產品？</p>
            </div>
            <div class="GAFOX p-0 col-5">
                <img class="w-50" src="img/FOX/GAFOX3.svg" class="fit-image" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-around py-4">
            <div class="answer3-o Corsair GA_FOX_logo" data-brand="1">
                <style type="text/css">
                .FOX_q3_logo .st0 {
                    transition: .5s;
                    fill: #FFFFFF;
                }
                </style>
                <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 273.3 265.4"
                    style="enable-background:new 0 0 273.3 265.4;" xml:space="preserve">
                    <g id="corsair" class="FOX_q3_logo">
                        <path class="st0" d="M95.2,55c-13.8-0.7-30.1,8.5-35.3,11.7c8.1,9.7,10.5,30.2,11.2,38.9c14.6-14.7,25.8-15.6,33-13.9
                        c-0.3-6.7-1.3-24.1-6.3-36C96.8,55.2,96.1,55,95.2,55 M90.8,106.1c-19.1,4.6-29.7,11.4-32.5,13.3c0.6,3.6,0.8,7.6,0.8,11.6
                        c0,21-6,45.2-8.8,55.4c13-10.4,24.8-18,35.1-22.7C88.8,147.3,92.8,124.2,90.8,106.1 M169.1,157.9c3.9-5.2,6.6-10.5,8.4-16.1
                        c-5,1.5-10.9,3.8-17.5,7.3C165,151.4,167.8,155.2,169.1,157.9 M135.8,34.7c-15.6-1-33.9,8.6-39.4,11.6c1.5,1.8,2.8,4.1,3.9,6.5
                        c0.4,0.8,0.7,1.7,1.1,2.7c0.4,1.1,0.8,2.2,1.1,3.4c3.6,11.4,4.6,25,4.9,31.6c1.3-1.3,2.5-2.4,3.8-3.4c0.6-0.4,1.1-0.8,1.5-1.3
                        c0.6-0.4,1.1-0.8,1.5-1.3c9.8-7.6,19.2-10.5,27.9-8.8C142.1,70.5,141.5,49.4,135.8,34.7 M126.7,90.1c-4.5,1.1-8.4,2.4-11.9,3.8
                        c-0.6,0.1-1.1,0.4-1.7,0.6c-1.1,0.4-2.1,0.8-3.1,1.3c-0.7,0.3-1.4,0.6-2.1,0.8c-1.3,0.6-2.4,1-3.4,1.5c-0.1,0-0.3,0.1-0.4,0.1
                        c-2,1-3.6,1.8-5.2,2.7c-2,1-3.4,2-4.2,2.5c-0.3,0.1-0.6,0.4-0.8,0.6c0,0.4,0.1,0.8,0.1,1.4c0.4,3.8,0.7,7.6,0.7,11.6
                        c0,15.3-2.8,32-5.8,44.9c-0.1,0.7-0.3,1.3-0.4,2s-0.3,1.4-0.4,2.1c-1.3,5.3-2.5,10-3.4,13c13.2-10.5,25-18.5,35.5-23.8
                        C124.6,137,129.1,110.4,126.7,90.1 M145.5,79.9c-0.7,0.3,2.7-1.1,2.7-1.1 M189,18.4c-2.9-4.9-6.7-7.6-11.2-8
                        c-17.7-1.5-38.7,9.7-44.7,13c1.8,2.2,3.5,5,4.8,8.1c0.3,0.6,0.6,1.3,0.8,2c0.3,0.7,0.6,1.4,0.7,2.1c3.1,8.6,4.6,18.5,5.3,26.6
                        c0.4,4.2,0.6,8,0.7,10.5c0.3-0.3,0.6-0.6,0.8-0.8c0.6-0.6,1.1-1.1,1.7-1.5c24.8-22.3,40-14,46.8-10.4c0.4,0.3,1,0.6,1.4,0.7
                        c0.1-1.3,0.3-3.5,0.3-6.3C196.8,45.1,195.1,28.7,189,18.4 M145.5,79.9c-3.6,1.5-6.7,3.1-9.1,4.3c-2,1.1-3.6,2.1-4.8,2.8
                        c-0.8,0.6-1.4,0.8-1.8,1.1c0,0.3,0.1,0.7,0.1,1c0.6,4.3,0.8,8.8,0.8,13.6c0,17.1-3.2,36-6.5,50.5c-0.1,0.7-0.3,1.4-0.4,2.1
                        c-0.1,0.7-0.3,1.4-0.4,2.1c-1.4,6.2-2.8,11.2-3.8,14.7c11.9-9.5,22.3-16.7,31.4-22c0.8-0.4,1.7-1,2.4-1.4c0.7-0.4,1.5-0.8,2.2-1.3
                        c8.8-4.9,16.4-7.9,22.9-9.5c0.7-0.1,1.3-0.3,2-0.4c0.6-0.1,1.1-0.3,1.8-0.4c7.9-1.5,13.7-1.1,18.1,0.4c7.7,2.5,11.4,7.7,13,11.1
                        c9.7-12.6,12.9-27.1,12.9-40.4c0-20.3-7.2-37.9-9-42.2c-31.8,0.6-54.7,7-69.1,12.9 M45.3,244.5l-0.4,6.3c-3.9,1.8-7.2,4.2-16.6,4.2
                        c-13.5,0-22.4-8.6-22.4-22.2c0-14.6,10.1-20.9,22.4-20.9c4.5,0,8.8,1.1,13,2.1c0.4,0.1,1.8,0.3,2.4,0.3v11.5h-2.2
                        c-0.8-6.9-5.3-11.1-12.3-11.1c-8.8,0-13.7,8-13.7,18.4c0,9.3,5.6,18.9,15.8,18.9c5,0,10.9-2.7,12.9-7.9h1.1 M89.6,233.5
                        c0,13.9-7.9,21.7-21.2,21.7c-14.2,0-21.2-7.4-21.3-21.9c0.1-13.7,7.4-21.2,21.7-21.2C82.3,212.1,89.6,219.7,89.6,233.5z
                        M56.8,232.3c0,14.7,5.5,20.3,11.9,20.3c8.3,0,11.4-8.7,11.4-17.4c0-14.6-5.5-20.5-11.9-20.3C61.4,214.7,56.8,219.7,56.8,232.3
                        M95.5,250.8v-34.4l-5.8-1.1v-2.2h19.1c9,0,15.1,2.7,15.1,11.2c0,5.6-4.1,8.6-7,10.2c4.9,12.1,9.4,18.4,12.8,19.2l-0.7,1.5
                        l-12.1-2.7c-3.4-5-6.2-10.4-8.7-15.8c-1.4,0.1-2.8,0.1-4.1,0v14l6,1.1v2.2H89.8v-2.2L95.5,250.8z M104.1,233.9c1,0.4,2,0.4,2.9,0.4
                        c5.2,0,8.3-3.2,8.3-8.3c0-7.9-3.9-10.4-10.5-10.4H104v18.2 M156,224.8h-2.1c-0.4-5.2-2.5-10-8.4-10c-3.8,0-6.6,2-6.6,6
                        c0,10.4,19.5,6.3,19.5,21.5c0,7.6-6.3,12.9-14,12.9c-4.1,0-8.3-1.1-11.9-3.2c0-3.4,0-6.9-0.4-10.2h2.4c0.7,5.2,3.1,10.8,9.5,10.8
                        c4.6,0,7.4-2.7,7.4-7.2c0-8.7-18.9-7.3-18.9-20.5c0-8.6,5.5-12.8,13.6-12.8c3.4,0,6.9,1.1,10,2.5v10.2 M157.9,254.2V252l4.8-1.1
                        l14.3-38.7h5.2l14.9,38.7l4.8,1.1v2.2h-20.1V252l5.5-1.1l-3.9-10.8h-13l-3.6,10.8l5.5,1.1v2.2H157.9z M171.3,236.8H182l-5.6-14.3
                        L171.3,236.8 M218.5,216.5v34.4l5.8,1.1v2.2h-20.2V252l5.8-1.1v-34.4l-5.8-1.1v-2.2h20.2v2.2L218.5,216.5 M233.3,250.8v-34.4
                        l-5.8-1.1v-2.2h19.1c9,0,15.1,2.7,15.1,11.2c0,5.6-4.1,8.6-7,10.2c4.9,12.1,9.4,18.4,12.8,19.2l-0.7,1.5l-11.9-2.7
                        c-3.4-5-6.2-10.4-8.7-15.8c-1.4,0.1-2.8,0.1-4.1,0v14l6,1.1v2.2h-20.5v-2.2L233.3,250.8z M241.8,233.9c1,0.4,2,0.4,2.9,0.4
                        c5.2,0,8.3-3.2,8.3-8.3c0-7.9-3.9-10.4-10.4-10.4h-0.8V233.9" />
                    </g>
                </svg>
            </div>
            <div class="answer3-o Razer GA_FOX_logo" data-brand="2">
                <style type="text/css">
                .FOX_q3_logo2 .st0 {
                    transition: .5s;
                    fill: #FFFFFF;
                }
                </style>
                <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 273.3 265.4"
                    style="enable-background:new 0 0 273.3 265.4;" xml:space="preserve">
                    <g id="razer" class="FOX_q3_logo2">
                        <g>
                            <path class="st0" d="M234.7,12.8l-3-0.7l1.5-2.7l-2.2,2.5l-5,2.1c-0.4-0.5-1.2-0.8-2.3-0.5c-3,0.8-3.1-0.9-6.5,0.4
                            c-0.7,0.3-0.5-0.3-2.6,0.4c-1.5,0.5-2.5,3-3.5,3.2c-9.8,2.1-5.9,10.3-4.5,12c1.7,2.1,0.3,2.8-0.5,2c-1.2-1.2-2.6-3.1-5.3-5.8
                            c-9.4-9.3-26.9,0.2-22.9,14.6c3.7,13.6,18.5,27.1,24.7,33.3c5.6,5.7,15.3,21.3,2.7,27.1c-4.3,2-8.1,2.1-11.1,1.3
                            c4.4-7.3,4.2-16.3-1.1-21.8c-7.2-7.5-12.4-3.4-12.4-3.4c8.4,0,18.9,10.5,10.2,22c-0.4,0.5-0.7,0.9-1.1,1.3
                            c-3.7-2.2-6.4-5.5-8.2-7.3c-0.8-0.8-8.2-10.1-17.2-10c0.8-9.7-6.2-19.6-15.8-24.9c-1.3-0.7-2.6-1.3-4-1.7
                            c-0.9-7.3-4.5-15.4-15.6-18.6c-16.9-4.8-24.1,7.9-26.8,15.2c-2.3,6.4-8.5,34.9-9.6,39.5c-1,4.4-7.2,12.3-13.1,7.5
                            c-4.6-3.7-1.7-12-1-15.2c0.7-3.5-2.3-7.7-6.6-7.1c-5.1,0.8-6,5.4-6.6,6.9c-1.2,3.2-4.1,1.6-4.7,1.2c-0.9-0.6-1.4-3.1-2.8-3.9
                            c-2-1.1-1.9-0.5-2.5-0.9c-3.1-1.9-3.5-0.3-6.3-1.7c-0.9-0.4-1.6-0.4-2.1-0.1c-0.2,0.1-0.3,0.2-0.4,0.4l-4.4-2.8l-1.8-2.8l1.1,2.9
                            l-3.1,0.3l3.3,0.5l4.4,2.8c-0.2,0.7-0.1,1.6,0.9,2.4c2.4,2,1.1,3,4.1,5.1c0.6,0.4,0,0.6,1.8,1.9c1.3,0.9,3.9,0.3,4.7,1
                            c7.4,6.7,11.8-1.3,12.4-3.3c0.7-2.6,2.1-1.8,1.9-0.8c-0.3,1.6-1,3.9-1.6,7.7c-2.1,13,15.7,21.7,25.3,10.1
                            c9-10.9,11.2-30.8,12.7-39.5c1.4-7.9,8.4-24.9,20.5-17.9c4.1,2.4,6.4,5.3,7.6,8.4c-8.5,0.6-15.7,6.2-17.1,13.5
                            c-1.9,10.1,4.6,12,4.6,12c-4.9-6.8-2.4-21.5,11.9-21.1c0.6,0,1.2,0.1,1.7,0.1c0.4,4.3-0.7,8.4-1.1,10.8c-0.2,1.1-3.3,11.7,1.4,19
                            c-8.8,3.6-14.5,13.8-15.2,24.5c-0.1,1.5-0.1,2.9,0.1,4.3c-6.2,3.9-12.1,10.5-10.3,21.9c2.7,17.3,17.1,18.6,25.1,18
                            c6.8-0.6,35.2-6.9,39.9-7.8c4.4-0.9,14.1,1.4,12.2,8.8c-1.5,5.7-10.2,6.6-13.4,7.3c-3.5,0.8-6,5.3-3.7,8.9
                            c2.8,4.3,7.4,3.2,9.1,3.1c3.4-0.2,3.2,3.1,3.1,3.7c-0.1,1-2.2,2.6-2.4,4.2c-0.2,2.3,0.3,1.9,0.2,2.6c-0.4,3.6,1.2,3.3,1.1,6.4
                            c0,0.9,0.3,1.5,0.7,1.9l0,0l0.1,0.1l0.1,0.1l0,0c0.1,0.1,0.2,0.1,0.4,0.2l-0.9,6l-1.8,2.8l2.1-2.2l1.5,2.7l-0.9-3.2l0.9-6
                            c0.7-0.1,1.4-0.6,1.7-1.8c0.9-3,2.3-2.3,2.9-5.8c0.1-0.7,0.5-0.2,1-2.5c0.3-1.6-1.4-3.7-1.1-4.7c3-9.5-6.1-10.2-8.2-9.9
                            c-2.6,0.4-2.5-1.1-1.5-1.4c1.6-0.4,3.9-0.7,7.7-1.8c12.7-3.6,13.2-23.4-1.3-27.2c-13.7-3.6-32.7,2.6-41.2,4.9
                            c-7.8,2-26.1,2.7-24.8-11.1c0.4-4.7,2.2-8,4.4-10.3c4.1,7.5,12.1,11.7,19.4,9.9c10.1-2.5,9.1-9.2,9.1-9.2
                            c-4.2,7.3-18.6,11.1-24.2-2c-0.2-0.5-0.4-1.1-0.6-1.6c3.8-2.1,7.9-2.9,10.3-3.5c1.1-0.3,13.3-2.1,17.4-10.5
                            c7.5,5.4,18.9,5.2,28.3,0.7c1.3-0.6,2.6-1.4,3.7-2.2c6.5,3.5,15.2,5.3,24.2-1.9c13.7-10.9,7.7-24.2,3.2-30.6
                            c-3.8-5.6-23.5-27.3-26.6-30.7c-3-3.4-5.9-13,1.5-15c5.7-1.6,10.7,5.7,12.9,8.1c2.4,2.6,7.6,2.6,9.6-1.2c2.3-4.6-0.9-8.1-1.8-9.4
                            c-1.9-2.8,1.1-4.3,1.7-4.5c1-0.4,3.4,0.6,4.8,0c2.1-1,1.5-1.2,2.2-1.5c3.3-1.4,2.3-2.6,5-4.1c0.8-0.4,1.1-0.9,1.3-1.4v-0.1
                            c0.1-0.4,0.1-0.7,0-0.9l4.9-2.1L234.7,12.8 M144.5,66.4c0.1-0.9,0.2-2,0.2-3.1c4.7,3.2,8.1,8.4,9.7,13c2.3,6.9-0.2,11.7-3,12
                            C142.2,89.4,143.8,73.4,144.5,66.4z M131.4,114.8c-0.9,0.3-1.9,0.7-3,1.1c1-5.6,4.2-10.7,7.9-14.2c5.3-5,10.7-4.7,12.2-2.3
                            C153.2,107.4,138,112.5,131.4,114.8z M166.8,104.9c-7-2.2-9.5-7.1-8.1-9.5c4.5-8.1,16.5,2.6,21.9,7.3c0.7,0.6,1.5,1.3,2.4,2
                            C177.7,106.6,171.6,106.4,166.8,104.9z" />
                        </g>
                        <g>
                            <polygon class="st0" points="200.1,216.6 172.5,216.6 172.5,220.8 197.6,220.8" />
                            <polygon class="st0" points="200.1,234.1 172.5,234.1 172.5,238.4 197.6,238.4" />
                            <polygon class="st0" points="200.1,251.6 172.5,251.6 172.5,255.9 197.6,255.9" />
                            <path class="st0"
                                d="M255.2,228.8v-2.5c0-5.4-4.3-9.7-9.7-9.7l0,0h-17.9v39.4h4.3v-17.5h8.1l10.1,17.5h5L245,238.4h0.4
                            C250.9,238.4,255.2,234.1,255.2,228.8L255.2,228.8z M232,220.8h13.5c3,0,5.4,2.4,5.4,5.4v2.5c0,3-2.4,5.4-5.4,5.4H232V220.8z" />
                            <path class="st0"
                                d="M34.6,228.8v-2.5c0-5.4-4.3-9.7-9.7-9.7H7v39.4h4.3v-17.5h8.2l10.2,17.5h5l-10.1-17.5H25
                            C30.3,238.4,34.6,234.1,34.6,228.8z M11.4,220.8h13.5c3,0,5.4,2.4,5.4,5.4v2.5c0,3-2.4,5.4-5.4,5.4H11.4V220.8z" />
                            <polygon class="st0"
                                points="64.7,255.9 75.9,228.1 87.2,255.9 91.8,255.9 78.3,222.3 75.9,216.6 73.6,222.3 60,255.9" />
                            <path class="st0"
                                d="M258.7,216.6h2.8v0.5h-1.1v3.3h-0.6v-3.3h-1.1L258.7,216.6L258.7,216.6z" />
                            <path class="st0"
                                d="M262.5,216.6h1.1l0.8,3l0.8-3h1.1v3.8h-0.6v-3.1h-0.1l-0.9,3h-0.6l-1-3l0,0v3.1h-0.6L262.5,216.6z" />
                            <polygon class="st0" points="145.1,251.6 124.8,251.6 142.6,220.8 145.1,216.6 140.1,216.6 117.3,216.6 117.3,220.8 137.6,220.8 
                            119.9,251.6 117.3,255.9 122.4,255.9 142.6,255.9 		" />
                            <polygon class="st0" points="200.1,216.6 172.5,216.6 172.5,220.8 197.6,220.8" />
                            <polygon class="st0" points="200.1,234.1 172.5,234.1 172.5,238.4 197.6,238.4" />
                            <polygon class="st0" points="200.1,251.6 172.5,251.6 172.5,255.9 197.6,255.9" />
                            <path class="st0" d="M7,216.3" />
                            <path class="st0" d="M7,216.3" />
                            <polygon class="st0"
                                points="64.7,255.9 75.9,228.1 87.2,255.9 91.8,255.9 78.3,222.3 75.9,216.6 73.6,222.3 60,255.9" />
                            <path class="st0" d="M7,216.3" />
                            <path class="st0" d="M7,216.3" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="answer3-o Log GA_FOX_logo" data-brand="3">
                <style type="text/css">
                .FOX_q3_logo3 .st0 {
                    transition: .5s;
                    fill: #FFFFFF;
                }
                </style>
                <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 273.3 265.4"
                    style="enable-background:new 0 0 273.3 265.4;" xml:space="preserve">

                    <g id="log" class="FOX_q3_logo3">
                        <g>
                            <g>
                                <g>
                                    <path class="st0" d="M109.3,219c-0.2-0.4,0-0.7,0.4-0.9c0.9-0.2,1.4-0.4,1.4-0.9c0-5.7,0.2-6.1-0.6-6.2
					c-3.7-0.1-7.6,0.2-11.3-0.2h-0.1c-6.8-2.1-14.9,0.1-19.2,5.9c-5.1,6.4-4.6,16.6,1.1,22.4c6.1,6.4,17,7.1,23.9,1.6
					C111.5,235.9,113.4,225.9,109.3,219z M97,236c-4.7,1.7-10.4-1.1-11.9-5.9c-1.6-4.6,1.1-10,5.7-11.5c4.5-1.6,9.9,0.7,11.5,5.1
					C104.6,228.3,102,234.4,97,236z" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <g>
                                    <path class="st0" d="M35.7,198.1c0-0.4-0.2-0.6-0.6-0.6c-2.4,0-4.6,0-6.9,0c-0.4,0-0.6,0.2-0.6,0.6c0,14.9,0,29.9,0,44.7
					c0,0.4,0.2,0.6,0.6,0.6c2.4,0,4.6,0,6.9,0c0.4,0,0.6-0.2,0.6-0.6C35.8,227.9,35.8,212.9,35.7,198.1z" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <g>
                                    <path class="st0" d="M103.7,245.5c-0.4,0-0.6,0.2-0.6,0.5c-0.1,1.2-0.4,2.6-1,3.7c-3.8,8.1-16.7,6.2-17.5-3.7
					c0-0.4-0.2-0.6-0.6-0.6c-2.4,0-4.7,0-7.1,0c-0.4,0-0.6,0.2-0.6,0.6c0.1,14.6,17.8,21.7,28.7,12.9c4-3.1,6.1-7.9,6.3-12.9
					C111.5,245.3,111.1,245.5,103.7,245.5z" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <g>
                                    <path class="st0" d="M71.5,218.5c-3.6-6.3-11.3-9.5-18.3-8.3c-3.2,0.5-6.3,2-8.7,4.1c-6.7,5.7-7.6,16.7-2,23.5
					c8.3,10.8,27.4,7.8,30.9-6.3C74.2,227.2,73.7,222.5,71.5,218.5z M61.3,235c-4.3,3-10.9,1.4-13.3-3.3c-3-5,0.1-12.1,5.8-13.4
					c3.7-1,7.9,0.6,9.9,3.8C66.8,226.2,65.6,232.4,61.3,235z" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <g>
                                    <path class="st0" d="M205.4,232.6c-2.7,3-7.1,4.7-10.9,3.2c-4.7-1.5-7.2-7.1-5.6-11.6c1.5-5.3,9.3-9.8,16.6-2.5
					c0.2,0.2,0.6,0.2,0.9,0c1.6-1.6,3.2-3.2,4.8-4.8c0.2-0.2,0.2-0.6,0-0.9c-8.2-9.2-21.7-7.3-27.6,0.6c-5.5,7.1-4.3,18.2,2.8,23.8
					c7.2,5.9,19,5,24.8-2.2c0.2-0.2,0.1-0.6,0-0.9C206.4,232.6,206.1,232,205.4,232.6z" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <g>
                                    <path class="st0" d="M149.6,214.3c-7.8,6.8-7.6,20.9,1,27c7.6,5.2,18.7,3.8,25.2-2.6c0.2-0.2,0.2-0.6,0-0.9
					c-5-4.7-5-5.2-5.6-4.6c-6.6,6.3-14.6,4.7-17.2-1.7c-0.5-1.4,0.6-0.7,24.2-0.9c0.4,0,0.6-0.2,0.6-0.6
					C178.5,209.6,159,205.8,149.6,214.3z M168.3,223.8c-5.1,0-10.2,0.1-15.1,0c-0.4,0-0.7-0.5-0.6-0.9c2.6-6.6,9.7-6.8,13.5-4.1
					c1.4,1,2.2,2.5,2.8,4.1C169,223.5,168.8,223.8,168.3,223.8z" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <g>
                                    <path class="st0" d="M245.7,225c0-15.9-15-17.7-22.1-11.9c-0.4,0.4-1,0-1-0.5c0-4.8,0-9.7,0-14.5c0-0.4-0.2-0.6-0.6-0.6
					c-2.4,0-4.7,0-7.1,0c-0.4,0-0.6,0.2-0.6,0.6c0,15,0,29.9,0,44.9c0,0.4,0.2,0.6,0.6,0.6c2.4,0,4.7,0,7.1,0c0.4,0,0.6-0.2,0.6-0.6
					c0-5.8,0-11.6,0-17.3c-0.1-9.4,15.1-10.4,14.7,0c0,5.8,0,11.6,0,17.3c0,0.4,0.2,0.6,0.6,0.6c7.4,0,7.7,0.2,7.7-0.6
					C245.7,236.9,245.8,230.9,245.7,225z" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <g>
                                    <path class="st0"
                                        d="M116.8,196.7c-4.1,1.1-5,7.4-1.4,9.7c3.2,2.4,8.5-0.1,8.5-4.2C124.4,198.4,120.3,195.5,116.8,196.7z" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <g>
                                    <path class="st0" d="M122.1,211.1c-2.4,0-4.6,0-6.9,0c-0.9,0-0.5-1.4-0.6,31.7c0,0.4,0.2,0.6,0.6,0.6c2.4,0,4.6,0,6.9,0
					c0.4,0,0.6-0.2,0.6-0.6C122.7,209.6,122.9,211.1,122.1,211.1z" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <g>
                                    <path class="st0" d="M142.2,211.1c-3.1,0-3.7,0.2-3.7-0.6c-0.1-9,0.2-9.4-0.6-9.4c-2.4,0-4.6,0-6.9,0c-0.4,0-0.6,0.2-0.6,0.6
					c0,2.8,0,5.8,0,8.7c0,0.4-0.2,0.6-0.6,0.6c-3.1,0-3.7-0.1-3.7,0.6c0,6.2-0.1,6.7,0.6,6.7c1,0,2,0,3.1,0c0.4,0,0.6,0.2,0.6,0.6
					c0,7.9,0,16,0,23.9c0,0.4,0.2,0.6,0.6,0.6c2.4,0,4.6,0,6.9,0c0.4,0,0.6-0.2,0.6-0.6c0-25.3-0.2-24.5,0.6-24.5
					c3.1,0,3.8,0.1,3.8-0.6C142.9,211.6,143.1,211.1,142.2,211.1z" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <g>
                                    <path class="st0" d="M217.1,72.6H189c-2.1,0-3.8,1.7-3.8,3.8s1.7,3.8,3.8,3.8h25.9v69.5h-28v-36.1c0-3-2.4-5.3-5.3-5.3h-36.1
					v-28h25.8c2.1,0,3.8-1.7,3.8-3.8s-1.7-3.8-3.8-3.8h-28.1c-3,0-5.3,2.4-5.3,5.3v32.6c0,3,2.4,5.3,5.3,5.3h36.1V152
					c0,3,2.4,5.3,5.3,5.3h32.6c3,0,5.3-2.4,5.3-5.3V78C222.4,74.9,220.1,72.6,217.1,72.6z" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <g>
                                    <path class="st0" d="M87.2,83.1c-0.4,2.1,1,4.1,3.1,4.3c2.1,0.4,4.1-1,4.3-3.1c3.6-21.7,22.3-37.9,44.4-38.5
					c2.8-0.1,5.1-2.4,5.1-5.2V7.9c0-1.4-0.6-2.7-1.6-3.7s-2.4-1.5-3.7-1.5C90.5,3.6,50.9,42.8,50.9,92s39.5,88.6,87.8,89.3
					c0,0,0,0,0.1,0c3,0,5.2-2.5,5.2-5.2v-32.6c0-2.8-2.2-5.2-5.1-5.2c-21.6-0.6-40.1-16.4-44.1-37.5c-0.4-2.1-2.4-3.5-4.5-3
					c-2.1,0.4-3.5,2.4-3,4.5c4.5,23.7,24.5,41.9,49.1,43.6v28c-43.1-2-77.8-38.1-77.8-81.6s34.8-79.7,77.9-81.6v28
					C111.9,40.1,91.3,58.6,87.2,83.1z" />
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="answer3-o Msi GA_FOX_logo" data-brand="4">
                <style type="text/css">
                .FOX_q3_logo4 .st0 {
                    transition: .5s;
                    fill: #FFFFFF;
                }

                .FOX_q3_logo4 .st1 {
                    transition: .5s;
                    fill: none;
                    stroke: #FFFFFF;
                    stroke-width: 3;
                    stroke-miterlimit: 10;
                }
                </style>
                <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 273.3 265.4"
                    style="enable-background:new 0 0 273.3 265.4;" xml:space="preserve">

                    <g id="msi" class="FOX_q3_logo4">
                        <g>
                            <path class="st0" d="M75.6,257.8c1.2-3.2,2.3-6.1,3.3-9c2.7-7.1,5.4-14.2,8-21.3c1.7-4.6,0-6.9-4.9-6.6
                            c-8.4,0.5-13.7,5.6-16.9,12.7c-3.3,7.3-5.8,15-8.7,22.5c-0.3,0.8-1.2,1.8-1.8,1.8c-6,0.1-12,0.1-18.4,0.1c0.3-1,0.4-1.7,0.7-2.3
                            c5.5-14.6,11.1-29.2,16.6-43.8c0.6-1.5,1.3-2,3-1.9c6,0.3,9.5,2.2,12.7,7.4c2.3-1.1,4.6-2.4,7-3.4c6.6-3,13.6-4.4,20.9-3.9
                            c5.3,0.4,8.9,2.6,11.6,7.4c0.6-0.3,1.3-0.6,1.9-1c8-4.4,16.4-7.1,25.7-6.4c1.6,0.1,3.3,0.4,4.9,1c6.3,2.3,8.7,7.4,6.4,13.7
                            c-3.9,10.6-7.9,21.1-12,31.6c-0.3,0.7-1.3,1.6-1.9,1.7c-5.7,0.1-11.5,0.1-17.2,0.1c-0.3,0-0.6-0.2-1.1-0.3c1.5-4,2.9-7.9,4.4-11.8
                            c2.3-6,4.6-12.1,6.9-18.1c1.8-4.8,0-7.2-5.1-6.8c-8.5,0.7-13.7,5.9-16.9,13.2c-3.1,7.1-5.6,14.4-8.3,21.7
                            c-0.6,1.6-1.4,2.4-3.3,2.3c-5-0.1-10,0-14.9-0.1C77.3,258,76.6,257.9,75.6,257.8z" />
                            <path class="st0"
                                d="M209.1,212c-0.5,1.3-0.9,2.3-1.3,3.4c-1.2,3.1-1.2,2.8-4.3,2.6c-6.4-0.5-12.8-0.9-19.2-1.1
                            c-1.9,0-3.9,0.6-5.6,1.4c-3.8,1.7-4.2,5.7-0.7,7.9c3.3,2,6.9,3.6,10.4,5.4c0.9,0.5,1.9,1,2.8,1.4c8.7,4.4,6.5,12.8,1.5,17
                            c-5.1,4.2-11,6.6-17.5,7.3c-10.6,1.3-21.2,0.6-31.7-1.2c-0.3-0.1-0.6-0.1-0.8-0.2c0-0.2-0.1-0.4,0-0.5c1.9-6.1,1.9-5.8,8.2-5.2
                            c6,0.5,12,0.4,18,0.5c1.2,0,2.5-0.5,3.7-1c1.9-0.8,3.3-2.2,3.5-4.4c0.2-2.1-1.4-3.3-3-4.1c-4.2-2.2-8.5-4.3-12.7-6.4
                            c-8.2-4.2-7-12-1.9-16.7c4.5-4.1,10-6.4,16-7.4c11.1-1.7,22.1-0.9,33.1,0.8C208,211.5,208.4,211.7,209.1,212z" />
                            <path class="st0" d="M232.7,222c-1.8,4.7-3.6,9.4-5.3,14c-2.5,6.7-5.1,13.3-7.5,20c-0.5,1.4-1.2,2-2.8,2c-5.8-0.1-11.6,0-17.7,0
                            c1.6-4.2,3-8.1,4.5-12c2.6-6.9,5.2-13.8,7.9-20.6c0.3-0.8,1.4-1.8,2.3-1.9c6.1-0.8,12.2-1.5,18.3-2.1
                            C232.4,221.5,232.5,221.7,232.7,222z" />
                            <path class="st0" d="M237.1,210.3c-0.7,1.9-1.4,3.9-2.2,5.8c-0.2,0.4-0.9,0.6-1.5,0.7c-6.1,0.6-12.3,1.2-18.4,1.8
                            c-0.1,0-0.3-0.1-0.6-0.3c0.7-1.9,1.4-3.9,2.2-5.7c0.2-0.4,0.9-0.9,1.4-0.9c6.1-0.6,12.3-1.1,18.4-1.6
                            C236.5,209.9,236.7,210.1,237.1,210.3z" />
                        </g>
                        <path class="st1" d="M234,49.5c-0.8,13.3-2.4,26.6-5.5,39.6c-5.8,24.7-15.6,48.1-33.2,68.8c-14.5,17.1-33.5,29.5-56.7,37.4
                        c-1.3,0.4-3.1,0.4-4.4,0c-13.7-4.7-26.1-11.1-37.2-19.3c-13.2-9.7-23.2-21.4-31.4-34.3c-9.3-14.6-15.5-30.1-19.7-46.2
                        c-4.6-17.7-6.6-35.6-6.7-53.7c0-2,0.7-3.2,2.8-4.2c15.4-7.8,31.5-14.3,48.2-19.7c13.1-4.3,26.5-7.7,40.2-10.4
                        c5.3-1.1,10.2-0.2,15.2,0.7c20.2,3.9,39.5,9.8,58.2,17.3c9.5,3.8,18.5,8.2,27.8,12.4c1.8,0.8,2.4,1.9,2.3,3.6
                        C233.8,44.1,234,46.8,234,49.5z" />
                        <g>
                            <path class="st0" d="M74,81.2c0.3-1.5,0.6-3.1,1.1-4.6c0.4-1.4,1-2.8,1.4-4.3c0.6-2.2-0.2-3.6-2.6-4.6c-1.3-0.5-2.7-0.9-3.9-1.5
                            s-2.2-1.3-3.2-2c-1-0.6-2-1.3-2.9-2c-0.5-0.3-1.3-0.7-1.3-1.2c-0.2-3.4-2.1-5.2-6.2-5c3.4-1.6,8.5-0.1,9.6,2.8
                            c1,2.5,3.4,3.2,5.7,4.2c0.2-0.1,0.4-0.2,0.6-0.3c-0.4-0.8-0.7-1.7-1.3-2.4c-2.1-2.7-3.2-5.4-1.3-8.6c0.2-0.4-0.3-1.3-0.7-1.6
                            c-0.5-0.4-1.3-0.5-2.1-0.7c2.8-0.9,7.1,1.5,7.3,3.9c0,0.2,0.1,0.5,0,0.6c-3.2,2.6,0.1,4.6,1.3,6.9c0.1-1.1,0.1-2.2,0.2-3.3
                            c0.2-2.3,0.6-2.6,3.3-2.6c0.4,0,1.1-0.9,1-1.2c-0.3-0.8-1-1.6-1.5-2.3c0.1-0.1,0.3-0.3,0.4-0.4c1.3,1.2,2.9,2.2,3.9,3.6
                            c1.3,1.8,0.3,3.5-2.1,3.9c-2.3,0.4-2,2.1-1.7,3.2c0.3,1.2,1.1,2.5,2.2,3.1c0.7,0.4,2.6-0.3,3.4-1c2.3-2,4.3-4.3,6.5-6.4
                            c0.2,0.1,0.4,0.2,0.5,0.3c-1.7,0.5-3.5,1-5.2,1.6c4.8-4.5,10.7-7.3,17.2-9c6.4-1.7,13-2.7,19.5-4c-2.3-0.3-4.9-0.7-7.5-1.1
                            c0-0.1,0-0.2,0-0.4c7-1.2,14-2.5,20.5-3.6c-3.3-3.1-6.5-6.2-9.7-9.2c0.2-0.2,0.3-0.4,0.5-0.6c6.7,3.8,13.6,7.1,21.5,8.8
                            c-6.8-4.4-12.8-9.4-15.6-16.8c0.6,0.5,1.2,1,1.7,1.5c6.5,6,13.8,11,22.7,13.9c2.8,0.9,5.5,1.2,8.5,0.7c2.1-0.4,4.5,0.3,6.7,0.8
                            c0.7,0.1,1.3,1.2,1.6,1.9c1,2.5,2.2,4.8,6,4.5c0.4,0,1,0.2,1.1,0.5c1.1,1.7,2.5,1.8,4.4,1.1c0.5-0.2,1.3,0,1.8,0.3
                            c1.7,1,3.3,2.1,4.9,3.3c0.9,0.6,1.6,1.4,2,2.4c-1.2-0.5-2.3-0.9-3.7-1.5c-0.5,2.5,0.2,5.1-2.1,7.3c-0.5-1.6-1-3-1.5-4.5
                            c-1.9,1-3.7,2-5.7,3.1c0.1-0.6,0.1-0.8,0.2-1c0.3-0.7,0.6-1.5,1-2.2c-1.1-0.2-2.2-0.7-3.1-0.5c-2.1,0.5-4,1.3-6,2
                            c-1.8-2.1-2.7-2.4-4.7-1.1c-1.1,0.7-1.3,1.5-0.1,2.2c0.8,0.5,1.9,0.7,2.9,0.9c1.5,0.4,3.2,1.1,4.6,0.9c3.7-0.5,3.9,2.4,5.4,3.8
                            c0.9,0.8,1.5,0.8,2.2,0.1c0.7-0.6,1.1-1.4,1.6-2.2c1.7,2.1,3.5,4.4,1.5,7c-0.9,1.2-2.3,2.1-3.9,3.4c-0.5-3.8-1.2-4.3-5-3.8
                            c-1.5,0.2-3,0.4-5.1,0.7c1.7-1.3,2.9-2.2,4.3-3.3c-2.8-1.3-5.1-2.4-8-2.3c-1.1,0-2.2-0.1-3.3,0c-1.5,0.1-3.2,0.1-4.5,0.6
                            c-3.7,1.3-7.8,0.6-10.3-2.1c-2.1-2.2-1.5-5.4,1.4-7.1c0.8-0.5,1.6-0.9,2.6-1.4c-4.5,0-5.8,1-7.7,5.7c-2.1-0.4-4.3-0.8-6.5-1.1
                            c-11.9-1.5-23.4-0.9-34.3,4c-11.8,5.3-18.4,14.2-21.9,25c-3.9,11.3-1.4,22.1,6.1,32.2c0.4,0.5,0.7,1,0.8,1.7
                            c-7-4.7-11.5-11.1-15.1-18.4c-0.4,0.7-0.6,1.1-0.8,1.5s-0.3,0.8-1,1.4c-0.4-0.8-0.9-1.6-1.1-2.5c-0.9-3.7-0.1-7.3,1.1-10.8
                            c1.7-4.8,3.7-9.5,5.7-14.6c-2,1.4-3.8,2.7-5.5,4C74.4,81.3,74.2,81.3,74,81.2z M171.8,46.7c0.2-0.2,0.3-0.4,0.5-0.6
                            c-0.3-2.2-1.1-2.6-5.2-1.9C168.7,45.1,170.3,45.9,171.8,46.7z" />
                            <path class="st0" d="M168.2,159.1c-3.9-0.3-6.4-2.6-7.8-7.1c-0.8,0.4-1.6,0.6-2.3,1c-1.2,0.8-2.3,1.6-3.5,2.4
                            c-2.8,1.9-5.8,2.8-9.4,2c-2.2-0.5-2.3-0.2-2.4,1.8c0,1.1-0.5,2.2-1.1,3.2c-0.9,1.5-2.1,3-3.2,4.6c-2.5-3.4-1.6-6.7,0.6-10.5
                            c-1.8,0.3-3.2,0.3-4.3,0.7c-3.2,1-5.7,0.7-7.5-2.1c-0.2-0.3-0.8-0.5-1.7-1.1c0.3,4-3.4,4.7-5.9,6.4c-1,0.7-1.9,1.6-2.9,2.4
                            c-1.5-2.8-0.1-5.8,5.1-10.6c-2.3-0.4-4.6-0.4-6.3-1.2c-1.6-0.8-2.6-2.5-4-4c-0.9,3.2-4.5,3.1-7.3,4.3c-1.4,0.6-2.8,1.4-4.5,2.3
                            c0.8-5.1,3.8-8.5,9.6-10.1c-2.5-1.8-4.8-3.1-6.6-4.8c-2.2-2-0.1-4.5,0-6.8c-0.5,0-0.8,0-0.8,0c-1.3,2.8-4.4,3.1-7.1,4.1
                            c-2.2,0.8-4.2,2-6.3,3c-0.4-4.8,3.8-9.3,11-11.1c-1.4-0.6-2.5-1.1-3.2-1.5c1.3-3.3,2.6-6.5,3.7-9.9c1.2-3.8,4.8-4.4,8.5-5.1
                            c0.5-0.1,1-0.1,1.6-0.1c2.8-0.2,5.6-0.1,7,2.4c1.5,2.6,1.2,5.2-0.5,7.6s-4.3,3.1-7.3,2.9c-2.8-0.2-4.3-1.9-3.6-4.2
                            c0.7,0.4,1.3,0.8,2.1,1.1c1.4,0.5,2.9,0.7,3.7-0.7c0.8-1.5-0.4-2.3-1.8-2.8c-2.7-0.9-7,0.9-7.9,3.3c-0.7,1.9,0.4,3.8,2.6,4.5
                            c4.3,1.4,8.2,0.5,11.8-1.9c0.6-0.4,1.2-0.9,2.3-1.6c0,1.6,0,2.7,0,3.9c0,1.3,0.2,2.7,1.8,3c1.4,0.3,3.4,0.4,4.4-0.3
                            c1.2-0.8,1.6-2.4,2.3-3.8c0.1-0.2-0.5-0.7-0.9-1c-1.6-1.5-1.4-3.4,0.6-4.3c1.7-0.8,3.7-1.2,5.7-1.4c-1,0.8-2.1,1.7-3.3,2.6
                            c3.7,1.5,3.9,2.2,2.1,5c-0.5,0.8-1.1,1.6-1.8,2.6c4.6-1.3,7-3.9,5.8-5.8c2.2-2.7,7.6-3.2,10.4-0.9c-0.6-0.1-0.9-0.1-1.2-0.2
                            c-3.2-0.6-3.3-0.4-3.9,2.3c-0.7,3.2-3.6,4.6-6.6,5.9c-0.9,0.4-1.8,1-2.5,1.7c2.8,0.6,5.4,1,7.9-0.7c3.3-2.3,9-1.6,11.1,1.6
                            c-0.7-0.3-1.3-0.4-1.8-0.6c-2.9-1-4.6-0.7-6.5,1.5c-1,1.2-2,1.8-3.7,1.4c-0.6-0.2-1.6,0-2.2,0.3c-2.2,1.1-4.4,1-6.7,0.4
                            c-1.5-0.4-3.1-0.5-4.6-0.5c-3.2,0-4.6,1.8-3.7,4.4c2.2,5.8,7.1,8.8,13.8,9.4c11.8,1.1,22.9-1.1,33.2-6.2c4.5-2.2,7.3-5.8,9.9-9.6
                            c3.5-5.2,6.6-10.5,8.3-16.4c0.7-2.2,1-4.5,1-6.7c0-4.4-3-7.4-8-7.6c-3.9-0.2-7.9,0.2-11.9,0.5c-0.6,0-1.3,0.8-1.5,1.4
                            c-0.4,1.3-0.2,2.7,1.4,3.2c1.8,0.6,3.7,0.8,5.6,1.1c0.7,0.1,1.4,0,2.6,0c-8.7,6.3-24.8,1.6-27.5-7.7c0.5,0.5,0.9,1,1.4,1.5
                            c2.8,2.6,5.9,4.6,10.2,4.6c1.5,0,2.7-0.4,2.8-1.9c0.1-1.3,0-2.5-2-3c-4.6-1.1-7.6-3.5-8-7.9c0-0.3,0-0.5,0-0.8
                            c0-0.1,0.1-0.2,0.4-0.7c0.4,0.9,0.6,1.5,0.9,2.1c0.8,2,2.2,3.4,4.3,4.2c3.7,1.4,8.3-0.5,8.9-3.9c0.1-0.8-0.6-2.2-1.4-2.6
                            c-2.3-1.1-4.9-1.8-7.4-2.7c-0.8-0.3-1.7-0.4-2.8-0.7c8.6-1.8,20,2.5,21.8,8.6c-1.8-0.1-3.7-0.3-5.5-0.4c-0.6,0-1.4-0.1-1.7,0.1
                            c-0.8,0.6-1.3,1.4-1.9,2.1c0.7,0.3,1.5,0.8,2.2,0.8c2.9-0.1,5.8-0.5,8.7-0.7c4.5-0.3,8.7,0.2,11.3,3.7c2.6-1.5,5.1-2.9,7.6-4.3
                            c0.6,2.6-0.8,5-3.5,5.6c-2.1,0.5-2.6,1.3-1.7,2.9c1,1.8,0.3,3.4-0.7,5c-0.7,1.2-1.2,2.5-1.8,3.9c3.5-0.5,6.5-1,9.8-1.5
                            c-1.3,3.1-4.3,4.7-7.7,4.3c-1.9-0.2-2.7,0.2-3,1.9c-0.5,3.3-2.1,6.2-5,8.5c-0.7,0.5-1.1,1.3-1.8,2.1c3.7,0.7,7,1.3,10.3,1.8
                            c-1.7,2.4-5.9,3.4-9.3,2.2c-3-1-3-1-3.9,1.7c-0.5,1.4-1,2.7-1.3,4.1c-0.8,4.5-4.6,6-9,7c-1.4,0.3-2.9,0.6-4.3,1
                            c-0.9,0.3-1.8,1-0.7,1.7c1.6,1,2,2.3,2.4,3.8C166.9,156.7,167.6,157.8,168.2,159.1z" />
                            <path class="st0" d="M164.3,74.3c-14.6,10.9-30.8,16.7-50.5,11.3c6.1,3.7,12.9,5.1,20.2,5s14.1-2,20.9-4.8
                            c-3.1,3.6-14.5,7.7-22.2,7.9c-8.4,0.2-15.8-2.3-23.1-5.4c-0.2,0.1-0.4,0.3-0.6,0.4c0.7,0.9,1.2,1.9,2,2.6c4.8,3.8,10.6,6,17,7
                            c3.4,0.5,6.9,0.5,10.3,0.8c-6.2,1.2-12.2,0.8-18.3-0.5c-6.2-1.3-10.8-5-15.6-8.3c-0.2,0.3-0.5,0.5-0.7,0.8
                            c3.9,7,9.1,12.9,18.2,15.5c-5.6,1.6-16.2-5.7-23.7-15.8c0.6,1.8,1.1,3.6,1.9,5.3c2.4,4.6,6,8.5,10.4,11.9c0.5,0.4,0.8,0.9,1.2,1.3
                            c-0.6,0.3-1.1,0.8-1.8,1c-2.2,0.5-4.5,0.9-6.8,1.3c-2.2,0.4-3.5,1.6-4.2,3.4c-0.9,2.2-1.8,4.4-2.7,6.6c-0.2,0.4-0.5,0.7-1.1,1.5
                            c-1.2-2-2.4-3.7-3.3-5.6c-3.7-7.3-5.9-14.8-5.7-22.9c0.4-13.9,11.7-28,26.5-33.1c0.2-0.1,0.4-0.1,0.9-0.1
                            c-2.3,2.5-4.6,4.7-6.6,7.2c-1.8,2.3-5.2,4.1-3.8,8.3c1.8-1.5,3.3-2.7,4.9-4c3.1,5.1,8.8,5.8,14.4,5.8c11.9,0,23.1-2.6,33.2-8.2
                            c2-1.1,3.7-2.5,6-3.6c-0.3,0.4-0.6,0.9-0.9,1.3c-6.5,6.7-15,10.6-24.6,12.3c-5.7,1-11.6,1-17.3,1.4c-0.9,0.1-1.9,0-2.9,0
                            c-0.1,0.2-0.1,0.4-0.2,0.5c1.3,0.4,2.5,0.9,3.8,1.1c11.2,2,21.9,0.3,32-3.9c4.2-1.7,8.2-3.9,12.3-5.9
                            C164.1,73.9,164.2,74.1,164.3,74.3z" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <div class="Q4-old py-5 d-none row col-12 m-auto  mb-5">
        <div class="d-flex justify-content-center col-12 py-5">
            <div class="question col-5 px-4 d-flex flex-column justify-content-center">
                <p class="m-0">Ｑ４<br>平常都玩甚麼類型的遊戲？</p>
            </div>
            <div class="GAFOX p-0 col-5">
                <img class="w-50" src="img/FOX/GAFOX4.svg" class="fit-image" alt="">
            </div>
        </div>

        <div class="d-flex justify-content-around py-4">
            <div class="answer4-o">
                <p class="bt_text">MOBA<br>多人線上戰術擂台</p>
                <div class="GAQ4_item">
                    <style type="text/css">
                    .q4_moba .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                        fill: #BF68FF;
                        transition: .5s;
                    }

                    .q4_moba .st1 {
                        fill: #BF68FF;
                        transition: .5s;
                    }
                    </style>
                    <svg version="1.1" id="blade" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">
                        <g class="q4_moba">
                            <g>
                                <rect x="140.7" y="145"
                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -62.7814 151.5678)" class="st0"
                                    width="21.7" height="13.2" />
                                <polygon class="st0"
                                    points="176.3,161 165.2,149.9 149.9,165.2 155.4,170.8 161,176.3 		" />

                                <rect x="163.8" y="168.1"
                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -72.3432 174.652)" class="st0"
                                    width="21.7" height="13.2" />
                            </g>
                            <g class="q4_moba">
                                <g>
                                    <path class="st1" d="M13,13l14.7,26.5L42.3,66l0,0l83,83l-5.3,5.3l-0.1,17.4l14-14l23.8-23.8l14-14l-18.3,1l-4.4,4.4l-83-83l0,0
				L39.5,27.7L13,13z M137.7,136.7l-1,1L26.2,27.2l1-1L137.7,136.7z" />
                                </g>
                            </g>
                        </g>
                        <g class="q4_moba">
                            <g>

                                <rect x="41.8" y="140.7"
                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -92.9892 78.6399)" class="st0"
                                    width="13.2" height="21.7" />
                                <polygon class="st0" points="39,176.3 50.1,165.2 34.8,149.9 29.2,155.4 23.7,161" />

                                <rect x="18.8" y="163.8"
                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 -116.0734 69.0781)" class="st0"
                                    width="13.2" height="21.7" />
                            </g>
                            <g>
                                <g>
                                    <path class="st1" d="M187,13l-26.5,14.7L134,42.3l0,0l-83,83l-5.3-5.3l-17.4-0.1l14,14L66,157.7l14,14l-1-18.3l-4.4-4.4l83-83
				l0,0l14.7-26.5L187,13z M63.3,137.7l-1-1L172.8,26.2l1,1L63.3,137.7z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="answer4-o">
                <p class="bt_text">FPS<br>第一人稱射擊遊戲</p>
                <div class="GAQ4_item">
                    <style type="text/css">
                    .q4_fps .st0 {
                        fill: #BF68FF;
                        transition: .5s;
                    }
                    </style>
                    <svg version="1.1" id="gun" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">
                        <g class="q4_fps">
                            <g>
                                <g>
                                    <path class="st0"
                                        d="M57.1,125.4c-2.4,3-6.2,4.3-9.8,3.6c0.7,0.9,1.6,1.7,2.7,2.4c3.1,1.9,6.8,1.9,9.8,0.4l0.2-0.2L57.1,125.4z" />
                                    <path class="st0"
                                        d="M46.4,134.7c-2.9-6-0.3-13.1,5.6-16c0.5-0.2,1.1-0.4,1.6-0.6l-2.6-5.5c-0.5,0.2-1.1,0.4-1.6,0.7				c-9,4.3-12.7,15-8.5,24c1.7,3.6,4.5,6.4,7.8,8.1l3.9-4.8C50,139.5,47.7,137.5,46.4,134.7z" />
                                </g>
                                <g>
                                    <polygon class="st0" points="72.7,153 92.1,143.7 29.6,13 12.3,15 10,22" />
                                    <polygon class="st0"
                                        points="9.1,24.9 6.9,32 53,129.6 21.4,168.6 44.1,187 70.9,153.9 70.9,153.9" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class="st0"
                                        d="M142.9,125.4c2.4,3,6.2,4.3,9.8,3.6c-0.7,0.9-1.6,1.7-2.7,2.4c-3.1,1.9-6.8,1.9-9.8,0.4l-0.2-0.2				L142.9,125.4z" />
                                    <path class="st0"
                                        d="M153.6,134.7c2.9-6,0.3-13.1-5.6-16c-0.5-0.2-1.1-0.4-1.6-0.6l2.6-5.5c0.5,0.2,1.1,0.4,1.6,0.7				c9,4.3,12.7,15,8.5,24c-1.7,3.6-4.5,6.4-7.8,8.1l-3.9-4.8C150,139.5,152.3,137.5,153.6,134.7z" />
                                </g>
                                <g>
                                    <polygon class="st0" points="127.3,153 107.9,143.7 170.4,13 187.7,15 190,22" />
                                    <polygon class="st0"
                                        points="190.9,24.9 193.1,32 147,129.6 178.6,168.6 155.9,187 129.1,153.9 129.1,153.9" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="answer4-o">
                <p class="bt_text">RTS<br>即時戰略</p>
                <div class="GAQ4_item">
                    <style type="text/css">
                    .q4_rts .st0 {
                        fill: #BF68FF;
                        transition: .5s;
                    }
                    </style>
                    <svg version="1.1" id="rts" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">
                        <g class="q4_rts">
                            <g>
                                <path class="st0"
                                    d="M46,90.3c-15.5,0-28,7.4-28,16.5c0,9.1,12.5,16.5,28,16.5s28-7.4,28-16.5C74,97.6,61.5,90.3,46,90.3z M46,117 c-9.7,0-17.5-4.6-17.5-10.3c0-5.7,7.8-10.3,17.5-10.3s17.5,4.6,17.5,10.3C63.5,112.4,55.7,117,46,117z" />
                                <g>
                                    <rect x="43" y="16.8" class="st0" width="7" height="92" />
                                    <polygon class="st0" points="95,35.7 72.5,43.7 50,51.6 50,35.7 50,19.9 72.5,27.8" />
                                </g>
                            </g>
                            <g>
                                <path class="st0"
                                    d="M133,106.3c-15.5,0-28,7.4-28,16.5c0,9.1,12.5,16.5,28,16.5s28-7.4,28-16.5C161,113.6,148.5,106.3,133,106.3z M133,133c-9.7,0-17.5-4.6-17.5-10.3s7.8-10.3,17.5-10.3s17.5,4.6,17.5,10.3S142.7,133,133,133z" />
                                <g>
                                    <rect x="130" y="32.8" class="st0" width="7" height="92" />
                                    <polygon class="st0"
                                        points="182,51.7 159.5,59.7 137,67.6 137,51.7 137,35.9 159.5,43.8" />
                                </g>
                            </g>
                            <g>
                                <path class="st0"
                                    d="M80,150.3c-15.5,0-28,7.4-28,16.5c0,9.1,12.5,16.5,28,16.5s28-7.4,28-16.5C108,157.6,95.5,150.3,80,150.3z
                                    M80,177c-9.7,0-17.5-4.6-17.5-10.3s7.8-10.3,17.5-10.3s17.5,4.6,17.5,10.3S89.7,177,80,177z" />
                                <g>
                                    <rect x="77" y="76.8" class="st0" width="7" height="92" />
                                    <polygon class="st0"
                                        points="129,95.7 106.5,103.7 84,111.6 84,95.7 84,79.9 106.5,87.8" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="Q5-old py-5 d-none row col-12 m-auto  mb-2">
        <div class="d-flex justify-content-center col-12 py-5">
            <div class="question col-7 px-4 d-flex flex-column justify-content-center">
                <p class="m-0">Ｑ５<br>平常在電腦前面都花多久的時間在遊戲上？</p>
            </div>
            <div class="GAFOX p-0 col-5">
                <img class="w-50" src="img/FOX/GAFOX5.svg" class="fit-image" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-around py-4">
            <div class="answer5">
                <p class="bt_text">一天3小時</p>
                <div class="GAQ5_time">
                    <style type="text/css">
                    .q5time .st0 {
                        fill: none;
                        stroke: #BF68FF;
                        stroke-miterlimit: 10;
                        transition: .5s;
                    }

                    .q5time .st1 {
                        fill: #BF68FF;
                        transition: .5s;
                    }
                    </style>
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">

                        <g id="Time3" class="q5time">
                            <g>
                                <circle class="st0" cx="100" cy="100" r="87" />
                                <circle class="st0" cx="100" cy="100" r="69.7" />
                            </g>
                            <g>
                                <path class="st1" d="M60,110.3c-1.4-1.4-2.2-3.4-2.2-5.9V91.5c0-2.6,0.7-4.5,2.2-5.9s3.6-2.1,6.3-2.1c2.8,0,4.9,0.7,6.3,2.1
                                    s2.2,3.4,2.2,6v12.9c0,2.6-0.7,4.5-2.2,5.9s-3.6,2.1-6.3,2.1S61.5,111.8,60,110.3z M68.7,106.2c0.5-0.7,0.8-1.8,0.8-3.2V92.9
                                    c0-1.4-0.3-2.4-0.8-3.2c-0.5-0.7-1.3-1.1-2.4-1.1s-1.9,0.4-2.4,1.1s-0.8,1.8-0.8,3.2V103c0,1.4,0.3,2.4,0.8,3.2
                                    c0.5,0.7,1.3,1.1,2.4,1.1C67.4,107.3,68.2,106.9,68.7,106.2z" />
                                <path class="st1"
                                    d="M89.1,112.5c0,0-0.7-0.3-2-0.9s-2.4-1.5-3.2-2.7c-0.8-1.2-1.2-2.6-1.3-4.3h5.5c0.1,0.6,0.3,1.1,0.5,1.5
                                    c0.3,0.4,0.6,0.7,1,0.9c0.4,0.2,0.9,0.3,1.4,0.3c1,0,1.8-0.3,2.4-0.8c0.6-0.6,0.8-1.4,0.8-2.4v-0.7c0-1.1-0.2-1.9-0.7-2.5
                                    s-1.1-0.9-1.9-0.9h-2.4v-5.2h2.4c0.7,0,1.2-0.3,1.6-0.8s0.6-1.2,0.6-2.2v-0.5c0-0.9-0.2-1.5-0.6-2s-1-0.7-1.7-0.7
                                    c-0.5,0-0.9,0.1-1.3,0.4c-0.4,0.2-0.7,0.6-1,1.1s-0.5,1-0.6,1.7H83c0.2-1.7,0.6-3.2,1.4-4.5s1.8-2.2,3-2.9c1.3-0.7,2.6-1,4.2-1
                                    c2.5,0,4.5,0.6,5.8,1.9c1.4,1.3,2.1,3.1,2.1,5.5v0.9c0,1.3-0.3,2.5-1,3.4s-1.6,1.7-2.8,2.2c1.4,0.3,2.4,1,3.2,2.1
                                    c0.7,1.1,1.1,2.5,1.1,4.3v0.9c0,1.7-0.3,3.1-1,4.2c-0.7,1.2-1.6,2.1-2.9,2.7s-2.8,0.9-4.5,0.9C89.9,112.5,89.1,112.5,89.1,112.5z" />
                                <path class="st1" d="M109.1,83.8h5.4v28.4h-5.4V83.8z M120.8,99.9c0-1-0.3-1.8-0.8-2.3s-1.4-0.8-2.4-0.8s-1.8,0.3-2.3,0.8
                                    c-0.5,0.6-0.8,1.3-0.8,2.3l-0.4-4.5c0.6-1.3,1.3-2.2,2.2-2.9c0.9-0.6,1.9-1,3.2-1c2.1,0,3.8,0.7,5,2.2c1.2,1.4,1.8,3.5,1.8,6.1
                                    v12.3h-5.4L120.8,99.9L120.8,99.9z" />
                                <path class="st1" d="M135.4,91.9h5.7v20.3h-5.7V91.9z M145.9,97c-0.4-0.1-0.8-0.2-1.3-0.2c-1.1,0-1.9,0.3-2.5,1s-0.9,1.7-0.9,2.9
                                    l-0.4-5.3c0.6-1.2,1.3-2.2,2.2-2.8c0.9-0.7,1.9-1,2.9-1c0.8,0,1.6,0.1,2.3,0.4s1.3,0.7,1.8,1.2l-3.1,4.4
                                    C146.6,97.3,146.2,97.1,145.9,97z" />
                            </g>
                            <path class="st1" d="M187,100c0-48-39-87-87-87v17.3c38.5,0,69.7,31.2,69.7,69.7H187z" />
                        </g>
                    </svg>
                </div>
            </div>
            <div class="answer5">
                <p class="bt_text">半天都在玩</p>
                <div class="GAQ5_time">
                    <style type="text/css">
                    .q5time .st0 {
                        fill: none;
                        stroke: #BF68FF;
                        stroke-miterlimit: 10;
                    }

                    .q5time .st1 {
                        fill: #BF68FF;
                    }
                    </style>
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">

                        <g id="Time12_1_" class="q5time">
                            <g>
                                <circle class="st0" cx="100" cy="100" r="87" />
                                <circle class="st0" cx="100" cy="100" r="69.7" />
                            </g>
                            <g>
                                <path class="st1"
                                    d="M65.5,112.2h-5.4V90.1l-3.5,1.3v-5.7l4.2-1.9h4.6L65.5,112.2L65.5,112.2z" />
                                <path class="st1" d="M74.7,107.4l9.7-12.8c0.4-0.6,0.8-1.2,1-1.8c0.2-0.6,0.4-1.2,0.4-1.7l0,0c0-0.8-0.2-1.4-0.7-1.8
                                s-1.2-0.6-2.1-0.6s-1.6,0.3-2.1,0.9s-0.9,1.4-1,2.5l0,0h-5.5l0,0c0.1-1.8,0.5-3.3,1.3-4.6c0.7-1.3,1.7-2.2,3-2.9
                                c1.3-0.7,2.7-1,4.3-1c1.8,0,3.3,0.3,4.5,0.9c1.3,0.6,2.2,1.4,2.9,2.5c0.7,1.1,1,2.4,1,4l0,0c0,1.3-0.2,2.6-0.7,3.8
                                s-1.1,2.4-1.9,3.4l-7,8.8h9.7v5.2H74.7V107.4z" />
                                <path class="st1" d="M100,83.8h5.4v28.4H100V83.8z M111.7,99.9c0-1-0.3-1.8-0.8-2.3s-1.4-0.8-2.4-0.8s-1.8,0.3-2.3,0.8
                                c-0.5,0.6-0.8,1.3-0.8,2.3l-0.4-4.5c0.6-1.3,1.3-2.2,2.2-2.9c0.9-0.6,1.9-1,3.2-1c2.1,0,3.8,0.7,5,2.2c1.2,1.4,1.8,3.5,1.8,6.1
                                v12.3h-5.4L111.7,99.9L111.7,99.9z" />
                                <path class="st1" d="M126.4,91.9h5.7v20.3h-5.7C126.4,112.2,126.4,91.9,126.4,91.9z M136.8,97c-0.4-0.1-0.8-0.2-1.3-0.2
                                c-1.1,0-1.9,0.3-2.5,1s-0.9,1.7-0.9,2.9l-0.4-5.3c0.6-1.2,1.3-2.2,2.2-2.8c0.9-0.7,1.9-1,2.9-1c0.8,0,1.6,0.1,2.3,0.4
                                s1.3,0.7,1.8,1.2l-3.1,4.4C137.5,97.3,137.2,97.1,136.8,97z" />
                            </g>
                            <path class="st1"
                                d="M100,187c48,0,87-39,87-87s-39-87-87-87v17.3c38.5,0,69.7,31.2,69.7,69.7s-31.2,69.7-69.7,69.7V187z" />
                        </g>
                    </svg>
                </div>
            </div>
            <div class="answer5">
                <p class="bt_text">24小時都在玩</p>
                <div class="GAQ5_time">
                    <style type="text/css">
                    .q5timeB .st0 {
                        fill: #BF68FF;
                    }
                    </style>
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200"
                        style="enable-background:new 0 0 200 200;" xml:space="preserve">

                        <g id="Time24" class="q5timeB">
                            <path class="st0" d="M100,13c-48,0-87,39-87,87s39,87,87,87s87-39,87-87S148,13,100,13z M100,169.7c-38.5,0-69.7-31.2-69.7-69.7
		                    S61.5,30.3,100,30.3s69.7,31.2,69.7,69.7S138.5,169.7,100,169.7z" />
                            <g>
                                <path class="st0" d="M53.3,107.4L63,94.5c0.4-0.6,0.8-1.2,1-1.8c0.2-0.6,0.4-1.2,0.4-1.7l0,0c0-0.8-0.2-1.4-0.7-1.8
                                c-0.5-0.4-1.2-0.6-2.1-0.6c-0.9,0-1.6,0.3-2.1,0.9s-0.9,1.4-1,2.5l0,0H53l0,0c0.1-1.8,0.5-3.3,1.3-4.6c0.7-1.3,1.7-2.2,3-2.9
                                c1.3-0.7,2.7-1,4.3-1c1.8,0,3.3,0.3,4.5,0.9c1.3,0.6,2.2,1.4,2.9,2.5c0.7,1.1,1,2.4,1,4l0,0c0,1.3-0.2,2.6-0.7,3.8
                                s-1.1,2.4-1.9,3.4l-7,8.8h9.7v5.2H53.3V107.4z" />
                                <path class="st0"
                                    d="M76.8,102.9l8.8-19.1h6.1l-8.5,18.9H96v5.2H77v-5H76.8z M88.3,95.5h5.4v16.7h-5.4V95.5z" />
                                <path class="st0" d="M104.2,83.8h5.4v28.4h-5.4V83.8z M115.9,99.9c0-1-0.3-1.8-0.8-2.3s-1.4-0.8-2.4-0.8s-1.8,0.3-2.3,0.8
                                c-0.5,0.6-0.8,1.3-0.8,2.3l-0.4-4.5c0.6-1.3,1.3-2.2,2.2-2.9c0.9-0.6,1.9-1,3.2-1c2.1,0,3.8,0.7,5,2.2c1.2,1.4,1.8,3.5,1.8,6.1
                                v12.3H116L115.9,99.9L115.9,99.9z" />
                                <path class="st0" d="M130.5,91.9h5.7v20.3h-5.7V91.9z M140.9,97c-0.4-0.1-0.8-0.2-1.3-0.2c-1.1,0-1.9,0.3-2.5,1s-0.9,1.7-0.9,2.9
                                l-0.4-5.3c0.6-1.2,1.3-2.2,2.2-2.8c0.9-0.7,1.9-1,2.9-1c0.8,0,1.6,0.1,2.3,0.4s1.3,0.7,1.8,1.2l-3.1,4.4
                                C141.6,97.3,141.3,97.1,140.9,97z" />
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="loading">
        <img src="img/GA_mobileLogo.svg" alt="">
        <p class="loading_count">計算中...</p>
    </div>
    <div class="final_game px-5 pt-5 pb-0 d-none">
        
    </div>
</div>

<?php include __DIR__. '/main_page_footer.php' ?>
<?php include __DIR__. '/__script.php' ?>
<script src="js/lodash.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
var products = ""
var brand = ""

$('.loading').hide()
$('.start_game').click(function() {
    $('.game_start').addClass("d-none")
    $('.Q1').addClass("d-block")
});

$('.answer1').click(function() {
    if ($(this).hasClass("mouse")) {
        products = "1"
    } else if ($(this).hasClass("keyboard")) {
        products = "2"
    } else if ($(this).hasClass("ear")) {
        products = "3"
    }
    $('.Q1').removeClass('d-block')
    $('.Q2').addClass('d-block')

})
$('.answer2').click(function() {
    $('.Q2').removeClass('d-block')
    if ($(this).hasClass('new')) {
        $('.Q3-new').addClass('d-block')
    } else {
        $('.Q3-old').addClass('d-block')
    }
});
$('.answer3-n').click(function() {
    brand = $(this).attr("data-brand")
    $('.Q3-new').removeClass('d-block')
    $('.Q4-new').addClass('d-block')
});
$('.answer3-o').click(function() {
    brand = $(this).attr("data-brand")
    $('.Q3-old').removeClass('d-block')
    $('.Q4-old').addClass('d-block')
});
$('.answer4-n').click(function() {
    $('.Q4-new').removeClass('d-block')
    $('.Q5-new').addClass('d-block')
});
$('.answer4-o').click(function() {
    $('.Q4-old').removeClass('d-block')
    $('.Q5-old').addClass('d-block')
});


var final_container = $(".final_game")
var final_str = `<div class="d-flex justify-content-center col-12">
            <div class="question col-7 px-4 d-flex flex-column justify-content-center">
                <p class="m-0">為您推薦的是...</p>
            </div>
            <div class="GAFOX p-0 col-5">
                <img class="w-50" src="img/FOX/GAFOX6.svg" class="fit-image" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-center text-center m-3">
            <div class="pic_box">
            <p class="GA_final_text w-100"><%= name %></p>
                <a href="product_inner.php?sid=<%= sid %>" class="d-block w-75 mx-auto">
                <img class="fit-image" src="img/product/<%= img %>" alt="">
                </a>
            </div>
        </div>
        <div class="d-flex justify-content-around py-3">
            <button class="game_btn mx-auto w-25 shopping p-2"><a href="product_page.php" class="d-block">看看別的</a></button>
            <button class="game_btn mx-auto w-25 playAgain p-2"><a class="d-block"
                    href="GA_FOX_page.php">再玩一次</a></button>
            <button class="GA_FOX_buy game_btn mx-auto w-25 buying p-2" data-sid="<%= sid %>"><a class="d-block" href="#">加入購物車</a></button>
        </div>`
var final_fn = _.template(final_str)

$('.answer5').click(function() {
    $('.loading').fadeIn().delay(2000).fadeOut()
    setTimeout(function() {
        $('.Q5-old').removeClass('d-block')
        $('.Q5-new').removeClass('d-block')
        $('.final_game').addClass('d-block')
    }, 2000)
    $.post('finalGame_api.php',{products:products,brand:brand},function(data){
        var name = data.rows.products_name
        var img = data.rows.products_img
        var sid = data.rows.sid

        var array = {
            name: name,
            img: img,
            sid: sid,
        }
        final_container.html("")
        final_container.append(final_fn(array));
    },"json")
});
$('html').on('click', '.GA_FOX_buy', function() {
		var sid = $(this).attr('data-sid');
		// console.log(sid)
		$.get('shopping_cart_insert_api.php', {
			sid: sid,
			qty: 1
		}, function(data) {
			swal({
				title: (data.info),
				timer: 1200,
				showConfirmButton: false,
			});
			setTimeout(function() {
				calcQtyReload()
			}, 200);
			$("#decktop_main_nav").removeClass('active')
		}, 'json');
	});
</script>

<?php include __DIR__. '/__html_end.php' ?>