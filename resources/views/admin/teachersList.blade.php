@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$title}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($canEdit)
                    <a href="{{ route('admin.createTeacher') }}">Crear profesor</a> {{-- enlace a createTeacher --}}
                    @endif
                    <br> <br>
                    {{-- aquí empezaremos el listado de clases que tiene el alumno --}}
                    @foreach ($list as $user)
                        <div class="border border-dark">
                            {{ $user->name }} {{ $user->surname }} - {{$user->email}}
                            <a href="{{ 
                                route('admin.editTeacher', ['id' => $user->id]) 
                            }}">
                                @if ($canEdit)
                                    <button type="button" class="btn btn-primary">
                                        Editar
                                    </button>
                                @endif
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
