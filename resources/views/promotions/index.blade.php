@extends('layout.app')

@section('title', 'List Promotions')

@section('content')
<div class="max-w-5xl mx-auto bg-gray-100 p-8 rounded-lg shadow-lg">
    <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">🔥 Latest Promotions 🔥</h1>

    <div class="flex justify-end">
        <a href="{{route('promotions.create')}}" class="bg-gradient-to-r from-purple-500 to-blue-500 text-white px-5 py-3 rounded-lg shadow-md hover:opacity-80 transition duration-300">
            ➕ Add Promotion
        </a>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        @foreach($promotions as $promotion)
        <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-2xl transition duration-300"> 
            <img src="{{asset($promotion->image)}}" class="w-full h-52 object-cover rounded-lg" alt="{{ $promotion->title }}">
            
            <div class="mt-4">
                <h2 class="text-xl font-semibold text-gray-800">{{ $promotion->title }}</h2>
                <p class="text-gray-600 mt-2 line-clamp-2">{{ $promotion->description }}</p>
            </div>

            <div class="mt-4 flex justify-between items-center">
                <a href="{{ route('promotions.show', $promotion->id) }}" class="text-blue-600 font-semibold hover:text-blue-800 transition duration-300">
                    🔍 View Details
                </a>
            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection
