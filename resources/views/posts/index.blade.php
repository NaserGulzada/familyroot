@extends('layouts.pages')
@section('title',' | Blog Details')
@section('content')
<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- end of .row -->
<div class="row">
   <div class="col-md-12">
     <table class="table table-condensed">
       <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Body</th>
            <th></th>
        </tr>
    </thead>
     @foreach($posts AS $post)
     <tr>
       <td>{{ $post->id }}</td>
       <td>{{ $post->title }}</td>
       <td>{{ substr($post->body,0,50) }}{{ strlen($post->body) > 50?'...':''}}</td>
       <td>{{ $post->created_at }}</td>
       <td>{{ $post->updated_at }}</td>
       <td>
                <a href="{{ route('posts.show',$post->id) }}" class="btn btn-default">View</a>
        
                 <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-default">Edit</a>   
       </td>
     </tr>
     @endforeach
     </table>
     <div class='text-center'>
      Total Records: {!! $posts->total() !!} {!! $posts->links(); !!}
     </div> 
   </div>
</div>
@endsection