<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Producto') }}
            {{ Form::text('NombreProducto', $producto->NombreProducto, ['class' => 'form-control' . ($errors->has('Nombre Producto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre producto']) }}
            {!! $errors->first('NombreProducto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio Producto') }}
            {{ Form::text('PrecioProducto', $producto->PrecioProducto, ['class' => 'form-control' . ($errors->has('Precio Producto') ? ' is-invalid' : ''), 'placeholder' => 'Precio producto']) }}
            {!! $errors->first('PrecioProducto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $producto->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $producto->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt50">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>