<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Payroll History</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div id="table" class="table-editable">
                            <div class="iq-card">
                                <div class="iq-card-body">
                                    <form wire:submit.prevent="generateHistory">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-5">
                                                <select wire:model="month" class="form-control"
                                                    id="exampleFormControlSelect1">
                                                    <option selected="" value="">-- Select Month --</option>
                                                    <option value="1">January</option>
                                                    <option value="2">february</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                                @error('month') <p style="color: crimson">{{ $message }}</p> @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <select wire:model="year" class="form-control">
                                                    <option value=""> -- Select Year -- </option>
                                                    @foreach ($years as $year)
                                                        <option value="{{ $year->year }}">{{ $year->year }}</option>
                                                    @endforeach
                                                </select>
                                                @error('year') <p style="color: crimson">{{ $message }}</p> @enderror
                                            </div>

                                            <div class="form-group col-md-3">
                                                <div wire:loading class="preloading">
                                                    <div>
                                                        <img wire:loading class="hideImg"
                                                            src="{{ asset('asset/prldr.gif') }}" alt="Preloader Image">
                                                    </div>
                                                </div>
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary float-right mr-2 w-100">Generate Schedule</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Employee Payroll: Month: {{ $this->mv }}, Year: {{ $this->yv }}</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table">
                        <table id="payrollTable" data-month="{{ $this->mv }}" data-year="{{ $this->yv }}" class="table table-striped table-bordered mt-4 table-responsive" role="grid"
                            aria-describedby="user-list-page-info">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Basic</th>
                                    <th>Allowance(s)</th>
                                    <th>Gross</th>
                                    <th>Deduction(s)</th>
                                    <th>Tax</th>
                                    <th>Tot.&nbsp;Deduction</th>
                                    <th>Net&nbsp;Salary</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tables as $key => $table )
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td class="">
                                        <img class="rounded-circle img-fluid avatar-40" src="
                                            <?php if(!empty($table->profile_photo_path) && file_exists('asset/image/users/'.$table->profile_photo_path)){
                                                    echo asset('asset/image/users').'/'.$table->profile_photo_path;
                                                } else{ echo asset('asset/image/users/dummy.png');} ?>"
                                            alt="profile">
                                    </td>
                                    <td>{{ $table->fname}}&nbsp;{{$table->lname }}</td>
                                    <td>{{ $table->dept_name }}</td>
                                    <td><b>₦</b>{{ number_format($table->basic,2) }}</td>
                                    <td><b>₦</b>{{ number_format($table->total_allowance,2) }}</td>
                                    <td><b>₦</b>{{ number_format($table->gross,2) }}</td>
                                    <td class="text-danger"><b>₦</b>{{ number_format($table->total_deduction,2) }}</td>
                                    <td class="text-danger"><b>₦</b>{{ number_format($table->tax_value,2) }}</td>
                                    <td class="text-danger"><b>₦</b>{{ number_format($table->grand_deduction,2) }}</td>
                                    <td class="text-success"><b>₦</b>{{ number_format($table->net_salary,2) }}</td>
                                    <td>
                                        <div class="flex align-items-center list-user-action flex-nowrap">
                                            <a class="bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="View Profile"
                                                href="{{ route('system.system-userprofile', ['uid'=>$table->id]) }}">
                                                <i class="ri-eye-fill text-white"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function () {
            let dYear = $("#payrollTable").attr("data-year");
            let dMonth = $("#payrollTable").attr("data-month");
            $('#payrollTable').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'excel',
                    text: 'Excel',
                    className: 'exportExcel',
                    filename: dMonth + '_' + dYear + '_Excel',
                    exportOptions: { modifier: { page: 'all'} }
                },
                {
                    extend: 'csv',
                    text: 'CSV',
                    className: 'exportExcel',
                    filename: dMonth + '_' + dYear + '_Csv',
                    exportOptions: { modifier: { page: 'all'} }
                },
                {
                    extend: 'pdf',
                    text: 'PDF',
                    className: 'exportExcel',
                    filename: dMonth + '_' + dYear + '_Pdf',
                    exportOptions: { modifier: { page: 'all'} }
                }]
            });
        })
    </script>
@endpush
