<li class="list-group-item">
    <a href="{{ route('marketing.articles.article', ['id' => $objArticle->id]) }}"><strong>{{ $objArticle->title }}</strong></a>

    <div class="float-right">
        <a href="{{ route('marketing.articles.articleEdit', ['id' => $objArticle->id]) }}"><i class="fas fa-edit"></i></a> | {{ date('j.n.Y H:i', strtotime($objArticle->created_at)) }}
    </div>
</li>