<?php

    $percent = 0;
    $decimal = 2;
    $total = 0;
    $subtotal = 0;
    $bag_total = 0;
    $order_num = 0;
    $design_price = 0;
    $percent_price = 0;
    $total_discount =0;
    $price_discount = 0;
    $total_percent = 0;

 ?>


<!--Begin Page Content -->
<div class="container-fluid">

<form id="fupForm1" enctype="multipart/form-data">


       <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">สร้างรายการสั่งซื้อใหม่</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ข้อมูลทั่วไป</h6>
        </div>
        <div class="card-body">


          
          <div class="row">
            <div class="col-sm">
               <label class="col-sm"><b>ข้อมูลลูกค้า</b></label>

            <!--   <div class="form-group">
                <div class="row">
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-text" id="order_code" name="order_code" maxlength="128" placeholder="IV202009240001" onkeyup="setNormalTextbox(this.id);" disabled>

                  </div>
                </div>
              </div>  -->

              <div class="form-group row">
                    <!-- <label for="example-date-input" class="col-2 col-form-label">Date</label> -->
                    <div class="col-sm-10">
                      
                      <input class="form-control" type="date" id="order_date" name="order_date" value="<?php echo date('d/m/Y') ?>">
                   </div>
                  </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-sm-10">
                    <!-- <input type="text" class="form-control form-text" id="name_customer" name="name_customer" maxlength="128" placeholder="ชื่อ-สกุล"  onkeyup="setNormalTextbox(this.id);"> -->

                     <div class="input-group">
                      <input type="text" class="form-control" id="name_customer" name="name_customer" placeholder="ชื่อ-สกุล" aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg1"><i class="fa fa-address-book"></i></button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-text" id="name_socail" name="name_socail" maxlength="128" placeholder="ชื่อโซเซียล" >
                    <!-- onkeyup="setNormalTextbox(this.id);" -->
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-text" id="phone" name="phone" maxlength="128" placeholder="เบอร์โทร" >
                    <!-- onkeyup="setNormalTextbox(this.id);" -->
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-text" id="email" name="email" maxlength="128" placeholder="อีเมล์" >
                    <!-- onkeyup="setNormalTextbox(this.id);" -->
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-sm-10">
                    <textarea  id="customer_address" name="customer_address" rows="4" class="form-control" placeholder="ที่อยู่จัดส่ง ..." style="overflow: hidden; resize: none;"></textarea>
                  </div>
                </div>
              </div>



            </div>

            <div class="col-sm">
              <label class="col-sm"><b>ประเภทภาษี</b></label>

                 <div class="form-group row">
                        <div class="col-sm-10">
                          <select class="form-control form-text" id="vat" name="vat" placeholder="การจัดส่ง">
                            <option value="1:0:1">ไม่มีภาษี</option>
                            <option value="2:7:0">แยกภาษีมูลค่าเพิ่ม 7%</option>
                            <option value="3:7:1">รวมภาษีมูลค่าเพิ่ม 7%</option>
                          </select>
                        </div>
                      </div>

                <label for="number"><b>เลขประจำตัวผู้เสียภาษี</b></label>
                <div class="form-group">
                  <div class="row">
                    
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-text" id="vat_number" name="vat_number" maxlength="128" placeholder="เลขประจำตัวผู้เสียภาษี" >
                      <!-- onkeyup="setNormalTextbox(this.id);" -->
                    </div>
                  </div>
                </div>

                 <label for="number"><b>ชื่อสาขา</b></label>
                <div class="form-group">
                  <div class="row">
                   
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-text" id="name_branch" name="name_branch" maxlength="128" placeholder="ชื่อสาขา" >
                      <!-- onkeyup="setNormalTextbox(this.id);" -->
                    </div>
                  </div>
                </div>

                <label for="number"><b>เลขที่สาขา</b></label>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-text" id="number_branch" name="number_branch"  maxlength="128" placeholder="เลขที่สาขา" >
                      <!-- onkeyup="setNormalTextbox(this.id);" -->
                    </div>
                  </div>
                </div>

            </div>

        </div>


                  <!-- Large modal -->
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">เลือกสินค้า</button> -->

                        <div id="data_customer" class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              

                               <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">เลือกลูกค้า</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">

                                  <div class="table-responsive">
              <!-- <table id="myTable" class="display table-responsive-sm" style="width:100%"> -->
                                    <table id="myTable" class="table table-hover" style="width:100%">
                                      
                                      <thead class="thead-dark">
                                        <tr>
                                            <th><?= $this->lang->line('no'); ?></th>
                                            <th><?= $this->lang->line('cus_name'); ?></th>
                                            <th><?= $this->lang->line('action'); ?></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php if(!empty($customer_data)): 
                                                foreach($customer_data as $idx => $val):?>
                                                <tr>
                                                  <td align="center"><?php echo  $idx+1;?></td>
                                                  <td >
                                                    <b><?= $this->lang->line('cus_name'); ?> : </b><?php echo $val->cus_name;?> (<b>รหัส : </b><?php echo  $val->cus_id;?>)<br>
                                                    <b><?= $this->lang->line('cus_phone'); ?> : </b> <?php echo $val->phone_number;?><br>
                                                    <b><?= $this->lang->line('cus_email'); ?> : </b> <?php echo $val->email;?><br>
                                                    <b><?= $this->lang->line('cus_name_social'); ?> : </b> <?php echo $val->cus_name_social;?>
                                                  </td>
                                                  <td align="center">
                                                    <button type="button" class="btn btn-primary" onclick="selectCustomer('<?php echo $val->cus_id;?>');">เลือก</button>
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
                        </div>
                        <!-- Large modal --> 
      </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">สินค้า</h6>
        </div>
        <div class="card-body">


          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">เลือกสินค้า</button>

              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                              
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">เลือกสินค้าหลายรายการ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                  </div>
              </div><br><br>


              <!-- <div id='TextBoxesGroup'>
                <div id="TextBoxDiv1">
                  <label>Textbox #1 : </label><input type='textbox' id='textbox1' >
                </div>
              </div>
              <input type='button' value='Add Button' id='addButton'>
              <input type='button' value='Remove Button' id='removeButton'>
              <input type='button' value='Get TextBox Value' id='getButtonValue'> -->


              <div class="t-responsive">
                         <table class="table-bordered" id="productrow">
                            <thead>
                                <tr>
                                    
                                    <th class="select"></th>
                                    <th class="id">รหัส</th>
                                    <th class="name">ชื่อสินค้า<span class="required-field">*</span></th>
                                    <th class="amount text-right">จำนวน<span class="required-field">*</span></th>
                                    <th class="value text-right">มูลค่าต่อหน่วย<span class="required-field">*</span></th>
                                    <th class="discount text-right">ส่วนลดต่อหน่วย</th>
                                    <th class="total text-right">รวม</th>
                                    <th class="action"></th>
                                </tr>
                            </thead>
                            <tbody>
                                        <tr id="prow1">
                                            <td class="select text-center vertical-align">
                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".selectproduct" value=""><span id="productcount1" class="sr-only"></span>เลือก</button>
                                            </td>
                                            <td class="id">
                                                <div class="typeahead__container">
                                                    <div class="typeahead__field">
                                                        <span class="typeahead__query">
                                                            <input class="form-control" name="productcode1" type="search" id="productcode1" maxlength="32" value="">

                                                        </span>
                                                    </div>
                                                </div>
                                                <input type="hidden" id="productid1">
                                                <input type="hidden" id="isbundles1" value="0-0">
                                            </td>
                                            <td id="tdproductname1" class="name">
                                                <div class="typeahead__container">
                                                    <div class="typeahead__field">
                                                        <span class="typeahead__query">
                                                            <span class="typeahead__cancel-button"></span>
                                                            <input class="form-control" name="productname1" type="text" id="productname1" maxlength="256" value="">

                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="amount">
                                                <div class="input-group form-input-group spinner">
                                                    <input type="number" class="form-control" id="productnumber1" name="productnumber1" placeholder="0.00" maxlength="32" value="">
                                                </div>
                                            </td>
                                            <td class="value">
                                                <input type="text" class="form-control form-text text-right font-lato" id="productpricepernumber1" name="productpricepernumber1" placeholder="0.00" maxlength="32" value="">
                                            </td>
                                            <td class="discount">
                                                <input type="text" class="form-control form-text font-lato text-right" id="discountpernumber1" name="discountpernumber1" placeholder="จำนวนเงิน หรือ %" maxlength="32" value="">
                                            
                                                <input type="hidden" id="serialnoid1" value="0">
                                            </td>
                                            <td class="total text-right">
                                                <p id="totalprice1" class="form-text--transparent font-lato">0.00</p><input type="hidden" id="producttotalprice1" name="producttotalprice1" value="0.00">
                                            </td>
                                            <td class="action">
                                                <a href="javascript:deleteRow(1);" class="d-inline-block btn-etc mt-2">
                                                  <i class="fa fa-times-circle" aria-hidden="true" style="color: red;"></i></a>
                                            </td>
                                        </tr>
                          </tbody>
                        </table>

                    </div><br>



              <a href="javascript:addRow();" class="button button-link button-md">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                <span>เพิ่มสินค้า</span>
                            </a><br>


          <br>                  
          <div class="row">
            <div class="col-sm">


              <div class="form-group">
                  <div class="row">
                      <div class="col-sm-4 text-left">
                          <label for="discounttext">ช่องทางจัดส่ง</label>
                      </div>
                      <div class="col-sm-8">
                          <select class="form-control form-text" id="shippingchannel" name="shippingchannel" placeholder="การจัดส่ง">
                                                    <option>เลือกช่องทางจัดส่ง</option>
                                                    <option>ไปรษณีย์ไทย ธรรมดา</option>
                                                    <option>ไปรษณีย์ไทย EMS</option>
                                                    <option>Flash</option>
                                                    <option>Kerry</option>
                                                    <option>J&T</option>
                      </select>
                      </div>
                  </div>
              </div>

               <div class="form-group">
                  <div class="row">
                      <div class="col-sm-4 text-left">
                          <label for="discounttext">หมายเหตุ</label>
                      </div>
                      <div class="col-sm-8">
                             <textarea class="form-control form-text" rows="3" id="description" name="description"></textarea>
                      </div>
                  </div>
              </div>

            </div>


            <div class="col-sm">

              <div class="form-group">
                  <div class="row">
                      <div class="col-sm-6 text-right">
                          <label for="discounttext">ส่วนลด</label>
                      </div>
                      <div class="col-sm-6">
                          <input type="text" class="form-control form-text pull-right text-right font-lato" placeholder="จำนวนเงิน หรือ %" id="discounttext" onblur="autocalculate()" maxlength="32" value="">
                      </div>
                  </div>
              </div>

                  <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 text-right">
                                            <label for="shippingamount" class="">
                                                ค่าส่ง
                                                <span class="help-text">(ที่เรียกเก็บจากลูกค้า)</span>
                                            </label>
                                            <label class="d-block fs-sm"><input type="checkbox" onclick="autocalculate()" id="isshippingchk" disabled="disabled"> ภาษีมูลค่าเพิ่ม</label>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <input type="text" class="form-control form-text pull-right text-right font-lato" id="shippingamount" placeholder="0.00" onblur="autocalculate()" maxlength="32" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 text-right">
                                        <p>มูลค่ารวมก่อนภาษี</p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <p>
                                            <span id="amount2text" class="font-lato"><?php echo $total_percent; ?></span>
                                            <input type="hidden" id="amount2" value="0.00">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 text-right">
                                        <p>ภาษีมูลค่าเพิ่ม (7%)</p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <p>
                                            <span id="vatamounttext" class="font-lato"><?php echo $total_percent; ?></span>
                                            <input type="hidden" class="form-control form-text" id="vatamount" onblur="autocalculate()" maxlength="32" onfocus="removeComma(this.id);" value="0.00">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 text-right">
                                        <p>มูลค่ารวม</p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <p>
                                            <span id="amountbeforeshippingtext" class="font-lato"><?php echo $total_percent; ?></span>
                                            <input type="hidden" class="form-control form-text" id="amountbeforeshipping" maxlength="32" value="0.00">
                                        </p>
                                    </div>
                                </div>
                                <div class="row bg-grey-50 p-3 pr-0 pl-0 mt-2">
                                    <div class="col-sm-6 text-right">
                                        <p class="font-kanit fw-500 m-0" style="line-height:1.75rem;">มูลค่ารวมสุทธิ</p>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <p class="font-lato fw-600 fs-xmd m-0">
                                            <span id="amounttext"><?php echo $total_percent; ?></span>
                                            <input type="hidden" class="form-control form-text" id="amount" maxlength="32" value="0.00">
                                        </p>
                                    </div>
                                </div>
                                <div class="row" style="display:none;">
                                    <div class="col-xs-6 text-right">
                                        <label for="whtcheck">
                                            ภาษีหัก ณ ที่จ่าย
                                        </label>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <input type="checkbox" id="whtcheck" onclick="changeWHTType();">
                                        <select class="form-control form-text form-select -half whtarea" id="whtpercent" onchange="changeWHTType()" style=" display: none;">
                                            <option value="1">1%</option>
                                            <option value="2">2%</option>
                                            <option value="3" selected="">3%</option>
                                            <option value="5">5%</option>
                                            <option value="10">10%</option>
                                            <option value="15">15%</option>
                                        </select>
                                        <input type="hidden" id="whtamount" onfocus="removeComma(this.id);" value="0.00">
                                        <input type="hidden" id="paymentwhtamount" onfocus="removeComma(this.id);" value="0.00">
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="hidden" id="paymentamount" maxlength="32" value="0.00"><input type="hidden" id="paymentname" maxlength="32" value=""><input type="hidden" id="paymentdatetimestatus" value="0"><input type="hidden" id="paymentdatetime" value="">
                                </div>


              <!-- <label class="col-sm"><b>ประเภทภาษี</b></label>

                 <div class="form-group row">
                        <div class="col-sm-10">
                          <select class="form-control form-text" id="vat" name="vat" placeholder="การจัดส่ง">
                            <option value="1:0:1">ไม่มีภาษี</option>
                            <option value="2:7:0">แยกภาษีมูลค่าเพิ่ม 7%</option>
                            <option value="3:7:1">รวมภาษีมูลค่าเพิ่ม 7%</option>
                          </select>
                        </div>
                      </div> -->


            </div>

        </div>



       <!-- Large modal -->
            <div id="data_product" class="modal fade selectproduct" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">      

                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">เลือกสินค้า</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <div class="modal-body">

                                   <div class="table-responsive">
                                    <table id="myTable2" class="table table-hover" style="width:100%">
                                      
                                      <thead class="thead-dark">
                                        <tr>
                                            <th><?= $this->lang->line('no'); ?></th>
                                            <th>ชื่อสินค้า</th>
                                            <th>คงเหลือ</th>
                                            <th>พร้อมขาย</th>
                                            <th>ราคาขาย</th>
                                            <th><?= $this->lang->line('action'); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(!empty($product_data)): 
                                                foreach($product_data as $idx => $val):?>
                                                <tr>
                                                  <td align="center"><?php echo  $idx+1;?></td>
                                                  <td >
                                                    <?php echo $val->product_name;?>
                                                  </td>
                                                  <td align="center">
                                                    <?php echo  $val->amount;?>  
                                                  </td>
                                                  <td align="center">
                                                    <?php echo  $val->amount;?> 
                                                  </td>
                                                  <td align="center">
                                                    <?php echo  $val->sale_price;?>
                                                      
                                                  </td>
                                                  <td align="center">
                                                    <button type="button" class="btn btn-primary" onclick="selectProductone('<?php echo $val->product_id;?>');">เลือก</button>
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
                        </div>
                    <!-- Large modal -->    

    </div>
    </div>

    <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">การจัดส่ง</h6>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm">
                 <label class="col-sm"><b>ข้อมูลที่อยู่ผู้รับ</b></label>
                
                <a href="javascript:copyInfo()" onclick="copyInfo();" value="info_customer"><i class="fa fa-clone"></i><span>คัดลอกจากข้อมูลลูกค้า</span></a>

                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-text" id="name_receiver" maxlength="128" placeholder="ชื่อ-สกุล" >
                      <!-- onkeyup="setNormalTextbox(this.id);" -->
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-text" id="phone_receiver" maxlength="128" placeholder="เบอร์โทร" >
                      <!-- onkeyup="setNormalTextbox(this.id);" -->
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-text" id="email_receiver" maxlength="128" placeholder="อีเมล์" >
                      <!-- onkeyup="setNormalTextbox(this.id);" -->
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-10">
                      <textarea  id="address_receiver" name="address_receiver" rows="4" class="form-control" placeholder="ที่อยู่จัดส่ง ..." style="overflow: hidden; resize: none;"></textarea>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-sm">


                <label class="col-sm"><b>วันส่งสินค้า</b></label>
                  <!-- <div class="col-sm-10"> -->
                    <div class="form-group row">
                      <!-- <label for="example-date-input" class="col-2 col-form-label">Date</label> -->
                      <div class="col-sm-10">
                        <input class="form-control" type="date" value="" id="sent_date">
                     </div>
                    </div>
                  <!-- </div> -->

                  <label ><b>Tracking No.</b></label>
                    <div class="form-group row">
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="track_no">
                      </div>
                    </div>

              </div>
         
          </div>
      </div>
    </div>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">การชำระเงิน</h6>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm">
              <label class="col-sm"><b>ช่องทางการชำระ</b></label>
                <div class="form-group row">
                    <div class="col-sm-10">
                      <select class="form-control form-text" id="payment_channel" placeholder="=ช่องทางการชำระเงิน">
                        <option>เลือกการชำระเงิน</option>
                        <option value="CASH">เงินสด</option>
                        <option value="BANK">ธนาคารกสิกรไทย</option>
                        <option value="COD">COD (เก็บเงินปลายทาง)</option>
                      </select>
                    </div>
                </div>
              </div>

              <div class="col-sm">
                <label class="col-sm"><b>อัพโหลดสลิปโอน</b></label>
                <div class="form-group">                      
                    <div class="col-sm-10">  
                          <input type="file" class="form-control" id="file" name="file"  />
                          <!-- required -->
                        </div>
                    </div>
              </div>
         
          </div>
      </div>
  </div>

   <div class="row">
    <div class="col-sm-2 text-right">
      <!-- <button class="form-control">aaa</button> -->
    </div>
    <div class="col-sm-2 text-right">
      <!-- <button class="form-control">aaa</button> -->
    </div>
    <div class="col-sm-2 text-right">
      <!-- <button class="form-control">บันทึก</button> -->
      <button type="button" class="form-control btn btn-secondary">บันทึก+สร้างใหม่</button>
    </div>
     <div class="col-sm-2 text-right">
      <!-- <button class="form-control">บันทึก</button> -->
      <!-- <button type="button" class="form-control btn btn-primary">บันทึก</button> -->
      <input type="submit" name="submit" class="form-control btn btn-primary" value="บันทึก"/>  
    </div>
  </div>

