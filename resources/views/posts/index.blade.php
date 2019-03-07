@extends('layout')

@section('content')
    @foreach ($posts as $post)
        <div class="ui card" style="width: 100%">
            <div class="content">
                <div class="header">
                    {{ $post->name }}
                </div>
                <div class="meta">{{ $post->created_at->format('Y.m.d a: G.i') }}</div>
                <div class="description">
                    <p>{{ $post->body }}</p>
                </div>
            </div>
        </div>
    @endforeach
@endsection