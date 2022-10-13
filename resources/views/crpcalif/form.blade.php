<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('momento1') }}
            {{ Form::text('momento1', $crpcalif->momento1, ['class' => 'form-control' . ($errors->has('momento1') ? ' is-invalid' : ''), 'placeholder' => 'Momento1']) }}
            {!! $errors->first('momento1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('momento2') }}
            {{ Form::text('momento2', $crpcalif->momento2, ['class' => 'form-control' . ($errors->has('momento2') ? ' is-invalid' : ''), 'placeholder' => 'Momento2']) }}
            {!! $errors->first('momento2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('momento3') }}
            {{ Form::text('momento3', $crpcalif->momento3, ['class' => 'form-control' . ($errors->has('momento3') ? ' is-invalid' : ''), 'placeholder' => 'Momento3']) }}
            {!! $errors->first('momento3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('definitiva') }}
            {{ Form::text('definitiva', $crpcalif->definitiva, ['class' => 'form-control' . ($errors->has('definitiva') ? ' is-invalid' : ''), 'placeholder' => 'Definitiva']) }}
            {!! $errors->first('definitiva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('student_id') }}
            {{ Form::text('student_id', $crpcalif->student_id, ['class' => 'form-control' . ($errors->has('student_id') ? ' is-invalid' : ''), 'placeholder' => 'Student Id']) }}
            {!! $errors->first('student_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('crp_id') }}
            {{ Form::text('crp_id', $crpcalif->crp_id, ['class' => 'form-control' . ($errors->has('crp_id') ? ' is-invalid' : ''), 'placeholder' => 'Crp Id']) }}
            {!! $errors->first('crp_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $crpcalif->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>