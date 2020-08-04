<!-- Begin Page Content -->
  <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">ข้อมูลลูกค้า</h1>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">ตารางข้อมูลลูกค้า</h6>
            </div>
            <div class="card-body">

              <table id="myTable" class="display table-responsive-sm" style="width:100%">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>cus_name</th>
                      <th>cus_name_social</th>
                      <th>cus_phone</th>
                      <th>cus_email</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                      <th>No</th>
                      <th>cus_name</th>
                      <th>cus_name_social</th>
                      <th>cus_phone</th>
                      <th>cus_email</th>
                      <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php if(!empty($customer_data)): 
                          foreach($customer_data as $idx => $val):?>
                          <tr>
                            <td align="center"><?php echo  $idx+1;?></td>
                            <td align="center"><?php echo $val->cus_name;?></td>
                            <td><?php echo $val->cus_name_social;?></td>
                            <td><?php echo $val->phone_number;?></td>
                            <td><?php echo $val->email;?></td>
                            <td align="center">

                            <!--   <button type="button" class="btn btn-primary" onclick="callDetails('<?php echo $val->cus_id;?>');">ดูข้อมูล
                                <span class="glyphicon glyphicon-list-alt"></span>
                              </button> -->

                              <button type="button" class="btn-md btn-warning btn-sm btn-warning" onclick="callDetails('<?php echo $val->cus_id;?>');">แก้ไข
                                <span class="glyphicon glyphicon-list-alt"></span>
                              </button>

                              <button type="button" class="btn-md btn-danger btn-sm btn-danger" onclick="delRow('<?php echo $val->cus_id;?>');">ลบ
                                <span class="glyphicon glyphicon-trash"></span>
                              </button>

                            </td>
                          </tr>
                              <?php endforeach; 
                          endif;?>
                        </tbody>
              </table>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      <!-- Modal edit-->
      <div class="modal fade" id="edit_customer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT CUSTOMER</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- ... -->

              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-md-12">

                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>รหัสลูกค้า</b></label>
                      <input type="text" class="form-control" id="customer_id" placeholder="รหัสลูกค้า ..." disabled>
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>ชื่อ-สกุล ลูกค้า</b></label>
                      <input type="text" class="form-control" id="customer_name" placeholder="ชื่อ-สกุลลูกค้า ...">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>ชื่อโซเชียล</b></label>
                      <input type="text" class="form-control" id="customer_name_socail" placeholder="ชื่อโซเชียลลูกค้า ที่มาจากช่องทาง Faceook หรือ Line ...">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>เบอร์โทรศัพท์</b></label>
                      <input type="text" class="form-control" id="customer_phone" placeholder="เบอร์โทรลูกค้า ...">
                     
                      <i class="fa fa-info-circle"></i> หมายเลขโทรศัพท์ที่ถูกต้อง ตัวอย่าง 0614207877 หรือ 0246255934                    
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>อีเมล</b></label>
                      <input type="email" class="form-control" id="customer_email" placeholder="อีเมลล์ลูกค้า ...">
                       <i class="fa fa-info-circle"></i> รูปแบบอีเมลล์ที่ถูกต้อง เช่น info@xcommerce.co.th    
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>เลขประจำตัวประชาชน</b></label>
                      <input type="text" class="form-control" id="customer_id_card" placeholder="เลขประจำตัวประชาชน">
                    </div>

                  </div>
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="save_edit_customer">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal edit-->

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript">

$(function(){
  $('#myTable').dataTable({
    ordering: true,
    searching: true,
    lengthChange: true
  });
});

//function show for edit
  function callDetails(id){
    $.ajax({
      type: "POST",
      dataType: "JSON",
      url: "<?php echo base_url('index.php/customer/callDetails');?>",
      data: { 'id': id },
      success: function(res){
        // console.log(res);
        $('#edit_customer').find('input').val("");

        if(res['status'] == 'success'){
          $('#customer_id').val(res['customer_data'][0]['cus_id']);
          $('#customer_name').val(res['customer_data'][0]['cus_name']);
          $('#customer_name_socail').val(res['customer_data'][0]['cus_name_social']);
          $('#customer_phone').val(res['customer_data'][0]['cus_phone']);
          $('#customer_email').val(res['customer_data'][0]['cus_email']);
          $('#customer_id_card').val(res['customer_data'][0]['cus_id_card_number']);
          // $('#contactTel').val(res['result'][0]['cus_address']);
          // $('#contactTel').val(res['result'][0]['cus_postal']);
          // $('#contactTel').val(res['result'][0]['cus_sales_channel']);

          $('#edit_customer').modal('show');
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

  
//function edit
  $('#save_edit_customer').on('click', function(){
            
            var id = $('#customer_id').val();
            var name = $('#customer_name').val();
            var name_socail = $('#customer_name_socail').val();
            var phone = $('#customer_phone').val();
            var email = $('#customer_email').val();
            var id_card = $('#customer_id_card').val();
            var address = $('#customer_address').val();
            var postal = $('#customer_postal').val();
            var chanel = $('#customer_chanel').val();

            if (name == "") {
              Swal.fire('กรอกข้อมูลขื่อ-สกุล');

               $( "#customer_name" ).focus();

            }else if(name_socail == ""){
              
              Swal.fire('กรอกข้อมูลname_socail');

              $( "#customer_name_socail" ).focus();

            }else if(phone == ""){
              
              Swal.fire('กรอกข้อมูลphone');

              $( "#customer_phone" ).focus();  

            }else if(email == ""){
              
              Swal.fire('กรอกข้อมูลemail');

              $( "#customer_email" ).focus();

            }else if(id_card == ""){
              
              Swal.fire('กรอกข้อมูลid_card');

              $( "#customer_id_card" ).focus();

            }else if(address == ""){
              
              Swal.fire('กรอกข้อมูลaddress');

              $( "#customer_address" ).focus();

            }else if(postal == ""){
              
              Swal.fire('กรอกข้อมูลpostal');

              $( "#customer_postal" ).focus();

            }else if(chanel == ""){
              
              Swal.fire('กรอกข้อมูลchanel');

              $( "#customer_chanel" ).focus();

            }else{

              $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?php echo base_url('customer/save_edit_customer');?>",
                data: { 'id' : id,
                        'name': name,
                        'name_socail': name_socail,
                        'phone': phone,
                        'email': email,
                        'id_card': id_card,
                        'address': address,
                        'postal': postal,
                        'chanel': chanel
                      },
                success: function(res){

                  if(res['status'] == 'success'){

                    Swal.fire('Save Success!!!');
                    
                    setTimeout(function(){
                      location.reload();
                    }, 1000);
                    return false;

                  }else{

                    Swal.fire('Not Success!!!')
                    
                    return false;
                  }
                },
                error: function(err){
                  Swal.fire('Error!')
                  return false;
                }
              });
          
            }

          });  
//function edit
  
//function delete
function delRow(id){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: "POST",
          dataType: "JSON",
          url: "<?php echo base_url('index.php/customer/delcustomer');?>",
          data: { 'id': id },
          success: function(res){
            // Swal.fire('Delete Success');
            if (res == 'success') {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
            }
            // swal("Deleted!", "Your imaginary file has been deleted.", "success");

            setTimeout(function(){
              location.reload();
            }, 1000);

          },
          error: function(err){
            console.log(err);
            Swal.fire('Error!');
            return false;
          }
        });
    }
    
    });
}
//function delete


</script> 