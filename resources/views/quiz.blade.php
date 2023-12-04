@extends('layouts.headfoot')
@section('title', 'Quiz - ' . $question->category->name . ' - ' . $idx)
@section('style')
    <link rel="stylesheet" href="{{asset('assets/Styles/quiz.css')}}">
    <style>
        body{
            overflow-x: hidden;
            background-image: url({{asset('assets/Images/Quiz/' . $question->image)}});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0px -100px;
        }
    </style>
@endsection
@section('content')
    <div>
        <section id="content">
            <div id="container-quiz">
                <a id="kembali" href="{{route('category.details', ['id' => $question->category->id])}}">< Kembali</a>
                <h2>Quiz {{$question->category->name}}: </h2>
                <h3>{{$idx}}. {{$question->text}}</h3>
                <div class="row">
                    <a class="col shadow" href="{{route('answer.submit', ['id' => $options[0]->id])}}">{{$options[0]->text}}</a>
                    <a class="col shadow" href="{{route('answer.submit', ['id' => $options[1]->id])}}">{{$options[1]->text}}</a>
                </div>
                <div class="row">
                    <a class="col shadow" href="{{route('answer.submit', ['id' => $options[2]->id])}}">{{$options[2]->text}}</a>
                    <a class="col shadow" href="{{route('answer.submit', ['id' => $options[3]->id])}}">{{$options[3]->text}}</a>
                </div>
            </div>
        </section>

        
    
        @if ($user_answer !== null)
            @if ($user_answer->option->is_correct === 1)
                @if($idx < $questions->count())
                <section id="overlay">
                    <div id="check" class="d-flex flex-column justify-content-center align-items-center ">
                        <h1 id="salah" class="text-success ">Benar</h1>
                        <h3 id="text-salah">Selamat!</h3>
                        <a href="{{route('question.details', ['id' => $question->category->id, 'idx' => $idx + 1])}}" id="btn-salah" class="btn">Pertanyaan Selanjutnya</a>
                    </div>
                </section>
                @else
                <section id="overlay">
                    <div id="check" class="d-flex flex-column justify-content-center align-items-center ">
                        <h1 id="salah">Benar</h1>
                        <h3 id="text-salah">Selamat!</h3>
                        <a href="{{route('congrats', ['id' => $question->category->id])}}" id="btn-salah" class="btn">Selesaikan Quiz</a>
                    </div>
                </section>
                @endif
            @elseif($user_answer->option->is_correct === 0)
            <section id="overlay">
                <div id="check" class="d-flex flex-column justify-content-center align-items-center ">
                    <h1 id="salah">Salah</h1>
                    <h3 id="text-salah">Maaf tapi jawabanmu belum benar</h3>
                    <a href="{{route('answer.retry', ['id' => $question->id])}}" id="btn-salah" class="btn">Coba lagi!</a>
                </div>
            </section>
            @endif
        @endif
        
    </div>
@endsection