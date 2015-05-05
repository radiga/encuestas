@extends('layout.plantilla')

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


{{-- Content --}}
@section('content')
    <section class="content-header">
        <h1>
            Editar sección
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Inicio
                </a>
            </li>
            <li>secciones</li>
            <li class="active">Editar sección</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary ">
                    <div class="panel-heading">
                        <h4 class="panel-title"> <i class="livicon" data-name="wrench" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Editar sección
                        </h4>
                    </div>
                    <div class="panel-body">
                        <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                        <form class="form-wizard form-horizontal" action="" method="POST" id="wizard" enctype="multipart/form-data">
                            <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />


                            <!-- first tab -->
                                    <h1>Datos Sección</h1>

                                    <section>

                                        <div class="form-group">
                                            <label for="orden" class="col-sm-2 control-label">Orden *</label>
                                            <div class="col-sm-10">
                                                <input id="orden" name="orden" type="text" placeholder="Título" class="form-control required" value="{{{ Input::old('titulo', $secciones->orden) }}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="nombre" class="col-sm-2 control-label">Nombre *</label>
                                            <div class="col-sm-10">
                                                <input id="nombre" name="nombre" type="text" placeholder="Descripción" class="form-control" value="{{{ Input::old('o', $secciones->nombre) }}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="descripcion" class="col-sm-2 control-label">Descripción *</label>
                                            <div class="col-sm-10">
                                                <input id="descripcion" name="descripcion" type="text" placeholder="Descripción" class="form-control" value="{{{ Input::old('descripcion', $secciones->nombre) }}}" />
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