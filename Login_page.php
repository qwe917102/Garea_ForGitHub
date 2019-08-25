<?php require __DIR__ . '/__db_connect.php';

$page_name = 'login';

if (empty($_SERVER['HTTP_REFERER'])) {
   $backToUrl = 'main_page.php';
} else {
   $backToUrl = $_SERVER['HTTP_REFERER'];
}

?>
<?php include __DIR__ . '/main_page_header.php' ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<style>
   .sweet-alert {
      background-color: #211661;
      border-radius: 0;
      font-family: 'Noto Sans TC', sans-serif;
      padding-top: 20px;
   }

   .sweet-alert h2,
   .sweet-alert p {
      color: #ffffff;
   }

   .sweet-alert[data-has-confirm-button=false][data-has-cancel-button=false] {
      padding-bottom: 15px;
   }

   .sweet-alert .sa-success {
      border-bottom-color: #ffffff !important;
   }

   .sweet-alert .sa-success::before,
   .sweet-alert .sa-success::after {
      display: none;
   }

   .sweet-alert .sa-success .sa-placeholder {
      border-color: rgba(165, 220, 134) !important;
   }

   .sweet-alert .sa-success .sa-line .sa-tip,
   .sweet-alert .sa-success .sa-line .sa-long {
      background-color: #ffffff;
      border-radius: 1px;
   }

   .sweet-alert .sa-icon.sa-success .sa-fix {
      display: none;
   }

   .sweet-alert button.confirm {
      background: #412f8f !important;
      border-radius: 0;
      border: 2px solid #ffffff;
   }
</style>
<!-- body start here↓ -->
<div class="container-fluid pt-2 mt-5 mb-0 pl-0 pl-md-2 pr-0 pr-md-2 pb-5 login_bg parallax_card">
   <div class="mx-md-5 mt-4 mt-md-5 mb-5 mb-md-0">
      <div class="login_page_name col-6 mx-auto">
         <h4 class="mb-2 d-none d-md-block">
            會員登入
         </h4>
         <h5 class="mb-2 d-block d-md-none">
            會員登入
         </h5>
      </div>

      <!-- 放alert -->

      <div class="login_page_tabs mx-auto pb-md-5 pt-3 pt-md-3">
         <div class="login_page_tab_button_outer">
            <ul class="login_page_tab_button" id="login_page_tab_button">
               <li><a href="#tab01">登入</a></li>
               <li><a href="Register_page.php">註冊</a></li>
            </ul>
         </div>
         <div id="tab01" class="login_page_tab_contents login_page_tab01">

            <div class="login_page_slogan">
               <div class="mt-4 d-none d-md-flex align-items-center flex-column">
                  <h4>
                     為電競而生，以勝利為前提
                  </h4>
                  <p>
                     ＂Gaming Area＂永遠為玩家提供最好的
                  </p>
               </div>
               <div class="mt-4 d-flex d-md-none align-items-center flex-column">
                  <h5>
                     為電競而生，以勝利為前提
                  </h5>
                  <p>
                     ＂Gaming Area＂永遠為玩家提供最好的
                  </p>
               </div>
            </div>

            <form id="login_page_form" class="form pl-md-3 mt-3 mt-md-4" method="post" onsubmit="return checkForm()">
               <div class="form-group">
                  <!-- 桌機版 -->
                  <div class="d-flex flex-column flex-md-row justify-content-center">
                     <label for="email" class="col-5 col-sm-3 col-md-3 col-lg-3 ml-md-0 pl-2 pl-md-0 pr-2 pr-md-0 mt-1">電子信箱</label>
                     <div class="col-12 col-sm-12 col-md-8 col-lg-8 ml-md-0 pl-2 pl-md-0 pr-2 pr-md-1">
                        <input type="text" class="form-control" id="login_email" placeholder="請輸入Email" name="email" value="">
                        <small class="form-text"></small>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="d-flex flex-column flex-md-row justify-content-center">
                     <label for="password" class="col-5 col-sm-3 col-md-3 col-lg-3 ml-md-0 pl-2 pl-md-0 pr-2 pr-md-0">密碼</label>
                     <div class="col-12 col-sm-12 col-md-8 col-lg-8 ml-md-0 pl-2 pl-md-0 pr-2 pr-md-1">
                        <input type="password" class="form-control" id="login_password" placeholder="請輸入密碼" name="password">
                        <small class="form-text"></small>
                     </div>
                  </div>
               </div>
               <!-- 手機版checkbox -->
               <div class="form-check-mobile d-block d-md-none mt-3">
                  <label class="form-check-label">
                     <input type="checkbox" class="form-check-input" name="form-check" checked>
                     保持登入
                  </label>
               </div>
               <!-- 登入按鈕 -->
               <div class="d-flex justify-content-center mx-2 mt-0 mt-md-3 pt-3 mb-3 login_submit">
                  <button id="login_submitBtn" type="submit" class="btn btn-block btn-dark">登入</button>
               </div>
               <!-- 桌機版checkbox & 忘記密碼 -->
               <div class="d-none d-md-flex justify-content-between align-items-center desk_forget_pw mx-3 mt-3">
                  <!-- checkbox -->
                  <div class="form-check d-none d-md-block ml-1">
                     <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="form-check" id="login_checkbox" value="<?= $row['sid'] ?>" checked>
                        保持登入
                     </label>
                  </div>
                  <!-- 忘記密碼 -->
                  <div class="d-none d-md-block">
                     <!-- trigger的跳出視窗 -->
                     <button type="button" class="btn btn-none pr-0 text-white" data-toggle="modal" data-target="#exampleModalCenter">
                        忘記密碼？
                     </button>

                     <!-- 跳出視窗 -->
                     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header text-white">
                                 <h5 class="modal-title" id="exampleModalLongTitle">找回密碼</h5>
                                 <button type="button" class="close text-white ml-0" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body text-white">
                                 <div class="form-group d-flex justify-content-center align-items-center">
                                    <div class="mr-3">
                                       <i class="fas fa-envelope"></i>
                                    </div>
                                    <input type="text" class="form-control" id="find_email" placeholder="請輸入Email" value="">
                                    <small class="form-text"></small>
                                 </div>
                              </div>
                              <div class="modal-footer py-4 d-flex justify-content-around text-white">
                                 <button type="button" class="btn btn-block btn-dark">找回密碼</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- 手機版忘記密碼 -->
               <div class="d-flex d-md-none justify-content-start mobile_forgetPw ml-1 pl-1 mb-4">
                  <a href="mobile_find_password.php" class="text-decoration-none text-white">忘記密碼？</a>
               </div>

            </form>

         </div>
         <div id="tab02" class="login_page_tab_contents login_page_tab02"></div>
      </div>
   </div>
