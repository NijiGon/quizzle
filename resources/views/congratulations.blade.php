<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Score</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('assets/Styles/scoreQuiz.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Styles/font.css')}}">

    <link rel="icon" href="{{asset('assets/Images/Logo/quizzlet_logo.png')}}" type="image/png">
</head>
<body>
    <section>
        <audio src="{{asset('assets/Audio/quizFlashcard.m4a')}}" autoplay loop></audio>
        <div class="container">
            <h2>Quiz {{$category->name}}</h2>
            <h1>Score:</h1>
            <div id="star">
                @for ($i = 0; $i < $star_count; $i++)
                    <img src="{{asset('assets/Images/Logo/star.png')}}" alt="">
                @endfor
                {{-- <img src="{{asset('assets/Images/Logo/star.png')}}" alt="">
                <img src="{{asset('assets/Images/Logo/star.png')}}" alt="">
                <img src="{{asset('assets/Images/Logo/star.png')}}" alt="">
                <img src="{{asset('assets/Images/Logo/star.png')}}" alt="">
                <img src="{{asset('assets/Images/Logo/star.png')}}" alt=""> --}}
            </div>
            @if ($star_count === 5)
                <h3>Keren Sekali! Kamu dapat menjawab semua dengan benar!</h3>
            @else
                <h3>Kamu salah {{ $mistake_count }} kali</h3>
            @endif

            <div id="button">
                {{-- <a href="#" class="btn btn-dark">Selanjutnya</a> --}}
                <a href="{{route('category.details', ['id' => $category->id])}}" class="btn btn-dark">Kembali</a>
            </div>
        </div>
    </section>
</body>
</html>
