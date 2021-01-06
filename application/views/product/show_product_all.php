<!-- Begin Page Content -->
  <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">ข้อมูลสินค้า</h1>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
           <div class="card shadow mb-4">
            <div class="card-header py-3">

               <div class="row">
              <!-- <div class="col-sm-6 col-md-12"> -->
                <div class="col-sm-6">
                  <h6 class="font-weight-bold text-primary">ตารางรายการสินค้า</h6>
                </div>

               <!--  <div class="col-sm-6" align="right">
                   <button  type="button" class="btn-md btn-warning btn-sm btn-warning" onclick="call_add_product();">เพิ่มสินค้า<span class="glyphicon glyphicon-list-alt"></span>
                  </button>
                </div> -->

                

              <!-- </div> -->
            </div>
                          
            </div>
            <div class="card-body">


              <div class="text-lg-left">                           
                  <a href="<?php echo base_url();?>product/new_product" class="btn btn-primary btn-sm " role="button" aria-pressed="true"><i class='fas fa-user-plus'></i>เพิ่มสินค้า</a>
              </div>
               <br><br>
            

              <table id="myTable" class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>รหัสสินค้า</th>
                      <th>ชื่อสินค้า</th>
                      <!-- <th>ราคาซื้อ</th> -->
                      <th>ราคาขาย</th>
                      <th>คงเหลือ</th>
                      <th>พร้อมขาย</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                      <th>No</th>
                      <th>รหัสสินค้า</th>
                      <th>ชื่อสินค้า</th>
                      <!-- <th>ราคาซื้อ</th> -->
                      <th>ราคาขาย</th>
                      <th>คงเหลือ</th>
                      <th>พร้อมขาย</th>
                      <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php if(!empty($product_data)): 
                          foreach($product_data as $idx => $val):?>
                          <tr>
                            <td align="center"><?php echo  $idx+1;?></td>
                            <td align="center"><?php echo $val->product_id;?></td>
                            <td align="center"><?php echo $val->product_name;?></td>
                            <!-- <td><?php echo $val->pro_purchase_price;?></td> -->
                            <td><?php echo $val->sale_price;?></td>
                            <td><?php echo $val->amount;?></td>
                            <td><?php echo $val->discount;?></td>
                            <td align="center">
                              <button type="button" class="btn-md btn-warning btn-sm btn-warning" onclick="callDetails('<?php echo $val->product_id;?>');">แก้ไข
                                <span class="glyphicon glyphicon-list-alt"></span>
                              </button>

                              <button type="button" class="btn-md btn-danger btn-sm btn-danger" onclick="delRow('<?php echo $val->product_id;?>');">ลบ
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
      <div class="modal fade" id="edit_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">ADD PRODUCT</h5>
              <h5 class="modal-title" id="exampleModalLabel2">EDIT PRODUCT</h5>
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
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>รหัสสินค้า</b></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="product_id" placeholder="รหัส สินค้า ..." disabled>
                        </div>
                      </div>

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
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ราคาซื้อ</b></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="product_purchase_price" placeholder="ราคาขาย ...">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ราคาขาย</b></label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="product_sale_price" placeholder="ราคาขาย ...">
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
                          <select class="form-control" id="product_unit">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                      </div>


                     <div class="form-group row">
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
                      </div>

                       <div class="form-group row">
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
                      </div>

                      <div class="form-group row">
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
                      </div>  

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

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript">


$(document).ready(function (e) {

  $("#form").on("submit", function (event) {
      event.preventDefault(); //prevent default submitting
        var formData = new FormData($(this)[0]);
        $.ajax({
            url: "<?php echo base_url('index.php/product/do_upload');?>",
            type: "post",
            data: formData,
            processData: false, //Not to process data
            contentType: false, //Not to set contentType
            success: function (data) {
              // alert(data);
              $("#targetLayer").html(data);

            }
        });
  });
   
});

$(function(){
  $('#myTable').dataTable({
    ordering: true,
    searching: true, 
    lengthChange: true
  });
});


