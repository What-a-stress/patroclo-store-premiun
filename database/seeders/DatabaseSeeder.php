<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $categorias = [
            [
                'nombre' => 'Moda',
                'imagen_url' => '/img/CategoriaModa.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
        ];

        foreach ($categorias as $categoria) {
            DB::table('categorias')->insert($categoria);
        }

        $subcategorias = [
            [
                'id_categoria' => 1,
                'nombre' => 'Camisetas',
                'imagen_url' => '/img/camisetas.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
        ];

        foreach ($subcategorias as $subcategoria) {
            DB::table('subcategorias')->insert($subcategoria);
        }

        $marcas = [
            [
                'nombre' => 'Nike',
                'codigo_pais' => 'US',
                'logo_url' => '/img/nikelogo.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'nombre' => 'Adidas',
                'codigo_pais' => 'DE',
                'logo_url' => '/img/adidaslogo.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'nombre' => 'Zara',
                'codigo_pais' => 'ES',
                'logo_url' => '/img/zaralogo.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'nombre' => 'H&M',
                'codigo_pais' => 'SE',
                'logo_url' => '/img/hmlogo.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'nombre' => 'Gucci',
                'codigo_pais' => 'IT',
                'logo_url' => '/img/guccilogo.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
        ];

        foreach ($marcas as $marca) {
            DB::table('marcas')->insert($marca);
        }

        $proveedores = [
            [
                'nombre_comercial' => 'ModaTotal E.I.R.L.',
                'tipo_documento' => 'R',
                'numero_documento' => '20123456789',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'nombre_comercial' => 'FashionImport S.A.',
                'tipo_documento' => 'R',
                'numero_documento' => '20987654321',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
        ];

        foreach ($proveedores as $proveedor) {
            DB::table('proveedores')->insert($proveedor);
        }

        $productos = [
            [
                'id_subcategoria' => 1,
                'id_marca' => 1,
                'id_proveedor' => 1,
                'codigo' => 'NK-TS21',
                'nombre' => 'Camiseta Nike Sportswear',
                'descripcion' => 'Camiseta deportiva de algodón con logo Nike',
                'especificaciones' => '100% algodón, tallas disponibles: S, M, L, XL',
                'precio_dolares' => 29.99,
                'stock' => 100,
                'imagen_url' => '/img/nike.png',
                'informacion_fabricante_url' => 'https://www.nike.com',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'id_subcategoria' => 1,
                'id_marca' => 2,
                'id_proveedor' => 1,
                'codigo' => 'AD-TS15',
                'nombre' => 'Camiseta Adidas Originals',
                'descripcion' => 'Camiseta clásica con las tres tiras de Adidas',
                'especificaciones' => '90% algodón, 10% elastano, tallas disponibles: XS, S, M, L, XL',
                'precio_dolares' => 34.99,
                'stock' => 80,
                'imagen_url' => '/img/adidas.png',
                'informacion_fabricante_url' => 'https://www.adidas.com',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'id_subcategoria' => 1,
                'id_marca' => 3,
                'id_proveedor' => 2,
                'codigo' => 'ZR-TS08',
                'nombre' => 'Camiseta Zara Básica',
                'descripcion' => 'Camiseta básica de corte recto',
                'especificaciones' => '100% algodón orgánico, tallas disponibles: XS, S, M, L, XL, XXL',
                'precio_dolares' => 19.99,
                'stock' => 150,
                'imagen_url' => '/img/zara.png',
                'informacion_fabricante_url' => 'https://www.zara.com',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'id_subcategoria' => 1,
                'id_marca' => 4,
                'id_proveedor' => 2,
                'codigo' => 'HM-TS12',
                'nombre' => 'Camiseta H&M Premium',
                'descripcion' => 'Camiseta premium de algodón pima',
                'especificaciones' => '100% algodón pima, tallas disponibles: S, M, L',
                'precio_dolares' => 24.99,
                'stock' => 75,
                'imagen_url' => '/img/hm.png',
                'informacion_fabricante_url' => 'https://www.hm.com',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'id_subcategoria' => 1,
                'id_marca' => 5,
                'id_proveedor' => 2,
                'codigo' => 'GC-TS03',
                'nombre' => 'Camiseta Gucci Logo',
                'descripcion' => 'Camiseta de lujo con logo Gucci bordado',
                'especificaciones' => '95% algodón, 5% elastano, hecho en Italia, tallas disponibles: S, M, L',
                'precio_dolares' => 350.00,
                'stock' => 25,
                'imagen_url' => '/img/gucci.png',
                'informacion_fabricante_url' => 'https://www.gucci.com',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
        ];

        foreach ($productos as $producto) {
            DB::table('productos')->insert($producto);
        }

        $producto_imagenes = [
            [
                'id_producto' => 1,
                'imagen_url' => '/img/nike-camiseta1.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'id_producto' => 1,
                'imagen_url' => '/img/nike-camiseta2.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'id_producto' => 2,
                'imagen_url' => '/img/adidas-camiseta1.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'id_producto' => 2,
                'imagen_url' => '/img/adidas-camiseta2.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'id_producto' => 3,
                'imagen_url' => '/img/zara-camiseta1.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'id_producto' => 3,
                'imagen_url' => '/img/zara-camiseta2.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'id_producto' => 4,
                'imagen_url' => '/img/hm-camiseta1.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'id_producto' => 4,
                'imagen_url' => '/img/hm-camiseta2.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'id_producto' => 5,
                'imagen_url' => '/img/gucci-camiseta1.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
            [
                'id_producto' => 5,
                'imagen_url' => '/img/gucci-camiseta2.png',
                'estado_auditoria' => 'A',
                'fecha_creacion_auditoria' => now(),
            ],
        ];

        foreach ($producto_imagenes as $imagen) {
            DB::table('producto_imagenes')->insert($imagen);
        }
    }
}
