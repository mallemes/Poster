<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Войти</title>

    <link rel="stylesheet" href="{{ asset('base/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/feather.css') }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('base/images/favicon.png') }}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('base/css/style.css') }}">
    <link href='{{ asset('https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css') }}' rel='stylesheet'>




</head>

<body class="color-theme-blue">

<div class="preloader"></div>

<div class="main-wrap">

    <div class="nav-header bg-transparent shadow-none border-0">
        <div class="nav-top w-100">
            <a href="{{ route('index') }}"><i class="bx bxs-zap text-success display1-size me-2 ms-0"></i><span class="d-inline-block fredoka-font ls-3 fw-600 text-current font-xxl logo-text mb-0">Poster. </span> </a>
            <a href="#" class="mob-menu ms-auto me-2 chat-active-btn"><i class="feather-message-circle text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
            <a href="default-video.html" class="mob-menu me-2"><i class="feather-video text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
            <a href="#" class="me-2 menu-search-icon mob-menu"><i class="feather-search text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
            <button class="nav-menu me-0 ms-2"></button>
            <a href="#" class="header-btn d-none d-lg-block bg-current fw-500 text-white font-xsss p-3 ms-auto w150 text-center lh-20 rounded-xl"  data-bs-toggle="modal" data-bs-target="#Modalregister">Регистрация</a>
        </div>


    </div>

    <div class="row">
        <div class="col-xl-5 d-none d-xl-block p-0 vh-100 bg-image-cover bg-no-repeat" style="background-image: url({{ asset('base/images/login-bg.jpg') }});"></div>
        <div class="col-xl-7 vh-100 align-items-center d-flex bg-white rounded-3 overflow-hidden">
            <div class="card shadow-none border-0 ms-auto me-auto login-card">
                <div class="card-body rounded-0 text-left">
                    <h2 class="fw-700 display1-size display2-md-size mb-3">Войти в <br>свой аккаунт</h2>
                    <form action="{{ route('login') }}" method="post">
                        @csrf

                        <div class="form-group icon-input mb-3">
                            <i class="bx bx-user text-grey-500 pe-0 mt-1"></i>
                            <input type="text" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" name="username" placeholder="Имя пользователя">
                            @error('username')<strong class="text-danger">{{ $message }}</strong>@enderror
                        </div>
                        <div class="form-group icon-input mb-1">
                            <input type="Password" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3" name="password" placeholder="Пароль">
                            @error('password')<strong class="text-danger">{{ $message }}</strong>@enderror
                            <i class="bx bx-lock-alt text-grey-500 pe-0 mt-1"></i>
                        </div>
                        <div class="form-check text-left mb-3">
                            <input type="checkbox" class="form-check-input mt-2" id="exampleCheck5">
                            <label class="form-check-label font-xsss text-grey-500" for="exampleCheck5">Запомнить меня</label>
                            <a href="#" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Забыли пароль?</a>
                        </div>
                        <div class="col-sm-12 p-0 text-left">
                            <div class="form-group mb-1"><button href="#" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Войти</button></div>
                            <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">У вас еще нет аккаунта? <a href="{{ route('register.form') }}" class="fw-700 ms-1">Регистрация</a></h6>
                        </div>
                    </form>

                    <div class="col-sm-12 p-0 text-center mt-2">

                        <h6 class="mb-0 d-inline-block bg-white fw-500 font-xsss text-grey-500 mb-3 d-flex align-items-center justify-content-center">
                            <hr style="width: 100px; margin-right: 10px">
                            ИЛИ
                            <hr style="width: 100px; margin-left: 10px">
                        </h6>
                        <div class="form-group mb-1"><a href="#" class="form-control text-left style2-input text-white fw-600 bg-facebook border-0 p-0 mb-2"><img src="{{ asset('base/images/icon-1.png') }}" alt="icon" class="ms-2 w40 mb-1 me-5"> Продолжить через Google</a></div>
                        <div class="form-group mb-1"><a href="#" class="form-control text-left style2-input text-white fw-600 bg-twiiter border-0 p-0 "><img src="{{ asset('base/images/icon-3.png') }}" alt="icon" class="ms-2 w40 mb-1 me-5"> Продолжить через Facebook</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Register -->
