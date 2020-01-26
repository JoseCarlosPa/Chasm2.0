@extends('frontEnd.layouts.master')
@section('title','Login Register Page')
@section('slider')
@endsection
@section('content')
    <div class="header_container">
        <br><br><br><br><br><br><br>
    </div>
    <br><br><br>
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="row">
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>Registrar en CHASM!</h2>
                    <form action="{{url('/register_user')}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <input type="text" placeholder="Nombre" name="name" value="{{old('name')}}"/>
                        <span class="text-danger">{{$errors->first('name')}}</span>

                        <input type="email" placeholder="Email" name="email" value="{{old('email')}}"/>
                        <span class="text-danger">{{$errors->first('email')}}</span>

                        <input type="password" placeholder="Contraseña" name="password" value="{{old('password')}}"/>
                        <span class="text-danger">{{$errors->first('password')}}</span>

                        <input type="password" placeholder="Confirmar contraseña" name="password_confirmation" value="{{old('password_confirmation')}}"/>
                        <span class="text-danger">{{$errors->first('password_confirmation')}}</span>

                        <button type="submit" class="btn btn-default">Registrar</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection
