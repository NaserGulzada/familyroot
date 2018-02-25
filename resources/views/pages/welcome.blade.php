@extends('layouts/pages')
@section('title',' | Homepage')
@section('content')
  <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
                <h1>Hello, world!</h1>
                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
            </div> 
        </div>
    </div>
  <div class="row">
    <div class="col-md-8">
        @foreach($posts AS $post)
        <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ substr(strip_tags($post->body),0,200) }} {{(strlen($post->body)>200)?"...":"" }}</p>
            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
        </div>
        <hr />
        @endforeach
    </div>
    <div class="col-md-3 col-md-offset=1">
        <h2>Side bar</h2>
            
            some more 
    </div>
  </div>
@endsection