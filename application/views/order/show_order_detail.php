
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style_order_detail.css"/>

  <?php

if(!empty($order_detail)): 
   foreach ($order_detail as $row) {
    $order_id = $row->order_id;
    $cus_id = $row->cus_id;
    $sales_channels = $row->sales_channels;
    $link_img = $row->link_img;
    $status_order = $row->status_order;
    $transport = $row->transport;
    $payment_chanels = $row->payment_chanels;
    $total_price = $row->total_price;
    $status_payment = $row->status_payment;
    $balance = $row->balance;
    $employee_id = $row->employee_id;
    $money_transfer_slip = $row->money_transfer_slip;
    $date_pay = $row->date_pay;
    $date_order = $row->date_order;

    }
endif;

if(!empty($order_detail_iteam)): 
   foreach ($order_detail_iteam as $row) {
    $iteam_order_id = $row->order_id;
    $productID = $row->productID;
    // $orderNumber = $row->orderNumber;
    $price = $row->price;
    $quantity = $row->quantity;
    $discount = $row->discount;
    $total = $row->total;
    $size = $row->size;
    $color = $row->color;
    $location = $row->location;
    $date_order = $row->date_order;
    // $shipdate = $row->shipdate;
    // $orderDetailID = $row->orderDetailID;
    // $billdate = $row->billdate;


    }
