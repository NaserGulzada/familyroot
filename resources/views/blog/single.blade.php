@extends('layouts.pages')

@section('title','| Blog');

@section('content')
<div class="row">
   <div class="col-md-8">
      <h1>{{ $post->title }}</h1>
      <p>{!! nl2br(e($post->body)) !!}</p>
   </div>
   <div class="col-md-3 col-md-offset-1">
      <div class="well">
         <dl><a href="{{ url('blog/'.$post->slug) }}">{{url('blog/'.$post->slug) }}</a></dl>
         <dl><a href="{{ url('blog') }}" class="btn btn-default btn-block">All Blogs</a></dl>
       </div>
   </div>
</div>
@endsection