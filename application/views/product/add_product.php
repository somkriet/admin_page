<!-- Begin Page Content -->
    <div class="container-fluid sizealert">
      <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">เพิ่มข้อมูลสินค้า</h1>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">เพิ่มสินค้า</h6>
            </div>
            <div class="card-body">
              <div class="container">
                <div class="row">  

                  <form id="fupForm1" enctype="multipart/form-data">
                  <div class="col-sm-10 col-md-10"> 
                    <!-- <form> -->
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ชื่อสินค้า</b></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="product_name" name="product_name" placeholder="ชื่อสินค้า ...">
                        </div>
                      </div>

                       <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>หมวดหมู่สินค้า</b></label>
                        <div class="col-sm-4">

                          <select class="form-control" id="product_category" name="product_category">
                            <option  value="">เลือกหมวดหมู่สินค้า</option>
                             <?php if(!empty($product_category_data)): 
                               foreach ($product_category_data as $row) {
                                
                                $category_id = $row->product_category_id;
                                $category_name = $row->product_category_name;
                                 
                      
                                echo '<option value="' . $category_id . '">' . $category_name . '</option>';

                                }
                            endif; 
                          ?>
                          </select>

                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>รายละเอียดสินค้า</b></label>
                        <div class="col-sm-8">
                           <textarea  id="product_detail" name="product_detail" rows="8" class="form-control" placeholder="รายละเอียดสินค้า ..." style="overflow: hidden; resize: none;"></textarea>
                        </div>
                      </div>

                      <hr>
                     
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ต้นทุน</b></label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="product_cost" name="product_cost" placeholder="ต้นทุน ...">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ราคาขาย</b></label>
                        <div class="col-sm-8">
                          <input type="number" class="form-control" id="product_price" name="product_price" placeholder="ราคาขาย ...">
                        </div>
                      </div>

                      <hr>

                      <div class="form-group row size">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>จำนวนสินค้า</b></label>
                        <div class="col-sm-2 sizeXS">
                          <b>XS</b> (เอว 24-25)<input type="number" name='size_XS' min="0" class="form-control"  value="0">
                        </div>
                        <div class="col-sm-2 sizeS">
                          <b>S</b> (เอว 26-27)<input type="number" name='size_S' min="0" class="form-control" value="0" >
                        </div>
                        <div class="col-sm-2 sizeM">
                          <b>M</b> (เอว 28-29)<input type="number" name='size_M' min="0" class="form-control" value="0" >
                        </div>
                        <div class="col-sm-2 sizeL">
                          <b>L</b> (เอว 30-31)<input type="number" name='size_L' min="0" class="form-control" value="0" >
                        </div>
                        <br>
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b></b></label>
                        <div class="col-sm-2 sizeXL">
                          <b>XL</b> (เอว 32-33)<input type="number" name='size_XL' min="0" class="form-control" value="0" >
                        </div>
                        <div class="col-sm-2 size2XL">
                          <b>2XL</b> (เอว 34-35)<input type="number" name='size_2XL' min="0" class="form-control " value="0">
                        </div>
                        <div class="col-sm-2 size3XL" >
                          <b>3XL</b> (เอว 36-37)<input type="number" name='size_3XL' min="0" class="form-control" value="0">
                        </div>
                        
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>จำนวนสินค้ารวม</b></label>
                        <div class="col-sm-3">
                          <!-- <input type="text" class="form-control" id="product_qty" placeholder="จำนวน ..." disabled> -->

                            <input type="hidden" name='size_total' id="product_total">
                            <input type="number" id="product_total_show" name="product_total_show" class="form-control" value="0" disabled="disabled">

                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>หน่วยนับ</b></label>
                        <div class="col-sm-3">
                           <input type="text" class="form-control" id="unit_count" name="unit_count" placeholder="เช่น ตัว ชิ้น แพ็ค กล่อง...">
                        </div>
                      </div>

                      

                       <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ที่เก็บสินค้า</b></label>
                        <div class="col-sm-3">
                          <select class="form-control" id="product_location" name="product_location">

                             <option  value="">เลือกที่เก็บสินค้า</option>
                             <?php if(!empty($storage_data)): 
                               foreach ($storage_data as $row) {
                                
                                $storage_id = $row->storage_id;
                                $storage_name = $row->storage_name;
                                 
                      
                                echo '<option value="' . $storage_id . '">' . $storage_name . '</option>';

                                }
                            endif; 
                          ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>สินค้าคงคลังขั้นต่ำ</b></label>
                        <div class="col-sm-3">
                          <input type="number" class="form-control" id="product_minimum" name="product_minimum" placeholder="จำนวน ...">
                        </div>
                      </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>อัพโหลดรูปภาพสินค้า</b></label>
                        <div class="col-sm-8">

                        <input type="file" class="form-control" id="file" name="file" required />
                  
                          <!-- <input type="file" class="form-control-file" id="product_img"> -->

                          <!-- <div id="image_preview">
                            <img id="product_img" src="" />
                          </div>
                          <div id="selectImage"> -->
                          <!-- <label>Select Your Image</label><br/> -->
                          <!-- <input type="file" name="file" id="file" class="form-control" required /> -->

                          <!-- <input type="gu" name="" id="" class="form-control" required> -->
                          <!-- <input type="submit" value="Upload" class="submit" /> -->
                          </div> 

                        </div>
                    </div>
                 
                <center>
                  <!-- <button type="button" id="add_product" class="btn btn-primary">เพิ่มข้อมูล</button> -->
                <input type="submit" name="submit" class="btn btn-primary" value="เพิ่มข้อมูล"/>    
                <button type="button" id="cancal_product" class="btn btn-danger">ยกเลิก</button>
              </center>
              </form>   
                <br><br>





               <!--  <div>
                <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                <div id="image_preview"><img id="previewing" src="noimage.png" /></div>
                <hr id="line">
                <div id="selectImage">
                <label>Select Your Image</label><br/>
                <input type="file" name="file" id="file" required />
                <input type="submit" value="Upload" class="submit" />
                </div>
                </form>
                
                <h4 id='loading' >loading..</h4>
                <div id="message"></div>



                </div> -->
                   
          


        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- </div> -->





 
        <!-- /.container-fluid -->
       <!--   -->
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript">

  // File type validation
