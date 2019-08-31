<li class="list-group-item {{ $objUser->statusClass }}">
    <a href="{{ route('marketing.users.user', ['id' => $objUser->id]) }}" class="font-weight-bold">{{ $objUser->id }}</a>
    | {{ $objUser->country }}
</li>