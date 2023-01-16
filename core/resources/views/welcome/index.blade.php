<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Backoffice | Login</title>
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery UI -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <!-- Sweet Alert 2 -->
    <script src="{{ asset('js/sweetalert.js') }}"></script>
</head>
<body class="bg-dark pt-5">

<div
    class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
          bg-dark
          mt-5
        "
>
    <div class="auth-box border-top border-secondary mt-5">
        <div id="loginform">
            <div class="text-center pt-3 pb-3 text-white">
                <h3 class="db">Backoffice</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h6>Por favor corrige los siguiente errores:</h6>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
            <!-- Form -->
            <form
                class="form-horizontal mt-3"
                id="loginform"
                method="post"
                action="{{ route('user.dologin') }}"
            >
                {{ csrf_field() }}
                <div class="row pb-4">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                      <span
                          class="input-group-text bg-success text-white h-100"
                          id="basic-addon1"
                      ><i class="mdi mdi-account fs-4"></i
                          ></span>
                            </div>
                            <input
                                type="email"
                                name="email"
                                class="form-control form-control-lg"
                                placeholder="Email"
                                aria-label="Email"
                                aria-describedby="basic-addon1"
                                required autofocus
                            />
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                      <span
                          class="input-group-text bg-warning text-white h-100"
                          id="basic-addon2"
                      ><i class="mdi mdi-lock fs-4"></i
                          ></span>
                            </div>
                            <input
                                type="password"
                                name="password"
                                class="form-control form-control-lg"
                                placeholder="Contraseña"
                                aria-label="Contraseña"
                                aria-describedby="basic-addon1"
                                required
                            />
                        </div>
                    </div>
                </div>
                <div class="row border-top border-secondary">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="pt-3">
                                <button
                                    class="btn btn-success float-end text-white"
                                    type="submit"
                                >
                                    Login
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('js/sparkline.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('js/custom.min.js') }}"></script>

</body>
</html>
