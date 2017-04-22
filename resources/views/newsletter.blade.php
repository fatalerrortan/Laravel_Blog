@extends('layouts.master')
@section('contents')
    <a href="{{$post_url}}">
        <h1>{{$title}}</h1>
        <h3>{{$subtitle}}</h3>
        <p class="post-meta"><span class="updated_at">{{$created_at}}</span>
        <span class="keywords">Keywords: {{$keywords}}</span>
        </p>
    </a>
@endsection