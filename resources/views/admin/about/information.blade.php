<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center py-3">
        <h5 class="card-title text-primary"><i class="bi bi-card-list"></i> Datos generales</h5>
        <div class="card-tools">
            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal-general">
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
                    <td>
                    @if(isset($general))
                        <b>{{ json_decode($general->description)->main }}</b><br>
                        @foreach(json_decode($general->description)->text as $text)
                        {{ $text }}
                        @endforeach
                    @endif
                    </td>
                </tr>
                <tr>
                    <th>Dirección</th>
                    {{--<td>{{ isset($general) ? $general->address : '-' }}</td>--}}
                    <td>{{ isset($general) ? json_decode($general->address)->address.', '.json_decode($general->address)->region.', '.json_decode($general->address)->country : '-' }}</td>
                </tr>
                <tr>
                    <th>Google Maps</th>
                    <td>
                        @if(isset($general))
                        <a href="{{ $general->map }}" target="_blank">{{ $general->map }}</a>
                        @endif
                    </td>
                </tr>
                @if(isset($general))
                <tr>
                    <th></th>
                    <td>
                        {{ $general->map_embed }}<br>
                        <iframe src="{{ $general->map_embed }}" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </td>
                </tr>
                @endif
                <tr>
                    <th>CV</th>
                    <td><a href="{{ route('download_cv') }}"><i class="bi bi-download"></i></a></td>
                </tr>
                <tr>
                    <th>Renacyt</th>
                    <td>{{ isset($general) ? $general->renacyt : '-' }}</td>
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
                    <td>{{ preg_replace("/^(\d{3})(\d{3})(\d{3})$/", "$1 $2 $3", $main_phone->number) }} (Teléfono principal)</td>
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
                        {{--<input type="text" name="description" class="form-control" value="{{ isset($general) ? $general->description : '' }}" required>--}}
                        <input type="text" name="description[main]" class="form-control" value="{{ isset($general) ? json_decode($general->description)->main : '' }}" placeholder="General" required>
                        <textarea name="description[text]" placeholder="Texto" class="form-control" required>{{ isset($general) ? implode("\r\n",json_decode($general->description)->text) : '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>Dirección</b></label>
                        {{--<input type="text" name="address" class="form-control" placeholder="Direccion, Ciudad, País" value="{{ isset($general) ? $general->address : '' }}" required>--}}
                        
                        <input type="text" name="address[address]" class="form-control" placeholder="Direccion" value="{{ isset($general) ? json_decode($general->address)->address : '' }}" required>
                        <div class="input-group">
                            <input type="text" name="address[region]" class="form-control" placeholder="Ciudad" value="{{ isset($general) ? json_decode($general->address)->region : '' }}" required>
                            <input type="text" name="address[country]" class="form-control" placeholder="País" value="{{ isset($general) ? json_decode($general->address)->country : '' }}" required>
                        </div>    
                        
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>Google Maps</b></label>
                        {{--<input type="text" name="map" class="form-control" placeholder='<iframe src="https://www.google.com/maps/embed?..." ></iframe>' value="{{ isset($general) ? $general->map : '' }}">--}}
                        <textarea name="map" class="form-control" placeholder="https://www.google.com/maps/embed?..." >{{ isset($general) ? $general->map : '' }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>CV</b></label>
                        <input type="file" name="cv" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label"><b>Renacyt</b></label>
                        <input type="url" name="renacyt" class="form-control" placeholder="" value="{{ isset($general) ? $general->renacyt : '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>Facebook</b></label>
                        <input type="url" name="facebook" class="form-control" placeholder="https://www.facebook.com/..." value="{{ isset($general) ? $general->facebook : '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>X</b></label>
                        <input type="url" name="x" class="form-control" placeholder="https://x.com/..." value="{{ isset($general) ? $general->x : '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>LinkedIn</b></label>
                        <input type="url" name="linkedin" class="form-control" placeholder="https://pe.linkedin.com/in/..." value="{{ isset($general) ? $general->linkedin : '' }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>Instagram</b></label>
                        <input type="url" name="instagram" class="form-control" placeholder="https://www.instagram.com/..." value="{{ isset($general) ? $general->instagram : '' }}">
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