<form action="{{ url('Pokemon/'.$pokemon->id.'') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="tipo" placeholder="tipo" required>
    <input type="number" name="Pontos de poder" placeholder="Pontos de poder" required>
    <button type="submit">Edit Pokemon</button>
</form>