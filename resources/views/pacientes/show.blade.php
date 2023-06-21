<!-- show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalhes do Paciente</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nome: {{ $paciente->nome }}</h5>
                <p class="card-text"><strong>CPF:</strong> {{ $paciente->cpf }}</p>
                <p class="card-text"><strong>Data de Nascimento:</strong> {{ $paciente->data_nascimento }}</p>
                <p class="card-text"><strong>Sexo:</strong> {{ $paciente->sexo }}</p>
                <p class="card-text"><strong>Endereço:</strong> {{ $paciente->endereco }}</p>
                <p class="card-text"><strong>Telefone:</strong> {{ $paciente->telefone }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $paciente->email }}</p>

                <a href="{{ route('pacientes.index') }}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
@endsection
