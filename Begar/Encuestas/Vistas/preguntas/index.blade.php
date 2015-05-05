@extends('layout/plantilla')

{{-- Page title --}}
@section('title')
    preguntas
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/select2.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>preguntas de la encuesta</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="18" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">preguntas</a>
            </li>
            <li class="active">preguntas</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        <!-- Second Data Table -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box default">
                    <div class="portlet-title">
                        <div class="caption"> <i  data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>


                          Encuesta {{ $encuestas->id }} : {{ $encuestas->titulo }} <br>
                            {{ $encuestas->descripcion }}


                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="btn-group">

                                    <a href="{{ route('create/pregunta', $encuestas->id) }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> Añadir pregunta</a>


                            </div>
                        <!--    <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle btn-custom" data-toggle="dropdown">
                                    Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#">Print</a>
                                    </li>
                                    <li>
                                        <a href="#">Save as PDF</a>
                                    </li>
                                    <li>
                                        <a href="#">Export to Excel</a>
                                    </li>
                                </ul>
                            </div>-->
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered " id="table">
                                <thead>
                                <tr class="filters">
                                    <th>id</th>
                                    <th>id_padre</th>
                                    <th>nombre sección</th>
                                    <th>tipo pregunta</th>
                                    <th>columna</th>
                                    <th>orden</th>
                                    <th>titulo</th>
                                    <th>pregunta</th>
                                    <th>ayuda</th>
                                    <th>obligatoria</th>
                                    <th>estilo</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($preguntas as $pregunta)
                                    <tr>
                                        <td>{{{ $pregunta->id  }}}</td>
                                        <td>{{{ $pregunta->id_padre }}}</td>
                                        <td>{{{ $pregunta->nombre }}}</td>
                                        <td>{{{ $pregunta->tipo }}}</td>
                                        <td>{{{ $pregunta->id_columna }}}</td>
                                        <td>{{{ $pregunta->orden }}}</td>
                                        <td>{{{ $pregunta->titulo }}}</td>
                                        <td>{{{ $pregunta->pregunta }}}</td>
                                        <td>{{{ $pregunta->ayuda }}}</td>
                                        <td>{{{ $pregunta->obligatoria  }}}</td>
                                        <td>{{{ $pregunta->estilo }}}</td>
                                        <td>
                                            <a href="{{ route('preguntas.update', $pregunta->id) }}"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="editar pregunta"></i></a>

                                            <a href="{{ route('confirm-delete/pregunta', $pregunta->id) }}" data-toggle="modal" data-target="#delete_confirm"><i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="borrar pregunta"></i></a>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET--> </div>
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/dataTables.bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pages/table-editable.js') }}"></script>
@stop