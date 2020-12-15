  <style type="text/css">
    .justify-content-center {
    -webkit-box-pack: center!important;
    -ms-flex-pack: center!important;
    justify-content: center!important;
}

.horizontal-steps .horizontal-steps-content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    position: relative;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
}

.horizontal-steps .process-line {
    display: block;
    position: absolute;
    width: 50%;
    height: .2em;
    background-color: #727cf5;
}

.horizontal-steps .horizontal-steps-content .step-item {
    display: block;
    position: relative;
    bottom: calc(100% + 1em);
    height: 8px;
    width: 8px;
    margin: 0 2em;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    color: #727cf5;
    background-color: currentColor;
    border: .25em solid #fafbfe;
    border-radius: 50%;
    z-index: 5;
}

.horizontal-steps .horizontal-steps-content .step-item.current:before {
    content: '';
    display: block;
    position: absolute;
    top: 47.5%;
    left: 51%;
    padding: 1em;
    background-color: currentColor;
    border-radius: 50%;
    opacity: 0;
    z-index: -1;
    -webkit-animation-name: animation-steps-current;
    animation-name: animation-steps-current;
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
}
  </style>    

  <?php

if(!empty($order_detail)): 
   foreach ($order_detail as $row) {
    $order_id = $row->order_id;
    $cus_id = $row->cus_id;
    $sales_channels = $row->sales_channels;
    $link_img = $row->link_img;
    $status_order = $row->status_order;
    $transport = $row->transport;
    $payment_chanels = $row->payment_chanels;
    $total_price = $row->total_price;
    $status_payment = $row->status_payment;
    $balance = $row->balance;
    $employee_id = $row->employee_id;
    $money_transfer_slip = $row->money_transfer_slip;
    $date_pay = $row->date_pay;
    $date_order = $row->date_order;

    }
endif;

if(!empty($order_detail_iteam)): 
   foreach ($order_detail_iteam as $row) {
    $iteam_order_id = $row->order_id;
    $productID = $row->productID;
    $orderNumber = $row->orderNumber;
    $price = $row->price;
    $quantity = $row->quantity;
    $discount = $row->discount;
    $total = $row->total;
    $size = $row->size;
    $color = $row->color;
    $location = $row->location;
    $shipdate = $row->shipdate;
    $orderDetailID = $row->orderDetailID;
    $billdate = $row->billdate;


    }
endif;




?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">รายละเอียดคำสั่งซื้อ</h1>


           <!--  <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10 col-sm-11">
        
                                <div class="horizontal-steps mt-4 mb-4 pb-5">
                                    <div class="horizontal-steps-content">
                                        <div class="step-item">
                                            <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="20/08/2018 07:24 PM">Order Placed</span>
                                        </div>
                                        <div class="step-item current">
                                            <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="21/08/2018 11:32 AM">Packed</span>
                                        </div>
                                        <div class="step-item">
                                            <span>Shipped</span>
                                        </div>
                                        <div class="step-item">
                                            <span>Delivered</span>
                                        </div>
                                    </div>
        
                                    <div class="process-line" style="width: 33%;"></div>
                                </div>
                            </div>
                        </div> -->


           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">


                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="header-title mb-3">Items from Order : <?php echo $order_id;?></h4>
            
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>The Military Duffle Bag</td>
                                            <td>3</td>
                                            <td>$128</td>
                                            <td>$384</td>
                                                </tr>
                                                <tr>
                                                    <td>Mountain Basket Ball</td>
                                                    <td>1</td>
                                                    <td>$199</td>
                                                    <td>$199</td>
                                                </tr>
                                                <tr>
                                                    <td>Wavex Canvas Messenger Bag</td>
                                                    <td>5</td>
                                                    <td>$180</td>
                                                    <td>$900</td>
                                                </tr>
                                                <tr>
                                                    <td>The Utility Shirt</td>
                                                    <td>2</td>
                                                    <td>$79</td>
                                                    <td>$158</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
            
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Order Summary</h4>
            
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Grand Total :</td>
                                                    <td>$1641</td>
                                                </tr>
                                                <tr>
                                                    <td>Shipping Charge :</td>
                                                    <td>$23</td>
                                                </tr>
                                                <tr>
                                                    <td>Estimated Tax : </td>
                                                    <td>$19.22</td>
                                                </tr>
                                                <tr>
                                                    <th>Total :</th>
                                                    <th>$1683.22</th>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
            
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div><br>
                        <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Shipping Information</h4>

                                        <h5>Stanley Jones</h5>
                                        
                                        <address class="mb-0 font-14 address-lg">
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890 <br>
                                            <abbr title="Mobile">M:</abbr> (+01) 12345 67890
                                        </address>
            
                                    </div>
                                </div>
                            </div><br> <!-- end col -->
        
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Billing Information</h4>

                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <p class="mb-2"><span class="font-weight-bold mr-2">Payment Type:</span> Credit Card</p>
                                                <p class="mb-2"><span class="font-weight-bold mr-2">Provider:</span> Visa ending in 2851</p>
                                                <p class="mb-2"><span class="font-weight-bold mr-2">Valid Date:</span> 02/2020</p>
                                                <p class="mb-0"><span class="font-weight-bold mr-2">CVV:</span> xxx</p>
                                            </li>
                                        </ul>
            
                                    </div>
                                </div>
                            </div><br> <!-- end col -->
        
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Delivery Info</h4>
            
                                        <div class="text-center">
                                            <i class="mdi mdi-truck-fast h2 text-muted"></i>
                                            <h5><b>UPS Delivery</b></h5>
                                            <p class="mb-1"><b>Order ID :</b> xxxx235</p>
                                            <p class="mb-0"><b>Payment Mode :</b> COD</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <br><!-- end col -->
                        </div>
                        <!-- end row -->



            </div>
          </div>

        </div>
        <!-- /.container-fluid -->



