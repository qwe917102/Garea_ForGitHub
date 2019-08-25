<?php require __DIR__ . '/__db_connect.php';


$page_name = 'member_center_order_list';

$member = $_SESSION['loginUser']['sid'];

$sql = "SELECT * FROM `order_list` WHERE 1 AND `member_sid` = $member ORDER BY `sid` DESC";

$stmt = $pdo->query($sql);
$row = $stmt->fetchAll();

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
               <li><a href="member_center_page.php">會員資料</a></li>
               <li><a href="member_center_wish_list.php">收藏清單</a></li>
               <li><a href="#tab03">訂單相關</a></li>
               <li><a href="./member_center_Q&A.php">常見問題</a></li>
            </ul>
         </div>
         <div id="tab01" class="member_center_tab_contents member_center_tab01"></div>
         <div id="tab02" class="member_center_tab_contents member_center_tab02"></div>
         <div id="tab03" class="member_center_tab_contents member_center_tab03 px-3 px-md-5 px-sm-4">
            <h4 class="mt-2 pt-md-3 pr-2 pr-md-2 d-none d-md-block">訂單查詢</h4>
            <h5 class="mt-2 pt-md-3 pl-3 pl-md-4 d-block d-md-none">訂單查詢</h5>
            <div class="row d-flex flex-column p-0">
               <div class="col-12 mx-auto">
                  <h4 class="mb-2 d-none d-md-block text-left">
                     以下為您的訂單資料
                  </h4>
                  <h5 class="mb-2 d-flex d-md-none justify-content-center">
                     以下為您的訂單資料
                  </h5>
               </div>

               <div class="order_list mt-3 mx-auto p-0">
                  <!-------- 第一筆訂單顯示 -------->
                  <?php if (empty($row)) : ?>
                  <div class="text-center mt-3 p-0">

                     <h4 class="d-none d-md-block mt-5">您目前還沒有收藏商品哦～</h4>
                     <h5 class="d-block d-md-none mt-5">您目前還沒有收藏商品哦～</h5>
                     <div class="mt-5 pt-5 pt-md-5 d-flex justify-content-center">
                        <button id="submitBtn_emptyOrder" type="submit" class="btn btn-lg btn-dark mt-5 px-3 py-2 d-none d-md-block">
                           <a href="product_page.php" class="text-decoration-none text-white">
                              趕快去逛逛
                           </a></button>
                     </div>
                     <div class="pt-3 pt-md-5 d-flex justify-content-center">
                        <button id="submitBtn_emptyOrder" type="submit" class="btn btn-md btn-dark px-3 py-2 d-block d-md-none">
                           <a href="product_page.php" class="text-decoration-none text-white">
                              趕快去逛逛
                           </a></button>
                     </div>

                  </div>
                  <?php endif ?>
                  <?php foreach ($row as $r) : ?>
                  <?php
                     $p_sql = "SELECT `products_list`.*,`order_product`.`belong`,`which`,`qty` FROM `products_list` JOIN `order_product` ON `products_list`.`sid` = `order_product`.`which` WHERE 1 AND `order_product`.`belong` =" . $r['order_number'];
                     $p_stmt = $pdo->query($p_sql);
                     $p_row = $p_stmt->fetchAll();
                     ?>
                  <div class="accordion" id="accordionOrder<?= $r['sid'] ?>">
                     <div class="card">
                        <div class="card-header px-0 pb-0 d-flex flex-column" id="headingOne">
                           <!--------- 第一款商品顯示 --------->
                           <?php foreach ($p_row as $p_r) : ?>
                           <div class="order_product px-4">
                              <div class="d-flex justify-content-around align-items-center align-content-center-md flex-md-row flex-column">
                                 <a class="card_a m-2" href="">
                                    <img class="fit-image" src="img/product/<?= $p_r['products_img'] ?>" alt="">
                                 </a>
                                 <div class="text-center mt-0 mt-md-2 mr-0 mr-md-4">
                                    <a class="text-decoration-none auto_textcolor" href="">
                                       <p class="card-title text-wrap">
                                          <?= $p_r['products_name'] ?>
                                       </p>
                                    </a>
                                    <span class="card-text mr-2 mr-md-0">NT<?= $p_r['price'] ?></span>
                                 </div>
                                 <div class="order_product_detail mt-2 d-flex flex-column">
                                    <label class="mr-2 mr-md-0">數量 <?= $p_r['qty'] ?></label>
                                    <label class="">出貨狀態：未出貨</label>
                                 </div>
                              </div>
                           </div>
                           <div class="divide_line mt-2 mb-2"></div>
                           <?php endforeach; ?>
                           <button type="button" class="btn btn-link text-white text-right pr-4 text-decoration-none" data-toggle="collapse" data-target="#collapseOne<?= $r['sid'] ?>">
                              訂單明細 <i class="ml-2 fa fa-plus"></i>
                           </button>
                        </div>

                        <!-------- 第一筆訂單明細 -------->
                        <div id="collapseOne<?= $r['sid'] ?>" class="collapse collapse_textcolor" aria-labelledby="headingOne" data-parent="#accordionOrder<?= $r['sid'] ?>">
                           <div class="card-body d-flex justify-content-around text-left flex-md-row flex-column">
                              <div class="order_detail">
                                 <p>訂購日期：<?= $r['date'] ?></p>
                                 <p>訂購編號：<?= $r['order_number'] ?></p>
                                 <p>取貨方式：信用卡宅配收貨</p>
                                 <p>送貨地址：<?= $r['address'] ?></p>
                              </div>
                              <div class="order_detail">
                                 <p>處理進度：收到新訂單</p>
                                 <div class="order_detail_price_tag d-flex">
                                    <p>應付金額：</p>
                                    <p class="order_detail_price">NT<?= $r['total_price'] ?></p>
                                 </div>
                                 <p>發票：<?= $r['invoice'] ?></p>
                                 <p>訂單取消/退貨詳請：
                                    <a class="order_cancel text-decoration-none text-white" href="order_delete_api.php?order=<?= $r['sid'] ?>">
                                       我要取消
                                    </a>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php endforeach; ?>
               </div>
            </div>
         </div>
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
      $tabButtonItem.eq(2).addClass(activeClass);
      $tabContents.not(':eq(2)').hide();
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