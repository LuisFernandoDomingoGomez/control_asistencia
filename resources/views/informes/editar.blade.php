@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Reporte</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif
                            <form action="{{ route('informes.update',$informe->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Nombre</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <label for="fileInput" class="file-label">
                                            <div id="dropArea" class="drop-area">
                                                <i class="fas fa-cloud-upload-alt"></i>
                                                <span>Arrastra y suelta tu archivo aquí o haz clic para seleccionar</span>
                                            </div>
                                        </label>
                                        <!-- Cambiar el nombre del input file a 'archivo' -->
                                        <input type="file" name="archivo" id="fileInput" accept=".xlsx, .xls" style="display: none;">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Guardar</button>                           
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    .drop-area {
        height: 300px;
        width: 210%;
        border: 2px dashed #ccc;
        text-align: center;
        padding-top: 100px;
        cursor: pointer;
        position: relative;
    }

    .drop-area i {
        font-size: 40px;
        color: #777;
    }

    .drop-area span {
        display: block;
        margin-top: 20px;
        color: #777;
        font-size: 18px;
    }

    .file-label {
        width: fit-content;
        display: inline-block;
    }
</style>

<script>
    const dropArea = document.getElementById('dropArea');
    const fileInput = document.getElementById('fileInput');
    
    dropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropArea.style.backgroundColor = '#f7f7f7';
    });

    dropArea.addEventListener('dragleave', () => {
        dropArea.style.backgroundColor = 'transparent';
    });

    dropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        dropArea.style.backgroundColor = 'transparent';
        const file = e.dataTransfer.files[0];
        handleFile(file);
    });

    fileInput.addEventListener('change', () => {
        const file = fileInput.files[0];
        handleFile(file);
    });

    function handleFile(file) {
        if (file) {
            const fileType = file.type;
            if (fileType === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' || fileType === 'application/vnd.ms-excel') {
                dropArea.innerText = file.name;
                document.getElementById('uploadForm').appendChild(fileInput);
            } else {
                alert('Por favor seleccione un archivo de Excel válido.');
            }
        }
    }
</script>
