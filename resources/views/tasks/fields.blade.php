<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label class="form-label" for="name">Name:</label>
            {{ html()->text('name')->required()->maxlength(255)->placeholder('Name')->autofocus()->class('form-control') }}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label class="form-label" for="due_date">Due date:</label>
            {{ html()->datetime('due_date')->required()->maxlength(19)->class('form-control') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            <label class="form-label" for="completed">Was completed:</label>
            {{ html()->select('completed', [0 => 'No', 1 => 'Yes'])->class('form-control') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            <label for="description" class="form-label">Description:</label>
            {{ html()->textarea('description')->class('form-control')->rows(15)->style('overflow-x: hidden') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-3">
        <div class="form-group">
            {{ html()->button('<i class="fa fa-save"></i> Save', 'submit')->class('btn btn-success btn-lg') }}
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('description');
</script>
