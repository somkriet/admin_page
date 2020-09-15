<!--Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">รายการสั่งซื้อใหม่</h1>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
          <div class="row">

            <div class="col-sm-6">
            <fieldset id="tour-sale-info" class="pl-lg-5 pr-lg-5 mb-5 mb-lg-0">
             
              <label class="col-sm-4"><b>ข้อมูล</b></label>
              <div class="form-group">
                <div class="row">
                <label for="subtransactiontype" class="col-sm-4">ประเภท</label>
                <div class="col-sm-8">
                  ขายสินค้าออก <input type="hidden" id="subtransactiontype" value="0">
                </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                <label for="number" class="col-sm-4 pt-md-2">รายการ <span class="required-field">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" value="IV-202009001" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                <label for="transactiondate" class="col-sm-4 pt-md-2">วันที่ <span class="required-field">*</span></label>
                <div class="col-sm-8">
                  <div class="input-group date form_date" data-date="" data-date-format="d/m/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" type="text" name="transactiondate" value="15/9/2563" id="transactiondate" onkeyup="setNormalTextbox(this.id);" readonly="">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                  </div>
                </div>
                </div>
              </div>
              <div style="display:none;">
                <div class="form-group">
                <div class="row">
                  <label for="expiredate" class="col-sm-4 pt-md-2">วันหมดอายุ</label>
                  <div class="col-sm-8">
                    <div class="input-group date form_date" data-date="" data-date-format="d/m/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                      <input class="form-control" type="text" name="expiredate" value="" id="expiredate" readonly="">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label for="refname" class="col-sm-4 pt-md-2">อ้างอิง</label>
                  <div class="col-sm-8">
                    <div class="typeahead__container">
                      <div class="typeahead__field">
                        <span class="typeahead__query">
                          <span class="typeahead__cancel-button"></span>
                         <!--  <input class="js-typeahead-input refnametags" name="q" type="search" id="refname" maxlength="128" value="" autofocus="" autocomplete="off"> -->
                           <input type="text" class="form-control form-text" id="customercode" maxlength="128" value="">
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                <label for="saleschannel" class="col-sm-4 pt-md-2">ช่องทางการขาย</label>
                  <div class="col-sm-8">
                    <div class="typeahead__container">
                      <div class="typeahead__field">
                        <span class="typeahead__query">
                          <span class="typeahead__cancel-button"></span>
                          <!-- <input class="js-typeahead-input saleschanneltag" name="q" type="search" id="saleschannel" maxlength="64" value="" autofocus="" autocomplete="off"> -->
                           <input type="text" class="form-control form-text" id="customercode" maxlength="128" value="">
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                <label for="vattypeid" class="col-sm-4 pt-md-2">ประเภทภาษี</label>
                  <div class="col-sm-8">
                  <select class="form-control form-text form-select" id="vattypeid" onchange="changeVatType()">
                  <option value="1:0:1">ไม่มีภาษี</option>
                  <option value="2:7:0">แยกภาษีมูลค่าเพิ่ม 7%</option>
                  <option value="3:7:1">รวมภาษีมูลค่าเพิ่ม 7%</option>
                  </select>
                  </div>
                </div>
              </div>
              <input type="hidden" id="agentname" value=""><input type="hidden" id="agentemail" value="">
              <input type="hidden" id="agentphone" value=""><input type="hidden" id="agentaddress" value="">
            </fieldset>
            </div>

            <div class="col-sm-6">
              <fieldset id="tour-sale-customer" class="pl-lg-5 pr-lg-5 mb-0">
                <!-- <legend>
                <span class="fa-stack fa-stack fa-2x zort-icon fs-sm">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fal fa-user fa-stack-1x fa-inverse"></i>
                </span>
                </legend> -->
                <label class="col-sm-4"><b>ลูกค้า</b></label>
                <div class="form-group">
                  <div class="row">
                    <label for="customername" class="col-sm-4 pt-md-2">ชื่อลูกค้า</label>
                    <div class="col-sm-8">
                      <div class="typeahead__container">
                        <div class="typeahead__field">
                          <span class="typeahead__query">
                          <span class="typeahead__cancel-button"></span>
                          <!-- <input class="js-typeahead-input customernametags" name="q" type="search" placeholder="พิมพ์ ชื่อ,รหัส" id="customername" maxlength="256" value="" autofocus="" autocomplete="off"> -->
                           <input type="text" class="form-control form-text" id="customercode" maxlength="128" value="">
                          </span>
                         <!--  <span class="typeahead__button" style="">
                          <a href="javascript:showAllContact();" class="button button-link button-md"><i class="fal fa-address-book"></i></a>
                          </span> -->
                        </div>
                      </div>  
                    <input type="hidden" id="contactid" value="0">
                    <input type="hidden" id="facebookname" value="">
                    <input type="hidden" id="facebookid" value="">
                    <input type="hidden" id="fbconversationid" value="">
                    <input type="hidden" id="facebookpageid" value="">
                    <input type="hidden" id="linename" value="">
                    <input type="hidden" id="lineid" value="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                  <label for="customercode" class="col-sm-4 pt-md-2">รหัสลูกค้า</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-text" id="customercode" maxlength="128" value="">
                  </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                  <label for="customerphone" class="col-sm-4 pt-md-2">เบอร์โทรศัพท์ลูกค้า</label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control form-text" id="customerphone" maxlength="64" value="">
                  </div>
                  </div>
                </div>
                <div class="form-group" style="display:none;">
                  <div class="row">
                  <label for="customermobile" class="col-sm-4 pt-md-2">เบอร์มือถือลูกค้า</label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control form-text" id="customermobile" maxlength="64" value="">
                  </div>
                  </div>
                </div>
                <div class="form-group" style="display:none;">
                  <div class="row">
                    <label for="customerfax" class="col-sm-4 pt-md-2">เบอร์โทรสารลูกค้า</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control form-text" id="customerfax" maxlength="64" value="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label for="customeremail" class="col-sm-4 pt-md-2">อีเมลลูกค้า</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control form-text" id="customeremail" maxlength="128" value="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label for="customeraddress" class="col-sm-4">ที่อยู่ลูกค้า</label>
                    <div class="col-sm-8">
                    <textarea class="form-control form-text" rows="2" id="customeraddress"></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
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
                <div class="setarea" style="display:none;">
                  <div class="form-group">
                    <div class="row">
                      <label for="customeridnumber" class="col-sm-4 pt-md-2">เลขประจำตัวผู้เสียภาษี</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control form-text" maxlength="32" id="customeridnumber" value="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label for="customerbranchname" class="col-sm-4 pt-md-2">ชื่อสาขา</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control form-text" maxlength="256" id="customerbranchname" value="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label for="customerbranchno" class="col-sm-4 pt-md-2">เลขที่สาขา</label>
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

      </div>
        <!-- /.container-fluid