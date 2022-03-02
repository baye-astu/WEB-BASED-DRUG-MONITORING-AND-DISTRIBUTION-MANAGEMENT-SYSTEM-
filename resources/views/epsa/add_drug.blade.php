@include('layouts.app')
@extends('epsa.sidebar')
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
        <div class="container">
            {!! Form::open(['action' => 'App\Http\Controllers\EpsaController@store', 'method'=>'POST']) !!}
            {{Form::label('name','Drug Name')}}
            {{Form::text('name','',['class'=>'form-control'])}}
            <div class="form-group">
                {{Form::label('desc','Description')}}
                {{Form::text('desc','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::label('expdate','Expiry Date')}}
            {{Form::date('expdate','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::label('manfdate','Manufacture Date')}}
            {{Form::date('manfdate','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::label('madein','Made-IN')}}
            {{Form::text('madein','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::submit('Add',['class'=>'btn btn-warning form-group'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="col-md-2">

    </div>
</div>
