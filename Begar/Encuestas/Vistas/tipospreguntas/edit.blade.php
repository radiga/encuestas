@extends('aplicacion.layout.plantilla')

{{-- Page title --}}
@section('title')
    Editar Tipos de Pregunta
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
        <h1>Editar Tipos de Pregunta</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Inicio
                </a>
            </li>
            <li>Users</li>
            <li class="active">Añadir nuevos tipos de pregunta</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <i class="livicon" data-name="users" data-size="16" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Editando Tipos de Pregunta : {{{ $tipospreguntas->nombre}}}
                        </h3>
                    <span class="pull-right clickable">
                        <i class="glyphicon glyphicon-chevron-up"></i>
                    </span>
                    </div>
                    <div class="panel-body">

                        <!-- errors -->
                        <div class="has-error">
                            {!! $errors->first('tipo', '<span class="help-block">:message</span>') !!}
                            {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                            {!! $errors->first('estilo', '<span class="help-block">:message</span>') !!}
                        </div>

                        <!--main content-->
                        <div class="row">

                            <div class="col-md-12">

                                <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                <form class="form-wizard form-horizontal" action="" method="POST" id="wizard" enctype="multipart/form-data">
                                    <!-- CSRF Token -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                    <!-- first tab -->
                                    <h1>Datos Tipos de Pregunta</h1>

                                    <section>

                                        <div class="form-group">
                                            <label for="tipo" class="col-sm-2 control-label">Título *</label>
                                            <div class="col-sm-10">
                                                <input id="tipo" name="tipo" type="text" placeholder="Título" class="form-control required" value="{{{ Input::old('tipo', $tipospreguntas->tipo) }}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="nombre" class="col-sm-2 control-label">Nombre *</label>
                                            <div class="col-sm-10">
                                                <input id="nombre" name="nombre" type="text" placeholder="Descripción" class="form-control" value="{{{ Input::old('nombre', $tipospreguntas->nombre) }}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="estilo" class="col-sm-2 control-label">Estilo * </label>
                                            <div class="col-sm-10">
                                                <input id="estilo" name="estilo" placeholder="estilo" type="text" class="form-control" value="{{{ Input::old('estilo', $tipospreguntas->estilo) }}}" />
                                            </div>
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