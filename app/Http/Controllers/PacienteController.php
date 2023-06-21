<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Pacientes::all();
        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'endereco' => 'required',
        ]);

        Pacientes::create($request->all());
        return redirect()->route('pacientes.index')->with('success', 'Paciente criado com sucesso!');
    }

    public function show(Pacientes $paciente)
    {
        return view('pacientes.show', compact('paciente'));
    }

    public function edit(Pacientes $paciente)
    {
        return view('pacientes.edit', compact('paciente'));
    }

    public function update(Request $request, Pacientes $paciente)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'endereco' => 'required',
        ]);

        $paciente->update($request->all());
        return redirect()->route('pacientes.index')->with('success', 'Paciente atualizado com sucesso!');
    }

    public function destroy(Pacientes $paciente)
    {
        $paciente->delete();
        return redirect()->route('pacientes.index')->with('success', 'Paciente excluído com sucesso!');
    }
}
