@extends('template')

@section('css')

@endsection

@section('title', "Backoffice | Dashboard")

@section('content')

    <main role="main" id="contenido">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row pt-3">
                    <div class="col">
                        <h1 class="h2 mb-0">Bienvenid@ {{ Auth::user()->name }}</h1>
                        <hr class="hr-title" align="left">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
