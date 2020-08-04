

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">เพิ่มข้อมูลลูกค้า</h1>
        
           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">รายละเอียดลูกค้า</h6>
            </div>
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-md-6">
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

                    <!-- <div class="form-group">
                      <label for="exampleFormControlInput1"><b>เลขประจำตัวประชาชน</b></label>
                      <input type="text" class="form-control" id="customer_id_card" placeholder="เลขประจำตัวประชาชน">
                    </div> -->

                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> ที่อยู่ลูกค้า</h6>
            </div>
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>ที่อยู่ลูกค้า</b></label>
                      <textarea  id="customer_address" name="customer_address" rows="4" class="form-control" placeholder="ที่อยู่จัดส่ง ..." style="overflow: hidden; resize: none;"></textarea>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="province">จังหวัด</label>
                        <select name="province_id" id="province" class="form-control">
                            <option value="">เลือกจังหวัด</option>
    
                              <?php foreach($provinces_data as $idx => $val):?>
                                <option value="<?php echo $val->id;?>"><?php echo $val->name_th;?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="amphure">อำเภอ</label>
                        <select name="amphure_id" id="amphure" class="form-control">
                            <option value="">เลือกอำเภอ</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="district">ตำบล</label>
                        <select name="district_id" id="district" class="form-control">
                            <option value="">เลือกตำบล</option>
                        </select>
                    </div>
                </div>           
<!-- 
                    <div class="form-group col-md-4">
                      <label for="exampleFormControlInput1"><b>รหัสไปรษณีย์</b></label>
                      <input type="text" class="form-control" id="customer_postal" placeholder="รหัสไปรษณีย์ ...">
                    </div> -->

                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">  ช่องทางขาย</h6>
            </div>
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>ช่องทางขาย</b></label>
                        <select id="customer_chanel " class="form-control" name="customer_chanel">
                          <!-- style="display:none" tabindex="-1" aria-hidden="true" -->
                          <option value="">เลือกช่องทางขาย</option>
                          <option value="1">Facebook</option>
                          <option value="2">shopee</option>
                        </select>
                    </div>

                   

                  </div>
                </div>
              </div>
            </div>
          </div>

                <center><button type="button" id="add_customer" class="btn btn-primary">เพิ่มข้อมูล</button>  
                <button type="button" id="cancal_customer" class="btn btn-danger">ยกเลิก</button></center>




                


        </div>
        <!-- /.container-fluid -->
       <!--   -->
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script type="text/javascript">


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
    // // get zip code
    // districtObject.on('change', function(){
    //     var zip_code = $(this).val();
    //     $.ajax({
    //             type: "POST",
    //             dataType: "JSON",
    //             url: "<?php echo base_url('customer/get_districts');?>",
    //             data: { 'amphureId': zip_code },
    //             success: function(data){
    //             console.log('data'+data);
    //             $('#district').empty();
    //             $('#district').append('<option value="">เลือกตำบล</option>');
    //             $.each(data['districts_data'], function(i, val){
    //                 $('#district').append('<option value="' + val['id'] + '">' + val['name_th'] + '</option>');
    //                 $('#customer_postal').append('val');
    //             });

    //             $('#customer_postal').val(data['districts_data'][val['id']]['zip_code']);
    //             },
    //             error: function(err){
    //               Swal.fire('Error!')
    //               return false;
    //             }
    //           });
    // });
});
          
          $('#add_customer').on('click', function(){
        
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
                url: "<?php echo base_url('customer/add_new_customer');?>",
                data: { 'name': name,
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

                    Swal.fire('Success!!!');
                    
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








        </script> 