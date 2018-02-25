@extends('layouts.pages')

@section('title', '| All Posts')

@section('content')
<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Blog</h1>
		</div>
</div>
@foreach($posts AS $post)
<div class="row">
    <div class="col-md-8">
        <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ substr(strip_tags($post->body),0,200) }} {{(strlen($post->body)>200)?"...":"" }}</p>
            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
        </div>
        <hr />
    </div>
</div>
@endforeach
<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				{!! $posts->links() !!}
			</div>
		</div>
</div>
@endsection