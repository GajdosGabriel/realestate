<li class="list-group-item{{ $objComment->note == 1 ? ' danger' : '' }}">
    <p class="xs-mb-0">
        {{ date('j.n. H:i', strtotime($objComment->created_at)) }} by {{ $objComment->author->name }} {{ $objComment->author->surname }}<br>
        {{ $objComment->text }}
    </p>
</li>