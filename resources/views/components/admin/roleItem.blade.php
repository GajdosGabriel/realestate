<li class="list-group-item" style="border-left: 6px solid {{ $objRole->bg_color }};padding-left: 14px">
    <a href="{{ route('admin.users.byRole', ['name' => $objRole->name]) }}">{{ $objRole->name }}</a> {{ $objRole->description }}

    <div class="float-right">
        <a href="{{ route('admin.roles.edit', ['id' => $objRole->id]) }}" class="xs-mr-10"><i class="fas fa-edit"></i></a>

        <button class="btn btn-secondary btn-xs" data-toggle="modal" data-target="#role{{ $objRole->id }}Modal">URLs</button>
    </div>
</li>