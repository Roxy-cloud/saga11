<div class="box box-info padding-1">
    <div class="box-body">

    <div class="form-group">
            {{ Form::label('Año Escolar') }}
            {{ Form::select('anioescolar_id', $anioescolars,$seccion->anioescolar_id, ['class' => 'form-control' . ($errors->has('anioescolar_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Año Escolar']) }}
            {!! $errors->first('anioescolar_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('Nombre de Grado') }}
            {{ Form::text('nombre_grado', $seccion->nombre_grado, ['class' => 'form-control' . ($errors->has('nombre_grado') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Grado']) }}
            {!! $errors->first('nombre_grado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Año/Grado') }}
            {{ Form::text('grado', $seccion->grado, ['class' => 'form-control' . ($errors->has('grado') ? ' is-invalid' : ''), 'placeholder' => 'Grado']) }}
            {!! $errors->first('grado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sección') }}
            {{ Form::text('seccion', $seccion->seccion, ['class' => 'form-control' . ($errors->has('seccion') ? ' is-invalid' : ''), 'placeholder' => 'Seccion']) }}
            {!! $errors->first('seccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</div>