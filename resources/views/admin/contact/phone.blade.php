<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center py-3">
        <h5 class="card-title text-primary"><i class="bi bi-telephone"></i> Teléfonos para contacto</h5>
        <div class="card-tools">
            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal-add-phone" title="Agregar">
                <i class="bi bi-plus-lg"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Numero de Teléfono</th>
                    <th>Principal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($phones as $phone)
                <tr>
                    <td>{{ preg_replace("/^(\d{3})(\d{3})(\d{3})$/", "$1 $2 $3", $phone->number) }}</td>
                    <td>{{ $phone->main ? 'Si' : 'No' }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-info btn-sm edit-phone" data-bs-toggle="modal" data-bs-target="#exampleModal-phone" data="{{ $phone->number }}" value="{{ route('phone.update', $phone) }}"><i class="bi-pen"></i></button>
                            @if($phone->main == 0)
                            <a href="{{ route('phone.main', $phone) }}" class="btn btn-primary btn-sm" title="Principal"><i class="bi-star"></i> </a>
                            @else
                            <a class="btn btn-primary btn-sm disabled" role="button" aria-disabled="true"><i class="bi-star-fill"></i></a>
                            @endif
                            <button type="button" class="btn btn-danger btn-sm swalDefaultSuccess" form="deleteall" formaction="{{ route('phone.destroy',$phone) }}" value="Teléfono: {{ $phone->number }}" title="Eliminar"><i class="bi-trash"></i></button>
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

<form action="{{ route('phone.store') }}" method="POST" enctype="multipart/form-data">
    <div class="modal" id="exampleModal-add-phone" tabindex="-1" aria-labelledby="exampleModalLabel-add-phone" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel"><i class="bi bi-telephone"></i> Agregar teléfono</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label"><b>Número de Teléfono</b></label>
                        <input type="tel" pattern="[0-9]{9}" name="number" class="form-control" required>
                    </div>
                    @if(count($phones) > 0)
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

<form action="" method="POST" enctype="multipart/form-data" id="form-edit-phone">
    <div class="modal" id="exampleModal-phone" tabindex="-1" aria-labelledby="exampleModalLabel-phone" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-telephone"></i> Editar teléfono</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label"><b>Número de Teléfono</b></label>
                        <input type="tel" pattern="[0-9]{9}" name="number" class="form-control" id="phone" required>
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
    $('.edit-phone').click(function() {
        $('#form-edit-phone').attr('action',$(this).val());
        $('#phone').val($(this).attr('data'));
    });
});
</script>
--}}