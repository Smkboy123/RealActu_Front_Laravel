<!doctype html>

<html lang="fr" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Se connecter</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/fonts/remixicon/remixicon.css') }}" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/libs/node-waves/node-waves.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/css/pages/page-auth.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/admin/assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/admin/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Content -->

    <div class="position-relative">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-6 mx-4">
                <!-- Login -->
                <div class="card p-7">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mt-5">
                        <a href="index.html" class="app-brand-link gap-3">
                            <span class="app-brand-logo demo">
                                <span style="color: #9055fd">
                                   
                                </span>
                            </span>
                            <span class="app-brand-text demo fw-semibold ">Connexion</span>
                        </a>
                    </div>
                    <!-- /Logo -->

                    <div class="card-body mt-1">
                        <h4 class="mb-1">Bienvenu chez RealActu! 👋🏻</h4>
                        <p class="mb-5">Veuillez renseigner vos identifients pour vous connecter</p>

                        <form id="formAuthentication" class="mb-5" action="{{ route('login')}}" method="POST">
                            @csrf
                            <div class="form-floating form-floating-outline mb-5">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email or username" autofocus />
                                <label for="email">Email ou nom d'utilisateur</label>
                            </div>
                            <div class="mb-5">
                                <div class="form-password-toggle">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input type="password" id="password" class="form-control"
                                                name="password"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="password" />
                                            <label for="password">Mot de passe</label>
                                        </div>
                                        <span class="input-group-text cursor-pointer"><i
                                                class="ri-eye-off-line ri-20px"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5 pb-2 d-flex justify-content-between pt-2 align-items-center">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="form-check-label" for="remember-me"> Se souvenier de moi </label>
                                </div>
                                <a href="auth-forgot-password-basic.html" class="float-end mb-1">
                                    <span>Mot de passe oublier?</span>
                                </a>
                            </div>
                            <div class="mb-5">
                                <button class="btn btn-primary d-grid w-100" type="submit">Se connecter</button>
                            </div>
                        </form>

                        <p class="text-center mb-5">
                            <span>Je n'ai pas de compte?</span>
                            <a href="{{ route('register') }}">
                                <span>Créer un compte</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- /Login -->
            </div>
        </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/adminassets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('assets/admin/assets/js/main.js') }}"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
