@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Editando datos de la persona</h1>
        @foreach ($errors->all() as $error)
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Holy guacamole!</strong> {{ $error }}
        </div>
        @endforeach

        {!! Form::model($model, ['route' => ['persona.update', $model->id],'method'=>'patch']) !!}
        @include('app.personas.fieldsPersonas')
        {!! Form::submit('Actualizar') !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection
