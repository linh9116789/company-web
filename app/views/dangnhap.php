<section>
   <div class="bg_in">
      <div class="contact_form">
         <div class="contact_left">
         <?php
            if(!empty($_GET['msg'])){
                $msg = unserialize(urldecode($_GET['msg']));
                foreach($msg as $key =>$value){
                    echo '<span style="color:blue">'.$value.'</span>';
                }
            }
        ?>
            <div class="ch-contacts-details">
                <form autocomplete="off" action="<?php echo BASE_URL ?>/khachhang/login_customer" method="post">
                    <div class="row">
                            <div class="input">
                                <label>Email: <span style="color:red;">*</span></label>
                                <input type="text" name="username" required class="clsip">
                            </div>
                            <div class="clear"></div>
                            </div>
                        <!---row---->
                            <div class="row">
                            <div class="input">
                                <label>Mật khẩu: <span style="color:red;">*</span></label>
                                <input type="password" name="password" required onkeydown="return checkIt(event)" class="clsip">
                            </div>
                            <div class="clear"></div>
                            </div>
                            <div class="row">
                                <input type="submit" class="btn-gui" name="frmSubmit" id="frmSubmit" value="Đăng nhập">
                            <div class="clear"></div>
                            </div>
                    </div>
                </form>
            </div>
         <div class="contact_right">
            <div class="form_contact_in">
               <div class="box_contact">
                  <form  method="post" action="<?php echo BASE_URL ?>/khachhang/insert_dangky" >
                     <div class="content-box_contact">
                        <div class="row">
                           <div class="input">
                              <label>Họ và tên: <span style="color:red;">*</span></label>
                              <input type="text" name="cus_name" required class="clsip">
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row">
                           <div class="input">
                               <label>Mật khẩu: <span style="color:red;">*</span></label>
                               <input type="password" name="cus_password" required  class="clsip">
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row">
                           <div class="input">
                              <label>Email: <span style="color:red;">*</span></label>
                              <input type="text" name="cus_email"  required class="clsip">
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row">
                            <div class="input">
                                <label>Số điện thoại: <span style="color:red;">*</span></label>
                                <input type="text" name="cus_phone"  class="clsip">
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row">
                           <div class="input">
                              <label>Địa chỉ: <span style="color:red;">*</span></label>
                              <input type="text" name="cus_address" required class="clsip" >
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="row btnclass">
                           <div class="input ipmaxn ">
                              <input type="submit" class="btn-gui" name="dangky" id="frmSubmit" value="Đăng ký tài khoản">
                           </div>
                           <div class="clear"></div>
                        </div>
                        <!---row---->
                        <div class="clear"></div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>