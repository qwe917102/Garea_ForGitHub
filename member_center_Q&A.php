<?php require __DIR__ . '/__db_connect.php' ?>

<?php include __DIR__ . '/main_page_header.php' ?>

<!-- body start here↓ -->
<div class="container-fluid pt-5 mb-0 pl-0 pl-md-2 pr-0 pr-md-2 pb-5 parallax">
   <div class="mx-md-5 mt-4 mt-md-5">
      <div class="member_center_page_name col-6 mx-auto">
         <h4 class="mb-2 d-none d-md-block">
            會員中心
         </h4>
         <h5 class="mb-2 d-flex d-md-none justify-content-center">
            會員中心
         </h5>
      </div>

      <div class="member_center_page_name col-6 mx-auto">
         <h4 class="mb-2 d-none d-md-flex member_nickname_title">
            <a class="dropdown-item member_nickname p-0" id="my_nickname">Hi！<?= $_SESSION['loginUser']['nickname'] ?></a>
            <a class="dropdown-item member_nickname member_logout p-0 ml-3" href="Log_out.php">[登出]</a>
         </h4>
         <h5 class="mb-2 d-flex d-md-none member_nickname_title justify-content-center">
            <a class="dropdown-item member_nickname p-0 ml-5" id="my_nickname">Hi！<?= $_SESSION['loginUser']['nickname'] ?></a>
            <a class="dropdown-item member_nickname member_logout p-0 text-left ml-3" href="Log_out.php">[登出]</a>
         </h5>
      </div>

      <div class="member_center_tabs mx-auto pb-md-5 pt-3 pt-md-3">
         <div class="member_center_tab_button_outer">
            <ul class="member_center_tab_button" id="member_page_tab_button">
               <li><a href="member_center_page.php">會員資料</a></li>
               <li><a href="member_center_wish_list.php">收藏清單</a></li>
               <li><a href="member_center_order_list.php">訂單查詢</a></li>
               <li><a href="member_center_Q&A.php">常見問題</a></li>
            </ul>
         </div>
         <div id="tab01" class="member_center_tab_contents member_center_tab01"></div>
         <div id="tab02" class="member_center_tab_contents member_center_tab02"></div>
         <div id="tab03" class="member_center_tab_contents member_center_tab03 px-3 px-md-5 px-sm-4"></div>
         <div id="tab04" class="member_center_tab_contents member_center_tab04 px-2 px-md-5">
            <h4 class="mt-2 pt-md-3 d-none d-md-block">常見問題</h4>
            <h5 class="mt-2 pt-md-3 ml-2 ml-md-5 pl-4 pl-md-4 d-block d-md-none">常見問題</h5>
            <div class="q_and_a row d-flex mx-auto mt-4 mb-4">
               <!-------- 會員問題 -------->
               <div class="accordion col-12 px-0 px-md-5" id="accordionQuestion">
                  <div class="card">
                     <div class="card-header" id="headingOne">
                        <button type="button" class="btn btn-link text-white text-decoration-none col d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOne">
                           <p class="mb-0">會員問題</p>
                           <i class="fa fa-plus"></i>
                        </button>
                     </div>
                     <div id="collapseOne" class="collapse show collapse_textcolor" aria-labelledby="headingOne" data-parent="#accordionQuestion">
                        <div class="card-body text-left ml-3">
                           <p>Q1、該如何加入會員呢？</p>
                           <br>
                           <p>A、請您點選右上角「登入」後，於註冊頁面填上您的個人資料進行驗證，完成後再行登入即可成為會員。</p>
                           <div class="dash_line mt-3 p-0 mb-3"></div>
                           <p>Q2、忘記登入的會員帳號？</p>
                           <br>
                           <p>A、煩請直接與客服中心聯繫。</p>
                           <div class="dash_line mt-3 p-0 mb-3"></div>
                           <p>Q3、該如何修改個人資料及密碼？</p>
                           <br>
                           <p>A、請「會員登入」後至會員中心內的「修改個人資料」即可進行變更。</p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-------- 訂單問題 -------->
               <div class="accordion col-12 px-0 px-md-5" id="accordionQuestion01">
                  <div class="card">
                     <div class="card-header" id="headingTwo">
                        <button type="button" class="btn btn-link text-white text-decoration-none col d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseTwo">
                           <p class="mb-0">訂單問題</p>
                           <i class="fa fa-plus"></i>
                        </button>
                     </div>
                     <div id="collapseTwo" class="collapse collapse_textcolor" aria-labelledby="headingTwo" data-parent="#accordionQuestion01">
                        <div class="card-body text-left ml-3">
                           <p>Q1、如何確認所購買的商品訂單是否成立?</p>
                           <br>
                           <p>A、請您登入帳號後，進入會員中心:選擇訂單相關-訂單查詢，即可查詢訂單明細</p>
                           <div class="dash_line mt-3 p-0 mb-3"></div>
                           <p>Q2、如何查詢我的訂單資料呢？</p>
                           <br>
                           <p>A、請登入本站後，於「會員中心」的「訂單相關」，即可查詢到已成立的訂單資訊。</p>
                           <div class="dash_line mt-3 p-0 mb-3"></div>
                           <p>Q3、訂購時忘了加購商品，請問可以再追加嗎？</p>
                           <br>
                           <p>A、未完成付款者，請重新訂購即可。但已付款者，因受限銀行系統及作業規定，請恕無法再行追加，此時請至本網站另行添購。</p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-------- 付款問題 -------->
               <div class="accordion col-12 px-0 px-md-5" id="accordionQuestion02">
                  <div class="card">
                     <div class="card-header" id="headingThree">
                        <button type="button" class="btn btn-link text-white text-decoration-none col d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseThree">
                           <p class="mb-0">付款問題</p>
                           <i class="fa fa-plus"></i>
                        </button>
                     </div>
                     <div id="collapseThree" class="collapse collapse_textcolor" aria-labelledby="headingThree" data-parent="#accordionQuestion02">
                        <div class="card-body text-left ml-3">
                           <p>Q1、請問付款方式有哪些？有匯款、貨到付款、支票和現金嗎？</p>
                           <br>
                           <p>A、本站付款方式為「信用卡」、「貨到付款」、「超商取貨付款」。目前尚無臨櫃匯款、支票和現金等方式。</p>
                           <div class="dash_line mt-3 p-0 mb-3"></div>
                           <p>Q2、VISA金融卡 (Visa Debit) 可以使用「信用卡分期」付款嗎？</p>
                           <br>
                           <p>A、VISA金融卡 (Visa Debit) 刷卡時即時由存款帳戶扣款，而信用卡則是先消費後付款，兩者的付款概念不同，因此VISA金融卡無法使用「信用卡分期」付款。</p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-------- 退貨/款問題 -------->
               <div class="accordion col-12 px-0 px-md-5" id="accordionQuestion03">
                  <div class="card">
                     <div class="card-header" id="headingFour">
                        <button type="button" class="btn btn-link text-white text-decoration-none col d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseFour">
                           <p class="mb-0">退貨/款問題</p>
                           <i class="fa fa-plus"></i>
                        </button>
                     </div>
                     <div id="collapseFour" class="collapse collapse_textcolor" aria-labelledby="headingFour" data-parent="#accordionQuestion03">
                        <div class="card-body text-left ml-3">
                           <p>Q1、請問退款方式有哪些？有匯款、貨到退款、支票和現金嗎？</p>
                           <br>
                           <p>A、本站退款方式為「信用卡」、「貨到退款」、「超商取貨退款」。目前尚無臨櫃匯款、支票和現金等方式。</p>
                           <div class="dash_line mt-3 p-0 mb-3"></div>
                           <p>Q2、VISA金融卡 (Visa Debit) 可以使用「信用卡分期」付款嗎？</p>
                           <br>
                           <p>A、VISA金融卡 (Visa Debit) 刷卡時即時由存款帳戶扣款，而信用卡則是先消費後付款，兩者的付款概念不同，因此VISA金融卡無法使用「信用卡分期」付款。</p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-------- 發票問題 -------->
               <div class="accordion col-12 px-0 px-md-5" id="accordionQuestion04">
                  <div class="card">
                     <div class="card-header" id="headingFive">
                        <button type="button" class="btn btn-link text-white text-decoration-none col d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseFive">
                           <p class="mb-0">發票問題</p>
                           <i class="fa fa-plus"></i>
                        </button>
                     </div>
                     <div id="collapseFive" class="collapse collapse_textcolor" aria-labelledby="headingFive" data-parent="#accordionQuestion04">
                        <div class="card-body text-left ml-3">
                           <p>Q1、如何選擇開立三聯電子發票？該如何取得紙本或成為會計憑證報帳？</p>
                           <br>
                           <p>A、請在結帳流程中的「發票資訊」處，選擇三聯電子發票並填寫統一編號。
                              <br>您可於出貨後24小時至【訂單查詢】中下載開立的發票，該三聯電子發票證明聯，即為會計憑證，亦可透過此單據向公司報帳進行核銷(可直接黏貼於傳票上)，相關說明，請參考財政部。</p>
                           <div class="dash_line mt-3 p-0 mb-3"></div>
                           <p>Q2、使用電子發票，會有人通知我中獎嗎？電子發票如何兌領獎？</p>
                           <br>
                           <p>A、「二聯式電子發票」每逢單月26日將由財政部自動對獎（已索取紙本／已捐贈／已作廢發票除外），並於單月28日產生中獎清冊供營業人下載索取。</p>
                        </div>
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
   // 頁籤控制
   $(function() {
      var $tabButtonItem = $('#member_page_tab_button li'),
         $tabContents = $('.member_center_tab_contents'),
         activeClass = 'is-active';
      $tabButtonItem.eq(3).addClass(activeClass);
      $tabContents.not(':eq(3)').hide();
   });

   // 訂單手機版手風琴
   $(document).ready(function() {
      // Add minus icon for collapse element which is open by default
      $(".collapse.show").each(function() {
         $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
      });

      // Toggle plus minus icon on show hide of collapse element
      $(".collapse").on('show.bs.collapse', function() {
         $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
      }).on('hide.bs.collapse', function() {
         $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
      });
   });
</script>

<?php require __DIR__ . '/__html_end.php' ?>