</div>

<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
   // 傳送登入表單
   var backToUrl = '<?= $backToUrl ?>';
   var submitBtn = $('#login_submitBtn');
   var $email = $('#login_email');
   var $password = $('#login_password');
   var fields = [$email, $password];

   function validateEmail(email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(String(email).toLowerCase());
   }

   // 前端檢查
   function checkForm() {
      // 先回復到原來的狀態
      fields.forEach(function(val) {
         val.next().text('');
      });

      submitBtn.hide();

      var isPass = true; // 表單是否有通過檢查

      if (!validateEmail($email.val())) {
         isPass = false;
         $email.next().text('請輸入正確的Email格式');
      }

      // ↓密碼只能是數字、英文字母且8個以上的字元
      if (!((($password.val() >= 'a' && $password.val() <= 'z') || ($password.val() >= '0' && $password.val() <= '9'))) ||
         ($password.val().length < 8)) {
         isPass = false;
         $password.next().text('密碼須大於8個字元且須由數字及英文字母組成');
      }

      // 登入成功後的回應頁面(跳轉回上次瀏覽頁)
      if (isPass) {
         $.post('login_api.php', $('#login_page_form').serialize(), function(data) {
            // console.log(data);

            if (data.success) {
               swal({
                  title: '歡迎回來',
                  // text: '將於2秒後跳轉回上次瀏覽頁面',
                  type: 'success',
                  showConfirmButton: false,
                  timer: 1500
               });

               setTimeout(function() {
                  location.href = 'main_page.php';
               }, 1600);
            } else {
               swal({
                  title: '登入失敗',
                  text: '帳號或密碼錯誤，請重新輸入',
                  type: 'error',
                  showConfirmButton: false,
                  timer: 1500
               });

               setTimeout(function() {
                  location.reload();
                  // 自動刷新頁面
               }, 1600);
            }
         }, 'json');
      }
      submitBtn.show();

      return false;
   };

   // 頁籤控制
   $(function() {
      var $tabButtonItem = $('#login_page_tab_button li'),
         $tabContents = $('.login_page_tab_contents'),
         activeClass = 'is-active';
      $tabButtonItem.first().addClass(activeClass);
      $tabContents.not(':first').hide();
   });
</script>

<?php require __DIR__ . '/__html_end.php' ?>