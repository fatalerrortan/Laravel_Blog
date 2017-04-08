@extends('layouts.master')

@section('contents')
{{--{{$post['id']}}--}}
<div class="row">

    <!-- Blog Post Content Column -->
    <div class="col-lg-8">

        <!-- Blog Post -->

        <!-- Title -->
        <h1>{{$post['title']}}</h1>

        <!-- Author -->
        <p class="lead">
            by <a href="#">{{$post['autor']}}</a>
        </p>

        <hr>
        <!-- Date/Time -->
        <p><span class="glyphicon glyphicon-time"></span> {{$post['updated_at']}}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-responsive" src="data:image/jpeg;base64,{{base64_encode($post['image'])}}" alt="">

        <hr>

        <!-- Post Content -->
        <div class="post_content">
            {{$post['article']}}
        </div>
        <hr>

        <!-- Blog Comments -->

        <!-- Comments Form -->
        <div class="well">
            <h4>Leave a Comment:</h4>
            <form role="form">
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <hr>

        <!-- Posted Comments -->

        </div>
    </div>
@endsection