@foreach($pokemon as $Pokemon)
    <div>
        <h3>{{ $Pokemon->nome }}</h3>
        <a href="{{ url('Pokemon/'.$pokemon->id.'/edit') }}">Edit</a>
        <form action="{{ url('Pokemon/'.$pokemon->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach