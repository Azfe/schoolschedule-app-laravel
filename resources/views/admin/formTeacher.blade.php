@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Teacher form</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{  $method === 'POST' ? route('admin.saveTeacher') : 
                    route('admin.updateTeacher') 
                    }}"> {{-- route('admin.saveTeacher') --}}
                        @if ($method === 'PUT')
                            <input type="hidden" name="id" value="{{$teacher['id']}}">
                            {{ method_field('PUT') }}
                        @endif
                        @csrf
                        Nombre
                        <input type="text" name="name" value="{{$teacher['name'] ?? ''}}"><br>
                        Apellidos
                        <input type="text" name="surname" value="{{$teacher['surname']  ?? ''}}"><br>
                        @if ($method === 'POST')
                        Email
                        <input type="email" name="email" value=""><br>
                        Password
                        <input type="password" name="password" value=""><br>
                        @endif
                        Telefono
                        <input type="text" name="telephone" value="{{$teacher['telephone']  ?? ''}}"><br>
                        Nif
                        <input type="text" name="nif" value="{{$teacher['nif']  ?? ''}}"><br>

                        <input type="submit" value="Guardar">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