endif;
?>
        <div class="order-status-icon m-t-md m-b-md">
                    <div class="row">
                                                    <div class="col-sm-12">
                                <div class="order-list-status">
                                    <div class="status-line"></div>
                                    <div class="status-list">
                                        <div class="point-status active">
                                            <div class="main-point">
                                                <div class="status-icon">
                                                    <i class="fa fa-pause-circle-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="status-message">
                                                ยังไม่จ่าย                                          </div>
                                        </div>
                                        <div class="point-status active">
                                            <div class="main-point">
                                                <div class="status-icon">
                                                    <i class="fa fa-check-circle-o"></i>
                                                </div>
                                            </div>
                                            <div class="status-message">
                                                จ่ายแล้ว                                            </div>
                                        </div>
                                        <div class="point-status active">
                                            <div class="main-point">
                                                <div class="status-icon">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                            </div>
                                            <div class="status-message">
                                                ยืนยัน                                          </div>
                                        </div>
                                        <div class="point-status active">
                                            <div class="main-point">
                                                <div class="status-icon">
                                                    <i class="fa fa-dropbox"></i>
                                                </div>
                                            </div>
                                            <div class="status-message">
                                                กำลังแพ็ค                                           </div>
                                        </div>
                                        <div class="point-status ">
                                            <div class="main-point">
                                                <div class="status-icon">
                                                    <i class="fa fa-truck"></i>
                                                </div>
                                            </div>
                                            <div class="status-message">
                                                กำลังจัดส่ง                                         </div>
                                        </div>
                                        <div class="point-status ">
                                            <div class="main-point">
                                                <div class="status-icon">
                                                    <i class="fa fa-trophy"></i>
                                                </div>
                                            </div>
                                            <div class="status-message">
                                                สำเร็จ                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            </div>
                </div>


        <!-- แสดงรายละเอียดคำสั่งซื้อ -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">รายละเอียดคำสั่งซื้อ : <?php echo $order_id;?></h1> -->

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">รายละเอียดคำสั่งซื้อ : <?php echo $order_id;?></h6>
            </div>
            <div class="card-body">
          
          <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>รายการสั่งซื้อ</h5>
            </div>
            <div class="ibox-content order-detail-table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="10">#</th>
                            <th width="60"></th>
                            <th>ชื่อสินค้า</th>
                            <th>รหัสสินค้า</th>
                            <th class="text-right">ราคาขาย</th>
                            <th class="text-right">จำนวน</th>
                            <th class="text-right">ส่วนลด</th>
                            <!-- <th class="text-right">จำนวน</th> -->
                            <!-- <th class="action text-center" width="70"></th> -->
                        </tr>
                    </thead>
                    <tbody>

                        <?php if(!empty($order_detail_iteam)): 
                                foreach($order_detail_iteam as $idx => $val):
                                $num = $idx+1;?>
                            <tr>
                                <td><?php echo $num;?></td>
                                <td>
                                    <div class="order-thumbnail">
                                        <img src="" alt=""> 
                                    </div>
                                </td>
                                <td>
                                    <a href="/products/5206436" data-pjax="0"><?php echo $val->productID;?></a>      
                                </td>
                                <td>
                                    <a href="/products/5206436" target="_blank" data-pjax="0" data-toggle="tooltip" data-placement="top" data-original-title="Sample-Product-1608393517"><div><?php echo $val->productID;?></div></a> 
                                </td>
                                <!-- <td><a href="/products/5206436" data-pjax="0">Sample-Product-1608393517</a></td> -->
                                <td class="text-right"><?php echo $val->price;?></td>
                                <td class="text-right"><?php echo $val->quantity;?></td>
                                <td class="text-right">0.00</td>
                                <!-- <td class="text-right"><?php echo $val->total;?></td> -->

                                <?php endforeach; 
                            endif;?>
                                                              
                            </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5" align="right"><strong>รวมทั้งสิ้น / Sub Total</strong></td>
                            <td colspan="3" align="right">598.00</td>
                        </tr>
                        <tr>
                            <td colspan="5" align="right"><strong>ส่วนลด / Discount</strong></td>
                            <td colspan="3" align="right">0.00</td>
                        </tr>
                        <tr>
                            <td colspan="5" align="right"><strong>ขนส่ง / Shipping</strong></td>
                            <td colspan="3" align="right">50.00</td>
                        </tr>
                                                <tr>
                            <td colspan="5" align="right"><strong>รวมเงินสุทธิ / Net Amount</strong></td>
                            <td colspan="3" align="right">648.00</td>
                        </tr>
                        <tr>
                            <td colspan="5" align="right"><strong>ภาษีมูลค่าเพิ่ม / Vat 7%</strong></td>
                            <td colspan="3" align="right">0.00</td>
                        </tr>
                        <tr>
                            <td colspan="5" align="right"><strong>จำนวนเงินรวม / Total</strong></td>
                            <td colspan="3" align="right">648.00</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


        </div>
        </div>
        </div>


         <!-- Begin Page Content -->
        <div class="container-fluid">
           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
        
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">ที่อยู่จัดส่งสินค้า</h4><!-- Shipping Information -->

                                        <h5>Stanley Jones</h5>
                                        
                                        <address class="mb-0 font-14 address-lg">
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890 <br>
                                            <abbr title="Mobile">M:</abbr> (+01) 12345 67890
                                        </address>
            
                                    </div>
                                </div>
                            </div><br> <!-- end col -->
        
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">ข้อมูลการชำระเงิน</h4><!-- Billing Information -->

                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <p class="mb-2"><span class="font-weight-bold mr-2">Payment Type:</span> Credit Card</p>
                                                <p class="mb-2"><span class="font-weight-bold mr-2">Provider:</span> Visa ending in 2851</p>
                                                <p class="mb-2"><span class="font-weight-bold mr-2">Valid Date:</span> 02/2020</p>
                                                <p class="mb-0"><span class="font-weight-bold mr-2">CVV:</span> xxx</p>
                                            </li>
                                        </ul>
            
                                    </div>
                                </div>
                            </div><br> <!-- end col -->
        
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">ข้อมูลการจัดส่ง</h4><!-- Delivery Info -->
            
                                        <div class="text-center">
                                            <i class="mdi mdi-truck-fast h2 text-muted"></i>
                                            <h5><b>ชื่อขนส่ง :</b>UPS Delivery</h5>
                                            <p class="mb-1"><b>เลขแท็ก :</b> xxxx235</p><!-- Order ID -->
                                            <p class="mb-0"><b>รูปแบบการจัดส่ง :</b> COD</p><!-- Payment Mode -->
                                        </div>
                                    </div>
                                </div>
                            </div> <br><!-- end col -->
                        </div>
                        <!-- end row -->
            </div>
          </div>

        </div>



        
        <!-- /.container-fluid -->



