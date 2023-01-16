@extends('template')

@section('css')

@endsection

@section('title', "Backoffice | Perfil")

@section('content')

    <div class="row pt-3">
        <div class="col">
            <h1 class="h2 mb-0">Perfil</h1>
            <hr class="hr-title" align="left">
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session()->has('result'))
        <script type="text/javascript">
            swal({
                title: '{{ session()->get('result')->title }}',
                text: '{{ session()->get('result')->message }}',
                type: '{{ session()->get('result')->type }}',
                showCancelButton: false,
                confirmButtonColor: '#3EB1C8'
            });
        </script>
    @endif
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="row form-row">
                    <div class="form-group col-6">
                        <label for="exampleInputName">Nombre</label>
                        <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Nombre" value="{{ Auth::user()->name }}" disabled>
                    </div>
                    <div class="form-group col-6">
                        <label for="email">Dirección de correo</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ Auth::user()->email }}" disabled>
                    </div>
                </div>
                <form action="{{ route('profile.edit') }}" method="post">
                    {{ method_field('put') }}
                    {{ csrf_field() }}
                    <div class="row form-row">
                        <div class="form-group col">
                            <label for="passwordNew">Contraseña</label>
                            <input type="password" class="form-control" id="passwordNew" name="passwordNew" placeholder="Nueva Contraseña">
                        </div>
                        <div class="form-group col">
                            <label for="passwordNewConfirm">Contraseña</label>
                            <input type="password" class="form-control" id="passwordNewConfirm" name="passwordNewConfirm" placeholder="Confirmar Contraseña">
                        </div>
                    </div>
                    <div class="text-center mt-4 mb-1">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

