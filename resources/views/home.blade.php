@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Te registraste correctamente</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="/storage/avatar/{{Auth::user()->avatar}}" alt="">
                    <h1>¡Bienvenido {{Auth::user()->name}} {{Auth::user()->last_name}}!</h1>
                    <h5>Tu usuario es {{Auth::user()->user}}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
