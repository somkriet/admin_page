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

</style>
        <!-- Begin Page Content -->
        <div class="container-fluid" id="page-sumary">

          <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                      <h4 class="page-title">รายการซื้อสินค้าเข้า</h4> <!-- <?= $this->lang->line('list_order'); ?> -->
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
                                                  <a href="<?php echo base_url();?>order/new_order" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><i class='fas fa-user-plus'></i>เพิ่มการสั่งซื้อ</a>
                                                </div>
                                                <br>

                                            </div><!-- end col-->
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                      <!--    <th>ลำดับ</th>
                      <th>หมายเลขออเดอร์</th>
                      <th>ชื่อลูกค้า</th>
                      <th>ช่องทางการขาย</th>
                      <th>อัปเดตล่าสุด</th>
                      <th>รวมทั้งหมด</th>
                      <th>การชำระเงิน</th>
                      <th>การจัดส่ง</th> -->
                                                        <th>Order ID</th>
                                                        <th>Date</th>
                                                        <th>Payment Status</th>
                                                        <th>Total</th>
                                                        <th>Payment Method</th>
                                                        <th>Order Status</th>
                                                        <th style="width: 125px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php if(!empty($order_data)): 
                                                          foreach($order_data as $idx => $val):?>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td><a href="<?php echo base_url();?>order/order_detail" class="text-body font-weight-bold"><?php echo $val->order_id;?></a> </td>
                                                        <td>
                                                            <?php echo $val->date_order;?>
                                                            <!-- <small class="text-muted">10:29 PM</small> -->
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-success-lighten"><i class="mdi mdi-coin"></i> Paid</span></h5>
                                                        </td>
                                                        <td>
                                                            <?php echo $val->total_price;?>
                                                        </td>
                                                        <td>
                                                            <?php echo $val->payment_chanels;?>
                                                        </td>
                                                        <td>
                                                            <h5><span class="badge badge-info-lighten"><?php echo $val->transport;?></span></h5>
                                                        </td>
                                                        <td>

                                                            <a href="javascript:void(0);" class="action-icon"> <i class="fas fa-eye"></i></a>&nbsp;&nbsp;
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="fas fa-file-signature"></i></a>&nbsp;&nbsp;
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="fas fa-trash-alt"></i></a>
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