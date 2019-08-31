<li class="list-group-item">
    <a href="{{ route('agent.reminders.edit', ['id' => $objReminder->id]) }}" class="float-right"><i class="far fa-edit"></i></a>

    <p class="xs-mb-5"><strong>{{ date('j.n. H:i', strtotime($objReminder->datetime)) }}</strong> for {{ $objReminder->agent->name }} {{ $objReminder->agent->surname }}</p>

    <p class="xs-mb-0">{{ $objReminder->text }}</p>

    <div class="text-right">
        @if($objReminder->done == 1)
            <i class="far fa-check-circle"></i> Done
        @else
            <a href="{{ route('agent.reminders.done', ['id' => $objReminder->id]) }}" class="btn btn-success btn-xs done"><i class="far fa-check-circle"></i> Done</a>
        @endif
    </div>
</li>