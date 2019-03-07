@extends('layout')

@section('content')
    <div style="padding-top: 10px" class="ui piled segment">
        <h4 class="ui header">Create New Tweet</h4>
    </div>

    <div class="ui raised segment">
        <form class="ui form" method="POST" action="/posts/store">
            @csrf
            <div class="ui field">
                <div class="field">
                    <label>Text</label>
                    <textarea name="body" placeholder="What do you do now?"></textarea>

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
                    <input type="text" name="name" placeholder="Write Your Name">

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

                <button class="ui primary button" type="submit">Tweet</button>
                <a href="/" class="ui button">Cancel</a>
            </div>
        </form>
    </div>
@endsection