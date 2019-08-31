<li class="list-group-item">
    <p class="float-right xs-mb-0">
        @if($objOrder->pr)
            Next payment: <strong>{{ date('j.n.Y', strtotime($objOrder->pr->nextPayment()['date'])) }} &euro; {{ $objOrder->pr->nextPayment()['amount'] }}</strong> |
        @endif

        Ordered: {{ date('j.n. H:i', strtotime($objOrder->created_at)) }}
    </p>

    <strong><a href="{{ route('admin.users.user', ['id' => $objOrder->user->id]) }}">{{ $objOrder->user->name }} {{ $objOrder->user->surname }}</a></strong>
    | <a href="{{ route('admin.orders.order', ['id' => $objOrder->id]) }}">
        @if($objOrder->tdo)SH
        @elseif($objOrder->sp)SP
        @elseif($objOrder->pr)PR
        @endif
    </a> |
    @if($objOrder->tdo)
        {{ $objOrder->tdo->project->name }} |
        Shares: <strong>{{ $objOrder->tdo->shares }}</strong> |
        Investment: <strong>&euro; {{ number_format($objOrder->tdo->investment, 0, '', ' ') }}</strong>
    @elseif($objOrder->sp)
        {{ $objOrder->sp->project->name }} |
        Shares: <strong>{{ number_format( $objOrder->sp->shares, 2, ',', ' ') }}</strong> |
        Investment: <strong>&euro; {{ number_format($objOrder->sp->investment, 0, '', ' ') }}</strong>
    @elseif($objOrder->pr)
        <strong>{{ $objOrder->pr->number }}</strong> note(s) | {{ $objOrder->pr->duration }} year(s)
    @endif
</li>