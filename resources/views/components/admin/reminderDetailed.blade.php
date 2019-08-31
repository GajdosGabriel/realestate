<li class="list-group-item">
    <a href="{{ route('admin.reminders.delete', ['id' => $objReminder->id]) }}" class="float-right btn-delete"><i class="fa fa-trash text-danger"></i></a>

    <a href="{{ route('admin.reminders.edit', ['id' => $objReminder->id]) }}" class="float-right xs-mr-10"><i class="far fa-edit"></i></a>

    <p class="xs-mb-5"><strong>{{ date('j.n. H:i', strtotime($objReminder->datetime)) }}</strong> | User: <a href="{{ route('admin.users.user', ['id' => $objReminder->user->id]) }}">{{ $objReminder->user->name }} {{ $objReminder->user->surname }}</a> |
        Agent: <a href="{{ route('admin.users.user', ['id' => $objReminder->agent->id]) }}">{{ $objReminder->agent->name }} {{ $objReminder->agent->surname }}</a></p>

    <p class="xs-mb-0">{{ $objReminder->text }}</p>

    <div class="text-right">
        <a href="{{ route('admin.reminders.done', ['id' => $objReminder->id]) }}" class="btn btn-success btn-xs done"><i class="far fa-check-circle"></i> Done</a>
    </div>
</li>