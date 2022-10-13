<div class="box box-info padding-1">
    <div class="box-body">

    <div class="form-group">
            {{ Form::label('Sección') }}
            {{ Form::select('seccion_id', $seccions ,$signature->seccion_id, ['class' => 'form-control' . ($errors->has('seccion_id') ? ' is-invalid' : ''), 'placeholder' => 'Sección']) }}
            {!! $errors->first('seccion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('Nombre de Asignatura') }}
            {{ Form::text('nombre', $signature->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Abreviatura') }}
            {{ Form::text('abreviatura', $signature->abreviatura, ['class' => 'form-control' . ($errors->has('abreviatura') ? ' is-invalid' : ''), 'placeholder' => 'Abreviatura']) }}
            {!! $errors->first('abreviatura', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Docente') }}
            {{ Form::select('user_id', $users,$signature->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos y Nombres del Docente']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>