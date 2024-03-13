@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Importar Asistencias desde Excel') }}</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('asistencias.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="archivo">{{ __('Seleccionar archivo Excel') }}</label>
                                <input type="file" name="archivo" class="form-control-file" id="archivo" required>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Importar') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
