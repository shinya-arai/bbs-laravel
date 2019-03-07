@extends('layout')

@section('content')
    @foreach ($posts as $post)
        <div class="ui card" style="width: 100%">
            <div class="content">
                <a href={{ url('/posts/show/' . $post->id) }} class="ui right floated positive button">detail</a>
                <div class="header">
                    {{ $post->name }}
                </div>
                <div class="meta">{{ $post->created_at->format('Y.m.d a : G.i') }}</div>
                <div class="description">
                    <p>{{ $post->body }}</p>
                </div>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection