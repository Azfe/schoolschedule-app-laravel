@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edición de los datos personales</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('home.saveProfile') }}">
                        {{ method_field('PUT') }}
                        @csrf
                        Nombre
                        <input type="text" name="name" value="{{$user->name}}"><br>
                        Apellidos
                        <input type="text" name="surname" value="{{$user->surname}}"><br>
                        Telefono
                        <input type="text" name="telephone" value="{{$user->telephone}}"><br>
                        Nif
                        <input type="text" name="nif" value="{{$user->nif}}"><br>

                        <input type="submit" value="Actalizar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
