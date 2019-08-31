<li class="list-group-item">
    <span class="float-right">
        <a href="{{ route('agent.leads.move-down', ['id' => $objLead->id]) }}"><i class="fas fa-arrow-down"></i></a> |

        <a href="{{ route('agent.leads.delete', ['id' => $objLead->id]) }}" class="btn-delete"><i class="far fa-trash-alt text-danger"></i></a>
    </span>

    {{ $objLead->id }}
    | <span class="font-weight-bold">{{ $objLead->name }} {{ $objLead->surname }}</span>
    | {{ $objLead->country }} |
    <a href="mailto:{{ $objLead->email }}"><i class="fas fa-envelope"></i></a> |
    <a href="tel:+{{ $objLead->phone_code }}{{ $objLead->phone }}"><i class="fas fa-phone-square"></i></a>
</li>