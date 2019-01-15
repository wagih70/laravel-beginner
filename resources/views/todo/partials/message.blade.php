@if (session()->has('message'))

<h1>{{session()->get('message')}} </h1>

@endif