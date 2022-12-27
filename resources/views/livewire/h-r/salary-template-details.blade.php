<div>
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card" style="padding-bottom: 20px;">

                        <div class="iq-card-body printableArea">

                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <img src="{{ asset('asset/logo.jpg')}}" class="img-fluid" style="width: 150px;" alt="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <h3 class="mb-0 float-right"><b>Salary Template</b></h3>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Salary Grade</th>
                                                    <th scope="col">Basic Salary</th>
                                                    <th scope="col">Percentage Tax</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{$temp->name}}</td>
                                                    <td><span class="text-primary"><b>₦</b>{{number_format($temp->amount,2)}}</span></td>
                                                    <td>{{$temp->tax}}%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr class="text-info"/>
                            <div class="row">
                                <div class="mt-60"></div>
                                <div class="col-md-6 col-sm-6">
                                    <h5><b>Allowance(s)</b></h5>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">#</th>
                                                    <th scope="col">Title</th>
                                                    <th class="text-center" scope="col">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allows as $key => $a)
                                                    <tr>
                                                        <th class="text-center" scope="row">{{ $key + 1 }}</th>
                                                        <td class="">{{ $a->name }}</td>
                                                        <td class="text-center badge-cyan text-dark"><span><b>₦</b>{{number_format($a->value,2)}}</span></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <h5><b>Deduction(s)</b></h5>
                                    <div class="table">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">#</th>
                                                    <th scope="col">Title</th>
                                                    <th class="text-center" scope="col">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($deducts as $key => $d)
                                                    <tr>
                                                        <th class="text-center" scope="row">{{ $key + 1 }}</th>
                                                        <td class="">{{ $d->name }}</td>
                                                        <td class="text-center badge-cyan text-dark"><span><b>₦</b>{{number_format($d->value,2)}}</span></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <hr class="text-info">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <div class="col-lg-4 col-md-5 col-sm-7">
                                        <div class="poemBody">
                                            <div class="align_well">
                                                <h5><b>Basic Salary:</b></h5>
                                                <p style="font-size: 16px;"><b>₦</b>{{number_format($temp->amount,2)}}</p>
                                            </div>
                                            <div class="align_well">
                                                <h5><b>Total Allowance:</b></h5>
                                                <p style="font-size: 16px;"><b>₦</b>{{number_format($allowance,2)}}</p>
                                            </div>
                                            <hr class="text-info">
                                            <div class="align_well">
                                                <h5><b>Gross Salary:</b></h5>
                                                <p style="font-size: 16px;"><b>₦</b>{{number_format(($temp->amount + $allowance),2)}}</p>
                                            </div>
                                            <hr class="text-info">
                                            <div class="align_well">
                                                <h5><b>Tax:</b></h5>
                                                <p style="font-size: 16px;"><b>₦</b>{{number_format((($temp->tax/100) * ($temp->amount)),2)}}</p>
                                            </div>
                                            <div class="align_well">
                                                <h5><b> Deduction:</b></h5>
                                                <p style="font-size: 16px;"><b>₦</b>{{number_format($deduction,2)}}</p>
                                            </div>
                                            <div class="align_well">
                                                <h5><b>Total Deduction:</b></h5>
                                                <p style="font-size: 16px;"><b>₦</b>{{number_format(((($temp->tax/100) * ($temp->amount)) + $deduction ),2)}}</p>
                                            </div>
                                            <hr class="text-info">
                                            <div class="align_well">
                                                <h5><b>Net Salary:</b></h5>
                                                <p style="font-size: 16px;"><b>₦</b>{{number_format((($temp->amount + $allowance) - ((($temp->tax/100) * ($temp->amount)) + $deduction )),2)}}</p>
                                            </div>
                                            <hr class="text-info">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6"></div>
                                {{-- <div class="col-sm-12 mt-5">
                                    <b class="text-danger">Notes:</b>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                </div> --}}
                            </div>

                        </div>
                        <div class="col-sm-12 text-right">
                            <button type="button" id="print" class="btn btn-primary btn-link mr-3 text-white"><i class="ri-printer-line text-white"></i>Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {
            $("#print").click(function() {
                var mode = 'iframe'; //popup
                var close = mode == "popup";
                var options = {
                    mode: mode,
                    popClose: close
                };
                $("div.printableArea").printArea(options);
            });
        });
    </script>
@endpush
