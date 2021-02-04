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

.badge-info-lighten {
    color: #39afd1;
    background-color: rgba(57,175,209,.18);
}

.badge-success-lighten {
    color: #0acf97;
    background-color: rgba(10,207,151,.18);
}

.badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.badge{transition:none}}a.badge:focus,a.badge:hover{text-decoration:none}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.badge-pill{padding-right:.6em;padding-left:.6em;border-radius:10rem}.badge-primary{color:#fff;background-color:#007bff}a.badge-primary:focus,a.badge-primary:hover{color:#fff;background-color:#0062cc}a.badge-primary.focus,a.badge-primary:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.badge-secondary{color:#fff;background-color:#6c757d}a.badge-secondary:focus,a.badge-secondary:hover{color:#fff;background-color:#545b62}a.badge-secondary.focus,a.badge-secondary:focus{outline:0;box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.badge-success{color:#fff;background-color:#28a745}a.badge-success:focus,a.badge-success:hover{color:#fff;background-color:#1e7e34}a.badge-success.focus,a.badge-success:focus{outline:0;box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.badge-info{color:#fff;background-color:#17a2b8}a.badge-info:focus,a.badge-info:hover{color:#fff;background-color:#117a8b}a.badge-info.focus,a.badge-info:focus{outline:0;box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.badge-warning{color:#212529;background-color:#ffc107}a.badge-warning:focus,a.badge-warning:hover{color:#212529;background-color:#d39e00}a.badge-warning.focus,a.badge-warning:focus{outline:0;box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.badge-danger{color:#fff;background-color:#dc3545}a.badge-danger:focus,a.badge-danger:hover{color:#fff;background-color:#bd2130}a.badge-danger.focus,a.badge-danger:focus{outline:0;box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.badge-light{color:#212529;background-color:#f8f9fa}a.badge-light:focus,a.badge-light:hover{color:#212529;background-color:#dae0e5}a.badge-light.focus,a.badge-light:focus{outline:0;box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.badge-dark{color:#fff;background-color:#343a40}a.badge-dark:focus,a.badge-dark:hover{color:#fff;background-color:#1d2124}a.badge-dark.focus,a.badge-dark:focus{outline:0;box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}

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


  <div class="container-fluid" id="page-sumary">

    <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-l font-weight-bold text-primary text-uppercase mb-1"> คำสั่งซื้อวันนี้ </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> 15 ออเดอร์
                        <!-- <?php if ($today_sales == 0) {
                                  echo '0';
                              }else{
                                echo $today_sales;
                              }?> บาท  -->

                            </div>
                              <!--  $40,000 บาท -->
                     <!--  <div class="small font-weight-bold text-gray-800">ใบเสร็จปกติ : 5 รายการ</div>
                      <div class="small font-weight-bold text-gray-800">ยกเลิกใบเสร็จ : 0 รายการ</div> -->

                    </div>
                    <div class="col-auto">
                      <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-l font-weight-bold text-success text-uppercase mb-1">กำลังแพ็คสินค้า</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> 200 บาท </div>
                      <!-- <div class="small font-weight-bold text-gray-800">ขายหน้าร้าน : 215,000 บาท</div>
                      <div class="small font-weight-bold text-gray-800">ขายออนไลน์ : 215,000 บาท</div> -->
                      <!-- <div class="h10 mb-0 font-weight-bold text-gray-800">ขายออนไลน์ : 215,000 บาท</div> -->
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-l font-weight-bold text-info text-uppercase mb-1">กำลังส่งสินค้า</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 font-weight-bold text-gray-800"> 200 บาท </div>
                          <!-- <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div> -->
                         <!--  <div class="small font-weight-bold text-gray-800">เงินสด : 55,000 บาท</div>
                          <div class="small font-weight-bold text-gray-800">โอนผ่านธนาคาร : 10,500 บาท</div> -->
                        </div>
                       <!--  <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-l font-weight-bold text-warning text-uppercase mb-1">ส่งแล้ว</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">ตารางข้อมูลการชำระเงิน</h6>
      </div>
      <div class="card-body">

        <div class="row ">

          <div class="text-lg-right">                           
            <a href="<?php echo base_url();?>order/new_order" class="btn btn-primary btn-sm " role="button" aria-pressed="true"><i class='fas fa-user-plus'></i>เพิ่มรายการสั่งซื้อ</a>
          </div>
          <br><br>

          <!-- ทั้งหมด -->
          <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">ทั้งหมด  
                </a>
                
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">ยังไม่จ่าย
                 <span class="badge badge-warning"><i class="mdi mdi-coin"></i>

                        <?php if(!empty($order_data_status1)): 
                          foreach($order_data_status1 as $idx => $val):
                            $num1 = $idx+1; 
                          endforeach; 
                         echo $num1;
                        endif;?>


                  </span>
               </a>
                
                <a class="nav-item nav-link" id="product-rating-tab1" data-toggle="tab" href="#product-rating1" role="tab" aria-controls="product-rating1" aria-selected="false">
                  จ่ายแล้ว
                <span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> 
                  <?php if(!empty($order_data_status2)): 
                        foreach($order_data_status2 as $idx => $val):
                        $num2 = $idx+1;  
                         endforeach; 
             
                         echo $num2; 

                         endif;?>

                </span>
               </a>
                
                <a class="nav-item nav-link" id="product-rating-tab2" data-toggle="tab" href="#product-rating2" role="tab" aria-controls="product-rating2" aria-selected="false">
                ยืนยัน
               <span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> 
                <?php if(!empty($order_data_status3)): 
                        foreach($order_data_status3 as $idx => $val):
                          $num3 = $idx+1;  
                        endforeach; 
                          echo $num3;
                      endif;?>
               </span>
               </a>
                
                <a class="nav-item nav-link" id="product-rating-tab3" data-toggle="tab" href="#product-rating3" role="tab" aria-controls="product-rating3" aria-selected="false">
                กำลังแพ็ค 
                <span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> 
                  <?php if(!empty($order_data_status4)): 
                        foreach($order_data_status4 as $idx => $val):
                          $num4 = $idx+1;  
                        endforeach; 
                    
                         echo $num4;
                      endif;?>
                </span>
                </a>
                
                <a class="nav-item nav-link" id="product-rating-tab4" data-toggle="tab" href="#product-rating4" role="tab" aria-controls="product-rating4" aria-selected="false">
                กำลังจัดส่ง
                <span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> 
                  <?php if(!empty($order_data_status5)): 
                        foreach($order_data_status5 as $idx => $val):
                        $num5 = $idx+1;
                        endforeach; 
                        echo $num5;
                      endif;?>


                </span>
                </a>

                <a class="nav-item nav-link" id="product-rating-tab5" data-toggle="tab" href="#product-rating5" role="tab" aria-controls="product-rating5" aria-selected="false">
                  สำเร็จ
                  <span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> 
                    <?php if(!empty($order_data_status6)): 
                        foreach($order_data_status6 as $idx => $val):
                        $num6 = $idx+1;  
                        endforeach; 
                    
                        echo $num6;
                        endif;?>

                  </span>
                </a>

              </div>
            </nav>
            <!-- ทั้งหมด -->

            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade active show" id="product-desc" role="tabpanel" aria-labelledby="order-all"> 

                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>ช่องทางสั่งซื้อ</th>
                      <th>หมายเลขคำสั่งซื้อ</th>
                      <th>ลูกค้า</th>
                      <th>สถานะ</th>
                      <th>บริการขนส่ง</th>
                      <th>ยอดรวม</th>
                      <th>วันที่สั่งซื้อ</th>
                      <th>ดำเนินการ</th>
                    </tr>
                  </thead>
                 
                   <tbody>
                 <?php if(!empty($order_data)): 
                        foreach($order_data as $idx => $val):
                        $num = $idx+1;  ?>
                      <tr>
                      <td>
                          <?php echo $num;?>
                      </td>
                      <td>
                          <?php echo $val->sales_channels;?>                                 
                      </td>
                      <td> 
                          <a href="<?php echo base_url();?>order/order_detail" class="text-body font-weight-bold"><?php echo $val->order_id;?></a>
                      </td>                                
                      <td>
                          <?php echo $val->cus_id;?>
                      </td>
                      <td>

                        <?php if ($val->status_order == '1') {?>
                                <span class="badge badge-danger">
                                <i class="mdi mdi-coin"></i>
                                  ยังไม่จ่าย
                                </span>
                              <?php }elseif ($val->status_order == '2') {?>
                                <span class="badge badge-success">
                                <i class="mdi mdi-coin"></i>
                                  จ่ายแล้ว
                                </span>
                              <?php }elseif ($val->status_order == '3') {?>
                                <span class="badge badge-info">
                                <i class="mdi mdi-coin"></i>
                                  ยืนยันคำสั่งซื้อ
                                </span>
                              <?php }elseif ($val->status_order == '4') {?>
                                <span class="badge badge-secondary">
                                <i class="mdi mdi-coin"></i>
                                  กำลังแพ็คสินค้า
                                </span>
                              <?php }elseif ($val->status_order == '5') {?>
                                <span class="badge badge-warning">
                                <i class="mdi mdi-coin"></i>
                                  กำลังจัดส่ง
                                </span>
                              <?php }elseif ($val->status_order == '6') {?>
                                <span class="badge badge-success-lighten">
                                <i class="mdi mdi-coin"></i>
                                  สำเร็จ
                                </span>
                              <?php } ?>
                      </td>
                      <td>
                          <?php echo $val->transport;?>
                      </td>
                      
                      <td>
                        <h5><span class="badge badge-info-lighten"><?php echo $val->total_price;?></span></h5>
                      </td>
                      
                      <td>
                        <span class="badge badge-info-lighten"> <?php
                          $time = strtotime($val->date_order);
                          $newformat = date("d/m/Y", $time);
                          echo $newformat; // 2011-02-01 
                          ?>
                        </span>
                      </td>
                                                                                   
                      <td style="width: 30%;">


                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                          <!-- <button type="button" class="btn btn-secondary">1</button>
                          <button type="button" class="btn btn-secondary">2</button> -->

                          <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              จัดการออเดอร์
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                              <a class="dropdown-item" href="<?php echo base_url();?>order/call_order_detail/<?php echo $val->order_id;?>">ดูข้อมูล</a>
                              <a class="dropdown-item" href="#">แก้ไข</a>
                              <a class="dropdown-item" href="#">ลบ</a>
                            </div>
                          </div>
                        </div>
                                                        
                        </td>
                    </tr>
                    <?php endforeach; 
                    endif;?>

                        </tbody>
                </table>
              </div>
              </div>

              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> 

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>ช่องทางสั่งซื้อ</th>
                      <th>หมายเลขคำสั่งซื้อ</th>
                      <th>ลูกค้า</th>
                      <th>สถานะ</th>
                      <th>การชำระเงิน</th>
                      <th>บริการขนส่ง</th>
                      <th>ยอดรวม</th>
                      <th>วันที่สั่งซื้อ</th>
                      <th>ดำเนินการ</th>
                    </tr>
                  </thead>
                   <tbody>
                 <?php if(!empty($order_data_status1)): 
                        foreach($order_data_status1 as $idx => $val):
                        $num = $idx+1;  ?>
                      <tr>
                      <td>
                          <?php echo $num;?>
                      </td>
                      <td>
                          <?php echo $val->sales_channels;?>                                 
                      </td>
                      <td> 
                          <a href="<?php echo base_url();?>order/order_detail" class="text-body font-weight-bold"><?php echo $val->order_id;?></a>
                      </td>                                
                      <td>
                          <?php echo $val->cus_id;?>
                      </td>
                      <td>
                         <?php if ($val->status_order == '1') {?>
                                <span class="badge badge-danger">
                                <i class="mdi mdi-coin"></i>
                                  ยังไม่จ่าย
                                </span>
                              <?php }elseif ($val->status_order == '2') {?>
                                <span class="badge badge-success">
                                <i class="mdi mdi-coin"></i>
                                  จ่ายแล้ว
                                </span>
                              <?php }elseif ($val->status_order == '3') {?>
                                <span class="badge badge-info">
                                <i class="mdi mdi-coin"></i>
                                  ยืนยันคำสั่งซื้อ
                                </span>
                              <?php }elseif ($val->status_order == '4') {?>
                                <span class="badge badge-secondary">
                                <i class="mdi mdi-coin"></i>
                                  กำลังแพ็คสินค้า
                                </span>
                              <?php }elseif ($val->status_order == '5') {?>
                                <span class="badge badge-warning">
                                <i class="mdi mdi-coin"></i>
                                  กำลังจัดส่ง
                                </span>
                              <?php }elseif ($val->status_order == '6') {?>
                                <span class="badge badge-success-lighten">
                                <i class="mdi mdi-coin"></i>
                                  สำเร็จ
                                </span>
                              <?php } ?>
                      </td>
                      <td>
                          <?php if ($val->status_payment == '1') {?>
                                <span class="badge badge-success-lighten">
                                <i class="mdi mdi-coin"></i>
                                  ชำระเงินแล้ว
                                </span>
                              <?php
                              }elseif ($val->status_payment == '2') {?>
                                <span class="badge badge-info-lighten">
                                <i class="mdi mdi-coin"></i>
                                  ยังไม่ชำระเงิน
                                </span>
                              <?php }                                 
                            ?>
                      </td>
                                                        
                      <td>
                          <?php echo $val->transport;?>
                      </td>
                      
                      <td>
                        <h5><span class="badge badge-info-lighten"><?php echo $val->total_price;?></span></h5>
                      </td>
                      
                      <td>
                        <span class="badge badge-info-lighten"> <?php
                          $time = strtotime($val->date_order);
                          $newformat = date("d/m/Y", $time);
                          echo $newformat; // 2011-02-01 
                          ?>
                        </span>
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


                                                        
                        </td>
                    </tr>
                    <?php endforeach; 
                    endif;?>

                        </tbody>
                </table>
              </div>
              </div>

              <div class="tab-pane fade" id="product-rating1" role="tabpanel" aria-labelledby="product-rating-tab"> 
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>ช่องทางสั่งซื้อ</th>
                      <th>หมายเลขคำสั่งซื้อ</th>
                      <th>ลูกค้า</th>
                      <th>สถานะ</th>
                      <th>การชำระเงิน</th>
                      <th>บริการขนส่ง</th>
                      <th>ยอดรวม</th>
                      <th>วันที่สั่งซื้อ</th>
                      <th>ดำเนินการ</th>
                    </tr>
                  </thead>
                   <tbody>
                 <?php if(!empty($order_data_status2)): 
                        foreach($order_data_status2 as $idx => $val):
                        $num = $idx+1;  ?>
                      <tr>
                      <td>
                          <?php echo $num;?>
                      </td>
                      <td>
                          <?php echo $val->sales_channels;?>                                 
                      </td>
                      <td> 
                          <a href="<?php echo base_url();?>order/order_detail" class="text-body font-weight-bold"><?php echo $val->order_id;?></a>
                      </td>                                
                      <td>
                          <?php echo $val->cus_id;?>
                      </td>
                      <td>
                         <?php if ($val->status_order == '1') {?>
                                <span class="badge badge-danger">
                                <i class="mdi mdi-coin"></i>
                                  ยังไม่จ่าย
                                </span>
                              <?php }elseif ($val->status_order == '2') {?>
                                <span class="badge badge-success">
                                <i class="mdi mdi-coin"></i>
                                  จ่ายแล้ว
                                </span>
                              <?php }elseif ($val->status_order == '3') {?>
                                <span class="badge badge-info">
                                <i class="mdi mdi-coin"></i>
                                  ยืนยันคำสั่งซื้อ
                                </span>
                              <?php }elseif ($val->status_order == '4') {?>
                                <span class="badge badge-secondary">
                                <i class="mdi mdi-coin"></i>
                                  กำลังแพ็คสินค้า
                                </span>
                              <?php }elseif ($val->status_order == '5') {?>
                                <span class="badge badge-warning">
                                <i class="mdi mdi-coin"></i>
                                  กำลังจัดส่ง
                                </span>
                              <?php }elseif ($val->status_order == '6') {?>
                                <span class="badge badge-success-lighten">
                                <i class="mdi mdi-coin"></i>
                                  สำเร็จ
                                </span>
                              <?php } ?>
                      </td>
                      <td>
                          <?php if ($val->status_payment == '1') {?>
                                <span class="badge badge-success-lighten">
                                <i class="mdi mdi-coin"></i>
                                  ชำระเงินแล้ว
                                </span>
                              <?php
                              }elseif ($val->status_payment == '2') {?>
                                <span class="badge badge-info-lighten">
                                <i class="mdi mdi-coin"></i>
                                  ยังไม่ชำระเงิน
                                </span>
                              <?php }                                 
                            ?>
                      </td>
                                                        
                      <td>
                          <?php echo $val->transport;?>
                      </td>
                      
                      <td>
                        <h5><span class="badge badge-info-lighten"><?php echo $val->total_price;?></span></h5>
                      </td>
                      
                      <td>
                        <span class="badge badge-info-lighten"> <?php
                          $time = strtotime($val->date_order);
                          $newformat = date("d/m/Y", $time);
                          echo $newformat; // 2011-02-01 
                          ?>
                        </span>
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
                                                        
                        </td>
                    </tr>
                    <?php endforeach; 
                    endif;?>

                        </tbody>
                </table>
              </div>
              </div>

              <div class="tab-pane fade" id="product-rating2" role="tabpanel" aria-labelledby="product-rating-tab"> 
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>ช่องทางสั่งซื้อ</th>
                      <th>หมายเลขคำสั่งซื้อ</th>
                      <th>ลูกค้า</th>
                      <th>สถานะ</th>
                      <th>การชำระเงิน</th>
                      <th>บริการขนส่ง</th>
                      <th>ยอดรวม</th>
                      <th>วันที่สั่งซื้อ</th>
                      <th>ดำเนินการ</th>
                    </tr>
                  </thead>
                   <tbody>
                 <?php if(!empty($order_data_status3)): 
                        foreach($order_data_status3 as $idx => $val):
                        $num = $idx+1;  ?>
                      <tr>
                      <td>
                          <?php echo $num;?>
                      </td>
                      <td>
                          <?php echo $val->sales_channels;?>                                 
                      </td>
                      <td> 
                          <a href="<?php echo base_url();?>order/order_detail" class="text-body font-weight-bold"><?php echo $val->order_id;?></a>
                      </td>                                
                      <td>
                          <?php echo $val->cus_id;?>
                      </td>
                      <td>
                         <?php if ($val->status_order == '1') {?>
                                <span class="badge badge-danger">
                                <i class="mdi mdi-coin"></i>
                                  ยังไม่จ่าย
                                </span>
                              <?php }elseif ($val->status_order == '2') {?>
                                <span class="badge badge-success">
                                <i class="mdi mdi-coin"></i>
                                  จ่ายแล้ว
                                </span>
                              <?php }elseif ($val->status_order == '3') {?>
                                <span class="badge badge-info">
                                <i class="mdi mdi-coin"></i>
                                  ยืนยันคำสั่งซื้อ
                                </span>
                              <?php }elseif ($val->status_order == '4') {?>
                                <span class="badge badge-secondary">
                                <i class="mdi mdi-coin"></i>
                                  กำลังแพ็คสินค้า
                                </span>
                              <?php }elseif ($val->status_order == '5') {?>
                                <span class="badge badge-warning">
                                <i class="mdi mdi-coin"></i>
                                  กำลังจัดส่ง
                                </span>
                              <?php }elseif ($val->status_order == '6') {?>
                                <span class="badge badge-success-lighten">
                                <i class="mdi mdi-coin"></i>
                                  สำเร็จ
                                </span>
                              <?php } ?>
                      </td>
                      <td>
                          <?php if ($val->status_payment == '1') {?>
                                <span class="badge badge-success-lighten">
                                <i class="mdi mdi-coin"></i>
                                  ชำระเงินแล้ว
                                </span>
                              <?php
                              }elseif ($val->status_payment == '2') {?>
                                <span class="badge badge-info-lighten">
                                <i class="mdi mdi-coin"></i>
                                  ยังไม่ชำระเงิน
                                </span>
                              <?php }                                 
                            ?>
                      </td>
                                                        
                      <td>
                          <?php echo $val->transport;?>
                      </td>
                      
                      <td>
                        <h5><span class="badge badge-info-lighten"><?php echo $val->total_price;?></span></h5>
                      </td>
                      
                      <td>
                        <span class="badge badge-info-lighten"> <?php
                          $time = strtotime($val->date_order);
                          $newformat = date("d/m/Y", $time);
                          echo $newformat; // 2011-02-01 
                          ?>
                        </span>
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
                                                        
                        </td>
                    </tr>
                    <?php endforeach; 
                    endif;?>

                        </tbody>
                </table>
              </div>
              </div>

              <div class="tab-pane fade" id="product-rating3" role="tabpanel" aria-labelledby="product-rating-tab"> 
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>ช่องทางสั่งซื้อ</th>
                      <th>หมายเลขคำสั่งซื้อ</th>
                      <th>ลูกค้า</th>
                      <th>สถานะ</th>
                      <th>การชำระเงิน</th>
                      <th>บริการขนส่ง</th>
                      <th>ยอดรวม</th>
                      <th>วันที่สั่งซื้อ</th>
                      <th>ดำเนินการ</th>
                    </tr>
                  </thead>
                   <tbody>
                 <?php if(!empty($order_data_status4)): 
                        foreach($order_data_status4 as $idx => $val):
                        $num = $idx+1;  ?>
                      <tr>
                      <td>
                          <?php echo $num;?>
                      </td>
                      <td>
                          <?php echo $val->sales_channels;?>                                 
                      </td>
                      <td> 
                          <a href="<?php echo base_url();?>order/order_detail" class="text-body font-weight-bold"><?php echo $val->order_id;?></a>
                      </td>                                
                      <td>
                          <?php echo $val->cus_id;?>
                      </td>
                      <td>
                        <?php if ($val->status_order == '1') {?>
                                <span class="badge badge-danger">
                                <i class="mdi mdi-coin"></i>
                                  ยังไม่จ่าย
                                </span>
                              <?php }elseif ($val->status_order == '2') {?>
                                <span class="badge badge-success">
                                <i class="mdi mdi-coin"></i>
                                  จ่ายแล้ว
                                </span>
                              <?php }elseif ($val->status_order == '3') {?>
                                <span class="badge badge-info">
                                <i class="mdi mdi-coin"></i>
                                  ยืนยันคำสั่งซื้อ
                                </span>
                              <?php }elseif ($val->status_order == '4') {?>
                                <span class="badge badge-secondary">
                                <i class="mdi mdi-coin"></i>
                                  กำลังแพ็คสินค้า
                                </span>
                              <?php }elseif ($val->status_order == '5') {?>
                                <span class="badge badge-warning">
                                <i class="mdi mdi-coin"></i>
                                  กำลังจัดส่ง
                                </span>
                              <?php }elseif ($val->status_order == '6') {?>
                                <span class="badge badge-success-lighten">
                                <i class="mdi mdi-coin"></i>
                                  สำเร็จ
                                </span>
                              <?php } ?>
                      </td>
                      <td>
                          <?php if ($val->status_payment == '1') {?>
                                <span class="badge badge-success-lighten">
                                <i class="mdi mdi-coin"></i>
                                  ชำระเงินแล้ว
                                </span>
                              <?php
                              }elseif ($val->status_payment == '2') {?>
                                <span class="badge badge-info-lighten">
                                <i class="mdi mdi-coin"></i>
                                  ยังไม่ชำระเงิน
                                </span>
                              <?php }                                 
                            ?>
                      </td>
                                                        
                      <td>
                          <?php echo $val->transport;?>
                      </td>
                      
                      <td>
                        <h5><span class="badge badge-info-lighten"><?php echo $val->total_price;?></span></h5>
                      </td>
                      
                      <td>
                        <span class="badge badge-info-lighten"> <?php
                          $time = strtotime($val->date_order);
                          $newformat = date("d/m/Y", $time);
                          echo $newformat; // 2011-02-01 
                          ?>
                        </span>
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
                                                        
                        </td>
                    </tr>
                    <?php endforeach; 
                    endif;?>

                        </tbody>
                </table>
              </div>
              </div>

              <div class="tab-pane fade" id="product-rating4" role="tabpanel" aria-labelledby="product-rating-tab"> 

                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>ช่องทางสั่งซื้อ</th>
                      <th>หมายเลขคำสั่งซื้อ</th>
                      <th>ลูกค้า</th>
                      <th>สถานะ</th>
                      <th>การชำระเงิน</th>
                      <th>บริการขนส่ง</th>
                      <th>ยอดรวม</th>
                      <th>วันที่สั่งซื้อ</th>
                      <th>ดำเนินการ</th>
                    </tr>
                  </thead>
                   <tbody>
                 <?php if(!empty($order_data_status5)): 
                        foreach($order_data_status5 as $idx => $val):
                        $num = $idx+1;  ?>
                      <tr>
                      <td>
                          <?php echo $num;?>
                      </td>
                      <td>
                          <?php echo $val->sales_channels;?>                                 
                      </td>
                      <td> 
                          <a href="<?php echo base_url();?>order/order_detail" class="text-body font-weight-bold"><?php echo $val->order_id;?></a>
                      </td>                                
                      <td>
                          <?php echo $val->cus_id;?>
                      </td>
                      <td>
                         <?php if ($val->status_order == '1') {?>
                                <span class="badge badge-danger">
                                <i class="mdi mdi-coin"></i>
                                  ยังไม่จ่าย
                                </span>
                              <?php }elseif ($val->status_order == '2') {?>
                                <span class="badge badge-success">
                                <i class="mdi mdi-coin"></i>
                                  จ่ายแล้ว
                                </span>
                              <?php }elseif ($val->status_order == '3') {?>
                                <span class="badge badge-info">
                                <i class="mdi mdi-coin"></i>
                                  ยืนยันคำสั่งซื้อ
                                </span>
                              <?php }elseif ($val->status_order == '4') {?>
                                <span class="badge badge-secondary">
                                <i class="mdi mdi-coin"></i>
                                  กำลังแพ็คสินค้า
                                </span>
                              <?php }elseif ($val->status_order == '5') {?>
                                <span class="badge badge-warning">
                                <i class="mdi mdi-coin"></i>
                                  กำลังจัดส่ง
                                </span>
                              <?php }elseif ($val->status_order == '6') {?>
                                <span class="badge badge-success-lighten">
                                <i class="mdi mdi-coin"></i>
                                  สำเร็จ
                                </span>
                              <?php } ?>
                      </td>
                      <td>
                          <?php if ($val->status_payment == '1') {?>
                                <span class="badge badge-success-lighten">
                                <i class="mdi mdi-coin"></i>
                                  ชำระเงินแล้ว
                                </span>
                              <?php
                              }elseif ($val->status_payment == '2') {?>
                                <span class="badge badge-info-lighten">
                                <i class="mdi mdi-coin"></i>
                                  ยังไม่ชำระเงิน
                                </span>
                              <?php }                                 
                            ?>
                      </td>
                                                        
                      <td>
                          <?php echo $val->transport;?>
                      </td>
                      
                      <td>
                        <h5><span class="badge badge-info-lighten"><?php echo $val->total_price;?></span></h5>
                      </td>
                      
                      <td>
                        <span class="badge badge-info-lighten"> <?php
                          $time = strtotime($val->date_order);
                          $newformat = date("d/m/Y", $time);
                          echo $newformat; // 2011-02-01 
                          ?>
                        </span>
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
                                                        
                        </td>
                    </tr>
                    <?php endforeach; 
                    endif;?>

                        </tbody>
                </table>
              </div>
              </div>


              <div class="tab-pane fade" id="product-rating5" role="tabpanel" aria-labelledby="product-rating-tab"> 
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>ช่องทางสั่งซื้อ</th>
                      <th>หมายเลขคำสั่งซื้อ</th>
                      <th>ลูกค้า</th>
                      <th>สถานะ</th>
                      <th>การชำระเงิน</th>
                      <th>บริการขนส่ง</th>
                      <th>ยอดรวม</th>
                      <th>วันที่สั่งซื้อ</th>
                      <th>ดำเนินการ</th>
                    </tr>
                  </thead>
                   <tbody>
                 <?php if(!empty($order_data_status6)): 
                        foreach($order_data_status6 as $idx => $val):
                        $num = $idx+1;  ?>
                      <tr>
                      <td>
                          <?php echo $num;?>
                      </td>
                      <td>
                          <?php echo $val->sales_channels;?>                                 
                      </td>
                      <td> 
                          <a href="<?php echo base_url();?>order/order_detail" class="text-body font-weight-bold"><?php echo $val->order_id;?></a>
                      </td>                                
                      <td>
                          <?php echo $val->cus_id;?>
                      </td>
                      <td>
                         <?php if ($val->status_order == '1') {?>
                                <span class="badge badge-danger">
                                <i class="mdi mdi-coin"></i>
                                  ยังไม่จ่าย
                                </span>
                              <?php }elseif ($val->status_order == '2') {?>
                                <span class="badge badge-success">
                                <i class="mdi mdi-coin"></i>
                                  จ่ายแล้ว
                                </span>
                              <?php }elseif ($val->status_order == '3') {?>
                                <span class="badge badge-info">
                                <i class="mdi mdi-coin"></i>
                                  ยืนยันคำสั่งซื้อ
                                </span>
                              <?php }elseif ($val->status_order == '4') {?>
                                <span class="badge badge-secondary">
                                <i class="mdi mdi-coin"></i>
                                  กำลังแพ็คสินค้า
                                </span>
                              <?php }elseif ($val->status_order == '5') {?>
                                <span class="badge badge-warning">
                                <i class="mdi mdi-coin"></i>
                                  กำลังจัดส่ง
                                </span>
                              <?php }elseif ($val->status_order == '6') {?>
                                <span class="badge badge-success-lighten">
                                <i class="mdi mdi-coin"></i>
                                  สำเร็จ
                                </span>
                              <?php } ?>
                      </td>
                      <td>
                          <?php if ($val->status_payment == '1') {?>
                                <span class="badge badge-success-lighten">
                                <i class="mdi mdi-coin"></i>
                                  ชำระเงินแล้ว
                                </span>
                              <?php
                              }elseif ($val->status_payment == '2') {?>
                                <span class="badge badge-info-lighten">
                                <i class="mdi mdi-coin"></i>
                                  ยังไม่ชำระเงิน
                                </span>
                              <?php }                                 
                            ?>
                      </td>
                                                        
                      <td>
                          <?php echo $val->transport;?>
                      </td>
                      
                      <td>
                        <h5><span class="badge badge-info-lighten"><?php echo $val->total_price;?></span></h5>
                      </td>
                      
                      <td>
                        <span class="badge badge-info-lighten"> <?php
                          $time = strtotime($val->date_order);
                          $newformat = date("d/m/Y", $time);
                          echo $newformat; // 2011-02-01 
                          ?>
                        </span>
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
                                                        
                        </td>
                    </tr>
                    <?php endforeach; 
                    endif;?>

                        </tbody>
                </table>
              </div>
              </div>





            </div>



        </div>

      </div>
    </div>
  </div>

     

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