<div class="modal bottom fade" style="overflow-y: scroll;" id="Modalregister" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close text-grey-500"></i></button>
            <div class="modal-body p-3 d-flex align-items-center bg-none">
                <div class="card shadow-none rounded-0 w-100 p-2 pt-3 border-0">
                    <div class="card-body rounded-0 text-left p-3">
                        <h2 class="fw-700 display1-size display2-md-size mb-4">Создайте <br>свой аккаунт</h2>
                        <form method="post" action="{{route('register')}}" >
                            @csrf
                            <div class="form-group icon-input mb-2">
                                <i class="bx bx-user text-grey-500 pe-0 mt-1"></i>
                                <input type="text" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" name="username" placeholder="Имя пользователя">
                                @error('username')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group icon-input mb-2">
                                <i class="bx bx-user-circle text-grey-500 pe-0 mt-1"></i>
                                <input type="text" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" name="firstname" placeholder="Имя (обязательно)">
                                @error('firstname')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group icon-input mb-2">
                                <i class="bx bxs-user-circle text-grey-500 pe-0 mt-1"></i>
                                <input type="text" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" name="surname" placeholder="Фамилия (необязательно)">
                                @error('surname')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group icon-input mb-2 d-flex ">
                                <select name="day" id="day" class="form-control mr-2 style2-select" style="margin-right: 10px">
                                    <option value="0">День</option>
                                    @for($i = 1; $i <= 31; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                <select name="month" id="month" class="form-control style2-select" style="margin-right: 10px">
                                    <option value="0">Месяц</option>
                                    @for($i = 1; $i <= 12; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                <select name="year" id="year" class="form-control style2-select">
                                    <option value="0">Год</option>
                                    @for($i = 1900; $i <= 2021; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                @error('[day, month, year]')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group icon-input mb-2">
                                <i class="bx bx-envelope text-grey-500 pe-0 mt-1"></i>
                                <input type="email" class="style2-input ps-5 form-control text-grey-900 font-xsss fw-600" name="email" placeholder="Электронный адрес">
                                @error('email')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group icon-input mb-2">
                                <input type="Password" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3" name="password" placeholder="Пароль">
                                <i class="bx bx-lock-alt text-grey-500 pe-0 mt-1"></i>
                                @error('password')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group icon-input mb-2">
                                <input type="Password" class="style2-input ps-5 form-control text-grey-900 font-xss ls-3" name="password_confirmation" placeholder="Подтвердите пароль">
                                <i class="bx bx-lock text-grey-500 pe-0 mt-1"></i>
                            </div>
                            <div class="col-sm-12 p-0 text-left">
                                <div class="form-group mb-1"><button class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0">Регистрация</button></div>
                                <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">У вас уже есть аккаунт? <a href="{{ route('login.form') }}" class="fw-700 ms-1">Войти</a></h6>
                            </div>
                        </form>


                        <div class="col-sm-12 p-0 text-center mt-3 ">

                            <h6 class="mb-0 d-inline-block bg-white fw-500 font-xsss text-grey-500 mb-3 d-flex align-items-center justify-content-center">
                                <hr style="width: 100px; margin-right: 10px">
                                ИЛИ
                                <hr style="width: 100px; margin-left: 10px">
                            </h6>
                            <div class="form-group mb-1">
                                <a href="#" class="form-control text-left style2-input text-white fw-600 bg-facebook border-0 p-0 "><img src="{{ asset('base/images/icon-1.png') }}" alt="icon" class="ms-2 w40 mb-1 me-5"> Продолжить через Google</a></div>
                            <div class="form-group mb-1"><a href="#" class="form-control text-left style2-input text-white fw-600 bg-twiiter border-0 p-0 "><img src="{{ asset('base/images/icon-3.png') }}" alt="icon" class="ms-2 w40 mb-1 me-5"> Продолжить через Facebook</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('base/js/plugin.js') }}"></script>
<script src="{{ asset('base/js/scripts.js') }}"></script>

</body>

</html>
