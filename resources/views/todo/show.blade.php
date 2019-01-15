@extends ('layout.app')

@section('body')

<div>
<h1>{{$item->title}}</h1>
</div>
<p> {{$item->body}}<p>
@endsection