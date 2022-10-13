<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
            {{ Form::label('Año/Grado') }}
            {{ Form::select('seccion_id', $seccions,$student->seccion_id, ['class' => 'form-control' . ($errors->has('seccion_id') ? ' is-invalid' : ''), 'placeholder' => 'Seccion Id']) }}
            {!! $errors->first('seccion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Cédula') }}
            {{ Form::text('cedula', $student->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('apellidos', $student->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('nombres', $student->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Lugar de Nacimiento') }}
            {{ Form::text('lugarnac', $student->lugarnac, ['class' => 'form-control' . ($errors->has('lugarnac') ? ' is-invalid' : ''), 'placeholder' => 'Lugarnac']) }}
            {!! $errors->first('lugarnac', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('estadonac', $student->estadonac, ['class' => 'form-control' . ($errors->has('estadonac') ? ' is-invalid' : ''), 'placeholder' => 'Estadonac']) }}
            {!! $errors->first('estadonac', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Nacimiento') }}
            {{ Form::date('fechanac', $student->fechanac, ['class' => 'form-control' . ($errors->has('fechanac') ? ' is-invalid' : ''), 'placeholder' => 'Fechanac']) }}
            {!! $errors->first('fechanac', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sexo') }}
            {{ Form::text('sexo', $student->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>



    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>