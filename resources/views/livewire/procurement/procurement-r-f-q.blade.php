<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form action="" wire:submit.prevent="sendRequest" method="post">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Build Request For Quote</h4>
                            </div>
                        </div>
                        <div class="iq-card-body" wire:ignore>
                            <div class="table">
                                <div class="row justify-content-between">
                                    <div class="col-sm-12 col-md-6">
                                        <div id="user_list_datatable_info" class="dataTables_filter">
                                            <div class="form-group mb-0">
                                                <label for="">Select Vendor(s)</label>
                                                <select multiple="multiple" wire:model="select"
                                                    class="select2vendors form-control">
                                                    @foreach ($vendors as $vend)
                                                    <option value="{{ $vend->id }}">{{ $vend->fname. ' ' .$vend->lname }}</option>
                                                    @endforeach
                                                </select>
                                                @error('select') <p style="color: crimson;">{{ $message }}</p> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="user-list-files d-flex float-right">
                                            <a class="iq-bg-primary" href="javascript:void();">
                                                Print
                                            </a>
                                            <a class="iq-bg-primary" href="javascript:void();">
                                                Excel
                                            </a>
                                            <a class="iq-bg-primary" href="javascript:void();">
                                                Pdf
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @if ($requests->count() > 0)
                                <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid"
                                    aria-describedby="user-list-page-info">
                                    <thead>
                                        <tr>
                                            <th width="5%">
                                                <input type="checkbox" id="checkAllInputs">
                                            </th>
                                            <th>ReqNo</th>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Department</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($requests as $key => $req)
                                        <tr>
                                            <td width="5%">
                                                <input type="checkbox" class="checkInput" value="{{ $req->id }}" wire:model.defer="lists"
                                                    id="lists{{ $key + 1 }}">
                                            </td>
                                            <td>{{ $req->reqNo }}</td>
                                            <td>{{ $req->item }}</td>
                                            <td>{{ $req->quantity }}</td>
                                            <td>{{ $req->department }}</td>
                                            <td>{{ $req->created_at->format('Y-m-d') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <div class="d-flex justify-content-center align-items-center">
                                    <img width="550px" src="{{ asset('asset/no-record.png') }}">
                                </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="send-btn pl-3">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script>
    $("#checkAllInputs").on("click", function () {
        if (this.checked==true) {
            $(".checkInput").prop("checked", true)
        }else{
            $(".checkInput").prop("checked", false)
        }
    })
</script>
@endsection
