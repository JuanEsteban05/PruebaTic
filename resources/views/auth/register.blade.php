<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/styles.css">

<body>
    <div id="register">
        <h3 class="text-center text-white pt-5">Registro</h3>
        <div class="container">
            <div id="register-row" class="row justify-content-center align-items-center">
                <div id="register-column" class="col-md-6">
                    <div id="register-box" class="col-md-12">
                        <form id="register-form" class="form" action="{{ route('register') }}" method="POST">
                            @csrf
                            <h3 class="text-center text-info">Registro</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Nombre:</label><br>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Correo Electronico:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Contraseña:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                                
                            
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="text-info">Confirmar Contraseña:</label><br>
                                <input type="text" name="password_confirmation" id="password-confirm" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registro') }}
                                </button>
                                
                            </div>
                            <div id="register-link" class="text-right">
                                <br><a href="{{ route('login') }}" class="text-info">Ingresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
