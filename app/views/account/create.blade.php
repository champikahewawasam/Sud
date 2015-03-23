@extends('layout.main')

@section('content')
<form action="{{URL::route('account-create-post')}}" method="post">
    <input type="submit" value="create an account">
    <div class="field">
        Email: <input type="text" name='email'>
    </div>
    <div class="field">
        Username: <input type="text" name='username'>
    </div>
    <div class="field">
        Password: <input type="password" name='password'>
    </div>
    <div class="field">
        Password again: <input type="password" name='password_again'>
    </div>
    {{Form::token()}}
    
</form>
@stop