        <!-- Begin Page Content -->
        <div class="container-fluid" id="page-sumary">

          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800"><?= $this->lang->line('list_order'); ?></h1> -->
         <!--  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

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
                      <th>หมายเลขออเดอร์</th>
                      <th>ชื่อลูกค้า</th>
                      <th>วันที่ทำรายการ</th>
                      <th>โอนเงินแล้ว</th>
                      <th>ยอดชำระทั้งหมด</th>
                      <th>สถานะ</th>
                      <!-- <th>การจัดส่ง</th> -->
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>ลำดับ</th>
                      <th>หมายเลขออเดอร์</th>
                      <th>ชื่อลูกค้า</th>
                      <th>วันที่ทำรายการ</th>
                      <th>โอนเงินแล้ว</th>
                      <th>ยอดชำระทั้งหมด</th>
                      <th>สถานะ</th>
                    </tr>
                  </tfoot>
                   <tbody>
                  <?php if(!empty($order_data)): 
                          foreach($order_data as $idx => $val):?>
                          <tr>
                            <td align="center"><?php echo  $idx+1;?></td>
                            <!-- <td align="center"><?php echo $val->order_id;?></td> -->

                            <td align="center">
                             <button type="button" class="btn-md btn-warning btn-sm btn-warning" onclick="callDetails('<?php echo $val->order_id;?>');"><?php echo $val->order_id;?>
                                <!-- <span class="glyphicon glyphicon-list-alt"></span> -->
                              </button>
                            </td>
                            <td align="center"><?php echo $val->customer_name;?></td>
                            <td align="center"><?php echo $val->time_update;?></td>
                            <td align="center"><?php echo $val->total;?></td>
                            <td align="center"><?php echo $val->total;?></td>
                            <td align="center"><?php echo $val->payment;?></td>
                           <!--  <td align="center">
                              <button type="button" class="btn-md btn-warning btn-sm btn-warning" onclick="callDetails('<?php echo $val->pro_id;?>');">แก้ไข
                                <span class="glyphicon glyphicon-list-alt"></span>
                              </button>

                              <button type="button" class="btn-md btn-danger btn-sm btn-danger" onclick="delRow('<?php echo $val->pro_id;?>');">ลบ
                                <span class="glyphicon glyphicon-trash"></span>
                              </button>

                            </td> -->
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