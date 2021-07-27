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
        <h3>Quản lý danh mục <a href="<?php echo BASE_URL ?>/product/add" class="pull-right btn btn-primary">Thêm mới</a></h3>
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
                <th>Tên sản phẩm</th>
                <th>Loại sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Nổi bật</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($product as $key =>$value){?>
                <tr>
                    <th><?php echo $value['pro_id'] ?></th>
                    <th>
                        <li>Tên sản phẩm: <?php echo $value['pro_name']?></li>
                        <li>Giá: <?php echo number_format($value['pro_price'],0,',','.').' VNĐ' ?></li>
                        <li>Phần trăm giảm : <?php echo $value['pro_sale'].'%'?></li>
                        <li>Số lượng: <?php echo $value['pro_qty']?></li>
                        
                    </th>
                    <th><?php echo $value['c_name']?></th>
                    <th>
                        <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['pro_avatar']?>" height="100" width="100">
                    </th>
                    <th>
                        <?php if($value['pro_hot'] == 0){?>
                            <span class="btn btn-default">Không</span>
                        <?php }else{ ?>
                            <span class="btn btn-success">Có</span>
                        <?php }?>
                    </th>
                    <th>
                        <a href="<?php echo BASE_URL?>/product/edit/<?php echo $value['pro_id']?>" class="btn btn-primary">Edit</a>
                        <a href="<?php echo BASE_URL?>/product/deleteproduct/<?php echo $value['pro_id']?>" class="btn btn-danger">Delete</i></a>
                    </th>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
      