<li class="list-group-item">
    <span class="float-right">
        <a href="{{ route('admin.reminders.edit', ['id' => $objReminder->id]) }}"><i class="far fa-edit"></i></a>

        <a href="{{ route('admin.reminders.delete', ['id' => $objReminder->id]) }}" class="xs-ml-10 text-danger btn-delete"><i class="fa fa-trash"></i></a>
    </span>

    <p class="xs-mb-5"><strong>{{ date('j.n. H:i', strtotime($objReminder->datetime)) }}</strong> for {{ $objReminder->agent->name }} {{ $objReminder->agent->surname }}</p>

    <p class="xs-mb-0">{{ $objReminder->text }}</p>

    <div class="text-right">
        @if($objReminder->done == 1)
            <i class="far fa-check-circle"></i> Done
        @else
            <a href="{{ route('admin.reminders.done', ['id' => $objReminder->id]) }}" class="btn btn-success btn-xs done"><i class="far fa-check-circle"></i> Done</a>
        @endif
    </div>
</li>