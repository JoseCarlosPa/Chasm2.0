@extends('frontEnd.layouts.master')
@section('title','CHASM')
@section('slider')
@endsection
@section('content')
    <div class ="banner_container">
        <br><br><br><br><br><br><br><br><br>
        <div class ="index_papel1"><br><br><br><br></div>
    </div>
    <br><br><br>

    <div class ="container_index">
        <form action ="send_mail.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" style="width: 30em;text-align: left" id="nombre" name ="nombre" aria-describedby="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" style="width: 30em;text-align: left" id="ubicacion" name ="ubicacion" aria-describedby="ubicacion" placeholder="Ubicacion">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" style="width: 30em;text-align: left" id="mail" name ="mail" aria-describedby="mail" placeholder="Correo electronico">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" style="width: 30em;text-align: left" id="asunto" name ="asunto" aria-describedby="asunto" placeholder="Asunto">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" style="width: 30em;text-align: left" id="mensaje" name ="mensaje" aria-describedby="mensaje" placeholder="Mensaje">
            </div>
            <br><br>
            <div class ="form-group">
                <input type="submit" class ="input_contacto">
            </div>
        </form>
        <br><br>
    </div>



@endsection
