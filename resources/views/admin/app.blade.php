<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.icon')
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

                    <div class="col-lg-8">
                    @include('admin.about.information')
                    </div>

                    <div class="col-lg-4">
                    @include('admin.contact.phone')
                    @include('admin.contact.email')
                    </div>

                    <div class="col-lg-6">
                    @include('admin.service.service')
                    </div>

                    <div class="col-lg-6">
                    @include('admin.about.comment')
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

        $('.edit-comment').click(function() {
            $('#form-edit-comment').attr('action',$(this).val());
            $('#sname').val($(this).attr('sname'));
            $('#sposition').val($(this).attr('sposition'));
            $('#scomment').val($(this).attr('scomment'));
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