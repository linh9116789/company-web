<section>
   <div class="bg_in">
   <div class="breadcrumbs">
      <ol itemscope itemtype="http://schema.org/BreadcrumbList">
         <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href=".">
            <span itemprop="name">Trang chủ</span></a>
            <meta itemprop="position" content="1" />
         </li>
         <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <span itemprop="name">Tất cả sản phẩm hot</span>
            <meta itemprop="position" content="2" />
         </li>
      </ol>
   </div>
   <div class="module_pro_all">
      <div class="box-title">
         <div class="title-bar">
            <h1>Danh mục :Tất cả sản phẩm hot</h1>
         </div>
      </div>
      <div class="pro_all_gird">
         <div class="girds_all list_all_other_page ">
            <?php foreach($productFE_hot as $key =>$pro){?>
               <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">
               <input type="hidden" value="<?php echo $pro['pro_id'] ?>" name="pro_id">
               <input type="hidden" value="<?php echo $pro['pro_name'] ?>" name="pro_name">
               <input type="hidden" value="<?php echo $pro['pro_price'] ?>" name="pro_price">
               <input type="hidden" value="<?php echo $pro['pro_avatar'] ?>" name="pro_avatar">
               <input type="hidden" value="1" name="pro_quantity">
            <div class="grids">
               <div class="grids_in">
                  <div class="content">
                     <div class="img-right-pro">
                        <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $pro['pro_id'] ?>">
                        <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['pro_avatar']?>" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                        </a>
                        <!-- <div class="content-overlay"></div> -->
                        <div class="content-details fadeIn-top">
                           <ul class="details-product-overlay">
                              <!-- <li>Màn hình : Super Amoled 4.5k</li>
                              <li>Độ phân giải : 2K+(1440x3040)</li>
                              <li>Ram : 8GB</li>
                              <li>CPU : Android 9.0</li>
                              <li>GPU : Mali-G76 MP12</li>
                              <li>SSD : 512MB</li> -->
                           </ul>
                        </div>
                     </div>
                     <div class="name-pro-right">
                        <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $pro['pro_id'] ?>">
                           <h3><?php echo $pro['pro_name'] ?></h3>
                        </a>
                     </div>
                     <div class="add_card">
                     <input type="submit" style="box-shadow: none;" class="btn btn-primary " name="addcart" value="Đặt hàng">
                     </div>
                     <div class="price_old_new">
                        <div class="price">
                           <span class="news_price"><?php echo number_format($pro['pro_price'],0,',','.')?>đ</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
               </form>
            <?php }?>
         </div>
         <div class="clear"></div>
      </div>
      <div class="clear"></div>
   </div>
</section>