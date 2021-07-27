<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="page-header">
       <ol class="breadcrumb">
           <li><a href="<?php echo BASE_URL?>/login/dasboard">Trang chủ</a></li>
           <li class="active">Danh sách</li>
       </ol>
    </div>
    <div>

    </div>
    <div class="table-responsive">
        <h3>Quản lý danh mục <a href="<?php echo BASE_URL ?>/category/add" class="pull-right btn btn-primary">Thêm mới</a></h3>
        <table class="table table-striped">
        <?php
            if(!empty($_GET['msg'])){
                $msg = unserialize(urldecode($_GET['msg']));
                foreach($msg as $key =>$value){
                    echo '<span style="color:blue">'.$value.'</span>';
                }
            }
        ?>
            <thead>
            <tr>
                <th>#</th>
                <th>Tên danh mục</th>
                <th>Mô tả</th>
                <th>Time</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($category as $key =>$value){?>
                <tr>
                    <th> <?php echo $value['c_id'] ?></th>
                    <th><?php echo $value['c_name'] ?></th>
                    <th><?php echo $value['c_description'] ?></th>
                    <th><?php echo $value['created_at']?></th>
                    <th>
                        <a href="<?php echo BASE_URL?>/category/deletecategory/<?php echo $value['c_id']?>" class="btn btn-danger">Delete</i></a>
                        <a href="<?php echo BASE_URL?>/category/edit/<?php echo $value['c_id']?>" class="btn btn-primary">Edit</a>
                    </th>
                </tr>
                <?php }?> 
            </tbody>
        </table>
    </div>
</div>
      