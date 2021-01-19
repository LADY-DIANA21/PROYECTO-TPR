@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle de producto</div>

<div class="caerd-body">
@if(session('status'))
<div class="alert alert-success" role="alert">
{{session('status')}}
</div>
@endif
{{--detalle productos--}}
<div class="row">
<div class="col-6">
<img src="{{$producto->photo}}" width="300" height="300">
<h4>{{$producto->name}}</h4>
<p>{{str_limit(strtolower($producto->description),50)}}</p>
<p><strong>precio: </strong>{{$producto->price}}$</p>
            </div>
            </div>
            {{--detalle productos--}}
</div>
</div>
</div>
</div>
</div>
@endsection

