@extends ('admin.layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Crear un nuevo blog
    </h1>
</section>
<!-- Main content -->
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <label for="">Título</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Contenido</label>
                        <textarea class="form-control" rows="3" placeholder=""></textarea>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Crear blog</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
