<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">

                    <div class="iq-card-body" id="print">

                        <div class="row">
                            <div class="col-lg-6">
                                {{-- <img src="{{ asset('images/logo.gif')}}" class="img-fluid w-25" alt=""> --}}
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <h4 class="mb-0 float-right">Invoice</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive-sm">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order Date</th>
                                                <th scope="col">Item</th>
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Billing Address</th>
                                                <th scope="col">Vendor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Oct 17, 2021</td>
                                                <td><span class="badge badge-danger">Unpaid</span></td>
                                                <td>250028</td>
                                                <td>
                                                    <p class="mb-0">Old Mutual 74 Allen Ave, <br>Allen 101233, Ikeja<br>
                                                        Phone: +190 456 7890<br>
                                                        Email: info@oldmutual.com<br>
                                                        Web: www.oldmutual.com
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="mb-0">IT Vendor, 10 Collins Street West<br>Victoria Island<br>
                                                        Phone: +234 900 7890 900<br>
                                                        Email: info@itvendor.com<br>
                                                        Web: www.itvendor.com
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 
                        <div class="row"> 
                            <div class="col-sm-12">
                                <h5>Order Summary</h5>
                                <div class="table-responsive-sm">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col">#</th>
                                                <th scope="col">Item</th>
                                                <th class="text-center" scope="col">Quantity</th>
                                                <th class="text-center" scope="col">Price</th>
                                                <th class="text-center" scope="col">Totals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-center" scope="row">1</th>
                                                <td>
                                                    <h6 class="mb-0">Projector Screen</h6>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">₦120.00</td>
                                                <td class="text-center"><b>₦2,880.00</b></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">2</th>
                                                <td>
                                                    <h6 class="mb-0">Wireless Connector Dongle</h6>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">₦120.00</td>
                                                <td class="text-center"><b>₦2,880.00</b></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">3</th>
                                                <td>
                                                    <h6 class="mb-0">Wireless Presentation Pointer</h6>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">₦120.00</td>
                                                <td class="text-center"><b>₦2,880.00</b></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">4</th>
                                                <td>
                                                    <h6 class="mb-0">Desktop Computer</h6>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">₦120.00</td>
                                                <td class="text-center"><b>₦2,880.00</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h5 class="mt-5">Order Details</h5>
                                <div class="table-responsive-sm">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Bank</th>
                                                <th scope="col">.Acc.No</th>
                                                <th scope="col">Due Date</th>
                                                <th scope="col">Sub-total</th>
                                                <th scope="col">Discount</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">IT Vendor LTD</th>
                                                <td>12333456789</td>
                                                <td>Zenith Bank</td>
                                                <td>₦4597.50</td>
                                                <td>10%</td>
                                                <td><b>₦4137.75 USD</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 mt-5">
                                <b class="text-danger">Notes:</b>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                        </div>

                        </div>
                    </div>
                    <div  class="iq-card-body row" >
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6 text-right">
                            <button class="btn btn-primary" onclick="printContent('print')"><i class="ri-printer-line"></i> Print</button>
                        </div><br><br>
                    </div>
            </div>
        </div>
    </div>
</div>