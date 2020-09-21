<!--Begin Page Content -->
<div class="container-fluid">
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
             <!--  <div class="form-group">
                <div class="row">
                <label for="subtransactiontype" class="col-sm-4">ประเภท</label>
                <div class="col-sm-8">
                  ขายสินค้าออก <input type="hidden" id="subtransactiontype" value="0">
                </div>
                </div>
              </div> -->

               <!-- <div class="form-group"> -->

                <div class="col-sm-10">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control form-text" placeholder="ค้นหาข้อมูลลูกค้า">
                    <div class="input-group-append">
                      <button class="btn btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                  </div>
                 </div>

           
              <!-- </div> -->

              <div class="form-group">
                <div class="row">
                <!-- <label for="number" class="col-sm-4 pt-md-2"><b>ชื่อ-สกุล</b> <span class="required-field">*</span></label> -->
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="ชื่อ-สกุล" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                <!-- <label for="number" class="col-sm-4 pt-md-2"><b>ชื่อโซเซียล</b><span class="required-field">*</span></label> -->
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="ชื่อโซเซียล" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                <!-- <label for="number" class="col-sm-4 pt-md-2"><b>เบอร์โทร</b> <span class="required-field">*</span></label> -->
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="เบอร์โทร" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                <!-- <label for="number" class="col-sm-4 pt-md-2"><b>อีเมล์</b> <span class="required-field">*</span></label> -->
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="อีเมล์" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                <!-- <label for="number" class="col-sm-4 pt-md-2"><b>ที่อยู่ลูกค้า</b> <span class="required-field">*</span></label> -->
                  <div class="col-sm-10">
                    <textarea  id="customer_address" name="customer_address" rows="4" class="form-control" placeholder="ที่อยู่จัดส่ง ..." style="overflow: hidden; resize: none;"></textarea>
                  </div>
                </div>
              </div>



            </div>

            <div class="col-sm">
              <label class="col-sm"><b>การขนส่ง</b></label>

              <!-- <div class="form-group">
                <div class="row">
                <label for="number" class="col-sm-4 pt-md-2"><b>การจัดส่ง</b> <span class="required-field">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="การจัดส่ง" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div> -->

               <div class="form-group row">
                        <!-- <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ขนส่ง</b></label> -->
                        <div class="col-sm-10">
                          <select class="form-control form-text" id="product_location" placeholder="การจัดส่ง">
                            <option>เลือกขนส่ง</option>
                            <option>ไปรษณีย์ไทย ธรรมดา</option>
                            <option>ไปรษณีย์ไทย EMS</option>
                            <option>Flash</option>
                            <option>Kerry</option>
                            <option>J&T</option>
                          </select>
                        </div>
                </div>

                 <label ><b>การชำระเงิน</b></label>

                 <div class="form-group row">
                        <!-- <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ขนส่ง</b></label> -->
                        <div class="col-sm-10">
                          <select class="form-control form-text" id="product_location" placeholder="การจัดส่ง">
                            <option>เลือกการชำระเงิน</option>
                            <option>ธนาคารกสิกรไทย</option>
                            <option>COD (เก็บเงินปลายทาง)</option>
                          </select>
                        </div>
                      </div>

                <label ><b>ประเภทภาษี</b></label>

                 <div class="form-group row">
                        <!-- <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ขนส่ง</b></label> -->
                        <div class="col-sm-10">
                          <select class="form-control form-text" id="product_location" placeholder="การจัดส่ง">
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
                      <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="เลขประจำตัวผู้เสียภาษี" onkeyup="setNormalTextbox(this.id);">
                    </div>
                  </div>
                </div>

                 <label for="number"><b>ชื่อสาขา</b></label>
                <div class="form-group">
                  <div class="row">
                   
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="ชื่อสาขา" onkeyup="setNormalTextbox(this.id);">
                    </div>
                  </div>
                </div>

                <label for="number"><b>เลขที่สาขา</b></label>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="เลขที่สาขา" onkeyup="setNormalTextbox(this.id);">
                    </div>
                  </div>
                </div>

                


            </div>

           
       
        </div>
    </div>



