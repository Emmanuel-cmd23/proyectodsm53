@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? 'Ver Venta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Usuario:</strong>
                            {{ $venta->NombreUsuario }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Producto:</strong>
                            {{ $venta->NombreProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $venta->Cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $venta->Precio }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $venta->Total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
