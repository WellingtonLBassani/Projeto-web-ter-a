<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="nome" required>
    <input type="text" name="tipo" placeholder="tipo" required>
    <input type="number" name="pontosdepoder" placeholder="Pontos de poder" required>
    <button type="submit">Create Pokemon</button>
</form>