
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="page-header">
       <ol class="breadcrumb">
           <li><a href="">Trang chủ</a></li>
           <li><a href="<?php echo BASE_URL ?>/category/index">Danh mục</a></li>
           <li class="active">Cập nhật</li>
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
                <?php foreach($categorybyid as $key => $cate) {?>
                <form action="<?php echo BASE_URL ?>/category/updatecategory/<?php echo $cate['c_id'] ?>" method="POST">
                    <div class="form-group">
                        <label for="">Tên danh mục:</label>
                        <input type="text" value="<?php echo $cate['c_name'] ?>" class="form-control" name="c_name">
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả:</label>
                        <input type="text" value="<?php echo $cate['c_description'] ?>" class="form-control" name="c_description">
                    </div>
                    <button type="submit" class="btn btn-success" >Cập nhật</button>
                </form>
                <?php }?>
            </div>
    </div>
</div>
