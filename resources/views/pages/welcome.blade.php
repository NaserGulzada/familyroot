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
        <div class="post">
            <h3>Post Title1</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
        <hr />
        <div class="post">
                <h3>Post Title 2</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <a href="#" class="btn btn-primary">Read More</a>
        </div>
        <hr />
        <div class="post">
                <h3>Post Title 3</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <a href="#" class="btn btn-primary">Read More</a>
        </div>
    </div>
    <div class="col-md-3 col-md-offset=1">
        <h2>Side bar</h2>
            
            some more 
    </div>
  </div>
@endsection