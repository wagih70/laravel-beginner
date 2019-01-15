@extends('layout.app')

@section('body')
 
 <br>
</br>


<div class="col-lg-4">
	<a href="/todo" class="btn btn-primary">Back </a>
	<h1> {{substr(Route::currentRouteName(),5)}} new item </h1>
<form class="form-horizontal" action="/todo/@yield('editId')" method="post">
  {{csrf_field()}}
  @section ('editMethod')
  @show
  <fieldset>
    

    
    <div class="form-group ">
      <div class="col-lg-10">
          <input type="text" name="title" value="@yield('editTitle')"  class="form-control" placeholder="title">
          <br>
      </div>
      <div class="col-lg-10">
        <textarea class="form-control" name="body" rows="5" id="textArea" placeholder="body">@yield('editBody')</textarea> 
        <br>
        <button type="submit" class="btn btn-success">Submit
        </button>
      </div>
    </div>
    
  </fieldset>
</form>
@include('todo.partials.errors')   

</div>
@endsection
