@extends('layout')

@section('content')
    <div style="padding-top: 10px" class="ui piled segment">
        <h4 class="ui header">Update Your Tweet</h4>
    </div>

    <div class="ui raised segment">
        <form class="ui form" method="POST" action={{ url('/posts/update/' . $post->id) }}>
            @csrf
            <div class="ui field">
                <div class="field">
                    <label>Text</label>
                    <input name="body" placeholder="What do you do now?" value="{{ old('body') ?? $post->body }}">

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
                </div>

                <div class="field">
                    <label>Your Name</label>
                    <input type="text" name="name" placeholder="Write Your Name" value="{{ old('name') ?? $post->name }}">

                    @if ($errors->has('name'))
                        <div class="ui icon negative message">
                            <i class="ban icon"></i>
                            <div class="content">
                                <div class="header">
                                    {{ $errors->first('name') }}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <button class="ui primary button" type="submit">Update</button>
                <a href="/" class="ui button">Cancel</a>
            </div>
        </form>
    </div>
@endsection