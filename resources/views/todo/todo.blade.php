@extends('layout.app')

@section('body')
<br>
@include ('todo.partials.message')

<div class="col-lg-4 "> 
	<a href="todo/create" class="btn btn-danger"> Add New </a>
	<center><h1>ToDo List</h1></center>
	<ul class="list-group">
		@foreach ($todos as $todo)
  <li class="list-group-item ">
         <a href="{{'/todo/'.$todo->id}}">{{$todo->title}} </a>
  </li>
       @endforeach
</ul>

<br>
	<ul class="list-group">
		@foreach ($todos as $todo)
  <li class="list-group-item ">
         <a href="{{'/todo/'.$todo->id.'/edit/'}}"> edit </a>
         <form action="{{'/todo/'.$todo->id}}" method="post">
         	{{csrf_field()}}
         	{{method_field('delete')}}
         	<button type="submit" >delete</button>
         </form>
  </li>
       @endforeach
</ul>
</div>
@endsection
