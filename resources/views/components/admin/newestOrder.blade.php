<li class="list-group-item">
    <span class="float-right">
        {{ date('j.n. H:i', strtotime($objOrder->created_at)) }}
    </span>

    <strong><a href="{{ route('admin.users.user', ['id' => $objOrder->user->id]) }}">{{ $objOrder->user->name }} {{ $objOrder->user->surname }}</a></strong>
    | <a href="{{ route('admin.orders.order', ['id' => $objOrder->id]) }}">
        @if($objOrder->tdo)SH
        @elseif($objOrder->sp)SP
        @elseif($objOrder->pr)PR
        @endif
    </a> |
    @if($objOrder->tdo)
        {{ $objOrder->tdo->project->name }} |
        Shares: {{ $objOrder->tdo->shares }}
    @elseif($objOrder->sp)
        {{ $objOrder->sp->project->name }} |
        Shares: {{ number_format( $objOrder->sp->shares, 2, ',', ' ')  }}
    @elseif($objOrder->pr)
        <strong>{{ $objOrder->pr->number }}</strong> note(s) | {{ $objOrder->pr->duration }} year(s)
    @endif
</li>