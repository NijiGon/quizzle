@extends('layouts.headfoot')
@section('title', 'Home')
@section('style')
    <link rel="stylesheet" href="{{asset('assets/Styles/home.css')}}">
    <style>
        .ctg-1{
            /* background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{asset('assets/Images/CategoryThumbnail/' . 'car_home.jpg')}}'); */
            background-size: cover;
            filter: brightness(0.5);
            transition: filter 0.1s ease-in-out;
        }
    </style>
@endsection
@section('content')
    <div>
        <audio src="{{asset('assets/Audio/home.m4a')}}" autoplay></audio>
        <section id="banner">
            <div id="banner-text" class="">
                <h1>Quizzle</h1>
                <h5>Belajar Sambil Bermain</h5>
            </div>
        </section>

        <section id="content">
            <div id="container">
                <h2>Main Apa Hari Ini?</h2>

                <div id="category">
                    <div class="container">
                        <div class="row align-items-start">
                            @foreach ($categories as $category)
                            <a href="{{route('category.details', ['id' => $category->id])}}" class="col ctg-1" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('{{asset('assets/Images/CategoryThumbnail/' . $category->image)}}'); background-size: cover;">
                                <h2 id="">{{ $category->name }}</h2>
                            </a>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get all elements with the id 'sapi'
            var sapiElements = document.querySelectorAll('.ctg-1');

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