<style type="text/css">
          .w3-button {
              border: none;
              display: inline-block;
              padding: 8px 16px;
              vertical-align: middle;
              overflow: hidden;
              text-decoration: none;
              color: inherit;
              background-color: inherit;
              text-align: center;
              cursor: pointer;
              white-space: nowrap;
          }

          .w3-black, .w3-hover-black:hover {
              color: #fff!important;
              background-color: #000!important;
          }


          .badge {
    display: inline-block;
    padding: .25em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
}

.badge-info-lighten {
    color: #39afd1;
    background-color: rgba(57,175,209,.18);
}

.badge-success-lighten {
    color: #0acf97;
    background-color: rgba(10,207,151,.18);
}

.mdi-set, .mdi:before {
    display: inline-block;
    font: normal normal normal 24px/1 "Material Design Icons";
    font-size: inherit;
    text-rendering: auto;
    line-height: inherit;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.mdi-eye::before {
    content: "\F208";
}

.page-title-box .page-title {
    font-size: 18px;
    margin: 0;
    line-height: 75px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    color: inherit;
}



/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

</style>

 <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">ตารางข้อมูลการชำระเงิน</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>ช่องทาง</th>
                      <th>รูปภาพ</th>
                      <th>หมายเลขคำสั่งซื้อ</th>
                      <th>ลูกค้า</th>
                      <th>สถานะ</th>
                      <th>การชำระเงิน</th>
                      <th>บริการขนส่ง</th>
                      <th>ยอดรวม</th>
                      <th>วันที่นัดรับสินค้า</th>
                      <th>วันที่สั่งซื้อ</th>
                      <th>ดำเนินการ</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>ลำดับ</th>
                      <th>ช่องทาง</th>
                      <th>รูปภาพ</th>
                      <th>หมายเลขคำสั่งซื้อ</th>
                      <th>ลูกค้า</th>
                      <th>สถานะ</th>
                      <th>การชำระเงิน</th>
                      <th>บริการขนส่ง</th>
                      <th>ยอดรวม</th>
                      <th>วันที่นัดรับสินค้า</th>
                      <th>วันที่สั่งซื้อ</th>
                      <th>ดำเนินการ</th>
                    </tr>
                  </tfoot>
                   <tbody>


                   <?php if(!empty($order_data)): 
                        foreach($order_data as $idx => $val):
                        $num = $idx+1;  
                                                ?>

                      <tr>
                      <!--  <td>
                      <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck2">
                      <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                      </div>
                      </td> -->
                      <td>
                          <?php echo $num;?>
                      </td>

                      <td>
                          <?php echo $val->sales_channels;?>                                 
                      </td>

                      <td>                                 
                                                            
                      </td>
                                                        <td>
                                                           <h5>
                                                           <a href="<?php echo base_url();?>order/order_detail" class="text-body font-weight-bold"><?php echo $val->order_id;?></a>
                                                          </h5>
                                                        </td>
                                                        <td>
                                                          
                                                            <!-- <?php echo $val->total_price;?> -->
                                                        </td>
                                                        <td>
                                                            <?php echo $val->cus_id;?>
                                                             <h5><span class="badge badge-info-lighten">
                                                               <?php if ($val->status_order == '1') {
                                                                 echo "ยืนยันคำสั่งซื้อ";
                                                               }elseif ($val->status_order == '2') {
                                                                 echo "แพ็คสินค้า";
                                                               }
                                                                
                                                                ?>

                                                            </span></h5>

                                                        </td>
                                                       <!--  <td>
                                                            <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                                        </td> -->
                                                        <td>
                                                            <h5><span class="badge badge-info-lighten">
                                                               <?php if ($val->status_payment == '1') {
                                                                 echo "ชำระเงินแล้ว";
                                                               }elseif ($val->status_payment == '2') {
                                                                 echo "ยังไม่ชำระเงิน";
                                                               }
                                                                
                                                                ?>

                                                            </span></h5>
                                                        </td>
                                                        
                                                        <td>
                                                            <?php echo $val->transport;?>
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-info-lighten"><?php echo $val->total_price;?></span></h5>
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-info-lighten"> <?php
                                                            $time = strtotime($val->date_order);
                                                            $newformat = date("d/m/Y", $time);
                                                            echo $newformat; // 2011-02-01 
                                                            ?>
                                                            </span></h5>
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-info-lighten"> <?php
                                                            $time = strtotime($val->date_order);
                                                            $newformat = date("d/m/Y", $time);
                                                            echo $newformat; // 2011-02-01 
                                                            ?>
                                                            </span></h5>
                                                        </td>
                                                       
                                                        <td style="width: 30%;">


                                                           <div class="dropdown show">
                                  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
                            <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
                          </svg>
                                    
                                  </a>

                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo base_url();?>order/call_order_detail/<?php echo $val->order_id;?>">ดูข้อมูล</a>
                                    <!-- <a class="dropdown-item" href="<?php echo base_url();?>customer/show_order_detail/<?php echo $val->cus_id;?>">ดูข้อมูล</a> -->
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                                </div>

                                                            <!-- <a href="javascript:void(0);" class="action-icon"> <i class="fas fa-eye"></i></a>&nbsp;&nbsp;
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="fas fa-file-signature"></i></a>&nbsp;&nbsp;
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="fas fa-trash-alt"></i></a> -->
                                                        </td>
                                                    </tr>
                                                     <?php endforeach; 
                                                  endif;?>




                        </tbody>
                </table>
              </div>
            </div>
          </div>










        <!-- Begin Page Content -->
        <div class="container-fluid" id="page-sumary">

          <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                      <h4 class="page-title"><?= $this->lang->line('list_order'); ?></h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                                            <li class="breadcrumb-item active">Orders</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


          <!-- <div class="card-body"> -->
            <div class="card shadow mb-4">
              <div class="card-body">
            
                                        <div class="row mb-2">
                                            <div class="col-lg-8">
                                                <form class="form-inline">
                                                    <div class="form-group mb-2">
                                                        <label for="inputPassword2" class="sr-only">Search</label>
                                                        <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                                    </div>
                                                    <div class="form-group mx-sm-3 mb-2">
                                                        <label for="status-select" class="mr-2">Status</label>
                                                        <select class="custom-select" id="status-select">
                                                            <option selected="">Choose...</option>
                                                            <option value="1">Paid</option>
                                                            <option value="2">Awaiting Authorization</option>
                                                            <option value="3">Payment failed</option>
                                                            <option value="4">Cash On Delivery</option>
                                                            <option value="5">Fulfilled</option>
                                                            <option value="6">Unfulfilled</option>
                                                        </select>
                                                    </div>
                                                </form>                            
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-lg-right">
                                                   

                                                    <!-- <a class="w3-button w3-black" href="<?php echo base_url();?>order/new_order">Add New Order</a>
                                                 
                                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                                </div> -->


                                                <!-- <div class="col-sm-2 col-md-2"> -->
                                                  <a href="<?php echo base_url();?>order/new_order" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><i class='fas fa-user-plus'></i>สร้างรายการสั่งซื้อ</a>
                                                </div>
                                                <br>

                                            </div><!-- end col-->
                                        </div>


                                        <!-- Tab links -->
                                        <div class="tab">
                                          <button class="tablinks" onclick="openCity(event, 'London')">London</button>
                                          <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
                                          <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
                                        </div>

                                        <!-- Tab content -->
                                        <div id="London" class="tabcontent">
                                          <h3>London</h3>
                                          <p>London is the capital city of England.</p>
                                        </div>

                                        <div id="Paris" class="tabcontent">
                                          <h3>Paris</h3>
                                          <p>Paris is the capital of France.</p>
                                        </div>

                                        <div id="Tokyo" class="tabcontent">
                                          <h3>Tokyo</h3>
                                          <p>Tokyo is the capital of Japan.</p>
                                        </div>


                
                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0" style="width:100%">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <!-- <th style="width: 20px;">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th> -->
                                                       <!--  <th>ลำดับ</th>
                                                        <th>วันที่สั่งซื้อ</th>
                                                        <th>หมายเลขออเดอร์</th>
                                                        <th>ชื่อลูกค้า</th>
                                                        <th>ยอดรวมทั้งหมด</th>
                                                        <th>ช่องทางชำระเงิน</th>
                                                        <th>ช่องทางจัดส่ง</th>
                                                        <th>สถานะออเดอร์</th> -->

                                                         <th>ลำดับ</th>
                                                        <th>ช่องทาง</th>
                                                        <th>รูปภาพ</th>
                                                        <th>หมายเลขคำสั่งซื้อ</th>
                                                        <th>ลูกค้า</th>
                                                        <th>สถานะ</th>
                                                        <th>การชำระเงิน</th>
                                                        <th>บริการขนส่ง</th>
                                                        <th>ยอดรวม</th>
                                                        <th>วันที่นัดรับสินค้า</th>
                                                        <th>วันที่สั่งซื้อ</th>
                                                        <th>ดำเนินการ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php if(!empty($order_data)): 
                                                          foreach($order_data as $idx => $val):
                                                          $num = $idx+1;  
                                                ?>

                                                    <tr>
                                                       <!--  <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td> -->
                                                        <td>
                                                            <?php echo $num;?>
                                                        </td>
                                                        <td>
                                                           
                                                        </td>
                                                        <td>
                                                          
                                                          <?php echo $val->sales_channels;?>
                                                          
                                                        </td>
                                                        <td>
                                                           <?php echo $val->cus_id;?>
                                                        </td>
                                                        <td>
                                                          <a href="<?php echo base_url();?>order/order_detail" class="text-body font-weight-bold"><?php echo $val->order_id;?></a>
                                                            <!-- <?php echo $val->total_price;?> -->
                                                        </td>
                                                        <td>
                                                            
                                                             <h5><span class="badge badge-info-lighten">
                                                               <?php if ($val->status_order == '1') {
                                                                 echo "ยืนยันคำสั่งซื้อ";
                                                               }elseif ($val->status_order == '2') {
                                                                 echo "แพ็คสินค้า";
                                                               }
                                                                
                                                                ?>

                                                            </span></h5>

                                                        </td>
                                                       <!--  <td>
                                                            <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                                        </td> -->
                                                        <td>
                                                            <h5><span class="badge badge-info-lighten">
                                                               <?php if ($val->status_payment == '1') {
                                                                 echo "ชำระเงินแล้ว";
                                                               }elseif ($val->status_payment == '2') {
                                                                 echo "ยังไม่ชำระเงิน";
                                                               }
                                                                
                                                                ?>

                                                            </span></h5>
                                                        </td>
                                                        
                                                        <td>
                                                            <?php echo $val->transport;?>
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-info-lighten"><?php echo $val->total_price;?></span></h5>
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-info-lighten"> <?php
                                                            $time = strtotime($val->date_order);
                                                            $newformat = date("d/m/Y", $time);
                                                            echo $newformat; // 2011-02-01 
                                                            ?>
                                                            </span></h5>
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-info-lighten"> <?php
                                                            $time = strtotime($val->date_order);
                                                            $newformat = date("d/m/Y", $time);
                                                            echo $newformat; // 2011-02-01 
                                                            ?>
                                                            </span></h5>
                                                        </td>
                                                       
                                                        <td style="width: 30%;">


                                                           <div class="dropdown show">
                                  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
  <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
</svg>
                                    
                                  </a>

                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo base_url();?>order/call_order_detail/<?php echo $val->order_id;?>">ดูข้อมูล</a>
                                    <!-- <a class="dropdown-item" href="<?php echo base_url();?>customer/show_order_detail/<?php echo $val->cus_id;?>">ดูข้อมูล</a> -->
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                                </div>

                                                            <!-- <a href="javascript:void(0);" class="action-icon"> <i class="fas fa-eye"></i></a>&nbsp;&nbsp;
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="fas fa-file-signature"></i></a>&nbsp;&nbsp;
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="fas fa-trash-alt"></i></a> -->
                                                        </td>
                                                    </tr>
                                                     <?php endforeach; 
                                                  endif;?>
                                                    
                                                    
                                                    
                                                    
                                                </tbody>
                                            </table>
                                        </div>












                                    </div>
                                  </div>


          <!-- Modal edit-->
      <div class="modal fade bd-example-modal-lg" id="order_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">ADD PRODUCT</h5>
              <h5 class="modal-title" id="exampleModalLabel2">รายการสั่งซื้อ</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- ... -->

              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-md-12">

                      <div class="form-group row" id="product_id_add">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>หมายเลขออเดอร์</b></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="order_id" placeholder="รหัส สินค้า ..." disabled>
                        </div>
                      </div>

                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ผู้สั่งซื้อ</b></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="customer_name" placeholder="ชื่อสินค้า ...">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ช่องทางการขาย</b></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="sale_channel" placeholder="ชื่อสินค้า ...">
                        </div>
                      </div>


                      <!-- <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>รายละเอียดสินค้า</b></label>
                        <div class="col-sm-8">
                           <textarea  id="product_detail" name="product_detail" rows="4" class="form-control" placeholder="รายละเอียดสินค้า ..." style="overflow: hidden; resize: none;"></textarea>
                        </div>
                      </div> -->


                      <!--  <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ราคาซื้อ</b></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="product_purchase_price" placeholder="ราคาขาย ...">
                        </div>
                      </div> -->

                      <!-- <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ราคาขาย</b></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="product_sale_price" placeholder="ราคาขาย ...">
                        </div>
                      </div> -->

                      <!-- <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>จำนวน</b></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="product_qty" placeholder="จำนวน ...">
                        </div>
                      </div>
 -->
                   <!--  <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>หน่วยนับ</b></label>
                        <div class="col-sm-8">
                          <select class="form-control" id="product_unit">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                      </div> -->


                   <!--   <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ประเภทสินค้า</b></label>
                        <div class="col-sm-8">
                          <select class="form-control" id="product_category">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                      </div> -->

                      <!--  <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ที่เก็บสินค้า</b></label>
                        <div class="col-sm-8">
                          <select class="form-control" id="product_location">
                             <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                      </div> -->

                     <!--  <div class="form-group row">
                         <label for="inputEmail3" class="col-sm-3 col-form-label"><b>รูปสินค้า</b></label>
                         <div class="col-sm-8">
                           
                              <form id="form">
                                  <b>อัปโหลดรูปสินค้า</b>
                                  <br>
                                  <div id="img1"></div>
                                  <br>
                                  <input type="file" id="inputFile" name="inputFile"/>
                                  <br>
                                  <button type="submit" id="upload" name="upload">Upload</button>
                                  <div id="targetLayer"></div>
                              </form>
                         </div>
                      </div>   -->

                    <!--   <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                        <div id="image_preview"><img id="previewing" src="noimage.png"  width="250" height="230"/></div>
                            <hr id="line">
                            <div id="selectImage">
                            <label>Select Your Image</label><br/>
                            <input type="file" name="file" id="file" required />
                            <input type="submit" value="Upload" class="submit" />
                        </div>
                      </form> -->
                     

                  </div>
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="add_product_save">Add</button>
              <button type="button" class="btn btn-primary" id="edit_product_save">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal edit-->

        </div>
        <!-- /.container-fluid -->

<script type="text/javascript">

  function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
     
  //function show for edit
  function callDetails(id){
    // alert("The paragraph was clicked.");
    
    $.ajax({
      type: "POST",
      dataType: "JSON",
      url: "<?php echo base_url('index.php/order/call_order_detail');?>",
      data: { 'id': id },
      success: function(res){
        console.log(res);

         $('#order_product').find('input').val("");

        if(res['status'] == 'success'){
          $('#order_id').val(res['order_detail'][0]['order_id']);
          $('#customer_name').val(res['order_detail'][0]['customer_name']);
          $('#sale_channel').val(res['order_detail'][0]['sales_channels']);
          // $('#product_price').val(res['order_detail'][0]['pro_price']);
          // $('#product_qty').val(res['order_detail'][0]['pro_qty']);
          // $('#product_unit').val(res['order_detail'][0]['pro_unit']);
          // $('#product_unit').val(res['order_detail'][0]['pro_img']);

          $('#exampleModalLabel1').hide();
          $('#exampleModalLabel2').show();
          $('#product_id_add').show();
          
          $('#add_product_save').hide();
          $('#edit_product_save').show();

          $('#order_product').modal('show'); 
        }else{
          Swal.fire('Error!');
          return false;
        } 
      },
      error: function(err){
        // console.log(err);
        Swal.fire('Error!'); 
        return false;
      }
    });
  }



</script>