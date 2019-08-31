<li class="list-group-item {{ $objActivity->user->statusClass }}">
    <span class="float-right">
        @if($objActivity->user->referral != null)<a href="{{ route('admin.users.user', ['id' => $objActivity->user->referral->id]) }}" class="badge badge-dark" data-toggle="tooltip" data-placement="top" title="Referral">{{ $objActivity->user->referral->name }} {{ $objActivity->user->referral->surname }}</a> |@endif

            {{ (date('Y-m-d', strtotime($objActivity->created_at)) == date('Y-m-d')) ? date('H:i:s', strtotime($objActivity->created_at)) : date('j.n. H:i:s', strtotime($objActivity->created_at)) }}
    </span>

    <a href="{{ route('admin.users.user', ['id' => $objActivity->user->id]) }}" class="font-weight-bold">{{ $objActivity->user->name }} {{ $objActivity->user->surname }}</a>
    | {{ $objActivity->user->country }}

    <br>

    @foreach($objActivity->user->roles as $objRole)
        @component('components/admin/roleBadge', ['objRole' => $objRole])@endcomponent
    @endforeach

    @if($objActivity->user->note)<p class="xs-mt-10 xs-mb-0"><i class="far fa-sticky-note color_red"></i> {{ $objActivity->user->note->text }}</p>@endif
</li>