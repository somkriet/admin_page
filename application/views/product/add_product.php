<!-- <style type="text/css">
#image_preview{
position: absolute;
font-size: 30px;
top: 100px;
left: 100px;
width: 250px;
height: 230px;
text-align: center;
line-height: 180px;
font-weight: bold;
color: #C0C0C0;
background-color: #FFFFFF;
overflow: auto;
}
#selectImage{
padding: 19px 21px 14px 15px;
position: absolute;
bottom: 0px;
width: 414px;
background-color: #FEFFED;
border-radius: 10px;
}
.submit{
font-size: 16px;
background: linear-gradient(#ffbc00 5%, #ffdd7f 100%);
border: 1px solid #e5a900;
color: #4E4D4B;
font-weight: bold;
cursor: pointer;
width: 300px;
border-radius: 5px;
padding: 10px 0;
outline: none;
margin-top: 20px;
margin-left: 15%;
}
.submit:hover{
background: linear-gradient(#ffdd7f 5%, #ffbc00 100%);
}
#file {
color: red;
padding: 5px;
border: 5px solid #8BF1B0;
background-color: #8BF1B0;
margin-top: 10px;
border-radius: 5px;
box-shadow: 0 0 15px #626F7E;
margin-left: 15%;
width: 72%;
}
#message{
position:absolute;
top:120px;
left:815px;
}
#success
{
color:green;
}
#invalid
{
color:red;
}
#line
{
margin-top: 274px;
}
#error
{
color:red;
}
#error_message
{
color:blue;
}
#loading
{
display:none;
position:absolute;
top:50px;
left:850px;
font-size:25px;
        
</style> -->
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
                           <textarea  id="product_detail" name="product_detail" rows="4" class="form-control" placeholder="รายละเอียดสินค้า ..." style="overflow: hidden; resize: none;"></textarea>
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
                          <!-- <input type="file" class="form-control-file" id="product_img"> -->

                          <div id="image_preview">
                            <img id="product_img" src="noimage.png" />
                          </div>
                          <div id="selectImage">
                          <!-- <label>Select Your Image</label><br/> -->
                          <input type="file" name="file" id="file" required />
                          <!-- <input type="submit" value="Upload" class="submit" /> -->
                          </div> 

                        </div>
                    </div>

                <center><button type="button" id="add_product" class="btn btn-primary">เพิ่มข้อมูล</button>  
                <button type="button" id="cancal_product" class="btn btn-danger">ยกเลิก</button></center>
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






        <!-- /.container-fluid -->
       <!--   -->
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script type="text/javascript">
          
          $('#add_product').on('click', function(){
        
            var name = $('#product_name').val();
            var detail = $('#product_detail').val();
            var price = $('#product_price').val();
            var qty = $('#product_qty').val();
            var unit = $('#product_unit').val();
            var category = $('#product_category').val();
            var location = $('#product_location').val();
            var img = $('#product_img').val();

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

            }else if(img == ""){
              
              Swal.fire('กรุณาอัพโหลดรูปสินค้า');

              $( "#product_img" ).focus();

            }else{


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
                        'img': img
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