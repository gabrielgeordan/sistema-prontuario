<!-- edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Paciente</h1>

        <form action="{{ route('pacientes.update', $paciente->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $paciente->nome }}" required>
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $paciente->cpf }}" required>
            </div>

            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="{{ $paciente->data_nascimento }}" required>
            </div>

            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select class="form-control" id="sexo" name="sexo" required>
                    <option value="M" {{ $paciente->sexo === 'M' ? 'selected' : '' }}>Masculino</option>
                    <option value="F" {{ $paciente->sexo === 'F' ? 'selected' : '' }}>Feminino</option>
                </select>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <textarea class="form-control" id="endereco" name="endereco" rows="3" required>{{ $paciente->endereco }}</textarea>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $paciente->telefone }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $paciente->email }}">
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
