@extends('layouts.pages')
@section('title',' | Contact Us')
@section('content')
<div clas="row">
    <div class="col-md-12">
    <h3>Contact me</h3>
    <form>
        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" name="email" class="form-control" />
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input id="subject" name="subject" class="form-control" />
          </div>
          <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control" />Type the message body</textarea>
          </div>
          <div class="form-group"> 
              <input type="submit" name="Submit"  value="Submit" class="btn btn-success">
          </div>
      </form>
    </div>
</div>  
@endsection