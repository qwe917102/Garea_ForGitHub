<?php include __DIR__ . '/main_page_header.php' ?>


<!-- 只有做手機版！！！ -->

<!-- body start here↓ -->
<div class="container-fluid pt-1 my-5 p-0 pb-3 login_bg">
   <div class="mx-md-5 mt-4 mt-md-5 mb-5 mb-md-0">
      <div class="find_password_name col-6 mx-auto">
         <h4 class="mb-2 d-none d-md-block">
            會員中心
         </h4>
         <h5 class="mb-2 d-block d-md-none">
            會員中心
         </h5>
      </div>
      <div class="find_password_tabs mx-auto pb-md-5 pt-3 pt-md-3">
         <div class="find_password_tab_button_outer">
            <ul class="find_password_tab_button" id="find_password_tab_button">
               <li><a href="#tab01">登入</a></li>
               <li><a href="Register_page.php">註冊</a></li>
            </ul>
         </div>
         <div id="tab01" class="find_password_tab_contents find_password_tab01">

            <!-- 桌機版 -->
            <div class="d-none d-md-flex flex-column align-items-center mt-5">
               <h3>404</h3>
               <h5>Sorry！ 找不到東西喔～～～</h5>
            </div>

            <!-- 手機版 -->
            <h4 class="mt-3 pt-3 d-flex d-md-none justify-content-center">忘記密碼了嗎</h4>
            <form id="find_password_form" class="form pl-md-1 mt-4 pt-4" method="post" onsubmit="return checkForm()">
               <div class="form-group row">
                  <!-- 手機版 找回密碼input -->
                  <div class="d-block d-md-none mx-auto">
                     <label for="email" class="col pl-0">電子信箱</label>
                     <input type="text" class="col form-control" id="email" placeholder="請輸入Email" name="email" value="">
                     <small class="form-text"></small>
                  </div>
               </div>

               <!-- 手機版登入按鈕 -->
               <div class="d-flex justify-content-center mt-4">
                  <button id="submitBtn" type="submit" class="btn btn-block btn-dark py-2 d-block d-md-none">找回密碼</button>
               </div>

               <!-- 手機版返回按鈕 -->
               <div class="form-check-mobile d-block d-md-none ml-3 pl-3 mt-5 pt-5">
                  <a class="text-decoration-none text-white mr-1" href="Login_page.php">
                     <i class="fas fa-chevron-left"></i>
                     返回
                  </a>
               </div>

               <!-- 忘記密碼 -->
               <!-- <div class="d-none d-md-block"> -->
               <!-- trigger的跳出視窗 -->
               <!-- <button type="button" class="btn btn-none pr-0 text-white" data-toggle="modal" data-target="#exampleModalCenter">
                        忘記密碼？
                     </button> -->

               <!-- 跳出視窗 -->
               <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                     </div> -->
               <!-- </div> -->
               <!-- </div> -->

            </form>
         </div>
         <div id="tab02" class="find_password_tab_contents find_password_tab02">

            <form class="form pl-md-1 mt-3" action="" method="post">
               <div class="form-group">
                  <label for="email" class=""><span class="text-white">*</span>Email</label>
                  <div class="">
                     <input type="text" class="form-control" id="email" placeholder="請輸入Email" name="email" value="">
                  </div>
               </div>
               <div class="form-group">
                  <label for="nickname" class=""><span class="text-white">*</span>使用者名稱</label>
                  <div class="">
                     <input type="text" class="form-control" id="nickname" placeholder="請輸入暱稱" name="nickName" value="">
                  </div>
               </div>
               <div class="form-group">
                  <label for="password" class=""><span class="text-white">*</span>密碼</label>
                  <div class="">
                     <input type="text" class="form-control" id="password" placeholder="請輸入密碼" name="password" value="">
                     <small class="form-text"></small>
                  </div>
               </div>
               <div class="form-group">
                  <label for="password" class=""><span class="text-white">*</span>密碼確認</label>
                  <div class="">
                     <input type="text" class="form-control" id="password_check" placeholder="再輸入一次密碼" name="password_check" value="">
                     <small class="form-text"></small>
                  </div>
               </div>
               <div class="form-group">
                  <label for="mobile" class="">電話號碼</label>
                  <div class="">
                     <input type="text" class="form-control" id="mobile" placeholder="請輸入電話號碼" name="mobile" value="">
                     <small class="form-text"></small>
                  </div>
               </div>
               <div class="form-group">
                  <label for="address" class="">通訊地址</label>
                  <div class="">
                     <input type="text" class="form-control" id="postName" placeholder="請輸入郵遞區號" name="postName">
                     <textarea type="text" class="form-control" id="address" placeholder="請輸入通訊地址" name="address"></textarea>
                     <small class="form-text"></small>
                  </div>
               </div>
               <div class="">
                  <button id="submitBtn_login" type="submit" class="btn btn-lg btn-dark px-3 py-2 d-none d-md-block">註冊</button>
               </div>
               <div class="">
                  <button id="submitBtn_login" type="submit" class="btn btn-md btn-dark px-3 py-2 d-block d-md-none">註冊</button>
               </div>
            </form>

         </div>
      </div>
   </div>
</div>

<?php include __DIR__ . '/main_page_footer.php' ?>
<?php include __DIR__ . '/__script.php' ?>

<script>
   // 頁籤控制
   $(function() {
      var $tabButtonItem = $('#find_password_tab_button li'),
         $tabContents = $('.find_password_tab_contents'),
         activeClass = 'is-active';

      $tabButtonItem.first().addClass(activeClass);
      $tabContents.not(':first').hide();
   });
</script>

<?php require __DIR__ . '/__html_end.php' ?>