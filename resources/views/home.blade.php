@extends('layouts.master')

@section('contents')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            @foreach($posts as $post)
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            {{$post['title']}}
                        </h2>
                        <h3 class="post-subtitle">
                            {{$post['segment']}}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">{{$post['autor']}}</a> {{$post['updated_at']}}</p>
                </div>
                <hr>
            @endforeach
            
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
