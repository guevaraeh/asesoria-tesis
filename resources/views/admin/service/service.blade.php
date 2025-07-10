<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center py-3">
        <h5 class="card-title text-primary"><i class="bi bi-lightbulb"></i> Servicios</h5>
        <div class="card-tools">
            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal-add-service" title="Agregar">
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
                        <th>Título</th>
                        <th>Contenido</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->content }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-info btn-sm edit-service" data-bs-toggle="modal" data-bs-target="#exampleModal-service" stitle="{{ $service->title }}" scontent="{{ $service->content }}" value="{{ route('service.update', $service) }}"><i class="bi-pen"></i></button>
                                <button type="button" class="btn btn-danger btn-sm swalDefaultSuccess" form="deleteall" formaction="{{ route('service.destroy',$service) }}" value="Servicio: {{ $service->title }}" title="Eliminar"><i class="bi-trash"></i></button>
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

<form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
    <div class="modal" id="exampleModal-add-service" tabindex="-1" aria-labelledby="exampleModalLabel-add-service" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel"><i class="bi bi-lightbulb"></i> Agregar Servicio</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label"><b>Título</b></label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Contenido</b></label>
                        <textarea name="content" class="form-control" rows="3"></textarea>
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

<form action="" method="POST" enctype="multipart/form-data" id="form-edit-service">
    <div class="modal" id="exampleModal-service" tabindex="-1" aria-labelledby="exampleModalLabel-service" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-lightbulb"></i> Editar Servicio</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label"><b>Título</b></label>
                        <input type="text" name="title" class="form-control" id="stitle" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Contenido</b></label>
                        <textarea name="content" class="form-control" id="scontent" rows="3"></textarea>
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

{{--
<script type="text/javascript">
$( document ).ready(function() {
    $('.edit-service').click(function() {
        $('#form-edit-service').attr('action',$(this).val());
        $('#stitle').val($(this).attr('stitle'));
        $('#scontent').val($(this).attr('scontent'));
    });
});
</script>
--}}