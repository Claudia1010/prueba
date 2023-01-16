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
                        <h1 class="h2 mb-0">Tus ofertas {{ Auth::user()->name }}</h1>
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
                <div class="row">
                    @foreach($offers as $offer)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ $offer->text }}</div>
                            </div>
                            <div class="card-body">
                                <h3>€{{ number_format($offer->price) }}</h3>
                                <h5>Code: {{ $offer->pivot->code }}</h5>
                                <h5>Date: {{ \Carbon\Carbon::parse($offer->created_at)->format('d-m-Y H:i:s') }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
