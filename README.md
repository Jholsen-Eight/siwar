# SIWAR Copias e Impresiones

Sistema web backend (Laravel + PostgreSQL) para gestionar clientes, pedidos, ventas, pagos y gastos.

## Requisitos
- PHP 8.3 o superior con pdo_pgsql
- Composer 2 y PostgreSQL

## Instalación
1. git clone https://github.com/TU-USUARIO/siwar.git
2. cd siwar
3. composer install
4. copy .env.example .env   (y completar DB_PASSWORD)
5. php artisan key:generate
6. Crear la base de datos siwar en PostgreSQL
7. php artisan migrate
8. php artisan serve

Autor: Jolsen Americo Quispe Quispe