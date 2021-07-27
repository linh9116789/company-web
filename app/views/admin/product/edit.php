<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="page-header">
       <ol class="breadcrumb">
           <li><a href="">Trang chủ</a></li>
           <li><a href="<?php echo BASE_URL ?>/product/index">Danh mục</a></li>
           <li class="active">cập nhật sản phẩm</li>
       </ol>
    </div>
    <div class="">
        <?php
            if(!empty($_GET['msg'])){
                $msg = unserialize(urldecode($_GET['msg']));
                foreach($msg as $key =>$value){
                    echo '<span style="color:blue">'.$value.'</span>';
                }
            }
        ?>
        <?php foreach($productbyid as $key => $product) {?>
            <div class="col-sm-12">
                <form action="<?php echo BASE_URL ?>/product/updateproduct/<?php echo $product['pro_id'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên sản phẩm:</label>
                        <input type="text" class="form-control" value="<?php echo $product['pro_name'] ?>" name="pro_name">
                    </div>
                    <div class="form-group">
                        <label for="">Nội dung:</label>
                        <textarea name="editor1" type="text" class="form-control" value="<?php echo $product['pro_description'] ?>" name="pro_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Thể loại:</label>
                        <select  class="form-control" name="pro_category_id">
                            <?php foreach($category as $key => $cate) {?>
                            <option <?php if($cate['c_id'] == $product['pro_category_id']){echo "selected";} ?> value="<?php echo $cate['c_id'] ?>"> <?php echo $cate['c_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Sản phẩm hot:</label>
                        <select  class="form-control" name="pro_hot">
                            <?php if ($product['pro_hot']==0){ ?>
                            <option value="0">Không</option>
                            <?php }else{?>
                            <option value="1">Có</option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Giá sản phẩm</label>
                        <input type="text" class="form-control" value="<?php echo $product['pro_price'] ?>" name="pro_price">
                    </div>
                    <div class="form-group">
                        <label for="">Số lượng</label>
                        <input type="text" class="form-control" value="<?php echo $product['pro_qty'] ?>" name="pro_qty">
                    </div>
                    <div class="form-group">
                        <label for="">Giảm giá</label>
                        <input type="text" class="form-control" value="<?php echo $product['pro_sale'] ?>"  name="pro_sale">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh đại diện</label>
                        <input type="file" class="form-control" name="pro_avatar">
                        <p><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $product['pro_avatar']?>" height="100" width="100"></p>
                    </div>
                    <button type="submit" class="btn btn-success">Cập nhật</button>
                </form>
            </div>
            <?php }?>
    </div>
</div>
      