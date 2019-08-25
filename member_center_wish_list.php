<?php require __DIR__ . '/__db_connect.php';

$page_name = 'member_center_wish_list';
$member = $_SESSION['loginUser']['sid'];
$sql = "SELECT `products_list`.*,`product_like`.`belong`,`which` FROM `products_list` JOIN `product_like` ON `products_list`.`sid` =  `product_like`.`which` WHERE `product_like`.`belong` = $member";

$stmt = $pdo->query($sql);
$row = $stmt->fetchAll();

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

   .sweet-alert[data-has-confirm-button=false][data-has-cancel-button=false] {
      padding-bottom: 0px;
   }

   /* .sweet-alert .sa-success {
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
   } */

   .sweet-alert button.confirm {
      background: #412f8f !important;
      border-radius: 0;
      border: 2px solid #ffffff;
   }
</style>
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
               <li><a href="#tab02">收藏清單</a></li>
               <li><a href="member_center_order_list.php">訂單相關</a></li>
               <li><a href="./member_center_Q&A.php">常見問題</a></li>
            </ul>
         </div>
         <div id="tab01" class="member_center_tab_contents member_center_tab01"></div>
         <div id="tab02" class="member_center_tab_contents member_center_tab02">
            <h4 class="mt-2 pt-md-3 pl-2 pl-md-3 d-none d-md-block">收藏清單</h4>
            <h5 class="mt-2 pt-md-3 d-block d-md-none">收藏清單</h5>
            <div class="row mt-4 d-flex justify-content-start flex-wrap">
               <?php if (empty($row)) : ?>
               <div class="wish_list mx-auto mt-3 p-0">
                  <h4 class="d-none d-md-block mt-5">您目前還沒有收藏商品哦～</h4>
                  <h5 class="d-block d-md-none mt-5">您目前還沒有收藏商品哦～</h5>
                  <div class="mt-5 pt-5 pt-md-5 d-flex justify-content-center">
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
                  </div>

               </div>
               <?php endif ?>
               <?php foreach ($row as $r) : ?>
               <div class="row m-0 col-sm-8 col-md-5 col-lg-3 p-0">
                  <div class="card m-3 flex_same_h">
                     <a class="card_a" href="product_inner.php?sid=<?= $r['sid'] ?>">
                        <img class="fit-image" src="img/product/<?= $r['products_img'] ?>" alt="">
                     </a>
                     <div class="card-body d-flex flex-column justify-content-between">
                        <a class="text-decoration-none" href="product_inner.php?sid=<?= $r['sid'] ?>">
                           <h5 class="card-title auto_textcolor"><?= $r['products_name'] ?></h5>
                           <!-- <p class="card-title auto_textcolor"><?= $r['products_brief'] ?></p> -->
                        </a>
                        <div class="select_product d-flex justify-content-between align-items-center">
                           <span class="card-text d-block" data-price="<?= $r['price_val'] ?>">NT<?= $r['price'] ?></span>
                           <div class="select_product_icon mr-4 mr-md-0">
                              <button href="" class="btn btn-lg border-0 auto_textcolor like_delete" type="submit" data-sid="<?= $r['sid'] ?>">
                                 <i class="fas fa-trash-alt"></i>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endforeach ?>
            </div>
         </div>
         <div id="tab03" class="member_center_tab_contents member_center_tab03 px-3 px-md-5 px-sm-4"></div>
         <div id="tab04" class="member_center_tab_contents member_center_tab04 px-0 px-md-5"></div>
      </div>
   </div>
</div>

<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script>
   // 頁籤控制
   $(function() {
      var $tabButtonItem = $('#member_page_tab_button li'),
         $tabContents = $('.member_center_tab_contents'),
         activeClass = 'is-active';
      $tabButtonItem.eq(1).addClass(activeClass);
      $tabContents.not(':eq(1)').hide();
   });

   $("html").on('click', ".like_delete", function() {
      var product_sid = $(this).attr('data-sid');
      $.post('product_like_delete_api.php', {
         'sid': product_sid
      }, function(data) {
         if (data.success) {
            swal({
               title: (data.info),
               timer: 1200,
               showConfirmButton: false,
            });
            setTimeout(function() {
               location.reload();
               // location.href='member_center_wish_list.php';
            }, 1380);
         }
      }, 'JSON')
   });

   // // 訂單手機版手風琴
   // $(document).ready(function() {
   //    // Add minus icon for collapse element which is open by default
   //    $(".collapse.show").each(function() {
   //       $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
   //    });

   //    // Toggle plus minus icon on show hide of collapse element
   //    $(".collapse").on('show.bs.collapse', function() {
   //       $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
   //    }).on('hide.bs.collapse', function() {
   //       $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
   //    });
   // });
</script>

<?php require __DIR__ . '/__html_end.php' ?>