@extends('layouts.base')

@section('content')
    <form class="max-w-sm mx-auto" action="{{ url('pokemon/'.$pokemon->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ $pokemon->nome }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-5">
            <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900">Tipo</label>
            <input type="text" name="tipo" id="type" value="{{ $pokemon->tipo }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-5">
            <label for="pontosdepoder" class="block mb-2 text-sm font-medium text-gray-900">Poder</label>
            <input type="text" name="pontosdepoder" id="pontosdepoder" value="{{ $pokemon->pontosdepoder }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-5">
            <img src="{{ asset($pokemon->image) }}" alt="">
            <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
            <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>
        <div class="mb-5">
            <label for="coach_id" class="block mb-2 text-sm font-medium text-gray-900">Coach</label>
            <select name="coach_id" id="coach_id" required>
                <option value="">Select a coach</option>
                @foreach ($coaches as $coach)
                    @if($coach->id === $pokemon->coach->id)
                        <option value="{{ $coach->id }}" selected>{{ $coach->name }}</option>
                    @else
                        <option value="{{ $coach->id }}">{{ $coach->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Update Pokemon</button>
    </form>

@endsection