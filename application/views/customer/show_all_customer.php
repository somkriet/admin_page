<!-- Begin Page Content -->
  <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">ข้อมูลลูกค้า</h1>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
           

        <div class="col-sm-2 col-md-2">
          <a href="<?php echo base_url();?>customer/new_customer" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><i class='fas fa-user-plus'></i>เพิ่มลูกค้า</a>
        </div><br>

           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">ตารางข้อมูลลูกค้า</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <!-- <table id="myTable" class="display table-responsive-sm" style="width:100%"> -->
              <table id="myTable" class="table table-hover" style="width:100%">
                
                <thead class="thead-dark">
                  <tr>
                      <th><?= $this->lang->line('no'); ?></th>
                      <th><?= $this->lang->line('cus_sales_chanels'); ?></th>
                      <th><?= $this->lang->line('cus_name_social'); ?></th>
                      <th><?= $this->lang->line('cus_name'); ?></th>
                      <th><?= $this->lang->line('cus_phone'); ?></th>
                      <th><?= $this->lang->line('cus_email'); ?></th>
                      <th><?= $this->lang->line('cus_create_date'); ?></th>
                      <th><?= $this->lang->line('action'); ?></th>
                  </tr>
                </thead>
                <!-- <tfoot>
                  <tr>
                      <th><?= $this->lang->line('no'); ?></th>
                      <th><?= $this->lang->line('cus_sales_chanels'); ?></th>
                      <th><?= $this->lang->line('cus_name_social'); ?></th>
                      <th><?= $this->lang->line('cus_name'); ?></th>
                      <th><?= $this->lang->line('cus_phone'); ?></th>
                      <th><?= $this->lang->line('cus_email'); ?></th>
                      <th><?= $this->lang->line('cus_create_date'); ?></th>
                      <th><?= $this->lang->line('action'); ?></th>
                  </tr>
                </tfoot> -->
                <tbody>
                  <?php if(!empty($customer_data)): 
                          foreach($customer_data as $idx => $val):?>
                          <tr>
                            <td align="center"><?php echo  $idx+1;?></td>
                            <td align="center">
                              <?php if ($val->sales_channels == "1")
                                    {
                                      echo "PageFacebook";
                                    }elseif ($val->sales_channels == "2") {
                                      echo "Shopee";
                                    }elseif ($val->sales_channels == "3") {
                                      echo "หน้าร้าน";
                                    }elseif ($val->sales_channels == "4") {
                                      echo "Instagram";
                                    }else{
                                      echo "Lazada";
                                    }
                              ?>
                              
                            </td>
                            <td align="center"><?php echo $val->cus_name_social;?></td>
                            <td align="center"><?php echo $val->cus_name;?></td>
                            <td align="center"><?php echo $val->phone_number;?></td>
                            <td align="center"><?php echo $val->email;?></td>
                            <td align="center"><?php echo $val->date_create;?></td>
                            <td align="center">

                  


                              <!-- <button type="button" class="btn-md btn-warning btn-sm btn-warning" onclick="callDetails('<?php echo $val->cus_id;?>');">แก้ไข
                                <span class="glyphicon glyphicon-list-alt"></span>
                              </button> -->

                              <!-- <button type="button" class="btn-md btn-danger btn-sm btn-danger" onclick="delRow('<?php echo $val->cus_id;?>');">ลบ
                                <span class="glyphicon glyphicon-trash"></span>
                              </button> -->




                                <div class="dropdown show">
                                  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
  <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
