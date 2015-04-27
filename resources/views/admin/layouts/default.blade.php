<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
        Aplicación Begar
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome-4.2.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/styles/black.css') }}" rel="stylesheet" type="text/css" id="colorscheme" />
    <link rel="stylesheet" href="{{ asset('assets/css/panel.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}" />
    
    <!-- end of global css -->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>

<body class="skin-josh">
    <header class="header">
        <div>

                 Empresa Activa:
             <b>
            <?php
            $empresa = Session::get('nombre_empresa');
            echo $empresa;
            ?>
                 
                </b>
        </div>

        <a href="{{ URL::to('admin/index') }}" class="logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
        </a>


        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>

            </div>

            <div class="navbar-right">
                <ul class="nav navbar-nav">

                    <li class="dropdown user user-menu">


                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img data-src="holder.js/35x35/#fff:#000" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">


                            <div class="riot">
                                <div>
                                    {{ Sentry::getUser()->first_name }} {{ Sentry::getUser()->last_name }}
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>


                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img data-src="holder.js/90x90/#fff:#000" class="img-responsive img-circle" alt="User Image">
                                <p class="topprofiletext">{{ Sentry::getUser()->first_name }} {{ Sentry::getUser()->last_name }}</p>
                            </li>
                            <!-- Menu Body -->
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="user" data-s="18"></i>
                                    Mi perfil
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="gears" data-s="18"></i>
                                    Configuración cuenta
                                </a>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ URL::to('admin/lockscreen') }}">
                                        <i class="livicon" data-name="lock" data-s="18"></i>
                                        Bloquear
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ URL::to('admin/logout') }}">
                                        <i class="livicon" data-name="sign-out" data-s="18"></i>
                                       Salir
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar purplebg">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                        <ul class="sidebar_threeicons">
                            <li>
                                <a href="{{ URL::to('') }}">
                                    <i class="livicon" data-name="hammer" title="Form Builder 1" data-loop="true" data-color="#42aaca" data-hc="#42aaca" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('') }}">
                                    <i class="livicon" data-name="list-ul" title="Form Builder 2" data-loop="true" data-color="#e9573f" data-hc="#e9573f" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('') }}">
                                    <i class="livicon" data-name="vector-square" title="Button Builder" data-loop="true" data-color="#f6bb42" data-hc="#f6bb42" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('') }}">
                                    <i class="livicon" data-name="new-window" title="Form Builder 1" data-loop="true" data-color="#37bc9b" data-hc="#37bc9b" data-s="25"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->



                    <ul id="menu" class="page-sidebar-menu">
                        <li {!! (Request::is('admin') ? 'class="active"' : '') !!}>
                            <a href="{{ route('dashboard') }}">
                                <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">Inicio</span>
                            </a>

                        </li>


                        <li {!! (Request::is('encuestas/empresa/cambio') ? 'class="active" id="active"' : '') !!}>
                        <a href="{{ URL::to('encuestas/empresa/cambio') }}">
                            <i class="fa fa-angle-double-right"></i>
                            Cambio de Empresa
                        </a>
                        </li>



                    @if (Sentry::getUser()->hasAccess('admin'))

                        <li {!! (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active"' : '') !!}>
                            <a href="#">
                                <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
                                <span class="title">Usuarios</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {!! (Request::is('admin/users') ? 'class="active" id="active"' : '') !!}>
                                    <a href="{{ URL::to('admin/users') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Usuarios
                                    </a>
                                </li>
                                <li {!! (Request::is('admin/users/create') ? 'class="active" id="active"' : '') !!}>
                                    <a href="{{ URL::to('admin/users/create') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Añadir nuevo usuario
                                    </a>
                                </li>
                                <li {!! ((Request::is('admin/users/*')) && !(Request::is('admin/users/create')) ? 'class="active" id="active"' : '') !!}>
                                    <a href="{{ URL::route('users.show',Sentry::getUser()->id) }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Ver perfil de usuario
                                    </a>
                                </li>
                                <li {!! (Request::is('admin/deleted_users') ? 'class="active" id="active"' : '') !!}>
                                    <a href="{{ URL::to('admin/deleted_users') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Usuarios borrados
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li {!! (Request::is('admin/groups') || Request::is('admin/groups/create') || Request::is('admin/groups/*') ? 'class="active"' : '') !!}>
                            <a href="#">
                                <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">Grupos</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li {!! (Request::is('admin/groups') ? 'class="active" id="active"' : '') !!}>
                                    <a href="{{ URL::to('admin/groups') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Grupos
                                    </a>
                                </li>
                                <li {!! (Request::is('admin/groups/create') ? 'class="active" id="active"' : '') !!}>
                                    <a href="{{ URL::to('admin/groups/create') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Añadir nuevo grupo
                                    </a>
                                </li>


                            </ul>
                        </li>
                        @endif
                                <!-- ******************* Menu de la aplicación ENCUESTAS  *****************-->
                          <!-- *** MAESTROS ***-->

                            <li {!! (Request::is('admin/maestros')|| Request::is('empresas') || Request::is('localizaciones') || Request::is('tipospreguntas')|| Request::is('encuestas') ? 'class="active"' : '') !!}>
                            <a href="#">
                                <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">Maestros</span>
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
                                    <li {!! (Request::is('encuestas') ? 'class="active" id="active"' : '') !!}>
                                    <a href="{{ URL::to('encuestas') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Encuestas
                                    </a>
                                    </li>
                                </ul>
                             </li>

                            <!-- MENU GESTION ENCUESTAS-->

                                <li {!! (Request::is('admin/gestionempresas')|| Request::is('secciones') || Request::is('preguntas')  ? 'class="active"' : '') !!}>
                                <a href="#">
                                    <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                    <span class="title">Gestión Encuestas</span>
                                    <span class="fa arrow"></span>
                                </a>

                                    <ul class="sub-menu">
                                        <li {!! (Request::is('secciones') ? 'class="active" id="active"' : '') !!}>
                                        <a href="{{ URL::to('secciones') }}">
                                            <i class="fa fa-angle-double-right"></i>
                                            Secciones
                                        </a>
                                        </li>
                                        <li {!! (Request::is('preguntas') ? 'class="active" id="active"' : '') !!}>
                                        <a href="{{ URL::to('preguntas') }}">
                                            <i class="fa fa-angle-double-right"></i>
                                            Preguntas
                                        </a>
                                        </li>
                                    </ul>
                                    </li>


                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
        </aside>
        <aside class="right-side">

            <!-- Notifications -->
            @include('notifications')
            
            <!-- Content -->
            @yield('content')
        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    @if (Request::is('admin/form_builder2') || Request::is('admin/gridmanager') || Request::is('admin/portlet_draggable'))
        <script src="{{ asset('assets/vendors/form_builder1/js/jquery.ui.min.js') }}"></script>
    @endif
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!--livicons-->
    <script src="{{ asset('assets/vendors/livicons/minified/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/vendors/livicons/minified/livicons-1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/josh.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/metisMenu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/holder-master/holder.js') }}"></script>
    <!-- end of global js -->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
</body>
</html>