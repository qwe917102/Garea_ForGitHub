<?php require __DIR__ . '/__db_connect.php';
$sql = " SELECT * FROM `channel_replay_list` WHERE 1 ";
$stmt = $pdo->query($sql);
$rows = $stmt->fetchAll();
?>
<?php include __DIR__ . '/main_page_header.php' ?>

<style>
    /* .GA_container{
        max-width:1440px;
        margin:0 auto;
    } */
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
    .Game_tabs {
        /* max-width: 1140px; */
        margin: 0 auto;
        padding: 0 20px;
    }

    .Game_tabs .red_circle {
        width: 15px;
        height: 15px;
        /* 正圓形，所以寬與高都設一樣 */
        border-radius: 999em;
        background-color: red;
    }

    .Game_tabs .logo_lol {
        width: 97%;
    }

    .Game_tabs .logo_pubg {
        width: 101%;
    }

    .Game_tabs .logo_overwatch {
        width: 70%;
    }

    .Game_tab-button {
        display: table;
        table-layout: fixed;
        width: 50%;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .Game_tab-button p {
        font-size: 1.2em;
    }

    .Game_tab-button li {
        display: table-cell;
    }

    .Game_tab-button li a {
        display: block;
        padding: .5em;
        background: rgba(113, 101, 167, 0.445);
        text-align: center;
        color: #7165A7;
        text-decoration: none;
        width: 100%;
        margin: 0;
        transition: .3s;
        cursor: pointer;
    }

    .Game_tab-button li a:hover,
    .Game_tab-button .is-active a {
        border-bottom-color: transparent;
        background: #7165A7;
        ;
    }

    .Game_tab-button .active {
        color: #fff;
        background: #7165A7;
    }


    .Game_tab-contents {
        width: 100%;
        background-color: #1C162A;
        padding: .5em 1em 0.5em 1em;
        /* margin-top: 20px; */
        position: relative;
        margin-top: 0;
    }


    .Game_tab-button-outer {
        position: relative;
        z-index: 2;
        display: block;
    }

    .Game_Title {
        letter-spacing: 0.2em;
    }

    .channel_vedio_link {
        color: #ccc;
        text-align: center;
        /* transition:.3s; */
    }

    .channel_vedio_linka:visited,
    .channel_vedio_link:hover {
        text-decoration: none;
        color: #A8FF8A;
    }

    .channel_img_rwd {
        height: auto;
        max-width: 80%;
    }

    #vedio_btnA,
    #vedio_btnB {
        cursor: pointer;
    }

    .vedio_box {
        width: 260px;
    }

    /* 手機板/ */
    .Game_M_tab-button-outer {
        position: relative;
        z-index: 2;
        display: block;
        background-color: #413E53;
    }

    .Game_M_tab-button {
        display: table;
        table-layout: fixed;
        width: 50%;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .Game_M_tab-button p {
        font-size: 1.2em;
    }

    .Game_M_tab-button li {
        display: table-cell;
    }

    .Game_M_tab-button li a {
        display: block;
        padding: .5em;
        /* background: rgba(113, 101, 167, 0.445); */
        text-align: center;
        color: #7165A7;
        text-decoration: none;
        width: 100%;
        margin: 0;
        /* transition: .3s; */
        cursor: pointer;
    }

    .Game_M_tab-button .active a {
        color: #fff;
        background: #7165A7;
    }

    .Game_M_tab-contents {
        width: 100%;
        background-color: #1C162A;
        padding: .5em 1em 0.5em 1em;
    }

    .channel_M_img_rwd {
        height: auto;
        max-width: 100%;
    }

    .vedio_box_M {
        max-width: 460px;
    }

    .channel_M_link {
        color: #ccc;
        text-align: center;
        flex-direction: column;
        /* transition:.3s; */
    }

    .channel_M_link p {
        font-size: 1.2em;
    }

    .channel_M_link a:visited,
    .channel_M_link:hover {
        text-decoration: none;
        color: #A8FF8A;
    }
</style>
<!-- 從這裡開始 -->
<div class="container-fluid overflow-hidden mb-5 pt-3 px-0">
    <div class="GA_phone row d-block d-md-none mt-5">
        <div class="GA_title_mobile col-12">
            <p class="middle_text py-2 pl-2 ">賽事回顧</p>
        </div>
    </div>
    <div class="mt-4 px-3 d-block d-md-none">
        <div class="Game_M_tab-button-outer d-flex p-0 m-0 row col-12">
            <ul class="Game_M_tab-button col-12">
                <li class="active col-xs-4">
                    <a class="d-block d-md-none">
                        <p class="m-0">英雄聯盟</p>
                    </a>
                </li>
                <li class="col-xs-4">
                    <a class="d-block d-md-none">
                        <p class="m-0">絕地求生</p>
                    </a>
                </li>
                <li class="col-xs-4">
                    <a class="d-block d-md-none">
                        <p class="m-0">鬥陣特攻</p>
                    </a>
                </li>
            </ul>
        </div>
        <div id="Game_tab01" class="Game_M_tab-contents text-white mx-0 p-3 channel_replay d-block d-md-none row col-12">
            <div class="d-flex flex-wrap justify-content-around">
                <?php foreach ($rows as $r) : ?>
                <div class="align-items-center vedio_box_M p-2
                    <?php switch ($r['game']) {
                            case "lol":
                                echo "lol";
                                break;
                            case "pubg":
                                echo "pubg";
                                break;
                            case "over":
                                echo "over";
                                break;
                        }
                        ?>">
                    <a class="channel_M_link d-flex " href="Channel_replay_inner_page.php">
                        <img data-id="<?= $r['data-id'] ?>" class=" channel_M_img_rwd p-2" src="<?= $r['src'] ?>" alt="">
                        <p class="p-3  m-0"><?= $r['title'] ?></p>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- 桌機板 -->
    <div class="container mt-md-5 pt-md-5 d-none d-md-block">
        <div class="GA_title_line d-none d-md-block"></div>
        <div class="GA_title px-5 d-none d-md-block">
            <p class="py-2">賽事回顧</p>
        </div>
        <div class="Game_tabs mt-4 p-0">
            <div class="Game_tab-button-outer d-flex row">
                <div class="Game_tab-button-outer d-flex justify-content-md-end p-0 pr-md-3 col-12 ">
                    <ul class="Game_tab-button col-md-6 col-12 px-md-0 px-3">
                        <li class="active col-xs-4">
                            <a class="d-none d-md-block">
                                <img class="fit-image logo_lol" src="img/League_of_Legends_Logo_Taiwan.png" alt="">
                            </a>
                            <a class="d-block d-md-none">
                                <p class="m-0">英雄聯盟</p>
                            </a>
                        </li>
                        <li class="col-xs-4">
                            <a class="d-none d-md-block">
                                <img class="fit-image logo_pubg" src="img/kisspng-playerunknown-s-battlegrounds-xbox-360-video-game-5b14a16712ea44.5143315615280786950775.png" alt="">
                            </a>
                            <a class="d-block d-md-none">
                                <p class="m-0">絕地求生</p>
                            </a>
                        </li>
                        <li class="col-xs-4">
                            <a class="d-none d-md-block">
                                <img class="fit-image logo_overwatch" src="img/Overwatch.svg" alt="">
                            </a>
                            <a class="d-block d-md-none">
                                <p class="m-0">鬥陣特攻</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div id="Game_tab01" class="Game_tab-contents text-white mb-4 p-md-3 channel_replay">
            <div class="d-flex flex-wrap justify-content-around">
                <?php foreach ($rows as $r) : ?>
                <div class="align-items-center vedio_box p-md-2
                    <?php switch ($r['game']) {
                            case "lol":
                                echo "lol";
                                break;
                            case "pubg":
                                echo "pubg";
                                break;
                            case "over":
                                echo "over";
                                break;
                        }
                        ?>">
                    <a class="channel_vedio_link d-block " href="Channel_replay_inner_page.php">
                        <img data-id="<?= $r['data-id'] ?>" class="list_lolvedio1 channel_img_rwd" src="<?= $r['src'] ?>" alt="">
                        <p class="mt-md-1 p-md-3"><?= $r['title'] ?></p>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<script>
    $(".pubg").hide()
    $(".over").hide()

    $(".Game_tab-button li").click(function() {
        var num = $(this).index()
        console.log(num)
        if (num == 0) {
            $(".lol").show()
            $(".vedio_box").not(".lol").hide()
        } else if (num == 1) {
            $(".pubg").show()
            $(".vedio_box").not(".pubg").hide()
        } else if (num == 2) {
            $(".over").show()
            $(".vedio_box").not(".over").hide()
        }
        $(this).addClass("active").siblings().removeClass("active");
    })

    $(".Game_M_tab-button li").click(function() {
        var num = $(this).index()
        console.log(num)
        if (num == 0) {
            $(".lol").show()
            $(".vedio_box_M").not(".lol").hide()
        } else if (num == 1) {
            $(".pubg").show()
            $(".vedio_box_M").not(".pubg").hide()
        } else if (num == 2) {
            $(".over").show()
            $(".vedio_box_M").not(".over").hide()
        }
        $(this).addClass("active").siblings().removeClass("active");
    })
</script>

<?php include __DIR__ . '/__html_end.php' ?>