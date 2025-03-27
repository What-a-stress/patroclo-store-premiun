@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10 bg-gray-50">
    <div class="mb-8">
        <a href="{{ route('categorias.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-50 text-blue-700 rounded-full hover:bg-blue-100 transition duration-200 font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Volver a Categorías
        </a>
    </div>

    <h1 class="text-center text-gray-800 text-3xl font-bold mb-10 relative">
        <span class="relative inline-block">
            Subcategorías de {{ $categoria->nombre }}
            <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-500 rounded"></span>
        </span>
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
        @foreach($subcategorias as $subcategoria)
            <a href="{{ route('productos.index', $subcategoria->id_subcategoria) }}" class="group">
                <div class="bg-white rounded-xl overflow-hidden transition-all duration-300 transform group-hover:translate-y-[-8px] shadow-md group-hover:shadow-xl">
                    <div class="relative">
                        <img class="h-[220px] w-full object-cover" src="{{ $subcategoria->imagen_url }}" alt="{{ $subcategoria->nombre }}">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6">
                        <h2 class="font-bold text-xl text-gray-800 group-hover:text-blue-600 transition-colors duration-200 text-center">{{ $subcategoria->nombre }}</h2>
                        <div class="flex justify-center mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="inline-flex items-center text-blue-600 font-medium">
                                Ver productos
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
