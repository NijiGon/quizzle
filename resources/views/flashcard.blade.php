@extends('layouts.headfoot')
@section('title', 'Materi - ' . $material->name)
@section('style')
    <link rel="stylesheet" href="{{asset('assets/Styles/flashcard.css')}}">
    <style>
        body {
            background: url({{asset('assets/Images/Material/' . $material->image)}});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0px -100px;
            overflow-x: hidden;
        }
    </style>
@endsection
@section('content')
    <div>
        <section id="content">
            <div id="material">
                <h1>
                    {{$material->name}} 
                    <a href="#" id="clickButton">
                        <audio id="clickSound" src="{{asset('assets/Audio/' . $material->audio)}}"></audio>
                        <img id="speaker" src="{{asset('assets/Images/Logo/speaker_putih.png')}}" alt="">
                    </a>
                </h1>
                <h5>{{$material->text}}</h5>
                
                @if ($idx > 0)
                <a href="{{route('material.details', ['id' => $material->category->id, 'idx' => $idx - 1])}}" class="btn">< Kembali</a>
                @endif
                <a href="{{route('category.details', ['id' => $material->category->id])}}" class="btn">Kategori</a>
                @if($idx < $materials->count() - 1)
                <a href="{{route('material.details', ['id' => $material->category->id, 'idx' => $idx + 1])}}" class="btn">Selanjutnya ></a>
                @endif
            </div>
        </section>
    </div>
    <script>
        var clickSound = document.getElementById('clickSound');
        var clickButton = document.getElementById('clickButton');

        clickButton.addEventListener('click', function() {
            if (clickSound.paused) {
                clickSound.play();
            } else {
                clickSound.pause();
            }
        });
    </script>

@endsection
