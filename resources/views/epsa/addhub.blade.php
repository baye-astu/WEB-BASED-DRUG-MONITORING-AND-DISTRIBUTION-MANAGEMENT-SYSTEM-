@include('layouts.app')
@extends('epsa.sidebar')
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
        <div class="container">
            {!! Form::open(['action' => 'App\Http\Controllers\HubsController@store', 'method'=>'POST']) !!}
            {{Form::label('name','Hub Name')}}
            {{Form::text('name','',['class'=>'form-control'])}}
            <div class="form-group">
            {{Form::label('phoneno','Phone No')}}
            {{Form::text('phoneno','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('city','City')}}
                {{Form::text('city','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::label('brmanager','Branch Manager')}}
            {{Form::text('brmanager','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::label('pobox','PO BOX')}}
            {{Form::text('pobox','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::label('distance_from_addis','Distance From Addis')}}
            {{Form::text('distance_from_addis','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('faxnumber','Fax Number')}}
                {{Form::text('faxnumber','',['class'=>'form-control'])}}
                </div>
            <div class="form-group">
            {{Form::submit('Add Hub',['class'=>'btn btn-warning form-group'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="col-md-2">

    </div>
</div>
