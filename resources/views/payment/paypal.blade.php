@extends('frontEnd.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
    <div class="header_container">
        <br><br><br><br><br><br><br><br><br><br>
    </div>
    <br><br>
    <div class="container">
        <h3 class="text-center">TU PEDIDO ESTA SIENDO PROCESADO</h3>
        <p class="text-center">Tu numero de pedido es <b>{{$who_buying->id}}</b> y el total a pagar es de <b>$ {{$who_buying->grand_total}}</b> </p>
        <p class="text-center">En la brevedad de llegara un correo </p>

        <div class="text-center">
            <a href="/"><button class="btn-primary">Regresar a inicio</button></a>
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection
