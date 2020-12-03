<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            {!! Form::text('nombres',null,$attributes=['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Identidad</label>
            {!! Form::text('identidad',null,$attributes=['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Fecha Nacimiento</label>
            {!! Form::date('fecha_nacimiento',null,$attributes=['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Etnia</label>
            @if ($model)
            <select-combustibles :selected="{{ $model->etnia}}" url="/api-app/etnias" nombre="etnia_id" label="etnia" />
            @else
            <select-combustibles url="/api-app/etnias" nombre="etnia_id" label="etnia" />
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Cooperativa</label>
            @if ($model)
            <select-combustibles :selected="{{ $model->cooperativa}}" url="/api-app/cooperativas" nombre="cooperativa_id" label="cooperativa" />
            @else
            <select-combustibles url="/api-app/cooperativas" nombre="cooperativa_id" label="cooperativa" />
            @endif
        </div>
    </div>
    <div class="col-lg-6">

        <div class="form-group">
            <label for="exampleInputEmail1">Apellidos</label>
            {!! Form::text('apellidos',null,$attributes=['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Teléfono</label>
            {!! Form::text('telefono',null,$attributes=['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Celular</label>
            {!! Form::text('celular',null,$attributes=['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Sexo</label>
            @if ($model)
            <select-combustibles :selected="{{ $model->sexo}}" url="/api-app/sexos" nombre="sexo_id" label="sexo" />
            @else
            <select-combustibles url="/api-app/sexos" nombre="sexo_id" label="sexo" />
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Barrio</label>
            @if ($model)
            <select-combustibles :selected="{{ $model->barrio}}" url="/api-app/barrios" nombre="barrio_id" label="barrio" />
            @else
            <select-combustibles url="/api-app/barrios" nombre="barrio_id" label="barrio" />
            @endif
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Dirección</label>
            {!! Form::text('direccion',null,$attributes=['class' => 'form-control']) !!}
        </div>
    </div>
</div>
