        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">เพิ่มข้อมูลสินค้า</h1>
        
           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">เพิ่มสินค้า</h6>
            </div>
            <div class="card-body">
              <div class="container">
                <div class="row">  
                  <div class="col-sm-6 col-md-6"> 
                    <!-- <form> -->
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ชื่อสินค้า</b></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="product_name" placeholder="ชื่อสินค้า ...">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>รายละเอียดสินค้า</b></label>
                        <div class="col-sm-8">
                           <textarea  id="customer_address" name="product_detail" rows="4" class="form-control" placeholder="รายละเอียดสินค้า ..." style="overflow: hidden; resize: none;"></textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ราคาขาย</b></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="product_price" placeholder="ราคาขาย ...">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>จำนวน</b></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="product_qty" placeholder="จำนวน ...">
                        </div>
                      </div>

                       <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>หน่วยนับ</b></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="product_unit" placeholder="หน่วยนับ ...">
                        </div>
                      </div>

                       <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ประเภทสินค้า</b></label>
                        <div class="col-sm-8">
                          <select class="form-control" id="product_category">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>

                       <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ที่เก็บสินค้า</b></label>
                        <div class="col-sm-8">
                          <select class="form-control" id="product_location">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>อัพโหลดรูปภาพสินค้า</b></label>
                        <div class="col-sm-8">
                          <input type="file" class="form-control-file" id="product_img">
                        </div>
                    </div>

                <center><button type="button" id="add_customer" class="btn btn-primary">เพิ่มข้อมูล</button>  
                <button type="button" id="cancal_customer" class="btn btn-danger">ยกเลิก</button></center>
                <br><br>
        </div>





        <!-- /.container-fluid -->
       <!--   -->
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script type="text/javascript">
          
          $('#add_customer').on('click', function(){

          product_name
          product_detail
          product_price
          product_qty
          product_unit
          product_category
          product_location
          product_img
        
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