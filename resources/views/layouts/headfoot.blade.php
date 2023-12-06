<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('assets/Styles/font.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Styles/navbar1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Styles/footer.css')}}">

    <link rel="icon" href="{{asset('assets/Images/Logo/quizzlet_logo.png')}}" type="image/png">
    @yield('style')
</head>
<body>
    <nav id="navbar w-100" class="pt-3">
        <nav class="navbar navbar-expand justify-content-center ">
            <div class="">
                <div id="navbar-content">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('assets/Images/Logo/quizzlet_logo.png')}}" alt="">
                    </a>
                    <!-- <form role="search">
                        <input id="nav-form" class="form-control" type="search" placeholder="Cari sesuatu?" aria-label="Search">
                    </form> -->

                    <ul class="navbar-nav">
                        @foreach ($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('category.details', ['id' => $category->id])}}">{{$category->name}}</a>
                        </li>
                        @endforeach
                    </ul>

                    <ul id="akun" class="navbar-nav">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('login.page')}}">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register.page')}}">Daftar</a>
                        </li>
                        @endguest
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('profile')}}">{{auth()->user()->name}}</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </nav>

    @yield('content')

    <section id="footer">
        <div id="container">
            <div id="top">
                <h5>Quizzle</h5>
                <p>Quizzle adalah platform game edukasi untuk anak-anak berupa quiz dan flashcard. <br> Ayo belajar sambil bermain bersama Quizzle</p>
            </div>
            <div id="bottom">
                Copyright ®2023 Quizzle
            </div>
        </div>
    </section>
    
</body>
</html>