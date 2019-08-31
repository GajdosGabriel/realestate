@extends('marketing/_layout')

@section('title', env('APP_NAME') . ' :: Marketing area - Articles')

@section('content')
    <div class="container-fluid xs-pt-20">
        <div class="card">
            <div class="card-body">
                <div id="adminPanel">
                    <div class="item">
                        <h3>Articles <span class="badge badge-secondary">{{ count($arrArticles) }} / {{ $arrArticles->total() }}</span></h3>
                    </div>

                    <div class="float-right">
                        <div class="item">
                            <a href="{{ route('marketing.articles.new') }}" class="btn btn-sm btn-secondary">New article</a>
                        </div>

                        <div class="item">
                            {{ $arrArticles->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container xs-mt-30 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <ul class="list-group users xs-mb-20">
                    @foreach($arrArticles as $objArticle)
                        @component('components/marketing/article', ['objArticle' => $objArticle])@endcomponent
                    @endforeach
                </ul>

                <div class="pagination-center">
                    {{ $arrArticles->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection