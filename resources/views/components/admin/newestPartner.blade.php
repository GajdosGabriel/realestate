<li class="list-group-item
@if($objUser->status == 1) danger
@elseif($objUser->status == 2) warning
@elseif($objUser->status == 3) hot
@elseif($objUser->status == 4) success
@elseif($objUser->status == 5) blue
@endif">
    <a href="{{ route('admin.users.user', ['id' => $objUser->id]) }}" class="font-weight-bold">{{ $objUser->name }} {{ $objUser->surname }}</a>
    | {{ $objUser->country }} |
    <a href="mailto:{{ $objUser->email }}"><i class="fas fa-envelope"></i></a> |
    <a href="tel:+{{ $objUser->phone_code }}{{ $objUser->phone }}"><i class="fas fa-phone-square"></i></a>

    <span class="float-right">
        @if(count($objUser->roles) > 0)
            @foreach($objUser->roles as $objRole)
                @component('components/admin/roleBadge', ['objRole' => $objRole])@endcomponent
            @endforeach
        @endif

        @if($objUser->referral != null)<a href="{{ route('admin.users.user', ['id' => $objUser->referral->id]) }}" class="badge badge-dark" data-toggle="tooltip" data-placement="top" title="Referral">{{ $objUser->referral->name }} {{ $objUser->referral->surname }}</a> |@endif
    </span>

    @if($objUser->note)<p class="xs-mt-10 xs-mb-0"><i class="far fa-sticky-note color_red"></i> {{ $objUser->note->text }}</p>@endif
</li>