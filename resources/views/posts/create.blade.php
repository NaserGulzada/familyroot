@extends('layouts.pages')
@section('title',' | Create New Post')
@section('stylesheets')
{!! Html::style('css/parsley.css') !!}
@endsection
@section('content')
<div class="row">
   <div class="col-md-8 col-md-offset=2">
     <h1>Create New Post</h1>
     {!! Form::open(['route' => 'posts.store','data-parsley-validate'=>'']) !!}
     {{ Form::label('title','Title:')}} 
     {{ Form::text('title',null,['class'=>'form-control','required'=>'','maxlength'=>'150'])}}
     {{ Form::label('title','Slug:')}} 
     {{ Form::text('slug',null,['class'=>'form-control','required'=>'','maxlength'=>'150'])}}
     {{ Form::label('body','Post Body:')}} 
     {{ Form::textarea('body',null,['class'=>'form-control','required'=>''])}}
     {{ Form::submit('Submit',['class'=>'btn btn-success btn-lg btn-block'])}}
     {!! Form::close() !!}
   </div>
</div>
@endsection
@section('scripts')
{!! Html::script('js/parsley.js') !!}
@endsection