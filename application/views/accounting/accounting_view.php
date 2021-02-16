<?php

  $date = date('d-m-Y');

  $month_year = date('m-Y');
// $data['today_sales_data']
if(!empty($today_sales_data)): 
   foreach ($today_sales_data as $row) {
    $today_sales = $row->today_sales;
    }
endif;


if(!empty($monthly_sales_data)): 
   foreach ($monthly_sales_data as $row) {
    $monthly_sales = $row->monthly_sales;
    }
endif;


if(!empty($year_sales_data)): 
   foreach ($year_sales_data as $row) {
    $year_sales = $row->year_sales;
    }
endif;

//for chart
$datesave = array();
$totol = array();

 // $year_sales = $row->year_sales;
      // $datesave[] = "\"".$rs->datesave."\""; 
      // $totol[] = "\"".$rs->totol."\"";


if(!empty($resultchart)): 
   foreach ($resultchart as $row) {
   
      $month_1 = $row->a1;
      $month_2 = $row->a2;
      $month_3 = $row->a3;
      $month_4 = $row->a4;
      $month_5 = $row->a5;
      $month_6 = $row->a6;
      $month_7 = $row->a7;
      $month_8 = $row->a8;
      $month_9 = $row->a9;
      $month_10 = $row->a10;
      $month_11 = $row->a11;
      $month_12 = $row->a12;
    }
endif;


// while($rs = mysqli_fetch_array($resultchart)){ 
//   $datesave[] = "\"".$rs['datesave']."\""; 
//   $totol[] = "\"".$rs['totol']."\""; 
// }
// $datesave = implode(",", $datesave); 
// $totol = implode(",", $totol); 





// print_r($month_1);
    
    


?>


<!--Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ระบบบัญชี</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-gl font-weight-bold text-primary text-uppercase mb-1">
                        <!-- <?= $this->lang->line('today_sales'); echo ' '.$date;?>  -->
                        เปิดใบเสนอราคา
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> 


                        <button class="btn btn-primary btn-lg ">ดูรายการทั้งหมด</button>
                        <!-- <?php if ($today_sales == 0) {
                                  echo '0';
                              }else{
                                echo $today_sales;
                              }?> บาท  -->


                      </div>

                              <!--  $40,000 บาท -->
                     <!--  <div class="small font-weight-bold text-gray-800">ใบเสร็จปกติ : 5 รายการ</div>
                      <div class="small font-weight-bold text-gray-800">ยกเลิกใบเสร็จ : 0 รายการ</div> -->

                    </div>
                   <!--  <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-gl font-weight-bold text-success text-uppercase mb-1">
                        <!-- ยอดขายเดือนนี้ (<?php echo $month_year;?>) -->
                        เปิดใบวางบิล/ใบแจ้งหนี้
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> 
                        <!-- <?php echo $monthly_sales;?> บาท  -->
                        <button class="btn btn-primary btn-lg ">ดูรายการทั้งหมด</button>

                      </div>
                      <!-- <div class="small font-weight-bold text-gray-800">ขายหน้าร้าน : 215,000 บาท</div>
                      <div class="small font-weight-bold text-gray-800">ขายออนไลน์ : 215,000 บาท</div> -->
                      <!-- <div class="h10 mb-0 font-weight-bold text-gray-800">ขายออนไลน์ : 215,000 บาท</div> -->
                    </div>
                   <!--  <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-gl font-weight-bold text-info text-uppercase mb-1">
                      <!-- ยอดขายรวมทั้งปี -->เปิดใบกำกับภาษี/ใบเสร็จรับเงิน
                      </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 font-weight-bold text-gray-800"> 

                            <!-- <?php echo $year_sales;?> บาท  -->
                            <button class="btn btn-primary btn-lg ">ดูรายการทั้งหมด</button>

                          </div>
                          <!-- <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div> -->
                         <!--  <div class="small font-weight-bold text-gray-800">เงินสด : 55,000 บาท</div>
                          <div class="small font-weight-bold text-gray-800">โอนผ่านธนาคาร : 10,500 บาท</div> -->
                        </div>
                       <!--  <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div> -->
                      </div>
                    </div>
                  <!--   <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-gl font-weight-bold text-warning text-uppercase mb-1">
                      <!-- หมวดหมู่ขายดีปีนี้ --> <center><i class="fas fa-box"></i> เปิดใบสั่งซื้อ</center>
                      </div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <!-- 18 -->
                        <button class="btn btn-primary btn-lg ">ดูรายการทั้งหมด</button>
                      </div>
                    </div>
                   <!--  <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-gl font-weight-bold text-primary text-uppercase mb-1">
                        <!-- <?= $this->lang->line('today_sales'); echo ' '.$date;?>  -->
                        <center><i class="fas fa-box"></i> เพิ่มค่าใช้จ่าย</center>
                      </div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> 
                        <!-- <a class="nav-link" href="<?php echo base_url();?>cost"> -->
                        <!-- <button class="btn btn-primary btn-lg"> ดูรายการทั้งหมด</button> -->

                        <a href="<?php echo base_url();?>cost" class="btn btn-primary btn-lg " role="button" aria-pressed="true"><i class="fas fa-box"></i> ดูรายการทั้งหมด</a>

                        <!-- <?php if ($today_sales == 0) {
                                  echo '0';
                              }else{
                                echo $today_sales;
                              }?> บาท  -->
                              
                      </div>

                              <!--  $40,000 บาท -->
                     <!--  <div class="small font-weight-bold text-gray-800">ใบเสร็จปกติ : 5 รายการ</div>
                      <div class="small font-weight-bold text-gray-800">ยกเลิกใบเสร็จ : 0 รายการ</div> -->

                    </div>
                   <!--  <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>

           
             <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-gl font-weight-bold text-primary text-uppercase mb-1">
                        <!-- <?= $this->lang->line('today_sales'); echo ' '.$date;?>  -->
                        เปิดใบหัก ณ ที่จ่าย
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> 
                        <!-- <?php if ($today_sales == 0) {
                                  echo '0';
                              }else{
                                echo $today_sales;
                              }?> บาท -->  
                              <button class="btn btn-primary btn-lg ">ดูรายการทั้งหมด</button>
                      </div>

                              <!--  $40,000 บาท -->
                     <!--  <div class="small font-weight-bold text-gray-800">ใบเสร็จปกติ : 5 รายการ</div>
                      <div class="small font-weight-bold text-gray-800">ยกเลิกใบเสร็จ : 0 รายการ</div> -->

                    </div>
                   <!--  <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>

            

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">หมวดหมู่ขายดีปีนี้</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <!-- <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">หมวดหมู่ขายดีปีนี้</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <!-- <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>




          </div>

          

        </div>
        <!-- /.container-fluid-->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
