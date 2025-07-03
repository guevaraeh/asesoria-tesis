<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('libraries/wp-content/uploads/2021/02/favicon.png') }}" />
    <title>Asesoria de Tesis</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
  </head>
  <body>

    <form method="POST" id="deleteall">
        @csrf
        @method('DELETE')
    </form>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">


        <nav class="navbar navbar-expand-lg mb-4 topbar bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Administrador</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    
                <ul class="navbar-nav">

                </ul>

                <ul class="navbar-nav ms-auto navbar-right">
                    
                </ul>

                </div>
            </div>
        </nav>



        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Numero de Teléfono</th>
                                        <th>Principal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($phones as $phone)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $phone->number }}</td>
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
                            <form action="{{ route('phone.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="tel" pattern="[0-9]{9}" name="number" class="form-control" placeholder="Agrega número" required>
                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                </div>

                                @if(count($phones) > 0)
                                <label>Principal</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="main" id="inlineRadio1" value="0" checked>
                                    <label class="form-check-label" for="inlineRadio1">No</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="main" id="inlineRadio2" value="1">
                                    <label class="form-check-label" for="inlineRadio2">Si</label>
                                </div>
                                @else
                                <input type="hidden" name="main" value="1" required>
                                @endif
                            </form>
                        </div>
                    </div>

                    <form action="" method="POST" enctype="multipart/form-data" id="form-edit-phone">
                        <div class="modal" id="exampleModal-phone" tabindex="-1" aria-labelledby="exampleModalLabel-phone" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar telefono</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            @csrf
                                            @method('PUT')
                                            <input type="tel" pattern="[0-9]{9}" name="number" class="form-control" id="phone" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>



                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Correo</th>
                                            <th>Principal</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($emails as $email)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
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
                            <form action="{{ route('email.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Agrega correo" required>
                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                </div>

                                @if(count($emails) > 0)
                                <label>Principal</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="main" id="inlineRadio1" value="0" checked>
                                    <label class="form-check-label" for="inlineRadio1">No</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="main" id="inlineRadio2" value="1">
                                    <label class="form-check-label" for="inlineRadio2">Si</label>
                                </div>
                                @else
                                <input type="hidden" name="main" value="1" required>
                                @endif

                            </form>
                        </div>
                    </div>

                    <form action="" method="POST" enctype="multipart/form-data" id="form-edit-email">
                        <div class="modal" id="exampleModal-email" tabindex="-1" aria-labelledby="exampleModalLabel-email" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar correo</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            @csrf
                                            @method('PUT')
                                            <input type="email" name="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>


                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
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
                            <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="title" class="form-control" placeholder="Agrega título" required>
                                <textarea name="content" class="form-control" rows="3" placeholder="Agrega contenido"></textarea>
                                <button type="submit" class="btn btn-primary">Agregar</button>
                            </form>
                        </div>
                    </div>

                    <form action="" method="POST" enctype="multipart/form-data" id="form-edit-service">
                        <div class="modal" id="exampleModal-service" tabindex="-1" aria-labelledby="exampleModalLabel-service" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Servicio</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="title" class="form-control" id="stitle" required>
                                        <textarea name="content" class="form-control" id="scontent" rows="3"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

            <a href="{{ route('email') }}" class="btn btn-primary btn-sm" title="Correo">Correo </a>

        </div>



      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/libraries/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @if(Session::has('success'))
    <script type="text/javascript">
    $( document ).ready(function() {
        toastr.success('{{ session("success") }}','<strong>¡Exito!</strong>',{closeButton: true,}
        );
    });
    </script>
    @endif
    
    <script type="text/javascript">
        $('.edit-phone').click(function() {
            $('#form-edit-phone').attr('action',$(this).val());
            $('#phone').val($(this).attr('data'));
        });

        $('.edit-email').click(function() {
            $('#form-edit-email').attr('action',$(this).val());
            $('#email').val($(this).attr('data'));
        });

        $('.edit-service').click(function() {
            $('#form-edit-service').attr('action',$(this).val());
            $('#stitle').val($(this).attr('stitle'));
            $('#scontent').val($(this).attr('scontent'));
        });

        $('.swalDefaultSuccess').click(function(){
            Swal.fire({
                title: '¿Esta seguro que desea eliminarlo?',
                text: $(this).val(),
                showDenyButton: true,
                confirmButtonText: "Si, eliminar",
                denyButtonText: "No, cancelar",
                icon: "warning",
                customClass: {
                    confirmButton: 'btn btn-primary',
                    denyButton: 'btn btn-danger'
                }
            }).then((result) => {
                if(result.isConfirmed){
                    $('#deleteall').attr('action', $(this).attr('formaction'));
                    $('#deleteall').submit();
                }
            })
        });

    </script>
    
  </body>
</html>