</div>


 <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ข้อมูลทั่วไป</h6>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm">
               <label class="col-sm"><b>ข้อมูลลูกค้า</b></label>
             <!--  <div class="form-group">
                <div class="row">
                <label for="subtransactiontype" class="col-sm-4">ประเภท</label>
                <div class="col-sm-8">
                  ขายสินค้าออก <input type="hidden" id="subtransactiontype" value="0">
                </div>
                </div>
              </div> -->

               <!-- <div class="form-group"> -->

                <div class="col-sm-10">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control form-text" placeholder="ค้นหาข้อมูลลูกค้า">
                    <div class="input-group-append">
                      <button class="btn btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                  </div>
                 </div>

           
              <!-- </div> -->

              <div class="form-group">
                <div class="row">
                <!-- <label for="number" class="col-sm-4 pt-md-2"><b>ชื่อ-สกุล</b> <span class="required-field">*</span></label> -->
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="ชื่อ-สกุล" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                <!-- <label for="number" class="col-sm-4 pt-md-2"><b>ชื่อโซเซียล</b><span class="required-field">*</span></label> -->
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="ชื่อโซเซียล" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                <!-- <label for="number" class="col-sm-4 pt-md-2"><b>เบอร์โทร</b> <span class="required-field">*</span></label> -->
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="เบอร์โทร" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                <!-- <label for="number" class="col-sm-4 pt-md-2"><b>อีเมล์</b> <span class="required-field">*</span></label> -->
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="อีเมล์" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                <!-- <label for="number" class="col-sm-4 pt-md-2"><b>ที่อยู่ลูกค้า</b> <span class="required-field">*</span></label> -->
                  <div class="col-sm-10">
                    <textarea  id="customer_address" name="customer_address" rows="4" class="form-control" placeholder="ที่อยู่จัดส่ง ..." style="overflow: hidden; resize: none;"></textarea>
                  </div>
                </div>
              </div>



            </div>

            <div class="col-sm">
              <label class="col-sm"><b>การขนส่ง</b></label>

              <!-- <div class="form-group">
                <div class="row">
                <label for="number" class="col-sm-4 pt-md-2"><b>การจัดส่ง</b> <span class="required-field">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="การจัดส่ง" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div> -->

               <div class="form-group row">
                        <!-- <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ขนส่ง</b></label> -->
                        <div class="col-sm-10">
                          <select class="form-control form-text" id="product_location" placeholder="การจัดส่ง">
                            <option>เลือกขนส่ง</option>
                            <option>ไปรษณีย์ไทย ธรรมดา</option>
                            <option>ไปรษณีย์ไทย EMS</option>
                            <option>Flash</option>
                            <option>Kerry</option>
                            <option>J&T</option>
                          </select>
                        </div>
                </div>

                 <label ><b>การชำระเงิน</b></label>

                 <div class="form-group row">
                        <!-- <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ขนส่ง</b></label> -->
                        <div class="col-sm-10">
                          <select class="form-control form-text" id="product_location" placeholder="การจัดส่ง">
                            <option>เลือกการชำระเงิน</option>
                            <option>ธนาคารกสิกรไทย</option>
                            <option>COD (เก็บเงินปลายทาง)</option>
                          </select>
                        </div>
                      </div>

                <label ><b>ประเภทภาษี</b></label>

                 <div class="form-group row">
                        <!-- <label for="inputEmail3" class="col-sm-3 col-form-label"><b>ขนส่ง</b></label> -->
                        <div class="col-sm-10">
                          <select class="form-control form-text" id="product_location" placeholder="การจัดส่ง">
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
                      <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="เลขประจำตัวผู้เสียภาษี" onkeyup="setNormalTextbox(this.id);">
                    </div>
                  </div>
                </div>

                 <label for="number"><b>ชื่อสาขา</b></label>
                <div class="form-group">
                  <div class="row">
                   
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="ชื่อสาขา" onkeyup="setNormalTextbox(this.id);">
                    </div>
                  </div>
                </div>

                <label for="number"><b>เลขที่สาขา</b></label>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control form-text" id="number" maxlength="128" placeholder="เลขที่สาขา" onkeyup="setNormalTextbox(this.id);">
                    </div>
                  </div>
                </div>

                


            </div>

           
       
        </div>
    </div>