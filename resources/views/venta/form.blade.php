<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Usuario') }}
            {{ Form::text('NombreUsuario', $venta->NombreUsuario, ['class' => 'form-control' . ($errors->has('Nombre Usuario') ? ' is-invalid' : ''), 'placeholder' => 'Nombre usuario']) }}
            {!! $errors->first('NombreUsuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre Producto') }}
            {{ Form::text('NombreProducto', $venta->NombreProducto, ['class' => 'form-control' . ($errors->has('Nombre Producto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre producto']) }}
            {!! $errors->first('NombreProducto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('Cantidad', $venta->Cantidad, ['class' => 'form-control' . ($errors->has('Cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('Precio', $venta->Precio, ['class' => 'form-control' . ($errors->has('Precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('Precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Total') }}
            {{ Form::text('Total', $venta->Total, ['class' => 'form-control' . ($errors->has('Total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('Total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>