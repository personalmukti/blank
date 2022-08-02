<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', __('models/websettings.fields.id').':') !!}
    <p>{{ $websetting->id }}</p>
</div>

<!-- Website Name Field -->
<div class="col-sm-12">
    {!! Form::label('website_name', __('models/websettings.fields.website_name').':') !!}
    <p>{{ $websetting->website_name }}</p>
</div>

<!-- Website Logo Field -->
<div class="col-sm-12">
    {!! Form::label('website_logo', __('models/websettings.fields.website_logo').':') !!}
    <p>{{ $websetting->website_logo }}</p>
</div>

<!-- Website Version Field -->
<div class="col-sm-12">
    {!! Form::label('website_version', __('models/websettings.fields.website_version').':') !!}
    <p>{{ $websetting->website_version }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/websettings.fields.created_at').':') !!}
    <p>{{ $websetting->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/websettings.fields.updated_at').':') !!}
    <p>{{ $websetting->updated_at }}</p>
</div>