</form>
</div>


<style type="text/css">
  .bg-grey-50 {
    background-color: #e8ecef;
}
</style>


<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript">

  $(document).ready(function(e){
    // Submit form data via Ajax
    $("#fupForm1").on('submit', function(e){
        // var location = window.location.href;

    //      data_detail = new Array;
    //     table = $('#table_detail').DataTable();
    //     tb = table.rows().data();
    //     $.each(tb, function(i, val){
    //     var tmpt = new Object;
    //   if(val[0] != ""){
    //     tmpt.part_code = val[0];
    //     tmpt.part_name = val[1];
    //     tmpt.quantity = val[2];
    //     tmpt.currency = val[3];
    //     tmpt.ORIGIN = val[4];
    //     tmpt.LOTMARK = val[5];
    //     tmpt.add_po_no = val[6];
    //     tmpt.DO_line_no = val[7];
    //     tmpt.customer_order_no = val[8];
    //     tmpt.remark = val[9];

    //     data_detail.push(tmpt);
    //   }
    // })  
        
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url('order/add_new_order');?>',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
                $('#fupForm').css("opacity",".5");
            },
            success: function(response){ 


            console.log(response);


                // $('.statusMsg').html('');
                // if(response.status == 1){
                //     $('#fupForm')[0].reset();
                //     // $('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
                //     Swal.fire('Success!!!');

                //     // window.location = location;
                //     setTimeout(function(){
                //       location.reload();
                //     }, 2000);
                //     return true;
                // }else{
                //     // $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
                //     Swal.fire('Not Success!!!')
                    
                //     setTimeout(function(){
                //       location.reload();
                //     }, 2000);
                //     return false;
                // }
                $('#fupForm').css("opacity","");
                $(".submitBtn").removeAttr("disabled");
            }
        });
    });



    // ตั้งค่าเริ่มต้นจำนวนถัดไปของ Textbox 
   var counter = 2;
 
   // เมื่อคลิกปุ่ม Add Button 
   jQuery("#addButton").click(function () {

      // ตรวจสอบว่ามี Textbox มากกว่า 10 หรือไม่ ถ้ามากกว่า่ให้แจ้งกล่องข้อความ
      // Textbox ไม่ให้เกิน 10
      if(counter>10){
         alert("Only 10 textboxes allow");
         return false;
      }   
      
      // ถ้า Textbox ยังไม่ถึง 10 ให้สร้าง Textbox ขึ้นมา
      jQuery('#TextBoxesGroup').append('<div id="TextBoxDiv' + counter + '">');
      jQuery('#TextBoxesGroup').append('<label>Textbox #' + counter + ' : </label>');
      jQuery('#TextBoxesGroup').append('<input type="text" name="key[]" id="key[]" /></div>');
      
      // เพิ่มค่าของจำนวน Textbox 
      counter++;
   });
 
   // เมื่อคลิกปุ่ม Remove Button
   jQuery("#removeButton").click(function () {
      // ถ้าค่าจำนวนถัดไปของ Textbox เท่ากับ 1 ให้แจ้งข้อความเตือน
      if(counter==1){
         alert("No more textbox to remove");
         return false;
      }   
      
      // แต่ถ้าจำนวนยังไม่เท่ากับ 1 ให้ลดค่าลงไป 1
      counter--;
 
      // ลบ Textbox โดยอ้างอิงจาก ID ของแท็ก Div ที่มี Textbox อยู่ภายใน
      jQuery("#TextBoxDiv" + counter).remove();
   });

   // เมื่อคลิกปุ่ม Get TextBox Value
   jQuery("#getButtonValue").click(function () {
      
      // สร้างตัวแปรสำหรับเก็บค่าของ TextBox แต่ละตัว
      var msg = '';

      // วนรอบเก็บค่าของ TextBox แต่ละตัวไว้ที่ตัวแปร
      for(i=1; i<counter; i++){
         msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
      }

      // แสดงค่าที่อยู่ใน TextBox แต่ละตัว
      alert(msg);
   });







});  

$(function(){
  $('#myTable').dataTable({
    ordering: true,
    searching: true,
    lengthChange: true
  });

   $('#myTable2').dataTable({
    ordering: true,
    searching: true,
    lengthChange: true
  });

});



  function copyInfo(){

      $('#name_receiver').val($('#name_customer').val());
      $('#phone_receiver').val($('#phone').val());
      $('#email_receiver').val($('#email').val());
      $('#address_receiver').val($('#customer_address').val());    
  }


