<li class="list-group-item">
    @if($objOrder->tdo)

    @elseif($objOrder->reb)

    @elseif($objOrder->pr)
        <span class="float-right">
            {{ date('j.n.Y H:i', strtotime($objOrder->created_at)) }}
        </span>

        <a href="" class="font-weight-bold">Pooled resources</a> :: {{ $objOrder->pr->number }} promissory notes, {{ $objOrder->pr->duration }} years
    @endif
</li>