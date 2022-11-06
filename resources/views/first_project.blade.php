@extends('layouts.app')

@section('contents')

@if($errors->any())
<div class='aler alert-danger'>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif

@if(session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
@endif

<form action="/submit" method="post" >
@csrf
<div class="form-group">
<label for="name" class="form-label">Name</label>
<input type="text" name="name" placeholder='Enter your name' id="name" class="form-control mt-2">
</div>

<div class="form-group mt-2">
<label for="email" class="form-label">email</label>
<input type="text" name="email" placeholder='Enter your email' id="email" class="form-control mt-2">
</div>

<div class="form-group mt-2">
<label for="message" class="form-label">message</label>
<textarea id="message" name="message" placeholder='Enter your message' class="form-control mt-2"></textarea>
</div>
<button type="submit" name="button" class="btn btn-success mt-3">Submit</button>
</form>

@endsection

@section('bottom')
<footer class=" text-center fsticky-bottom ">
@foreach($data as $el)

<div class="alert alert-info">

<p>name: {{$el->name}}  email: {{$el->email}} message: {{$el->message}} create date: {{$el->created_at}}</p>

</div>
 
@endforeach

@endsection