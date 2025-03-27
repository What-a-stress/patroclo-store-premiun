@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-gray-50 to-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


        <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-orange-50">
            <div class="bg-orange-500 py-4 px-8 flex justify-between items-center">
                <h1 class="text-2xl font-bold text-white truncate">{{ $producto->nombre }}</h1>
                <div class="bg-white rounded-full px-4 py-1 flex items-center">
                    <span class="text-orange-700 font-bold text-lg">${{ number_format($producto->precio_dolares, 2)
                        }}</span>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-0">
                <div class="lg:col-span-5 p-8"
                    x-data="{ activeSlide: 0, totalSlides: {{ count($imagenes) > 0 ? count($imagenes) : 1 }} }">
                    <div
                        class="relative aspect-square rounded-2xl overflow-hidden border border-orange-100 mb-6 bg-orange-50">
                        @if(count($imagenes) == 0)
                        <img src="{{ $producto->imagen_url }}" alt="{{ $producto->nombre }}"
                            class="w-full h-full object-contain">
                        @else
                        @foreach($imagenes as $index => $imagen)
                        <div class="absolute inset-0 transition-all duration-300 ease-in-out transform"
                            x-show="activeSlide === {{ $index }}" x-transition:enter="opacity-0"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                            <img src="{{ $imagen->imagen_url }}" alt="{{ $producto->nombre }}"
                                class="w-full h-full object-contain p-4">
                        </div>
                        @endforeach
                        @endif

                        @if(count($imagenes) > 1)
                        <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2">
                            @foreach($imagenes as $index => $imagen)
                            <button @click="activeSlide = {{ $index }}"
                                class="w-3 h-3 rounded-full transition-all duration-200 focus:outline-none"
                                :class="activeSlide === {{ $index }} ? 'bg-orange-500' : 'bg-white border border-orange-300'">
                            </button>
                            @endforeach
                        </div>
                        @endif
                    </div>

                    @if(count($imagenes) > 1)
                    <div class="grid grid-cols-5 gap-2">
                        @foreach($imagenes as $index => $imagen)
                        <button @click="activeSlide = {{ $index }}"
                            class="aspect-square rounded-lg overflow-hidden focus:outline-none transition-all duration-200 transform hover:scale-105"
                            :class="activeSlide === {{ $index }} ? 'ring-2 ring-indigo-500' : 'ring-1 ring-gray-200'">
                            <img src="{{ $imagen->imagen_url }}" alt="Miniatura {{ $index + 1 }}"
                                class="w-full h-full object-cover">
                        </button>
                        @endforeach
                    </div>
                    @endif
                </div>

                <div class="lg:col-span-7 p-8 lg:border-l border-orange-50 bg-white">
                    <div class="flex flex-wrap gap-2 mb-6">
                        <div class="inline-flex items-center rounded-full bg-orange-50 px-3 py-1">
                            <span class="text-orange-800 text-sm font-medium">{{ $marca->nombre }}</span>
                        </div>
                        <div class="inline-flex items-center rounded-full bg-amber-50 px-3 py-1">
                            <span class="text-amber-800 text-sm font-medium">{{ $proveedor->nombre_comercial }}</span>
                        </div>
                        <div
                            class="inline-flex items-center rounded-full {{ $producto->stock > 10 ? 'bg-emerald-50 text-emerald-800' : ($producto->stock > 0 ? 'bg-amber-50 text-amber-800' : 'bg-red-50 text-red-800') }} px-3 py-1">
                            <span class="text-sm font-medium">
                                {{ $producto->stock > 10 ? 'Stock: '.$producto->stock : ($producto->stock > 0 ? 'Últimas
                                '.$producto->stock.' unidades' : 'Agotado') }}
                            </span>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-base uppercase tracking-wider text-orange-500 mb-3">Descripción</h2>
                        <div class="prose prose-orange text-gray-700">
                            <p>{{ $producto->descripcion }}</p>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-base uppercase tracking-wider text-orange-500 mb-3">Especificaciones</h2>
                        <div class="bg-orange-50 rounded-xl p-4">
                            <p class="text-gray-700">{{ $producto->especificaciones }}</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <button
                            class="w-full bg-orange-500 hover:bg-orange-600 text-white py-4 rounded-xl font-medium transition-all duration-300 flex items-center justify-center {{ $producto->stock == 0 ? 'opacity-50 cursor-not-allowed' : '' }}"
                            {{ $producto->stock == 0 ? 'disabled' : '' }}>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Agregar al carrito
                        </button>

                        @if($producto->informacion_fabricante_url)
                        <a href="{{ $producto->informacion_fabricante_url }}" target="_blank"
                            class="w-full border border-orange-200 text-orange-500 py-3 rounded-xl font-medium transition-all duration-300 flex items-center justify-center hover:bg-orange-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Ver información del fabricante
                        </a>
                        @endif
                    </div>

                    <div class="mt-8 pt-6 border-t border-orange-100">
                        <div class="flex items-center">
                            @if($marca->logo_url)
                            <img src="{{ $marca->logo_url }}" alt="{{ $marca->nombre }}" class="h-10 mr-4">
                            @endif
                            <div>
                                <p class="text-sm text-gray-500">Entrega estimada: <span
                                        class="font-medium text-gray-900">3-5 días hábiles</span></p>
                                <p class="text-sm text-gray-500">Garantía: <span class="font-medium text-gray-900">12
                                        meses por defectos de fábrica</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('productos.index', $producto->id_subcategoria) }}"
                class="inline-flex items-center text-orange-500 hover:text-orange-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                </svg>
                Regresar a la lista de productos
            </a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endsection
