@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-10 bg-gray-50">
        <div class="mb-8">
            <a href="{{ route('subcategorias.index', $subcategoria->id_categoria) }}" class="inline-flex items-center px-4 py-2 bg-blue-50 text-blue-700 rounded-full hover:bg-blue-100 transition duration-200 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Volver a Subcategorías
            </a>
        </div>

        <h1 class="text-center text-gray-800 text-3xl font-bold mb-10 relative">
            <span class="relative inline-block">
                Productos de {{ $subcategoria->nombre }}
                <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-500 rounded"></span>
            </span>
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($productos as $producto)
                <a href="{{ route('producto.show', $producto->id_producto) }}" class="group">
                    <div class="bg-white rounded-xl overflow-hidden h-full transition-all duration-300 transform group-hover:translate-y-[-8px] shadow-md group-hover:shadow-xl">
                        <div class="relative">
                            <img class="h-[220px] w-full object-cover" src="{{ $producto->imagen_url }}" alt="{{ $producto->nombre }}">
                            <div class="absolute top-3 right-3">
                                <span class="bg-white bg-opacity-90 text-blue-600 px-3 py-1 rounded-full text-sm font-medium">
                                    ${{ number_format($producto->precio_dolares, 2) }}
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h2 class="font-bold text-xl text-gray-800 mb-3 group-hover:text-blue-600 transition-colors duration-200">{{ $producto->nombre }}</h2>
                            <p class="text-gray-600 text-sm mb-4">{{ Str::limit($producto->descripcion, 100) }}</p>
                            <div class="flex justify-between items-center mt-auto">
                                <div class="flex items-center">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium {{ $producto->stock > 10 ? 'bg-green-100 text-green-800' : ($producto->stock > 0 ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                                        {{ $producto->stock > 10 ? 'Disponible' : ($producto->stock > 0 ? 'Pocas unidades' : 'Agotado') }}
                                    </span>
                                </div>
                                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
