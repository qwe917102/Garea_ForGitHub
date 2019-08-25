<?php require __DIR__ . '/__db_connect.php';

$page_name = 'member_center_page';

$sql = "SELECT * FROM `members` WHERE `sid`=" . intval($_SESSION['loginUser']['sid']);
$row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

if (empty($row)) {
   header('Location: Login_page.php');
   exit;
}

?>
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
               <li><a href="#tab01">會員資料</a></li>
               <li><a href="member_center_wish_list.php">收藏清單</a></li>
               <li><a href="member_center_order_list.php">訂單相關</a></li>
               <li><a href="./member_center_Q&A.php">常見問題</a></li>
            </ul>
         </div>
         <div id="tab01" class="member_center_tab_contents member_center_tab01">
            <h4 class="mt-2 pt-md-3 pl-2 pl-md-3 d-none d-md-block">會員資料</h4>
            <h5 class="mt-2 pt-md-3 d-block d-md-none">會員資料</h5>
            <form class="pl-md-3" method="">
               <div class="form-group row pt-3">
                  <label for="staticEmail" class="col-3 col-sm-2 col-md-2 col-lg-2 col-form-label">Email</label>
                  <div class="col-8 col-sm-6 col-md-6 col-lg-6">
                     <input type="text" class="form-control-plaintext text-white" id="Email" placeholder="" name="email" value="<?= htmlentities($row['email']) ?>" disabled>
                  </div>
               </div>
               <div class="form-group row pt-3">
                  <label for="staticNickname" class="col-3 col-sm-2 col-md-2 col-lg-2 col-form-label">暱稱</label>
                  <div class="col-8 col-sm-5 col-md-5 col-lg-5">
                     <input type="text" class="form-control-plaintext text-white" id="Nickname" placeholder="" name="nickname" value="<?= htmlentities($row['nickname']) ?>" disabled>
                  </div>
               </div>
               <!-- 下判斷式讓登入後的使用者
               在未修改狀態看不到密碼 -->
               <div class="form-group row pt-3">
                  <label for="staticPassword" class="col-3 col-sm-2 col-md-2 col-lg-2 col-form-label">密碼</label>
                  <div class="col-8 col-sm-5 col-md-5 col-lg-5">
                     <input type="password" class="form-control-plaintext text-white" id="Password" placeholder="" name="password" value="yourPassword" disabled>
                  </div>
               </div>
               <div class="form-group row pt-3">
                  <label for="staticMobile" class="col-3 col-sm-2 col-md-2 col-lg-2 pr-2 pr-md-0 col-form-label">電話號碼</label>
                  <div class="col-8 col-sm-5 col-md-6 col-lg-6 px-lg-3 px-md-3 px-3">
                     <input type="text" class="form-control-plaintext text-white" id="Mobile" placeholder="" name="mobile" value="<?= htmlentities($row['mobile']) ?>" disabled>
                  </div>
               </div>
               <div class="form-group row py-3 d-flex flex-md-row flex-column">
                  <label for="staticAddress" class="col-3 col-sm-2 col-md-3 col-lg-2 pr-2 pr-md-0 col-form-label">通訊地址</label>
                  <div class="col col-sm-10 col-md-9 col-lg-8">
                     <input type="text" class="form-control-plaintext text-white" id="postName" placeholder="" name="postName" value="<?= htmlentities($row['postName']) ?>" disabled>
                     <input type="text" class="form-control-plaintext text-white" id="address" placeholder="" name="address" value="<?= htmlentities($row['address']) ?>" disabled>
                  </div>
               </div>
               <div class="mt-3 pt-5 pt-md-5 d-flex justify-content-center">
                  <a href="member_center_editAccount.php" class="btn btn-block text-decoration-none text-white">
                     修改會員資料
                  </a>
               </div>
            </form>
         </div>
         <div id="tab02" class="member_center_tab_contents member_center_tab02"></div>
         <div id="tab03" class="member_center_tab_contents member_center_tab03 px-3 px-md-5 px-sm-4"></div>
         <div id="tab04" class="member_center_tab_contents member_center_tab04 px-0 px-md-5"></div>
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
      $tabButtonItem.first().addClass(activeClass);
      $tabContents.not(':first').hide();
   });
</script>

<?php require __DIR__ . '/__html_end.php' ?>