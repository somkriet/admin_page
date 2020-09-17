<!--Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">สร้างรายการสั่งซื้อใหม่</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
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

              <div class="form-group">
                <div class="row">
                <label for="number" class="col-sm-4 pt-md-2">ชื่อ-สกุล <span class="required-field">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" value="IV-202009001" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                <label for="number" class="col-sm-4 pt-md-2">ชื่อโซเซียล<span class="required-field">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" value="IV-202009001" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div>


              <div class="form-group">
                <div class="row">
                <label for="number" class="col-sm-4 pt-md-2">เบอร์โทร <span class="required-field">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" value="IV-202009001" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                <label for="number" class="col-sm-4 pt-md-2">อีเมล์ <span class="required-field">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" value="IV-202009001" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                <label for="number" class="col-sm-4 pt-md-2">ที่อยู่ลูกค้า <span class="required-field">*</span></label>
                  <div class="col-sm-8">
                    <textarea  id="customer_address" name="customer_address" rows="4" class="form-control" placeholder="ที่อยู่จัดส่ง ..." style="overflow: hidden; resize: none;"></textarea>
                  </div>
                </div>
              </div>



            </div>

            <div class="col-sm">
              <label class="col-sm"><b>ที่อยู่ลูกค้า</b></label>

              <div class="form-group">
                <div class="row">
                <label for="number" class="col-sm-4 pt-md-2">ที่อยู่ลูกค้า <span class="required-field">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control form-text" id="number" maxlength="128" value="IV-202009001" onkeyup="setNormalTextbox(this.id);">
                  </div>
                </div>
              </div>

            </div>
            <div class="col-sm">
              3 of 3
            </div>
          </div>





        </div>
    </div>
</div>