<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('libraries/wp-content/uploads/2021/02/favicon.png') }}" />
    <title>Asesoria de Tesis</title>

    @include('admin.layouts.styles')
  </head>
  <body>

    <form method="POST" id="deleteall">
        @csrf
        @method('DELETE')
    </form>

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            @include('admin.layouts.menu')

            <div class="container">
                <div class="row">



                    <div class="col-lg-12">
                    


                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center py-3">
                                <h5 class="card-title text-primary"><i class="bi bi-card-list"></i> Datos generales</h5>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-general">
                                        <i class="bi bi-pen"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Descripción</th>
                                            <td>{{ isset($general) ? $general->description : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Dirección</th>
                                            <td>{{ isset($general) ? $general->address : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Google Maps</th>
                                            <td>https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&t=m&z=10&output=embed&iwloc=near</td>
                                        </tr>
                                        <tr>
                                            <th>CV</th>
                                            <td><a href="{{ route('download_cv') }}"><i class="bi bi-download"></i></a></td>
                                        </tr>
                                        <tr>
                                            <th>Facebook</th>
                                            <td>{{ isset($general) ? $general->facebook : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <th>X</th>
                                            <td>{{ isset($general) ? $general->x : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <th>LinkedIn</th>
                                            <td>{{ isset($general) ? $general->linkedin : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Instagram</th>
                                            <td>{{ isset($general) ? $general->instagram : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <th>WhatsApp</th>
                                            <td>{{ $main_phone->number }}</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                                </div>
                                
                            </div>
                            <div class="card-footer py-3">

                            </div>
                        </div>
{{--
                        <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data" id="form-general">
                            <div class="modal" id="exampleModal-general" tabindex="-1" aria-labelledby="exampleModalLabel-general" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-card-list"></i> Editar Datos generales</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label class="form-label"><b>Descripción</b></label>
                                                <input type="text" name="description" class="form-control" required>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label"><b>Dirección</b></label>
                                                <input type="text" name="address" class="form-control" required>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label"><b>Google Maps</b></label>
                                                <input type="url" name="map" class="form-control" placeholder="https://maps.google.com/maps?q=..." required>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label"><b>CV</b></label>
                                                <input type="file" name="cv" class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label"><b>Facebook</b></label>
                                                <input type="url" name="facebook" class="form-control" placeholder="https://www.facebook.com/...">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label"><b>X</b></label>
                                                <input type="url" name="x" class="form-control" placeholder="https://x.com/...">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label"><b>LinkedIn</b></label>
                                                <input type="url" name="linkedin" class="form-control" placeholder="https://www.linkedin.com/...">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label"><b>Instagram</b></label>
                                                <input type="url" name="instagram" class="form-control" placeholder="https://www.instagram.com/...">
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
--}}


                    </div>




                    <div class="col-lg-6">
                    @include('admin.contact.phone')
                    </div>

                    <div class="col-lg-6">
                    @include('admin.contact.email')
                    </div>

                    <div class="col-lg-12">
                    @include('admin.service.service')
                    </div>

                </div>
            </div>

        </div>
    </div>
    @include('admin.layouts.scripts')
    
    <script type="text/javascript">
    $( document ).ready(function() {
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
        var dt= new DataTable('#datat', {
            searching: false,
            info: false,
            ordering: false,
            pageLength: 5,
        });
        $(".dt-length").html('');

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
    });
    </script>
    
  </body>
</html>