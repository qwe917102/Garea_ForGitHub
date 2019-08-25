<?php require __DIR__ . '/__db_connect.php' ?>

<?php include __DIR__ . '/main_page_header.php' ?>
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
      padding-bottom: 15px;
   }

   .sweet-alert button.confirm {
      background: #412f8f !important;
      border-radius: 0;
      border: 2px solid #ffffff;
   }
</style>
<div class="container-fluid pt-3 mb-0 pl-0 pl-md-2 pr-0 pr-md-2 pb-5 parallax_card">
   <div class="mx-md-5 mt-4 mt-md-5 mb-5 mb-md-0">
      <div class="report_tabs my-5 pt-5 w-100 mx-auto">
         <div class="report_tab_button_outer">
            <ul class="report_tab_button" id="report_tab_button">
               <li><a href="#report_tab01">問題回報</a></li>
               <li><a href="report_record_page.php">回報紀錄</a></li>
            </ul>
         </div>
         <div id="report_tab01" class="report_tab_contents report_tab01 pb-4">
            <div class="cursor_default">
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

               <form id="report_list" class="w-100 report_list" method="post" onsubmit="return false">
                  <div class="w-100 py-1">
                     <label for="type_of_problem" class="py-2 step_payment_spacing m-0">問題分類</label>
                     <select name="type_of_problem" class="step_store w-100" id="type_of_problem">
                        <option value="" disabled selected hidden>選擇問題種類</option>
                        <option value="1">帳號問題</option>
                        <option value="2">購買問題</option>
                        <option value="3">其他問題</option>
                     </select>
                     <small class="form-text"></small>
                  </div>
                  <div class="w-100 py-1">
                     <label for="problem_detail" class="py-2 step_payment_spacing m-0">問題細項</label>
                     <select name="problem_detail" class="step_store w-100" id="problem_detail">
                        <option value="" disabled selected hidden>選擇細項類別</option>
                        <option value="1">帳號無法登入</option>
                        <option value="2">忘記會員密碼</option>
                        <option value="3">帳號安全問題</option>
                     </select>
                     <small class="form-text"></small>
                  </div>
                  <div class="w-100 py-3">
                     <label for="status_statement" class="py-2 step_payment_spacing m-0 w-100">狀況概述</label>
                     <textarea name="status_statement" id="status_statement" cols="30" rows="10" class="w-100"></textarea>
                     <small class="form-text"></small>
                  </div>
                  <div class="container">
                     <div class="row m-0 justify-content-around">
                        <button role="button" type="reset" class="d-block py-2 step_cancel_bgc step_border text-white col-5 col-sm-4 col-md-3 col-lg-2">清除重填</a>

                           <button id="report_submitBtn" type="submit" class="report_submitBtn d-block py-2 step_cancel_bgc step_border text-white col-5 col-sm-4 col-md-3 col-lg-2">
                              <a class="text-decoration-none text-white" <?= isset($_SESSION['loginUser']) ? '' : 'href = "javascript:alert_login()"' ?>>確認送出</a>
                           </button>
                     </div>
                  </div>
               </form>

            </div>
         </div>
         <div id="report_tab02" class="report_tab_contents report_tab02">
            <div class="row mr-2 my-3">
               <div class="p-2 m-0 col-12 d-flex justify-content-between align-items-center report_history_card_bg1">
                  <p class="m-0 p-3">
                     2019-08-12
                  </p>
                  <div class="m-0 py-2 px-3">
                     <p class="m-0 p-2 bg-dark report_history_card_btn d-block">
                        未回覆
                     </p>
                  </div>
               </div>
               <div class="p-2 col-12 report_history_card_bg2">
                  <p class="m-0 p-2">
                     【帳號問題】會員帳號無法登入
                  </p>
               </div>
            </div>
            <div class="row mr-2 my-3">
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
                  <p class="m-0 p-2">
                     【購買問題】商品購買錯誤
                  </p>
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
            </div>
         </div>
      </div>
   </div>
</div>

<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
   // 頁籤控制
   $(function() {
      var $tabButtonItem = $('#report_tab_button li'),
         $tabContents = $('.report_tab_contents'),
         activeClass = 'is-active';
      $tabButtonItem.first().addClass(activeClass);
      $tabContents.not(':first').hide();
   });

   var submitBtn = $('#report_submitBtn');
   var $typeProblem = $('#type_of_problem');
   var $problemDetail = $('#problem_detail');
   var $statusStatement = $('#status_statement');
   var fields = [$typeProblem, $problemDetail, $statusStatement];

   // 取下拉式選單的值
   // $("#type_of_problem").change(function() {
   //    var t = $(this).val();
   //    // $('#type_of_problem option[value=C]').attr('selected', 'selected');
   //    // alert(t)
   // })
   // $("#problem_detail").change(function() {
   //    var r = $(this).val();
   //    // $('#problem_detail option[value=C]').attr('selected', 'selected');
   //    // alert(r)
   // })

   // 前端檢查
   $('#report_submitBtn').click(function() {
      fields.forEach(function(val) {
         val.next().text('');
      });

      submitBtn.hide();

      var isPass = true; // 表單是否有通過檢查

      if (!$typeProblem.val()) {
         isPass = false;
         $typeProblem.next().text('未選擇問題分類');
      }

      if (!$problemDetail.val()) {
         isPass = false;
         $problemDetail.next().text('未選擇問題細項');
      }

      if ($statusStatement.val().length < 1) {
         isPass = false;
         $statusStatement.next().text('請輸入您遇到的問題');
      }

      // 資料新增成功後的回應頁面(跳轉到回報紀錄頁)
      if (isPass) {
         $.post('report_api.php', $('#report_list').serialize(), function(data) {
            // console.log(data);

            if (data.success) {
               swal({
                  title: '回報成功',
                  // type: 'success',
                  showConfirmButton: false,
                  timer: 1300
               });

               setTimeout(function() {
                  location.href = 'report_record_page.php';
               }, 1360);
            } else {
               swal({
                  title: '回報失敗',
                  text: '請輸入完整資料',
                  type: 'error',
                  showConfirmButton: false,
                  timer: 1300
               });

               setTimeout(function() {
                  location.reload();
               }, 1360);
            }
         }, 'json');
      }
      submitBtn.show();
   })


   function alert_login() {
      // alert("請先登入會員");
      swal({
         title: '請先登入會員',
         type: 'warning',
         showConfirmButton: false,
         timer: 1200
      });
      // setTimeout(function() {
      //    location.href = 'login_page.php';
      // }, 1250);
   }
</script>
<?php require __DIR__ . '/__html_end.php' ?>