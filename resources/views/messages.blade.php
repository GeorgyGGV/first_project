@extends('layouts.app')
@section('contents')

@foreach($data as $el)

<div class="alert alert-info">

<h3>{{$el->name}} </h3>
<h3>{{$el->email}} </h3>
<h3>{{$el->message}} </h3>
</div>
        
@endforeach

@endsection