</svg>
                                    
                                  </a>

                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo base_url();?>customer/show_data_customer/<?php echo $val->cus_id;?>">ดูข้อมูล</a>
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
                      <input type="text" class="form-control" id="customer_phone" placeholder="เบอร์โทรลูกค้า ..." maxlength="10">
                     
                      <i class="fa fa-info-circle"></i> หมายเลขโทรศัพท์ที่ถูกต้อง ตัวอย่าง 0614207877 หรือ 0246255934                    
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>อีเมล</b></label>
                      <input type="email" class="form-control" id="customer_email" placeholder="อีเมลล์ลูกค้า ...">
                       <i class="fa fa-info-circle"></i> รูปแบบอีเมลล์ที่ถูกต้อง เช่น info@wintage.com    
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>ที่อยู่ลูกค้า</b></label>
                      <textarea  id="customer_address" rows="4" class="form-control" placeholder="ที่อยู่จัดส่ง ..."></textarea>
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlInput1">จังหวัด</label>
                        <select name="province_id" id="province" class="form-control">
                            <option value="">เลือกจังหวัด</option>
                              <?php foreach($provinces_data as $idx => $val):?>
                                <option value="<?php echo $val->id;?>"><?php echo $val->name_th;?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">อำเภอ</label>
                        <select name="amphure_id" id="amphure" class="form-control">
                            <option value="">เลือกอำเภอ</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">ตำบล</label>
                        <select name="district_id" id="district" class="form-control">
                            <option value="">เลือกตำบล</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>ช่องทางขาย</b></label>
                        <select id="customer_chanel" class="form-control" name="customer_chanel">
                          <!-- style="display:none" tabindex="-1" aria-hidden="true" -->
                          <option value="">เลือกช่องทางขาย</option>
                          <option value="1">PageFacebook</option>
                          <option value="2">Shopee</option>
                          <option value="3">หน้าร้าน</option>
                          <option value="3">Instagram</option>
                          <option value="5">Lazada</option>
                        </select>
                    </div>

                    <!-- <div class="form-group">
                      <label for="exampleFormControlInput1"><b>เลขประจำตัวประชาชน</b></label>
                      <input type="text" class="form-control" id="customer_id_card" placeholder="เลขประจำตัวประชาชน">
                    </div> -->

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


$(function(){
    var provinceObject = $('#province');
    var amphureObject = $('#amphure');
    var districtObject = $('#district');
    var zip_code = $('#customer_postal');
    
 
    // on change province
    provinceObject.on('change', function(){
        var provinceId = $(this).val();
        // amphureObject.html('<option value="">เลือกอำเภอ</option>');
        // districtObject.html('<option value="">เลือกตำบล</option>');
        $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?php echo base_url('customer/get_amphures');?>",
                data: { 'provinceId': provinceId },
                success: function(data){
                console.log('data'+data);
                $('#amphure').empty();
                $('#amphure').append('<option value="">เลือกอำเภอ</option>');
                  $.each(data['amphures_data'], function(i, val){
                    $('#amphure').append('<option value="' + val['id'] + '">' + val['name_th'] + '</option>');
                  });
                },
                error: function(err){
                  Swal.fire('Error!')
                  return false;
                }
              });
    });
 
    // on change amphure
    amphureObject.on('change', function(){
        var amphureId = $(this).val();
        $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?php echo base_url('customer/get_districts');?>",
                data: { 'amphureId': amphureId },
                success: function(data){
                console.log('data'+data);
                $('#district').empty();
                $('#district').append('<option value="">เลือกตำบล</option>');
                $.each(data['districts_data'], function(i, val){
                    $('#district').append('<option value="' + val['id'] + '">' + val['name_th'] + '</option>');
                    // $('#customer_postal').append('<input value="'+val['zip_code']+'">');
                    // $('#customer_postal').val(data['districts_data'][0]['zip_code']);
                });

                },
                error: function(err){
                  Swal.fire('Error!')
                  return false;
                }
              });
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
          $('#customer_phone').val(res['customer_data'][0]['phone_number']);
          $('#customer_email').val(res['customer_data'][0]['email']);
          $('#customer_address').val(res['customer_data'][0]['cus_address']);    
          $('#province').val(res['customer_data'][0]['cus_provinces']);
          $('#amphure').val(res['customer_data'][0]['cus_amphures']);
          $('#district').val(res['customer_data'][0]['cus_districts']);
          $('#customer_chanel').val(res['customer_data'][0]['sales_channels']);

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