
@extends('layout.app')

@section('title', $promotion->title)

@section('content')
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ asset('storage/' . $promotion->image) }}" alt="{{ $promotion->title }}" class="w-full h-64 md:h-96 object-cover">
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $promotion->title }}</h1>
            <div class="prose max-w-none">
                <p class="text-gray-700">{{ $promotion->description }}</p>
            </div>
            <div class="mt-6 flex space-x-4">
                <a href="{{ route('promotions.edit', $promotion->id) }}" class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition duration-300">
                    Edit
                </a>
                <form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300" onclick="return confirm('Apakah Anda yakin ingin menghapus promosi ini?')">
                        Hapus
                    </button>
                </form>
                <a href="{{ route('promotions.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    Kembali
                </a>
            </div>
        </div>
    </div>
@endsection