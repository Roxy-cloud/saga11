<div class="box box-info padding-1">
    <div class="box-body">

    <div class="form-group">
            {{ Form::label('Año Escolar') }}
            {{ Form::select('anioescolar_id',$anioescolars, $crp->anioescolar_id, ['class' => 'form-control' . ($errors->has('anioescolar_id') ? ' is-invalid' : ''), 'placeholder' => 'Año Escolar']) }}
            {!! $errors->first('anioescolar_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('Nombre del Grupo') }}
            {{ Form::text('nombre_crp', $crp->nombre_crp, ['class' => 'form-control' . ($errors->has('nombre_crp') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Grupo']) }}
            {!! $errors->first('nombre_crp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Docente') }}
            {{ Form::select('users_id',$users ,$crp->users_id, ['class' => 'form-control' . ($errors->has('users_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Docente']) }}
            {!! $errors->first('users_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</div>