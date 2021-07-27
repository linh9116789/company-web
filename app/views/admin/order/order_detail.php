
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="page-header">
       <ol class="breadcrumb">
           <li><a href="<?php echo BASE_URL?>/login/dasboard">Trang chủ</a></li>
           <li class="active">Danh sách</li>
       </ol>
    </div>
    <div class="">
        <h3>Chi tiết đơn hàng</h3>
                <div class="col-sm-12">
                    <div class="col-sm-8">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; $total = 0;
                            foreach($order_details as $key =>$order){ 
                                $total+=$order['od_pro_qty'] * $order['pro_price'];
                                $i++; 
                            ?> 
                            <tr>
                                <th><?php echo $i ?></th>
                                <th><?php echo $order['pro_name'] ?></th>
                                <th><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $order['pro_avatar'] ?>" height="100" width="100" ></th>
                                <th><?php echo $order['od_pro_qty'] ?></th>
                                <th><?php echo number_format($order['pro_price'],0,',','.').'đ'?></th>
                                <th><?php echo number_format(($order['od_pro_qty'] * $order['pro_price']),0,',','.' ).'đ'?></th>
                            </tr>
                            <?php 
                            } ?>
                            <form action="<?php echo BASE_URL ?>/order/order_confirm/<?php echo $order['od_detail_code'] ?>" method="POST">
                                <tr>
                                    <td><input type="submit" name="update_od_status" value="Đã xử lý" class="btn btn-success"></td>
                                    <td colspan="6" align="right"><b>Tổng số tiền:</b> <span style="color: red;"><?php echo number_format($total,0,',','.').'đ'?></span> </td>
                                </tr>
                            </form> 
                        </tbody>
                    </table>
                        </div>
                    </div>
                    </div>
                <div class="col-sm-4">
                <div class="panel panel-default">
                        <div class="panel-body">
                            <?php foreach($order_info as $key => $value) {?>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4>Thông tin khách hàng</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Tên khách hàng:</strong></div>
                                <div class="col-md-12">
                                    <?php echo $value['name'] ?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-12"><strong>Số điện thoại:</strong></div>
                                <div class="col-md-12">
                                <?php echo $value['sodienthoai'] ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email</strong></div>
                                <div class="col-md-12">
                                <?php echo $value['email'] ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Địa chỉ:</strong></div>
                                <div class="col-md-12">
                                <?php echo $value['diachi'] ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Nội dung</strong></div>
                                <div class="col-md-12">
                                <?php echo $value['noidung'] ?>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
</div>
      