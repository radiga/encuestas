@extends('layout.plantilla')

{{-- Page title --}}
@section('title')
    Crear Encuesta
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
        <h1>Añsdir nueva seccion</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Inicio
                </a>
            </li>
            <li>Encuestas</li>
            <li class="active">Crear nueva sección</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <i class="livicon" data-name="encuestas" data-size="16" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                            Crear nueva sección
                        </h3>
                    <span class="pull-right clickable">
                        <i class="glyphicon glyphicon-chevron-up"></i>
                    </span>
                    </div>
                    <div class="panel-body">

                        <!-- errors -->
                        <div class="has-error">
                            {!! $errors->first('orden', '<span class="help-block">:message</span>') !!}
                            {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                            {!! $errors->first('descripción', '<span class="help-block">:message</span>') !!}
                        </div>

                        <!--main content-->
                        <div class="row">

                            <div class="col-md-12">

                                {{ $id_encuesta = Input::get('id_encuesta') }}

                                <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                <form class="form-wizard form-horizontal" action="{{ route('create/seccion'),$id_encuesta }}" method="POST" id="wizard" enctype="multipart/form-data">
                                    <!-- CSRF Token -->
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />


                                    <!-- first tab -->
                                    <h1>Datos Sección</h1>

                                    <section>

                                        <div class="form-group">
                                            <label for="orden" class="col-sm-2 control-label">Orden *</label>
                                            <div class="col-sm-10">
                                                <input id="orden" name="orden" type="text" placeholder="orden" class="form-control required" value="{{{ Input::old('orden') }}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                                            <div class="col-sm-10">
                                                <input id="nombre" name="nombre" type="text" placeholder="nombre" class="form-control" value="{{{ Input::old('nombre') }}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="Descripcion" class="col-sm-2 control-label">Descripción </label>
                                            <div class="col-sm-10">
                                                <input id="descripcion" name="descripcion" placeholder="descripcion" type="text" class="form-control" value="{{{ Input::old('descripcion') }}}" />
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