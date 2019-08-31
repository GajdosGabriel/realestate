<li class="list-group-item {{ $objUser->statusClass }}">
    <a href="{{ route('marketing.users.user', ['id' => $objUser->id]) }}" class="font-weight-bold">{{ $objUser->id }}</a>
    | {{ $objUser->country }}

    <span class="float-right">
        @foreach($objUser->roles as $objRole)
            @component('components/admin/roleBadge', ['objRole' => $objRole])@endcomponent
        @endforeach |

        @if($objUser->referral != null)<a href="{{ route('marketing.users.user', ['id' => $objUser->referral->id]) }}" class="badge badge-dark" data-toggle="tooltip" data-placement="top" title="Referral">{{ $objUser->referral->id }}</a> |@endif

        {{ (date('Y-m-d', strtotime($objUser->created_at)) == date('Y-m-d')) ? date('H:i', strtotime($objUser->created_at)) : date('j.n. H:i', strtotime($objUser->created_at)) }}
    </span>

    @if($objUser->note)<p class="xs-mt-10 xs-mb-0"><i class="far fa-sticky-note color_red"></i> {{ $objUser->note->text }}</p>@endif
</li>