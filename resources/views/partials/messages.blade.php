@if(count('errors') > 0)
@foreach($errors->all() AS $error)
     <div class="alert alert-danger">
         {{$error}}
     </div>
@endforeach
@endif
@if(Session::has('success'))
 <div class="alert alert-success">
     {{Session::get('success')}}
 </div>
@endif
@if(Session::has('error'))
 <div class="alert alert-error">
     {{Session::get('error')}}
 </div>
@endif