<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('assets/Styles/account.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Styles/font.css')}}">
    <link rel="icon" href="{{asset('assets/Images/Logo/quizzlet_logo.png')}}" type="image/png">
</head>
<body>
    <section id="account">
        <div class="container">
            <div id="form-container">
                <div id="form-content">
                    <div id="form-title">
                        <img src="Assets/Images/Logo/quizzlet_logo.png" alt="">
                        <h3>Quizzle</h3>
                    </div>
                    <form id="form-input" action="{{url('/register')}}" method="POST">
                        @csrf
                        <input type="name" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Nama Lengkap" required>
                        <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" required>
                        <input type="password" name="password" class="form-control" aria-describedby="emailHelp" placeholder="Kata Sandi" required>
                        <input type="password" name="password_confirmation" class="form-control" aria-describedby="emailHelp" placeholder="Kata Sandi" required>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    
                        <div id="form-button">
                            <button type="submit" class="btn btn-dark">Daftar</button>
                        </div>
                        <div id="form-alt">
                            <p>
                                Sudah punya akun? 
                                <a href="{{route('login.page')}}">Masuk</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>