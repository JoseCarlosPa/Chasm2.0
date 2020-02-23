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
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Inicia Sesion</h2>
                    <form action="{{url('/user_login')}}" method="post" class="form-horizontal">
                        {{csrf_field()}}
                        <input type="email" name ="email" class="form-control" style="width: 15em;text-align: left"
                               id="email" aria-describedby="nombre" placeholder="Correo electronico">
                        <input type="password" placeholder="Password" name="password"/>
                        <span>
                            <input type="checkbox" class="checkbox">
                            Mantener abierto
                        </span>
                        <button type="submit" class="btn btn-default">Usar esta sesion</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">O</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>Soy nuevo en CHASM!</h2>
                    <a href="" data-toggle="modal" data-target=".bd-example-modal-lg"
                            ><button type="" class="btn btn-primary">Registrarse</button></a>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection
