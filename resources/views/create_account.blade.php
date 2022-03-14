
@if (session()->get('error'))

<script>
    Swal.fire({
        icon: 'error',
        title: 'Erreur!',
        text: {{ session()->get('error') }},
    })
</script>

@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Créer un compte</title>

    <!-- page css -->
    <link href="dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/Alert/dist/sweetalert2.min.css">
  	<script src="Alert/dist/sweetalert2.all.min.js"></script>
  	<script src="Alert/dist/sweetalert2.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">eCommerce</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(assets/images/background/login-register.jpg);">
            <div class="login-box card" style="margin-top: -70px">
                <div class="card-body">
                    @if (session()->get('msg'))

                    <div class="alert alert-danger" role="alert">
                        <strong>{{ session()->get('msg') }}</strong>
                    </div>

                    {{-- <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Erreur!',
                            text: {{ session()->get('msg') }},
                        })

                    </script> --}}

                    @endif

                    <form class="form-horizontal form-material" id="loginform" method="post" action="{{ route("login.createAccount_post") }}" enctype="multipart/form-data">
                        @csrf
                        <h3 class="box-title m-b-20">Créer un Compte</h3>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input name="nom" class="form-control" type="text" required="" placeholder="Entrer votre Nom">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input name="prenom" class="form-control" type="text" required="" placeholder="Entrer votre Prénom">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input name="email" class="form-control" type="text" required="" placeholder="Entrer votre email">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input name="nvPassword" class="form-control" type="password" required="" placeholder="Nouveau mot de passe">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input name="cfPassword" class="form-control" type="password" required="" placeholder="Confirmer le mot de passe">
                            </div>
                        </div>
                        <div class="form-group text-center p-b-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">S'inscrire</button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                J'ai déjà un compte? <a href="{{ route("login.index") }}" class="text-info m-l-5"><b>Se connecter</b></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
</body>

</html>
