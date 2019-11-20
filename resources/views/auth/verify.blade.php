@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se a reenviado la verificacion') }}
                        </div>
                    @endif

                    {{ __('Antes de seguir porfavor revisa tu email') }}
                    {{ __('Si no la recibiste') }}, <a href="{{ route('verification.resend') }}">{{ __('CLick aqui para volver a enviar') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
