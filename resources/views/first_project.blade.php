@extends('layouts.app')

@section('contents')

@if($errors->any())
<div>
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

<form action="/submit" method="post">
@csrf
<div class="form">
<label for="name"> имя</label>
<input type="text" name="name" placeholder='Введите имя' id="name">
</div>

<div class="form">
<label for="email">email</label>
<input type="text" name="email" placeholder='Введите email' id="email">
</div>

<div class="form">
<label for="message"></label>
<textarea id="message" name="message" placeholder='Введите сообщение'></textarea>
</div>
<button type="submit" name="button">Отправить</button>
</form>

@endsection

