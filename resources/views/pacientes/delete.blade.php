<!-- delete.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Excluir Paciente</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tem certeza de que deseja excluir o paciente?</h5>
                <p class="card-text"><strong>Nome:</strong> {{ $paciente->nome }}</p>
                <p class="card-text"><strong>CPF:</strong> {{ $paciente->cpf }}</p>

                <form id="delete-form" action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                    <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
