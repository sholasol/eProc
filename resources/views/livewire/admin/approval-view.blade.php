<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">

                    <div class="iq-card-body">

                        <div class="row">
                            <div class="col-lg-6">
                                <img src="images/logo.gif" class="img-fluid w-25" alt="">
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <h4 class="mb-0 float-right">
                                        <a type="button" class="btn btn-danger text-white" onclick="confirm('Are you sure, you want to approve this request?') ||event.stopImmediatePropagation()" wire:click.prevent="approvalProcess({{ 1 }})">
                                            <i class="ri-check-line"></i>
                                            Approve Request
                                        </a>
                                </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h5>Request Summary</h5>
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
                                                <th class="text-center" scope="row">5</th>
                                                <td>
                                                    <h6 class="mb-0">HP Computer</h6>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">$120.00</td>
                                                <td class="text-center"><b>$2,880.00</b></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">2</th>
                                                <td>
                                                    <h6 class="mb-0">LaserJet Printer</h6>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">$1000.00</td>
                                                <td class="text-center"><b>$2,000.00</b></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">3</th>
                                                <td>
                                                    <h6 class="mb-0">Projector</h6>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">$250.00</td>
                                                <td class="text-center"><b>$250.00</b></td>
                                            </tr>
                                            <tr>
                                                <th class="text-center" scope="row">4</th>
                                                <td>
                                                    <h6 class="mb-0">Wireless Adapter</h6>
                                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">$120.00</td>
                                                <td class="text-center"><b>$240.00</b></td>
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
                                                <th scope="row">Threadneedle St</th>
                                                <td>12333456789</td>
                                                <td>12 November 2019</td>
                                                <td>$4597.50</td>
                                                <td>10%</td>
                                                <td><b>$4137.75 USD</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6 text-right">
                                <button type="button" class="btn btn-primary"><i class="ri-printer-line"></i> Print</button>
                            </div>
                            <div class="col-sm-12 mt-5">
                                <b class="text-danger">Notes:</b>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                        </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
