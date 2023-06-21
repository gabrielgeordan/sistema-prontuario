<!-- index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pacientes</h1>
        <a href="{{ route('pacientes.create') }}" class="btn btn-primary mb-3">Cadastrar Paciente</a>
        <table class="table">
            <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Sexo</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->nome }}</td>
                    <td>{{ substr($paciente->cpf, 0, 3) }}.{{ substr($paciente->cpf, 3, 3) }}.{{ substr($paciente->cpf, 6, 3) }}-{{ substr($paciente->cpf, 9, 2) }}</td>
                    <td>{{ date('d/m/Y', strtotime($paciente->data_nascimento)) }}</td>
                    <td>{{ $paciente->sexo }}</td>
                    <td>{{ $paciente->endereco }}</td>
                    <td>{{ $paciente->telefone }}</td>
                    <td>{{ $paciente->email }}</td>
                    <td>
                        <a href="{{ route('pacientes.show', $paciente->id) }}" class="btn btn-primary">Detalhar</a>
                        <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-secondary">Editar</a>
                        <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $paciente->id }})">Excluir</button>
                        <form id="delete-form-{{ $paciente->id }}" action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(pacienteId) {
            Swal.fire({
                title: 'Confirmação de Exclusão',
                text: 'Tem certeza de que deseja excluir o paciente?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sim, excluir',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + pacienteId).submit();
                }
            });
        }
    </script>
@endsection
