<style type="text/css">
       table.d {
  table-layout: auto;
  width: 100%;  
}

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

</style> 

        <!-- Begin Page Content -->
        <div class="container-fluid" id="page-sumary">

          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800"><?= $this->lang->line('list_order'); ?></h1> -->
         <!--  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">การจัดส่งของฉัน</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered d" id="dataTable1" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th style="width: 5%;">ลำดับ</th>
                     <th>รูปภาพ</th>
                      <th>ช่องทางสั่งซื้อ</th>
                      <th>หมายเลขคำสั่งซื้อ</th>
                      <th style="width: 30%;">ลูกค้า</th>
                      <th>เบอร์โทร</th>
                      <th>สถานะ</th>
                      <!-- <th>การชำระเงิน</th> -->
                      <th>บริการขนส่ง</th>
                      <th>หมายเลขแทร็คกิ้ง</th>
                      <th>ค่าจัดส่ง</th>
                      <th>จำนวน</th>
                      <th>ยอดรวม</th>
                      <th>วันที่ส่งสินค้า</th>
                      <th>วันที่สั่งซื้อ</th>
                      <th>ดำเนินการ</th>
                    </tr>
                  </thead>
                   <tbody>
                 <?php if(!empty($order_data)): 
                        foreach($order_data as $idx => $val):
                        $num = $idx+1;  ?>
                      <tr>
                      <td >
                          <?php echo $num;?>
                      </td>
                      <td>
                          รูปภาพ
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
                          เบอร์โทร
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
                     <!--  <td>
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
                      </td> -->
                                                        
                      <td>
                          <?php echo $val->transport;?>
                      </td>
                      <td>
                          เลขแทร็คกิ้ง
                      </td>
                      <td>
                        ค่าจัดส่ง
                      </td>

                      <td>
                          จำนวน
                      </td>
                      
                      <td>
                        <h5><span class="badge badge-info-lighten"><?php echo $val->total_price;?></span></h5>
                      </td>

                       <td>
                          วันที่ส่งสินค้า
                      </td>

                      
                      
                      <td>
                        <span class="badge badge-info-lighten"> <?php
                          $time = strtotime($val->date_order);
                          $newformat = date("d/m/Y", $time);
                          echo $newformat; // 2011-02-01 
                          ?>
                        </span>
                      </td>
                                                                                   
                      <td style="width: 20%;">

                       <!--  <button type="button" class="btn btn-info" href="<?php echo base_url();?>order/call_order_detail/<?php echo $val->order_id;?>">ดูข้อมูล</button> -->


                       <a href="<?php echo base_url();?>order/call_order_detail/<?php echo $val->order_id;?>" class="btn btn-info btn-sm " role="button" aria-pressed="true"></i>ดูข้อมูล</a>

                        <!-- class="badge badge-success-lighten" -->

                        <!-- <div class="btn-group">
                          <button type="button" class="badge badge-success-lighten dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                          </button>
                          <ul class="dropdown-menu action">
                          <li><a class="dropdown-item" href="<?php echo base_url();?>order/call_order_detail/<?php echo $val->order_id;?>" data-pjax="0" target="_blank">ดูข้อมูล</a></li>
                          </ul>
                        </div> -->


                       <!--  <div class="dropdown show">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo base_url();?>order/call_order_detail/<?php echo $val->order_id;?>">ดูข้อมูล</a>
                                   <a class="dropdown-item" href="<?php echo base_url();?>customer/show_order_detail/<?php echo $val->cus_id;?>">ดูข้อมูล</a> -->
                                    <!-- <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a> -->
                        <!--       </div>
                        </div>  -->
 

                                                        
                        </td>
                    </tr>
                    <?php endforeach; 
                    endif;?>
                        </tbody>
                </table>
              </div>
            </div>
          </div>


          <!-- Modal edit
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
 -->

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
                     

               <!--    </div>
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
      </div> -->
      <!-- Modal edit-->

        </div>
        <!-- /.container-fluid -->

<script type="text/javascript">
     
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
          // $('#product_price').val(res['order_detail'][0]['pro_price']);z
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