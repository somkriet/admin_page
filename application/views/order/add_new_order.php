<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">รายการสั่งซื้อใหม่</h1>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>

        <div class="card-body">

        </div>
<!--         <div class="card-body">
          <div class="content">
            <div class="container-fluid">
                <div class="d-lg-flex flex-row justify-content-between mb-4">
                  <div class="mb-4 mb-lg-0">
                    <span class="font-kanit fs-sm">
                    <a href="/Buy/list?">
                    <i class="fal fa-chevron-left fs-xs mr-1"></i>
                    รายการซื้อ </a>
                    </span>
                  <h1 class="title-page">สร้างรายการซื้อ </h1>
                  <span class="font-kanit"></span>
                  </div>
                  <div class=""></div>
                </div>
            <div class="box-white">
            <div class="row">
              <div class="col-sm-6">
              <fieldset class="pl-lg-5 pr-lg-5 mb-5 mb-lg-0">
                <legend>
                <span class="fa-stack fa-stack fa-2x zort-icon fs-sm">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fal fa-clipboard-list-check fa-stack-1x fa-inverse"></i>
                </span> ข้อมูล
                </legend>
                <div class="form-group">
                <div class="row">
                <label for="" class="col-sm-4">ประเภท</label>
                <div class="col-sm-8">
                ซื้อสินค้าเข้า <input type="hidden" id="subtransactiontype" value="0">
                </div>
                </div>
                </div>
                <div class="form-group">
                  <div class="row">
                  <label for="number" class="col-sm-4">รายการ <span style="color:red;">*</span></label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control form-text" id="number" maxlength="128" value="PO-202008001" onkeyup="setNormalTextbox(this.id);">
                  </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                  <label for="transactiondate" class="col-sm-4">วันที่ <span style="color: red;">*</span></label>
                    <div class="col-sm-8">
                      <div class="input-group date form_date" data-date="" data-date-format="d/m/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                      <input class="form-control" type="text" name="transactiondate" value="26/8/2563" id="transactiondate" onkeyup="setNormalTextbox(this.id);" readonly="">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                  <label for="refname" class="col-sm-4">อ้างอิง</label>
                    <div class="col-sm-8">
                      <div class="typeahead__container">
                        <div class="typeahead__field">
                        <span class="typeahead__query">
                        <span class="typeahead__cancel-button"></span><input class="js-typeahead-input refnametags" name="q" type="search" id="refname" maxlength="128" value="" autofocus="" autocomplete="off">
                        </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                  <label for="vattypeid" class="col-sm-4">ประเภทภาษี</label>
                    <div class="col-sm-8">
                    <select class="form-control form-text form-select" id="vattypeid" onchange="changeVatType()">
                    <option value="1:0:1">ไม่มีภาษี</option>
                    <option value="2:7:0">แยกภาษีมูลค่าเพิ่ม 7%</option>
                    <option value="3:7:1">รวมภาษีมูลค่าเพิ่ม 7%</option>
                    </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                  <input type="hidden" id="agentname" value=""><input type="hidden" id="agentemail" value=""><input type="hidden" id="agentphone" value=""><input type="hidden" id="agentaddress" value="">
                  </div>
                </div>
              </fieldset>
              </div>
              <div class="col-sm-6">
                <fieldset class="pl-lg-5 pr-lg-5 mb-0">
                  <legend>
                  <span class="fa-stack fa-stack fa-2x zort-icon fs-sm">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fal fa-user fa-stack-1x fa-inverse"></i>
                  </span>ผู้ติดต่อ
                  </legend>
                  <div class="form-group">
                    <div class="row">
                    <label for="customername" class="col-sm-4">ชื่อผู้ติดต่อ</label>
                      <div class="col-sm-8">
                        <div class="typeahead__container">
                          <div class="typeahead__field">
                          <span class="typeahead__query">
                          <span class="typeahead__cancel-button"></span><input class="js-typeahead-input customernametags" name="q" type="search" placeholder="พิมพ์ ชื่อ,รหัส" id="customername" maxlength="256" value="" autofocus="" autocomplete="off">
                          </span>
                          <span class="typeahead__button">
                          <a href="javascript:showAllContact();" class="button button-link button-md"><i class="fal fa-address-book"></i></a>
                          </span>
                          </div>
                        </div>
                      <input type="hidden" id="contactid" value="0">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                    <label for="customercode" class="col-sm-4">รหัสผู้ติดต่อ</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control form-text" id="customercode" maxlength="128" value="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                    <label for="customerphone" class="col-sm-4">เบอร์โทรศัพท์ผู้ติดต่อ</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control form-text" id="customerphone" maxlength="64" value="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group" style="display:none;">
                    <div class="row">
                    <label for="customermobile" class="col-sm-4">เบอร์มือถือผู้ติดต่อ</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control form-text" id="customermobile" maxlength="64" value="">
                      </div>
                    </div>
                  </div>
                <div class="form-group" style="display:none;">
                <div class="row">
                <label for="customerfax" class="col-sm-4">เบอร์โทรสารผู้ติดต่อ</label>
                <div class="col-sm-8">
                <input type="text" class="form-control form-text" id="customerfax" maxlength="64" value="">
                </div>
                </div>
                </div>
                <div class="form-group">
                <div class="row">
                <label for="customeremail" class="col-sm-4">อีเมลผู้ติดต่อ</label>
                <div class="col-sm-8">
                <input type="text" class="form-control form-text" id="customeremail" maxlength="128" value="">
                </div>
                </div>
                </div>
                <div class="form-group">
                <div class="row">
                <label for="customeraddress" class="col-sm-4">ที่อยู่ผู้ติดต่อ</label>
                <div class="col-sm-8">
                <textarea class="form-control form-text" rows="2" id="customeraddress"></textarea>
                </div>
                </div>
                </div>
                <div class="form-group">
                <div class="row">
                <div class="col-sm-offset-4 col-sm-8">
                <div class="d-flex">
                <div class="mr-3">
                <input type="checkbox" id="tmpmerchantstatus" onclick="setmerchantstatus();">
                </div>
                <div>
                <label for="tmpmerchantstatus" class="help-text">กำหนดเลขผู้เสียภาษี, ชื่อสาขา, เลขที่สาขา</label>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="setarea" style="display:none;">
                <div class="form-group">
                <div class="row">
                <label for="customeridnumber" class="col-sm-4">เลขประจำตัวผู้เสียภาษี</label>
                <div class="col-sm-8">
                <input type="text" class="form-control form-text" maxlength="32" id="customeridnumber" value="">
                </div>
                </div>
                </div>
                <div class="form-group">
                <div class="row">
                <label for="customerbranchname" class="col-sm-4">ชื่อสาขา</label>
                <div class="col-sm-8">
                <input type="text" class="form-control form-text" maxlength="256" id="customerbranchname" value="">
                </div>
                </div>
                </div>
                <div class="form-group">
                <div class="row">
                <label for="customerbranchno" class="col-sm-4">เลขที่สาขา</label>
                <div class="col-sm-8">
                <input type="text" class="form-control form-text" maxlength="128" id="customerbranchno" value="">
                </div>
                </div>
                </div>
                </div>
                </fieldset>
              </div>
            </div>
