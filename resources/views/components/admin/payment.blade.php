<li class="list-group-item">
    <p class="float-right xs-mb-0">
        Next payment: <strong>{{ date('j.n.Y', strtotime($arrPayments[$objUser->id]['date'])) }} &euro; {{ number_format($arrPayments[$objUser->id]['amount'], 2, ',', ' ') }}</strong> |

        @if($objUser->bank_details != null)
            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#bd{{ $objUser->bank_details->id }}">Bank details</button>
        @else
            <span class="text-danger">No Bank details yet.</span>
        @endif
    </p>

    <strong>
        <a href="{{ route('admin.users.user', ['id' => $objUser->id]) }}">{{ $objUser->name }} {{ $objUser->surname }}</a>
    </strong>
</li>