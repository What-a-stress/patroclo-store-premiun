# patroclo-store-premiun
 Pagina Web con el curso de taller de programacion Web Laravel

# requisitos
- node js 18>= validar con node -v
- php
- instalar composer : https://getcomposer.org/

# pasos iniciales para la instalacion

- crear archivo .env con el contenido de .env.example
- configurar base de datos psql en .env (nombre bd, usuario y clave)
- ejecutar: npm install
- ejecutar: composer install
- ejecutar: php artisan key:generate
- ejecutar: php artisan migrate
- ejecutar: php artisan db:seed

# pasos para ejecutar el proyecto ( en paralelo ambas terminales)
- ejecutar en una terminal: npm run dev
- ejecutar en una terminal: php artisan serve

# comandos mas usados
- php artisan make:controller CategoriaController
- php artisan make:model Categoria

# Participante 
- Ruby Ramirez Enciso
-link del video: https://isise-my.sharepoint.com/:v:/g/personal/rramireze_isise_edu_pe/EeHP3pvVctBBhJu1rI-FZNMBjyBFaw8LwdtH3q0UGa-e6A?e=Qfcsxo&nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJTdHJlYW1XZWJBcHAiLCJyZWZlcnJhbFZpZXciOiJTaGFyZURpYWxvZy1MaW5rIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXcifX0%3D
