<li class="list-group-item">
    <span class="float-right">
        @foreach($objDocument->user_documents as $document)
            <a href="{{ route('admin.documents.download', ['id' => $document->id]) }}" class="xs-pl-10"><i class="fas fa-download"></i></a>
        @endforeach
    </span>

    {{ $objDocument->name }}
</li>