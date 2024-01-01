@extends('layouts.headfoot')
@section('title', 'Quiz - ' . $question->category->name . ' - ' . $idx)
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/Styles/quiz.css') }}">

    <style>
        body {
            overflow-x: hidden;
            background-image: url({{ asset('assets/Images/Quiz/' . $question->image) }});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0px -100px;
        }
        .navbar{
            align-items: baseline;
        }
        .test{}
    </style>
@endsection
@section('content')
    <div>
        <section id="content">
            <div id="container-quiz">
                <nav class="navbar">
                    <div class="d-flex align-items-center gap-3">
                        <a id="" href="{{route('category.details', ['id' => $question->category->id])}}" class="burger">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                        <div class="d-flex align-items-center " type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">

                            <span class=" burger">
                                <span class="toggler-stripe"></span>
                                <span class="toggler-stripe"></span>
                                <span class="toggler-stripe"></span>
                            </span>

                        </div>
                        <h2>Quiz {{ $question->category->name }}:</h2>
                    </div>

                </nav>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
                    <div class="offcanvas-header">
                        <h5 class="" id="sidebarLabel">List Pertanyaan</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="d-flex flex-wrap gap-2">
                            @foreach ($questions as $q)
                                @if ($loop->index+1 <= $idx )
                                    <a href="{{ route('question.details', ['id' => $id, 'idx' => $loop->index+1]) }}" class="sidebar">{{ $loop->index+1 }}</a>
                                @else
                                    <a href="{{ route('question.details', ['id' => $id, 'idx' => $loop->index+1]) }}" class=" disabled ">{{ $loop->index+1 }}</a>
                                @endif

                            @endforeach
                        </div>
                    </div>
                </div>

                <h3>{{ $idx }}. {{ $question->text }}</h3>
                <div class="row">
                    <a class="col shadow" hx-target="#response" hx-trigger="click" onclick="event.preventDefault();" hx-get="{{route('answer.submit', ['id' => $options[0]->id, 'idx' => $idx])}}">{{$options[0]->text}}</a>
                    <a class="col shadow" hx-target="#response" hx-trigger="click" onclick="event.preventDefault();" hx-get="{{route('answer.submit', ['id' => $options[1]->id, 'idx' => $idx])}}">{{$options[1]->text}}</a>
                </div>
                <div class="row">
                    <a class="col shadow" hx-target="#response" hx-trigger="click" onclick="event.preventDefault();" hx-get="{{route('answer.submit', ['id' => $options[2]->id, 'idx' => $idx])}}">{{$options[2]->text}}</a>
                    <a class="col shadow" hx-target="#response" hx-trigger="click" onclick="event.preventDefault();" hx-get="{{route('answer.submit', ['id' => $options[3]->id, 'idx' => $idx])}}">{{$options[3]->text}}</a>
                </div>
            </div>
        </section>

        <section id="response">


        </section>

    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/Scripts/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="https://unpkg.com/htmx.org@1.9.10" integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous"></script> --}}

@endsection
