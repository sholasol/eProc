<div class="receipt">
    No. of Booking: {{ count($scheds) }}
    @if (count($scheds) > 0)
        <dl class="receipt__list hideSc">
            {{-- <h6 class="font-weight-bolder">Total: {{ count($scheds) }}</h6> --}}
            @foreach ($scheds as $sch)
            <div class="receipt__list-row">
                <dt class="receipt__item">{{ $sch->destination }}</dt>
                <dd class="receipt__cost">{{ \Carbon\Carbon::parse($sch->req_time)->format('H:i A') }}</dd>
            </div>
            @endforeach
        </dl>
    @else
        <div class="rec___alt mb-4" style="gap:5px;height:140px;">
            <i class="fa fa-clipboard"></i>
            <span class="text-muted">No shedule for today</span>
        </div>
    @endif
</div>
