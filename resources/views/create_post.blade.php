@extends('layouts.app')

@section('content')
<h1>Create Post</h1>
<form action='/create_post' method='post'>
<input type='text' name='title' style='height:50px; width:200px;'></input>
	<input type='text' name='post_text' style='height:300px; width:300px;'></input>
	<button type='submit'>Submit</button>
	{{ csrf_field() }}
</form>

@endsection