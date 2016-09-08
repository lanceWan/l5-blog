

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('permissions.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
