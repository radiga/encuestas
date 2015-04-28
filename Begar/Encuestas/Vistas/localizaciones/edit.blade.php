@extends('layout.plantilla')

{{-- Web site Title --}}
@section('title')
Editar localizacion
@parent
@stop

{{-- Content --}}
@section('content')
<section class="content-header">
    <h1>
        Editar localizacion
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Inicio
            </a>
        </li>
        <li>localizaciones</li>
        <li class="active">Editar localizacion</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="wrench" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Editar localizacion
                    </h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        
                        <div class="form-group {{ $errors->
                            first('nombre', 'has-error') }}">
                            <label for="title" class="col-sm-2 control-label">
                                Nombre de la localizacion
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre localizacion" value="{{{ Input::old('nombre', $localizaciones->
                                nombre) }}}">
                            </div>
                            <div class="col-sm-4">
                                {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <a class="btn btn-danger" href="{{ route('localizaciones') }}">
                                    @lang('button.cancel')
                                </a>
                                <button type="submit" class="btn btn-success">
                                    @lang('button.save')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row-->
</section>

@stop