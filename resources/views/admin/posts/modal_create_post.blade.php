<!-- modal CREATE-->
<div class="modal fade" id="modal-create-post">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Crear post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Post</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Elije la categoria</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="content">Contenido</label>
                        <textarea class="form-control" name="content" id="content" cols="20" rows="10"></textarea>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input class="form-control" type="text" name="autor" id="autor">
                    </div>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="featured">Archivo</label>
                        <input class="form-control" type="file" name="featured" id="featured">
                    </div>
                </div>
                
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                </div>

            </form>

        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

            