//function add product
        // $('#add_product').on('click', function(){
        function call_add_product(){
          
          $('#product_id_add').hide();

          $('#exampleModalLabel2').hide();
          $('#exampleModalLabel1').show();

          $('#edit_product_save').hide();
          $('#add_product_save').show();
          

          $('#product_name').val('');
          $('#product_detail').val('');
          $('#product_purchase_price').val('');
          $('#product_sale_price').val('');
          $('#product_qty').val('');
          $('#product_unit').val('');
          $('#product_category').val('');
          $('#product_location').val('');
          $('#product_img').val('');

          $('#edit_product').modal('show'); 
        };

        $('#add_product_save').on('click', function(){
            
            var name = $('#product_name').val();
            var detail = $('#product_detail').val();
            var purchase_price = $('#product_purchase_price').val();
            var sale_price =$('#product_sale_price').val();
            var qty = $('#product_qty').val();
            var unit = $('#product_unit').val();
            var category = $('#product_category').val();
            var location = $('#product_location').val();
            // var img = $('#file').val();

            // var file_data = $('.file').prop('files')[0];
            
            if (name == "") {
              Swal.fire('กรอกข้อมูลชื่อสินค้า');

               $( "#product_name" ).focus();

            }else if(detail == ""){
              
              Swal.fire('กรอกข้อมูล รายละเอียดสินค้า');

              $( "#product_detail" ).focus();

            }else if(purchase_price == ""){
              
              Swal.fire('กรอกข้อมูลราคาซื้อ');

              $( "#product_sale_price" ).focus();  

            }else if(sale_price == ""){
              
              Swal.fire('กรอกข้อมูลราคาขาย');

              $( "#product_sale_price" ).focus();  

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

            // }else if(file_data == undefined){
                
            //   Swal.fire('กรุณาอัพโหลดรูปสินค้า');

              // $( "#product_img" ).focus();

            }else{

              // var form_data = new FormData();                  
              //   form_data.append('file', file_data);


              // var img1 = new FormData();
              // if($(this).prop('files').length > 0)
              // {
              //     var file = $(this).prop('files')[0];
              //     img1.append("image/jpeg","image/png","image/jpg", file);
              // }

              $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?php echo base_url('index.php/product/add_product');?>",
                data: { 'name': name,
                        'detail': detail,
                        'purchase_price': purchase_price,
                        'sale_price':sale_price,
                        'qty': qty,
                        'unit': unit,
                        'category': category,
                        'location': location
                        // form_data
                      },

                success: function(res){

                  if(res['status'] == 'success'){

                    Swal.fire('เพิ่มข้อมูลสินค้าเรียบร้อย!!!');
                    
                    setTimeout(function(){
                     window.location.reload();
                      // location.href = '<?php echo base_url('product');?>';
                    }, 1000);
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
              $('#product_purchase_price').val('');
              $('#product_sale_price').val('');
              $('#product_qty').val('');
              $('#product_unit').val('');
              $('#product_category').val('');
              $('#product_location').val(''); 
              $('#product_img').val('');

           });



          
//function add product

//function show for edit
  function callDetails(id){

    

    $.ajax({
      type: "POST",
      dataType: "JSON",
      url: "<?php echo base_url('index.php/product/callDetails');?>",
      data: { 'id': id },
      success: function(res){
        // console.log(res);
        $('#edit_product').find('input').val("");

        if(res['status'] == 'success'){
          $('#product_id').val(res['show_product'][0]['pro_id']);
          $('#product_name').val(res['show_product'][0]['pro_name']);
          $('#product_detail').val(res['show_product'][0]['pro_detail']);
          $('#product_price').val(res['show_product'][0]['pro_price']);
          $('#product_qty').val(res['show_product'][0]['pro_qty']);
          $('#product_unit').val(res['show_product'][0]['pro_unit']);
          // $('#product_unit').val(res['show_product'][0]['pro_img']);

          $('#exampleModalLabel1').hide();
          $('#exampleModalLabel2').show();
          $('#product_id_add').show();
          
          $('#add_product_save').hide();
          $('#edit_product_save').show();

          $('#edit_product').modal('show'); 
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
  $('#edit_product_save').on('click', function(){
            
            var id = $('#product_id').val();
            var name = $('#product_name').val();
            var detail = $('#product_detail').val();
            var price = $('#product_price').val();
            var qty = $('#product_qty').val();
            var unit = $('#product_unit').val();
            var category = $('#product_category').val();
            var location = $('#product_location').val();
    
            if (name == "") {
              Swal.fire('กรอกข้อมูลขื่อ');

               $("#product_name").focus(); 

            }else if(detail == ""){
              
              Swal.fire('กรอกข้อมูล detail');

              $("#product_detail").focus();  

            }else if(price == ""){
              
              Swal.fire('กรอกข้อมูล price');

              $("#product_price").focus();

            }else if(qty == ""){
               
              Swal.fire('กรอกข้อมูล qty');

              $("#product_qty").focus();

            }else{

              $.ajax({
                type: "POST",
                dataType: "JSON",
                url: "<?php echo base_url('product/save_edit_product');?>",
                data: { 'id' : id,
                        'name': name,
                        'detail': detail,
                        'price': price,
                        'qty': qty,
                        'unit': unit,
                        'category': category,
                        'location': location
                      },
                success: function(res){

                  if(res['status'] == 'success'){

                    // Swal.fire('บันทึกข้อมูลสำเร็จ!');
                    Swal.fire("Save success!", "บันทึกข้อมูลสำเร็จ", "success")
                    
                    setTimeout(function(){
                     window.location.reload();
                      // location.href = '<?php echo base_url('product');?>';
                    }, 1000);
                    return false;

                  }else{

                    // Swal.fire('บันทึกข้อมูลไม่สำเร็จ')
                    // swal("Deleted!", "บันทึกข้อมูลไม่สำเร็จ!.", "success");
                    Swal.fire("Cancelled", "บันทึกข้อมูลไม่สำเร็จ!", "error");
                    
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
      text: "คุณกำลังจะลบสินค้าชิ้นนี้ใช่หรือไม่!",
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
          url: "<?php echo base_url('index.php/product/delete_product');?>",
          data: { 'id': id },
          success: function(res){
            // Swal.fire('Delete Success');
            if (res == 'success') {
              Swal.fire(
                'Deleted!',
                'ได้ทำการลบสินค้าชิ้นนี้เรียบร้อย.',
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