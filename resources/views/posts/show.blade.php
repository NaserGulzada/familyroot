@extends('layouts.pages')
@section('title',' | Blog Details')
@section('content')
<h1>{{$post->title}}</h1>
<p>{{$post->body}}
@endsection