<script type="text/javascript">
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    
        ],
        datasets: [{
            label: 'รายงานยอดขาย แยกตามเดือน (บาท)',
            data: [<?php echo $month_1 ;?>,<?php echo $month_2 ;?>,<?php echo $month_3 ;?>,<?php echo $month_4 ;?>,<?php echo $month_5 ;?>,<?php echo $month_6 ;?>,<?php echo $month_7 ;?>,<?php echo $month_8 ;?>,<?php echo $month_9 ;?>,<?php echo $month_10 ;?>,<?php echo $month_11 ;?>,<?php echo $month_12;?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(151, 226, 90, 0.2)',
                'rgba(49, 6, 239, 0.2)',
                'rgba(6, 239, 204, 0.2)',
                'rgba(239, 196, 6, 0.2)',
                'rgba(255, 49, 31, 0.2)',
                'rgba(255, 31, 180, 0.2)'

            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(151, 226, 90, 1)',
                'rgba(49, 6, 239, 1)',
                'rgba(6, 239, 204, 1)',
                'rgba(239, 196, 6, 1)',
                'rgba(255, 49, 31, 1)',
                'rgba(255, 31, 180, 1)'

            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

    var randomScalingFactor = function() {
      return Math.round(Math.random() * 100);
    };

    var config = {
      type: 'pie',
      data: {
        datasets: [{
          data: [
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
          ],
          backgroundColor: [
            'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(151, 226, 90, 1)',
                'rgba(49, 6, 239, 1)',
                'rgba(6, 239, 204, 1)',
                'rgba(239, 196, 6, 1)',
                'rgba(255, 49, 31, 1)',
                'rgba(255, 31, 180, 1)'
          ],
          label: 'Dataset 1'
        }],
        labels: [
          'Red',
          'Orange',
          'Yellow',
          'Green',
          'Blue'
        ]
      },
      options: {
        responsive: true
      }
    };

    window.onload = function() {
      var ctx = document.getElementById('chart-area').getContext('2d');
      window.myPie = new Chart(ctx, config);
    };

    // document.getElementById('randomizeData').addEventListener('click', function() {
    //   config.data.datasets.forEach(function(dataset) {
    //     dataset.data = dataset.data.map(function() {
    //       return randomScalingFactor();
    //     });
    //   });

    //   window.myPie.update();
    // });

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
      var newDataset = {
        backgroundColor: [],
        data: [],
        label: 'New dataset ' + config.data.datasets.length,
      };

      for (var index = 0; index < config.data.labels.length; ++index) {
        newDataset.data.push(randomScalingFactor());

        var colorName = colorNames[index % colorNames.length];
        var newColor = window.chartColors[colorName];
        newDataset.backgroundColor.push(newColor);
      }

      config.data.datasets.push(newDataset);
      window.myPie.update();
    });

    document.getElementById('removeDataset').addEventListener('click', function() {
      config.data.datasets.splice(0, 1);
      window.myPie.update();
    });



</script>  
