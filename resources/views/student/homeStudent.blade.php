@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clases programadas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- aquí empezaremos el listado de clases que tiene el alumno --}}
                    Aquí ira un listado de las clases
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
