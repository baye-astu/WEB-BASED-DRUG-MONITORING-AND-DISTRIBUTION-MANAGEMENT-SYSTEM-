@include('layouts.app')
@include('epsa3.sidebar')
<div class="row">
    <div class="col-md-2">
        <div class="form-group">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <div class="row">
                {{ Form::submit('Sales Report', ['class'=>'btn btn-warning form-group']) }}
            </div><br>
            <div class="row">
                {{ Form::submit('Sales Report', ['class'=>'btn btn-warning form-group']) }}
            </div>

        </div>
    </div>
    <div class="col-md-8">
        <div class="container">
            {!! Form::open(['action' => 'App\Http\Controllers\SellController@store', 'method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('name','Drug')}}<br>
                <select name="name" id="" class="form-control">
                @foreach ($drug as $dr)
                <option value="{{ $dr->name }}">{{  $dr->name  }}</option>
                @endforeach
                </select>
                </div>
                <select name="unit" class="form-control">
                    <option selected>Unit</option>
                    <option value="250mg">250g</option>
                    <option value="500mg">500g</option>
                  </select>
            <div class="form-group">
                {{Form::label('quantity','Quantity')}}
                {{Form::number('quantity','',['class'=>'form-control', 'id'=>'quantity'])}}
            </div>
            <div class="form-group">
                {{Form::label('uprice','Unit Price')}}
                {{Form::number('uprice','',['class'=>'form-control','id'=>'uprice'])}}
            </div>
            <div class="form-group">
                {{Form::label('totalrice','Total Price')}}
                {{Form::number('totalprice','',['class'=>'form-control', 'id'=>'totalprice'])}}
            </div>

            <div class="form-group">
            {{Form::submit('Sell',['class'=>'btn btn-success form-group'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
$('#uprice, #quantity').on('input',function(){
    var uprice = parseFloat($('#uprice').val()) || 0;
    var quantity = parseFloat($('#quantity').val()) || 0;

    $('#totalprice').val(uprice * quantity);
});
</script>

