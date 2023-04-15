<div class="row">
    <div class="col-md-12">
        @component('layouts.form._form_group', ['field' => 'name'])
            {{ Form::label('name', 'Nome *') }}
            {{ Form::url('name', null, ['class' => 'form-control '.($errors->has('name')?' is-invalid':''), 'maxlength' => 191, 'required' => true]) }}
            <small id="emailHelp" class="form-text text-muted">Ex: https://www.julianomonteiro.com</small>
        @endcomponent
    </div>
</div>
