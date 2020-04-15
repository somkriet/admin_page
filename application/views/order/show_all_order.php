        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"><?= $this->lang->line('list_order'); ?></h1>
         <!--  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->


          <!-- <div class="container"> -->
  

<!--   <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul> -->
<!-- 
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div> -->
<!-- </div> -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">ตารางข้อมูลการสั่งซื้อ</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>หมายเลขออเดอร์</th>
                      <th>ชื่อลูกค้า</th>
                      <th>ช่องทางการขาย</th>
                      <th>อัปเดตล่าสุด</th>
                      <th>รวมทั้งหมด</th>
                      <th>การชำระเงิน</th>
                      <th>การจัดส่ง</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ลำดับ</th>
                      <th>หมายเลขออเดอร์</th>
                      <th>ชื่อลูกค้า</th>
                      <th>ช่องทางการขาย</th>
                      <th>อัปเดตล่าสุด</th>
                      <th>รวมทั้งหมด</th>
                      <th>การชำระเงิน</th>
                      <th>การจัดส่ง</th>
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
                            <td><?php echo $val->sales_channels;?></td>
                            <td><?php echo $val->time_update;?></td>
                            <td><?php echo $val->total;?></td>
                            <td><?php echo $val->payment;?></td>
                            <td><?php echo $val->delivery;?></td>
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

        </div>
        <!-- /.container-fluid -->

<script>
  $(document).ready(function(){
    $("p").click(function(){
      alert("The paragraph was clicked.");
      });
  });


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
        // $('#edit_product').find('input').val("");

        if(res['status'] == 'success'){

           alert("order.");
          // $('#product_id').val(res['show_product'][0]['pro_id']);
          // $('#product_name').val(res['show_product'][0]['pro_name']);
          // $('#product_detail').val(res['show_product'][0]['pro_detail']);
          // $('#product_price').val(res['show_product'][0]['pro_price']);
          // $('#product_qty').val(res['show_product'][0]['pro_qty']);
          // $('#product_unit').val(res['show_product'][0]['pro_unit']);
          // $('#product_unit').val(res['show_product'][0]['pro_img']);

          // $('#exampleModalLabel1').hide();
          // $('#exampleModalLabel2').show();
          // $('#product_id_add').show();
          
          // $('#add_product_save').hide();
          // $('#edit_product_save').show();

          // $('#edit_product').modal('show'); 
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
//function show for edit
</script>