//function show for edit
  function selectCustomer(id){
    $.ajax({
      type: "POST",
      dataType: "JSON",
      url: "<?php echo base_url('index.php/customer/callDetails');?>",
      data: { 'id': id },
      success: function(res){

        if(res['status'] == 'success'){
         
          // $('#name_customer').val(res['customer_data']['cus_name']);
          // $('#name_socail').val(res['customer_data']['cus_name_social']);
          // $('#phone').val(res['customer_data']['phone_number']);
          // $('#email').val(res['customer_data']['email']);
          // $('#customer_address').val(res['customer_data']['cus_address']);    
          // $('#info_customer').val(res['customer_data']['cus_id']);

          $('#name_customer').val(res['customer_data']['cus_name']);
          $('#name_socail').val(res['customer_data'][0]['cus_name_social']);
          $('#phone').val(res['customer_data'][0]['phone_number']);
          $('#email').val(res['customer_data'][0]['email']);
          $('#customer_address').val(res['customer_data'][0]['cus_address']);    
          $('#info_customer').val(res['customer_data'][0]['cus_id']);

          $('#data_customer').modal('hide');
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


//function show for edit
  function selectProductone(id){
    $.ajax({
      type: "POST",
      dataType: "JSON",
      url: "<?php echo base_url('index.php/product/callDetails');?>",
      data: { 'id': id },
      success: function(res){

        if(res['status'] == 'success'){

          $('#productcode1').val(res['show_product'][0]['product_id']);
          $('#productname1').val(res['show_product'][0]['product_name']);
          $('#productnumber1').val(1);
          $('#productpricepernumber1').val(res['show_product'][0]['sale_price']);
          $('#discountpernumber1').val(res['show_product'][0]['discount']);    
       
          $('#data_product').modal('hide');
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
        var cell7 = row.insertCell(7);


        cell0.innerHTML = "<button type=\"button\" id=\"productcount"+rowcount+"\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\".selectproduct\"><span id=\"productcount1\" class=\"sr-only\"></span>เลือก</button>";

        cell1.innerHTML = "<div class=\"typeahead__container\"><div class=\"typeahead__field\"><span class=\"typeahead__query\"><input class=\"form-control\" name=\"q\" type=\"search\" id=\"productcode"+rowcount+"\" maxlength=\"32\" value=\"\" onfocus=\"autocompleteshow=false;\" onkeyup=\"hideUnittext('"+rowcount+"',event.keyCode);\" onkeydown=\"gotoNext("+rowcount+",'productcode',event.keyCode);\" autofocus autocomplete=\"off\"></span></div></div><input type='hidden' id='productid"+rowcount+"' value='0'/> <input type=\"hidden\" id=\"isbundles" + rowcount + "\" value=\"0-0\" />";

        cell2.innerHTML = "<div class=\"typeahead__container\"><div class=\"typeahead__field\"><span class=\"typeahead__query\"><input class=\"form-control\" name=\"q\" type=\"text\" id=\"productname"+rowcount+"\" maxlength=\"256\" value=\"\" onfocus=\"autocompleteshow=false;\" onkeyup=\"setNormalTextbox(this.id);setNormalTextbox('td'+this.id);hideUnittext(\""+rowcount+"\",event.keyCode);\" onkeydown=\"gotoNext("+rowcount+",'productname',event.keyCode);\" autofocus autocomplete=\"off\"></span></div></div>";

        cell3.innerHTML = "<div class=\"input-group form-input-group spinner\"><input type=\"number\" placeholder='0.00' class=\"form-control\" id=\"productnumber"+rowcount+"\" maxlength=\"32\" onfocus=\"removeComma(this.id);autocompleteshow=false;\" onblur=\"updateTotalPrice("+rowcount+")\" value=\"\" onkeyup=\"setNormalTextbox(this.id);\" onkeydown=\"gotoNext("+rowcount+",'productnumber',event.keyCode);\"></div>";

        cell4.innerHTML = "<input type=\"text\" class=\"form-control form-text text-right font-lato\" id='productpricepernumber"+rowcount+ "' placeholder='0.00' maxlength='32' onfocus=\"removeComma(this.id);\" onblur=\"updateTotalPrice("+rowcount+");\" onkeyup='setNormalTextbox(this.id);' onkeydown='gotoNext("+rowcount+",\"productpricepernumber\",event.keyCode);' />";

        cell5.innerHTML = "<input type=\"text\" class=\"form-control form-text text-right font-lato\" id='discountpernumber"+rowcount+"' placeholder=\"จำนวนเงิน หรือ %\" maxlength='32' onfocus=\"removeComma(this.id);autocompleteshow=false;\" onblur=\"updateTotalPrice("+rowcount+");\" onkeydown='gotoNext("+rowcount+",\"discountpernumber\",event.keyCode);' /><span id='unittext"+rowcount+"' class='unittextspan spantruncatenoblock fs-xs grey-400 d-block text-right' style=\"display:none;\"></span><span id='serialnotext"+rowcount+"' style=\"display: none;\"><img src='/Content/themes/base/images/serialicon.png' width=20/></span><input type=\"hidden\" id='serialnoid"+rowcount+"' value='0' />";

        cell6.innerHTML = "<p id='totalprice" + rowcount + "' class='form-text--transparent font-lato'>0.00</p><input type='hidden' id='producttotalprice" + rowcount + "' value='0' />";
        
        cell7.innerHTML = "<a href='javascript:deleteRow(" + rowcount + ");' class=\"d-inline-block btn-etc mt-2\" ><i class=\"fa fa-times-circle\" style=\"color: red;\"></i></a></a>";

        cell0.className = "select text-center vertical-align";
        cell1.className = "id";
        cell2.className = "name";
        cell2.id="tdproductname" + rowcount;
        cell3.className = "amount";
        cell4.className = "value";
        cell5.className = "discount";
        cell6.className = "total text-right";
        cell7.className = "action";

        // updateAutocomplete(rowcount);
    }
    function deleteRow(id) {
        var table = document.getElementById("productrow");
        var rowid = 'prow' + id;
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
                    //a/lert('ptotalTmp : ' + ptotalTmp);
                }
                // document.getElementById('productcount' + idTmp).innerHTML = i;
            }
            autocalculate();
        }
    }

    function updateAutocomplete(tmpindex)
    {
        $("#productname" + tmpindex).typeahead({
            minLength: 2,
            //cache: true,
            dynamic: true,
            filter: false,
            template: '<span>' +
           '<span>{{label}}</span>' + "</span>",
            source: {
                ajax:
                function (query) {
                    var subtransactiontype = document.getElementById("subtransactiontype").value;
                    var tmpisbundle = 0;
                    if (subtransactiontype == 0)
                        tmpisbundle = -1;
                            return {
                                type: "POST",
                                url: '/Sell/getProductAutoComplete',
                                data: {
                                    producttype: 1,
                                    term: encodeURI(query),
                                    customername: encodeURI($('#customername').val()),
                                    customercode: encodeURI($('#customercode').val()),
                                    customeridnumber: encodeURI($('#customeridnumber').val()),
                                    customeremail: encodeURI($('#customeremail').val()),
                                    customerphone: encodeURI($('#customerphone').val()),
                                    customermobile: encodeURI($('#customermobile').val()),
                                    customerfax: encodeURI($('#customerfax').val()),
                                    //customeraddress: encodeURI($('#customeraddress').val()),
                                    isbundle: tmpisbundle
                                },
                                callback: {
                                    done: function (data) {
                                        return data;
                                    }
                                }
                            }
                        }
            },
             display: ["name"],
             cache: false,
             //emptyTemplate: "ไม่พบข้อมูล {{query}}",
             callback: {
                 onClick: function (node, a, item, event) {
                     $("#productcode" + tmpindex).val(item.code);
                     $("#productnumber" + tmpindex).val("1");
                     var subtransactiontype = document.getElementById("subtransactiontype").value;
                     if(subtransactiontype==0)
                     {
                         $("#productpricepernumber" + tmpindex).val(item.sellprice);
                         $("#discountpernumber" + tmpindex).val(item.discounttext);
                     }
                     else
                         $("#productpricepernumber" + tmpindex).val(item.purchaseprice);
                     updateTotalPrice(tmpindex);
                     setNormalTextbox("productnumber"+tmpindex);
                     setNormalTextbox("productpricepernumber"+tmpindex);
                     if(item.unittext==null || item.unittext.trim().length==0)
                     {
                         $("#unittext" + tmpindex).html("");
                         $("#unittext" + tmpindex).hide();
                     }
                     else
                     {
                         $("#unittext" + tmpindex).html(item.unittext);
                         $('#unittext' + tmpindex).attr('title', item.unittext);
                         $("#unittext" + tmpindex).show();
                     }
                     $("#serialnoid" + tmpindex).val(0);
                     $("#serialnotext" + tmpindex).hide();
                     setTimeout(function(){  $("#productname" + tmpindex).val(item.name);
                         setNormalTextbox("productname"+tmpindex);
                         setNormalTextbox("tdproductname"+tmpindex); }, 50);
                     autocompleteshow=false;

                     if (item.isbundle == 1)
                     {
                         let bundleFormat = "1-" + item.id;
                         document.getElementById("productname" + tmpindex).disabled = true;
                         document.getElementById("productcode" + tmpindex).disabled = true;
                         $("#isbundles" + tmpindex).val(bundleFormat);
                     }
                 },
                 onSendRequest: function (node, query) {
                 },
                 onReceiveRequest: function (node, query) {
                 },
                 onResult: function (node, query, obj, objCount) {
                     if(objCount>0)
                         autocompleteshow=true;
                 }
             }
         });
        $("#productcode" + tmpindex).typeahead({
            minLength: 2,
            //cache: true,
            dynamic: true,
            filter: false,
            template: '<span>' +
           '<span>{{label}}</span>' + "</span>",
            source: {
                ajax:
                function (query) {
                    var subtransactiontype = document.getElementById("subtransactiontype").value;
                    var tmpisbundle = 0;
                    if (subtransactiontype == 0)
                        tmpisbundle = -1;
                            return {
                                type: "POST",
                                url: '/Sell/getProductAutoComplete',
                                data: {
                                    producttype: 0,
                                    term: encodeURI(query),
                                    customername: encodeURI($('#customername').val()),
                                    customercode: encodeURI($('#customercode').val()),
                                    customeridnumber: encodeURI($('#customeridnumber').val()),
                                    customeremail: encodeURI($('#customeremail').val()),
                                    customerphone: encodeURI($('#customerphone').val()),
                                    customermobile: encodeURI($('#customermobile').val()),
                                    customerfax: encodeURI($('#customerfax').val()),
                                    //customeraddress: encodeURI($('#customeraddress').val()),
                                    isbundle: tmpisbundle
                                },
                                callback: {
                                    done: function (data) {
                                        return data;
                                    }
                                }
                            }
                        }
            },
             display: ["code"],
             cache: false,
             cancelButton: false,
             //emptyTemplate: "ไม่พบข้อมูล {{query}}",
             callback: {
                 onClick: function (node, a, item, event) {
                     $("#productname" + tmpindex).val(item.name);
                     $("#productnumber" + tmpindex).val("1");
                     var subtransactiontype = document.getElementById("subtransactiontype").value;
                     if(subtransactiontype==0)
                     {
                         $("#productpricepernumber" + tmpindex).val(item.sellprice);
                         $("#discountpernumber" + tmpindex).val(item.discounttext);
                     }
                     else
                         $("#productpricepernumber" + tmpindex).val(item.purchaseprice);
                     updateTotalPrice(tmpindex);
                     setNormalTextbox("productname"+tmpindex);
                     setNormalTextbox("tdproductname"+tmpindex);
                     setNormalTextbox("productnumber"+tmpindex);
                     setNormalTextbox("productpricepernumber"+tmpindex);
                     if(item.unittext==null || item.unittext.trim().length==0)
                     {
                         $("#unittext" + tmpindex).html("");
                         $("#unittext" + tmpindex).hide();
                     }
                     else
                     {
                         $("#unittext" + tmpindex).html(item.unittext);
                         $('#unittext' + tmpindex).attr('title', item.unittext);
                         $("#unittext" + tmpindex).show();
                     }
                     $("#serialnoid" + tmpindex).val(0);
                     $("#serialnotext" + tmpindex).hide();
                     setTimeout(function(){  $("#productcode" + tmpindex).val(item.code); }, 50);
                     autocompleteshow=false;

                     if (item.isbundle == 1)
                     {
                         let bundleFormat = "1-" + item.id;
                         document.getElementById("productname" + tmpindex).disabled = true;
                         document.getElementById("productcode" + tmpindex).disabled = true;
                         $("#isbundles" + tmpindex).val(bundleFormat);
                     }
                 },
                 onSendRequest: function (node, query) {
                 },
                 onReceiveRequest: function (node, query) {
                 },
                 onPopulateSource: function (node, data, group, path) {
                    if (data == null)
                        return null;
                     if(data.length>0)
                         autocompleteshow=true;
                     if(data.length==1)
                     {
                         var item=data[0];
                         if(item.barcodeauto)
                         {
                             autocompleteshow = false;
                             var isserial = false;
                             if (item.serialnoid != null && item.serialnoid > 0) {
                                 isserial = true;
                             }
                             var price = item.sellprice;
                             if (subtransactiontype == 1)
                                 price = item.purchaseprice;
                             var tmprow = findRow(item.code, item.name, price);

                             if (tmprow == 0 || isserial) {
                                 $("#productname" + tmpindex).val(item.name);
                                 $("#productnumber" + tmpindex).val("1");
                                 var subtransactiontype = document.getElementById("subtransactiontype").value;
                                 if (subtransactiontype == 0) {
                                     $("#productpricepernumber" + tmpindex).val(item.sellprice);
                                     $("#discountpernumber" + tmpindex).val(item.discounttext);
                                 }
                                 else
                                     $("#productpricepernumber" + tmpindex).val(item.purchaseprice);
                                 updateTotalPrice(tmpindex);
                                 setNormalTextbox("productname" + tmpindex);
                                 setNormalTextbox("tdproductname" + tmpindex);
                                 setNormalTextbox("productnumber" + tmpindex);
                                 setNormalTextbox("productpricepernumber" + tmpindex);
                                 if (item.unittext == null || item.unittext.trim().length == 0) {
                                     $("#unittext" + tmpindex).html("");
                                     $("#unittext" + tmpindex).hide();
                                 }
                                 else {
                                     $("#unittext" + tmpindex).html(item.unittext);
                                     $('#unittext' + tmpindex).attr('title', item.unittext);
                                     $("#unittext" + tmpindex).show();
                                 }
                                 if (item.serialnoid != null && item.serialnoid > 0) {
                                     $("#serialnoid" + tmpindex).val(item.serialnoid);
                                     $('#serialnotext' + tmpindex).attr('title', item.serialname);
                                     $("#serialnotext" + tmpindex).show();
                                     $("#unittext" + tmpindex).html("");
                                     $("#unittext" + tmpindex).hide();
                                 }
                                 else {
                                     $("#serialnoid" + tmpindex).val(0);
                                     $("#serialnotext" + tmpindex).hide();
                                 }
                                 $("#productcode" + tmpindex).val(item.code);
                                 if (!linestatus)
                                    gotoNext(tmpindex, 'productcode', 13);
                             }
                             else {
                                 $("#productcode" + tmpindex).val("");
                                 plusProduct(tmprow);
                             }

                             return null;
                         }
                     }
                     return data;
                 },
                 onResult: function (node, query, obj, objCount) {

                 }
             }
         });

    }

        function autocalculate()
    {
        var stateshippingvat = document.getElementById("isshippingchk").checked;
        var isshippingvat = 0;

        if (stateshippingvat == true){
            isshippingvat = 1
        }

        var table = document.getElementById("productrow");
        var rCount = table.rows.length;

        var netamount=0;
        var total = 0;
        var vattotal = 0;
        var beforetotal = 0;
        var whttotal = 0;
        var paymenttotal = 0;
        var i = 0;
        for (var j = 1; j < rCount; j++) {
            i++;
            while (!document.getElementById('productnumber' + i)) {
                i++;
            }
            isMoney("productnumber" + i);
            isMoney("productpricepernumber" + i);
            isPercent("discountpernumber" + i);
            isMoney("producttotalprice" + i);
        }

        isMoney("shippingamount");
        isPercent("discounttext");
        i = 0;
        for (var j = 1; j < rCount; j++)
        {
            i++;
            while (!document.getElementById('producttotalprice' + i)) {
                i++;
            }
            var tmp = toremoveComma($("#producttotalprice" + i).val());
            total += Number(tmp);
        }
        var tmpshipping = toremoveComma($("#shippingamount").val());
        var discounttext = toremoveComma($("#discounttext").val());
        if (discounttext.indexOf("%") > -1) {
            discounttext = discounttext.replace(/%/g, "");
            discounttext = total * discounttext / 100;
        }
        var tmpnetamount = 0;
        var tmpnetamount2 = 0;
        if(calculatetype==1)
        {

            if (isshippingvat == 0) {
                tmpnetamount=total-Number(discounttext);
                tmpnetamount2 = tmpnetamount;
                tmpnetamount2 = Math.round(tmpnetamount2 * 100) / 100;
                netamount += tmpnetamount2 + Number(tmpshipping);
                beforetotal = 100 * tmpnetamount2/(100+percent);
                vattotal = netamount.toFixed(2)-beforetotal.toFixed(2)-Number(tmpshipping).toFixed(2);
            }
            else {
                tmpnetamount=total-Number(discounttext);
                tmpnetamount2 = tmpnetamount;
                tmpnetamount2 = Math.round(tmpnetamount2 * 100) / 100 + (Math.round(tmpshipping * 100) / 100);
                netamount += tmpnetamount2;
                beforetotal = (100 * tmpnetamount2 / (100 + percent));
                vattotal = netamount.toFixed(2) - beforetotal.toFixed(2);
            }

        }
        else
        {

            if (isshippingvat == 0) {
                tmpnetamount=total-Number(discounttext);
                beforetotal = tmpnetamount;
                tmpnetamount2 = tmpnetamount * (1 + (percent / 100));
                tmpnetamount2 = Math.round(tmpnetamount2 * 100) / 100;
                netamount += tmpnetamount2 + Number(tmpshipping);
                vattotal = netamount.toFixed(2)-beforetotal.toFixed(2)-Number(tmpshipping).toFixed(2);
            }
            else {
                tmpnetamount=total-Number(discounttext);
                beforetotal = tmpnetamount + Number(tmpshipping);
                tmpnetamount2 = tmpnetamount * (1 + (percent / 100)) + (tmpshipping * (1 + (percent / 100)));
                netamount += tmpnetamount2;
                vattotal = netamount.toFixed(2) - tmpnetamount.toFixed(2) - Number(tmpshipping).toFixed(2);
            }

        }
        if(document.getElementById("whtcheck").checked)
        {
            var whtpercent = document.getElementById("whtpercent").value;
            whttotal = ((whtpercent*beforetotal)/100).toFixed(2);
        }
        paymentamount = netamount-whttotal;
        $("#vatamount").val(vattotal);
        $("#amount").val(netamount);
        $("#amountbeforeshipping").val(tmpnetamount2);
        $("#amount2").val(beforetotal);
        $("#whtamount").val(whttotal);
        $("#paymentwhtamount").val(paymentamount);

        //change text

        isMoney2("vatamount");
        isMoney2("amount");
        isMoney2("amountbeforeshipping");
        isMoney2("amount2");
        isMoney2("whtamount");
        isMoney2("paymentwhtamount");
        $("#amounttext").html($("#amount").val());
        $("#amountbeforeshippingtext").html($("#amountbeforeshipping").val());
        $("#amount2text").html($("#amount2").val());
        $("#paymentamounttext").html($("#paymentwhtamount").val());
        $("#vatamounttext").html($("#vatamount").val());


    }





</script>


<!-- <script>
    const strDefaultBundleFormat = "0-0";
    var shippingitemprice = 0;
    var shippingitempriceplusmoreone = 0;
    var shippingitemupdate = false;
    var actionid = 0;
    var autocompleteshow = false;
    var linestatus = false;
    var checkStart = true;
    var checkfinish = false;
    var tmpiscreate = 0;
    var myEvent = window.attachEvent || window.addEventListener;
    var chkevent = window.attachEvent ? 'onbeforeunload' : 'beforeunload'; /// make IE7, IE8 compatable
    myEvent(chkevent, function (e) { // For >=IE7, Chrome, Firefox
        checkStart = doCheckStart();
        if (checkfinish || checkStart) return null;
        var confirmationMessage = 'ยืนยันการออกจากหน้าเว็บ ข้อมูลที่คุณกรอกไว้อาจจะไม่ถูกบันทึก';  // a space
        (e || window.event).returnValue = confirmationMessage;
        return confirmationMessage;
    });
    function changeLogistics()
    {
        var hidelogistics=0;
        if ($("#logisticsmenu").hasClass("ion-ios-arrow-down"))
        {
            $("#logisticsmenu").removeClass("ion-ios-arrow-down");
            $("#logisticsmenu").addClass("ion-ios-arrow-right");
            hidelogistics=1;
        }
        else
        {
            $("#logisticsmenu").removeClass("ion-ios-arrow-right");
            $("#logisticsmenu").addClass("ion-ios-arrow-down");
            hidelogistics=0;

        }
        $.ajax({
            type: "POST",
            url: '/Sell/doSaveHideLogistics',
            data: {
                hidelogistics:hidelogistics
            },
            dataType: "json",
            cache: false,
            success: function (res) {

            }
        });

    }
    function doCheckStart() {
        var customername = document.getElementById("customername").value;
        var customercode = document.getElementById("customercode").value;
        var customeridnumber = document.getElementById("customeridnumber").value;
        var customeremail = document.getElementById("customeremail").value;
        var customerphone = document.getElementById("customerphone").value;
        var customermobile = document.getElementById("customermobile").value;
        var customerfax = document.getElementById("customerfax").value;
        var customeraddress = document.getElementById("customeraddress").value;
        var refname = document.getElementById("refname").value;
        var shippingname = document.getElementById("shippingname").value;
        var shippingphone = document.getElementById("shippingphone").value;
        var shippingemail = document.getElementById("shippingemail").value;
        var shippingchannel = document.getElementById("shippingchannel").value;
        var shippingamount = document.getElementById("shippingamount").value;
        var shippingdate = document.getElementById("shippingdate").value;
        var shippingaddress = document.getElementById("shippingaddress").value;
        var trackingno = document.getElementById("trackingno").value;
        var saleschannel = document.getElementById("saleschannel").value;
        var description = document.getElementById("description").value;
        var discounttext = document.getElementById("discounttext").value;
        if (customername.trim().length > 0 || customeridnumber.trim().length > 0 || customeremail.trim().length > 0 || customerphone.trim().length > 0 || customermobile.trim().length > 0 || customerfax.trim().length > 0 || customeraddress.trim().length>0
            || refname.trim().length > 0 || shippingname.trim().length > 0 || shippingphone.trim().length > 0 || shippingemail.trim().length > 0 || shippingchannel.trim().length>0 || shippingamount.trim().length>0 || shippingdate.trim().length>0 || shippingaddress.trim().length>0 || trackingno.trim().length>0
                || saleschannel.trim().length>0 || description.trim().length>0 || discounttext.trim().length>0
               )
        {
            return false;
        }
        var i=0;
        var productvalidate=true;

        var table = document.getElementById("productrow");
        var rCount = table.rows.length;
        for (var j = 1; j < rCount; j++) {
            i++;
            while (!document.getElementById('productid' + i)) {
                i++;
            }
            var productid = document.getElementById('productid' + i).value;

            var productcode = document.getElementById('productcode' + i).value;
            var productname = document.getElementById('productname' + i).value;
            var productnumber = document.getElementById('productnumber' + i).value;
            var productpricepernumber = document.getElementById('productpricepernumber' + i).value;
            var discountpernumber = document.getElementById('discountpernumber' + i).value;
            if(productcode.trim().length>0 || productname.trim().length>0 || productnumber.trim().length>0 || productpricepernumber.trim().length>0 || discountpernumber.trim().length>0)
            {
                return false;
            }

        }
        return true;
    }
    var tagsaleschannelarray=[
                {label: "Facebook",value: "Facebook",value2: "245960"},{label: "LINE",value: "LINE",value2: "245961"},{label: "Instagram",value: "Instagram",value2: "245962"},{label: "Agent",value: "Agent",value2: "245963"},
        ];

    $(function () {

        for(var i=1;i<=rowcount;i++)
        {
            updateAutocomplete(i+"");
        }
        $('.saleschanneltag').typeahead({
            minLength: 0,
            hint: true,
            //cache: true,
            searchOnFocus: true,
            template: '<span>' +
           '<span class="name">{{label}}</span>' + "<span style='float:right;cursor:pointer;' onclick='removeSalesChannelTag({{value2}});'>ลบ</span></span>",
            source: {
                saleschannel: {
                    data: tagsaleschannelarray
                }
            },
            display: ["label"],
            //cache: true,
            //emptyTemplate: "ไม่พบข้อมูล {{query}}",
            callback: {
                onInit: function (node) {
                }
            }
        });

        $('.refnametags').typeahead({
            minLength: 1,
            //cache: true,
            searchOnFocus: true,
            dynamic: true,
            filter: false,
            template: '<span>' +
           '<span class="name">{{label}}</span>' + "<span style='float:right;cursor:pointer;' onclick='removeRefName({{id}});'>ลบ</span></span>",
            source: {
                ajax:
                        function (query) {
                            return {
                                type: "GET",
                                url: '/Sell/getRefNameAutoComplete',
                                data: {
                                    term: encodeURI(query)
                                },
                                callback: {
                                    done: function (data) {
                                        return data;
                                    }
                                }
                            }
                        }
            },
            display: ["label"],
            cache: false,
            //emptyTemplate: "ไม่พบข้อมูล {{query}}",
            callback: {
                onInit: function (node) {
                }
            }
        });
        $('.customernametags').typeahead({
            minLength: 1,
            //cache: true,
            dynamic: true,
            filter: false,
            template: '<span>' +
           '<span>{{label}}</span>' + "</span>",
            source: {
                ajax:
                        function (query) {
                            return {
                                type: "POST",
                                url: '/Sell/getContactAutoComplete',
                                data: {
                                    term: encodeURI(query)
                                },
                                callback: {
                                    done: function (data) {
                                        return data;
                                    }
                                }
                            }
                        }
            },
            display: ["name"],
            cache: false,
            //emptyTemplate: "ไม่พบข้อมูล {{query}}",
            callback: {
                onClick: function (node, a, item, event) {

                    // You can do a simple window.location of the item.href
                    $("#customercode").val(item.code);
                    $("#customeremail").val(item.email);
                    $("#customerphone").val(item.phone);
                    $("#customermobile").val(item.mobile);
                    $("#customerfax").val(item.fax);
                    $("#customeraddress").val(item.address);
                    if((item.idnumber!=null && item.idnumber.trim().length>0) || (item.branchname!=null && item.branchname.trim().length>0) || (item.branchno!=null && item.branchno.trim().length>0))
                    {
                        $("#tmpmerchantstatus").prop('checked', true);
                        $(".setarea").show();
                    }
                    else
                    {
                        $("#tmpmerchantstatus").prop('checked', false);
                        $(".setarea").hide();

                    }
                    $("#customeridnumber").val(item.idnumber);
                    $("#customerbranchname").val(item.branchname);
                    $("#customerbranchno").val(item.branchno);
                    if ($('#shippingname').is(":visible"))
                        $("#shippingname").val(item.name);
                    if ($('#shippingphone').is(":visible"))
                        $("#shippingphone").val(item.phone);
                    if ($('#shippingemail').is(":visible"))
                        $("#shippingemail").val(item.email);
                    if ($('#shippingaddress').is(":visible"))
                        $("#shippingaddress").val(item.address);
                    setTimeout(function(){  $("#customername").val(item.name); }, 50);

                },
                onSendRequest: function (node, query) {
                },
                onReceiveRequest: function (node, query) {
                }
            }
        });
        $('.shippingchanneltags').typeahead({
            minLength: 0,
            //cache: true,
            searchOnFocus: true,
            dynamic: true,
            filter: false,
            template: '<span>' +
           '<span class="name">{{label}}</span>' + "</span>",
            source: {
                ajax:
                        function (query) {
                            return {
                                type: "GET",
                                url: '/Sell/getShippingChannelAutoComplete',
                                data: {
                                    term: encodeURI(query)
                                },
                                callback: {
                                    done: function (data) {
                                        return data;
                                    }
                                }
                            }
                        }
            },
           display: ["label"],
           cache: false,
           //emptyTemplate: "ไม่พบข้อมูล {{query}}",
           callback: {
               onClick: function (node, a, item, event) {
                   if (item.isshow == 1) {
                       shippingitemprice = item.price;
                       shippingitempriceplusmoreone = item.priceplusmoreone;
                       shippingitemupdate = true;
                       changeShippingFee();
                   }

               },
               onInit: function (node) {
               }
           }
        });

        changeVatType();
            //autocalculate();
            if(document.getElementById("productcode1"))
            {
                $("#productcode1").focus();
            }
    });
    function resetShippingFee()
    {
        shippingitemprice = 0;
        shippingitempriceplusmoreone = 0;
        shippingitemupdate = true;
        changeShippingFee();
    }
    function changeShippingFee() {
        var price = shippingitemprice;
        var price2 = 0;
        var countnumber = getAllNumber();
        if (countnumber > 1) {
            price2 = (countnumber - 1) * shippingitempriceplusmoreone;
        }
        var allprice = price + price2;
        if (price != 0)
            $("#shippingamount").val(allprice);
        else if (shippingitemupdate)
            $("#shippingamount").val("");
        autocalculate();
    }
        function removeSalesChannelTag(saleschannelid)
        {
            var removeindex=-1;
            for(var i=0;i<tagsaleschannelarray.length;i++)
            {
                var tmp = tagsaleschannelarray[i];
                if(tmp["value2"]==saleschannelid)
                {
                    removeindex=i;
                    break;
                }
            }
            if(removeindex>=0)
                tagsaleschannelarray.splice(removeindex, 1);
            $('.saleschanneltag').typeahead({
                minLength: 0,
                hint: true,
                //cache: true,
                searchOnFocus: true,
                template: '<span>' +
               '<span class="name">{{label}}</span>' + "<span style='float:right;cursor:pointer;' onclick='removeSalesChannelTag({{value2}});'>ลบ</span></span>",
                source: {
                    saleschannel: {
                        data: tagsaleschannelarray
                    }
                },
                display: ["label"],
                //cache: true,
                //emptyTemplate: "ไม่พบข้อมูล {{query}}",
                callback: {
                    onInit: function (node) {
                    }
                }
            });
            var delay=100; //1 seconds

            setTimeout(function(){
                $("#saleschannel").val("");
                $("#saleschannel").keydown();
                $.ajax({
                    type: "POST",
                    url: '/Sell/doDeleteSalesChannel',
                    data: { saleschannelid: saleschannelid},
                    dataType: "json",
                    cache: false,
                    success: function (res) {

                    }
                });
            }, delay);
        }
    function removeRefName(refnameid)
    {
            $.ajax({
                type: "POST",
                url: '/Sell/doDeleteRefName',
                data: { refnameid: refnameid},
                    dataType: "json",
                    cache: false,
                    success: function (res) {
                        $("#refname").val("");
                    }
                });

    }
    function removeShippingChannel(shippingchannelid)
    {
        $.ajax({
            type: "POST",
            url: '/Sell/doDeleteShippingChannel',
            data: { shippingchannelid: shippingchannelid},
                dataType: "json",
                cache: false,
                success: function (res) {
                    $("#shippingchannel").val("");
                }
            });

    }
</script>


<script>
    var percent = 0;
    var calculatetype = 1;
    var rowcount = 1;
    var tutorialpage = 1;

    function doAdd()
    {
        window.location.href = "/Sell/Details?";
    }
    function autocalculate()
    {
        var stateshippingvat = document.getElementById("isshippingchk").checked;
        var isshippingvat = 0;

        if (stateshippingvat == true){
            isshippingvat = 1
        }

        var table = document.getElementById("productrow");
        var rCount = table.rows.length;

        var netamount=0;
        var total = 0;
        var vattotal = 0;
        var beforetotal = 0;
        var whttotal = 0;
        var paymenttotal = 0;
        var i = 0;
        for (var j = 1; j < rCount; j++) {
            i++;
            while (!document.getElementById('productnumber' + i)) {
                i++;
            }
            isMoney("productnumber" + i);
            isMoney("productpricepernumber" + i);
            isPercent("discountpernumber" + i);
            isMoney("producttotalprice" + i);
        }

        isMoney("shippingamount");
        isPercent("discounttext");
        i = 0;
        for (var j = 1; j < rCount; j++)
        {
            i++;
            while (!document.getElementById('producttotalprice' + i)) {
                i++;
            }
            var tmp = toremoveComma($("#producttotalprice" + i).val());
            total += Number(tmp);
        }
        var tmpshipping = toremoveComma($("#shippingamount").val());
        var discounttext = toremoveComma($("#discounttext").val());
        if (discounttext.indexOf("%") > -1) {
            discounttext = discounttext.replace(/%/g, "");
            discounttext = total * discounttext / 100;
        }
        var tmpnetamount = 0;
        var tmpnetamount2 = 0;
        if(calculatetype==1)
        {

            if (isshippingvat == 0) {
                tmpnetamount=total-Number(discounttext);
                tmpnetamount2 = tmpnetamount;
                tmpnetamount2 = Math.round(tmpnetamount2 * 100) / 100;
                netamount += tmpnetamount2 + Number(tmpshipping);
                beforetotal = 100 * tmpnetamount2/(100+percent);
                vattotal = netamount.toFixed(2)-beforetotal.toFixed(2)-Number(tmpshipping).toFixed(2);
            }
            else {
                tmpnetamount=total-Number(discounttext);
                tmpnetamount2 = tmpnetamount;
                tmpnetamount2 = Math.round(tmpnetamount2 * 100) / 100 + (Math.round(tmpshipping * 100) / 100);
                netamount += tmpnetamount2;
                beforetotal = (100 * tmpnetamount2 / (100 + percent));
                vattotal = netamount.toFixed(2) - beforetotal.toFixed(2);
            }

        }
        else
        {

            if (isshippingvat == 0) {
                tmpnetamount=total-Number(discounttext);
                beforetotal = tmpnetamount;
                tmpnetamount2 = tmpnetamount * (1 + (percent / 100));
                tmpnetamount2 = Math.round(tmpnetamount2 * 100) / 100;
                netamount += tmpnetamount2 + Number(tmpshipping);
                vattotal = netamount.toFixed(2)-beforetotal.toFixed(2)-Number(tmpshipping).toFixed(2);
            }
            else {
                tmpnetamount=total-Number(discounttext);
                beforetotal = tmpnetamount + Number(tmpshipping);
                tmpnetamount2 = tmpnetamount * (1 + (percent / 100)) + (tmpshipping * (1 + (percent / 100)));
                netamount += tmpnetamount2;
                vattotal = netamount.toFixed(2) - tmpnetamount.toFixed(2) - Number(tmpshipping).toFixed(2);
            }

        }
        if(document.getElementById("whtcheck").checked)
        {
            var whtpercent = document.getElementById("whtpercent").value;
            whttotal = ((whtpercent*beforetotal)/100).toFixed(2);
        }
        paymentamount = netamount-whttotal;
        $("#vatamount").val(vattotal);
        $("#amount").val(netamount);
        $("#amountbeforeshipping").val(tmpnetamount2);
        $("#amount2").val(beforetotal);
        $("#whtamount").val(whttotal);
        $("#paymentwhtamount").val(paymentamount);

        //change text

        isMoney2("vatamount");
        isMoney2("amount");
        isMoney2("amountbeforeshipping");
        isMoney2("amount2");
        isMoney2("whtamount");
        isMoney2("paymentwhtamount");
        $("#amounttext").html($("#amount").val());
        $("#amountbeforeshippingtext").html($("#amountbeforeshipping").val());
        $("#amount2text").html($("#amount2").val());
        $("#paymentamounttext").html($("#paymentwhtamount").val());
        $("#vatamounttext").html($("#vatamount").val());


    }
    function getAllNumber() {
        var table = document.getElementById("productrow");
        var rCount = table.rows.length;
        var countnumber = 0;

        var i = 0;
        for (var j = 1; j < rCount; j++) {
            i++;
            while (!document.getElementById('productnumber' + i)) {
                i++;
            }
            var tmp = toremoveComma($("#productnumber" + i).val());
            countnumber += Number(tmp);
        }
        return countnumber;

    }


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
        var cell7 = row.insertCell(7);

        cell0.innerHTML = "<span id=\"productcount"+rowcount+"\" class=\"sr-only\">" + length+"</span><a class=\"button button-default button-sm mb-0\" href='javascript:showAllProduct("+rowcount+");'>เลือก</a>";

        // js-typeahead-input codetags
        cell1.innerHTML = "<div class=\"typeahead__container\"><div class=\"typeahead__field\"><span class=\"typeahead__query\"><input class=\"form-control\" name=\"q\" type=\"search\" id=\"productcode"+rowcount+"\" maxlength=\"32\" value=\"\" onfocus=\"autocompleteshow=false;\" onkeyup=\"hideUnittext('"+rowcount+"',event.keyCode);\" onkeydown=\"gotoNext("+rowcount+",'productcode',event.keyCode);\" autofocus autocomplete=\"off\"></span></div></div><input type='hidden' id='productid"+rowcount+"' value='0'/> <input type=\"hidden\" id=\"isbundles" + rowcount + "\" value=\"0-0\" />";

        // js-typeahead-input nametags
        cell2.innerHTML = "<div class=\"typeahead__container\"><div class=\"typeahead__field\"><span class=\"typeahead__query\"><input class=\"form-control\" name=\"q\" type=\"text\" id=\"productname"+rowcount+"\" maxlength=\"256\" value=\"\" onfocus=\"autocompleteshow=false;\" onkeyup=\"setNormalTextbox(this.id);setNormalTextbox('td'+this.id);hideUnittext(\""+rowcount+"\",event.keyCode);\" onkeydown=\"gotoNext("+rowcount+",'productname',event.keyCode);\" autofocus autocomplete=\"off\"></span></div></div>";
        cell3.innerHTML = "<div class=\"input-group form-input-group spinner\"><input type=\"number\" placeholder='0.00' class=\"form-control\" id=\"productnumber"+rowcount+"\" maxlength=\"32\" onfocus=\"removeComma(this.id);autocompleteshow=false;\" onblur=\"updateTotalPrice("+rowcount+")\" value=\"\" onkeyup=\"setNormalTextbox(this.id);\" onkeydown=\"gotoNext("+rowcount+",'productnumber',event.keyCode);\"></div>";



        // <div class=\"input-group-btn-vertical\"><button class=\"btn btn-default\" style=\"margin-top:0px !important;\" type=\"button\" onclick=\"plusNumber('productnumber"+rowcount+"');updateTotalPrice("+rowcount+");\"><i class=\"fa fa-caret-up\"></i></button><button class=\"btn btn-default\" style=\"margin-top:-2px !important;\" type=\"button\" onclick=\"minusNumber('productnumber"+rowcount+"');updateTotalPrice("+rowcount+");\"><i class=\"fa fa-caret-down\"></i></button></div> </div>";


        //cell3.innerHTML = "<input type=\"number\" class=\"form-control form-text text-right\" id='productnumber"+rowcount+"' maxlength='32'  onfocus=\"removeComma(this.id);autocompleteshow=false;\" onblur=\"updateTotalPrice("+rowcount+");\" onkeyup='setNormalTextbox(this.id);' onkeydown='if (event.keyCode == 13) gotoNext("+rowcount+",\"productnumber\");' />";        cell4.innerHTML = "<input type=\"text\" class=\"form-control form-text\" id='productpricepernumber"+rowcount+ "' maxlength='32' onfocus=\"removeComma(this.id);autocompleteshow=false;\" onblur=\"updateTotalPrice("+rowcount+");\" onkeyup='setNormalTextbox(this.id);' onkeydown='if (event.keyCode == 13) gotoNext("+rowcount+",\"productpricepernumber\");' />";
        cell4.innerHTML = "<input type=\"text\" class=\"form-control form-text text-right font-lato\" id='productpricepernumber"+rowcount+ "' placeholder='0.00' maxlength='32' onfocus=\"removeComma(this.id);\" onblur=\"updateTotalPrice("+rowcount+");\" onkeyup='setNormalTextbox(this.id);' onkeydown='gotoNext("+rowcount+",\"productpricepernumber\",event.keyCode);' />";
        cell5.innerHTML = "<input type=\"text\" class=\"form-control form-text text-right font-lato\" id='discountpernumber"+rowcount+"' placeholder=\"จำนวนเงิน หรือ %\" maxlength='32' onfocus=\"removeComma(this.id);autocompleteshow=false;\" onblur=\"updateTotalPrice("+rowcount+");\" onkeydown='gotoNext("+rowcount+",\"discountpernumber\",event.keyCode);' /><span id='unittext"+rowcount+"' class='unittextspan spantruncatenoblock fs-xs grey-400 d-block text-right' style=\"display:none;\"></span><span id='serialnotext"+rowcount+"' style=\"display: none;\"><img src='/Content/themes/base/images/serialicon.png' width=20/></span><input type=\"hidden\" id='serialnoid"+rowcount+"' value='0' />";
        cell6.innerHTML = "<p id='totalprice" + rowcount + "' class='form-text--transparent font-lato'>0.00</p><input type='hidden' id='producttotalprice" + rowcount + "' value='0' />";
        cell7.innerHTML = "<a href='javascript:deleteRow(" + rowcount + ");' class=\"d-inline-block btn-etc mt-2\" ><i class=\"fa fa-times-circle\" style=\"color: red;\"></i></a>   </a>";

        cell0.className = "select text-center vertical-align";
        cell1.className = "id";
        cell2.className = "name";
        cell2.id="tdproductname" + rowcount;
        cell3.className = "amount";
        cell4.className = "value";
        cell5.className = "discount";
        cell6.className = "total text-right";
        cell7.className = "action";

        updateAutocomplete(rowcount);
    }
    function deleteRow(id) {
        var table = document.getElementById("productrow");
        var rowid = 'prow' + id;
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
                    //a/lert('ptotalTmp : ' + ptotalTmp);
                }
                document.getElementById('productcount' + idTmp).innerHTML = i;
            }
            autocalculate();
        }
    }
    function updateAutocomplete(tmpindex)
    {
        $("#productname" + tmpindex).typeahead({
            minLength: 2,
            //cache: true,
            dynamic: true,
            filter: false,
            template: '<span>' +
           '<span>{{label}}</span>' + "</span>",
            source: {
                ajax:
                function (query) {
                    var subtransactiontype = document.getElementById("subtransactiontype").value;
                    var tmpisbundle = 0;
                    if (subtransactiontype == 0)
                        tmpisbundle = -1;
                            return {
                                type: "POST",
                                url: '/Sell/getProductAutoComplete',
                                data: {
                                    producttype: 1,
                                    term: encodeURI(query),
                                    customername: encodeURI($('#customername').val()),
                                    customercode: encodeURI($('#customercode').val()),
                                    customeridnumber: encodeURI($('#customeridnumber').val()),
                                    customeremail: encodeURI($('#customeremail').val()),
                                    customerphone: encodeURI($('#customerphone').val()),
                                    customermobile: encodeURI($('#customermobile').val()),
                                    customerfax: encodeURI($('#customerfax').val()),
                                    //customeraddress: encodeURI($('#customeraddress').val()),
                                    isbundle: tmpisbundle
                                },
                                callback: {
                                    done: function (data) {
                                        return data;
                                    }
                                }
                            }
                        }
            },
             display: ["name"],
             cache: false,
             //emptyTemplate: "ไม่พบข้อมูล {{query}}",
             callback: {
                 onClick: function (node, a, item, event) {
                     $("#productcode" + tmpindex).val(item.code);
                     $("#productnumber" + tmpindex).val("1");
                     var subtransactiontype = document.getElementById("subtransactiontype").value;
                     if(subtransactiontype==0)
                     {
                         $("#productpricepernumber" + tmpindex).val(item.sellprice);
                         $("#discountpernumber" + tmpindex).val(item.discounttext);
                     }
                     else
                         $("#productpricepernumber" + tmpindex).val(item.purchaseprice);
                     updateTotalPrice(tmpindex);
                     setNormalTextbox("productnumber"+tmpindex);
                     setNormalTextbox("productpricepernumber"+tmpindex);
                     if(item.unittext==null || item.unittext.trim().length==0)
                     {
                         $("#unittext" + tmpindex).html("");
                         $("#unittext" + tmpindex).hide();
                     }
                     else
                     {
                         $("#unittext" + tmpindex).html(item.unittext);
                         $('#unittext' + tmpindex).attr('title', item.unittext);
                         $("#unittext" + tmpindex).show();
                     }
                     $("#serialnoid" + tmpindex).val(0);
                     $("#serialnotext" + tmpindex).hide();
                     setTimeout(function(){  $("#productname" + tmpindex).val(item.name);
                         setNormalTextbox("productname"+tmpindex);
                         setNormalTextbox("tdproductname"+tmpindex); }, 50);
                     autocompleteshow=false;

                     if (item.isbundle == 1)
                     {
                         let bundleFormat = "1-" + item.id;
                         document.getElementById("productname" + tmpindex).disabled = true;
                         document.getElementById("productcode" + tmpindex).disabled = true;
                         $("#isbundles" + tmpindex).val(bundleFormat);
                     }
                 },
                 onSendRequest: function (node, query) {
                 },
                 onReceiveRequest: function (node, query) {
                 },
                 onResult: function (node, query, obj, objCount) {
                     if(objCount>0)
                         autocompleteshow=true;
                 }
             }
         });
        $("#productcode" + tmpindex).typeahead({
            minLength: 2,
            //cache: true,
            dynamic: true,
            filter: false,
            template: '<span>' +
           '<span>{{label}}</span>' + "</span>",
            source: {
                ajax:
                function (query) {
                    var subtransactiontype = document.getElementById("subtransactiontype").value;
                    var tmpisbundle = 0;
                    if (subtransactiontype == 0)
                        tmpisbundle = -1;
                            return {
                                type: "POST",
                                url: '/Sell/getProductAutoComplete',
                                data: {
                                    producttype: 0,
                                    term: encodeURI(query),
                                    customername: encodeURI($('#customername').val()),
                                    customercode: encodeURI($('#customercode').val()),
                                    customeridnumber: encodeURI($('#customeridnumber').val()),
                                    customeremail: encodeURI($('#customeremail').val()),
                                    customerphone: encodeURI($('#customerphone').val()),
                                    customermobile: encodeURI($('#customermobile').val()),
                                    customerfax: encodeURI($('#customerfax').val()),
                                    //customeraddress: encodeURI($('#customeraddress').val()),
                                    isbundle: tmpisbundle
                                },
                                callback: {
                                    done: function (data) {
                                        return data;
                                    }
                                }
                            }
                        }
            },
             display: ["code"],
             cache: false,
             cancelButton: false,
             //emptyTemplate: "ไม่พบข้อมูล {{query}}",
             callback: {
                 onClick: function (node, a, item, event) {
                     $("#productname" + tmpindex).val(item.name);
                     $("#productnumber" + tmpindex).val("1");
                     var subtransactiontype = document.getElementById("subtransactiontype").value;
                     if(subtransactiontype==0)
                     {
                         $("#productpricepernumber" + tmpindex).val(item.sellprice);
                         $("#discountpernumber" + tmpindex).val(item.discounttext);
                     }
                     else
                         $("#productpricepernumber" + tmpindex).val(item.purchaseprice);
                     updateTotalPrice(tmpindex);
                     setNormalTextbox("productname"+tmpindex);
                     setNormalTextbox("tdproductname"+tmpindex);
                     setNormalTextbox("productnumber"+tmpindex);
                     setNormalTextbox("productpricepernumber"+tmpindex);
                     if(item.unittext==null || item.unittext.trim().length==0)
                     {
                         $("#unittext" + tmpindex).html("");
                         $("#unittext" + tmpindex).hide();
                     }
                     else
                     {
                         $("#unittext" + tmpindex).html(item.unittext);
                         $('#unittext' + tmpindex).attr('title', item.unittext);
                         $("#unittext" + tmpindex).show();
                     }
                     $("#serialnoid" + tmpindex).val(0);
                     $("#serialnotext" + tmpindex).hide();
                     setTimeout(function(){  $("#productcode" + tmpindex).val(item.code); }, 50);
                     autocompleteshow=false;

                     if (item.isbundle == 1)
                     {
                         let bundleFormat = "1-" + item.id;
                         document.getElementById("productname" + tmpindex).disabled = true;
                         document.getElementById("productcode" + tmpindex).disabled = true;
                         $("#isbundles" + tmpindex).val(bundleFormat);
                     }
                 },
                 onSendRequest: function (node, query) {
                 },
                 onReceiveRequest: function (node, query) {
                 },
                 onPopulateSource: function (node, data, group, path) {
                    if (data == null)
                        return null;
                     if(data.length>0)
                         autocompleteshow=true;
                     if(data.length==1)
                     {
                         var item=data[0];
                         if(item.barcodeauto)
                         {
                             autocompleteshow = false;
                             var isserial = false;
                             if (item.serialnoid != null && item.serialnoid > 0) {
                                 isserial = true;
                             }
                             var price = item.sellprice;
                             if (subtransactiontype == 1)
                                 price = item.purchaseprice;
                             var tmprow = findRow(item.code, item.name, price);

                             if (tmprow == 0 || isserial) {
                                 $("#productname" + tmpindex).val(item.name);
                                 $("#productnumber" + tmpindex).val("1");
                                 var subtransactiontype = document.getElementById("subtransactiontype").value;
                                 if (subtransactiontype == 0) {
                                     $("#productpricepernumber" + tmpindex).val(item.sellprice);
                                     $("#discountpernumber" + tmpindex).val(item.discounttext);
                                 }
                                 else
                                     $("#productpricepernumber" + tmpindex).val(item.purchaseprice);
                                 updateTotalPrice(tmpindex);
                                 setNormalTextbox("productname" + tmpindex);
                                 setNormalTextbox("tdproductname" + tmpindex);
                                 setNormalTextbox("productnumber" + tmpindex);
                                 setNormalTextbox("productpricepernumber" + tmpindex);
                                 if (item.unittext == null || item.unittext.trim().length == 0) {
                                     $("#unittext" + tmpindex).html("");
                                     $("#unittext" + tmpindex).hide();
                                 }
                                 else {
                                     $("#unittext" + tmpindex).html(item.unittext);
                                     $('#unittext' + tmpindex).attr('title', item.unittext);
                                     $("#unittext" + tmpindex).show();
                                 }
                                 if (item.serialnoid != null && item.serialnoid > 0) {
                                     $("#serialnoid" + tmpindex).val(item.serialnoid);
                                     $('#serialnotext' + tmpindex).attr('title', item.serialname);
                                     $("#serialnotext" + tmpindex).show();
                                     $("#unittext" + tmpindex).html("");
                                     $("#unittext" + tmpindex).hide();
                                 }
                                 else {
                                     $("#serialnoid" + tmpindex).val(0);
                                     $("#serialnotext" + tmpindex).hide();
                                 }
                                 $("#productcode" + tmpindex).val(item.code);
                                 if (!linestatus)
                                    gotoNext(tmpindex, 'productcode', 13);
                             }
                             else {
                                 $("#productcode" + tmpindex).val("");
                                 plusProduct(tmprow);
                             }

                             return null;
                         }
                     }
                     return data;
                 },
                 onResult: function (node, query, obj, objCount) {

                 }
             }
         });

    }
    function findRow(code, name, price) {
        var tmpindex = 0;
        var table = document.getElementById("productrow");
        var rCount = table.rows.length;
        var i = 0;

        for (var j = 1; j < rCount; j++) {
            i++;
            while (!document.getElementById('productid' + i)) {
                i++;
            }
            var productid = document.getElementById('productid' + i).value;

            var productcode = document.getElementById('productcode' + i).value;
            var productname = document.getElementById('productname' + i).value;
            var productpricepernumber = document.getElementById('productpricepernumber' + i).value;
            var discountpernumber = document.getElementById('discountpernumber' + i).value;
            var tmpproductpricepernumber = parseFloat(toremoveComma(productpricepernumber));
            var tmpprice = parseFloat(price);
            if (productcode.trim() == code && productname.trim() == name && tmpproductpricepernumber == tmpprice && discountpernumber == "") {
                tmpindex = i;
                break;
            }

        }
        return tmpindex;
    }
    function plusProduct(tmpindex) {
        plusNumber('productnumber' + tmpindex);
        updateTotalPrice(tmpindex);
    }
    function hideUnittext(obj,keycode)
    {
        if(keycode ==13 || keycode==16 || keycode==17 || keycode==18 || keycode==20 || keycode==33 || keycode==34 || keycode==35
             || keycode==36 || keycode==37 || keycode==38 || keycode==39 || keycode==40)
            return;
        $("#unittext" + obj).hide();
        $("#serialnoid" + obj).val(0);
        $("#serialnotext" + obj).hide();
    }
    function updateTotalPriceNotUpdateTotal(tmpindex)
    {
        var number = toremoveComma($("#productnumber" + tmpindex).val());
        var pricepernumber = toremoveComma($("#productpricepernumber" + tmpindex).val());
        var discountpernumber = toremoveComma($("#discountpernumber" + tmpindex).val());
        if (discountpernumber.indexOf("%") > -1) {
            discountpernumber = discountpernumber.replace(/%/g, "");
            discountpernumber = pricepernumber * discountpernumber / 100;
        }
        var totalprice = number * (pricepernumber-discountpernumber);
        if(calculatetype==1)
        {
            //totalprice = totalprice/(1+(percent/100));
        }
        $("#totalprice" + tmpindex).html(totalprice.formatMoney(4));
        $("#producttotalprice" + tmpindex).val(totalprice);

    }
    function updateTotalPrice(tmpindex)
    {
        updateTotalPriceNotUpdateTotal(tmpindex);
        changeShippingFee();
        //autocalculate();

    }
    function changeVatType()
    {
        var vattypeid =$("#vattypeid").val();
        var vat = vattypeid.split(":");
        percent=parseFloat(vat[1]);
        calculatetype=parseInt(vat[2]);
        var table = document.getElementById("productrow");
        var rCount = table.rows.length;
        var i=0;
        for (var j = 1; j < rCount; j++)
        {
            i++;
            while (!document.getElementById('producttotalprice' + i)) {
                i++;
            }
            updateTotalPriceNotUpdateTotal(i);
        }

        if (percent == 0) {
            document.getElementById("isshippingchk").checked = false;
            document.getElementById("isshippingchk").setAttribute("disabled", "disabled");
        }
        else {
            document.getElementById("isshippingchk").removeAttribute("disabled");
        }

        autocalculate();
    }
    function changeWHTType()
    {
        if(document.getElementById("whtcheck").checked)
        {
            $(".whtarea").show();
        }
        else
        {
            $(".whtarea").hide();
        }
        autocalculate();
    }
    function disablewarehouselist() {
        if (document.getElementById("warehousetype0").checked) {
            $('#warehouseidarea').find("button").addClass('disabled');
            $('#warehouseidarea').find("div").addClass('disabled');
            $('#warehouseidarea0').find("button").removeClass('disabled');
            $('#warehouseidarea0').find("div").removeClass('disabled');
            $('#warehouseidarea0').show();
            $('#warehouseidarea').hide();

            $('#warehouseid').prop('disabled', 'disabled');
            $('#warehouseid0').prop('disabled', false);
            $('#warehouseid0').show();
            $('#warehouseid').hide();
        }
        else {
            $('#warehouseidarea0').find("button").addClass('disabled');
            $('#warehouseidarea0').find("div").addClass('disabled');
            $('#warehouseidarea').find("button").removeClass('disabled');
            $('#warehouseidarea').find("div").removeClass('disabled');
            $('#warehouseidarea').show();
            $('#warehouseidarea0').hide();

            $('#warehouseid0').prop('disabled', 'disabled');
            $('#warehouseid').prop('disabled', false);
            $('#warehouseid').show();
            $('#warehouseid0').hide();
        }
    }
    function gotoNext(index, indexname, keycode)
    {
        if(keycode !=40 && keycode!=38 && keycode!=13) return;
        if (autocompleteshow) return;
        linestatus = true;
        if(keycode==13)
        {
            var i=0;

            var table = document.getElementById("productrow");
            var rCount = table.rows.length;
            var lastindex=0;
            var nextindex=-1;
            var checkindex=false;
            for (var j = 1; j < rCount; j++) {
                i++;
                while (!document.getElementById('productid' + i)) {
                    i++;
                }
                if(i==index && !checkindex)
                    checkindex=true;
                else if(checkindex && nextindex==-1)
                    nextindex=i;
            }
            lastindex=i;
            if(index==lastindex)
            {
                addRow();
                document.getElementById('productcode'+'' + rowcount).click();
                document.getElementById('productcode'+'' + rowcount).focus();
            }
            else
            {
                addRow();
                copyDataFromRow(index);
                document.getElementById('productcode'+'' + nextindex).click();
                document.getElementById('productcode'+'' + nextindex).focus();
                autocalculate();
                //insert row
                //document.getElementById(indexname+'' + nextindex).click();
                // document.getElementById(indexname+'' + nextindex).focus();
            }
        }
        else if(keycode==40)//down
        {
            var i=0;

            var table = document.getElementById("productrow");
            var rCount = table.rows.length;
            var lastindex=0;
            var nextindex=-1;
            var checkindex=false;
            for (var j = 1; j < rCount; j++) {
                i++;
                while (!document.getElementById('productid' + i)) {
                    i++;
                }
                if(i==index && !checkindex)
                    checkindex=true;
                else if(checkindex && nextindex==-1)
                    nextindex=i;
            }
            lastindex=i;
            if(index==lastindex)
            {
                //addRow();
                //document.getElementById(indexname+'' + rowcount).click();
                //document.getElementById(indexname+'' + rowcount).focus();
            }
            else
            {
                document.getElementById(indexname+'' + nextindex).click();
                document.getElementById(indexname+'' + nextindex).focus();
            }
        }
        else if(keycode==38)//up
        {
            var i=0;

            var table = document.getElementById("productrow");
            var rCount = table.rows.length;
            var lastindex=0;
            var previousindex=-1;
            var nextindex=-1;
            var checkindex=false;
            for (var j = 1; j < rCount; j++) {
                i++;
                while (!document.getElementById('productid' + i)) {
                    i++;
                }
                if(i==index && previousindex!=-1)
                {
                    nextindex=previousindex;
                    break;
                }
                previousindex = i;
            }
            if(nextindex!=-1)
            {
                document.getElementById(indexname+'' + nextindex).click();
                document.getElementById(indexname+'' + nextindex).focus();
            }
        }

        setTimeout(function () { linestatus = false; }, 1500);
    }
    function copyDataFromRow(index)
    {
        var tmpcode="";
        var tmpname="";
        var tmpnumber ="";
        var tmppricepernumber="";
        var tmpdiscountpernumber="";
        var tmpunittext="";
        var tmpserialnoid="";
        var tmptotalprice="";

        var tmpswapcode="";
        var tmpswapname="";
        var tmpswapnumber ="";
        var tmpswappricepernumber="";
        var tmpswapdiscountpernumber="";
        var tmpswapunittext="";
        var tmpswapserialnoid="";
        var tmpswaptotalprice="";
        var i=0;

        var table = document.getElementById("productrow");
        var rCount = table.rows.length;
        var firstindex=-1;
        var lastindex=-1;
        var checkindex=false;
        for (var j = 1; j < rCount; j++) {
            i++;
            while (!document.getElementById('productid' + i)) {
                i++;
            }
            if(i==index && !checkindex)
                checkindex=true;
            else if(checkindex)
            {
                tmpswapcode=tmpcode;
                tmpswapname=tmpname;
                tmpswapnumber=tmpnumber;
                tmpswappricepernumber=tmppricepernumber;
                tmpswapdiscountpernumber=tmpdiscountpernumber;
                tmpswapunittext=tmpunittext;
                tmpswapserialnoid=tmpserialnoid;
                tmpswaptotalprice=tmptotalprice;

                tmpcode=document.getElementById("productcode"+i).value;
                tmpname=document.getElementById("productname"+i).value;
                tmpnumber=document.getElementById("productnumber"+i).value;
                tmppricepernumber=document.getElementById("productpricepernumber"+i).value;
                tmpdiscountpernumber=document.getElementById("discountpernumber"+i).value;
                tmpunittext=document.getElementById("unittext"+i).innerHTML;
                tmpserialnoid=document.getElementById("serialnoid"+i).value;
                tmptotalprice=document.getElementById("totalprice"+i).innerHTML;

                document.getElementById("productcode"+i).value=tmpswapcode;
                document.getElementById("productname"+i).value=tmpswapname;
                document.getElementById("productnumber"+i).value=tmpswapnumber;
                document.getElementById("productpricepernumber"+i).value=tmpswappricepernumber;
                document.getElementById("discountpernumber"+i).value=tmpswapdiscountpernumber;
                document.getElementById("unittext"+i).innerHTML=tmpswapunittext;
                document.getElementById("serialnoid"+i).value=tmpswapserialnoid;
                updateTotalPriceNotUpdateTotal(i);
                document.getElementById("totalprice"+i).innerHTML=tmpswaptotalprice;

                if(document.getElementById("unittext"+i).innerHTML.trim().length>0)
                    document.getElementById("unittext"+i).style.display="";
                else  document.getElementById("unittext"+i).style.display="none";
                if(document.getElementById("serialnoid"+i).value>0)
                {
                    document.getElementById("serialnotext"+i).style.display="";
                    document.getElementById("unittext"+i).style.display="none";
                }
                else  document.getElementById("serialnotext"+i).style.display="none";
                firstindex=i;
            }
        }

    }
    function insertTransaction(isforce, iscreate) {
        var fulfilmentwarehouseid = "";
        var fulfilmentwarehouseidtmp = document.getElementsByName('fulfilmentwarehouseid');
        for (var i = 0; fulfilmentwarehouseidtmp[i]; i++) {
            if (fulfilmentwarehouseidtmp[i].checked) {
                fulfilmentwarehouseid = fulfilmentwarehouseidtmp[i].value;
                break;
            }
        }
        var subtransactiontype = document.getElementById("subtransactiontype").value;
        var contactid = document.getElementById("contactid").value;
        var number = document.getElementById("number").value;
        var customername = document.getElementById("customername").value;
        var customercode = document.getElementById("customercode").value;
        var customeridnumber = document.getElementById("customeridnumber").value;
        var customerbranchno = document.getElementById("customerbranchno").value;
        var customerbranchname = document.getElementById("customerbranchname").value;
        var customeremail = document.getElementById("customeremail").value;
        var customerphone = document.getElementById("customerphone").value;
        var customermobile = document.getElementById("customermobile").value;
        var customerfax = document.getElementById("customerfax").value;
        var customeraddress = document.getElementById("customeraddress").value;
        var agentname = document.getElementById("agentname").value;
        var agentemail = document.getElementById("agentemail").value;
        var agentphone = document.getElementById("agentphone").value;
        var agentaddress = document.getElementById("agentaddress").value;
        var refname = document.getElementById("refname").value;
        var transactionrefid = 0;
        if(document.getElementById("transactionrefid"))
            transactionrefid = document.getElementById("transactionrefid").value;
        var amount = document.getElementById("amount").value;
        var vatamount = document.getElementById("vatamount").value;

        var stateshippingvat = document.getElementById("isshippingchk").checked;
        var isshippingvat = 0;
        if (stateshippingvat == true){
            isshippingvat = 1
        }

        var whtpercent = 0;
        var whtamount = 0;
        //if(document.getElementById("whtcheck").checked)
        //{
        //    whtpercent = document.getElementById("whtpercent").value;
        //    whtamount = document.getElementById("whtamount").value;
        //    whtamount = toremoveComma(whtamount);
        //}

            whtpercent = document.getElementById("tmpwithholdingtaxpercent").value;
            whtamount = document.getElementById("tmpwithholdingtaxamount").value;
            whtamount = toremoveComma(whtamount);
        var shippingname = document.getElementById("shippingname").value;
        var shippingphone = document.getElementById("shippingphone").value;
        var shippingemail = document.getElementById("shippingemail").value;
        var shippingchannel = document.getElementById("shippingchannel").value;
        var shippingid = "";
        var codstatus = 0;
        var shippingamount = document.getElementById("shippingamount").value;
        var shippingdate = document.getElementById("shippingdate").value;
        var shippingaddress = document.getElementById("shippingaddress").value;
        var trackingno = document.getElementById("trackingno").value;
        var paymentamount = document.getElementById("paymentamount").value;
        var paymentname = document.getElementById("paymentname").value;
        var saleschannel = document.getElementById("saleschannel").value;
        var transactiondate = document.getElementById("transactiondate").value;
        var expiredate = "";
        if(0 != 0)
        {
            expiredate = document.getElementById("expiredate").value;
        }

        var description = document.getElementById("description").value;
        var discounttext = document.getElementById("discounttext").value;
        var vattypeidtext =$("#vattypeid").val();
        var vat = vattypeidtext.split(":");
        var vattypeid=parseInt(vat[0]);
        var warehouseid = 0;
        var status = 0;

        var facebookname = document.getElementById("facebookname").value;
        var facebookid = document.getElementById("facebookid").value;
        var fbconversationid = document.getElementById("fbconversationid").value;
        var facebookpageid = document.getElementById("facebookpageid").value;

        var linename = document.getElementById("linename").value;
        var lineid = document.getElementById("lineid").value;
        if (fulfilmentwarehouseid.length == 0) {
            if (document.getElementById("warehousetype1").checked) {
                status = 1;
                if (document.getElementById("warehouseid"))
                    warehouseid = document.getElementById("warehouseid").value;
            }
            else {
                status = 0;
                if (document.getElementById("warehouseid0"))
                    warehouseid = document.getElementById("warehouseid0").value;
            }
        }
        else
        {
            warehouseid = fulfilmentwarehouseid;
            var value = document.getElementById("fulfilmentshippingchannel").value;
            var valuearray = value.split(":");
            shippingchannel = valuearray[1];
            shippingid = valuearray[0];
            if (document.getElementById("codstatus") && document.getElementById("codstatus").checked)
                codstatus = 1;
        }

        var paymentdatetimestatus = document.getElementById("paymentdatetimestatus").value;
        var paymentdatetime = document.getElementById("paymentdatetime").value;

        number = encodeURI(number);
        customername = encodeURI(customername);
        customercode = encodeURI(customercode);
        customeridnumber = encodeURI(customeridnumber);
        customerbranchno = encodeURI(customerbranchno);
        customerbranchname = encodeURI(customerbranchname);
        customeremail = encodeURI(customeremail);
        customerphone = encodeURI(customerphone);
        customermobile = encodeURI(customermobile);
        customerfax = encodeURI(customerfax);
        customeraddress = encodeURI(customeraddress);
        facebookname = encodeURI(facebookname);
        facebookid = encodeURI(facebookid);
        fbconversationid = encodeURI(fbconversationid);
        facebookpageid = encodeURI(facebookpageid);
        linename = encodeURI(linename);
        lineid = encodeURI(lineid);

        agentname = encodeURI(agentname);
        agentemail = encodeURI(agentemail);
        agentphone = encodeURI(agentphone);
        agentaddress = encodeURI(agentaddress);
        refname = encodeURI(refname);

        shippingname = encodeURI(shippingname);
        shippingphone = encodeURI(shippingphone);
        shippingemail = encodeURI(shippingemail);
        shippingchannel = encodeURI(shippingchannel);
        shippingid = encodeURI(shippingid);
        shippingaddress = encodeURI(shippingaddress);
        trackingno = encodeURI(trackingno);
        paymentname = encodeURI(paymentname);
        saleschannel = encodeURI(saleschannel);
        description = encodeURI(description);
        transactiondate = encodeURI(transactiondate);
        if(0 != 0)
        {
            expiredate = encodeURI(expiredate);
        }

        var productliststr = "";
        var i=0;
        var productvalidate=true;

        var table = document.getElementById("productrow");
        var rCount = table.rows.length;
        var serialnoarray = [];
        var serialnovalidate = true;

        let bundleIdList = [];

        for (var j = 1; j < rCount; j++) {
            i++;
            while (!document.getElementById('productid' + i)) {
                i++;
            }

            var isbundleNumber = document.getElementById('isbundles' + i).value.split('-');
            var productnumber = document.getElementById('productnumber' + i).value;
            var productpricepernumber = document.getElementById('productpricepernumber' + i).value;
            var discountpernumber = document.getElementById('discountpernumber' + i).value;

            if (isbundleNumber[0] == 1)
            {
                bundleIdList.push({bundlessetid: isbundleNumber[1], bundlessetnumber: toremoveComma(productnumber), pricepernumber: toremoveComma(productpricepernumber), discounttext: discountpernumber});
                continue;
            }

            var productid = document.getElementById('productid' + i).value;
            var productcode = document.getElementById('productcode' + i).value;
            var productname = document.getElementById('productname' + i).value;

            var canvalid = true;
            if(productname.trim().length==0 || productnumber.trim().length==0 || productpricepernumber.trim().length==0)
            {

                if (productcode.trim().length == 0 && productname.trim().length == 0 && productnumber.trim().length == 0 && productpricepernumber.trim().length == 0 && discountpernumber.trim().length == 0) {
                    canvalid = false;
                    setNormalTextbox('tdproductname' + i);
                    setNormalTextbox('productname' + i);
                    setNormalTextbox('productnumber' + i);
                    setNormalTextbox('productpricepernumber' + i);
                }
                else {
                    if (productname.trim().length == 0) {
                        setRedTextbox('tdproductname' + i);
                        setRedTextbox('productname' + i);
                    }
                    if (productnumber.trim().length == 0)
                        setRedTextbox('productnumber' + i);
                    if (productpricepernumber.trim().length == 0)
                        setRedTextbox('productpricepernumber' + i);
                    productvalidate = false;
                }
                //break;
            }
            if(canvalid)
            {
                var producttotalprice = document.getElementById('producttotalprice' + i).value;
                if(producttotalprice.trim().length==0)
                {
                    if(producttotalprice.trim().length==0)
                        setRedTextbox('producttotalprice' + i);
                    productvalidate=false;
                    //break;
                }
                var serialnoid = document.getElementById('serialnoid' + i).value;
                if (serialnoid != null && serialnoid != "0" && serialnoid != "") {
                    for (var s = 0; s < serialnoarray.length; s++) {
                        if (serialnoid == serialnoarray[s]) {
                            serialnovalidate = false;
                        }
                    }
                    serialnoarray.push(serialnoid + "");
                }
                productcode = encodeURI(productcode);
                productname = encodeURI(productname);

                if (productliststr != "") {
                    productliststr += "[[pdl]]";
                }
                productliststr += productid + "[|apdl|]" + productcode + "[|apdl|]" + productname + "[|apdl|]" + productnumber + "[|apdl|]" + productpricepernumber + "[|apdl|]" + discountpernumber + "[|apdl|]" + producttotalprice + "[|apdl|]" + serialnoid + "[|apdl|]" + codstatus + "[|apdl|]" + shippingid;
            }

        }
        if(number.trim().length==0 || transactiondate.trim().length==0 || !productvalidate)
        {
            if(number.trim().length==0)
                setRedTextbox("number");
            if(transactiondate.trim().length==0)
                setRedTextbox("transactiondate");
            openError("ZORT", "กรุณาใส่ข้อมูลให้ครบถ้วน");
            return;
        }
        if (!serialnovalidate)
        {
           openError("ZORT", "รหัส Serial number ซ้ำกัน</br>กรุณาตรวจสอบ Serial number");
           return;
        }
        _ShowLoading();

        let postData = JSON.stringify({ subtransactiontype: subtransactiontype, contactid: contactid, number: number, customername: customername, customeridnumber: customeridnumber, customerbranchno: customerbranchno, customerbranchname: customerbranchname, customeremail: customeremail, customerphone: customerphone, customermobile: customermobile, customerfax: customerfax, customeraddress: customeraddress, refname: refname, amount: amount, shippingname: shippingname, shippingphone: shippingphone, shippingemail: shippingemail, shippingchannel: shippingchannel, shippingamount: shippingamount, shippingdate: shippingdate, shippingaddress: shippingaddress, trackingno: trackingno, paymentamount: paymentamount, paymentname: paymentname, transactiondate: transactiondate, expiredate: expiredate, description: description, discounttext: discounttext, warehouseid: warehouseid, vattypeid: vattypeid, vatamount: vatamount, productliststr: productliststr, saleschannel: saleschannel, whtpercent: whtpercent, whtamount: whtamount, isforce: isforce, paymentdatetimestatus: paymentdatetimestatus, paymentdatetime: paymentdatetime, agentname: agentname, agentemail: agentemail, agentphone: agentphone, agentaddress: agentaddress, status: status, transactionrefid: transactionrefid, customercode: customercode, facebookname: facebookname, facebookid: facebookid, fbconversationid: fbconversationid, facebookpageid: facebookpageid, linename: linename, lineid: lineid, vatpercent: 7, codstatus: codstatus, shippingid: shippingid, isshippingvat: isshippingvat, bundlemodel: bundleIdList });

        //new and add parameter bundleIdList in ajax
        $('button[type="button"],input[type="button"],input[type=reset]').attr('disabled', 'disabled');
        $.ajax({
            type: "POST",
            url: '/Sell/doInsertTransaction',
            data: postData,
            dataType: "json",
            contentType: "application/json; charset=utf-8",
          cache: false,
          success: function (res) {
              if (res.resCode == '200') {
                  checkfinish=true;
                  if(iscreate==0)
                      window.location.href = "/Sell/Details?" + "&tid=" + res.resDesc;
                  else
                      location.reload();
                  _HideLoading();
              }
              else  if (res.resCode == '250') {
                  checkfinish=true;
                  if(iscreate==0)
                      window.location.href = "/Sell/Details?" + "&tid=" + res.resDesc + "&cc=1";
                  else
                      location.reload();
                  _HideLoading();
              }
              else if (res.resCode == '700') {
                  _HideLoading();
                  $('button[type="button"],input[type="button"],input[type=reset]').removeAttr('disabled');
                  document.getElementById("number").value = res.resDesc;
                  tmpiscreate = iscreate;
                  openConfirm("ยืนยัน","หมายเลขรายการซ้ำ<br/><br/><strong>หมายเลขรายการใหม่ของคุณ คือ <br/>" + res.resDesc + "</strong><br/><br/>ยืนยันการบันทึก?");

              }
                else if (res.resCode == '800') {

                  _HideLoading();
                    $('button[type="button"],input[type="button"],input[type=reset]').removeAttr('disabled');
                    var skulist = res.resDesc2.split("||");
                    var sku = "";
                    for (var i = 0; i < skulist.length - 1; i++) {
                       sku += ( "<li>" + skulist[i] + "</li>");

                    }

                  openError("ZORT", res.resDesc + "<br/>" + "<ul style=\"text-align: left;word-break: break-all;margin-top:10px;\"> " + sku + "</ul>");


                }
              else {
                  _HideLoading();
                  $('button[type="button"],input[type="button"],input[type=reset]').removeAttr('disabled');
                  openError("ZORT", res.resDesc);
              }
          },
                          error: function (xhr, ajaxOptions, thrownError) {
                                    _HideLoading();
                                    $('button[type="button"],input[type="button"],input[type=reset]').removeAttr('disabled');
                                    openError("ZORT","ไม่สามารถเชื่อมต่อได้, กรุณาลองใหม่อีกครั้ง");
                          }
      });
    }
    function doConfirm()
    {
        insertTransaction(true, tmpiscreate);

    }

    function clickMenu(index)
    {
        if(index==0)
            window.location.href = "/Sell/Add?";
        else
            window.location.href = "/Sell/list?";
    }
    function setmerchantstatus() {
        var contacttransactionoption=0;
        if (document.getElementById("tmpmerchantstatus").checked) {
            $(".setarea").show();
            contacttransactionoption=1;
        }
        else
        {
            $(".setarea").hide();
            $("#customeridnumber").val("");
            $("#customerbranchno").val("");
            $("#customerbranchname").val("");
        }
        $.ajax({
            type: "POST",
            url: '/Sell/doSaveContactTransactionOption',
            data: {
                contacttransactionoption: contacttransactionoption
            },
            dataType: "json",
            cache: false,
            success: function (res) {

            }
        });
    }

    function copyInfo(){
        var shippingnametext = document.getElementById("customername").value;
        var shippingphonetext = document.getElementById("customerphone").value;
        var shippingemailtext = document.getElementById("customeremail").value;
        var shippingaddresstext = document.getElementById("customeraddress").value;
        document.getElementById("shippingname").value = shippingnametext;
        document.getElementById("shippingphone").value = shippingphonetext;
        document.getElementById("shippingemail").value = shippingemailtext;
        document.getElementById("shippingaddress").value = shippingaddresstext;
    }

    function changeFulfilmentWarehouse(warehouseid) {
        if (document.getElementById("fulfilmentwarehouse" + warehouseid).checked) {
            $(".fulfilmentwarehousecheckbox").prop('checked', false);
            $("#fulfilmentwarehouse" + warehouseid).prop('checked', true);
            _ShowLoading();
            $.post('/Sell/doGetFulfilmentCourier', { warehouseid: warehouseid, type: 1 },
                function (htmlPartialView) {
                    if (htmlPartialView.trim() == 'registerstring') {
                        location.reload();
                    }
                    else {
                        _HideLoading();
                        $("#shippingchannelarea").hide();
                        $("#fulfilmentcourierarea").show();
                        $(".fulfilmentarea").show();
                        $(".warehousearea").hide();
                        $("#fulfilmentcourierarea").html(htmlPartialView);
                        changeFulfilmentShippingChannel();
                    }

                }
            );
        }
        else {
            $("#fulfilmentwarehouse" + warehouseid).prop('checked', false);
            $("#shippingchannelarea").show();
            $("#fulfilmentcourierarea").hide();
            $(".fulfilmentarea").hide();
            $(".warehousearea").show();
        }


    }
</script>