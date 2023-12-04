@extends('layouts.headfoot')
@section('title', 'Profil')
@section('style')
    <link rel="stylesheet" href="{{asset('assets/Styles/profile.css')}}">
    <style>
    </style>
@endsection
@section('content')
    <div>
        <section id="profile">
            <div id="form-container">
                <div id="form-content" class="w-100">
                    <div id="form-title">
                        <h3>Profile</h3>
                    </div>
                    <form id="form-input" action="{{route('profile.update')}}" method="POST">
                        @csrf
                        <label for="namaLengkap" class="form-label">Nama</label>
                        <input type="text" name="name" id="namaLengkap" class="form-control" value="{{auth()->user()->name}}" aria-describedby="emailHelp" placeholder="Nama Lengkap" required>
        
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp" value="{{auth()->user()->email}}" placeholder="Email" required>

                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" autocomplete="off" aria-describedby="emailHelp" placeholder="Password" required>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div id="button">
                            <button href="{{route('profile.update')}}" type="submit" class="btn w-100">Update</button>
                        </div>
                    </form>
                    <form id="form-input" action="{{route('logout')}}" method="POST">
                        @csrf
                        <div id="button">
                            <button type="submit" class="btn w-100">Logout</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection