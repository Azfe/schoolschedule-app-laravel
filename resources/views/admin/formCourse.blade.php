@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Course form</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{  $method === 'POST' ? route('admin.saveCourse') : 
                    route('admin.updateCourse') 
                    }}"> 
                        @if ($method === 'PUT')
                            <input type="hidden" name="id" value="{{$course['id']}}">
                            {{ method_field('PUT') }}
                        @endif
                        @csrf

                        Nombre
                        <input type="text" name="name" value="{{$course['name'] ?? ''}}"><br>
                        Descripción
                        <textarea name="description">{{$course['description']  ?? ''}}</textarea><br>
                        Fecha inicio
                        <input type="date" name="date_start" value="{{$course['date_start'] ?? ''}}"><br>
                        Fecha fin
                        <input type="date" name="date_end" value="{{$course['date_end']  ?? ''}}"><br>

                        <input type="submit" value="Guardar">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
