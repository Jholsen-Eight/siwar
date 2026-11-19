@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
    <h1>Atención del día</h1>
    <p class="fecha">{{ now()->translatedFormat('l j \d\e F \d\e Y') }}</p>

    <div class="acciones">
        <a href="#" class="accion">
            <strong>Nuevo pedido</strong>
            <span>Registra un cliente, servicio y adelanto.</span>
        </a>
        <a href="#" class="accion">
            <strong>Nueva venta</strong>
            <span>Cobra servicios o productos al instante.</span>
        </a>
        <a href="#" class="accion">
            <strong>Registrar gasto</strong>
            <span>Anota insumos, pagos y otros gastos.</span>
        </a>
    </div>

    <p class="estado">
        Laravel {{ app()->version() }} · Base de datos conectada:
        <strong>{{ DB::connection()->getDatabaseName() }}</strong>
    </p>
@endsection