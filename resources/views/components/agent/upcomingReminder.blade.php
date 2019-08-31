<li class="list-group-item">
    <a href="{{ route('agent.reminders.edit', ['id' => $objReminder->id]) }}" class="float-right"><i class="fas fa-edit"></i></a>

    <p class="xs-mb-5"><strong>{{ date('j.n. H:i', strtotime($objReminder->datetime)) }}</strong> for <a href="{{ route('agent.users.user', ['id' => $objReminder->user->id]) }}">{{ $objReminder->user->name }} {{ $objReminder->user->surname }}</a></p>

    <p class="xs-mb-0">{{ $objReminder->text }}</p>

    <div class="text-right">
        <a href="{{ route('agent.reminders.done', ['id' => $objReminder->id]) }}" class="btn btn-success btn-xs done"><i class="far fa-check-circle"></i> Done</a>
    </div>
</li>