$("#file").change(function() {
    var file = this.files[0];
    var fileType = file.type;
    var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
    if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
        alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
        $("#file").val('');
        return false;
    }
});

 $(document).ready(function(e){
    // Submit form data via Ajax
    $("#fupForm1").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('product/add_new_product');?>',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(data){ 
            console.log(data);
                if (data['status'] == '1') {
                    alert("success!!");
                    // swal("Good job!", "You have successfully added the order!", "success");
                    // swal("success!");
                    // window.location="<?php echo base_url('order/add_new_order');?>";

                    setTimeout(function(){ 
                      // alert("Hello"); 
                      window.location="<?php echo base_url('order/new_product');?>";
                    }, 3000);

                    return false;
                }else{
                  // swal("Error!");
                   alert("Error!!");
                  return false;
                }
                $('#fupForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
            }
        });
    });

});  


// $(function(){
//   $('#myTable').dataTable({
//     ordering: true,
//     searching: true,
//     lengthChange: true
//   });

//    $('#myTable2').dataTable({
//     ordering: true,
//     searching: true,
//     lengthChange: true
//   });

// });

          var total = 0;

           $('.sizealert .size3XL,.sizealert .size2XL,.sizealert .sizeXL,.sizealert .sizeL,.sizealert .sizeM,.sizealert .sizeS,.sizealert .sizeXS').change(function (e) {
                  updateTotal();
              });

          function updateTotal() {
            // console.log(parseInt($('.sizealert .size3XL input').val()));
                total =  parseInt($('.sizealert .size3XL input').val()) + parseInt($('.sizealert .size2XL input').val()) + parseInt($('.sizealert .sizeXL input').val()) + parseInt($('.sizealert .sizeL input').val()) + parseInt($('.sizealert .sizeM input').val()) + parseInt($('.sizealert .sizeS input').val()) + parseInt($('.sizealert .sizeXS input').val());

                $('#product_total_show').val(total);
          }

          
          $('#add_product').on('click', function(){
        
            var name = $('#product_name').val();
            var detail = $('#product_detail').val();
            var price = $('#product_price').val();
            var qty = $('#product_qty').val();
            var unit = $('#product_unit').val();
            var category = $('#product_category').val();
            var location = $('#product_location').val();
            // var img = $('#file').val();


            var file_data = $('.file').prop('files')[0];
            
          
            // var name = img.files[0].name; 
            // var form_data = new FormData();
            // var ext = name.split('.').pop().toLowerCase();
            // if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
            // {
            //  alert("Invalid Image File");
            // }
            // var oFReader = new FileReader();
              
            // oFReader.readAsDataURL($('#file').val().files[0]);
            // var f = img.files[0];
            // var fsize = f.size||f.fileSize;
            // if(fsize > 2000000)
            // {
            //   alert("Image File Size is very big");
            // }else{
            //   form_data.append("file", img.files[0]);
            // }


            if (name == "") {
              Swal.fire('กรอกข้อมูลชื่อสินค้า');

               $( "#product_name" ).focus();

            }else if(detail == ""){
              
              Swal.fire('กรอกข้อมูล รายละเอียดสินค้า');

              $( "#product_detail" ).focus();

            }else if(price == ""){
              
              Swal.fire('กรอกข้อมูลราคา');

              $( "#product_price" ).focus();  

            }else if(qty == ""){
              
              Swal.fire('กรอกข้อมูลจำนวนสินค้า');

              $( "#product_qty" ).focus();

            }else if(unit == ""){
              
              Swal.fire('กรอกข้อมูลหน่วยนับ');

              $( "#product_unit" ).focus();

            }else if(category == ""){
              
              Swal.fire('กรอกข้อมูลประเภทสินค้า');

              $( "#product_category" ).focus();

            }else if(location == ""){
              
              Swal.fire('กรอกข้อมูลที่เก็บสินค้า');

              $( "#product_location" ).focus();

            }else if(file_data == undefined){
                
              Swal.fire('กรุณาอัพโหลดรูปสินค้า');

              // $( "#product_img" ).focus();

            }else{

              var form_data = new FormData();                  
                form_data.append('file', file_data);
              // var img1 = new FormData();
              // if($(this).prop('files').length > 0)
              // {
              //     var file = $(this).prop('files')[0];
              //     img1.append("image/jpeg","image/png","image/jpg", file);
              // }

              $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?php echo base_url('product/add_product');?>",
                data: { 'name': name,
                        'detail': detail,
                        'price': price,
                        'qty': qty,
                        'unit': unit,
                        'category': category,
                        'location': location,
                        form_data
                      },

                success: function(res){

                  if(res['status'] == 'success'){

                    Swal.fire('เพิ่มข้อมูลสินค้าเรียบร้อย!!!');
                    
                    return false;

                  }else{

                    Swal.fire('ไม่สามารถเพิ่มข้อมูลสินค้า!!!')
                    
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



           $('#cancal_product').on('click', function(){

              $('#product_name').val('');
              $('#product_detail').val('');
              $('#product_price').val('');
              $('#product_qty').val('');
              $('#product_unit').val('');
              $('#product_category').val('');
              $('#product_location').val('');
              $('#product_img').val('');

           });



           // $(document).ready(function (e) {
          $("#uploadimage").on('submit',(function(e) {
              e.preventDefault();
              $("#message").empty();
              $('#loading').show();
                $.ajax({
                url: "ajax_php_file.php", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,        // To send DOMDocument or non processed data file it is set to false
                success: function(data)   // A function to be called if request succeeds
                {
                $('#loading').hide();
                $("#message").html(data);
                }
              });
          }));

          // Function to preview image after validation
          $(function() {
            $("#file").change(function() {
            $("#message").empty(); // To remove the previous error message
            var file = this.files[0];
            var imagefile = file.type;
            var match= ["image/jpeg","image/png","image/jpg"];
            if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
            {
            $('#product_img').attr('src','noimage.png');
            $("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
            return false;
            }
            else
            {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
            }
            });
          });

          
          function imageIsLoaded(e) {
            $("#file").css("color","green");
            $('#image_preview').css("display", "block");
            $('#product_img').attr('src', e.target.result);
            $('#product_img').attr('width', '250px');
            $('#product_img').attr('height', '230px');
            };
          // });

        </script>  