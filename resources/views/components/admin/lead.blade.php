<li class="list-group-item">
    {{--<span class="float-right">--}}
        {{--<a href="{{ route('agent.leads.move-hot', ['id' => $objLead->id]) }}"><i class="fab fa-hotjar"></i></a>--}}

        {{--<a href="{{ route('agent.leads.move-down', ['id' => $objLead->id]) }}" class="xs-ml-15"><i class="fas fa-arrow-down"></i></a>--}}

        {{--<a href="{{ route('agent.leads.delete', ['id' => $objLead->id]) }}" class="btn-delete xs-ml-15"><i class="far fa-trash-alt text-danger"></i></a>--}}
    {{--</span>--}}

    {{ $objLead->id }}
    :: <span class="font-weight-bold">{{ $objLead->name }} {{ $objLead->surname }}</span>
    :: {{ $objLead->country }},
    <a href="mailto:{{ $objLead->email }}">{{ $objLead->email }}</a>,
    <a href="tel:+{{ $objLead->phone_code }}{{ $objLead->phone }}">+{{ $objLead->phone_code }} {{ $objLead->phone }}</a>
</li>