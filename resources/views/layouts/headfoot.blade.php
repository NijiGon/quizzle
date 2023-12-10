<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/Styles/font.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Styles/navbar1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Styles/footer.css')}}">

    <link rel="icon" href="{{asset('assets/Images/Logo/quizzlet_logo.png')}}" type="image/png">
    @yield('style')
    <style>
        #searchResults{
            position: absolute;
        }
    </style>
</head>
<body>
    <nav id="navbar w-100" class="pt-3">
        <nav class="navbar navbar-expand justify-content-center ">
            <div class="">
                <div id="navbar-content">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('assets/Images/Logo/quizzlet_logo.png')}}" alt="">
                    </a>
                    <form role="search">
                        <input id="nav-form" class="form-control z-1" type="search" placeholder="Cari sesuatu?" aria-label="Search">
                        <div id="searchResults" class="bg-white z-0" style="display: none"></div>
                    </form>

                    {{-- <ul class="navbar-nav">
                        @foreach ($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('category.details', ['id' => $category->id])}}">{{$category->name}}</a>
                        </li>
                        @endforeach
                    </ul> --}}

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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function() {
        var searchBar = document.getElementById('searchResults')
        $('#nav-form').on('keyup', function() {
            var query = $(this).val();

            // Check if the input is empty
            if (query.trim() === '') {
                // If empty, hide the search results
                $('#searchResults').css('display', 'none');
            } else {
                // If not empty, show the search results
                $('#searchResults').css('display', 'block');
                $.ajax({
                    url: '{{ route('search') }}',
                    type: 'GET',
                    data: { 'query': query },
                    success: function(data) {
                        // Update the DOM with search results
                        $('#searchResults').html(data);
                        $('#searchResults').css('display', 'block');
                    }
                });
            }
        });
    });

    </script>
</body>
</html>
