@include('layouts.app')
@extends('epsa2.sidebar')
<div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
    {!! Form::open(['action' => 'App\Http\Controllers\Epsa2Controller@store', 'method'=>'POST']) !!}
    {{Form::label('name','Facility Name')}}
    {{Form::text('name','',['class'=>'form-control'])}}
    <div class="form-group">
    {{Form::label('region','Region')}}
    {{Form::text('region','',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
    {{Form::label('zone','Zone')}}
    {{Form::text('zone','',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
    {{Form::label('woreda','Woreda')}}
    {{Form::text('woreda','',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('phoneno','Phone No')}}
        {{Form::text('phoneno','',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
    {{Form::submit('Add Facility',['class'=>'btn btn-success form-group'])}}
    </div>
    {!! Form::close() !!}
</div>
<div class="col-md-2">

</div>
</div>
</div>
