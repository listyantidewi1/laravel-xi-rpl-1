@extends('layouts.app')

@section('title', "Post Show")

@if($post['is_new'])
<div>A new blog post!</div>
@else
<div>This post is old</div>
@endif

@section('content')
 <h1>{{ $post['title'] }}</h1>
 <p>{{ $post['title'] }}</p>
@endsection