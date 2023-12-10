@extends('layouts.headfoot')
@section('title', 'Category - ' . $category->name)
@section('style')
    <link rel="stylesheet" href="{{asset('assets/Styles/category.css')}}">
    <style>
        body{
            background-image: url({{asset('assets/Images/Banner/category_banner.jpg')}});
            background-size: cover;
        }
        .material-view{
            filter: brightness(0.5);
            transition: filter 0.1s ease-in-out;
        }
    </style>
@endsection
@section('content')
    <div>
        <section id="list-hewan">
            <div class="container text-center">
                <div id="title-list1">
                    <h1>{{$category->name}}</h1>
                    <h3>Yuk, Belajar Dulu!</h3>
                </div>
                <div id="row-list" class="row">
                    @foreach ($materials as $material)
                        <a class="material-view" href="{{route('material.details', ['idx' => $loop->index, 'id' => $category->id])}}" style="background-image: url({{asset('assets/Images/MaterialThumbnail/' . $material->icon)}})" id="sapi">{{ $material->name }}</a>
                    @endforeach
                </div>
              </div>
        </section>

        <section id="quiz-level">
            <div id="grid">
                @auth
                    <h1>Apakah kamu siap bermain quiz?</h1>
                    <h4>Kamu sudah menyelesaikan</h4>
                    <p>{{$progress}} / {{$category->questions->count()}}</p>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="3" aria-valuemin="0" aria-valuemax="15">
                        <div class="progress-bar" style="width: {{$percentage}}%"></div>
                    </div>
                    @if ($percentage !== 100 && $mistakes === null )
                        <a href="{{route('question.details', ['idx' => $progress + 1, 'id' => $category->id])}}" class="btn btn-primary">Mulai Quiz</a>
                    @elseif ($progress > 0 || $mistakes !== null || $mistakes->mistakes > 0)
                        <a href="{{route('answer.retake', ['id' => $category->id])}}" class="btn btn-primary">Ulangi Quiz</a>
                    @else
                        <a href="{{route('answer.retake', ['id' => $category->id])}}" class="btn btn-primary">Ulangi Quiz</a>
                    @endif

                @endauth
                @guest
                    {{-- <img src="{{ asset('assets/Images/Logo/empty.png') }}" alt=""> --}}
                    <h3>Kamu belum mendaftar</h3>
                    <a href="{{route('login.page')}}" class="btn btn-primary">Masuk</a>
                @endguest
            </div>
        </section>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get all elements with the id 'sapi'
            var sapiElements = document.querySelectorAll('.material-view');

            // sapiElements.style.filter = 'brightness(.5)'

            // Add event listeners to each 'sapi' element
            sapiElements.forEach(function (element) {
                element.addEventListener('mouseenter', function () {
                    // On mouse enter, adjust brightness
                    this.style.filter = 'brightness(1)'; // Adjust the brightness value as needed
                    console.log('test');
                });

                element.addEventListener('mouseleave', function () {
                    // On mouse leave, reset brightness
                    this.style.filter = 'brightness(.5)';
                });
            });
        });
    </script>
@endsection
