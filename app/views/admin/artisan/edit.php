<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="page-header">
       <ol class="breadcrumb">
           <li><a href="">Trang chủ</a></li>
           <li><a href="<?php echo BASE_URL ?>/category/index">Danh mục</a></li>
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
        <?php foreach($artisanbyid as $key => $value) {?>
            <div class="col-sm-12">
                <form action="<?php echo BASE_URL ?>/artisan/updateartisan/<?php echo $value['a_id'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên tin tức:</label>
                        <input type="text" class="form-control" value="<?php echo $value['a_name']?>" name="a_name">
                    </div>
                    <div class="form-group">
                        <label for="">tiêu đề:</label>
                        <input type="text" class="form-control" value="<?php echo $value['a_title']?>" name="a_title">
                    </div>
                    <div class="form-group">
                        <label for="">nội dung tin tức</label>
                        <textarea name="editor1" type="text" class="form-control" value="<?php echo $value['a_description']?>" name="a_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">hinh anh</label>
                        <input type="file" class="form-control" name="a_avatar">
                        <p><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['a_avatar']?>" height="100" width="100"></p>
                    </div>
                    <button type="submit" class="btn btn-success" >Thêm mới</button>
                </form>
            </div>
        <?php } ?>
    </div>
</div>
      