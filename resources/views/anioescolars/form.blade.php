<div class="box box-info padding-1">
    <div class="box-body">

    <div class="form-group">
            {{ Form::label('Institución') }}
            {{ Form::select('liceo_id', $liceos , $anioescolar->liceo_id, ['class' => 'form-control' . ($errors->has('liceo_id') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('liceo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('Año Escolar') }}
            {{ Form::text('nombreanioescolar', $anioescolar->nombreanioescolar, ['class' => 'form-control' . ($errors->has('nombreanioescolar') ? ' is-invalid' : ''), 'placeholder' => 'Nombreanioescolar' ]) }}
            {!! $errors->first('nombreanioescolar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Inicio') }}
            {{ Form::date('fechainicio', $anioescolar->fechainicio, ['class' => 'form-control' . ($errors->has('fechainicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('fechainicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fin') }}
            {{ Form::date('fechafin', $anioescolar->fechafin, ['class' => 'form-control' . ($errors->has('fechafin') ? ' is-invalid' : ''), 'placeholder' => 'Fechafin']) }}
            {!! $errors->first('fechafin', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">ENVIAR</button>
    </div>
</div>