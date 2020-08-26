<!-- Begin Page Content -->
  <!-- <div class="container-fluid"> -->
<style type="text/css">
  .title-page {
    margin: 0 0 .5rem;
    font-size: 1.875rem;
    line-height: 1.875rem;
    font-family: kanit;
  }

  .fs-sm {
    font-size: .875rem;
  }
  .font-kanit {
    font-family: kanit;
  .z-icon--success .fa-stack-2x{color:#cefff1}
  .z-icon--success .fa-stack-1x{color:#13af82}
}
</style>

<?php

if(!empty($customer_data)): 
   foreach ($customer_data as $row) {
    $customer_id = $row->cus_id;
    $name_social = $row->cus_name_social;
    $name = $row->cus_name;
    $phone_number = $row->phone_number;
    $email = $row->email;
    $adress = $row->cus_address;
    $date_create = $row->date_create;
    $img = $row->link_img;

    }
endif;

?>
     
<div class="content">
    <div class="container-fluid">
      <div class="d-lg-flex flex-row justify-content-between mb-4">
        <div class="mb-4 mb-lg-0">
          <span class="font-kanit fs-sm"><a href="<?php echo base_url();?>customer" class="font-kanit fs-sm"><i class="fal fa-chevron-left fs-xs mr-1"></i> ตารางลูกค้า</a></span>
          <h1 class="title-page">รายละเอียดลูกค้า<span>(รหัส : <?php echo $customer_id; ?> )</span></h1>
        </div>
        <div class="">
        </div>
      </div>

      <div class="z-filter mb-4" id="checkboxrecordarea0" style="">
        <div class="d-lg-flex flex-row justify-content-between">
          <div class="">
            <a href="javascript:doBuy(13523943,&quot;20200805&quot;,&quot;C0001&quot;,&quot;rrrr@gmail.com&quot;,&quot;023231245&quot;,&quot;20200805&quot;,&quot;&quot;,&quot;&quot;,&quot;&quot;);" class="button button-default button-md">ซื้อสินค้าเข้า</a><a href="javascript:doSell(13523943,&quot;20200805&quot;,&quot;C0001&quot;,&quot;rrrr@gmail.com&quot;,&quot;023231245&quot;,&quot;20200805&quot;,&quot;&quot;,&quot;&quot;,&quot;&quot;);" class="button button-default button-md">ขายสินค้าออก</a>
          </div>
          <div class="">
            <a href="/Contact/Edit?cid=13523943" class="button button-link button-md"><i class="fal fa-edit"></i>แก้ไข</a><a href="javascript:doArchiveContact();" class="button button-link button-md"><i class="fal fa-trash-alt"></i>ลบ</a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <div class="d-flex justify-content-between align-items-center p-4 mb-3 mb-lg-5 bg-white rounded-sm">
          <div class="">
            <span class="fa-stack fa-2x zort-icon fs-lg z-icon--progress">
              <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fal fa-calendar-week fa-stack-1x fa-inverse"></i>

            </span>
          </div>
          <div class="text-right">
            <h2 class="fs-sm m-0">ยอดขายเดือนนี้ (บาท)</h2>
              <p class="fs-lg font-lato fw-600 m-0 mt-1 lh-1 blue-500">
              -
              </p>
          </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="d-flex justify-content-between align-items-center p-4 mb-3 mb-lg-5 bg-white rounded-sm">
          <div class="">
            <span class="fa-stack fa-2x zort-icon fs-lg z-icon--success">
              <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fal fa-calendar-alt fa-stack-1x fa-inverse"></i>
            </span>
          </div>
          <div class="text-right">
            <h2 class="fs-sm m-0">ยอดขายปีนี้ (บาท)</h2>
              <p class="fs-lg font-lato fw-600 m-0 mt-1 lh-1 green-500">
              -
              </p>
          </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="d-flex justify-content-between align-items-center p-4 mb-3 mb-lg-5 bg-white rounded-sm">
          <div class="">
            <span class="fa-stack fa-2x zort-icon fs-lg z-icon--cancel">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fal fa-usd-circle fa-stack-1x fa-inverse"></i>
            </span>
          </div>
          <div class="text-right">
            <h2 class="fs-sm m-0">ยอดค้างชำระ (บาท)</h2>
            <p class="fs-lg font-lato fw-600 m-0 mt-1 lh-1 red-400">
            -
            </p>
          </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="bg-white rounded-sm mb-3 mb-lg-5 p-4">
            <div class="d-flex flex-row mb-6">
              <div class="mr-4">
                <img id="pimg" src="<?php echo base_url('uploads/'.$img);?>" width="100" style="cursor:pointer;" onclick="openUpload();">
              </div>
              <div>
                <div class="">
                <img src="<?php echo base_url('assets\img\Content\icon-fb.svg');?>" width="15">
                <span title="20200805" class="fs-sm grey-400"><?php echo $name_social; ?></span>
                </div>
              </div>
            </div>
            <br>
            <div class="">
              <div class="mb-7">
                <div class="form-group mb-2">
                  <div class="row">
                    <div class="col-sm-4 fs-sm grey-400">
                      <span>ชื่อผู้ติดต่อ</span>
                    </div>
                    <div class="col-sm-8">
                      <span title="20200805"><?php echo $name; ?></span>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-2">
                  <div class="row">
                    <div class="col-sm-4 fs-sm grey-400">
                      <span>เบอร์โทรศัพท์</span>
                    </div>
                    <div class="col-sm-8">
                      <span title="023231245"><?php echo $phone_number; ?></span>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-2">
                  <div class="row">
                    <div class="col-sm-4 fs-sm grey-400">
                      <span>อีเมล</span>
                    </div>
                    <div class="col-sm-8">
                      <span title="rrrr@gmail.com"><?php echo $email; ?></span>
                    </div> 
                  </div>
                </div>
                <div class="form-group mb-2">
                  <div class="row">
                    <div class="col-sm-4 fs-sm grey-400">
                      <span>ที่อยู่</span>
                     </div>
                    <div class="col-sm-8">
                      <span title="20200805"><?php echo $adress; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="bg-white rounded-sm mb-3 mb-lg-5">
            <div class="d-lg-flex flex-row justify-content-between p-4 pb-2">
              <div class="">
                <h2 class="font-kanit fs-xmd mt-0 mb-4 mb-lg-0">
                <span class="fa-stack fa-2x zort-icon fs-sm">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fal fa-chart-line fa-stack-1x fa-inverse"></i>
                </span><span id="contacttext">ยอดขาย รายสินค้า</span>
                </h2>
              </div>
              <div class="">
                <select id="typecontactoption" onchange="drawStockChart();" class="form-text form-select">
                  <option value="0" selected="">รายสินค้า</option>
                  <option value="1">รายหมวดหมู่</option>
                </select>
              </div>
            </div>
            <div class="p-4 pt-2">
              <div id="stockChart" class="chart-wrapper"><center><label>ไม่มีข้อมูล</label></center></div>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-3 mb-lg-5">
        <div class="d-lg-flex flex-row justify-content-between align-items-center p-4 bg-white">
          <div class="">
            <h2 class="font-kanit fs-xmd mt-0 mb-4 mb-lg-0">
              <span class="fa-stack fa-2x zort-icon fs-sm">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fal fa-clipboard-list-check fa-stack-1x fa-inverse"></i>
              </span> รายการ
            </h2>
          </div>
          <div class="">
            <div class="d-inline-block mr-4">
              <span id="transfertext">รายการทั้งหมด</span>
            </div>
            <div class="d-inline-block wf-200">
              <div class="form-text-icon form-text-icon--w-auto d-inline-block">
                <i class="fal fa-search" aria-hidden="true"></i>
                  <label class="sr-only" for="search">ค้นหา</label>
                  <input type="text" class="form-control form-text rounded wf-200" id="quicksearchtext" placeholder="พิมพ์คำค้นหา" maxlength="128" onkeypress="searchKeyPress(event);">
              </div>
            </div>
          </div>
        </div>

        <div>
          <div id="ContactTable" style="height: auto;">
            <div class="">
              <div class="t-responsive">
                <table class="table zort-table">
                  <thead>
                    <tr>
                    <th class="">#</th>
                    <th class="">ประเภท</th>
                    <th class="">รายการ</th>
                    <th class="">วันที่</th>
                    <th class="text-right">มูลค่า</th>
                    <th class="text-center">สถานะ</th>
                    <th class="text-center">การชำระเงิน</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
                <div class="text-center pt-4 pb-4 bg-white">
                ไม่มีข้อมูล
                </div>
              </div>
            </div>
            <div class="d-lg-flex flex-row justify-content-between mb-4 p-4 bg-white">
              <div class="">
                <div class="pager-navigation mb-2 mb-lg-0">
                &nbsp; </div>
              </div>
            </div>

            <div>
              <span class="font-kanit fs-sm fw-300 grey-400">จำนวน 0 รายการ | </span>
              <a href="javascript:openContactDateExport(0);" class="button button-default button-sm" title="Export To Excel"><i class="fal fa-file-excel"></i>Download Excel</a>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript">

</script>