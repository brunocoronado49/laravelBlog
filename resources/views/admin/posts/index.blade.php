@extends('adminlte::page')

@section('title', 'Admin - Post')

@section('content_header')
<h1>
    Posts
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-post">
        Crear
    </button>
</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de posts</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="posts" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th>Archivo</th>
                                <th>Categoria</th>
                                <th>Contenido</th>
                                <th>Autor</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <img src="{{asset($post->featured)}}" alt="{{$post->title}}" width="200" class="img-fluid img-thumbnail">
                                    </td>
                                    <td>{{$post->category->name}}</td>
                                    <td>{{$post->content}}</td>
                                    <td>{{$post->autor}}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-post-{{$post->id}}">
                                            Editar
                                        </button>
                                        <form action="{{route('admin.posts.delete', $post->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                            <button class="btn btn-danger"type="submit">Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                                @include('admin.posts.modal_update_post')
                            @endforeach                        
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

@include('admin.posts.modal_create_post')

@stop

@section('js')
<script>
$(document).ready(function() {
    $('#posts').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop