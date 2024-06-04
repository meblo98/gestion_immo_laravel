<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Plus Admin</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/jquery-bar-rating/css-stars.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/plus-admin-template/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile border-bottom">
                    <a href="#" class="nav-link flex-column">
                        <div class="nav-profile-image">
                            <img src="assets/images/faces/face3.jpg" alt="profile">
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex ms-0 mb-3 flex-column">
                            <span class="fw-semibold mb-1 mt-2 text-center">{{Auth::User()->prenom}}</span>
                            <span class="text-secondary icon-sm text-center">{{Auth::User()->nom}}</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item pt-3">
                    <a class="nav-link d-block" href="index.html">
                        <img class="sidebar-brand-logo" src="assets/images/logo.svg" alt="">
                        <img class="sidebar-brand-logomini" src="assets/images/logo-mini.svg" alt="">
                        <div class="small fw-light pt-1">Gestion Immobiliére </div>
                    </a>
                    <form class="d-flex align-items-center" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control border-0" placeholder="Search">
                        </div>
                    </form>
                </li>
                <li class="pt-2 pb-1">
                    <span class="nav-item-head">Menu</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin') }}">
                        <i class="mdi mdi-compass-outline menu-icon"></i>
                        <span class="menu-title">Tableau de bord</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin2') }}">
                        <i class="fa fa-institution menu-icon"></i>
                        <span class="menu-title">Biens</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.commentaire') }}">
                        <i class="fa fa-comments-o menu-icon"></i>
                        <span class="menu-title">Commentaires</span>
                    </a>
                </li>

            </ul>
            <ul class="nav">
                <li class="nav-item">
                    {{-- <form action="{{ Route('User.deconnexion') }}" Method="post">
                        @csrf
                        @method('DELETE') --}}

                        {{-- <button type="submit"> --}}
                             <a class="nav-link"  href="{{ Route('User.deconnexion') }}">
                                <i class="fa fa-power-off menu-icon"></i>
                                <span class="menu-title">deconnecter</span>
                            </a>
                        {{-- </button>
                    </form> --}}
                </li>
            </ul>
        </nav>
        @include('partials._navbar')
        @yield('content')


        @include('partials._footer')
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
        <script src="assets/vendors/chart.js/chart.umd.js"></script>
        <script src="assets/vendors/flot/jquery.flot.js"></script>
        <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
        <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
        <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
        <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
        <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="assets/js/off-canvas.js"></script>
        <script src="assets/js/misc.js"></script>
        <script src="assets/js/settings.js"></script>
        <script src="assets/js/todolist.js"></script>
        <script src="assets/js/hoverable-collapse.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="assets/js/proBanner.js"></script>
        <script src="assets/js/dashboard.js"></script>
        <!-- End custom js for this page -->
</body>

</html>
