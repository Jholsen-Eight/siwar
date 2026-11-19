<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Inicio') · {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@600;800&family=Figtree:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --papel: #F1F3F6;
            --tinta: #151B2B;
            --cian: #00A3D9;
            --magenta: #E4007C;
            --amarillo: #FFD400;
            --linea: #D9DEE7;
        }
        * { box-sizing: border-box; margin: 0; }
        body {
            font-family: 'Figtree', system-ui, sans-serif;
            background: var(--papel);
            color: var(--tinta);
            min-height: 100vh;
            display: flex;
            border-top: 8px solid transparent;
            border-image: linear-gradient(90deg,
                var(--cian) 0 25%, var(--magenta) 25% 50%,
                var(--amarillo) 50% 75%, var(--tinta) 75% 100%) 1;
        }
        .lateral {
            width: 250px; flex-shrink: 0;
            background: var(--tinta); color: #fff;
            padding: 1.75rem 1.25rem;
            display: flex; flex-direction: column; gap: 2rem;
        }
        .marca { font-family: 'Bricolage Grotesque', sans-serif; font-weight: 800; font-size: 2rem; line-height: 1; }
        .marca small { display: block; margin-top: .4rem; font: 500 .85rem 'Figtree', sans-serif; color: #A9B3C7; }
        .lateral nav { display: flex; flex-direction: column; gap: .25rem; }
        .lateral a {
            color: #D5DBE8; text-decoration: none;
            padding: .65rem .85rem; border-radius: 6px;
            border-left: 4px solid transparent;
        }
        .lateral a:hover { background: #222B42; color: #fff; }
        .lateral a.activo { background: #222B42; color: #fff; border-left-color: var(--amarillo); font-weight: 600; }
        .contenido { flex: 1; padding: 2.5rem clamp(1.25rem, 4vw, 3.5rem); max-width: 1000px; }
        h1 { font-family: 'Bricolage Grotesque', sans-serif; font-weight: 800; font-size: clamp(2rem, 4vw, 3rem); line-height: 1.1; }
        .fecha { color: #5B6579; margin-top: .5rem; }
        .acciones { display: grid; grid-template-columns: repeat(auto-fit, minmax(210px, 1fr)); gap: 1rem; margin-top: 2rem; }
        .accion {
            background: #fff; border: 1px solid var(--linea);
            border-top: 6px solid var(--cian);
            border-radius: 4px; padding: 1.25rem;
            text-decoration: none; color: inherit;
        }
        .accion:nth-child(2) { border-top-color: var(--magenta); }
        .accion:nth-child(3) { border-top-color: var(--amarillo); }
        .accion strong { display: block; font: 800 1.2rem 'Bricolage Grotesque', sans-serif; }
        .accion span { color: #5B6579; font-size: .95rem; }
        .accion:hover { border-color: var(--tinta); }
        .estado { margin-top: 2.5rem; color: #5B6579; font-size: .9rem; }
        a:focus-visible { outline: 3px solid var(--cian); outline-offset: 2px; }
        @media (max-width: 760px) {
            body { flex-direction: column; }
            .lateral { width: 100%; gap: 1rem; padding: 1rem; }
            .lateral nav { flex-direction: row; flex-wrap: wrap; }
        }
    </style>
</head>
<body>
    <aside class="lateral">
        <div class="marca">SIWAR<small>Copias e impresiones</small></div>
        <nav>
            <a href="{{ route('inicio') }}" class="{{ request()->routeIs('inicio') ? 'activo' : '' }}">Inicio</a>
            <a href="#">Clientes</a>
            <a href="#">Servicios</a>
            <a href="#">Productos</a>
            <a href="#">Pedidos</a>
            <a href="#">Ventas</a>
            <a href="#">Gastos</a>
        </nav>
    </aside>

    <main class="contenido">
        @yield('contenido')
    </main>
</body>
</html>