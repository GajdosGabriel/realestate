@extends('admin/_layout')

@section('title', env('APP_NAME') . ' :: Admin area - Article - ' . $objArticle->title)

@section('content')
    <div class="container-fluid xs-pt-20">
        <div class="card">
            <div class="card-body">
                <div id="adminPanel">
                    <div class="item">
                        <h3>{{ $objArticle->title }}</h3>
                    </div>

                    <div class="float-right">
                        <div class="item">
                            <a href="{{ route('admin.articles.articleEdit', ['id' => $objArticle->id]) }}" class="btn btn-sm btn-secondary">Edit</a>
                        </div>

                        <div class="item">
                            {{ date('j.n.Y H:i', strtotime($objArticle->created_at)) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container xs-mt-30 xs-pb-50">
        <div class="card">
            <div class="card-body">
                <div class="articlePreview clearfix">
                    {!! $objArticle->body !!}
                </div>
            </div>
        </div>
    </div>
@endsection