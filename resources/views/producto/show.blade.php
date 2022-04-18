@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Ver Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Producto:</strong>
                            {{ $producto->NombreProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Producto:</strong>
                            {{ $producto->PrecioProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $producto->imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
