@extends ('todo.create')
@section ('editTitle',$item->title)
@section ('editId',$item->id)
@section ('editBody',$item->body)
@section ('editMethod')
  {{method_field('put')}}
@endsection