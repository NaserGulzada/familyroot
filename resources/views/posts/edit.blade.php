@extends('layouts.pages')
@section('title',' | Blog Details')
@section('content')
<div class="row">
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    <div class="col-md-8">
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
    
        {{ Form::label('slug', 'Title:') }}
        {{ Form::text('slug', null, ["class" => 'form-control input-lg']) }}

        {{ Form::label('body', "Body:", ['class' => 'form-spacing-top']) }}
        {{ Form::textarea('body', null, ['class' => 'form-control']) }}
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
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                </div>
                <div class="col-sm-6">
                    {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                </div>
            </div>
       </div>
    </div>
    {!! Form::close() !!} 
</div>
@endsection