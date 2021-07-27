<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="page-header">
       <ol class="breadcrumb">
           <li><a href="">Trang chủ</a></li>
           <li><a href="<?php echo BASE_URL ?>/product/index">Danh mục</a></li>
           <li class="active">Thêm mới</li>
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
            <div class="col-sm-12">
                <form action="<?php echo BASE_URL ?>/product/insertproduct" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="pro_name">
                    </div>
                    <div class="form-group">
                        <label for="">Nội dung:</label>
                        <textarea name="editor1" type="text" class="form-control" name="pro_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Thể loại:</label>
                        <select  class="form-control" name="pro_category_id">
                            <?php foreach($category as $key => $cate) {?>
                            <option value="<?php echo $cate['c_id'] ?>"> <?php echo $cate['c_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Sản phẩm hot:</label>
                        <select  class="form-control" name="pro_hot">
                            <option value="0">Không</option>
                            <option value="1">Có</option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Giá sản phẩm</label>
                        <input type="text" class="form-control" name="pro_price">
                    </div>
                    <div class="form-group">
                        <label for="">Số lượng</label>
                        <input type="text" class="form-control" name="pro_qty">
                    </div>
                    <div class="form-group">
                        <label for="">Giảm giá</label>
                        <input type="text" class="form-control" name="pro_sale">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh đại diện</label>
                        <input type="file" class="form-control" name="pro_avatar">
                    </div>
                    <button type="submit" class="btn btn-success" >Thêm mới</button>
                </form>
            </div>
    </div>
</div>
      