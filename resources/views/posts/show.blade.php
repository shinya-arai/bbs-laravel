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

                @forelse ($post->comments as $comment)
                    <div class="ui relax divided list">
                        <div class="content">
                            <i class="large comment alternate outline icon"></i>
                            <div class="ui tag label">{{ $comment->created_at->format('Y.m.d a : G.i') }}</div>

                            <form method="POST" action={{ url('/comments/destory/' . $comment->id) }}>
                                @csrf 
                                <input name="post_id" type="hidden" value="{{ $post->id }}">
                                <button class="ui right floated icon button">
                                    <i class="window close icon"></i>
                                </button> 
                            </form>

                            <div class="description" style="margin-top: 1em;">
                                {{ $comment->body }}
                            </div>
                        </div>
                    </div>
                @empty
                    <div>コメントはまだありません</div>                    
                @endforelse
                
                <form method="POST" action="/comments/store" class="ui reply form" style="margin-top: 3em;">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="field">
                        <input name="body" id="" cols="30" rows="10" value="{{ old('body') }}">
                    </div>

                    @if ($errors->has('body'))
                        <div class="ui icon negative message">
                            <i class="ban icon"></i>
                            <div class="content">
                                <div class="header">
                                    {{ $errors->first('body') }}
                                </div>
                            </div>
                        </div>
                    @endif

                    <button class="ui primary button" type="submit">Add Comment</button>
                </form>
            </div>
        </div>
    </div>
@endsection