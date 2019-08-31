<li class="list-group-item {{ $objUser->statusClass }}">
    <a href="{{ route('agent.users.user', ['id' => $objUser->id]) }}" class="font-weight-bold">{{ $objUser->name }} {{ $objUser->surname }}</a>
    | {{ $objUser->country }}
</li>