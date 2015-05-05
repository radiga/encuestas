@extends('admin.layouts.default')

{{-- Page title --}}
@section('title')
    Gestión de Encuestas
@stop

{{-- page level styles --}}
@section('header_styles')
    @parent

    @section('empresa_activa')
    Empresa Activa: <b> <?php $empresa = Session::get('nombre_empresa'); echo $empresa; ?>  </b>
    @stop


    @section('menu_aplicacion')
        <!-- ******************* Menu de la aplicación ENCUESTAS  *****************-->
        <!-- *** MAESTROS ***-->

        <li {!! (Request::is('admin/maestros')|| Request::is('empresas') || Request::is('localizaciones') || Request::is('encuestas')|| Request::is('tipospreguntas')|| Request::is('encuestas/*') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Gestión Encuestas</span>
            <span class="fa arrow"></span>
        </a>
        @if (Sentry::getUser()->hasAccess('admin'))
            <ul class="sub-menu">
                <li {!! (Request::is('empresas') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('empresas') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Empresas
                </a>
                </li>
                <li {!! (Request::is('localizaciones') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('localizaciones') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Localizaciones
                </a>
                </li>

                <li {!! (Request::is('tipospreguntas') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('tipospreguntas') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Tipos de Preguntas
                </a>
                </li>

                @endif
                <li {!! (Request::is('encuestas') || Request::is('secciones/*') ||  Request::is('preguntas/*')   ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('encuestas') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Encuestas
                </a>
                </li>
            </ul>
            </li>

            <!-- MENU GESTION ENCUESTAS-->

     <!--       <li {!! (Request::is('admin/gestionempresas')|| Request::is('secciones') || Request::is('preguntas')  ? 'class="active"' : '') !!}>
            <a href="#">
                <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="list-ul" data-size="18" data-loop="true"></i>
                <span class="title">Gestión Encuestas</span>
                <span class="fa arrow"></span>
            </a>

            <ul class="sub-menu">
                <li {!! (Request::is('secciones') ? 'class="active" id="active"' : '') !!}>
                <a href="">
                    <i class="fa fa-angle-double-right"></i>
                    Secciones
                </a>
                </li>
                <li {!! (Request::is('preguntas') ? 'class="active" id="active"' : '') !!}>
                <a href="">
                    <i class="fa fa-angle-double-right"></i>
                    Preguntas
                </a>
                </li>
            </ul>
            </li>

            -->
    @stop
@stop

{{-- Page content --}}
@section('content')
    @parent
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    @parent
@stop
