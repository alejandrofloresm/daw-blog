@extends ('admin.layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Blogs
    </h1>
</section>
<!-- Main content -->
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Índice de blogs</h3>
                </div>
                <div class="box-body">
                    @if (!$data['blogs']->isEmpty())
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Título</th>
                                    <th>Creado</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($data['blogs'] as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->created_at }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No existe ningún blog: crea uno aquí</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
