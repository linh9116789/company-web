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
        <h3>Quản lý đơn hàng</h3>
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
                <th>Code đơn hàng</th>
                <th>Ngày đặt</th>
                <th>Tình trạng</th>
                <th>Quản lý</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($orders as $key =>$order){?>
                <tr>
                    <th><?php echo $order['od_id'] ?></th>
                    <th><?php echo $order['od_code'] ?></th>
                    <th><?php echo $order['od_date'] ?></th>
                    <th>
                        <?php if($order['od_status'] == 0){?> 
                            <span>Đơn hàng mới</span>
                        <?php }else{?> 
                            <span>Đã xử lý</span>    
                        <?php }?>
                    </th>
                    <th>
                        <a href="<?php echo BASE_URL?>/order/order_detail/<?php echo $order['od_code'] ?>" class="btn btn-primary">Chi tiết đơn hàng</a>
                    </th>
                </tr>
                <?php }?> 
            </tbody>
        </table>
    </div>
</div>
      