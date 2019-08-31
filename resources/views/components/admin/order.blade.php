<li class="list-group-item">
    <span class="float-right">
        {{ date('j.n. H:i', strtotime($objOrder->created_at)) }}
    </span>

    <a href="{{ route('admin.orders.order', ['id' => $objOrder->id]) }}">
        @if($objOrder->tdo)Shareholder
        @elseif($objOrder->sp)Silent Partnership
        @elseif($objOrder->pr)Pooled Resources
        @endif
    </a> |
    @if($objOrder->tdo)
        {{ $objOrder->tdo->project->name }} |
        Shares: <strong>{{ $objOrder->tdo->shares }}</strong> |
        Investment: <strong>&euro; {{ number_format($objOrder->tdo->investment, 0, '', ' ') }}</strong>
    @elseif($objOrder->sp)
        {{ $objOrder->sp->project->name }}<br>
        Shares: <strong>{{ $objOrder->sp->shares }}</strong> |
        Investment: <strong>&euro; {{ number_format($objOrder->sp->investment, 0, '', ' ') }}</strong>
    @elseif($objOrder->pr)
        <strong>{{ $objOrder->pr->number }}</strong> Promissory note(s), <strong>{{ $objOrder->pr->duration }}</strong> years
    @endif
</li>