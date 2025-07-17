<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center py-3">
        <h5 class="card-title text-primary"><i class="bi bi-chat-quote"></i> Comentarios</h5>
        <div class="card-tools">
            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal-add-comment" title="Agregar">
                <i class="bi bi-plus-lg"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="datat" class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Posición</th>
                        <th>Comentario</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $comment->name }}</td>
                        <td>{{ $comment->position }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-info btn-sm edit-comment" data-bs-toggle="modal" data-bs-target="#exampleModal-comment" sname="{{ $comment->name }}" sposition="{{ $comment->position }}" scomment="{{ $comment->comment }}" value="{{ route('comment.update', $comment) }}"><i class="bi-pen"></i></button>
                                <button type="button" class="btn btn-danger btn-sm swalDefaultSuccess" form="deleteall" formaction="" value="Servicio: {{ $comment->name }}" title="Eliminar"><i class="bi-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer py-3">

    </div>
</div>

<form action="{{ route('comment.store') }}" method="POST" enctype="multipart/form-data">
    <div class="modal" id="exampleModal-add-comment" tabindex="-1" aria-labelledby="exampleModalLabel-add-comment" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel"><i class="bi bi-chat-quote"></i> Agregar Comentario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label"><b>Nombre</b></label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Posición</b></label>
                        <input type="text" name="position" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Comentario</b></label>
                        <textarea name="comment" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form action="" method="POST" enctype="multipart/form-data" id="form-edit-comment">
    <div class="modal" id="exampleModal-comment" tabindex="-1" aria-labelledby="exampleModalLabel-comment" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-chat-quote"></i> Editar Comentario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label"><b>Nombre</b></label>
                        <input type="text" name="name" class="form-control" id="sname" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Posición</b></label>
                        <input type="text" name="position" class="form-control" id="sposition" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Comentario</b></label>
                        <textarea name="comment" class="form-control" id="scomment"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>