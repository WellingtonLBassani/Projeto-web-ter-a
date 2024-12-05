@extends('layouts.base')

@section('content')
    <form class="max-w-sm mx-auto" action="{{ url('pokemon') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">nome</label>
            <input type="text" name="nome" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-5">
            <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900">tipo</label>
            <input type="text" name="tipo" id="tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-5">
            <label for="pontosdepoder" class="block mb-2 text-sm font-medium text-gray-900">Poder</label>
            <input type="text" name="pontosdepoder" id="pontosdepoder" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-5">
            <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
            <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
        </div>
        <div class="mb-5">
            <label for="coach_id" class="block mb-2 text-sm font-medium text-gray-900">Coach</label>
            <select name="coach_id" id="coach_id" required>
                <option value="">Select a coach</option>
                @foreach ($coaches as $coach)
                    <option value="{{ $coach->id }}">{{ $coach->nome }}</option>
                @endforeach
            </select>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Create Pokemon</button>
    </form>
@endsection