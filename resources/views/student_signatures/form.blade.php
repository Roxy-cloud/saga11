<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('student_id') }}
            {{ Form::text('student_id', $studentSignature->student_id, ['class' => 'form-control' . ($errors->has('student_id') ? ' is-invalid' : ''), 'placeholder' => 'Student Id']) }}
            {!! $errors->first('student_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('signature_id') }}
            {{ Form::text('signature_id', $studentSignature->signature_id, ['class' => 'form-control' . ($errors->has('signature_id') ? ' is-invalid' : ''), 'placeholder' => 'Signature Id']) }}
            {!! $errors->first('signature_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>