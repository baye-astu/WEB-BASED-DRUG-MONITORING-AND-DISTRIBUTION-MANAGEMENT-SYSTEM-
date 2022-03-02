@include('layouts.app')
@extends('epsa3.sidebar')
@foreach ($quantity as $quantity)
{!! Form::open(['action' => ['App\Http\Controllers\FStockController@update',$quantity->id], 'method'=>'POST']) !!}

                    {{Form::text('squantity',$quantity->quantity,['class'=>'form-group'])}}
                    {{Form::hidden('_method','PUT')}}
                    <td>{{Form::submit('EDIT',['class'=>'btn btn-primary form-group'])}}</td>
{!! Form::close() !!}
@endforeach
