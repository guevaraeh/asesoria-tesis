<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center py-3">
        <h5 class="card-title text-primary"><i class="bi bi-envelope"></i> Correos electrónicos para contacto</h5>
        <div class="card-tools">
            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal-add-email" title="Agregar">
                <i class="bi bi-plus-lg"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Correo</th>
                        <th>Principal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($emails as $email)
                    <tr>
                        <td>{{ $email->email }}</td>
                        <td>{{ $email->main ? 'Si' : 'No' }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-info btn-sm edit-email" data-bs-toggle="modal" data-bs-target="#exampleModal-email" data="{{ $email->email }}" value="{{ route('email.update', $email) }}"><i class="bi-pen"></i></button>
                                @if($email->main == 0)
                                <a href="{{ route('email.main', $email) }}" class="btn btn-primary btn-sm" title="Principal"><i class="bi-star"></i> </a>
                                @else
                                <a class="btn btn-primary btn-sm disabled" role="button" aria-disabled="true"><i class="bi-star-fill"></i></a>
                                @endif
                                <button type="button" class="btn btn-danger btn-sm swalDefaultSuccess" form="deleteall" formaction="{{ route('email.destroy',$email) }}" value="Correo: {{ $email->email }}" title="Eliminar"><i class="bi-trash"></i></button>
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

<form action="{{ route('email.store') }}" method="POST" enctype="multipart/form-data">
    <div class="modal" id="exampleModal-add-email" tabindex="-1" aria-labelledby="exampleModalLabel-add-email" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel"><i class="bi bi-envelope"></i> Agregar correo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label"><b>Correo Electrónico</b></label>
                        <input type="email" name="email" class="form-control" placeholder="correo@ejemplo.com" required>
                    </div>
                    @if(count($emails) > 0)
                    <div class="mb-3">
                        <label><b>Principal</b></label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="main" id="inlineRadio1" value="0" checked>
                            <label class="form-check-label" for="inlineRadio1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="main" id="inlineRadio2" value="1">
                            <label class="form-check-label" for="inlineRadio2">Si</label>
                        </div>
                    </div>
                    @else
                    <input type="hidden" name="main" value="1" required>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form action="" method="POST" enctype="multipart/form-data" id="form-edit-email">
    <div class="modal" id="exampleModal-email" tabindex="-1" aria-labelledby="exampleModalLabel-email" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-envelope"></i> Editar correo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label"><b>Correo Electrónico</b></label>
                        <input type="email" name="email" class="form-control" id="email" required>
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
    $('.edit-email').click(function() {
        $('#form-edit-email').attr('action',$(this).val());
        $('#email').val($(this).attr('data'));
    });
});
</script>
--}}