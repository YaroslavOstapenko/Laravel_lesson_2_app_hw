@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4 text-center">Последние новости</h1>

    <div class="row">
        @foreach ($news as $newsItem)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="{{ $newsItem->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $newsItem->title }}</h5>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($newsItem->body, 100) }}</p>
                    <a href="{{ route('news.show', $newsItem->id) }}" class="btn btn-primary">Читать дальше</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
