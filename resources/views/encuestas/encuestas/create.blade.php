@extends('admin/layouts/default') {{-- Web site Title --}} @section('title') @lang('admin/groups/title.create') :: @parent @stop {{-- Content --}} @section('content')
<section class="content-header">
    <h1>
        @lang('groups/title.create')
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i> Dashboard
            </a>
        </li>
        <li>encuestas</li>
        <li class="active">
            Crear encuesta
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="users-add" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                       Crear encuesta
                    </h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="">
                        <!-- CSRF Token -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group {{ $errors->
                            first('nombre', 'has-error') }}">
                            <label for="title" class="col-sm-2 control-label">
                                Nombre de la encuesta
                            </label>
                            <div class="col-sm-5">
                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre encuesta" value="{{{ Input::old('nombre') }}}">

                                <input type="text" id="id_empresa" name="id_empresa" class="form-control" placeholder="Id Empresa" value="{{{ Session::get('id_empresa') }}}">

                            </div>
                            <div class="col-sm-4">
                                {!! $errors->first('nombre', '<span class="help-block">:message</span> ') !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-4">
                                <a class="btn btn-danger" href="{{ route('encuestas') }}">
                                    @lang('button.cancel')
                                </a>
                                <button type="submit" class="btn btn-success">
                                    @lang('button.save')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row-->
</section>
@stop
