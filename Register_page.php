<?php require __DIR__ . '/__db_connect.php';

$page_name = 'register';

// if (empty($_SERVER['HTTP_REFERER'])) {
//    $backToUrl = './';
// } else {
//    $backToUrl = $_SERVER['HTTP_REFERER'];
// }

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
      <div class="register_page_name col-6 mx-auto">
         <h4 class="mb-2 d-none d-md-block">
            會員註冊
         </h4>
         <h5 class="mb-2 d-block d-md-none">
            會員註冊
         </h5>
      </div>
      <div class="register_page_tabs mx-auto pb-md-5 pt-3 pt-md-3">
         <div class="register_page_tab_button_outer">
            <ul class="register_page_tab_button" id="register_page_tab_button">
               <li><a href="Login_page.php">登入</a></li>
               <li><a href="#tab02">註冊</a></li>
            </ul>
         </div>
         <div id="tab01" class="register_page_tab_contents register_page_tab01"></div>
         <div id="tab02" class="register_page_tab_contents register_page_tab02 pb-5">

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

            <form id="register_page_form" class="form pl-md-1 mt-3" method="post" onsubmit="return checkForm()">
               <div class="form-group">
                  <label for="email" class=""><span class="text-white">*</span>電子信箱</label>
                  <div class="">
                     <input type="text" class="form-control" id="register_email" placeholder="請輸入Email" name="email" value="">
                     <small class="form-text"></small>
                  </div>
               </div>
               <div class="form-group">
                  <label for="nickname" class=""><span class="text-white">*</span>使用者名稱</label>
                  <div class="">
                     <input type="text" class="form-control" id="register_nickname" placeholder="請輸入使用者" name="nickname" value="">
                     <small class="form-text"></small>
                  </div>
               </div>
               <div class="form-group">
                  <label for="password" class=""><span class="text-white">*</span>密碼</label>
                  <div class="">
                     <input type="password" class="form-control" id="register_password" placeholder="請輸入密碼" name="password" value="">
                     <small class="form-text"></small>
                  </div>
               </div>
               <div class="form-group">
                  <label for="password" class=""><span class="text-white">*</span>密碼確認</label>
                  <div class="">
                     <input type="password" class="form-control" id="register_password_check" placeholder="再輸入一次密碼" name="password_check" value="">
                     <small class="form-text"></small>
                  </div>
               </div>
               <div class="form-group">
                  <label for="mobile" class="">電話號碼</label>
                  <div class="">
                     <input type="text" class="form-control" id="register_mobile" placeholder="請輸入電話號碼" name="mobile" value="">
                     <small class="form-text"></small>
                  </div>
               </div>
               <div class="form-group">
                  <label for="address" class="">通訊地址</label>
                  <div class="">
                     <input type="text" class="form-control" id="register_postName" placeholder="請輸入郵遞區號" name="postName">
                     <textarea type="text" class="form-control mt-3" id="register_address" placeholder="請輸入通訊地址" name="address"></textarea>
                  </div>
               </div>
               <!-- 桌機版註冊 -->
               <div class="d-flex justify-content-center mt-5">
                  <button id="register_submitBtn" type="submit" class="btn btn-block btn-dark px-3 py-2">註冊</button>
               </div>
            </form>
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
      var $tabButtonItem = $('#register_page_tab_button li'),
         $tabContents = $('.register_page_tab_contents'),
         activeClass = 'is-active';
      $tabButtonItem.eq(1).addClass(activeClass);
      $tabContents.not(':eq(1)').hide();
   });

   // 傳送註冊表單
   var submitBtn = $('#register_submitBtn');
   var $email = $('#register_email');
   var $nickname = $('#register_nickname');
   var $password = $('#register_password');
   var $password_check = $('#register_password_check');
   var fields = [$email, $nickname, $password, $password_check];

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
      // var mobileRegex = /^09\d{2}\-?\d{3}\-?\d{3}$/;
      // ^=字首; $=字尾

      if (!validateEmail($email.val())) {
         isPass = false;
         $email.next().text('請輸入正確的Email格式');
      }

      if ($nickname.val().length < 2) {
         isPass = false;
         $nickname.next().text('請輸入2個以上的字元');
      }

      // ↓密碼只能是數字、英文字母且8個以上的字元
      if (!((($password.val() >= 'a' && $password.val() <= 'z') || ($password.val() >= '0' && $password.val() <= '9'))) ||
         ($password.val().length < 8)) {
         isPass = false;
         $password.next().text('密碼須大於8個字元且須由數字及英文字母組成');
      }

      if ($password.val() !== $password_check.val()) {
         isPass = false;
         $password_check.next().text('與上述密碼不符');
      }

      // 資料新增成功後的回應頁面(跳轉回登入頁)
      if (isPass) {
         $.post('register_api.php', $('#register_page_form').serialize(), function(data) {
            // console.log(data);

            if (data.success) {
               swal({
                  title: '註冊成功',
                  text: '請登入',
                  type: 'success',
                  showConfirmButton: false,
                  timer: 1500
               });

               setTimeout(function() {
                  location.href = 'Login_page.php';
               }, 1600);
            } else {
               swal({
                  title: '註冊失敗',
                  text: '資料錯誤，請重新輸入資料',
                  type: 'error',
                  showConfirmButton: false,
                  timer: 1500
               });

               setTimeout(function() {
                  location.reload();
               }, 1600);
            }
         }, 'json');
      }
      submitBtn.show();

      return false;
   }
</script>

<?php require __DIR__ . '/__html_end.php' ?>