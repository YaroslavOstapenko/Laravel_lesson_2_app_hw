@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <img src="https://via.placeholder.com/800x400" class="card-img-top" alt="{{ $newsItem->title }}">
                <div class="card-body">
                    <h1 class="card-title">{{ $newsItem->title }}</h1>
                    <p class="card-text">{{ $newsItem->body }}</p>
                    <a href="{{ route('news.index') }}" class="btn btn-secondary">Назад к новостям</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
