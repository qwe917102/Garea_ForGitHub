<?php require __DIR__ . '/__db_connect.php';

$page_name = 'member_center_editAccount';

$sql = "SELECT * FROM `members` WHERE `sid`=" . intval($_SESSION['loginUser']['sid']);
$row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

if (empty($row)) {
   header('Location: Login_page.php');
   exit;
}

?>
<?php include __DIR__ . '/main_page_header.php' ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<style>
   .sweet-alert {
      background-color: #211661;
      border-radius: 0;
      font-family: 'Noto Sans TC', sans-serif;
   }

   .sweet-alert h2,
   .sweet-alert p {
      color: #ffffff;
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
<div class="container-fluid pt-5 mb-0 pl-0 pl-md-2 pr-0 pr-md-2 pb-5 parallax">
   <div class="mx-md-5 mt-4 mt-md-5">
      <div class="member_center_editAccount_name col-6 mx-auto">
         <h4 class="mb-2 d-none d-md-block">
            會員中心
         </h4>
         <h5 class="mb-2 d-flex d-md-none justify-content-center">
            會員中心
         </h5>
      </div>
      <div class="member_center_editAccount_name col-6 mx-auto">
         <h4 class="mb-2 d-none d-md-flex member_nickname_title">
            <a class="dropdown-item member_nickname p-0" id="my_nickname">Hi！<?= $_SESSION['loginUser']['nickname'] ?></a>
            <a class="dropdown-item member_nickname member_logout p-0 ml-3" href="Log_out.php">[登出]</a>
         </h4>
         <h5 class="mb-2 d-flex d-md-none member_nickname_title justify-content-center">
            <a class="dropdown-item member_nickname p-0 ml-5" id="my_nickname">Hi！<?= $_SESSION['loginUser']['nickname'] ?></a>
            <a class="dropdown-item member_nickname member_logout p-0 text-left ml-3" href="Log_out.php">[登出]</a>
         </h5>
      </div>
      <div class="member_center_editAccount_tabs mx-auto pb-md-5 pt-3 pt-md-3">
         <div class="member_center_editAccount_tab_button_outer">
            <ul class="member_center_editAccount_tab_button" id="tab_button">
               <li><a href="member_center_editAccount.php">會員資料</a></li>
               <li><a href="member_center_wish_list.php">收藏清單</a></li>
               <li><a href="member_center_order_list.php">訂單相關</a></li>
               <li><a href="./member_center_Q&A.php">常見問題</a></li>
            </ul>
         </div>
         <div id="tab01" class="member_center_editAccount_tab_contents member_center_tab01">
            <h4 class="mt-2 pt-md-3 pl-2 pl-md-3 d-none d-md-block">會員資料</h4>
            <h5 class="mt-2 pt-md-3 d-block d-md-none">會員資料</h5>
            <form id="edit_form" class="form pl-1 pl-md-4" method="post" onsubmit="return checkForm()">
               <div class="form-group row d-flex pt-3 mb-2" method="post" onsubmit="return checkForm()">
                  <input type="hidden" name="sid" value="<?= $row['sid'] ?>">
                  <label for="email" class="col-4 col-sm-3 col-md-3 col-lg-2 col-form-label">電子信箱</label>
                  <div class="col-12 col-sm-8 col-md-6 col-lg-6 pl-3 pl-sm-0">
                     <input type="text" class="form-control-plaintext text-white" id="mail" placeholder="" name="email" value="<?= htmlentities($row['email']) ?>" disabled>
                  </div>
               </div>
               <div class="form-group row d-flex mb-2">
                  <label for="staticNickname" class="col-4 col-sm-3 col-md-3 col-lg-2 col-form-label">暱稱</label>
                  <div class="col-12 col-sm-8 col-md-6 col-lg-6 pl-3 pl-sm-0">
                     <input type="text" class="form-control" id="nickname" placeholder="" name="nickname" value="<?= htmlentities($row['nickname']) ?>">
                     <small class="form-text"></small>
                  </div>
               </div>
               <div class="form-group row d-flex mb-2">
                  <label for="staticMobile" class="col-4 col-sm-3 col-md-3 col-lg-2 pr-1 pr-sm-2 pr-md-0 col-form-label">電話號碼</label>
                  <div class="col-12 col-sm-8 col-md-6 col-lg-6  pl-3 pl-sm-0">
                     <input type="text" class="form-control" id="mobile" placeholder="手機號碼" name="mobile" value="<?= htmlentities($row['mobile']) ?>">
                  </div>
               </div>
               <div class="form-group row d-flex mb-2">
                  <label for="Address" class="col-4 col-sm-3 col-md-3 col-lg-2 pr-1 pr-sm-2 pr-md-0 col-form-label">通訊地址</label>
                  <div class="col-12 col-sm-8 col-md-6 col-lg-6  pl-3 pl-sm-0">
                     <input type="text" class="form-control" id="postName" placeholder="郵遞區號" name="postName" value="<?= htmlentities($row['postName']) ?>">
                     <textarea type="text" class="form-control mt-3" id="edit_address" placeholder="通訊地址" name="address" value="<?= htmlentities($row['address']) ?>"></textarea>
                  </div>
               </div>

               <!-- 修改密碼確認 -->
               <h5 class="mt-2 pt-3 d-none d-md-block">資料修改確認</h5>
               <h6 class="pt-3 d-block d-md-none">資料修改確認</h6>
               <div class="form-group row d-flex pt-0 pt-md-3">
                  <label for="Password" class="col-4 col-sm-3 col-md-3 col-lg-2 col-form-label">密碼</label>
                  <div class="col-12 col-sm-8 col-md-6 col-lg-6 pl-3 pl-sm-0">
                     <input type="password" class="form-control" id="password" name="password" placeholder="請輸入登入密碼" value="">
                     <small class="form-text"></small>
                  </div>
               </div>

               <div class="mt-4 pt-4 pb-3 mb-3 d-flex justify-content-center">
                  <button id="submitBtn" type="submit" class="btn btn-block btn-dark">修改完成</button>
               </div>
            </form>
         </div>
         <div id="tab02" class="member_center_editAccount_tab_contents member_center_tab02">
            <h4 class="mt-2 pt-md-3 pl-2 pl-md-3 d-none d-md-block">收藏清單</h4>
            <h5 class="mt-2 pt-md-3 d-block d-md-none">收藏清單</h5>
         </div>
         <div id="tab03" class="member_center_editAccount_tab_contents member_center_tab03 px-3 px-md-5 px-sm-4">
            <h4 class="mt-2 pt-md-3 pr-2 pr-md-2 d-none d-md-block">訂單狀態</h4>
            <h5 class="mt-2 pt-md-3 pl-3 pl-md-4 d-block d-md-none">訂單狀態</h5>
         </div>
         <div id="tab04" class="member_center_editAccount_tab_contents member_center_tab04 px-0 px-md-5">
            <h4 class="mt-2 pt-md-3 d-none d-md-block">常見問題</h4>
            <h5 class="mt-2 pt-md-3 ml-2 ml-md-5 pl-4 pl-md-4 d-block d-md-none">常見問題</h5>
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
      var $tabButtonItem = $('#tab_button li'),
         $tabContents = $('.member_center_editAccount_tab_contents'),
         activeClass = 'is-active';

      $tabButtonItem.first().addClass(activeClass);
      $tabContents.not(':first').hide();
   });

   // 傳送修改表單
   var submitBtn = $('#submitBtn');
   var $nickname = $('#nickname');
   var $password = $('#password');
   var fields = [$nickname, $password];

   function checkForm() {
      // 先回復到原來的狀態
      fields.forEach(function(val) {
         val.next().text('');
      });

      // submitBtn.hide();

      var isPass = true; // 表單是否有通過檢查

      if ($nickname.val().length < 2) {
         isPass = false;
         $nickname.next().text('請輸入兩個以上的字元');
      }

      // ↓密碼只能是數字、英文字母且8個以上的字元
      if (!((($password.val() >= 'a' && $password.val() <= 'z') || ($password.val() >= '0' && $password.val() <= '9'))) ||
         ($password.val().length < 8)) {
         isPass = false;
         $password.next().text('密碼須大於8個字元且須由數字及英文字母組成');
      }

      if (isPass) {
         $.post('member_center_editAccount_api.php', $('#edit_form').serialize(), function(data) {
            console.log(data);

            if (data.success) {
               swal({
                  title: '修改成功',
                  text: '將於2秒後轉回至會員中心',
                  type: 'success',
                  showConfirmButton: false,
                  timer: 1500
               });

               setTimeout(function() {
                  location.href = 'member_center_page.php';
               }, 1600);

               $('#my_nickname').text($nickname.val());
            } else {
               swal({
                  title: '修改失敗',
                  text: '資料錯誤，請重新輸入資料',
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

   }
</script>

<?php require __DIR__ . '/__html_end.php' ?>