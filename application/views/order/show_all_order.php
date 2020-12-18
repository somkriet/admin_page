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


              <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">ทั้งหมด  
                </a>
                
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">ยังไม่จ่าย
                 <span class="badge badge-warning"><i class="mdi mdi-coin"></i>

                        <?php if(!empty($order_data_status1)): 
                        foreach($order_data_status1 as $idx => $val):
                        $num1 = $idx+1;  ?>
                         <?php endforeach; 
                    endif;?>
                         <?php echo $num1 ?>


                  </span>
               </a>
                
                <a class="nav-item nav-link" id="product-rating-tab1" data-toggle="tab" href="#product-rating1" role="tab" aria-controls="product-rating1" aria-selected="false">
                  จ่ายแล้ว
                <span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> 
                  <?php if(!empty($order_data_status2)): 
                        foreach($order_data_status2 as $idx => $val):
                        $num2 = $idx+1;  ?>
                         <?php endforeach; 
                    endif;?>
                         <?php echo $num2 ?>

                </span>
               </a>
                
                <a class="nav-item nav-link" id="product-rating-tab2" data-toggle="tab" href="#product-rating2" role="tab" aria-controls="product-rating2" aria-selected="false">
                ยืนยัน
               <span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> 
                <?php if(!empty($order_data_status3)): 
                        foreach($order_data_status3 as $idx => $val):
                        $num3 = $idx+1;  ?>
                         <?php endforeach; 
                    endif;?>
                         <?php echo $num3 ?>

               </span>
               </a>
                
                <a class="nav-item nav-link" id="product-rating-tab3" data-toggle="tab" href="#product-rating3" role="tab" aria-controls="product-rating3" aria-selected="false">
                กำลังแพ็ค 
                <span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> 
                  <?php if(!empty($order_data_status4)): 
                        foreach($order_data_status4 as $idx => $val):
                        $num4 = $idx+1;  ?>
                         <?php endforeach; 
                    endif;?>
                         <?php echo $num4 ?>

                </span>
                </a>
                
                <a class="nav-item nav-link" id="product-rating-tab4" data-toggle="tab" href="#product-rating4" role="tab" aria-controls="product-rating4" aria-selected="false">
                กำลังจัดส่ง
                <span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> 
                  <?php if(!empty($order_data_status5)): 
                        foreach($order_data_status5 as $idx => $val):
                        $num5 = $idx+1;  ?>
                         <?php endforeach; 
                    endif;?>
                         <?php echo $num5 ?>

                </span>
                </a>

                <a class="nav-item nav-link" id="product-rating-tab5" data-toggle="tab" href="#product-rating5" role="tab" aria-controls="product-rating5" aria-selected="false">
                  สำเร็จ
                  <span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> 
                    <?php if(!empty($order_data_status6)): 
                        foreach($order_data_status6 as $idx => $val):
                        $num6 = $idx+1;  ?>
                         <?php endforeach; 
                    endif;?>
                         <?php echo $num6 ?>


                  </span>
                </a>
              </div>
            </nav>
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
                      <th>การชำระเงิน</th>
                      <th>บริการขนส่ง</th>
                      <th>ยอดรวม</th>
                      <th>วันที่สั่งซื้อ</th>
                      <th>ดำเนินการ</th>
                    </tr>
                  </thead>
                  <tfoot>
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
                  </tfoot>
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
                         <span class="badge badge-info-lighten">
                              <?php if ($val->status_order == '1') {
                                  echo "ยังไม่จ่าย";
                              }elseif ($val->status_order == '2') {
                                  echo "จ่ายแล้ว";
                              }elseif ($val->status_order == '3') {
                                  echo "ยืนยันคำสั่งซื้อ";
                              }elseif ($val->status_order == '4') {
                                  echo "กำลังแพ็คสินค้า";
                              }elseif ($val->status_order == '5') {
                                  echo "กำลังจัดส่ง";
                              }elseif ($val->status_order == '6') {
                                  echo "สำเร็จ";
                              } 
                                                             
                              ?>
                          </span>
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

              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> 

              comments-tab  Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. 


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
                  <tfoot>
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
                  </tfoot>
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
                         <span class="badge badge-info-lighten">
                              <?php if ($val->status_order == '1') {
                                  echo "ยังไม่จ่าย";
                              }elseif ($val->status_order == '2') {
                                  echo "จ่ายแล้ว";
                              }elseif ($val->status_order == '3') {
                                  echo "ยืนยันคำสั่งซื้อ";
                              }elseif ($val->status_order == '4') {
                                  echo "กำลังแพ็คสินค้า";
                              }elseif ($val->status_order == '5') {
                                  echo "กำลังจัดส่ง";
                              }elseif ($val->status_order == '6') {
                                  echo "สำเร็จ";
                              } 
                                                             
                              ?>
                          </span>
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

              <div class="tab-pane fade" id="product-rating1" role="tabpanel" aria-labelledby="product-rating-tab"> 11111Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam  varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. 

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
                  <tfoot>
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
                  </tfoot>
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
                         <span class="badge badge-info-lighten">
                              <?php if ($val->status_order == '1') {
                                  echo "ยังไม่จ่าย";
                              }elseif ($val->status_order == '2') {
                                  echo "จ่ายแล้ว";
                              }elseif ($val->status_order == '3') {
                                  echo "ยืนยันคำสั่งซื้อ";
                              }elseif ($val->status_order == '4') {
                                  echo "กำลังแพ็คสินค้า";
                              }elseif ($val->status_order == '5') {
                                  echo "กำลังจัดส่ง";
                              }elseif ($val->status_order == '6') {
                                  echo "สำเร็จ";
                              } 
                                                             
                              ?>
                          </span>
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

              <div class="tab-pane fade" id="product-rating2" role="tabpanel" aria-labelledby="product-rating-tab"> 222222Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam  varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. 

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
                  <tfoot>
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
                  </tfoot>
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
                         <span class="badge badge-info-lighten">
                              <?php if ($val->status_order == '1') {
                                  echo "ยังไม่จ่าย";
                              }elseif ($val->status_order == '2') {
                                  echo "จ่ายแล้ว";
                              }elseif ($val->status_order == '3') {
                                  echo "ยืนยันคำสั่งซื้อ";
                              }elseif ($val->status_order == '4') {
                                  echo "กำลังแพ็คสินค้า";
                              }elseif ($val->status_order == '5') {
                                  echo "กำลังจัดส่ง";
                              }elseif ($val->status_order == '6') {
                                  echo "สำเร็จ";
                              } 
                                                             
                              ?>
                          </span>
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

              <div class="tab-pane fade" id="product-rating3" role="tabpanel" aria-labelledby="product-rating-tab"> 33333Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam  varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>

              <div class="tab-pane fade" id="product-rating4" role="tabpanel" aria-labelledby="product-rating-tab"> 44444Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam  varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>

              <div class="tab-pane fade" id="product-rating5" role="tabpanel" aria-labelledby="product-rating-tab"> 555555Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam  varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
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