@extends('layouts.main')
@section('container')
    <style>
        body{
            background-image: url("/assets/images/backgrounds/gradient.svg");
            background-size: auto;
            /*overflow: hidden;*/
        }

        .cardI{
            backdrop-filter: blur(1rem);
            min-height: 80vh;

        }

        .cb-1{
            background-color:rgba(255,255,255, 0.2);
        }.cb-2{
             background-color:rgba(255,255,255, 0);
         }
    </style>

    <div class="cardI cb-1 mt-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent mb-3 mx-3 mt-3 ">
            <div class="container-fluid">
                <a class="navbar-brand fw-semibold cursor-pointer" href="/task/task1/">Why JS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavs" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavs">
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item ">
                            <a class="nav-link {{$title == "Task 1"? "active text-primary": ""}} border-bottom-1 border-1 border-dark" aria-current="page" href="/task/task1">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{$title == "Reason"? "active text-primary": ""}}" href="/task/task1/reason">Reason</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{$title == "Popularity"? "active text-primary": ""}}" href="/task/task1/popularity">Popularity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{$title == "Learn"? "active text-primary": ""}}" href="/task/task1/learn">Learn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{$title == "Author"? "active text-primary": ""}}" href="/task/task1/author">Author</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="card-body ">
            @yield('content')
        </div>
    </div>

@endsection
