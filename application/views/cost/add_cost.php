<!-- Begin Page Content -->
    <div class="container-fluid sizealert">
      <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">เพิ่มข้อมูลค่าใช้จ่าย</h1>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">เพิ่มข้อมูลค่าใช้จ่าย</h6>
            </div>
            <div class="card-body">
              <div class="container">

                  <form id="form_supplier" enctype="multipart/form-data">
                  <div class="col-sm-12 col-md-12"> 

                     <div class="form-group row">
                       
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>วันที่</b></label>
                     
                        <div class="col-sm-4">
                          <input class="form-control" type="date" id="order_date" name="order_date" value="<?php echo date('Y-m-d'); ?>" >
                        </div>
                      </div>

                   
                      <div class="form-group row">
                       
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ชื่อค่าใช้จ่าย</b></label>
                     
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="ชื่อค่าใช้จ่าย ...">
                        </div>
                      </div>

                       <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>หมวดหมู่ค่าใช้จ่าย</b></label>
                        <div class="col-sm-4">

                          <select class="form-control" id="product_category" name="product_category">
                            <option  value="">หมวดหมู่ค่าใช้จ่าย</option>
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
                        <div class="col-sm-2">
                      <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          เพิ่มหมวดหมู่
                        </button>
                    </div>

                      </div>

                      

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>รายละเอียดเพิ่มเติม</b></label>
                        <div class="col-sm-8">
                           <textarea  id="supplier_address" name="supplier_address" rows="4" class="form-control" placeholder="รายละเอียดสินค้า ..." style="overflow: hidden; resize: none;"></textarea>
                        </div>
                      </div>


                      
                      <div class="form-group row">
                       
                          <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ค่าใช้จ่าย (บาท)</b></label>
                       
                        <div class="col-sm-2">
                          <input type="text" class="form-control" id="supplier_phone" name="supplier_phone" placeholder="ค่าใช้จ่าย ..." maxlength="10">
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>เอกสารที่เกี่ยวข้อง (เช่น ใบเสร็จ)</b></label>
                        <div class="col-sm-8">

                        <input type="file" class="form-control" id="file" name="file"  />
                       
                         </div> 

                      </div>

                    </div>
                 
                <center>
                  <input type="submit" name="submit" class="btn btn-primary" value="เพิ่มข้อมูล"/>    
                  <button type="button" id="cancal_product" class="btn btn-danger">ยกเลิก</button>
                </center>


                



              </form>   
                <br><br>

                <a><b>ค่าใช้จ่ายในการขาย</b> คือค่าใช้จ่ายที่เกิดขึ้นอันเนื่องมาจากการขาย เช่น ค่าโฆษณา</a><br>

                <a><b>ค่าใช้จ่ายในการบริหาร</b> คือค่าใช้จ่ายที่เกิดขึ้นในการบริหารกิจการ เช่น ค่าจ้างพนักงาน ค่าเช่าสำนักงาน ค่าสาธารณูปโภค</a><br>

                <a><b>ค่าใช้จ่ายอื่นๆ</b> คือค่าใช้จ่ายที่เกิดขึ้นนอกเหนือจากค่าใช้จ่ายข้างต้น</a>
      </div>
    </div>
  </div>
  </div>


      <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">เพิ่มหมวดหมู่ค่าใช้จ่าย</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="หมวดหมู่ค่าใช้จ่าย ...">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
            <button type="button" class="btn btn-primary">บันทึก</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript">


 $(document).ready(function(e){
    // Submit form data via Ajax
    $("#form_supplier").on('submit', function(e){

      // console.log('aa');
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('supplier/add_new_supplier');?>',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#form_supplier').css("opacity",".5");
            },
            success: function(data){ 
            console.log(data);
                if (data['status'] == '1') {
                    // alert("success!!");
                    Swal.fire('เพิ่มข้อมูลเรียบร้อย!!!');
                  
                    setTimeout(function(){ 
                      // alert("Hello"); 
                      window.location="<?php echo base_url('supplier/add_supplier');?>";
                    }, 3000);

                    return false;
                }else{
                  // swal("Error!");
                   // alert("Error!!");
                   Swal.fire('เพิ่มข้อมูลไม่สำเร็จ!!!');
                  return false;
                }
                $('#form_supplier').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
            }
        });
    });

});  


 var rowcount = 1;
  
   function addRow()
    {
        rowcount++;
        var table = document.getElementById("productrow");
        var length = table.rows.length;
        var row = table.insertRow();
        row.id = "prow" + rowcount;
        var cell0 = row.insertCell(0);
        var cell1 = row.insertCell(1);
        var cell2 = row.insertCell(2);
        var cell3 = row.insertCell(3);
        var cell4 = row.insertCell(4);
        var cell5 = row.insertCell(5);
        var cell6 = row.insertCell(6);
       
        cell0.innerHTML = "<input class=\"form-control option\" type=\"text\" id=\"option"+rowcount+"\" name=\"option[]\" maxlength=\"256\" value=\"\"/><span style=\"font-size: 15px;\">ตัวอย่าง: Size S, สีดำ</span>";

        cell1.innerHTML = "<input class=\"form-control sku\" type=\"search\" id=\"sku"+rowcount+"\" name=\"sku[]\" maxlength=\"256\" value=\"\"/>";

        cell2.innerHTML = "<input class=\"form-control barcode\" type=\"text\" id=\"barcode"+rowcount+"\" name=\"barcode[]\" maxlength=\"256\" value=\"\" />";

        cell3.innerHTML = "<input type=\"number\" placeholder='0.00' class=\"form-control form-text text-right\" id=\"stock"+rowcount+"\" name=\"stock[]\"  maxlength=\"32\" value='0.00' />"; 
      
        cell4.innerHTML = "<input type=\"number\" class=\"form-control form-text text-right\" id=\"cost"+rowcount+"\" name=\"cost[]\" placeholder='0.00' maxlength='32' value='0.00' />";

        cell5.innerHTML = "<input type=\"number\" class=\"form-control form-text text-right\" id=\"sale_price"+rowcount+"\" name=\"sale_price[]\" placeholder=0.00 maxlength='32' value='0.00' />";
       
        cell6.innerHTML = "<a href='javascript:deleteRow(" + rowcount + ");' class=\"btn btn-danger btn-sm\" ><i class=\"fa fa-times-circle\" ></i></a></a>";


        // updateTotalstock(rowcount);
        // autocalculate();

        $('#stock'+rowcount).change(function (e) {
                  autocalculate();
        });

    }

    function autocalculate()
    {

      // console.log('aa');
        var table = document.getElementById("productrow");
        var rCount = table.rows.length;
        var total = 0;
       
        var i = 0;
        for (var j = 1; j < rCount; j++) {
            i++;
            while (!document.getElementById('stock' + i)) {
                i++;
            }

            var tmp = ($("#stock" + i).val());
            total += Number(tmp);
           
        }

        $("#stock_total").val(total);

    }

    function deleteRow(id) {


        var table = document.getElementById("productrow");
        var rowid = 'prow' + id;

        console.log('rowid='+rowid);
        //var row = document.getElementById(rowid);
        //row.parentNode.removeChild(row);
        var row = document.getElementById(rowid);
        var count = table.rows.length;
        if (count > 1) {
            while (table && table.tagName != 'TABLE')
                table = table.parentNode;
            if (!table)
                return;
            table.deleteRow(row.rowIndex);

            var idTmp=0;
            for (var i = 1; i < (count - 1); i++) {
                idTmp++;
                //a/lert('ptotalid : ' + ptotalid);
                while (!document.getElementById('productcount' + idTmp)) {
                    idTmp++;
                    alert('ptotalTmp : ' + ptotalTmp);
                }
                // document.getElementById('productcount' + idTmp).innerHTML = i;
            }
            // autocalculate();
        }
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