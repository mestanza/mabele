@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1>Lista de Usuarios</h1>
        </div>
        <div class="col-md-2">
        <a class="btn btn-sm btn-success" href="{{ route('user.create')}}">Crear nuevo usuarios</a>
        </div>
    </div>

    @if( $message = Session::get('success'))
        <div class="alert al alert-success">
            <p>{{ @message }}</p>
        </div>    
    @endif

    <table class="table table-hover table-sm table-light table-bordered table-striped">
        <tr>
            <th width='50px' style="text-align: center"><b>Num</b></th>
            <th width='300px' style="text-align: center"><b>Nombre</b></th>
            <th width='300px' style="text-align: center"><b>Email</b></th>
            <th width='100px' style="text-align: center"><b>Permiso</b></th>
            <th style="text-align: center">Acciones</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td style="text-align: center"><b>{{ ++$i }}</b></td>
                <td style="text-align: center">{{ $user->name}}</td>
                <td style="text-align: center">{{ $user->email}}</td>
                <td style="text-align: center">
                @if( $user->isAdmin = 1)
                    Es Admin
                
                @else
                    No es Admin
                @endif
                </td>
                <td style="text-align: center">
                <form action="{{ route('user.destroy', $user->id) }}" method="post">
                    <a class="btn btn-sm btn-warning" href="{{ route('user.edit', $user->id) }}">Editar Usuario</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Borrar Usuario</button>
                </form>
                </td>
            </tr>    
        @endforeach
    </table>
    {!! $users->links() !!}
</div>
@endsection