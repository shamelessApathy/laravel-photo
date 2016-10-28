@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div class='row'>
        <a href='new_post'><button type='button' class='createPost'>Create Post</button></a>
        <a href='view_user_posts'><button type='button' class='viewUserPosts'>View My Posts</button></a>
    </div>
</div>
@endsection
