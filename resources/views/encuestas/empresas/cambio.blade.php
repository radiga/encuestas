@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
   Seleccione la empresa
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
        <h1>Empresas</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Inicio
                </a>
            </li>
            <li>Empresas</li>
            <li class="active">Empresas</li>
        </ol>
    </section>

    <!-- Main content -->
                <section class="content">
                <div class="panel-body">

                    <form class="form-wizard form-horizontal" action="" method="POST" id="wizard" enctype="multipart/form-data">

                     <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <div class="col-sm-10">
                        <select class="form-control " title="Seleccione una empresa" name="empresas[]" id="id_empresa" required>
                            <option value="">Seleccione empresa</option>
                            @foreach ($empresas as $empresa)
                                <option value="{{{ $empresa->id }}}">{{{ $empresa->nombre }}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-success">
                            Cambiar Empresa
                        </button>

                    </div>






<!--                        <input type="submit" name="Cambiar"  value ="Cambiar" /> -->

                    </form>


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