</div>
<div class="box-white">
<fieldset class="mb-0">
<div class="d-lg-flex flex-row justify-content-between align-items-center mb-3">
<div class="mb-3 mb-lg-0">
<span class="fa-stack fa-stack fa-2x zort-icon fs-sm">
<i class="fas fa-circle fa-stack-2x"></i>
<i class="fal fa-box fa-stack-1x fa-inverse"></i>
</span><span class="font-kanit fs-xmd fw-500">สินค้า</span>
</div>
<div>
<a class="button button-default button-md" href="javascript:showMultiAllProduct();">เลือกสินค้า</a>
</div>
</div>
<div class="">
<div class="t-responsive">
<table class="table zort-table zort-table--tiny zort-table--insert-product zort-table--full" id="productrow">
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
<span id="productcount1" class="sr-only">1</span>
<a class="button button-default button-sm mb-0" href="javascript:showAllProduct(1);">เลือก</a>
</td>
<td class="id">
<div class="typeahead__container">
<div class="typeahead__field">
<span class="typeahead__query">
<input class="js-typeahead-input codetags" name="q" type="search" id="productcode1" maxlength="32" value="" onfocus="autocompleteshow=false;" onkeyup="hideUnittext('1',event.keyCode);" onkeydown="gotoNext(1,'productcode',event.keyCode);" autofocus="" autocomplete="off">
</span>
</div>
</div>
<input type="hidden" id="productid1">
</td>
<td id="tdproductname1" class="name">
<div class="typeahead__container">
<div class="typeahead__field">
<span class="typeahead__query">
<span class="typeahead__cancel-button"></span><input class="js-typeahead-input nametags" name="q" type="text" id="productname1" maxlength="256" value="" onfocus="autocompleteshow=false;" onkeyup="setNormalTextbox(this.id);setNormalTextbox('td'+this.id);hideUnittext('1',event.keyCode);" onkeydown="gotoNext(1,'productname',event.keyCode);" autofocus="" autocomplete="off">
</span>
</div>
</div> 
</td>
<td class="amount">
<div class="input-group form-input-group spinner">
<input type="text" class="form-control" placeholder="0.00" id="productnumber1" maxlength="32" onfocus="removeComma(this.id);autocompleteshow=false;" onblur="updateTotalPrice(1)" value="" onkeyup="setNormalTextbox(this.id);" onkeydown="gotoNext(1,'productnumber',event.keyCode);">
<div class="input-group-btn-vertical">
<button class="btn btn-default" style="margin-top:0px !important;" type="button" onclick="plusNumber('productnumber1');updateTotalPrice(1);"><i class="fa fa-caret-up"></i></button>
<button class="btn btn-default" style="margin-top:-2px !important;" type="button" onclick="minusNumber('productnumber1');updateTotalPrice(1);"><i class="fa fa-caret-down"></i></button>
</div>
</div>
</td>
<td class="value">
<input type="text" class="form-control form-text text-right font-lato" placeholder="0.00" id="productpricepernumber1" maxlength="32" onfocus="removeComma(this.id);autocompleteshow=false;" onblur="updateTotalPrice(1)" onkeyup="setNormalTextbox(this.id);" onkeydown="gotoNext(1,'productpricepernumber',event.keyCode);">
</td>
<td class="discount">
<input type="text" class="form-control form-text font-lato text-right" id="discountpernumber1" placeholder="จำนวนเงิน หรือ %" maxlength="32" onfocus="removeComma(this.id);autocompleteshow=false;" onblur="updateTotalPrice(1)" onkeydown="gotoNext(1,'discountpernumber',event.keyCode);">
<span id="unittext1" class="unittextspan spantruncatenoblock fs-xs grey-400 d-block text-right" style="display: none;"></span>
</td>
<td class="total text-right">
<p id="totalprice1" class="form-text--transparent font-lato">0.00</p>
<input type="hidden" id="producttotalprice1" value="0.00">
</td>
<td class="action">
<a href="javascript:deleteRow(1);" class="d-inline-block btn-etc mt-2"><i class="far fa-times"></i></a>
</td>
</tr>
</tbody>
</table>
</div>
<div class="row mt-2">
<div class="col-md-7">
<a href="javascript:addRow()" class="button button-link button-md">
<i class="fal fa-plus"></i>
<span>เพิ่มสินค้า</span>
</a>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-6 mb-5 mb-lg-0">
<div class="form-group">
<div class="row">
<label for="shippingchannel" class="col-sm-3">ช่องทางจัดส่ง</label>
<div class="col-sm-9">
<div class="typeahead__container">
<div class="typeahead__field">
<span class="typeahead__query">
<span class="typeahead__cancel-button"></span><input class="js-typeahead-input shippingchanneltags" name="q" type="search" id="shippingchannel" maxlength="128" value="" autofocus="" autocomplete="off">
</span>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label for="description" class="col-sm-3">หมายเหตุ</label>
<div class="col-sm-9">
<textarea class="form-control form-text" rows="3" id="description" name="description"></textarea>
</div>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="p-3 pt-0 pb-0">
<div class="form-group">
<div class="row">
<div class="col-xs-6 text-right">
<p>ส่วนลด</p>
</div>
<div class="col-xs-6 text-right">
<input type="text" class="form-control form-text pull-right text-right font-lato" placeholder="จำนวนเงิน หรือ %" id="discounttext" onblur="autocalculate()" maxlength="32" value="">
<input type="hidden" id="shippingaddress">
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-xs-6 text-right">
<label for="">ค่าส่ง <span class="help-text">(ที่ถูกเก็บจากผู้ติดต่อ)</span></label>
<label class="d-block fs-sm"><input type="checkbox" onclick="autocalculate()" id="isshippingchk" disabled="disabled"> ภาษีมูลค่าเพิ่ม</label>
</div>
<div class="col-xs-6 text-right">
<input type="text" class="form-control form-text font-lato text-right" placeholder="0.00" id="shippingamount" onblur="autocalculate()" maxlength="32" onfocus="removeComma(this.id);">
</div>
</div>
</div>
<div class="row">
<div class="col-xs-6 text-right">
<p>มูลค่ารวมก่อนภาษี</p>
</div>
<div class="col-xs-6 text-right">
<p>
<span id="amount2text" class="font-lato">0.00</span>
<input type="hidden" id="amount2" value="0.00">
</p>
</div>
</div>
<div class="row">
<div class="col-xs-6 text-right">
<p>ภาษีมูลค่าเพิ่ม (7%)</p>
</div>
<div class="col-xs-6 text-right">
<p>
<span id="vatamounttext" class="font-lato">0.00</span>
<input type="hidden" class="form-control form-text" id="vatamount" onblur="autocalculate()" maxlength="32" onfocus="removeComma(this.id);" value="0.00">
</p>
</div>
</div>
<div class="row">
<div class="col-xs-6 text-right">
<p>มูลค่ารวม</p>
</div>
<div class="col-xs-6 text-right">
<p>
<span id="amountbeforeshippingtext" class="font-lato">0.00</span>
<input type="hidden" class="form-control form-text" id="amountbeforeshipping" maxlength="32" onfocus="removeComma(this.id);" onblur="isMoney(this.id);" value="0.00">
</p>
</div>
</div>
<div class="row bg-grey-50 p-3 pr-0 pl-0 mt-2">
<div class="col-xs-6 text-right">
<p class="font-kanit fw-500 m-0" style="line-height:1.75rem;">มูลค่ารวมสุทธิ</p>
</div>
<div class="col-xs-6 text-right">
<p class="font-lato fw-600 fs-xmd m-0">
<span id="amounttext">0.00</span>
<input type="hidden" class="form-control form-text" id="amount" maxlength="32" onfocus="removeComma(this.id);" onblur="isMoney(this.id);" value="0.00">
</p>
</div>
</div>
<div class="row" style="display:none;">
<div class="col-xs-6 text-right">
<label>
ภาษีหัก ณ ที่จ่าย
</label>
</div>
<div class="col-xs-6 text-right">
<input type="checkbox" id="whtcheck" onclick="changeWHTType();">
<select class="form-control form-text form-select whtarea" id="whtpercent" onchange="changeWHTType()" style="display: inline; display: none;">
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
</div>
</div>
</div>
</div>
</fieldset>
</div>
<div class="box-white">
<div class="row">
<div class="col-sm-6">
<fieldset class="pl-lg-5 pr-lg-5 mb-0">
<legend>
<span class="fa-stack fa-stack fa-2x zort-icon fs-sm">
<i class="fas fa-circle fa-stack-2x"></i>
<i class="fal fa-shipping-fast fa-stack-1x fa-inverse"></i>
</span>ข้อมูลการจัดส่งสินค้า
</legend>
<div class="form-group">
<div class="row">
<label for="shippingdate" class="col-sm-4">วันที่ส่งสินค้า</label>
<div class="col-sm-8">
<div class="input-group date form_datetime">
<input class="form-control" type="text" value="" id="shippingdate" name="shippingdate" onkeyup="setNormalTextbox(this.id);" readonly="">
<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>
</div>
</div>
</div>
</fieldset>
</div>
<div class="col-sm-6">
</div>
</div>
</div>
<div class="box-white">
<div class="row">
<div class="col-sm-6">
<fieldset class="pl-lg-5 pr-lg-5 mb-5 mb-lg-0">
<legend>
<span class="fa-stack fa-stack fa-2x zort-icon fs-sm">
<i class="fas fa-circle fa-stack-2x"></i>
<i class="fal fa-usd-circle fa-stack-1x fa-inverse"></i>
</span>การชำระเงิน
</legend>
<div class="form-group whtarea" style="display:none;">
<label for="paymentamounttext" class="col-sm-4"><b>ยอดชำระรวม</b></label>
<div class="col-sm-8">
<p><span id="paymentamounttext">0.00</span></p>
</div>
</div>
<div class="form-group">
<div class="row">
<label for="" class="col-sm-4" style="margin-top:5px;">สถานะรายการ</label>
<div class="col-sm-8" id="paymentzone" style="display:none;">
ไม่มี
<a href="javascript:openAddPayment();" class="d-block button button-default button-sm mt-3 wf-150 mb-3">เพิ่มการชำระเงิน</a>
<div class="help-text fs-sm">
ใช้สำหรับบันทึกการชำระเงิน เพื่อแสดงสถานะการชำระเงินของรายการซื้อ
</div>
</div>
<div class="control-label" id="withholdingtaxzone" style="display:none;">
</div>
<input type="hidden" id="tmpwithholdingtaxpercent">
<input type="hidden" id="tmpwithholdingtaxamount">
</div>
</div>
</fieldset>
</div>
<div class="col-sm-6">
<fieldset class="mb-0">
<legend>
<span class="fa-stack fa-stack fa-2x zort-icon fs-sm">
<i class="fas fa-circle fa-stack-2x"></i>
<i class="fal fa-box fa-stack-1x fa-inverse"></i>
</span>คลังสินค้า/สาขา
</legend>
<div class="row">
<div class="col-sm-4">
<label for="" class="" style="margin-top:5px;">สถานะรายการ</label>
</div>
<div class="col-sm-8">
<div class="form-group">
<div class="d-flex">
<div class="mr-3">
<input type="radio" class="form-checkbox" name="warehousetype" id="warehousetype0" value="0" onclick="disablewarehouselist();" checked="">
</div>
<div class="wf-200">
<label for="warehousetype0">รอโอนสินค้า</label>
<div id="warehouseidarea0" class="myselect mt-1">
<div class="btn-group bootstrap-select form-control form-text form-select"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="warehouseid0" title="ไม่ระบุ"><span class="filter-option pull-left">ไม่ระบุ</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">ไม่ระบุ</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">คลังสินค้าหลัก</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select id="warehouseid0" data-live-search="true" class="form-control form-text form-select selectpicker" tabindex="-98">
<option value="0">ไม่ระบุ</option>
<option value="96467">คลังสินค้าหลัก</option>
</select></div>
</div>
</div>
</div>
</div>
<div class="">
<div class="d-flex">
<div class="mr-3">
<input type="radio" class="form-checkbox" name="warehousetype" id="warehousetype1" value="1" onclick="disablewarehouselist();">
</div>
<div class="wf-200">
<label for="warehousetype1">โอนทันทีเข้าคลังสินค้า</label>
<div id="warehouseidarea" class="myselect" style="display: none;">
<div class="btn-group bootstrap-select disabled form-control form-text form-select"><button type="button" class="btn dropdown-toggle disabled btn-default" data-toggle="dropdown" role="button" data-id="warehouseid" tabindex="-1" aria-disabled="true" title="คลังสินค้าหลัก"><span class="filter-option pull-left">คลังสินค้าหลัก</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">คลังสินค้าหลัก</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select id="warehouseid" style="display: none;" data-live-search="true" class="form-control form-text form-select selectpicker" disabled="" tabindex="-98">
<option value="96467" selected="">คลังสินค้าหลัก</option>
</select></div>
</div>
</div>
</div>
</div>
</div>
</div>
</fieldset>
</div>
</div>
</div>
<div class="d-lg-flex flex-row justify-content-between mb-4">
<div>
<a href="/Buy/list?" class="button button-link rounded">กลับ</a>
</div>
<div>
<button type="button" class="button button-default rounded" onclick="insertTransaction(false,1);">บันทึก + สร้างใหม่</button>
<button type="button" class="button button-primary rounded wf-150" onclick="insertTransaction(false,0);">บันทึก</button>
</div>
</div>
</div>
</div>
 

 

            </div>
          </div> -->

        </div>
        <!-- /.container-fluid -->