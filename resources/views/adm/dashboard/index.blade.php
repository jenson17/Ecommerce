@extends('adm.template.main')

@section('title', 'Dashboard')

@section('contend')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Listado de Artículos
                </h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus">
                        </i>
                    </button>
                    <button class="btn btn-box-tool" data-widget="remove">
                        <i class="fa fa-times">
                        </i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-primary btn-rounded" data-target="#create" data-toggle="modal" type="button">
                            <span>
                                Nuevo
                            </span>
                            <i class="fa fa-plus-circle">
                            </i>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table_index_articles" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>
                                            Nombre
                                        </th>
                                        <th>
                                            Descripcíon
                                        </th>
                                        <th>
                                            Foto
                                        </th>
                                        <th>
                                            Precio $
                                        </th>
                                        <th>
                                            Opciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
<!-- /.col -->
@include('adm.dashboard.create')
@include('adm.dashboard.show')
@include('adm.dashboard.edit')
@endsection

@push('js')
@include('plugins.datatable')
@include('adm.dashboard.js.index')
@endpush
