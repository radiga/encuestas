@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Editar Encuesta
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/wizard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/wizard/jquery-steps/css/jquery.steps.css') }}">
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" />
    <!--end of page level css-->
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>Editar encuesta</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Inicio
                </a>
            </li>
            <li>Users</li>
            <li class="active">Añadir nueva encuesta</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <i class="livicon" data-name="users" data-size="16" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Editando encuesta : {{{ $encuestas->titulo}}}
                        </h3>
                    <span class="pull-right clickable">
                        <i class="glyphicon glyphicon-chevron-up"></i>
                    </span>
                    </div>
                    <div class="panel-body">

                        <!-- errors -->
                        <div class="has-error">
                            {!! $errors->first('titulo', '<span class="help-block">:message</span>') !!}
                            {!! $errors->first('descripcion', '<span class="help-block">:message</span>') !!}

                        </div>

                        <!--main content-->
                        <div class="row">

                            <div class="col-md-12">

                                <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                <form class="form-wizard form-horizontal" action="" method="POST" id="wizard" enctype="multipart/form-data">
                                    <!-- CSRF Token -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                    <!-- first tab -->
                                    <h1>Datos Encuesta</h1>

                                    <section>

                                        <div class="form-group">
                                            <label for="titulo" class="col-sm-2 control-label">Título *</label>
                                            <div class="col-sm-10">
                                                <input id="titulo" name="titulo" type="text" placeholder="Título" class="form-control required" value="{{{ Input::old('titulo', $encuestas->titulo) }}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
                                            <div class="col-sm-10">
                                                <input id="descripcion" name="descripcion" type="text" placeholder="Descripción" class="form-control" value="{{{ Input::old('descripcion', $encuestas->descripcion) }}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="url" class="col-sm-2 control-label">url </label>
                                            <div class="col-sm-10">
                                                <input id="url" name="url" placeholder="url" type="text" class="form-control" value="{{{ Input::old('url', $encuestas->url) }}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="fecha_inicio" class="col-sm-2 control-label">Fecha Inicio</label>
                                            <div class="col-sm-10">
                                                <input id="fecha_inicio" name="fecha_inicio" type="text" class="form-control" data-mask="9999-99-99" value="{{{ Input::old('fecha_inicio', $encuestas->fecha_inicio) }}}" placeholder="yyyy-mm-dd" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="fecha_fin" class="col-sm-2 control-label">Fecha Fin</label>
                                            <div class="col-sm-10">
                                                <input id="fecha_fin" name="fecha_fin" type="text" class="form-control" data-mask="9999-99-99" value="{{{ Input::old('fecha_fin', $encuestas->fecha_fin) }}}" placeholder="yyyy-mm-dd" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="activa" class="col-sm-2 control-label"> Activa</label>
                                            <div class="col-sm-10">
                                                <input id="activa" name="activa" type="checkbox" class="pos-rel p-l-30" value="1" @if(Input::old('activa', $encuestas->activa)) checked="checked" @endif  >
                                            </div>
                                            <!--<span>If user is not activated, mail will be sent to user with activation link</span>-->
                                        </div>


                                        <div class="form-group">
                                            <label for="anonima" class="col-sm-2 control-label"> Anónima</label>
                                            <div class="col-sm-10">
                                                <input id="anonima" name="anonima" type="checkbox" class="pos-rel p-l-30" value="1" @if(Input::old('anonima', $encuestas->anonima)) checked="checked" @endif  >
                                            </div>
                                            <!--<span>If user is not activated, mail will be sent to user with activation link</span>-->
                                        </div>


                                        <p>(*) Obligatorio</p>

                                    </section>


                                </form>
                                <!-- END FORM WIZARD WITH VALIDATION -->
                            </div>
                        </div>
                        <!--main content end-->
                    </div>
                </div>
            </div>
        </div>
        <!--row end-->
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.steps.js') }}"></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/pages/add_user.js') }}"></script>
@stop