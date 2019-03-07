@extends('layout')

@section('content')
    <div class="ui segment" style="margin-top: 10%">
        <form method="POST" action={{ url('/posts/destroy/' . $post->id) }}>
            @csrf 
            <button class="ui right floated negative button">Delete</button> 
        </form>
        <a href={{ url('/posts/edit/' . $post->id) }} class="ui right floated olive button">Edit</a>
        <div class="ui items">
            <div class="content">
                <h3 class="header">
                    {{ $post->name }}
                </h3>
                <div class="description">
                    <div class="ui segment">
                        {{ $post->body }}
                    </div>
                </div>  
            </div>
        </div>
    </div>
@endsection