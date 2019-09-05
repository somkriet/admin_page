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

              <table id="myTable" class="display" style="width:100%">
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
                            <td align="center"><?php echo  $val->cus_id;?></td>
                            <td align="center"><?php echo $val->cus_name;?></td>
                            <td><?php echo $val->cus_name_social;?></td>
                            <td><?php echo $val->cus_phone;?></td>
                            <td><?php echo $val->cus_email;?></td>
                            <td align="center">

                              <button type="button" class="btn btn-primary" onclick="callDetails('<?php echo $val->cus_id;?>');">ดูข้อมูล
                                <span class="glyphicon glyphicon-list-alt"></span>
                              </button>
                              
                              <button type="button" class="btn btn-warning" onclick="callDetails('<?php echo $val->cus_id;?>');">แก้ไข
                                <span class="glyphicon glyphicon-list-alt"></span>
                              </button>

                              <button type="button" class="btn btn-danger" onclick="delRow('<?php echo $val->cus_id;?>');">ลบ
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
      <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
      <script type="text/javascript">

          $(function(){
            $('#myTable').dataTable({
              ordering: true,
              searching: true,
              lengthChange: true
            });
          });


$('#btn_add').on('click', function(){
    $('#myModal').find('input').val("");

    $('#myModal').modal('show');
  });

  $('#myForm').on('submit', function(){
    alertify.confirm('Save?', function(e){
      if(e){
        var companyID = $('#companyID').val(),
          companyCode = $('#companyCode').val(),
          companyName = $('#companyName').val(),
          contactName = $('#contactName').val(),
          contactTel = $('#contactTel').val();

        $.ajax({
          type: "POST",
          dataType: "JSON",
          url: "<?php echo base_url('index.php/company/saveCompany');?>",
          data: {
            'companyID': companyID,
            'companyCode': companyCode,
            'companyName': companyName,
            'contactName': contactName,
            'contactTel': contactTel
          },
          success: function(res){
            // console.log(res);
            alertify.success('Save Success');

            setTimeout(function(){
              location.reload();
            }, 1000);
          },
          error: function(err){
            console.log(err);
            alertify.alert('Error!');
            return false;
          }
        });
      }
    });

    return false;
  });

  function callDetails(id){
    $.ajax({
      type: "POST",
      dataType: "JSON",
      url: "<?php echo base_url('index.php/company/callDetails');?>",
      data: { 'id': id },
      success: function(res){
        // console.log(res);
        $('#myModal').find('input').val("");

        if(res['status'] == 'success'){
          $('#companyID').val(res['result'][0]['id']);
          $('#companyCode').val(res['result'][0]['companyCode']);
          $('#companyName').val(res['result'][0]['companyName']);
          $('#contactName').val(res['result'][0]['contactName']);
          $('#contactTel').val(res['result'][0]['contactTel']);

          $('#myModal').modal('show');
        }else{
          alertify.alert('Error!');
          return false;
        }
      },
      error: function(err){
        console.log(err);
        alertify.alert('Error!');
        return false;
      }
    });
  }

  function delRow(id){
   Swal.fire('Delete?', function(e){
      if(e){
        $.ajax({
          type: "POST",
          dataType: "JSON",
          url: "<?php echo base_url('index.php/company/delCompany');?>",
          data: { 'id': id },
          success: function(res){
            Swal.fire('Delete Success');

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

    return false;
  }
      </script> 