@extends('aplicacion.layout.plantilla')

{{-- Page title --}}
@section('title')
    Lista de encuestas
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')
    <section class="content-header">
        <h1>Maestro de Encuestas</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Encuestas</li>
            <li class="active">Encuestas</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary ">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title pull-left"> <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Lista de Encuestas
                        </h4>
                        <div class="pull-right">
                            <a href="{{ route('create/encuesta') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                        </div>
                    </div>
                    <br />
                    <div class="panel-body">
                        <table class="table table-bordered " id="table">
                            <thead>
                            <tr class="filters">
                                <th>id</th>
                                <th>título</th>
                                <th>descripción</th>
                                <th>activa</th>
                                <th>fecha inicio</th>
                                <th>fecha final</th>
                                <th>url</th>
                                <th>Anónima</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($encuestas as $encuesta)
                                <tr>
                                    <td>{{{ $encuesta->id }}}</td>
                                    <td>{{{ $encuesta->titulo }}}</td>
                                    <td>{{{ $encuesta->descripcion }}}</td>
                                    <td>{{{ $encuesta->activa }}}</td>
                                    <td>{{{ $encuesta->fecha_inicio }}}</td>
                                    <td>{{{ $encuesta->fecha_fin }}}</td>
                                    <td>{{{ $encuesta->url }}}</td>
                                    <td>{{{ $encuesta->anonima }}}</td>
                                    <td>
                                        <a href="{{ route('encuestas.update', $encuesta->id) }}"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="editar encuesta"></i></a>

                                        <a href="{{ route('confirm-delete/encuesta', $encuesta->id) }}" data-toggle="modal" data-target="#delete_confirm"><i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="borrar encuesta"></i></a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </div>    <!-- row-->
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/dataTables.bootstrap.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>
    <script>
        $(function () {
            $('body').on('hidden.bs.modal', '.modal', function () {
                $(this).removeData('bs.modal');
            });
        });
    </script>
@stop