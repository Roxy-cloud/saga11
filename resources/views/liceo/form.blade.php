<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codigoplantel') }}
            {{ Form::text('codigoplantel', $liceo->codigoplantel, ['class' => 'form-control' . ($errors->has('codigoplantel') ? ' is-invalid' : ''), 'placeholder' => 'Codigoplantel']) }}
            {!! $errors->first('codigoplantel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $liceo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $liceo->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $liceo->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('municipio') }}
            {{ Form::text('municipio', $liceo->municipio, ['class' => 'form-control' . ($errors->has('municipio') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
            {!! $errors->first('municipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('distritofederal') }}
            {{ Form::text('distritofederal', $liceo->distritofederal, ['class' => 'form-control' . ($errors->has('distritofederal') ? ' is-invalid' : ''), 'placeholder' => 'Distritofederal']) }}
            {!! $errors->first('distritofederal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('zonaeducativa') }}
            {{ Form::text('zonaeducativa', $liceo->zonaeducativa, ['class' => 'form-control' . ($errors->has('zonaeducativa') ? ' is-invalid' : ''), 'placeholder' => 'Zonaeducativa']) }}
            {!! $errors->first('zonaeducativa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('director') }}
            {{ Form::text('director', $liceo->director, ['class' => 'form-control' . ($errors->has('director') ? ' is-invalid' : ''), 'placeholder' => 'Director']) }}
            {!! $errors->first('director', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ceduladirector') }}
            {{ Form::text('ceduladirector', $liceo->ceduladirector, ['class' => 'form-control' . ($errors->has('ceduladirector') ? ' is-invalid' : ''), 'placeholder' => 'Ceduladirector']) }}
            {!! $errors->first('ceduladirector', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>