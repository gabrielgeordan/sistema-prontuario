<!-- confirm-delete.blade.php -->

<h5 class="card-title">Tem certeza de que deseja excluir o paciente?</h5>
<p class="card-text"><strong>Nome:</strong> {{ $paciente->nome }}</p>
<p class="card-text"><strong>CPF:</strong> {{ $paciente->cpf }}</p>

<form id="delete-form" action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Excluir</button>
    <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
</form>

<script>
    // Adiciona um listener ao formulário de exclusão para exibir uma confirmação antes de enviar o formulário
    document.getElementById('delete-form').addEventListener('submit', function (event) {
        var confirmed = confirm('Tem certeza de que deseja excluir o paciente?');

        if (!confirmed) {
            event.preventDefault();
        }
    });
</script>
