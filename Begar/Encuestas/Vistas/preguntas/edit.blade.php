@extends('layout.plantilla')

{{-- Page title --}}
@section('title')
    Editar Pregunta
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
            Editar pregunta
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Inicio
                </a>
            </li>
            <li>preguntas</li>
            <li class="active">Editar pregunta</li>
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
                                    <h1>Datos Pregunta</h1>

                                    <section>


                                        <div class="form-group">
                                            <label for="id" class="col-sm-2 control-label">Id</label>
                                            <div class="col-sm-10">
                                                <input id="id" name="id" type="text" placeholder="id" class="form-control required" value="{{{ Input::old('id', $preguntas->id) }}}" />
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label for="id_padre" class="col-sm-2 control-label">Id padre*</label>
                                            <div class="col-sm-10">
                                                <input id="id_padre" name="id_padre" type="text" placeholder="id_padre" class="form-control required" value="{{{ Input::old('id_padre', $preguntas->id_padre) }}}" />
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="id_seccion" class="col-sm-2 control-label">Sección *</label>
                                            <div class="col-sm-10">
                                                <select class="form-control " title="Seleccionar sección..." name="secciones[]" id="id_seccion" required>
                                                    <option value="">Select</option>
                                                    @foreach($secciones as $seccion)
                                                        <option value="{{{ $seccion->id }}}" {{ (array_key_exists($seccion->id, $secciones) ? ' selected="selected"' : '') }}>{{ $seccion->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="id_tipo" class="col-sm-2 control-label">Tipo pregunta *</label>
                                            <div class="col-sm-10">
                                                <select class="form-control " title="Seleccionar tipo de pregunta..." name="tipos_pregunta[]" id="id_tipo" required>
                                                    <option value="">Select</option>
                                                    @foreach($tipos_preguntas as $tipo_pregunta)
                                                        <option value="{{{ $tipo_pregunta->id }}}" {{ (array_key_exists($tipo_pregunta->id, $tipos_preguntas) ? ' selected="selected"' : '') }}>{{ $tipo_pregunta->tipo }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="id_columna" class="col-sm-2 control-label">Id columna*</label>
                                            <div class="col-sm-10">
                                                <input id="id_columna" name="id_columna" type="text" placeholder="id_columna" class="form-control required" value="{{{ Input::old('id_columna', $preguntas->id_columna) }}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="orden" class="col-sm-2 control-label">orden</label>
                                            <div class="col-sm-10">
                                                <input id="orden" name="orden" type="text" placeholder="orden" class="form-control required" value="{{{ Input::old('orden', $preguntas->orden) }}}" />
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label for="orden" class="col-sm-2 control-label">Titulo</label>
                                            <div class="col-sm-10">
                                                <input id="titulo" name="titulo" type="text" placeholder="Título" class="form-control required" value="{{{ Input::old('titulo', $preguntas->titulo) }}}" />
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="orden" class="col-sm-2 control-label">pregunta</label>
                                            <div class="col-sm-10">
                                                <input id="pregunta" name="pregunta" type="text" placeholder="pregunta" class="form-control required" value="{{{ Input::old('pregunta', $preguntas->pregunta) }}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="orden" class="col-sm-2 control-label">ayuda</label>
                                            <div class="col-sm-10">
                                                <input id="ayuda" name="ayuda" type="text" placeholder="ayuda" class="form-control required" value="{{{ Input::old('ayuda', $preguntas->ayuda) }}}" />
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="activate" class="col-sm-2 control-label"> obligatoria</label>
                                            <div class="col-sm-10">
                                                <input id="obligatoria" name="activate" type="checkbox" class="pos-rel p-l-30" value="1" @if(Input::old('obligatoria', 0)) checked="checked" @endif  >
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="orden" class="col-sm-2 control-label">estilo *</label>
                                            <div class="col-sm-10">
                                                <input id="estilo" name="estilo" type="text" placeholder="estilo" class="form-control required" value="{{{ Input::old('estilo', $preguntas->estilo) }}}" />
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