<!-- Website Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website_name', __('models/websettings.fields.website_name').':') !!}
    {!! Form::text('website_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Logo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website_logo', __('models/websettings.fields.website_logo').':') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('website_logo', ['class' => 'custom-file-input']) !!}
            {!! Form::label('website_logo', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Website Version Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website_version', __('models/websettings.fields.website_version').':') !!}
    {!! Form::text('website_version', null, ['class' => 'form-control']) !!}
</div>