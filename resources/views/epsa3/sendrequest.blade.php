@include('layouts.app')
@include('epsa3.sidebar')
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::submit('Pending Request', ['class'=>'btn btn-warning form-group']) }}
            {{ Form::submit('Approved Request', ['class'=>'btn btn-warning form-group']) }}
        </div>
    </div>
    <div class="col-md-8">
        <div class="container">
            {!! Form::open(['action' => 'App\Http\Controllers\Epsa3Controller@store', 'method'=>'POST']) !!}
            <div class="form-group">
            {{Form::label('name','Drug Name')}}
            {{Form::text('name','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::label('unit','Unit')}}
            {{Form::text('unit','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('quantity','Quantity')}}
                {{Form::text('quantity','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::label('expquantity','Expired Quantity')}}
            {{Form::text('expquantity','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::label('damagedquantity','Damaged Quantity')}}
            {{Form::text('damagedquantity','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('stockquantity','Stock Quantity')}}
                {{Form::text('stockquantity','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('hub','Hub')}}
                {{Form::text('hub','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('monthlyconsumption','Monthly Consumption')}}
                {{Form::text('monthlyconsumption','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('facility','Facility')}}<br>
                <select name="facility" id="" class="form-control">
                @foreach ($facility as $fac)
                <option value="{{ $fac->name }}">{{  $fac->name  }}</option>
                @endforeach
                </select>
                </div>
                <br>
            <div class="form-group">
            {{Form::submit('Send Request',['class'=>'btn btn-warning form-group'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
