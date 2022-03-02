@include('layouts.app')
@extends('epsa.sidebar')
<div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
    {!! Form::open(['action' => 'App\Http\Controllers\Epsa2Controller@store', 'method'=>'POST']) !!}
    {{Form::label('email','Email')}}
    {{Form::email('email','',['class'=>'form-control'])}}
    <div class="form-group">
    {{Form::label('password','Password')}}
    {{Form::password('password','',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
    {{Form::submit('Update',['class'=>'btn btn-success form-group'])}}
    </div>
    {!! Form::close() !!}
</div>
<div class="col-md-2">

</div>
</div>
</div>
