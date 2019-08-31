@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Newsletter')

@section('content')
    <div class="container xs-mt-20 xs-mb-20">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1>News room</h1>
            </div>

            <div class="col-12 col-lg-6 text-right">
                <a href="https://www.einpresswire.com/newsroom/cee_real_estate_group_newsroom/?n=2" class="btn btn-secondary" target="_blank">Press releases</a>
            </div>
        </div>

        <div class="pagination-center">
            {{ $arrArticles->links() }}
        </div>

        <ul class="list-group users xs-mb-20">
            @foreach($arrArticles as $objArticle)
                @component('components/member/article', ['objArticle' => $objArticle])@endcomponent
            @endforeach
        </ul>

        <div class="pagination-center">
            {{ $arrArticles->links() }}
        </div>
    </div>
@endsection