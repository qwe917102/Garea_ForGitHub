<?php require __DIR__ . '/__db_connect.php';

$page_name = 'report_record_page';

$sql = "SELECT * FROM `report_problem` WHERE `belong`=" . intval($_SESSION['loginUser']['sid']);

$stmt = $pdo->query($sql);
$row = $stmt->fetchAll();

?>

<?php include __DIR__ . '/main_page_header.php' ?>
<div class="container-fluid pt-3 mb-0 pl-0 pl-md-2 pr-0 pr-md-2 pb-5 parallax_card">
   <div class="mx-md-5 mt-4 mt-md-5 mb-5 mb-md-0">
      <div class="report_tabs my-5 pt-5 w-100 mx-auto">
         <div class="report_tab_button_outer">
            <ul class="report_tab_button" id="report_tab_button">
               <li><a href="report_page.php">問題回報</a></li>
               <li><a href="#report_tab02">回報紀錄</a></li>
            </ul>
         </div>
         <div id="report_tab01" class="report_tab_contents report_tab01 pb-4">
            <!-- <div class="cursor_default">
               <p class="py-3 step_payment_spacing m-0">注意事項</p>
            </div>
            <div class="step_product_bgc step_border">
               <div class="p-3 ">
                  <p class="m-0 small_text">
                     回報單填寫送出後，將按照建單時間依序處理，客服回覆後系統會自動寄出通知信至註冊信箱，還請您耐心等候，如要查詢案件進度與回覆內容，請從「回報單記錄」查閱。
                     <br>為了迅速處理您的案件，請勿重複填單哦!回報單欄位請確實詳細填寫，以便我們協助您處理，處理時間因回報單內容而有所不同，還請您耐心等候!
                     <br>客服回覆後，若是超過一個月仍未收到您的回應，系統將會自動結案。已解決、結案的回報單無法再做回應，若有任何疑問請重新填單，感謝您的配合!</p>
               </div>
            </div>
            <div class="cursor_default">
               <p class="py-3 step_payment_spacing m-0">填寫回報單</p>
            </div>
            <div class="step_product_bgc step_border w-100 p-4">

               <form id="report_list" class="w-100" method="post" onsubmit="return checkForm()">
                  <div class="w-100 py-1">
                     <label for="type_of_problem" class="py-2 step_payment_spacing m-0">問題分類</label>
                     <select name="type_of_problem" class="step_store w-100" id="type_of_problem">
                        <option value="">選擇問題種類</option>
                        <option value="1">帳號問題</option>
                        <option value="2">購買問題</option>
                        <option value="3">其他問題</option>
                     </select>
                  </div>
                  <div class="w-100 py-1">
                     <label for="problem_detail" class="py-2 step_payment_spacing m-0">問題細項</label>
                     <select name="problem_detail" class="step_store w-100" id="problem_detail">
                        <option value="">選擇細項類別</option>
                        <option value="1">帳號無法登入</option>
                        <option value="2">忘記會員密碼</option>
                        <option value="3">帳號安全問題</option>
                     </select>
                  </div>
                  <div class="w-100 py-3">
                     <label for="status_statement" class="py-2 step_payment_spacing m-0 w-100">狀況概述</label>
                     <textarea name="status_statement" id="status_statement" cols="30" rows="10" class="w-100"></textarea>
                     <small class="form-text"></small>
                  </div>
                  <div class="container">
                     <div class="row m-0 justify-content-around">
                        <button type="reset" class="d-block py-2 step_cancel_bgc step_border text-white col-5 col-sm-4 col-md-3 col-lg-2">清除重填</button>
                        <button id="report_submitBtn" type="submit" class="d-block py-2 step_cancel_bgc step_border text-white col-5 col-sm-4 col-md-3 col-lg-2">確認送出</button>
                     </div>
                  </div>
               </form>

            </div> -->
         </div>
         <div id="report_tab02" class="report_tab_contents report_tab02">

            <?php if (empty($row)) : ?>
            <div class="row mr-2 my-3">
               <h4 class="d-none d-md-block mt-5 pt-5 mx-auto">您尚無回報紀錄</h4>
               <h5 class="d-block d-md-none mt-5 pt-5 mx-auto">您尚無回報紀錄</h5>
               <!-- <div class="mt-5 pt-5 pt-md-5 d-flex justify-content-center">
                  <button id="submitBtn_emptyWishlist" type="submit" class="btn btn-lg btn-dark mt-5 px-3 py-2 d-none d-md-block">
                     <a href="product_page.php" class="text-decoration-none text-white">
                        趕快去逛逛
                     </a></button>
               </div>
               <div class="pt-3 pt-md-5 d-flex justify-content-center">
                  <button id="submitBtn_emptyWishlist" type="submit" class="btn btn-md btn-dark px-3 py-2 d-block d-md-none">
                     <a href="product_page.php" class="text-decoration-none text-white">
                        趕快去逛逛
                     </a></button>
               </div> -->
            </div>
            <?php endif ?>

            <?php foreach ($row as $r) : ?>
            <div class="row mr-2 my-3">
               <div class="p-2 m-0 col-12 d-flex justify-content-between align-items-center report_history_card_bg1">
                  <p class="m-0 p-3">
                     2019-08-20
                  </p>
                  <div class="m-0 py-2 px-3">
                     <p class="m-0 p-2 bg-dark report_history_card_btn d-block">
                        未回覆
                     </p>
                  </div>
               </div>
               <div class="p-2 col-12 report_history_card_bg2">
                  <p class="m-0 p-2">
                     [<?php switch ($r['typeProblem']) {
                              case '1':
                                 echo "帳號問題";
                                 break;
                              case '2':
                                 echo "購買問題";
                                 break;
                              case '3':
                                 echo "其他問題";
                                 break;
                           } ?>]
                     [<?php switch ($r['problemDetail']) {
                              case '1':
                                 echo "帳號無法登入";
                                 break;
                              case '2':
                                 echo "忘記會員密碼";
                                 break;
                              case '3':
                                 echo "帳號安全問題";
                                 break;
                           } ?>]
                     <?= $r['statusStatement'] ?>
                  </p>
               </div>
            </div>
            <?php endforeach; ?>
            <!-- <div class="row mr-2 my-3">
               <div class="p-2 m-0 col-12 d-flex justify-content-between align-items-center report_history_card_bg1">
                  <p class="m-0 p-3">
                     2019-08-01
                  </p>
                  <div class="m-0 py-2 px-3">
                     <p class="m-0 p-2 bg-dark report_history_card_btn d-block">
                        未回覆
                     </p>
                  </div>
               </div>
               <div class="p-2 col-12 report_history_card_bg2">
                  <input class="m-0 p-2">
               </div>
            </div>
            <div class="row mr-2 my-3">
               <div class="p-2 m-0 col-12 d-flex justify-content-between align-items-center report_history_card_bg1">
                  <p class="m-0 p-3">
                     2019-07-23
                  </p>
                  <div class="m-0 py-2 px-3">
                     <p class="m-0 p-2 bg-dark report_history_card_btn d-block">
                        未回覆
                     </p>
                  </div>
               </div>
               <div class="p-2 col-12 report_history_card_bg2">
                  <p class="m-0 p-2">
                     【帳號問題】忘記會員密碼
                  </p>
               </div>
            </div> -->
         </div>
      </div>
   </div>
</div>

<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<script>
   // 頁籤控制
   $(function() {
      var $tabButtonItem = $('#report_tab_button li'),
         $tabContents = $('.report_tab_contents'),
         activeClass = 'is-active';
      $tabButtonItem.eq(1).addClass(activeClass);
      $tabContents.not(':eq(1)').hide();
      // $tabButtonItem.find('a').on('click', function(e) {
      //    var target = $(this).attr('href');

      //    $tabButtonItem.removeClass(activeClass);
      //    $(this).parent().addClass(activeClass);
      //    $tabContents.hide();
      //    $(target).show();
      //    e.preventDefault();
      // });
   });
</script>

<?php require __DIR__ . '/__html_end.php' ?>