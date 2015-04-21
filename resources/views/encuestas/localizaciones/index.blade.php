@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Lista de localizaciones
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <h1>localizaciones</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Inicio
                </a>
            </li>
            <li>localizaciones</li>
            <li class="active">localizaciones</li>
        </ol>
    </section>

    <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary ">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title pull-left"> <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        Lista de localizaciones
                                    </h4>
                                    <div class="pull-right">
                                        <a href="{{ route('create/localizacion') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                                    </div>
                                </div>


                <br />
                <div class="panel-body">
                    <table class="table table-bordered " id="table">
                        <thead>
                        <tr class="filters">
                            <th>id</th>
                            <th>nombre localización</th>
                            <th>Creado el</th>
                            <th>Actualizado el</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($localizaciones as $localizacion)
                            <tr>
                                <td>{{{ $localizacion->id }}}</td>
                                <td>{{{ $localizacion->nombre }}}</td>
                                <td>{{{ $localizacion->created_at }}}</td>
                                <td>{{{ $localizacion->updated_at }}}</td>
                                <td>
                                    <a href="{{ route('localizaciones.update', $localizacion->id) }}"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="actualizar localizacion"></i></a>

                                    <a href="{{ route('confirm-delete/localizacion', $localizacion->id) }}" data-toggle="modal" data-target="#delete_confirm"><i class="livicon" data-name="user-remove" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="borrar localizacion"></i></a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>    <!-- row-->
            </div>
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