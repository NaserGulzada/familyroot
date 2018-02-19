@extends('layouts.pages')
@section('title',' | Blog Details')
@section('content')
<div class="row">
    <div class="col-md-8">
        <h1>{{ $post->title }}</h1>
        <p>{!! nl2br(e($post->body)) !!}</p>
    </div>
    <div class="col-md-4">
       <div class="well">
           <dl class="dl-horizontal">
             <label>URL:</label>
           </dl>
           <dl class="dl-horizontal">
                <label>Created At:</label>
                <p>{{ $post->created_at }}</p>
            </dl>
            <dl class="dl-horizontal">
                <label>Last Updated At:</label>
                <p>{{ $post->updated_at }}</p>
            </dl> 
            <div class="row">
                <div class="col-md-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                </div>
                <div class="col-md-6">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                        
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                        {!! Form::close() !!} 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                        <a href="{{ route('posts.index')}}" class="btn btn-default btn-block" /><< List all items</a>
                </div>
			</div>
       </div>
    </div>
</div>
@endsection